#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Read-only export of WordPress posts/pages to JSON (Elementor, SEO, taxonomies, links).
See summary output for detected table prefix and options.
"""

from __future__ import annotations

import argparse
import json
import os
import re
import sys
from collections import defaultdict
from dataclasses import dataclass, field
from typing import Any
from urllib.parse import urljoin, urlparse

try:
    import pymysql
except ImportError:
    print("Install dependencies: pip install -r scripts/requirements-wp-export.txt", file=sys.stderr)
    raise

from bs4 import BeautifulSoup

# --- Constants: excluded post types from "content" export (attachments still used for media) ---
SERVICIAL_POST_TYPES = frozenset(
    {
        "revision",
        "attachment",
        "nav_menu_item",
        "custom_css",
        "customize_changeset",
        "oembed_cache",
        "user_request",
        "wp_block",
        "wp_template",
        "wp_template_part",
        "wp_global_styles",
        "wp_navigation",
        "wp_font_family",
        "wp_font_face",
    }
)

EXPORT_POST_TYPES_DEFAULT = ("post", "page")

# Meta keys to never duplicate into selected_meta (large / duplicated elsewhere)
META_EXCLUDE_FROM_SELECTED = frozenset(
    {
        "_elementor_data",
        "_elementor_css",
        "_elementor_page_assets",
    }
)

def _is_selected_meta_key(key: str) -> bool:
    if key in META_EXCLUDE_FROM_SELECTED:
        return False
    if key.startswith("_yoast") or key.startswith("rank_math_"):
        return True
    if key in (
        "_thumbnail_id",
        "_wp_page_template",
        "_elementor_edit_mode",
        "_elementor_template_type",
        "_elementor_version",
        "_elementor_page_settings",
    ):
        return True
    if key.startswith("_elementor") and key not in META_EXCLUDE_FROM_SELECTED:
        return len(key) < 80
    return False


def strip_tags_to_plain(html: str | None) -> str:
    if not html:
        return ""
    soup = BeautifulSoup(html, "lxml")
    text = soup.get_text(separator="\n")
    text = re.sub(r"\n{3,}", "\n\n", text)
    return text.strip()


def extract_hrefs_and_imgs_from_html(html: str | None) -> tuple[list[str], list[str]]:
    if not html:
        return [], []
    soup = BeautifulSoup(html, "lxml")
    hrefs: list[str] = []
    imgs: list[str] = []
    for a in soup.find_all("a", href=True):
        hrefs.append(a["href"].strip())
    for use in soup.find_all(["img", "source"]):
        for attr in ("src", "data-src", "data-lazy-src"):
            if use.get(attr):
                imgs.append(use[attr].strip())
    # background-image in style (rough)
    for tag in soup.find_all(style=True):
        for m in re.findall(r"url\(\s*['\"]?([^'\")\s]+)", tag["style"], flags=re.I):
            if m.startswith("http") or m.startswith("//") or m.startswith("/"):
                imgs.append(m.strip())
    return hrefs, imgs


URL_RE = re.compile(r"https?://[^\s\"'<>]+|//[^\s\"'<>]+|/(?:wp-content/uploads/[^\s\"'<>]+)")

# Post content shorter than this (plain text) is treated as weak → prefer Elementor merge
POST_CONTENT_WEAK_PLAIN_CHARS = 48

IMAGE_URL_HINT = re.compile(r"\.(webp|png|jpe?g|gif|svg|avif)(\?|$)", re.I)


def extract_urls_from_strings(texts: list[str]) -> list[str]:
    out: list[str] = []
    for t in texts:
        if not t:
            continue
        for m in URL_RE.findall(t):
            out.append(m.rstrip(").,;]"))
    return out


def _dedupe_str(seq: list[str]) -> list[str]:
    seen: set[str] = set()
    out: list[str] = []
    for x in seq:
        x = x.strip()
        if not x or x in seen:
            continue
        seen.add(x)
        out.append(x)
    return out


def _looks_like_image_url(url: str) -> bool:
    u = url.lower().split("?")[0]
    if "/wp-content/uploads/" in u or "/uploads/" in u:
        return True
    return bool(IMAGE_URL_HINT.search(u))


# Keys in Elementor settings that usually carry human-readable text (exact, lowercased)
ELEMENTOR_EXACT_TEXT_KEYS = frozenset(
    {
        "title",
        "text",
        "editor",
        "html",
        "description",
        "caption",
        "alt",
        "content",
        "sub_heading",
        "heading",
        "button_text",
        "subtitle",
        "before_title",
        "after_title",
        "prefix",
        "suffix",
        "placeholder",
        "name",
        "label",
        "message",
        "answer",
        "tab_title",
        "tab_content",
        "item_title",
        "item_description",
        "address",
        "testimonial_content",
        "testimonial_name",
        "testimonial_job",
        "slide_title",
        "slide_description",
        "link_text",
    }
)


def _key_is_layout_or_style(key_lower: str) -> bool:
    if key_lower == "alt" or key_lower.endswith(".alt"):
        return False
    if any(
        x in key_lower
        for x in (
            "_color",
            "color_",
            "__globals__",
            "typography_",
            "font_family",
            "font_size",
            "font_weight",
            "line_height",
            "letter_spacing",
            "word_spacing",
            "border_",
            "box_shadow",
            "text_shadow",
            "padding",
            "margin",
            "flex_",
            "width",
            "height",
            "min_",
            "max_",
            "position",
            "align",
            "justify",
            "boxed_",
            "background_",
            "gradient",
            "icon_",
            "size",
            "unit",
            "gap",
            "z_index",
            "opacity",
            "transform",
            "css_id",
            "css_classes",
            "particle",
        )
    ):
        return True
    return False


def _key_suggests_text(key_lower: str) -> bool:
    if _key_is_layout_or_style(key_lower):
        return False
    if key_lower in ELEMENTOR_EXACT_TEXT_KEYS:
        return True
    for frag in (
        "title",
        "editor",
        "description",
        "caption",
        "content",
        "html",
        "subtit",
        "accordion",
        "tab_title",
        "tab_content",
        "slide_title",
        "slide_description",
        "icon_list",
        "testimonial",
        "counter",
        "blockquote",
        "alert_title",
        "cta",
    ):
        if frag in key_lower:
            return True
    if key_lower in ("text", "heading", "button_text", "link_text", "placeholder"):
        return True
    if key_lower.endswith("_text") and "context" not in key_lower:
        return True
    return False


@dataclass
class ElementorExtract:
    """Normalized extraction layer on top of raw _elementor_data JSON."""

    text_plain_chunks: list[str] = field(default_factory=list)
    html_chunks: list[str] = field(default_factory=list)
    links: list[str] = field(default_factory=list)
    image_urls: list[str] = field(default_factory=list)


def _consume_string_value(key_lower: str, s: str, out: ElementorExtract) -> None:
    s = s.strip()
    if not s:
        return
    if "<" in s and ">" in s:
        out.html_chunks.append(s)
        plain = strip_tags_to_plain(s)
        if plain:
            out.text_plain_chunks.append(plain)
        out.links.extend(extract_urls_from_strings([s]))
        return
    if _key_suggests_text(key_lower):
        out.text_plain_chunks.append(s)
    out.links.extend(extract_urls_from_strings([s]))


def _consume_value(key: str, value: Any, out: ElementorExtract, depth: int) -> None:
    if depth > 60:
        return
    lk = key.lower()
    if isinstance(value, str):
        _consume_string_value(lk, value, out)
        return
    if isinstance(value, dict):
        if "url" in value and isinstance(value["url"], str):
            u = value["url"].strip()
            if u.startswith("http") or u.startswith("//"):
                if _looks_like_image_url(u) or "upload" in u.lower():
                    out.image_urls.append(u)
                else:
                    out.links.append(u)
        for k2, v2 in value.items():
            if k2 == "__globals__":
                continue
            _consume_value(f"{key}.{k2}", v2, out, depth + 1)
        return
    if isinstance(value, list):
        for i, it in enumerate(value):
            _consume_value(f"{key}[{i}]", it, out, depth + 1)


def _consume_settings(settings: dict[str, Any], out: ElementorExtract) -> None:
    for k, v in settings.items():
        if k == "__globals__":
            continue
        _consume_value(str(k).lower(), v, out, 0)


def walk_elementor_structure(node: Any, out: ElementorExtract) -> None:
    if isinstance(node, dict):
        st = node.get("settings")
        if isinstance(st, dict):
            _consume_settings(st, out)
        ch = node.get("elements")
        if isinstance(ch, list):
            for child in ch:
                walk_elementor_structure(child, out)
    elif isinstance(node, list):
        for it in node:
            walk_elementor_structure(it, out)


def extract_elementor_data(raw: str | None) -> tuple[ElementorExtract, bool]:
    """Parse _elementor_data JSON and fill ElementorExtract."""
    if not raw or not raw.strip():
        return ElementorExtract(), False
    try:
        data = json.loads(raw)
    except json.JSONDecodeError:
        return ElementorExtract(), False
    out = ElementorExtract()
    if isinstance(data, list):
        for root in data:
            walk_elementor_structure(root, out)
    else:
        walk_elementor_structure(data, out)
    out.text_plain_chunks = _dedupe_str(out.text_plain_chunks)
    out.html_chunks = _dedupe_str(out.html_chunks)
    out.links = _dedupe_str(out.links)
    out.image_urls = _dedupe_str(out.image_urls)
    return out, True


def is_post_content_weak(html: str) -> bool:
    t = strip_tags_to_plain(html).strip()
    return len(t) < POST_CONTENT_WEAK_PLAIN_CHARS


def merge_content_with_elementor(
    post_html: str,
    excerpt: str,
    ex: ElementorExtract,
) -> tuple[str, str]:
    """
    Returns (content_html_raw, content_text_plain).
    If post HTML is empty or weak, primary content comes from Elementor extracts.
    """
    ph = post_html or ""
    base_plain = strip_tags_to_plain(ph)
    ex_plain = "\n\n".join(ex.text_plain_chunks)
    ex_html = "\n\n".join(ex.html_chunks)

    weak = (not ph.strip()) or is_post_content_weak(ph)

    if weak:
        text_out = ex_plain.strip()
        if not text_out and excerpt.strip():
            text_out = excerpt.strip()
        html_out = ex_html.strip() if ex_html.strip() else ph.strip()
        if not html_out and ph.strip():
            html_out = ph.strip()
        return html_out, text_out

    text_out = base_plain
    if ex_plain.strip():
        text_out = (base_plain + "\n\n" + ex_plain).strip()
    html_out = ph.strip()
    if ex_html.strip():
        html_out = (ph.strip() + "\n\n" + ex_html.strip()).strip()
    return html_out, text_out


def php_unserialize_string_values(s: str | None) -> list[str] | None:
    """Extract PHP-serialized string values (s:N:\"...\") from simple arrays."""
    if not s or not isinstance(s, str):
        return None
    t = s.strip()
    if not t.startswith("a:") or "{" not in t:
        return None
    parts = re.findall(r's:\d+:"([^"]*)"', t)
    return parts if parts else None


def normalize_seo_robots_value(raw: str | None) -> tuple[Any, str | None]:
    """Return (normalized, raw_copy). Normalized: list of strings, or original string."""
    if raw is None:
        return None, None
    r = raw.strip()
    if not r:
        return None, None
    parsed = php_unserialize_string_values(r)
    if parsed is not None:
        return parsed, r
    return r, r


SEO_TITLE_TEMPLATE_PATTERN = re.compile(r"%[a-zA-Z_]+%")


def is_seo_title_template(title: str | None) -> bool:
    if not title or not title.strip():
        return False
    return bool(SEO_TITLE_TEMPLATE_PATTERN.search(title))


def extract_seo_from_meta(meta: dict[str, str]) -> dict[str, Any]:
    """
    Rank Math first; Yoast fallback per field when RM empty.
    robots: PHP-serialized arrays normalized to list of strings.
    """
    yoast_fallback_fields: list[str] = []

    def get_rm(k: str) -> str:
        return (meta.get(k) or "").strip()

    def pick_title() -> tuple[str | None, str | None]:
        for k in ("rank_math_title", "rank_math_facebook_title"):
            v = get_rm(k)
            if v:
                return v, "rank_math_meta"
        for k in ("_yoast_wpseo_title", "_yoast_wpseo_opengraph-title"):
            v = (meta.get(k) or "").strip()
            if v:
                yoast_fallback_fields.append("title")
                return v, "yoast_postmeta"
        return None, None

    def pick_desc() -> tuple[str | None, str | None]:
        for k in ("rank_math_description", "rank_math_facebook_description"):
            v = get_rm(k)
            if v:
                return v, "rank_math_meta"
        for k in ("_yoast_wpseo_metadesc", "_yoast_wpseo_opengraph-description"):
            v = (meta.get(k) or "").strip()
            if v:
                yoast_fallback_fields.append("description")
                return v, "yoast_postmeta"
        return None, None

    def pick_focus() -> tuple[str | None, str | None]:
        v = get_rm("rank_math_focus_keyword")
        if v:
            return v, "rank_math_meta"
        v = (meta.get("_yoast_wpseo_focuskw") or "").strip()
        if v:
            yoast_fallback_fields.append("focus_keyword")
            return v, "yoast_postmeta"
        return None, None

    def pick_canon() -> tuple[str | None, str | None]:
        v = get_rm("rank_math_canonical_url")
        if v:
            return v, "rank_math_meta"
        v = (meta.get("_yoast_wpseo_canonical") or "").strip()
        if v:
            yoast_fallback_fields.append("canonical")
            return v, "yoast_postmeta"
        return None, None

    def pick_robots() -> tuple[Any, str | None, str | None]:
        v = get_rm("rank_math_robots")
        if v:
            norm, raw = normalize_seo_robots_value(v)
            return norm, "rank_math_meta", raw if isinstance(raw, str) else v
        v = (meta.get("_yoast_wpseo_meta-robots-noindex") or "").strip()
        if v:
            yoast_fallback_fields.append("robots")
            return v, "yoast_postmeta", v
        return None, None, None

    def pick_schema() -> tuple[str | None, str | None]:
        v = get_rm("rank_math_schema_type")
        if v:
            return v, "rank_math_meta"
        v = (meta.get("_yoast_wpseo_schema_page_type") or "").strip()
        if v:
            yoast_fallback_fields.append("schema_type")
            return v, "yoast_postmeta"
        return None, None

    title, s_title = pick_title()
    desc, s_desc = pick_desc()
    focus, s_focus = pick_focus()
    canon, s_canon = pick_canon()
    robots, s_robots, _rr = pick_robots()
    schema, s_schema = pick_schema()

    robots_raw = None
    if get_rm("rank_math_robots"):
        robots_raw = get_rm("rank_math_robots")

    sources = {
        "title": s_title,
        "description": s_desc,
        "focus_keyword": s_focus,
        "canonical": s_canon,
        "robots": s_robots,
        "schema_type": s_schema,
    }

    return {
        "title": title,
        "description": desc,
        "focus_keyword": focus,
        "canonical": canon,
        "robots": robots,
        "robots_raw": robots_raw,
        "schema_type": schema,
        "sources": sources,
        "title_is_template": is_seo_title_template(title),
        "yoast_fallback_fields": sorted(set(yoast_fallback_fields)),
    }


def normalize_url(url: str, base: str) -> str | None:
    u = url.strip()
    if not u or u.startswith("#") or u.startswith("mailto:") or u.startswith("tel:"):
        return None
    if u.startswith("//"):
        u = "https:" + u
    if u.startswith("/"):
        return urljoin(base.rstrip("/") + "/", u.lstrip("/"))
    if u.startswith("http"):
        return u
    return urljoin(base.rstrip("/") + "/", u)


def classify_link(url: str, home_parsed) -> str | None:
    try:
        p = urlparse(url)
    except Exception:
        return None
    if not p.scheme or p.scheme in ("http", "https"):
        pass
    else:
        return None
    host = (p.netloc or "").lower()
    if not host:
        return "internal"
    home_host = (home_parsed.netloc or "").lower()
    if host == home_host or host.endswith("." + home_host):
        return "internal"
    return "external"


def safe_slug_filename(slug: str | None, post_id: int) -> str:
    base = (slug or "").strip() or f"id-{post_id}"
    base = re.sub(r'[<>:"/\\|?*\x00-\x1f]', "-", base)
    base = re.sub(r"\s+", "-", base).strip("-")[:120]
    return base or f"id-{post_id}"


@dataclass
class PrefixResult:
    prefix: str
    """Prefixes that had the full core WP table set, sorted by row count (best first)."""
    qualified_candidates: list[str] = field(default_factory=list)
    """All prefixes inferred from `*_posts` table names (may include incomplete sets)."""
    all_prefix_candidates: list[str] = field(default_factory=list)


def detect_table_prefix(conn: pymysql.connections.Connection) -> PrefixResult:
    with conn.cursor() as cur:
        cur.execute("SHOW TABLES")
        tables = [r[0] for r in cur.fetchall()]
    suffix = "posts"
    all_prefixes = sorted({t[: -len(suffix)] for t in tables if t.endswith(suffix) and len(t) > len(suffix)})

    required_suffixes = ("posts", "postmeta", "users", "terms", "term_taxonomy", "term_relationships", "options")

    def score_prefix(pfx: str) -> int:
        if not re.match(r"^[A-Za-z0-9_]+$", pfx):
            return -1
        ok = all((pfx + s) in tables for s in required_suffixes)
        if not ok:
            return -1
        with conn.cursor() as cur:
            cur.execute(f"SELECT COUNT(*) FROM `{pfx}posts`")
            n = cur.fetchone()[0]
        return int(n)

    scored: list[tuple[int, str]] = []
    for pfx in all_prefixes:
        sc = score_prefix(pfx)
        if sc >= 0:
            scored.append((sc, pfx))

    if not scored:
        raise RuntimeError(
            "Could not detect WP table prefix: no candidate has full core tables "
            f"({', '.join(required_suffixes)}). Tables found: {len(tables)}"
        )

    scored.sort(key=lambda x: (-x[0], x[1]))
    best = scored[0][1]
    return PrefixResult(
        prefix=best,
        qualified_candidates=[p for _, p in scored],
        all_prefix_candidates=all_prefixes,
    )


def get_option(conn, prefix: str, name: str) -> str | None:
    t = f"`{prefix}options`"
    with conn.cursor() as cur:
        cur.execute(f"SELECT option_value FROM {t} WHERE option_name=%s LIMIT 1", (name,))
        row = cur.fetchone()
    return row[0] if row else None


def table_exists(conn, name: str) -> bool:
    with conn.cursor() as cur:
        cur.execute("SHOW TABLES LIKE %s", (name,))
        return cur.fetchone() is not None


def describe_table(conn, name: str) -> list[dict[str, Any]]:
    with conn.cursor(pymysql.cursors.DictCursor) as cur:
        cur.execute(f"DESCRIBE `{name}`")
        return list(cur.fetchall())


def fetch_post_types_overview(conn, prefix: str) -> tuple[dict[str, int], list[str]]:
    """All non-empty post_type counts; list of 'interesting' types for future passes."""
    t = f"`{prefix}posts`"
    with conn.cursor() as cur:
        cur.execute(
            f"""
            SELECT post_type, COUNT(*) AS c FROM {t}
            GROUP BY post_type ORDER BY c DESC
            """
        )
        rows = cur.fetchall()
    counts = {r[0]: int(r[1]) for r in rows if r[0]}
    interesting: list[str] = []
    junk = SERVICIAL_POST_TYPES | {"post", "page"}
    for pt, c in counts.items():
        if c <= 0:
            continue
        if pt in junk:
            continue
        if pt.startswith("wp_"):
            continue
        # Heuristic: custom public-ish types
        if pt not in ("inherit",):
            interesting.append(pt)
    return counts, sorted(set(interesting))


def verify_core_tables(conn, prefix: str) -> list[str]:
    required = ("posts", "postmeta", "users", "terms", "term_taxonomy", "term_relationships", "options")
    missing = []
    for s in required:
        if not table_exists(conn, prefix + s):
            missing.append(prefix + s)
    return missing


def load_posts_main(
    conn, prefix: str, types: tuple[str, ...]
) -> list[dict[str, Any]]:
    placeholders = ",".join(["%s"] * len(types))
    t = f"`{prefix}posts`"
    with conn.cursor(pymysql.cursors.DictCursor) as cur:
        cur.execute(
            f"""
            SELECT ID, post_author, post_date, post_date_gmt, post_modified, post_modified_gmt,
                   post_title, post_status, post_name, post_parent, guid, post_type, post_excerpt, post_content,
                   post_mime_type
            FROM {t}
            WHERE post_type IN ({placeholders})
              AND post_status NOT IN ('trash','auto-draft')
            ORDER BY ID ASC
            """,
            types,
        )
        return list(cur.fetchall())


def load_all_posts_minimal_for_permalinks(conn, prefix: str) -> dict[int, dict[str, Any]]:
    """post + page rows for parent chain (IDs, names, parents)."""
    t = f"`{prefix}posts`"
    with conn.cursor(pymysql.cursors.DictCursor) as cur:
        cur.execute(
            f"""
            SELECT ID, post_name, post_parent, post_type, post_status
            FROM {t}
            WHERE post_type IN ('post','page') AND post_status NOT IN ('trash','auto-draft')
            """
        )
        return {int(r["ID"]): dict(r) for r in cur.fetchall()}


def load_postmeta_map(conn, prefix: str, post_ids: list[int]) -> dict[int, dict[str, str]]:
    if not post_ids:
        return {}
    meta: dict[int, dict[str, str]] = defaultdict(dict)
    t = f"`{prefix}postmeta`"
    chunk = 300
    for i in range(0, len(post_ids), chunk):
        part = post_ids[i : i + chunk]
        ph = ",".join(["%s"] * len(part))
        with conn.cursor() as cur:
            cur.execute(
                f"SELECT post_id, meta_key, meta_value FROM {t} WHERE post_id IN ({ph})",
                part,
            )
            for pid, k, v in cur.fetchall():
                meta[int(pid)][k] = v if v is not None else ""
    return meta


def load_authors(conn, prefix: str, author_ids: set[int]) -> dict[int, str]:
    if not author_ids:
        return {}
    t = f"`{prefix}users`"
    ph = ",".join(["%s"] * len(author_ids))
    with conn.cursor(pymysql.cursors.DictCursor) as cur:
        cur.execute(f"SELECT ID, display_name FROM {t} WHERE ID IN ({ph})", tuple(author_ids))
        return {int(r["ID"]): (r["display_name"] or "") for r in cur.fetchall()}


def load_taxonomies_for_posts(
    conn, prefix: str, post_ids: list[int]
) -> dict[int, dict[str, list[str]]]:
    """term_taxonomy_id -> names grouped by taxonomy."""
    if not post_ids:
        return {}
    out: dict[int, dict[str, list[str]]] = defaultdict(lambda: defaultdict(list))
    rel = f"`{prefix}term_relationships`"
    tt = f"`{prefix}term_taxonomy`"
    terms = f"`{prefix}terms`"
    chunk = 400
    for i in range(0, len(post_ids), chunk):
        part = post_ids[i : i + chunk]
        ph = ",".join(["%s"] * len(part))
        q = f"""
        SELECT tr.object_id, tt.taxonomy, t.name
        FROM {rel} tr
        JOIN {tt} tt ON tt.term_taxonomy_id = tr.term_taxonomy_id
        JOIN {terms} t ON t.term_id = tt.term_id
        WHERE tr.object_id IN ({ph})
        """
        with conn.cursor() as cur:
            cur.execute(q, part)
            for oid, tax, name in cur.fetchall():
                oid = int(oid)
                out[oid][tax].append(name)
    # normalize to plain dicts
    return {k: {a: list(dict.fromkeys(v)) for a, v in v.items()} for k, v in out.items()}


def get_attachment_metadata(
    conn, prefix: str, attachment_id: int, home: str
) -> dict[str, Any | None]:
    tposts = f"`{prefix}posts`"
    tmeta = f"`{prefix}postmeta`"
    with conn.cursor(pymysql.cursors.DictCursor) as cur:
        cur.execute(
            f"SELECT ID, guid, post_title, post_excerpt, post_content FROM {tposts} WHERE ID=%s AND post_type='attachment' LIMIT 1",
            (attachment_id,),
        )
        row = cur.fetchone()
    if not row:
        return {"id": attachment_id, "url": None, "alt": None, "title": None, "caption": None}
    guid = row["guid"]
    with conn.cursor() as cur:
        cur.execute(
            f"SELECT meta_key, meta_value FROM {tmeta} WHERE post_id=%s",
            (attachment_id,),
        )
        mrows = cur.fetchall()
    meta = {k: v for k, v in mrows}
    alt = meta.get("_wp_attachment_image_alt") or None
    title = row["post_title"] or None
    caption = row["post_excerpt"] or None
    url = guid
    # Prefer file path meta -> URL
    fpath = meta.get("_wp_attached_file")
    if fpath:
        url = home.rstrip("/") + "/wp-content/uploads/" + fpath.replace("\\", "/").lstrip("/")
    return {
        "id": int(row["ID"]),
        "url": url,
        "guid": guid,
        "alt": alt,
        "title": title,
        "caption": caption,
    }


def build_permalink_candidate(
    post: dict[str, Any],
    home: str,
    permalink_structure: str,
    posts_by_id: dict[int, dict[str, Any]],
) -> str | None:
    pid = int(post["ID"])
    ptype = post["post_type"]
    slug = post["post_name"] or ""
    home = home.rstrip("/")

    if ptype == "page":
        parts: list[str] = []
        cur = post
        seen: set[int] = set()
        while int(cur.get("post_parent") or 0) and int(cur["ID"]) not in seen:
            seen.add(int(cur["ID"]))
            parent_id = int(cur["post_parent"])
            parent = posts_by_id.get(parent_id)
            if not parent:
                break
            parts.insert(0, parent.get("post_name") or str(parent_id))
            cur = parent
        parts.append(slug or str(pid))
        path = "/".join(p for p in parts if p)
        return f"{home}/{path}/" if not path.endswith("/") else home + "/" + path

    # post: use permalink_structure if contains tokens
    ps = permalink_structure or ""
    if not slug:
        return f"{home}/?p={pid}"
    from datetime import datetime

    try:
        dt = post["post_date"]
        if isinstance(dt, str):
            dtp = datetime.strptime(dt[:19], "%Y-%m-%d %H:%M:%S")
        else:
            dtp = dt
        year, month, day = dtp.year, dtp.month, dtp.day
    except Exception:
        year, month, day = 1970, 1, 1

    if "%postname%" in ps or (ps and "postname" in ps.lower()):
        out = ps
        out = out.replace("%year%", str(year)).replace("%monthnum%", f"{month:02d}").replace("%day%", f"{day:02d}")
        out = out.replace("%hour%", "00").replace("%minute%", "00").replace("%second%", "00")
        out = out.replace("%post_id%", str(pid)).replace("%postname%", slug)
        out = out.strip("/")
        return f"{home}/{out}/"
    # Plain pretty: /slug/
    return f"{home}/{slug}/"


def filter_selected_meta(meta: dict[str, str]) -> dict[str, str]:
    out: dict[str, str] = {}
    for k, v in meta.items():
        if k in META_EXCLUDE_FROM_SELECTED:
            continue
        if _is_selected_meta_key(k):
            # cap very long values
            if len(v) > 8000:
                out[k] = v[:8000] + "…[truncated]"
            else:
                out[k] = v
    return dict(sorted(out.items()))


def load_rank_math_link_stats(
    conn, prefix: str, table_name: str
) -> tuple[dict[int, dict[str, int]], list[str]]:
    """
    Returns per-post-id stats: internal_outgoing_rm, external_outgoing_rm, incoming_rm (if inferable).
    """
    notes: list[str] = []
    if not table_exists(conn, table_name):
        return {}, [f"Table `{table_name}` not found (Rank Math links optional)"]

    col_names = [row["Field"] for row in describe_table(conn, table_name)]

    with conn.cursor() as cur:
        cur.execute(f"SELECT * FROM `{table_name}` LIMIT 0")
        colnames = [d[0] for d in cur.description or ()]
    with conn.cursor() as cur:
        cur.execute(f"SELECT * FROM `{table_name}`")
        raw_rows = cur.fetchall()

    if not raw_rows:
        return {}, [f"Table `{table_name}` is empty"]

    rows = [dict(zip(colnames, r)) for r in raw_rows]
    col_set = set(colnames)

    outgoing_int: dict[int, int] = defaultdict(int)
    outgoing_ext: dict[int, int] = defaultdict(int)
    incoming: dict[int, int] = defaultdict(int)

    home = get_option(conn, prefix, "home") or ""
    hp = urlparse(home)

    src_col = None
    for name in ("post_id", "from_post_id", "source_post_id", "source_id"):
        if name in col_set:
            src_col = name
            break
    if src_col is None:
        prefer = [
            c
            for c in col_names
            if (
                ("post" in c.lower() and "from" in c.lower())
                or ("source" in c.lower() and "post" in c.lower())
            )
        ]
        src_col = prefer[0] if prefer else None
    if src_col is None:
        notes.append(f"Could not guess source column on `{table_name}`: {col_names}")
        return {}, notes

    tgt_url_candidates = [c for c in col_names if "url" in c.lower()]
    tgt_id_candidates: list[str] = []
    for c in col_names:
        cl = c.lower()
        if c in ("target_post_id", "to_post_id", "linked_post_id", "target_id"):
            tgt_id_candidates.append(c)
        elif "target" in cl and "post" in cl and "id" in cl:
            tgt_id_candidates.append(c)

    for r in rows:
        try:
            sid = int(r.get(src_col) or 0)
        except Exception:
            continue
        if sid <= 0:
            continue
        url = None
        for c in tgt_url_candidates:
            if r.get(c):
                url = str(r[c])
                break
        tid = None
        for c in tgt_id_candidates:
            if r.get(c) not in (None, "", 0, "0"):
                try:
                    tid = int(r[c])
                except Exception:
                    tid = None
                break
        if url:
            cls = classify_link(url, hp)
            if cls == "internal":
                outgoing_int[sid] += 1
            elif cls == "external":
                outgoing_ext[sid] += 1
        if tid:
            incoming[tid] += 1

    merged: dict[int, dict[str, int]] = {}
    all_ids = set(outgoing_int) | set(outgoing_ext) | set(incoming)
    for i in all_ids:
        merged[i] = {
            "rank_math_internal_outgoing": int(outgoing_int.get(i, 0)),
            "rank_math_external_outgoing": int(outgoing_ext.get(i, 0)),
            "rank_math_incoming": int(incoming.get(i, 0)),
        }
    notes.append(
        f"Rank Math links table `{table_name}` parsed: source=`{src_col}`, "
        f"url_cols={tgt_url_candidates}, target_id_cols={tgt_id_candidates}, rows={len(rows)}"
    )
    return merged, notes


def main() -> int:
    ap = argparse.ArgumentParser(description="Export WordPress posts/pages to JSON (read-only).")
    ap.add_argument("--host", default="127.0.0.1")
    ap.add_argument("--port", type=int, default=3306)
    ap.add_argument("--user", default="root")
    ap.add_argument("--password", default="")
    ap.add_argument("--database", default="wordpress")
    ap.add_argument("--out-dir", default="export")
    ap.add_argument(
        "--post-types",
        default=",".join(EXPORT_POST_TYPES_DEFAULT),
        help="Comma-separated post types to export (default: post,page)",
    )
    args = ap.parse_args()
    post_types = tuple(x.strip() for x in args.post_types.split(",") if x.strip())

    conn = pymysql.connect(
        host=args.host,
        port=args.port,
        user=args.user,
        password=args.password,
        database=args.database,
        charset="utf8mb4",
        cursorclass=pymysql.cursors.Cursor,
    )
    try:
        pr = detect_table_prefix(conn)
        prefix = pr.prefix
        missing = verify_core_tables(conn, prefix)
        if missing:
            raise RuntimeError("Missing core tables: " + ", ".join(missing))

        home = get_option(conn, prefix, "home") or ""
        siteurl = get_option(conn, prefix, "siteurl") or ""
        if not home and siteurl:
            home = siteurl
        permalink_structure = get_option(conn, prefix, "permalink_structure") or ""

        remarks: list[str] = []
        if home and siteurl and home.rstrip("/") != siteurl.rstrip("/"):
            remarks.append(f"home ({home}) and siteurl ({siteurl}) differ; using home as base for links.")

        post_type_counts, interesting_types = fetch_post_types_overview(conn, prefix)

        posts = load_posts_main(conn, prefix, post_types)
        post_ids = [int(p["ID"]) for p in posts]
        posts_by_id = load_all_posts_minimal_for_permalinks(conn, prefix)

        meta_by_post = load_postmeta_map(conn, prefix, post_ids)
        authors = load_authors(conn, prefix, {int(p["post_author"]) for p in posts})
        tax_by_post = load_taxonomies_for_posts(conn, prefix, post_ids)

        rm_table = prefix + "rank_math_internal_links"
        rank_stats, rm_notes = load_rank_math_link_stats(conn, prefix, rm_table)
        remarks.extend(rm_notes)

        # Discover Rank Math tables present
        rank_math_tables: list[str] = []
        with conn.cursor() as cur:
            cur.execute("SHOW TABLES LIKE %s", (prefix + "rank_math%",))
            rank_math_tables = [r[0] for r in cur.fetchall()]

        home_parsed = urlparse(home or siteurl or "http://localhost")

        items: list[dict[str, Any]] = []
        meta_keys_used: set[str] = set()
        tables_used_global = {
            prefix + "posts",
            prefix + "postmeta",
            prefix + "users",
            prefix + "terms",
            prefix + "term_taxonomy",
            prefix + "term_relationships",
            prefix + "options",
        }
        tables_used_global.update(rank_math_tables)

        elementor_count = 0
        seo_title_count = 0
        seo_desc_count = 0
        seo_template_title_count = 0
        yoast_fallback_posts = 0
        yoast_fallback_field_total = 0
        no_content = 0
        no_feat = 0

        export_dir = args.out_dir.rstrip("/\\")
        items_dir = os.path.join(export_dir, "items")

        os.makedirs(items_dir, exist_ok=True)

        rm_table_present = table_exists(conn, rm_table)

        for p in posts:
            pid = int(p["ID"])
            meta = meta_by_post.get(pid, {})
            meta_keys_used.update(meta.keys())

            content_html = p["post_content"] or ""
            excerpt = p["post_excerpt"] or ""

            el_raw = meta.get("_elementor_data")
            el_ex, el_ok = extract_elementor_data(el_raw) if el_raw else (ElementorExtract(), False)
            is_el = (meta.get("_elementor_edit_mode") == "builder") or bool(el_ok and el_raw)
            if is_el:
                elementor_count += 1

            content_html, content_plain_combined = merge_content_with_elementor(content_html, excerpt, el_ex)

            hrefs_html, imgs_html = extract_hrefs_and_imgs_from_html(content_html)
            hrefs_ex, imgs_ex = extract_hrefs_and_imgs_from_html(excerpt)
            all_el_blob = "\n".join(el_ex.text_plain_chunks + el_ex.html_chunks)
            hrefs_el = list(el_ex.links) + extract_urls_from_strings(el_ex.text_plain_chunks + el_ex.html_chunks)

            base_url = home or siteurl or "http://localhost"
            merged_hrefs: list[str] = []
            for h in hrefs_html + hrefs_ex + hrefs_el:
                nu = normalize_url(h, base_url)
                if nu:
                    merged_hrefs.append(nu)
            merged_imgs = []
            for im in imgs_html:
                nu = normalize_url(im, base_url)
                if nu:
                    merged_imgs.append(nu)
            for im in imgs_ex:
                nu = normalize_url(im, base_url)
                if nu:
                    merged_imgs.append(nu)
            merged_imgs.extend(extract_urls_from_strings([content_html, excerpt, all_el_blob]))
            for iu in el_ex.image_urls:
                nu = normalize_url(iu, base_url)
                if nu:
                    merged_imgs.append(nu)

            internal: list[str] = []
            external: list[str] = []
            seen_h: set[str] = set()
            for h in merged_hrefs:
                if h in seen_h:
                    continue
                seen_h.add(h)
                cl = classify_link(h, home_parsed)
                if cl == "internal":
                    internal.append(h)
                elif cl == "external":
                    external.append(h)

            # Images unique
            seen_img: set[str] = set()
            all_images: list[str] = []
            for g in merged_imgs:
                g = g.strip()
                if g and g not in seen_img:
                    seen_img.add(g)
                    all_images.append(g)

            thumb_id = None
            if meta.get("_thumbnail_id", "").strip().isdigit():
                thumb_id = int(meta["_thumbnail_id"])
            feat = None
            if thumb_id:
                feat = get_attachment_metadata(conn, prefix, thumb_id, home or siteurl or base_url)
            else:
                no_feat += 1

            tax = tax_by_post.get(pid, {})
            categories = tax.get("category", [])
            tags = tax.get("post_tag", [])
            other_tax = {k: v for k, v in tax.items() if k not in ("category", "post_tag")}

            seo = extract_seo_from_meta(meta)
            if seo.get("title"):
                seo_title_count += 1
            if seo.get("title_is_template"):
                seo_template_title_count += 1
            if seo.get("description"):
                seo_desc_count += 1
            yf = seo.get("yoast_fallback_fields") or []
            if yf:
                yoast_fallback_posts += 1
                yoast_fallback_field_total += len(yf)

            permalink_candidate = build_permalink_candidate(p, home or siteurl, permalink_structure, posts_by_id)

            if not (content_plain_combined or "").strip() and not excerpt.strip():
                no_content += 1

            rm_s = rank_stats.get(pid, {})
            internal_out = len(internal)
            external_out = len(external)

            featured_url = (feat or {}).get("url") if feat else None

            source_tables: set[str] = {
                prefix + "posts",
                prefix + "postmeta",
                prefix + "users",
                prefix + "terms",
                prefix + "term_taxonomy",
                prefix + "term_relationships",
                prefix + "options",
            }
            if rm_table_present:
                source_tables.add(rm_table)
            if thumb_id:
                source_tables.add(prefix + "posts")
                source_tables.add(prefix + "postmeta")

            record = {
                "id": pid,
                "post_type": p["post_type"],
                "post_status": p["post_status"],
                "title": p["post_title"] or "",
                "slug": p["post_name"] or "",
                "guid": p["guid"] or "",
                "permalink_candidate": permalink_candidate,
                "date_published": str(p["post_date"])[:19] if p["post_date"] else None,
                "date_modified": str(p["post_modified"])[:19] if p["post_modified"] else None,
                "author": {
                    "id": int(p["post_author"] or 0),
                    "name": authors.get(int(p["post_author"] or 0), ""),
                },
                "excerpt": excerpt,
                "content_html_raw": content_html,
                "content_text_plain": content_plain_combined,
                "featured_image_id": thumb_id,
                "featured_image_url": featured_url,
                "featured_image": feat,
                "all_image_urls": all_images,
                "categories": categories,
                "tags": tags,
                "taxonomies": {
                    "categories": categories,
                    "tags": tags,
                    "other": other_tax,
                },
                "seo": seo,
                "elementor_data_raw": el_raw if el_raw else None,
                "elementor": {
                    "is_elementor": bool(is_el),
                    "data_raw": el_raw if el_raw else None,
                    "extract_version": 2,
                    "text_extracted": el_ex.text_plain_chunks,
                    "html_extracted": el_ex.html_chunks,
                    "links_extracted": el_ex.links,
                    "image_urls_extracted": el_ex.image_urls,
                },
                "links": {
                    "internal": internal,
                    "external": external,
                    "incoming_count": int(rm_s.get("rank_math_incoming", 0)),
                    "internal_outgoing_count": internal_out,
                    "external_outgoing_count": external_out,
                    "rank_math_internal_outgoing": int(rm_s.get("rank_math_internal_outgoing", 0)),
                    "rank_math_external_outgoing": int(rm_s.get("rank_math_external_outgoing", 0)),
                },
                "selected_meta": filter_selected_meta(meta),
                "source_tables_used": sorted(source_tables),
            }

            items.append(record)

            fn = f"{pid}-{safe_slug_filename(p.get('post_name'), pid)}.json"
            with open(os.path.join(items_dir, fn), "w", encoding="utf-8") as f:
                json.dump(record, f, ensure_ascii=False, indent=2)

        summary = {
            "database": args.database,
            "table_prefix": prefix,
            "prefix_all_from_posts_tables": pr.all_prefix_candidates,
            "prefix_qualified_candidates": pr.qualified_candidates,
            "home": home or None,
            "siteurl": siteurl or None,
            "permalink_structure": permalink_structure or None,
            "remarks": remarks,
            "exported_post_types": list(post_types),
            "counts": {
                "total_exported": len(items),
                "post": sum(1 for x in items if x["post_type"] == "post"),
                "page": sum(1 for x in items if x["post_type"] == "page"),
                "with_elementor": elementor_count,
                "with_seo_title": seo_title_count,
                "with_seo_description": seo_desc_count,
                "with_seo_title_template_pattern": seo_template_title_count,
                "posts_with_yoast_fallback": yoast_fallback_posts,
                "yoast_fallback_field_uses_total": yoast_fallback_field_total,
                "elementor_extract_version": 2,
                "without_meaningful_content": no_content,
                "without_featured_image": no_feat,
            },
            "post_type_distribution_all": post_type_counts,
            "interesting_post_types_for_future_pass": interesting_types,
            "tables_used": sorted(tables_used_global),
            "meta_keys_seen_on_exported_posts": sorted(meta_keys_used),
            "rank_math_tables_found": rank_math_tables,
        }

        out_main = os.path.join(export_dir, "wp-content-export.json")
        with open(out_main, "w", encoding="utf-8") as f:
            json.dump({"items": items}, f, ensure_ascii=False, indent=2)

        summary_path = os.path.join(export_dir, "export-summary.json")
        with open(summary_path, "w", encoding="utf-8") as f:
            json.dump(summary, f, ensure_ascii=False, indent=2)

        print(
            json.dumps(
                {
                    "ok": True,
                    "export": out_main,
                    "summary": summary_path,
                    "items": items_dir,
                    "total": len(items),
                },
                ensure_ascii=False,
            )
        )
        return 0
    finally:
        conn.close()


if __name__ == "__main__":
    raise SystemExit(main())
