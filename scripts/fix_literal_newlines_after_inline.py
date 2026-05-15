from pathlib import Path

root = Path(r'c:/OSPanel/domains/aud/pages')
slugs = [
    'konsalting', 'finans', 'buhgalteriya', 'forenzik', 'kadrovyy-audit',
    'msfo', 'komplaens', 'biznes-konsalting', 'hsep', 'due-diligence'
]
for slug in slugs:
    p = root / f'{slug}.php'
    s = p.read_text(encoding='utf-8')
    s = s.replace('];\\n\\nrequire __DIR__', '];\n\nrequire __DIR__')
    p.write_text(s, encoding='utf-8')
    print('fixed newline literal', slug)
