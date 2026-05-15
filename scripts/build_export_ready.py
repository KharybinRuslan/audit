import argparse
import json
import re
from collections import Counter, defaultdict
from datetime import datetime, timezone
from pathlib import Path
from typing import Any, Iterable
from urllib.parse import urlparse, urlunparse


DEFAULT_MEANINGFUL_PLAIN_CHARS = 80


def _utc_now_iso() -> str:
    return datetime.now(timezone.utc).isoformat(timespec="seconds").replace("+00:00", "Z")


def _read_json(path: Path) -> Any:
    with path.open("r", encoding="utf-8") as f:
        return json.load(f)


def _write_json(path: Path, obj: Any) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    with path.open("w", encoding="utf-8") as f:
        json.dump(obj, f, ensure_ascii=False, indent=2)
        f.write("\n")


def _safe_str(x: Any) -> str:
    if x is None:
        return ""
    if isinstance(x, str):
        return x
    return str(x)


def _strip_text(s: str) -> str:
    return re.sub(r"\s+", " ", s or "").strip()


def _looks_like_template_title(s: str) -> bool:
    # Rank Math template tokens are usually %title% / %page% / etc
    if not s:
        return False
    return bool(re.search(r"%[a-zA-Z0-9_]+%", s))


def _normalize_internal_https(url: str, site_netloc: str) -> str:
    if not url:
        return url
    try:
        p = urlparse(url)
    except Exception:
        return url
    if not p.scheme:
        return url
    if p.netloc.lower() != site_netloc.lower():
        return url
    if p.scheme.lower() == "https":
        return url
    if p.scheme.lower() != "http":
        return url
    return urlunparse(("https", p.netloc, p.path, p.params, p.query, p.fragment))


def _is_internal_url(url: str, site_netloc: str) -> bool:
    if not url:
        return False
    try:
        p = urlparse(url)
    except Exception:
        return False
    return (p.scheme in ("http", "https")) and (p.netloc.lower() == site_netloc.lower())


def _has_meaningful_content(item: dict, meaningful_plain_chars: int) -> bool:
    plain = _strip_text(_safe_str(item.get("content_text_plain")))
    html = _strip_text(_safe_str(item.get("content_html_raw")))
    if len(plain) >= meaningful_plain_chars:
        return True
    # tolerate short plain if HTML exists (Elementor-heavy pages)
    if len(html) >= 160:
        return True
    # Elementor extract layer can carry HTML/text even when content_* are weak
    el = item.get("elementor") or {}
    el_text = el.get("text_extracted") or []
    el_html = el.get("html_extracted") or []
    if any(_strip_text(_safe_str(x)) for x in el_text):
        return True
    if any(_strip_text(_safe_str(x)) for x in el_html):
        return True
    return False


def _is_technical_empty_record(item: dict) -> bool:
    # Heuristic for cases like id=1709 press-sluzhba: elementor enabled but no data and no content.
    plain = _strip_text(_safe_str(item.get("content_text_plain")))
    html = _strip_text(_safe_str(item.get("content_html_raw")))
    if plain or html:
        return False
    el = item.get("elementor") or {}
    if not bool(el.get("is_elementor")):
        return False
    if (el.get("data_raw") is not None) or (item.get("elementor_data_raw") is not None):
        return False
    if (el.get("text_extracted") or []) or (el.get("html_extracted") or []):
        return False
    # also empty links/images/taxonomies
    if (item.get("all_image_urls") or []) or (item.get("links", {}).get("internal") or []) or (item.get("links", {}).get("external") or []):
        return False
    if (item.get("categories") or []) or (item.get("tags") or []):
        return False
    return True


def _collect_taxonomy(items: list[dict]) -> dict[str, Any]:
    cats = defaultdict(list)
    tags = defaultdict(list)
    for it in items:
        pid = it.get("id")
        for c in it.get("categories") or []:
            cats[_safe_str(c)].append(pid)
        for t in it.get("tags") or []:
            tags[_safe_str(t)].append(pid)
    return {
        "categories": {
            "unique": len(cats),
            "counts": {k: len(v) for k, v in sorted(cats.items(), key=lambda kv: (-len(kv[1]), kv[0]))},
            "post_ids": cats,
        },
        "tags": {
            "unique": len(tags),
            "counts": {k: len(v) for k, v in sorted(tags.items(), key=lambda kv: (-len(kv[1]), kv[0]))},
            "post_ids": tags,
        },
    }


def _group_issues_by_post_id(issues: Iterable[dict]) -> dict[int, list[dict]]:
    out: dict[int, list[dict]] = defaultdict(list)
    for iss in issues:
        pid = iss.get("post_id")
        if isinstance(pid, int):
            out[pid].append(iss)
    return out


