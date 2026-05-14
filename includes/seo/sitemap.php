<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/site-config.php';
require_once dirname(__DIR__) . '/news/repository.php';
require_once dirname(__DIR__) . '/pages/repository.php';

if (!function_exists('aud_seo_pages_directory')) {
    function aud_seo_pages_directory(): string
    {
        return dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'pages';
    }
}

if (!function_exists('aud_seo_skip_pages_file')) {
    function aud_seo_skip_pages_file(string $relativeFromPages): bool
    {
        $relativeFromPages = str_replace('\\', '/', $relativeFromPages);
        $base = basename($relativeFromPages);
        if ($base === '' || $base[0] === '_') {
            return true;
        }
        if (preg_match('#^news/#', $relativeFromPages)) {
            return true;
        }

        return false;
    }
}

if (!function_exists('aud_seo_path_from_pages_file')) {
    /**
     * ЧПУ из пути pages/foo.php или pages/dir/bar.php; null если файл не публичная страница.
     */
    function aud_seo_path_from_pages_file(string $fullPath): ?string
    {
        $root = aud_seo_pages_directory();
        $root = rtrim(str_replace('\\', '/', $root), '/');
        $full = str_replace('\\', '/', $fullPath);
        if (!str_starts_with($full, $root . '/') || !str_ends_with(strtolower($full), '.php')) {
            return null;
        }
        $rel = substr($full, strlen($root) + 1);
        if (aud_seo_skip_pages_file($rel)) {
            return null;
        }
        $parts = explode('/', $rel);
        if (count($parts) === 1) {
            $slug = basename($parts[0], '.php');

            return '/' . rawurlencode($slug);
        }
        if (count($parts) === 2) {
            $dir = $parts[0];
            $file = basename($parts[1], '.php');

            return '/' . rawurlencode($dir) . '/' . rawurlencode($file);
        }

        return null;
    }
}

if (!function_exists('aud_seo_lastmod_from_timestamp')) {
    function aud_seo_lastmod_from_timestamp(int $ts): string
    {
        return gmdate('Y-m-d', $ts);
    }
}

if (!function_exists('aud_seo_collect_static_page_entries')) {
    /**
     * @return list<array{path: string, lastmod: string}>
     */
    function aud_seo_collect_static_page_entries(): array
    {
        $root = aud_seo_pages_directory();
        if (!is_dir($root)) {
            return [];
        }
        $out = [];
        $rii = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
        );
        /** @var SplFileInfo $fi */
        foreach ($rii as $fi) {
            if (!$fi->isFile() || strtolower($fi->getExtension()) !== 'php') {
                continue;
            }
            $path = aud_seo_path_from_pages_file($fi->getPathname());
            if ($path === null) {
                continue;
            }
            $mtime = @filemtime($fi->getPathname()) ?: time();
            $out[] = ['path' => $path, 'lastmod' => aud_seo_lastmod_from_timestamp((int) $mtime)];
        }

        return $out;
    }
}

if (!function_exists('aud_seo_collect_news_entries')) {
    /**
     * @return list<array{path: string, lastmod: string}>
     */
    function aud_seo_collect_news_entries(): array
    {
        $out = [];
        foreach (getAllNewsPosts() as $row) {
            $slug = isset($row['slug']) ? trim((string) $row['slug']) : '';
            if ($slug === '') {
                continue;
            }
            $raw = isset($row['date_published']) ? trim((string) $row['date_published']) : '';
            $ts = $raw !== '' ? strtotime($raw) : false;
            $lastmod = is_int($ts) && $ts !== false
                ? aud_seo_lastmod_from_timestamp($ts)
                : aud_seo_lastmod_from_timestamp(time());
            $out[] = [
                'path' => '/news/' . rawurlencode($slug),
                'lastmod' => $lastmod,
            ];
        }

        return $out;
    }
}

if (!function_exists('aud_seo_sitemap_entries')) {
    /**
     * Все публичные URL: главная, статические страницы из pages/, новости.
     *
     * @return list<array{path: string, lastmod: string}>
     */
    function aud_seo_sitemap_entries(): array
    {
        $indexPath = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'index.php';
        $homeTs = is_readable($indexPath) ? (int) @filemtime($indexPath) : time();
        $merged = [
            ['path' => '/', 'lastmod' => aud_seo_lastmod_from_timestamp($homeTs)],
        ];
        foreach (aud_seo_collect_static_page_entries() as $row) {
            $merged[] = $row;
        }
        foreach (aud_seo_collect_news_entries() as $row) {
            $merged[] = $row;
        }
        $byPath = [];
        foreach ($merged as $row) {
            $p = $row['path'];
            if (!isset($byPath[$p]) || $row['lastmod'] > $byPath[$p]['lastmod']) {
                $byPath[$p] = $row;
            }
        }
        $list = array_values($byPath);
        usort($list, static function (array $a, array $b): int {
            return strcmp($a['path'], $b['path']);
        });

        return $list;
    }
}

