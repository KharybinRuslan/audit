from pathlib import Path
import re

root = Path(r'c:/OSPanel/domains/aud')
slugs = [
    'konsalting', 'finans', 'buhgalteriya', 'forenzik', 'kadrovyy-audit',
    'msfo', 'komplaens', 'biznes-konsalting', 'hsep', 'due-diligence'
]

for slug in slugs:
    page_path = root / 'pages' / f'{slug}.php'
    page = page_path.read_text(encoding='utf-8')

    m = re.search(
        r"^require __DIR__ \. '/" + re.escape(slug) + r"/_bundle-audit-vars\.php';\r?\n",
        page,
        re.M,
    )
    if not m:
        print(f'skip (no bundle require): {page_path}')
        continue

    bundle_path = root / 'pages' / slug / '_bundle-audit-vars.php'
    bundle = bundle_path.read_text(encoding='utf-8')
    bundle = re.sub(
        r"^<\\?php\\s*declare\\(strict_types=1\\);\\s*//[^\\n]*\\n\\s*",
        '',
        bundle,
        flags=re.S,
    ).strip()

    replacement = bundle + "\\n\\n"
    page = page[:m.start()] + replacement + page[m.end():]
    page_path.write_text(page, encoding='utf-8')
    print(f'inlined: {page_path}')
