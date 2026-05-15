#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Derive flat JSON/CSV artifacts from export/wp-content-export.json (read-only on export/).
Writes to export-derived/ — does not modify export/.
"""

from __future__ import annotations

import argparse
import csv
import json
import sys
from collections import defaultdict
from pathlib import Path
from typing import Any
from urllib.parse import urlparse

# --- Config ---
VERY_SHORT_TEXT_THRESHOLD = 80  # chars (after strip)


def _site_netloc_from_items(items: list[dict[str, Any]]) -> str:
    for i in items:
        p = i.get("permalink_candidate") or ""
        if isinstance(p, str) and p.startswith("http"):
            h = urlparse(p).netloc.lower()
            if h:
                return h
    return ""


def is_technical_namespace_http(url: str) -> bool:
    u = (url or "").lower()
    if "w3.org" in u and ("svg" in u or "xml" in u or "1999" in u):
        return True
    if "xmlsoap.org" in u or "schemas.microsoft.com" in u:
        return True
    if "xmlns" in u[:30]:
        return True
    return False


def classify_http_issue(url: str, site_netloc: str) -> str | None:
    if not isinstance(url, str) or not url.startswith("http://"):
        return None
    if is_technical_namespace_http(url):
        return None
    try:
        host = urlparse(url).netloc.lower()
    except Exception:
        return "http_instead_of_https"
    if site_netloc and host and (host == site_netloc or host.endswith("." + site_netloc)):
        return "migrate_to_https"
    return "http_instead_of_https"


def load_items(export_root: Path) -> list[dict[str, Any]]:
    main = export_root / "wp-content-export.json"
    if not main.is_file():
        raise FileNotFoundError(f"Expected {main}")
    with open(main, encoding="utf-8") as f:
        data = json.load(f)
    items = data.get("items")
    if not isinstance(items, list):
        raise ValueError("wp-content-export.json must contain top-level 'items' array")
    return items


def flat_row(item: dict[str, Any]) -> dict[str, Any]:
    seo = item.get("seo") or {}
    el = item.get("elementor") or {}
    links = item.get("links") or {}
    cats = item.get("categories")
    if cats is None:
        cats = (item.get("taxonomies") or {}).get("categories") or []
    tags = item.get("tags")
    if tags is None:
        tags = (item.get("taxonomies") or {}).get("tags") or []
    return {
        "id": item.get("id"),
        "post_type": item.get("post_type"),
        "title": item.get("title"),
        "slug": item.get("slug"),
        "permalink_candidate": item.get("permalink_candidate"),
        "date_published": item.get("date_published"),
        "category_list": list(cats) if isinstance(cats, list) else [],
        "tags_list": list(tags) if isinstance(tags, list) else [],
        "featured_image_url": item.get("featured_image_url"),
        "all_image_urls": list(item.get("all_image_urls") or []),
        "seo_title": seo.get("title"),
        "seo_description": seo.get("description"),
        "seo_focus_keyword": seo.get("focus_keyword"),
        "content_text_plain": item.get("content_text_plain") or "",
        "internal_links": list(links.get("internal") or []),
        "external_links": list(links.get("external") or []),
        "is_elementor": bool(el.get("is_elementor")),
    }


def has_meaningful_content(item: dict[str, Any]) -> bool:
    html = (item.get("content_html_raw") or "").strip()
    ex = (item.get("excerpt") or "").strip()
    el = item.get("elementor") or {}
    texts = el.get("text_extracted") or []
    htmls = el.get("html_extracted") or []
    if isinstance(texts, list) and any(str(t).strip() for t in texts):
        return True
    if isinstance(htmls, list) and any(str(t).strip() for t in htmls):
        return True
    return bool(html or ex)


def norm_empty(s: Any) -> bool:
    return s is None or (isinstance(s, str) and not s.strip())


def collect_issues_and_quality(
    items: list[dict[str, Any]],
    slug_counts: dict[str, list[int]],
    perm_counts: dict[str, list[int]],
) -> tuple[list[dict[str, Any]], dict[str, Any]]:
    issues: list[dict[str, Any]] = []
    very_short_threshold = VERY_SHORT_TEXT_THRESHOLD

    for item in items:
        pid = item.get("id")
        slug = item.get("slug") or ""
        ptype = item.get("post_type")
        seo = item.get("seo") or {}
        el = item.get("elementor") or {}
        title = seo.get("title")
        desc = seo.get("description")
        perm = item.get("permalink_candidate") or ""

        if norm_empty(title):
            issues.append(
                {
                    "code": "missing_seo_title",
                    "severity": "warning",
                    "post_id": pid,
                    "slug": slug,
                    "post_type": ptype,
                    "message": "Нет SEO title (seo.title пустой)",
                }
            )
        if norm_empty(desc):
            issues.append(
                {
                    "code": "missing_seo_description",
                    "severity": "warning",
                    "post_id": pid,
                    "slug": slug,
                    "post_type": ptype,
                    "message": "Нет SEO description (seo.description пустой)",
                }
            )
        if not item.get("featured_image_url") and not item.get("featured_image_id"):
            issues.append(
                {
                    "code": "missing_featured_image",
                    "severity": "info",
                    "post_id": pid,
                    "slug": slug,
                    "post_type": ptype,
                    "message": "Нет обложки (featured_image_url / id)",
                }
            )
        if not has_meaningful_content(item):
            issues.append(
                {
                    "code": "no_meaningful_content",
                    "severity": "warning",
                    "post_id": pid,
                    "slug": slug,
                    "post_type": ptype,
                    "message": "Нет содержимого: пустой post_content/excerpt и нет текста Elementor",
                }
            )
        if el.get("is_elementor"):
            te = el.get("text_extracted") or []
            th = el.get("html_extracted") or []
            if not (
                (isinstance(te, list) and any(str(x).strip() for x in te))
                or (isinstance(th, list) and any(str(x).strip() for x in th))
            ):
                issues.append(
                    {
                        "code": "elementor_empty_text_extracted",
                        "severity": "info",
                        "post_id": pid,
                        "slug": slug,
                        "post_type": ptype,
                        "message": "Elementor включён, но text_extracted и html_extracted пусты",
                    }
                )

    site_netloc = _site_netloc_from_items(items)

    # http vs https (noise URLs and SVG/XML namespaces excluded)
    for item in items:
        pid = item.get("id")
        slug = item.get("slug") or ""
        ptype = item.get("post_type")
        perm = item.get("permalink_candidate") or ""

        for label, val in (
            ("permalink_candidate", perm),
            ("featured_image_url", item.get("featured_image_url")),
        ):
            code = classify_http_issue(val if isinstance(val, str) else "", site_netloc)
            if not code:
                continue
            issues.append(
                {
                    "code": code,
                    "severity": "info",
                    "post_id": pid,
                    "slug": slug,
                    "post_type": ptype,
                    "message": f"http URL в {label}"
                    + (" (внутренний сайт → migrate_to_https)" if code == "migrate_to_https" else ""),
                    "field": label,
                    "value": (val or "")[:500],
                }
            )

        seen_http_img_issue = False
        for u in item.get("all_image_urls") or []:
            if not isinstance(u, str):
                continue
            code = classify_http_issue(u, site_netloc)
            if not code or seen_http_img_issue:
                continue
            seen_http_img_issue = True
            issues.append(
                {
                    "code": code,
                    "severity": "info",
                    "post_id": pid,
                    "slug": slug,
                    "post_type": ptype,
                    "message": "http:// в all_image_urls",
                    "field": "all_image_urls",
                    "value": u[:500],
                }
            )

    # Duplicate slugs (non-empty slug)
    for s, ids in slug_counts.items():
        if not s or len(ids) < 2:
            continue
        issues.append(
            {
                "code": "duplicate_slug",
                "severity": "warning",
                "post_id": None,
                "slug": s,
                "post_type": None,
                "message": f"Одинаковый slug у записей: {ids}",
                "post_ids": ids,
            }
        )

    # Duplicate permalink_candidate
    for p, ids in perm_counts.items():
        if not p or len(ids) < 2:
            continue
        issues.append(
            {
                "code": "duplicate_permalink_candidate",
                "severity": "warning",
                "post_id": None,
                "slug": None,
                "post_type": None,
                "message": f"Одинаковый permalink_candidate у записей: {ids}",
                "permalink_candidate": p,
                "post_ids": ids,
            }
        )

    # Quality aggregates
    n = len(items)
    posts = [i for i in items if i.get("post_type") == "post"]
    pages = [i for i in items if i.get("post_type") == "page"]

    def cnt_no_title(xs: list[dict[str, Any]]) -> int:
        return sum(1 for i in xs if norm_empty((i.get("seo") or {}).get("title")))

    def cnt_no_desc(xs: list[dict[str, Any]]) -> int:
        return sum(1 for i in xs if norm_empty((i.get("seo") or {}).get("description")))

    n_no_title = cnt_no_title(items)
    n_no_desc = cnt_no_desc(items)
    n_no_seo_both = sum(
        1
        for i in items
        if norm_empty((i.get("seo") or {}).get("title"))
        and norm_empty((i.get("seo") or {}).get("description"))
    )
    n_no_feat = sum(
        1 for i in items if not i.get("featured_image_url") and not i.get("featured_image_id")
    )
    n_no_text = sum(1 for i in items if not has_meaningful_content(i))
    n_el = sum(1 for i in items if (i.get("elementor") or {}).get("is_elementor"))
    n_very_short = 0
    for i in items:
        t = (i.get("content_text_plain") or "").strip()
        if len(t) < very_short_threshold:
            n_very_short += 1

    quality = {
        "source_export": "export/wp-content-export.json",
        "total_items": n,
        "very_short_text_threshold_chars": very_short_threshold,
        "without_seo_title": n_no_title,
        "without_seo_description": n_no_desc,
        "without_seo_title_and_description": n_no_seo_both,
        "posts_without_seo_title": cnt_no_title(posts),
        "posts_without_seo_description": cnt_no_desc(posts),
        "posts_without_seo_title_and_description": sum(
            1
            for i in posts
            if norm_empty((i.get("seo") or {}).get("title"))
            and norm_empty((i.get("seo") or {}).get("description"))
        ),
        "without_featured_image": n_no_feat,
        "without_meaningful_content": n_no_text,
        "with_elementor": n_el,
        "with_very_short_text_plain": n_very_short,
        "pages_count": len(pages),
        "posts_count": len(posts),
        "notes": [
            "with_very_short_text_plain: длина content_text_plain (после strip) < threshold",
            "duplicate_slug/duplicate_permalink_candidate также перечислены в issues",
        ],
    }

    return issues, quality


def build_url_map(items: list[dict[str, Any]]) -> dict[str, Any]:
    by_id: dict[str, Any] = {}
    perm_index: dict[str, list[int]] = defaultdict(list)
    slug_index: dict[str, list[int]] = defaultdict(list)
    for item in items:
        pid = item.get("id")
        if pid is None:
            continue
        sid = str(pid)
        by_id[sid] = {
            "id": pid,
            "post_type": item.get("post_type"),
            "slug": item.get("slug"),
            "title": item.get("title"),
            "permalink_candidate": item.get("permalink_candidate"),
        }
        sl = item.get("slug") or ""
        if sl:
            slug_index[sl].append(int(pid))
        pc = item.get("permalink_candidate") or ""
        if pc:
            perm_index[pc].append(int(pid))
    return {
        "by_id": by_id,
        "slug_to_ids": {k: v for k, v in slug_index.items() if len(v) > 1 or k},
        "permalink_to_ids": dict(perm_index),
    }


def build_seo_summary(items: list[dict[str, Any]], quality: dict[str, Any]) -> dict[str, Any]:
    rows: list[dict[str, Any]] = []
    for item in items:
        seo = item.get("seo") or {}
        rows.append(
            {
                "id": item.get("id"),
                "post_type": item.get("post_type"),
                "slug": item.get("slug"),
                "permalink_candidate": item.get("permalink_candidate"),
                "seo_title": seo.get("title"),
                "seo_title_is_template": seo.get("title_is_template"),
                "seo_description": seo.get("description"),
                "seo_focus_keyword": seo.get("focus_keyword"),
                "seo_canonical": seo.get("canonical"),
                "seo_robots": seo.get("robots"),
                "seo_robots_raw": seo.get("robots_raw"),
                "seo_schema_type": seo.get("schema_type"),
                "yoast_fallback_fields": seo.get("yoast_fallback_fields"),
                "sources": seo.get("sources"),
            }
        )
    return {
        "rows": rows,
        "content_quality": quality,
    }


def build_images_index(items: list[dict[str, Any]]) -> dict[str, Any]:
    url_to_posts: dict[str, set[int]] = defaultdict(set)
    url_featured: dict[str, set[int]] = defaultdict(set)

    for item in items:
        pid = item.get("id")
        if pid is None:
            continue
        pid = int(pid)
        fi = item.get("featured_image_url")
        if isinstance(fi, str) and fi.strip():
            u = fi.strip()
            url_to_posts[u].add(pid)
            url_featured[u].add(pid)
        for u in item.get("all_image_urls") or []:
            if isinstance(u, str) and u.strip():
                url_to_posts[u.strip()].add(pid)

    entries = []
    for url, pids in sorted(url_to_posts.items(), key=lambda x: x[0]):
        entries.append(
            {
                "url": url,
                "used_in_post_ids": sorted(pids),
                "featured_for_post_ids": sorted(url_featured.get(url, set())),
            }
        )

    return {
        "stats": {
            "unique_urls": len(entries),
            "total_reference_occurrences": sum(len(e["used_in_post_ids"]) for e in entries),
        },
        "urls": entries,
    }


def write_csv(path: Path, rows: list[dict[str, Any]]) -> None:
    if not rows:
        path.write_text("", encoding="utf-8")
        return
    fieldnames = [
        "id",
        "post_type",
        "title",
        "slug",
        "permalink_candidate",
        "date_published",
        "categories",
        "tags",
        "featured_image_url",
        "all_image_urls",
        "seo_title",
        "seo_description",
        "seo_focus_keyword",
        "content_text_plain",
        "internal_links",
        "external_links",
        "is_elementor",
    ]
    with open(path, "w", encoding="utf-8-sig", newline="") as f:
        w = csv.DictWriter(f, fieldnames=fieldnames, extrasaction="ignore")
        w.writeheader()
        for r in rows:
            out = dict(r)
            out["categories"] = "; ".join(r.get("category_list") or [])
            out["tags"] = "; ".join(r.get("tags_list") or [])
            out["all_image_urls"] = "; ".join(r.get("all_image_urls") or [])
            out["internal_links"] = "; ".join(r.get("internal_links") or [])
            out["external_links"] = "; ".join(r.get("external_links") or [])
            w.writerow(out)


def main() -> int:
    ap = argparse.ArgumentParser(description="Derive flat files from WordPress JSON export.")
    ap.add_argument(
        "--export-dir",
        type=Path,
        default=Path("export"),
        help="Directory containing wp-content-export.json (default: export)",
    )
    ap.add_argument(
        "--out-dir",
        type=Path,
        default=Path("export-derived"),
        help="Output directory (default: export-derived)",
    )
    args = ap.parse_args()

    export_dir = args.export_dir
    out_dir = args.out_dir
    out_dir.mkdir(parents=True, exist_ok=True)

    items = load_items(export_dir)
    flat = [flat_row(i) for i in items]

    articles = [r for r in flat if r.get("post_type") == "post"]
    pages = [r for r in flat if r.get("post_type") == "page"]

    slug_counts: dict[str, list[int]] = defaultdict(list)
    perm_counts: dict[str, list[int]] = defaultdict(list)
    for item in items:
        pid = item.get("id")
        if pid is None:
            continue
        s = item.get("slug") or ""
        if s:
            slug_counts[s].append(int(pid))
        p = item.get("permalink_candidate") or ""
        if p:
            perm_counts[p].append(int(pid))

    issues, quality = collect_issues_and_quality(items, slug_counts, perm_counts)

    url_map = build_url_map(items)
    seo_summary = build_seo_summary(items, quality)
    images = build_images_index(items)

    (out_dir / "articles.json").write_text(
        json.dumps(articles, ensure_ascii=False, indent=2), encoding="utf-8"
    )
    (out_dir / "pages.json").write_text(
        json.dumps(pages, ensure_ascii=False, indent=2), encoding="utf-8"
    )
    (out_dir / "url-map.json").write_text(
        json.dumps(url_map, ensure_ascii=False, indent=2), encoding="utf-8"
    )
    (out_dir / "seo-summary.json").write_text(
        json.dumps(seo_summary, ensure_ascii=False, indent=2), encoding="utf-8"
    )
    (out_dir / "images.json").write_text(
        json.dumps(images, ensure_ascii=False, indent=2), encoding="utf-8"
    )
    issues_payload = {
        "quality_summary": quality,
        "issues": issues,
        "issue_counts_by_code": {},
    }
    by_code: dict[str, int] = defaultdict(int)
    for iss in issues:
        c = iss.get("code") or "unknown"
        by_code[c] += 1
    issues_payload["issue_counts_by_code"] = dict(sorted(by_code.items()))

    (out_dir / "issues.json").write_text(
        json.dumps(issues_payload, ensure_ascii=False, indent=2), encoding="utf-8"
    )
    write_csv(out_dir / "content-index.csv", flat)

    print(
        json.dumps(
            {
                "ok": True,
                "out_dir": str(out_dir.resolve()),
                "counts": {
                    "articles": len(articles),
                    "pages": len(pages),
                    "total": len(flat),
                    "issues": len(issues),
                },
            },
            ensure_ascii=False,
        )
    )
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
