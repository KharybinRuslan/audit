<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/news/sanitize-html.php';
require_once dirname(__DIR__) . '/site-address.php';

if (!function_exists('aud_pages_ready_json_path')) {
    function aud_pages_ready_json_path(): string
    {
        return dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'migration' . DIRECTORY_SEPARATOR . 'pages-ready.json';
    }
}

if (!function_exists('aud_pages_load_items')) {
    /**
     * @return list<array<string, mixed>>
     */
    function aud_pages_load_items(): array
    {
        static $cache = null;
        if ($cache !== null) {
            return $cache;
        }
        $path = aud_pages_ready_json_path();
        if (!is_readable($path)) {
            return $cache = [];
        }
        $json = file_get_contents($path);
        if ($json === false) {
            return $cache = [];
        }
        $data = json_decode($json, true);
        if (!is_array($data) || !isset($data['items']) || !is_array($data['items'])) {
            return $cache = [];
        }
        $out = [];
        foreach ($data['items'] as $row) {
            if (is_array($row)) {
                $out[] = $row;
            }
        }

        return $cache = $out;
    }
}

if (!function_exists('aud_pages_get_page_by_slug')) {
    /**
     * Статическая страница WordPress (post_type === page) по slug.
     *
     * @return array<string, mixed>|null
     */
    function aud_pages_get_page_by_slug(string $slug): ?array
    {
        $slug = trim($slug);
        if ($slug === '') {
            return null;
        }
        foreach (aud_pages_load_items() as $row) {
            if (($row['post_type'] ?? '') !== 'page') {
                continue;
            }
            if (($row['slug'] ?? '') === $slug) {
                return $row;
            }
        }

        return null;
    }
}

if (!function_exists('aud_pages_trim_duplicate_policy_intro')) {
    /**
     * В pages-ready для политики контент иногда продублирован целиком (второй блок с тем же вступлением).
     * Обрезаем по второму вхождению маркера вступления.
     */
    function aud_pages_trim_duplicate_policy_intro(string $html): string
    {
        $marker = '<p>Политика конфиденциальности</p>';
        $minSecond = 5000;
        $first = mb_strpos($html, $marker);
        if ($first === false) {
            return $html;
        }
        $second = mb_strpos($html, $marker, $first + mb_strlen($marker));
        if ($second === false || $second < $minSecond) {
            return $html;
        }

        return trim(mb_substr($html, 0, $second));
    }
}

if (!function_exists('aud_pages_html_for_render')) {
    /**
     * HTML для вывода: приоритет content_html_sanitized, иначе raw, затем санитайзер страниц.
     */
    function aud_pages_html_for_render(array $page): string
    {
        $raw = '';
        if (!empty($page['content_html_sanitized']) && is_string($page['content_html_sanitized'])) {
            $raw = $page['content_html_sanitized'];
        } elseif (!empty($page['content_html_raw']) && is_string($page['content_html_raw'])) {
            $raw = $page['content_html_raw'];
        }

        $html = aud_pages_sanitize_html($raw);
        if (($page['slug'] ?? '') === 'politika-konfidencialnosti') {
            $html = aud_pages_trim_duplicate_policy_intro($html);
        }
        $html = aud_site_normalize_office_addresses_in_html($html);

        return $html;
    }
}

if (!function_exists('aud_pages_meta_description')) {
    function aud_pages_meta_description(array $page, int $maxLen = 200): string
    {
        if (!empty($page['seo_description']) && is_string($page['seo_description'])) {
            $s = trim($page['seo_description']);
            if ($s !== '') {
                return $s;
            }
        }
        $plain = isset($page['content_text_plain']) ? (string) $page['content_text_plain'] : '';
        $plain = preg_replace('/\s+/u', ' ', $plain) ?? $plain;
        $plain = trim($plain);
        if ($plain === '') {
            return '';
        }
        if (mb_strlen($plain) <= $maxLen) {
            return $plain;
        }

        return rtrim(mb_substr($plain, 0, $maxLen - 1)) . '…';
    }
}
