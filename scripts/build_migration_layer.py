"""
Build migration/* from export-ready/* (read-only inputs).

Does not modify export/, export-derived/, or export-ready/.
"""

from __future__ import annotations

import argparse
import json
import re
from datetime import datetime, timezone
from collections import Counter
from pathlib import Path
from typing import Any

try:
    from bs4 import BeautifulSoup, Tag

    _BS4 = True
except ImportError:
    BeautifulSoup = None  # type: ignore[misc, assignment]
    Tag = object  # type: ignore[misc, assignment]
    _BS4 = False


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


def _strip_plain(s: str) -> str:
    return re.sub(r"\s+", " ", s or "").strip()


RE_ELEMENTOR_TEMPLATE = re.compile(r"\[elementor-template[^\]]*id\s*=\s*[\"'](\d+)[\"']", re.I)

# Подстроки, по которым ищем «подозрительную» разметку в HTML (после санитайза — без chat-блоков).
JUNK_MARKERS_DEFAULT = [
    "text-token-text-primary",
    "conversation-turn",
    "data-message-author-role",
    "agent-turn",
    "markdown prose",
    "data-testid=",
    "juice:gap",
]

# После удаления chat/UI контейнеров проверяем только остаточный шум.
JUNK_MARKERS_AFTER_CHAT_SANITIZE = [
    "data-testid=",
    "juice:gap",
]

# Те же маркеры, что режет санитайзер (атрибуты/class/id узла).
CHAT_UI_MARKERS_FOR_REMOVAL = [
    "text-token-text-primary",
    "conversation-turn",
    "data-message-author-role",
    "agent-turn",
    "markdown prose",
]


def _parse_soup(html: str) -> Any:
    if not _BS4 or BeautifulSoup is None:
        return None
    try:
        return BeautifulSoup(html, "lxml")
    except Exception:
        return BeautifulSoup(html, "html.parser")


def _tag_matches_chat_ui_junk(tag: Any) -> bool:
    if not _BS4 or not isinstance(tag, Tag):
        return False
    parts: list[str] = [tag.name or ""]
    for k, v in tag.attrs.items():
        parts.append(str(k).lower())
        if isinstance(v, list):
            parts.extend(str(x) for x in v)
        else:
            parts.append(str(v))
    blob = " ".join(parts).lower()
    for m in CHAT_UI_MARKERS_FOR_REMOVAL:
        if m.lower() in blob:
            return True
    return False


def sanitize_chat_ui_html(html: str, *, max_passes: int = 8) -> tuple[str, dict[str, Any]]:
    """
    Удаляет целые поддеревья DOM, у которых в атрибутах/class/id есть маркеры chat/UI вставки.
    Повторяет проход, пока находятся корневые «мусорные» узлы.
    """
    if not html or not html.strip():
        return html, {"removed_container_roots": 0, "patterns_matched": [], "skipped": True, "reason": "empty"}
    if not _BS4 or BeautifulSoup is None:
        return html, {"removed_container_roots": 0, "patterns_matched": [], "skipped": True, "reason": "beautifulsoup4_not_installed"}

    soup = _parse_soup(html)
    if soup is None:
        return html, {"removed_container_roots": 0, "patterns_matched": [], "skipped": True, "reason": "parse_failed"}

    removed_roots = 0
    patterns_hit: set[str] = set()
    length_before = len(html)

    for _ in range(max_passes):
        candidates = [t for t in soup.find_all(True) if _tag_matches_chat_ui_junk(t)]
        if not candidates:
            break
        roots: list[Any] = []
        for el in candidates:
            inner = False
            for other in candidates:
                if other is not el and el in other.descendants:
                    inner = True
                    break
            if not inner:
                roots.append(el)
        if not roots:
            break
        for el in roots:
            snippet = str(el).lower()
            for m in CHAT_UI_MARKERS_FOR_REMOVAL:
                if m.lower() in snippet:
                    patterns_hit.add(m)
            el.decompose()
            removed_roots += 1

    out = str(soup)
    return out, {
        "removed_container_roots": removed_roots,
        "patterns_matched": sorted(patterns_hit),
        "length_before": length_before,
        "length_after": len(out),
        "skipped": False,
    }


