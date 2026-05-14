<?php

declare(strict_types=1);

/**
 * Media resolver: WordPress remote URL → локальный файл при наличии, иначе remote.
 * Локальный корень и опциональный manifest настраиваются здесь (без секретов).
 */

if (!function_exists('aud_news_media_config')) {
    /**
     * @return array{local_dir: string, local_url_prefix: string, map_file: string|null}
     */
    function aud_news_media_config(): array
    {
        static $cfg = null;
        if ($cfg !== null) {
            return $cfg;
        }

        $root = dirname(__DIR__, 2);
        $cfg = [
            'local_dir' => $root . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'wordpress',
            'local_url_prefix' => '/public/uploads/wordpress/',
            'map_file' => $root . DIRECTORY_SEPARATOR . 'migration' . DIRECTORY_SEPARATOR . 'news-media-map.json',
        ];

        return $cfg;
    }
}

if (!function_exists('aud_news_media_map_load')) {
    /**
     * @return array<string, string> remote URL → путь относительно local_url_prefix (например "2024/04/x.jpg")
     */
    function aud_news_media_map_load(): array
    {
        static $map = null;
        if ($map !== null) {
            return $map;
        }
        $map = [];
        $cfg = aud_news_media_config();
        $file = $cfg['map_file'];
        if ($file === null || !is_readable($file)) {
            return $map;
        }
        $raw = file_get_contents($file);
        if ($raw === false) {
            return $map;
        }
        $decoded = json_decode($raw, true);
        if (!is_array($decoded)) {
            return $map;
        }
        foreach ($decoded as $remote => $local) {
            if (!is_string($remote) || !is_string($local) || $remote === '' || $local === '') {
                continue;
            }
            $map[aud_news_media_normalize_url_key($remote)] = ltrim(str_replace('\\', '/', $local), '/');
        }

        return $map;
    }
}

if (!function_exists('aud_news_media_normalize_url_key')) {
    function aud_news_media_normalize_url_key(string $url): string
    {
        $url = trim($url);
        if ($url === '') {
            return '';
        }
        $lower = strtolower($url);
        if (str_starts_with($lower, 'http://')) {
            return 'https://' . substr($url, 7);
        }

        return $url;
    }
}

if (!function_exists('aud_news_resolve_media_url')) {
    /**
     * URL медиа из WordPress → путь проекта /public/uploads/wordpress/… при зеркале; иначе исходная строка.
     */
    function aud_news_resolve_media_url(?string $remoteUrl): string
    {
        if ($remoteUrl === null) {
            return '';
        }
        $remoteUrl = trim($remoteUrl);
        if ($remoteUrl === '') {
            return '';
        }

        $cfg = aud_news_media_config();
        $key = aud_news_media_normalize_url_key($remoteUrl);
        $map = aud_news_media_map_load();
        if ($key !== '' && isset($map[$key])) {
            $rel = $map[$key];
            $localFs = $cfg['local_dir'] . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $rel);
            if (is_file($localFs)) {
                return aud_news_media_public_url_from_relative($cfg['local_url_prefix'], $rel);
            }
        }

        $pathFromUrl = aud_news_media_wp_upload_path_from_url($remoteUrl);
        if ($pathFromUrl !== null) {
            $localFs = $cfg['local_dir'] . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $pathFromUrl);
            // Только реальный файл: иначе отдаём исходный URL (частичное зеркало / нет пары .webp).
            if (is_file($localFs)) {
                return aud_news_media_public_url_from_relative($cfg['local_url_prefix'], $pathFromUrl);
            }
        }

        return $remoteUrl;
    }
}

if (!function_exists('aud_news_resolve_media_srcset')) {
    /**
     * Переписывает URL в атрибуте srcset (формат "url 300w, url 768w").
     */
    function aud_news_resolve_media_srcset(?string $srcset): string
    {
        if ($srcset === null || trim($srcset) === '') {
            return '';
        }
        $srcset = trim((string) $srcset);
        $parts = preg_split('/\s*,\s*/', $srcset) ?: [];
        $out = [];
        foreach ($parts as $part) {
            $part = trim($part);
            if ($part === '') {
                continue;
            }
            if (preg_match('/^(\S+)\s+(\d+w|\d+(?:\.\d+)?x)$/i', $part, $m)) {
                $u = aud_news_resolve_media_url($m[1]);
                if ($u !== '') {
                    $out[] = $u . ' ' . $m[2];
                }

                continue;
            }
            $u = aud_news_resolve_media_url($part);
            if ($u !== '') {
                $out[] = $u;
            }
        }

        return implode(', ', $out);
    }
}

if (!function_exists('aud_news_media_wp_upload_path_from_url')) {
    /**
     * Относительный путь внутри зеркала (ГГ/ММ/файл) из URL или пути /wp-content/uploads/…
     */
    function aud_news_media_wp_upload_path_from_url(string $url): ?string
    {
        $url = trim($url);
        if ($url === '') {
            return null;
        }
        if (preg_match('#(?:https?:)?//[^/]+/wp-content/uploads/(.+)$#i', $url, $m)) {
            $tail = $m[1];
        } elseif (preg_match('#/wp-content/uploads/(.+)$#i', $url, $m)) {
            $tail = $m[1];
        } else {
            return null;
        }
        $tail = preg_replace('/[#?].*$/', '', $tail) ?? $tail;
        $tail = trim($tail);

        return $tail !== '' ? $tail : null;
    }
}

if (!function_exists('aud_news_is_valid_image_url')) {
    function aud_news_is_valid_image_url(string $url): bool
    {
        $u = trim($url);
        if ($u === '') {
            return false;
        }
        $lower = strtolower($u);
        if (str_starts_with($lower, 'data:')) {
            return false;
        }
        if (str_contains($lower, 'w3.org')) {
            return false;
        }
        if (str_contains($lower, 'svg') && (str_contains($lower, 'xmlns') || str_ends_with($lower, '.svg'))) {
            return false;
        }
        if (!preg_match('#^https?://#i', $u) && !preg_match('#^/#', $u)) {
            return false;
        }

        return (bool) preg_match('/\.(avif|webp|jpe?g|png|gif)(\?|#|$)/i', $u);
    }
}

if (!function_exists('aud_news_placeholder_image')) {
    function aud_news_placeholder_image(): string
    {
        return '/img/news-def-1.webp';
    }
}

if (!function_exists('aud_news_media_public_url_from_relative')) {
    function aud_news_media_public_url_from_relative(string $urlPrefix, string $relativePath): string
    {
        $relativePath = str_replace('\\', '/', $relativePath);
        $relativePath = ltrim($relativePath, '/');
        $segments = $relativePath === '' ? [] : explode('/', $relativePath);
        $encoded = implode('/', array_map(static function (string $s): string {
            return rawurlencode($s);
        }, $segments));

        return rtrim($urlPrefix, '/') . '/' . $encoded;
    }
}
