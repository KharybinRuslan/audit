from pathlib import Path

root = Path(r'c:/OSPanel/domains/aud/pages')
target_dirs = ['msfo','konsalting','komplaens','kadrovyy-audit','hsep','forenzik','finans','due-diligence','buhgalteriya','biznes-konsalting','audit']
repls = [
    "'/components/service-subpage-hero/service-subpage-hero.css'",
    "'/components/mandatory-audit-segments/mandatory-audit-segments.css'",
    "'/components/mandatory-audit-benefits/mandatory-audit-benefits.css'",
    "'/components/mandatory-audit-audience/mandatory-audit-audience.css'",
    "'/components/home-faq/home-faq.css'",
    '<script defer src="/components/home-faq/home-faq.js"></script>',
]
count=0
for d in target_dirs:
    base=root/d
    if not base.exists():
        continue
    for p in base.rglob('*.php'):
        s=p.read_text(encoding='utf-8')
        ns=s
        for r in repls:
            ns=ns.replace(r,'')
        if ns!=s:
            p.write_text(ns,encoding='utf-8')
            count += 1
print('updated',count)