def _build_issues_clean(issues_obj: dict, site_netloc: str) -> dict[str, Any]:
    issues = issues_obj.get("issues") or []
    migrate_to_https: list[dict] = []
    url_normalization: list[dict] = []
    content_issues: list[dict] = []

    for iss in issues:
        code = iss.get("code")
        if code == "migrate_to_https":
            migrate_to_https.append(iss)
        elif code in ("http_instead_of_https",):
            url_normalization.append(iss)
        else:
            content_issues.append(iss)

    # build redirect candidates based on migrate_to_https values
    redirects = []
    for iss in migrate_to_https:
        v = _safe_str(iss.get("value"))
        if _is_internal_url(v, site_netloc) and v.startswith("http://"):
            redirects.append(
                {
                    "from": v,
                    "to": _normalize_internal_https(v, site_netloc),
                    "reason": iss.get("field") or "internal_http",
                    "post_id": iss.get("post_id"),
                    "slug": iss.get("slug"),
                }
            )

    return {
        "meta": {
            "generated_at": _utc_now_iso(),
            "source": "export-derived/issues.json",
            "site_netloc": site_netloc,
        },
        "summary": {
            "total": len(issues),
            "content_issues": len(content_issues),
            "url_normalization_issues": len(url_normalization),
            "migrate_to_https_issues": len(migrate_to_https),
            "redirect_candidates": len(redirects),
        },
        "content_issues": content_issues,
        "url_normalization": url_normalization,
        "migrate_to_https": migrate_to_https,
        "redirect_candidates": redirects,
    }


def _build_media_manifest(images_obj: dict, site_netloc: str) -> dict[str, Any]:
    urls = images_obj.get("urls") or []
    out = []
    for row in urls:
        u = _safe_str(row.get("url"))
        out.append(
            {
                "url": u,
                "normalized_url_https": _normalize_internal_https(u, site_netloc),
                "used_in_post_ids": row.get("used_in_post_ids") or [],
                "featured_for_post_ids": row.get("featured_for_post_ids") or [],
            }
        )
    return {
        "meta": {
            "generated_at": _utc_now_iso(),
            "source": "export-derived/images.json",
            "site_netloc": site_netloc,
        },
        "stats": images_obj.get("stats") or {},
        "urls": out,
    }


def _build_seo_manifest(seo_obj: dict, items_by_id: dict[int, dict]) -> dict[str, Any]:
    rows = seo_obj.get("rows") or []
    out_rows = []
    template_count = 0
    yoast_fallback_uses = 0
    for r in rows:
        pid = r.get("id")
        if not isinstance(pid, int):
            continue
        item = items_by_id.get(pid) or {}
        seo_title = r.get("seo_title")
        is_template = bool(r.get("seo_title_is_template")) or _looks_like_template_title(_safe_str(seo_title))
        if is_template:
            template_count += 1
        yoast_fallback_uses += len(r.get("yoast_fallback_fields") or [])
        out_rows.append(
            {
                "id": pid,
                "post_type": r.get("post_type"),
                "slug": r.get("slug"),
                "permalink_candidate": r.get("permalink_candidate"),
                "seo_title_raw": seo_title,
                "seo_title_is_template": is_template,
                "seo_title_effective": seo_title if (seo_title and not is_template) else item.get("title"),
                "seo_description": r.get("seo_description"),
                "seo_focus_keyword": r.get("seo_focus_keyword"),
                "seo_canonical": r.get("seo_canonical"),
                "seo_robots": r.get("seo_robots"),
                "seo_robots_raw": r.get("seo_robots_raw"),
                "yoast_fallback_fields": r.get("yoast_fallback_fields") or [],
                "sources": r.get("sources") or {},
            }
        )

    return {
        "meta": {
            "generated_at": _utc_now_iso(),
            "source": "export-derived/seo-summary.json",
        },
        "summary": {
            "total_rows": len(out_rows),
            "template_title_rows": template_count,
            "yoast_fallback_field_uses_total": yoast_fallback_uses,
        },
        "rows": out_rows,
    }