def _analyze_content_cleanup(
    html: str,
    plain: str,
    *,
    shortcode_html: str | None = None,
    suspicious_markers: list[str] | None = None,
) -> dict[str, Any]:
    html = html or ""
    plain = plain or ""
    markers = suspicious_markers if suspicious_markers is not None else JUNK_MARKERS_DEFAULT
    flags: list[str] = []
    elementor_ids: list[str] = []

    sc_src = shortcode_html if shortcode_html is not None else html
    for m in RE_ELEMENTOR_TEMPLATE.finditer(sc_src + "\n" + plain):
        elementor_ids.append(m.group(1))
    if elementor_ids:
        flags.append("elementor_template_shortcode")

    low = html.lower()
    junk_hits = [m for m in markers if m in low]
    if junk_hits:
        flags.append("suspicious_embedded_markup")
        flags.append(f"junk_markers:{','.join(junk_hits[:5])}")

    # Дублирующиеся крупные блоки в plain (простая эвристика)
    if len(plain) > 800:
        half = len(plain) // 2
        chunk = plain[:400]
        if chunk and plain[half : half + len(chunk)] == chunk:
            flags.append("possible_duplicate_text_block")

    return {
        "flags": sorted(set(flags)),
        "elementor_template_ids": sorted(set(elementor_ids)),
        "content_cleanup_needed": bool(flags),
    }


def _core_cleanup_flags(flags: list[str]) -> list[str]:
    """Без служебных junk_markers:* — для подсчёта «сколько разных признаков»."""
    return [f for f in flags if not f.startswith("junk_markers:")]


def _content_is_healthy(row: dict, *, meaningful_plain_chars: int) -> bool:
    """
    «Нормальный» контент для ослабления manual-review при одном shortcode:
    не помечен как no_meaningful_content, HTML непустой, plain достаточной длины
    или компенсируется объёмом HTML (как в export-ready).
    """
    notes = row.get("rebuild_notes") or []
    codes = row.get("issues_codes") or []
    if "no_meaningful_content" in notes or "no_meaningful_content" in codes:
        return False
    plain = _strip_plain(_safe_str(row.get("content_text_plain")))
    html = _safe_str(row.get("content_html_raw")).strip()
    if not html:
        return False
    if len(plain) >= meaningful_plain_chars:
        return True
    # короткий plain, но есть существенный HTML (Elementor / разметка)
    return len(html) >= 160


def _duplicate_permalink_ids(items: list[dict]) -> set[int]:
    by_url: Counter[str] = Counter()
    for it in items:
        u = _safe_str(it.get("normalized_permalink_https")).strip()
        if u:
            by_url[u] += 1
    dup_urls = {u for u, c in by_url.items() if c > 1}
    out: set[int] = set()
    for it in items:
        pid = it.get("id")
        u = _safe_str(it.get("normalized_permalink_https")).strip()
        if isinstance(pid, int) and u in dup_urls:
            out.add(pid)
    return out


def _decide_manual_review(
    cleanup: dict[str, Any],
    row: dict,
    *,
    duplicate_permalink_ids: set[int],
    meaningful_plain_chars: int,
) -> tuple[bool, list[str]]:
    """
    manual_review_required — только спорные/рискованные кейсы.
    Один [elementor-template ...] при здоровом контенте → не manual (остаётся cleanup-флаг).
    """
    flags = cleanup.get("flags") or []
    core = _core_cleanup_flags(flags)
    why: list[str] = []

    has_shortcode = "elementor_template_shortcode" in core
    has_suspicious = "suspicious_embedded_markup" in core
    has_dup_block = "possible_duplicate_text_block" in core

    # Критичные признаки — всегда manual
    if has_suspicious:
        why.append("suspicious_embedded_markup")
    if has_dup_block:
        why.append("possible_duplicate_text_block")
    if has_suspicious or has_dup_block:
        if has_shortcode:
            why.append("elementor_template_shortcode_also_present")
        return True, why

    if not has_shortcode:
        return False, []

    # Несколько разных cleanup-признаков (не только shortcode) → manual
    if set(core) != {"elementor_template_shortcode"}:
        why.append("multiple_cleanup_flags")
        for c in sorted(core):
            if c != "elementor_template_shortcode":
                why.append(f"cleanup_flag:{c}")
        return True, why

    pid = row.get("id")
    dup = isinstance(pid, int) and pid in duplicate_permalink_ids
    healthy = _content_is_healthy(row, meaningful_plain_chars=meaningful_plain_chars)
    ready_ok = bool(row.get("ready_for_rebuild"))

    # Один только [elementor-template ...] + нормальный контент → не manual
    if healthy and ready_ok and not dup:
        return False, []

    why.append("elementor_template_shortcode_requires_review")
    if not healthy:
        why.append("weak_or_incomplete_extracted_content")
    if dup:
        why.append("duplicate_permalink")
    if not ready_ok:
        why.append("ready_for_rebuild_false")
    return True, why


