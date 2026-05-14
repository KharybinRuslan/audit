<?php

declare(strict_types=1);

/**
 * JSON-LD (Schema.org) для публичного сайта. Базовый URL — aud_site_public_base_url()
 * (на проде задайте AUD_SITE_URL=https://auditte.ru).
 *
 * Данные страницы читаются из $GLOBALS (title, description, хлебные крошки и т.д.),
 * потому что aud_inline_critical_shell_css() вызывается из функции и не видит локальные переменные шаблона.
 *
 * Опционально: AUD_SCHEMA_SAME_AS — URL соцсетей через запятую.
 */

require_once dirname(__DIR__) . '/site-config.php';
require_once dirname(__DIR__) . '/site-address.php';

if (!function_exists('aud_schema_json_encode')) {
    function aud_schema_json_encode(array $data): string
    {
        $flags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
            | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT;
        $json = json_encode($data, $flags);

        return is_string($json) ? $json : '{}';
    }
}

if (!function_exists('aud_schema_absolute_url')) {
    function aud_schema_absolute_url(string $path): string
    {
        $base = aud_site_public_base_url();
        $path = trim($path);
        if ($path === '') {
            return $base . '/';
        }
        if ($path[0] !== '/') {
            $path = '/' . $path;
        }

        return $base . $path;
    }
}

if (!function_exists('aud_schema_global_string')) {
    function aud_schema_global_string(string $key, string $default = ''): string
    {
        if (!isset($GLOBALS[$key])) {
            return $default;
        }
        $v = $GLOBALS[$key];

        return is_string($v) ? trim($v) : $default;
    }
}

if (!function_exists('aud_schema_global_breadcrumbs')) {
    /**
     * @return list<array{label: string, href?: string}>
     */
    function aud_schema_global_breadcrumbs(): array
    {
        $b = $GLOBALS['breadcrumbs'] ?? null;
        if (!is_array($b)) {
            return [];
        }
        $out = [];
        foreach ($b as $row) {
            if (!is_array($row)) {
                continue;
            }
            $label = isset($row['label']) ? trim((string) $row['label']) : '';
            if ($label === '') {
                continue;
            }
            $item = ['label' => $label];
            if (isset($row['href']) && is_string($row['href']) && trim($row['href']) !== '') {
                $item['href'] = trim($row['href']);
            }
            $out[] = $item;
        }

        return $out;
    }
}

if (!function_exists('aud_schema_same_as_urls')) {
    /**
     * @return list<string>
     */
    function aud_schema_same_as_urls(): array
    {
        $raw = getenv('AUD_SCHEMA_SAME_AS');
        if (!is_string($raw) || trim($raw) === '') {
            return [];
        }
        $parts = preg_split('/\s*,\s*/', $raw) ?: [];
        $out = [];
        foreach ($parts as $p) {
            $u = trim((string) $p);
            if ($u !== '' && preg_match('#^https?://#i', $u)) {
                $out[] = $u;
            }
        }

        return $out;
    }
}

if (!function_exists('aud_schema_request_path')) {
    function aud_schema_request_path(): string
    {
        $uri = isset($_SERVER['REQUEST_URI']) ? (string) $_SERVER['REQUEST_URI'] : '/';
        $path = parse_url($uri, PHP_URL_PATH);

        return (is_string($path) && $path !== '') ? $path : '/';
    }
}

if (!function_exists('aud_schema_load_services_menu')) {
    /**
     * @return list<array<string, mixed>>
     */
    function aud_schema_load_services_menu(): array
    {
        $file = dirname(__DIR__, 2) . '/components/site-header/site-header-menu-data.php';
        if (!is_readable($file)) {
            return [];
        }
        require $file;

        if (isset($siteHeaderMenuServices) && is_array($siteHeaderMenuServices)) {
            return $siteHeaderMenuServices;
        }

        return [];
    }
}

