from pathlib import Path

root = Path(r'c:/OSPanel/domains/aud/pages/audit')
files = sorted(root.glob('*.php'))

for p in files:
    s = p.read_text(encoding='utf-8')

    if "'/components/directions/directions.css'" not in s:
        s = s.replace(
            "        '/components/audit-faq/audit-faq.css',\n",
            "        '/components/audit-faq/audit-faq.css',\n        '/components/directions/directions.css',\n",
            1,
        )

    if "components/directions/directions.php" not in s:
        s = s.replace(
            "    <?php include __DIR__ . '/../../components/news-slider/news-slider.php'; ?>\n",
            "    <?php include __DIR__ . '/../../components/directions/directions.php'; ?>\n    <?php include __DIR__ . '/../../components/news-slider/news-slider.php'; ?>\n",
            1,
        )

    if "components/directions/directions.js" not in s:
        s = s.replace(
            "    <script defer src=\"/components/news-slider/news-slider.js\"></script>\n",
            "    <script defer src=\"/components/news-slider/news-slider.js\"></script>\n    <script defer src=\"/components/directions/directions.js\"></script>\n",
            1,
        )

    p.write_text(s, encoding='utf-8')
    print(f'updated {p.name}')