def _seo_needs_fix(row: dict) -> tuple[bool, list[str]]:
    """SEO «fix» только для шаблонного title и отсутствующего description; отсутствие кастомного title при живом post title — не блокер."""
    reasons: list[str] = []
    if row.get("seo_title_is_template"):
        reasons.append("template_seo_title")
    desc = row.get("seo_description")
    if desc is None or _safe_str(desc).strip() == "":
        reasons.append("missing_seo_description")
    return (bool(reasons), reasons)


def _title_effective_is_fallback(row: dict) -> bool:
    """True if effective title equals post title and raw is missing or template."""
    raw = row.get("seo_title_raw")
    eff = row.get("seo_title_effective")
    title = row.get("title")
    if raw is not None and _safe_str(raw).strip() != "" and not row.get("seo_title_is_template"):
        return False
    if raw and row.get("seo_title_is_template"):
        return True
    if raw is None or _safe_str(raw).strip() == "":
        return _safe_str(eff).strip() == _safe_str(title).strip()
    return False


def _media_state(row: dict) -> dict[str, Any]:
    featured = row.get("featured_image_url")
    all_imgs = row.get("all_image_urls") or []
    html = _safe_str(row.get("content_html_raw"))
    has_img_tag = bool(re.search(r"<img\b", html, re.I))
    image_urls_nonempty = bool([u for u in all_imgs if _safe_str(u).strip()])

    http_image = bool(
        re.search(r"src=[\"']http://auditte\.ru/", html, re.I)
        or any(_safe_str(u).lower().startswith("http://auditte.ru") for u in all_imgs)
    )

    if featured:
        return {
            "media_action_needed": http_image,
            "media_reasons": (["migrate_http_media"] if http_image else []),
            "media_case": "has_featured",
            "needs_pick_featured": False,
            "has_any_image": True,
        }

    if image_urls_nonempty or has_img_tag:
        return {
            "media_action_needed": True,
            "media_reasons": ["pick_featured_from_existing_content"] + (["migrate_http_media"] if http_image else []),
            "media_case": "missing_featured_has_inline_images",
            "needs_pick_featured": True,
            "has_any_image": True,
        }

    return {
        "media_action_needed": False,
        "media_reasons": [],
        "media_case": "no_images",
        "needs_pick_featured": False,
        "has_any_image": False,
    }


def _redirect_needed(row: dict) -> tuple[bool, list[str]]:
    reasons: list[str] = []
    codes = row.get("issues_codes") or []
    if "migrate_to_https" in codes:
        reasons.append("migrate_to_https_in_issues")
    if _safe_str(row.get("permalink_candidate")).lower().startswith("http://"):
        reasons.append("permalink_http")
    return (bool(reasons), reasons)


def _classify_bucket(
    *,
    technical_skip: bool,
    manual: bool,
    seo_fix: bool,
    media_fix: bool,
) -> str:
    if technical_skip:
        return "technical_skip"
    if manual:
        return "manual_review_required"
    if seo_fix and media_fix:
        return "ready_with_seo_and_media_fix"
    if seo_fix:
        return "ready_with_seo_fix"
    if media_fix:
        return "ready_with_media_fix"
    return "ready_without_changes"


