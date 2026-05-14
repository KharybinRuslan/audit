<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/site-config.php';
require_once __DIR__ . '/media.php';
require_once __DIR__ . '/sanitize-html.php';

if (!function_exists('getPostCategories')) {
    /**
     * @param array<string, mixed> $post
     * @return list<string>
     */
    function getPostCategories(array $post): array
    {
        if (!isset($post['categories']) || !is_array($post['categories'])) {
            return [];
        }
        $out = [];
        foreach ($post['categories'] as $c) {
            $s = trim((string) $c);
            if ($s !== '') {
                $out[] = $s;
            }
        }

        return $out;
    }
}

if (!function_exists('buildExcerpt')) {
    function buildExcerpt(array $post, int $minLen = 140, int $maxLen = 190): string
    {
        if (!empty($post['excerpt']) && is_string($post['excerpt'])) {
            $base = trim($post['excerpt']);
        } elseif (!empty($post['summary']) && is_string($post['summary'])) {
            $base = trim($post['summary']);
        } else {
            $base = isset($post['content_text_plain']) ? (string) $post['content_text_plain'] : '';
        }
        $base = preg_replace("/[\x{00}-\x{08}\x{0B}\x{0C}\x{0E}-\x{1F}]/u", '', $base) ?? $base;
        $base = preg_replace('/\s+/u', ' ', $base) ?? $base;
        $base = trim($base);
        if ($base === '') {
            return '';
        }
        if (mb_strlen($base) <= $maxLen) {
            return $base;
        }
        $slice = mb_substr($base, 0, $maxLen);
        $sp = mb_strrpos($slice, ' ');
        if ($sp !== false && $sp >= $minLen) {
            $slice = mb_substr($slice, 0, $sp);
        }

        return rtrim($slice, ".,;:!? \t") . '…';
    }
}

if (!function_exists('aud_news_article_lead_plain')) {
    /**
     * Текст лида под заголовком: первый абзац из HTML статьи (plain), иначе excerpt.
     *
     * @param array<string, mixed> $post
     */
    function aud_news_article_lead_plain(array $post): string
    {
        $html = '';
        if (!empty($post['content_html_sanitized']) && is_string($post['content_html_sanitized'])) {
            $html = $post['content_html_sanitized'];
        } elseif (!empty($post['content_html_raw']) && is_string($post['content_html_raw'])) {
            $html = $post['content_html_raw'];
        }
        if ($html !== '' && preg_match('/<p\b[^>]*>(.*?)<\/p>/is', $html, $m)) {
            $plain = strip_tags((string) $m[1]);
            $plain = html_entity_decode($plain, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $plain = preg_replace('/\s+/u', ' ', $plain) ?? $plain;
            $plain = trim($plain);
            if ($plain !== '' && mb_strlen($plain) >= 12) {
                return $plain;
            }
        }

        return buildExcerpt($post, 80, 260);
    }
}

if (!function_exists('resolveArticleImage')) {
    /**
     * URL для превью (уже через media resolver); невалидные источники пропускаются.
     */
    function resolveArticleImage(array $post): string
    {
        $candidates = [];
        foreach (['normalized_featured_image_url', 'featured_image_url'] as $k) {
            if (!empty($post[$k]) && is_string($post[$k])) {
                $candidates[] = trim($post[$k]);
            }
        }
        if (!empty($post['all_image_urls']) && is_array($post['all_image_urls'])) {
            foreach ($post['all_image_urls'] as $u) {
                if (is_string($u) && trim($u) !== '') {
                    $candidates[] = trim($u);
                }
            }
        }
        foreach (['content_html_sanitized', 'content_html_raw'] as $hk) {
            if (!empty($post[$hk]) && is_string($post[$hk])) {
                if (preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $post[$hk], $m)) {
                    $candidates[] = trim($m[1]);
                }
            }
        }
        foreach ($candidates as $url) {
            if (aud_news_is_valid_image_url($url)) {
                $resolved = aud_news_resolve_media_url($url);

                return $resolved !== '' ? $resolved : aud_news_placeholder_image();
            }
        }

        return aud_news_placeholder_image();
    }
}

if (!function_exists('aud_news_article_html_for_render')) {
    /**
     * Источник HTML статьи: sanitized из JSON при наличии, иначе raw; затем финальный sanitize.
     */
    function aud_news_article_html_for_render(array $post): string
    {
        $raw = '';
        if (!empty($post['content_html_sanitized']) && is_string($post['content_html_sanitized'])) {
            $raw = $post['content_html_sanitized'];
        } elseif (!empty($post['content_html_raw']) && is_string($post['content_html_raw'])) {
            $raw = $post['content_html_raw'];
        }

        return aud_news_sanitize_article_html($raw);
    }
}

if (!function_exists('aud_news_meta_description')) {
    function aud_news_meta_description(array $post): string
    {
        $seo = isset($post['seo_description']) ? trim((string) $post['seo_description']) : '';
        if ($seo !== '') {
            return $seo;
        }

        return buildExcerpt($post);
    }
}

if (!function_exists('aud_news_page_title')) {
    function aud_news_page_title(array $post): string
    {
        $t = isset($post['seo_title_effective']) ? trim((string) $post['seo_title_effective']) : '';
        if ($t !== '') {
            return $t;
        }
        if (!empty($post['title'])) {
            return trim((string) $post['title']);
        }

        return 'Новости';
    }
}

if (!function_exists('aud_news_format_date_ru')) {
    function aud_news_format_date_ru(array $post): array
    {
        $raw = isset($post['date_published']) ? (string) $post['date_published'] : '';
        $ts = strtotime($raw);
        if ($ts === false) {
            return ['display' => '', 'iso' => ''];
        }

        return [
            'display' => date('d.m.Y', $ts),
            'iso' => date('Y-m-d', $ts),
        ];
    }
}

if (!function_exists('aud_news_absolute_site_url')) {
    function aud_news_absolute_site_url(string $pathOrUrl): string
    {
        if (preg_match('#^https?://#i', $pathOrUrl)) {
            return $pathOrUrl;
        }
        $base = aud_site_public_base_url();
        $path = str_starts_with($pathOrUrl, '/') ? $pathOrUrl : '/' . $pathOrUrl;

        return $base . $path;
    }
}
