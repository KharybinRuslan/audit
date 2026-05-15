from pathlib import Path
import re

root = Path(r'c:/OSPanel/domains/aud/pages')
slugs = [
    'konsalting', 'finans', 'buhgalteriya', 'forenzik', 'kadrovyy-audit',
    'msfo', 'komplaens', 'biznes-konsalting', 'hsep', 'due-diligence'
]

pat = re.compile(r"\n<\?php\s*declare\(strict_types=1\);\s*// Generated from service_pages_all\.php \(see scripts/gen-service-bundles-from-service-pages-all\.php\)\.\s*\n", re.S)

for slug in slugs:
    p = root / f'{slug}.php'
    s = p.read_text(encoding='utf-8')
    ns, n = pat.subn("\n", s, count=1)
    p.write_text(ns, encoding='utf-8')
    print(slug, 'cleaned', n)
