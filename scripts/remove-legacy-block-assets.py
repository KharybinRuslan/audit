from pathlib import Path
import re

root = Path(r'c:/OSPanel/domains/aud/pages')
target_dirs = [
    'msfo', 'konsalting', 'komplaens', 'kadrovyy-audit', 'hsep', 'forenzik',
    'finans', 'due-diligence', 'buhgalteriya', 'biznes-konsalting', 'audit'
]

patterns = [
    re.compile(r"\s*'/components/service-subpage-hero/service-subpage-hero\.css',?\r?\n"),
    re.compile(r"\s*'/components/mandatory-audit-segments/mandatory-audit-segments\.css',?\r?\n"),
    re.compile(r"\s*'/components/mandatory-audit-benefits/mandatory-audit-benefits\.css',?\r?\n"),
    re.compile(r"\s*'/components/mandatory-audit-audience/mandatory-audit-audience\.css',?\r?\n"),
    re.compile(r"\s*'/components/home-faq/home-faq\.css',?\r?\n"),
    re.compile(r"\s*<script defer src=\"/components/home-faq/home-faq\.js\"></script>\r?\n"),
]

updated = 0
for d in target_dirs:
    base = root / d
    if not base.exists():
        continue
    for p in base.rglob('*.php'):
        s = p.read_text(encoding='utf-8')
        ns = s
        for pat in patterns:
            ns = pat.sub('\n', ns)
        # normalize multiple blank lines lightly
        ns = re.sub(r'\n{3,}', '\n\n', ns)
        if ns != s:
            p.write_text(ns, encoding='utf-8')
            updated += 1
            print('updated', p)

print('total updated', updated)
