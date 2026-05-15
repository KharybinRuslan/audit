<?php

declare(strict_types=1);

if (!function_exists('aud_img_project_fs_path')) {
    /**
     * Абсолютный путь к файлу в корне проекта по URL-пути (/public/... или /img/...).
     */
    function aud_img_project_fs_path(string $urlPath): string
    {
        $root = dirname(__DIR__);
        $trim = trim(str_replace('\\', '/', $urlPath), '/');
        if ($trim === '') {
            return $root;
        }
        $parts = explode('/', $trim);
        $decoded = array_map(static function (string $segment): string {
            return rawurldecode($segment);
        }, $parts);

        return $root . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $decoded);
    }
}

if (!function_exists('aud_img_path_for_url')) {
    /**
     * Кодирует сегменты пути для URL (пробелы и спецсимволы), чтобы src/srcset не ломались.
     * В srcset пробел — разделитель кандидата и дескриптора; файл «DUE diligence.jpg» без кодирования даёт ошибку парсера.
     */
    function aud_img_path_for_url(string $path): string
    {
        if ($path === '' || $path[0] !== '/') {
            return $path;
        }
        $trim = trim($path, '/');
        if ($trim === '') {
            return '/';
        }
        $parts = explode('/', $trim);

        return '/' . implode('/', array_map(static function (string $segment): string {
            return rawurlencode($segment);
        }, $parts));
    }
}

if (!function_exists('aud_img_picture_webp')) {
    /**
     * Растровая картинка: WebP в <source>, PNG/JPEG в <img> как запасной вариант.
     * SVG и пути без .png/.jpg не оборачиваются в <picture>.
     *
     * @param array<string, string|int|bool|null> $attrs HTML-атрибуты для <img> (кроме src/alt)
     */
    function aud_img_picture_webp(string $src, string $alt = '', array $attrs = []): void
    {
        if (!preg_match('/\.(png|jpe?g)$/i', $src)) {
            $parts = '';
            foreach ($attrs as $k => $v) {
                if ($v === null || $v === false) {
                    continue;
                }
                $parts .= sprintf(
                    ' %s="%s"',
                    htmlspecialchars((string) $k, ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8')
                );
            }
            $srcUrl = aud_img_path_for_url($src);
            echo '<img src="' . htmlspecialchars($srcUrl, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '"' . $parts . '>';

            return;
        }

        $webp = preg_replace('/\.(png|jpe?g)$/i', '.webp', $src);
        $srcUrl = aud_img_path_for_url($src);
        $webpUrl = aud_img_path_for_url($webp);
        $parts = '';
        foreach ($attrs as $k => $v) {
            if ($v === null || $v === false) {
                continue;
            }
            $parts .= sprintf(
                ' %s="%s"',
                htmlspecialchars((string) $k, ENT_QUOTES, 'UTF-8'),
                htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8')
            );
        }

        $webpFs = aud_img_project_fs_path($webp);
        if (!is_file($webpFs)) {
            echo '<img src="' . htmlspecialchars($srcUrl, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '"' . $parts . '>';

            return;
        }

        echo '<picture>';
        echo '<source srcset="' . htmlspecialchars($webpUrl, ENT_QUOTES, 'UTF-8') . '" type="image/webp">';
        echo '<img src="' . htmlspecialchars($srcUrl, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '"' . $parts . '>';
        echo '</picture>';
    }
}