if (!function_exists('aud_schema_build_nav_services_has_part')) {
    /**
     * @param list<array<string, mixed>> $menu
     * @return list<array<string, mixed>>
     */
    function aud_schema_build_nav_services_has_part(array $menu): array
    {
        $parts = [];
        foreach ($menu as $cat) {
            if (!is_array($cat)) {
                continue;
            }
            $title = isset($cat['title']) ? trim((string) $cat['title']) : '';
            $href = isset($cat['href']) ? trim((string) $cat['href']) : '';
            if ($title === '' || $href === '') {
                continue;
            }
            if ($href[0] !== '/') {
                $href = '/' . ltrim($href, '/');
            }
            $node = [
                '@type' => 'SiteNavigationElement',
                'name' => $title,
                'url' => aud_schema_absolute_url($href),
            ];
            $items = isset($cat['items']) && is_array($cat['items']) ? $cat['items'] : [];
            $sub = [];
            foreach ($items as $it) {
                $label = '';
                $ih = '';
                if (is_string($it)) {
                    $label = trim($it);
                    $ih = '/services';
                } elseif (is_array($it)) {
                    $label = isset($it['label']) ? trim((string) $it['label']) : '';
                    $ih = isset($it['href']) ? trim((string) $it['href']) : '';
                }
                if ($label === '') {
                    continue;
                }
                if ($ih === '') {
                    $ih = '/services';
                }
                if ($ih[0] !== '/') {
                    $ih = '/' . ltrim($ih, '/');
                }
                $sub[] = [
                    '@type' => 'SiteNavigationElement',
                    'name' => $label,
                    'url' => aud_schema_absolute_url($ih),
                ];
            }
            if ($sub !== []) {
                $node['hasPart'] = $sub;
            }
            $parts[] = $node;
        }

        return $parts;
    }
}