def build_migration(repo_root: Path, out_dir: Path) -> None:
    ready_dir = repo_root / "export-ready"
    rebuild_path = ready_dir / "rebuild-manifest.json"
    redirects_path = ready_dir / "redirects-map.json"

    rebuild = _read_json(rebuild_path)
    redirects_obj = _read_json(redirects_path)

    items = rebuild.get("items") or []
    meta = rebuild.get("meta") or {}
    meaningful_plain = int(meta.get("meaningful_plain_chars") or 80)
    duplicate_permalink_ids = _duplicate_permalink_ids(items)

    enriched: list[dict[str, Any]] = []
    buckets: dict[str, list[dict[str, Any]]] = {
        "ready_without_changes": [],
        "ready_with_seo_fix": [],
        "ready_with_media_fix": [],
        "ready_with_seo_and_media_fix": [],
        "manual_review_required": [],
        "technical_skip": [],
    }

    seo_tasks: list[dict[str, Any]] = []
    media_tasks: list[dict[str, Any]] = []

    manual_before_total = 0
    manual_after_total = 0
    cleared_manual_ids: list[int] = []
    sanitization_records: list[dict[str, Any]] = []

    for row in items:
        pid = row.get("id")
        post_type = row.get("post_type")
        title = row.get("title")
        slug = row.get("slug")
        ready_rebuild = bool(row.get("ready_for_rebuild"))
        notes = row.get("rebuild_notes") or []

        raw_html = _safe_str(row.get("content_html_raw"))
        plain = _safe_str(row.get("content_text_plain"))

        sanitized_html, san_stats = sanitize_chat_ui_html(raw_html)

        # До/после: shortcode всегда с исходного HTML; подозрительная разметка — по соответствующему срезу HTML
        cleanup_before = _analyze_content_cleanup(
            raw_html,
            plain,
            shortcode_html=raw_html,
            suspicious_markers=JUNK_MARKERS_DEFAULT,
        )
        cleanup = _analyze_content_cleanup(
            sanitized_html,
            plain,
            shortcode_html=raw_html,
            suspicious_markers=JUNK_MARKERS_DEFAULT,
        )

        row_sanitized = {**row, "content_html_raw": sanitized_html}

        seo_fix, seo_reasons = _seo_needs_fix(row)
        media_info = _media_state(row)
        media_fix = bool(media_info.get("media_action_needed"))
        redir, redir_reasons = _redirect_needed(row)

        technical_skip = (not ready_rebuild) or ("technical_empty_record" in notes)

        manual_raw, _why_raw = _decide_manual_review(
            cleanup_before,
            row,
            duplicate_permalink_ids=duplicate_permalink_ids,
            meaningful_plain_chars=meaningful_plain,
        )
        manual, why_manual = _decide_manual_review(
            cleanup,
            row_sanitized,
            duplicate_permalink_ids=duplicate_permalink_ids,
            meaningful_plain_chars=meaningful_plain,
        )
        if manual_raw:
            manual_before_total += 1
        if manual:
            manual_after_total += 1
        if manual_raw and not manual and isinstance(pid, int):
            cleared_manual_ids.append(pid)

        core_flags = _core_cleanup_flags(cleanup.get("flags") or [])
        shortcode_only_cleanup = set(core_flags) == {"elementor_template_shortcode"}

        final_bucket = _classify_bucket(
            technical_skip=technical_skip,
            manual=manual,
            seo_fix=seo_fix,
            media_fix=media_fix,
        )

        record = {
            **row,
            "title": title,
            "content_html_sanitized": sanitized_html,
            "sanitization": san_stats,
            "migration_bucket": final_bucket,
            "final_migration_status": final_bucket,
            "seo_action_needed": seo_fix,
            "seo_action_reasons": seo_reasons,
            "seo_custom_title_missing": not bool(_safe_str(row.get("seo_title_raw")).strip()),
            "seo_title_effective_is_fallback": _title_effective_is_fallback(row),
            "media_action_needed": media_fix,
            "media_action_reasons": media_info.get("media_reasons") or [],
            "media_case": media_info.get("media_case"),
            "needs_pick_featured": media_info.get("needs_pick_featured"),
            "has_any_image": media_info.get("has_any_image"),
            "redirect_action_needed": redir,
            "redirect_action_reasons": redir_reasons,
            "content_cleanup_needed": cleanup["content_cleanup_needed"],
            "content_cleanup_flags": cleanup["flags"],
            "content_cleanup_flags_before_sanitization": cleanup_before["flags"],
            "manual_review_before_sanitization": manual_raw,
            "elementor_template_ids": cleanup["elementor_template_ids"],
            "why_manual_review": why_manual,
            "elementor_shortcode_only": shortcode_only_cleanup,
            "elementor_shortcode_skipped_manual_review": bool(shortcode_only_cleanup and not manual),
        }

        if san_stats.get("removed_container_roots"):
            sanitization_records.append(
                {
                    "id": pid,
                    "slug": slug,
                    "removed_container_roots": san_stats.get("removed_container_roots"),
                    "patterns_matched": san_stats.get("patterns_matched"),
                    "manual_review_before": manual_raw,
                    "manual_review_after": manual,
                }
            )

        enriched.append(record)
        buckets[final_bucket].append(
            {
                "id": pid,
                "post_type": post_type,
                "slug": slug,
                "title": title,
                "migration_bucket": final_bucket,
                "permalink_candidate": row.get("permalink_candidate"),
                "normalized_permalink_https": row.get("normalized_permalink_https"),
            }
        )

        if seo_fix:
            seo_tasks.append(
                {
                    "id": pid,
                    "post_type": post_type,
                    "slug": slug,
                    "title": title,
                    "tasks": seo_reasons,
                    "seo_title_is_template": bool(row.get("seo_title_is_template")),
                    "seo_title_raw": row.get("seo_title_raw"),
                    "seo_title_effective": row.get("seo_title_effective"),
                    "seo_title_effective_is_fallback": record["seo_title_effective_is_fallback"],
                    "seo_description": row.get("seo_description"),
                }
            )

        if media_fix:
            media_tasks.append(
                {
                    "id": pid,
                    "post_type": post_type,
                    "slug": slug,
                    "title": title,
                    "media_case": media_info.get("media_case"),
                    "reasons": media_info.get("media_reasons"),
                    "featured_image_url": row.get("featured_image_url"),
                    "all_image_urls_count": len(row.get("all_image_urls") or []),
                }
            )

    articles = [x for x in enriched if x.get("post_type") == "post"]
    pages = [x for x in enriched if x.get("post_type") == "page"]

    manual_review = [x for x in enriched if x.get("final_migration_status") == "manual_review_required"]
    technical_skip_items = [x for x in enriched if x.get("final_migration_status") == "technical_skip"]

    technical_skip_compact = [
        {
            "id": x.get("id"),
            "slug": x.get("slug"),
            "title": x.get("title"),
            "post_type": x.get("post_type"),
            "rebuild_notes": x.get("rebuild_notes"),
            "ready_for_rebuild": x.get("ready_for_rebuild"),
        }
        for x in technical_skip_items
    ]

    # Полный контекст по техническим пропускам (для аудита)
    technical_skip_review = list(technical_skip_items)

    cleanup_cases = [
        {
            "id": x.get("id"),
            "slug": x.get("slug"),
            "title": x.get("title"),
            "flags": x.get("content_cleanup_flags"),
            "elementor_template_ids": x.get("elementor_template_ids"),
            "manual_review": x.get("final_migration_status") == "manual_review_required",
        }
        for x in enriched
        if x.get("content_cleanup_needed")
    ]

    remaining_manual_cases = [
        {
            "id": x.get("id"),
            "slug": x.get("slug"),
            "title": x.get("title"),
            "post_type": x.get("post_type"),
            "why_manual_review": x.get("why_manual_review"),
            "content_cleanup_flags": x.get("content_cleanup_flags"),
        }
        for x in manual_review
    ]

    import_summary = {
        "meta": {
            "generated_at": _utc_now_iso(),
            "source": "export-ready/rebuild-manifest.json",
            "export_ready_meta": meta,
            "bucket_logic": {
                "version": 3,
                "meaningful_plain_chars": meaningful_plain,
                "notes": [
                    "Chat/UI HTML (text-token-text-primary, conversation-turn, …) удаляется санитайзером целыми контейнерами; пересчёт cleanup/manual по content_html_sanitized",
                    "Один [elementor-template] при здоровом контенте не ведёт в manual_review_required",
                    "manual_review: остаточный suspicious_embedded_markup, duplicate text, multiple cleanup flags, shortcode при слабом контенте/дубликате URL",
                ],
            },
            "sanitization": {
                "html_patterns_removed_containers": CHAT_UI_MARKERS_FOR_REMOVAL,
                "records_with_container_removals": len(sanitization_records),
                "manual_review_count_before_sanitization": manual_before_total,
                "manual_review_count_after_sanitization": manual_after_total,
                "manual_review_cleared_by_sanitization": len(cleared_manual_ids),
                "cleared_manual_review_post_ids": sorted(cleared_manual_ids),
            },
        },
        "counts_by_bucket": {k: len(v) for k, v in buckets.items()},
        "counts": {
            "total": len(enriched),
            "articles": len(articles),
            "pages": len(pages),
            "seo_tasks": len(seo_tasks),
            "media_tasks": len(media_tasks),
            "manual_review": len(manual_review),
            "technical_skip": len(technical_skip_items),
            "content_cleanup_flagged": len(cleanup_cases),
            "elementor_shortcode_only_skipped_manual_review": sum(
                1 for x in enriched if x.get("elementor_shortcode_skipped_manual_review")
            ),
        },
        "buckets": buckets,
        "content_cleanup_cases": cleanup_cases,
    }

    out_dir.mkdir(parents=True, exist_ok=True)
    _write_json(out_dir / "articles-ready.json", {"meta": import_summary["meta"], "items": articles})
    _write_json(out_dir / "pages-ready.json", {"meta": import_summary["meta"], "items": pages})
    _write_json(out_dir / "seo-tasks.json", {"meta": import_summary["meta"], "tasks": seo_tasks})
    _write_json(out_dir / "media-tasks.json", {"meta": import_summary["meta"], "tasks": media_tasks})
    _write_json(out_dir / "manual-review.json", {"meta": import_summary["meta"], "items": manual_review})
    _write_json(out_dir / "technical-skip.json", {"meta": import_summary["meta"], "items": technical_skip_compact})
    _write_json(out_dir / "technical-skip-review.json", {"meta": import_summary["meta"], "items": technical_skip_review})
    _write_json(
        out_dir / "redirects-final.json",
        {
            "meta": {
                "generated_at": _utc_now_iso(),
                "source": "export-ready/redirects-map.json",
            },
            "redirects": redirects_obj.get("redirects") or [],
        },
    )
    _write_json(out_dir / "import-summary.json", import_summary)
    _write_json(
        out_dir / "sanitization-report.json",
        {
            "meta": {
                "generated_at": _utc_now_iso(),
                "source": "export-ready/rebuild-manifest.json",
                "patterns_removed_as_dom_roots": CHAT_UI_MARKERS_FOR_REMOVAL,
            },
            "summary": import_summary["meta"]["sanitization"],
            "sanitized_records": sanitization_records,
            "remaining_manual_review_cases": remaining_manual_cases,
        },
    )


def main() -> None:
    ap = argparse.ArgumentParser(description="Build migration/* from export-ready/* (read-only).")
    ap.add_argument("--repo-root", default=".", help="Repository root")
    ap.add_argument("--out-dir", default="migration", help="Output directory")
    args = ap.parse_args()
    repo_root = Path(args.repo_root).resolve()
    out_dir = (repo_root / args.out_dir).resolve()
    build_migration(repo_root, out_dir)
    print(json.dumps({"ok": True, "out_dir": str(out_dir)}, ensure_ascii=False))


if __name__ == "__main__":
    main()