def build_export_ready(repo_root: Path, out_dir: Path, meaningful_plain_chars: int) -> None:
    export_dir = repo_root / "export"
    derived_dir = repo_root / "export-derived"

    export_summary = _read_json(export_dir / "export-summary.json")
    home = _safe_str(export_summary.get("home") or export_summary.get("siteurl") or "http://auditte.ru")
    site_netloc = urlparse(home).netloc or "auditte.ru"

    items_dir = export_dir / "items"
    item_paths = sorted(items_dir.glob("*.json"))
    items: list[dict] = []
    for p in item_paths:
        items.append(_read_json(p))

    items_by_id: dict[int, dict] = {it["id"]: it for it in items if isinstance(it.get("id"), int)}

    issues_obj = _read_json(derived_dir / "issues.json")
    seo_obj = _read_json(derived_dir / "seo-summary.json")
    images_obj = _read_json(derived_dir / "images.json")
    url_map_obj = _read_json(derived_dir / "url-map.json")

    issues_by_post = _group_issues_by_post_id(issues_obj.get("issues") or [])
    issues_clean = _build_issues_clean(issues_obj, site_netloc=site_netloc)
    seo_manifest = _build_seo_manifest(seo_obj, items_by_id=items_by_id)
    media_manifest = _build_media_manifest(images_obj, site_netloc=site_netloc)
    taxonomy_manifest = _collect_taxonomy(items)

    # permalink normalization + duplicate detection
    norm_permalink_by_id: dict[int, str] = {}
    for it in items:
        pid = it.get("id")
        if not isinstance(pid, int):
            continue
        cand = _safe_str(it.get("permalink_candidate"))
        norm_permalink_by_id[pid] = _normalize_internal_https(cand, site_netloc)
    permalink_counts = Counter(norm_permalink_by_id.values())

    # build rebuild-manifest
    rebuild_rows = []
    ready_true = 0
    ready_false = 0
    without_seo = 0
    without_featured = 0
    without_meaningful = 0
    template_titles = 0
    elementor_count = 0
    technical_empty_ids = []
    migrate_to_https_count = issues_clean["summary"]["migrate_to_https_issues"]

    # quick lookup for template flag from SEO manifest
    seo_by_id = {r["id"]: r for r in seo_manifest["rows"]}

    for it in items:
        pid = it.get("id")
        if not isinstance(pid, int):
            continue

        post_type = it.get("post_type")
        title = it.get("title")
        slug = it.get("slug")
        cand = _safe_str(it.get("permalink_candidate"))
        norm_cand = norm_permalink_by_id.get(pid) or _normalize_internal_https(cand, site_netloc)

        has_meaningful = _has_meaningful_content(it, meaningful_plain_chars)
        if not has_meaningful:
            without_meaningful += 1

        el = it.get("elementor") or {}
        is_elementor = bool(el.get("is_elementor"))
        if is_elementor:
            elementor_count += 1

        seo = it.get("seo") or {}
        seo_title_raw = seo.get("title")
        seo_title_is_template = bool(seo.get("title_is_template")) or _looks_like_template_title(_safe_str(seo_title_raw))
        seo_title_effective = seo_title_raw if (seo_title_raw and not seo_title_is_template) else title
        if seo_title_is_template:
            template_titles += 1
        if not seo_title_raw and not (seo.get("description") or ""):
            without_seo += 1

        featured_image_url = it.get("featured_image_url")
        if not featured_image_url:
            without_featured += 1

        all_images = it.get("all_image_urls") or []
        norm_featured = _normalize_internal_https(_safe_str(featured_image_url), site_netloc) if featured_image_url else None
        norm_all_images = [
            _normalize_internal_https(_safe_str(u), site_netloc) for u in all_images if _safe_str(u)
        ]

        links = it.get("links") or {}
        internal_links = links.get("internal") or []
        external_links = links.get("external") or []

        per_issues = issues_by_post.get(pid, [])
        issue_codes = [iss.get("code") for iss in per_issues if iss.get("code")]
        issue_codes = [c for c in issue_codes if isinstance(c, str)]

        duplicate_permalink = permalink_counts.get(norm_cand, 0) > 1 if norm_cand else False
        is_technical_empty = _is_technical_empty_record(it)
        if is_technical_empty:
            technical_empty_ids.append(pid)

        ready = True
        notes = []
        if not has_meaningful:
            ready = False
            notes.append("no_meaningful_content")
        if duplicate_permalink:
            ready = False
            notes.append("duplicate_permalink")
        if is_technical_empty:
            ready = False
            notes.append("technical_empty_record")

        if ready:
            ready_true += 1
        else:
            ready_false += 1

        rebuild_rows.append(
            {
                "id": pid,
                "post_type": post_type,
                "title": title,
                "slug": slug,
                "permalink_candidate": cand,
                "normalized_permalink_https": norm_cand,
                "date_published": it.get("date_published"),
                "content_text_plain": it.get("content_text_plain") or "",
                "content_html_raw": it.get("content_html_raw") or "",
                "featured_image_url": featured_image_url,
                "normalized_featured_image_url": norm_featured,
                "all_image_urls": all_images,
                "categories": it.get("categories") or [],
                "tags": it.get("tags") or [],
                "seo_title_raw": seo_title_raw,
                "seo_title_effective": seo_title_effective,
                "seo_title_is_template": bool(seo_by_id.get(pid, {}).get("seo_title_is_template", seo_title_is_template)),
                "seo_description": seo.get("description"),
                "seo_focus_keyword": seo.get("focus_keyword"),
                "seo_source_primary": (seo.get("sources") or {}).get("title"),
                "internal_links": internal_links,
                "external_links": external_links,
                "issues_codes": sorted(set(issue_codes)),
                "issues_count": len(per_issues),
                "ready_for_rebuild": ready,
                "rebuild_notes": notes,
            }
        )

    # redirects-map: derived from migrate_to_https issues + url-map (permalink candidates)
    redirects_map = {
        "meta": {
            "generated_at": _utc_now_iso(),
            "site_netloc": site_netloc,
            "sources": [
                "export-derived/issues.json:migrate_to_https",
                "export-derived/url-map.json:permalink_candidate",
            ],
        },
        "redirects": issues_clean.get("redirect_candidates") or [],
    }

    quality_summary = {
        "meta": {
            "generated_at": _utc_now_iso(),
            "source_exports": ["export/", "export-derived/"],
            "out_dir": str(out_dir).replace("\\", "/"),
        },
        "counts": {
            "total_items": len(items),
            "ready_for_rebuild_true": ready_true,
            "ready_for_rebuild_false": ready_false,
            "template_seo_title": template_titles,
            "materials_without_seo_title_and_description": without_seo,
            "materials_without_featured_image": without_featured,
            "materials_without_meaningful_content": without_meaningful,
            "elementor_materials": elementor_count,
            "migrate_to_https_urls": migrate_to_https_count,
            "technical_empty_records": len(technical_empty_ids),
        },
        "technical_empty_records": [
            {
                "id": pid,
                "slug": items_by_id.get(pid, {}).get("slug"),
                "title": items_by_id.get(pid, {}).get("title"),
                "post_type": items_by_id.get(pid, {}).get("post_type"),
                "permalink_candidate": items_by_id.get(pid, {}).get("permalink_candidate"),
            }
            for pid in sorted(technical_empty_ids)
        ],
        "notes": {
            "ready_for_rebuild_false_rules": [
                "no_meaningful_content",
                "duplicate_permalink",
                "technical_empty_record",
            ],
            "permalink_duplicates_count": sum(1 for _, c in permalink_counts.items() if c > 1),
        },
    }

    rebuild_manifest = {
        "meta": {
            "generated_at": _utc_now_iso(),
            "source": "export/items/*.json + export-derived/*",
            "site_home": home,
            "site_netloc": site_netloc,
            "meaningful_plain_chars": meaningful_plain_chars,
        },
        "items": rebuild_rows,
    }

    # Write outputs
    out_dir.mkdir(parents=True, exist_ok=True)
    _write_json(out_dir / "rebuild-manifest.json", rebuild_manifest)
    _write_json(out_dir / "seo-manifest.json", seo_manifest)
    _write_json(out_dir / "media-manifest.json", media_manifest)
    _write_json(out_dir / "redirects-map.json", redirects_map)
    _write_json(out_dir / "taxonomy-manifest.json", taxonomy_manifest)
    _write_json(out_dir / "issues-clean.json", issues_clean)
    _write_json(out_dir / "quality-summary.json", quality_summary)

    # keep url-map copy to allow downstream tooling to resolve ids/urls if needed
    _write_json(out_dir / "_source-url-map.json", url_map_obj)


def main() -> None:
    ap = argparse.ArgumentParser(description="Build export-ready/* from export/ and export-derived/ (read-only inputs).")
    ap.add_argument("--repo-root", default=".", help="Repository root (default: .)")
    ap.add_argument("--out-dir", default="export-ready", help="Output directory (default: export-ready)")
    ap.add_argument(
        "--meaningful-plain-chars",
        type=int,
        default=DEFAULT_MEANINGFUL_PLAIN_CHARS,
        help=f"Plain text chars threshold (default: {DEFAULT_MEANINGFUL_PLAIN_CHARS})",
    )
    args = ap.parse_args()

    repo_root = Path(args.repo_root).resolve()
    out_dir = (repo_root / args.out_dir).resolve()

    build_export_ready(
        repo_root=repo_root,
        out_dir=out_dir,
        meaningful_plain_chars=int(args.meaningful_plain_chars),
    )
    print(json.dumps({"ok": True, "out_dir": str(out_dir)}, ensure_ascii=False))


if __name__ == "__main__":
    main()