if (!function_exists('aud_seo_xml_escape')) {
    function aud_seo_xml_escape(string $s): string
    {
        return htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('aud_seo_build_sitemap_xml')) {
    function aud_seo_build_sitemap_xml(): string
    {
        $base = rtrim(aud_site_public_base_url(), '/');
        $lines = [
            '<?xml version="1.0" encoding="UTF-8"?>',
            '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
        ];
        foreach (aud_seo_sitemap_entries() as $row) {
            $loc = aud_seo_xml_escape($base . $row['path']);
            $lines[] = '  <url>';
            $lines[] = '    <loc>' . $loc . '</loc>';
            $lines[] = '    <lastmod>' . aud_seo_xml_escape($row['lastmod']) . '</lastmod>';
            $lines[] = '  </url>';
        }
        $lines[] = '</urlset>';

        return implode("\n", $lines) . "\n";
    }
}

if (!function_exists('aud_seo_build_robots_txt')) {
    function aud_seo_build_robots_txt(): string
    {
        $base = rtrim(aud_site_public_base_url(), '/');
        $lines = [
            'User-agent: *',
            'Allow: /',
            '',
            'Disallow: /pages/',
            'Disallow: /includes/',
            'Disallow: /components/',
            'Disallow: /migration/',
            'Disallow: /export-ready/',
            'Disallow: /export-derived/',
            'Disallow: /tools/',
            'Disallow: /vendor/',
            'Disallow: /.cursor/',
            'Disallow: /css/critical-shell.php',
            '',
            'Sitemap: ' . $base . '/sitemap.xml',
            '',
        ];

        return implode("\n", $lines);
    }
}

if (!function_exists('aud_seo_sitemap_normalize_path')) {
    function aud_seo_sitemap_normalize_path(string $path): string
    {
        $path = trim($path);
        if ($path === '' || $path === '/') {
            return '/';
        }

        return '/' . trim($path, '/');
    }
}

if (!function_exists('aud_seo_sitemap_href_to_label_map')) {
    /**
     * Подписи для URL: меню шапки + базовые страницы.
     *
     * @return array<string, string>
     */
    function aud_seo_sitemap_href_to_label_map(): array
    {
        static $map = null;
        if ($map !== null) {
            return $map;
        }
        $map = [
            '/' => 'Главная',
            '/about' => 'О компании',
            '/services' => 'Услуги',
            '/contacts' => 'Контакты',
            '/news' => 'Новости',
            '/politika-konfidencialnosti' => 'Политика конфиденциальности',
            '/karta-sajta' => 'Карта сайта',
        ];
        $menuFile = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'site-header' . DIRECTORY_SEPARATOR . 'site-header-menu-data.php';
        if (is_readable($menuFile)) {
            require_once $menuFile;
            // Файл меню при include из функции задаёт локальную $siteHeaderMenuServices;
            // при include из шапки — глобальную. Не полагаться только на $GLOBALS.
            $menu = null;
            if (isset($siteHeaderMenuServices) && is_array($siteHeaderMenuServices)) {
                $menu = $siteHeaderMenuServices;
            } elseif (isset($GLOBALS['siteHeaderMenuServices']) && is_array($GLOBALS['siteHeaderMenuServices'])) {
                $menu = $GLOBALS['siteHeaderMenuServices'];
            }
            if (is_array($menu)) {
                foreach ($menu as $cat) {
                    if (!is_array($cat)) {
                        continue;
                    }
                    if (!empty($cat['href']) && is_string($cat['href']) && isset($cat['title']) && is_string($cat['title'])) {
                        $map[aud_seo_sitemap_normalize_path($cat['href'])] = $cat['title'];
                    }
                    foreach ($cat['items'] ?? [] as $item) {
                        if (is_array($item) && isset($item['href'], $item['label'])
                            && is_string($item['href']) && is_string($item['label'])) {
                            $map[aud_seo_sitemap_normalize_path($item['href'])] = $item['label'];
                        }
                    }
                }
            }
        }

        return $map;
    }
}

if (!function_exists('aud_seo_sitemap_path_label')) {
    function aud_seo_sitemap_path_label(string $path): string
    {
        $norm = aud_seo_sitemap_normalize_path($path);
        $hrefMap = aud_seo_sitemap_href_to_label_map();
        if (isset($hrefMap[$norm])) {
            return $hrefMap[$norm];
        }
        if (preg_match('#^/news/(.+)$#u', $norm, $m)) {
            $slug = rawurldecode($m[1]);
            $post = getNewsPostBySlug($slug);
            if ($post !== null) {
                $t = trim((string) ($post['seo_title_effective'] ?? ''));
                if ($t !== '') {
                    return $t;
                }
                $t2 = trim((string) ($post['title'] ?? ''));
                if ($t2 !== '') {
                    return $t2;
                }
            }

            return $slug !== '' ? $slug : $norm;
        }
        $trim = trim($norm, '/');
        $slug = str_contains($trim, '/') ? basename(str_replace('\\', '/', $trim)) : $trim;
        if ($slug === '') {
            return $norm;
        }
        $page = aud_pages_get_page_by_slug($slug);
        if ($page !== null) {
            $t = trim((string) ($page['seo_title_effective'] ?? ''));
            if ($t !== '') {
                return $t;
            }
            $t2 = trim((string) ($page['title'] ?? ''));
            if ($t2 !== '') {
                return $t2;
            }
        }
        $pretty = str_replace(['-', '_'], ' ', $slug);

        return mb_convert_case($pretty, MB_CASE_TITLE, 'UTF-8');
    }
}

if (!function_exists('aud_seo_sitemap_news_primary_rubric')) {
    /**
     * Первая «настоящая» рубрика поста (как в фильтре /news), иначе пустая строка.
     */
    function aud_seo_sitemap_news_primary_rubric(string $newsPath): string
    {
        if (!preg_match('#^/news/(.+)$#u', $newsPath, $m)) {
            return '';
        }
        $slug = rawurldecode($m[1]);
        $post = getNewsPostBySlug($slug);
        if ($post === null) {
            return '';
        }
        foreach (getPostCategories($post) as $c) {
            if (aud_news_category_excluded_from_filter($c)) {
                continue;
            }

            return trim((string) $c);
        }

        return '';
    }
}

if (!function_exists('aud_seo_sitemap_groups_for_html')) {
    /**
     * @return list<array{title: string, items: list<array{path: string, label: string}>, dense?: bool}>
     */
    function aud_seo_sitemap_groups_for_html(): array
    {
        $segmentTitles = [
            'audit' => 'Аудит',
            'konsalting' => 'Консалтинг',
            'finans' => 'Финансы',
            'buhgalteriya' => 'Бухгалтерия',
            'forenzik' => 'Forensic',
            'kadrovyy-audit' => 'Кадровый аудит',
            'msfo' => 'МСФО',
            'komplaens' => 'Комплаенс',
            'biznes-konsalting' => 'Бизнес-консалтинг',
            'hsep' => 'HSEP / обучение',
            'due-diligence' => 'Due diligence',
        ];
        $homeItems = [];
        $topItems = [];
        /** @var array<string, list<array{path: string, label: string}>> $subBySeg */
        $subBySeg = [];
        /** @var array<string, list<array{path: string, label: string}>> $newsByRubric */
        $newsByRubric = [];
        foreach (aud_seo_sitemap_entries() as $row) {
            $p = $row['path'];
            if ($p === '/') {
                $homeItems[] = ['path' => $p, 'label' => aud_seo_sitemap_path_label($p)];

                continue;
            }
            if (str_starts_with($p, '/news/')) {
                $rub = aud_seo_sitemap_news_primary_rubric($p);
                if (!isset($newsByRubric[$rub])) {
                    $newsByRubric[$rub] = [];
                }
                $newsByRubric[$rub][] = ['path' => $p, 'label' => aud_seo_sitemap_path_label($p)];

                continue;
            }
            $trim = trim($p, '/');
            if ($trim === '' || str_contains($trim, '/')) {
                $seg = explode('/', $trim, 2)[0];
                if ($seg === '') {
                    continue;
                }
                if (!isset($subBySeg[$seg])) {
                    $subBySeg[$seg] = [];
                }
                $subBySeg[$seg][] = ['path' => $p, 'label' => aud_seo_sitemap_path_label($p)];

                continue;
            }
            $topItems[] = ['path' => $p, 'label' => aud_seo_sitemap_path_label($p)];
        }
        usort($topItems, static fn (array $a, array $b): int => strcmp($a['path'], $b['path']));
        ksort($subBySeg, SORT_STRING);
        $sortNewsItems = static function (array &$items): void {
            usort($items, static fn (array $a, array $b): int => strcmp($a['path'], $b['path']));
        };

        $out = [];
        if ($homeItems !== []) {
            $out[] = ['title' => 'Главная', 'items' => $homeItems];
        }
        if ($topItems !== []) {
            $out[] = ['title' => 'Основные разделы', 'items' => $topItems];
        }
        foreach ($subBySeg as $seg => $items) {
            $title = $segmentTitles[$seg] ?? $seg;
            $out[] = ['title' => $title, 'items' => $items];
        }
        foreach (getNewsCategories() as $rub) {
            if (empty($newsByRubric[$rub])) {
                continue;
            }
            $items = $newsByRubric[$rub];
            $sortNewsItems($items);
            $out[] = [
                'title' => 'Новости — ' . $rub,
                'items' => $items,
                'dense' => true,
            ];
            unset($newsByRubric[$rub]);
        }
        foreach ($newsByRubric as $rub => $items) {
            if ($items === []) {
                continue;
            }
            $sortNewsItems($items);
            $title = $rub === '' ? 'Новости — без рубрики' : 'Новости — ' . $rub;
            $out[] = ['title' => $title, 'items' => $items, 'dense' => true];
        }

        return $out;
    }
}