if (!function_exists('aud_schema_print_json_ld')) {
    function aud_schema_print_json_ld(): void
    {
        $base = aud_site_public_base_url();
        $path = aud_schema_request_path();
        $pageUrl = aud_schema_absolute_url($path);
        $pageTitle = aud_schema_global_string('pageTitle', 'ООО "Аудит Топ Эксперт"');
        $pageDescription = aud_schema_global_string('pageDescription', 'Аудиторские и консалтинговые услуги.');

        $orgLegalName = 'ООО "Аудит Топ Эксперт"';
        $orgBrandName = 'ООО "Аудит Топ Эксперт"';
        $logoUrl = aud_schema_absolute_url('/img/logo.png');
        $telDisplay = '+7 495 275-22-33';
        $telSchema = '+74952752233';
        $email = 'info@aditte.ru';
        $idOrg = $base . '#organization';
        $idLocal = $base . '#localbusiness';
        $idWebsite = $base . '#website';

        $sameAs = aud_schema_same_as_urls();

        $org = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => $idOrg,
            'name' => $orgBrandName,
            'legalName' => $orgLegalName,
            'url' => $base . '/',
            'logo' => $logoUrl,
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => $telSchema,
                'contactType' => 'customer service',
                'email' => $email,
                'availableLanguage' => 'Russian',
            ],
        ];
        if ($sameAs !== []) {
            $org['sameAs'] = $sameAs;
        }

        $local = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            '@id' => $idLocal,
            'name' => $orgBrandName,
            'image' => $logoUrl,
            'url' => $base . '/',
            'telephone' => $telSchema,
            'email' => $email,
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                    'opens' => '09:00',
                    'closes' => '19:00',
                ],
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Гамсоновский пер., 2',
                'addressLocality' => 'Москва',
                'addressRegion' => 'Москва',
                'addressCountry' => 'RU',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 55.7089,
                'longitude' => 37.6192,
            ],
        ];

        $website = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            '@id' => $idWebsite,
            'name' => $orgBrandName,
            'url' => $base . '/',
            'publisher' => ['@id' => $idOrg],
        ];

        $headerLd = [
            '@context' => 'https://schema.org',
            '@type' => 'WPHeader',
            'headline' => $pageTitle,
            'description' => $pageDescription,
        ];

        $footerLd = [
            '@context' => 'https://schema.org',
            '@type' => 'WPFooter',
            'copyrightYear' => (int) date('Y'),
            'copyrightHolder' => [
                '@type' => 'Organization',
                'name' => $orgLegalName,
            ],
        ];

        $scripts = [$org, $local, $website, $headerLd, $footerLd];

        $crumbs = aud_schema_global_breadcrumbs();
        if ($crumbs !== []) {
            $elements = [];
            $pos = 1;
            foreach ($crumbs as $c) {
                $name = $c['label'];
                $item = [
                    '@type' => 'ListItem',
                    'position' => $pos,
                    'name' => $name,
                ];
                if (isset($c['href'])) {
                    $href = $c['href'];
                    if ($href[0] === '/') {
                        $item['item'] = aud_schema_absolute_url($href);
                    } else {
                        $item['item'] = $href;
                    }
                }
                $elements[] = $item;
                $pos++;
            }
            $scripts[] = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => $elements,
            ];
        }

        $mainNav = [
            '@context' => 'https://schema.org',
            '@type' => 'SiteNavigationElement',
            'name' => 'Основная навигация',
            'hasPart' => [
                ['@type' => 'SiteNavigationElement', 'name' => 'О компании', 'url' => aud_schema_absolute_url('/about')],
                ['@type' => 'SiteNavigationElement', 'name' => 'Услуги', 'url' => aud_schema_absolute_url('/services')],
                ['@type' => 'SiteNavigationElement', 'name' => 'Блог', 'url' => aud_schema_absolute_url('/news')],
                ['@type' => 'SiteNavigationElement', 'name' => 'Контакты', 'url' => aud_schema_absolute_url('/contacts')],
            ],
        ];
        $scripts[] = $mainNav;

        $menu = aud_schema_load_services_menu();
        $servicesNav = aud_schema_build_nav_services_has_part($menu);
        if ($servicesNav !== []) {
            $scripts[] = [
                '@context' => 'https://schema.org',
                '@type' => 'SiteNavigationElement',
                'name' => 'Услуги: разделы и страницы',
                'hasPart' => $servicesNav,
            ];
        }

        $heroTitle = aud_schema_global_string('serviceSubpageHeroTitle', '');
        if ($heroTitle !== '') {
            $scripts[] = [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => $heroTitle,
                'description' => $pageDescription,
                'url' => $pageUrl,
                'provider' => [
                    '@type' => 'LocalBusiness',
                    'name' => $orgBrandName,
                    'url' => $base . '/',
                    'telephone' => $telSchema,
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => $logoUrl,
                    ],
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => aud_site_office_address_plain(),
                        'addressLocality' => 'Москва',
                        'addressCountry' => 'RU',
                    ],
                ],
            ];
        }

        $newsSlug = aud_schema_global_string('newsArticleSlug', '');
        $is404 = $GLOBALS['newsArticleIs404'] ?? true;
        $post = $GLOBALS['newsArticlePost'] ?? null;
        if ($newsSlug !== '' && $is404 === false && is_array($post)) {
            $title = isset($post['title']) ? trim((string) $post['title']) : $pageTitle;
            $rawDate = isset($post['date_published']) ? trim((string) $post['date_published']) : '';
            $datePublished = $rawDate !== '' ? date('c', strtotime($rawDate) ?: time()) : date('c');
            $img = '';
            if (function_exists('resolveArticleImage') && function_exists('aud_news_absolute_site_url')) {
                $img = (string) resolveArticleImage($post);
                if ($img !== '') {
                    $img = aud_news_absolute_site_url($img);
                }
            }
            $articleUrl = function_exists('aud_news_absolute_site_url')
                ? aud_news_absolute_site_url('/news/' . rawurlencode($newsSlug))
                : $pageUrl;
            $newsLd = [
                '@context' => 'https://schema.org',
                '@type' => 'NewsArticle',
                'headline' => $title,
                'description' => $pageDescription,
                'datePublished' => $datePublished,
                'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $articleUrl],
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => $orgBrandName,
                    'logo' => ['@type' => 'ImageObject', 'url' => $logoUrl],
                ],
            ];
            if ($img !== '') {
                $newsLd['image'] = [$img];
            }
            $scripts[] = $newsLd;
        }

        foreach ($scripts as $block) {
            echo '<script type="application/ld+json">' . aud_schema_json_encode($block) . "</script>\n";
        }
    }
}
