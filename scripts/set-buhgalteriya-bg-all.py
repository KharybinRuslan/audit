from pathlib import Path
import re

root = Path(r'c:/OSPanel/domains/aud/pages/buhgalteriya')
for p in root.glob('*.php'):
    s = p.read_text(encoding='utf-8')
    s = re.sub(r"\$serviceCoverHeroBgUrl\s*=\s*'[^']*';", "$serviceCoverHeroBgUrl = '/img/audit/buxgalteria.webp';", s)
    s = re.sub(r"\$auditFinalCtaBgUrl\s*=\s*'[^']*';", "$auditFinalCtaBgUrl = '/img/audit/buxgalteria.webp';", s)
    p.write_text(s, encoding='utf-8')
    print('updated', p.name)
