<?php

declare(strict_types=1);

/**
 * Favicon / PWA-иконки: кладите файлы в /img/favicon/ (не в /tools/).
 *
 * Ожидаемые имена — как у типового генератора (realfavicongenerator и т.п.):
 * apple-icon-*.png, android-icon-192x192.png, favicon-*.png, favicon.ico, ms-icon-144x144.png
 */
if (!function_exists('aud_print_favicon_links')) {
    function aud_print_favicon_links(): void
    {
        $base = '/img/favicon';
        $icons = [
            ['rel' => 'apple-touch-icon', 'sizes' => '57x57', 'href' => $base . '/apple-icon-57x57.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '60x60', 'href' => $base . '/apple-icon-60x60.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '72x72', 'href' => $base . '/apple-icon-72x72.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '76x76', 'href' => $base . '/apple-icon-76x76.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '114x114', 'href' => $base . '/apple-icon-114x114.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '120x120', 'href' => $base . '/apple-icon-120x120.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '144x144', 'href' => $base . '/apple-icon-144x144.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '152x152', 'href' => $base . '/apple-icon-152x152.png'],
            ['rel' => 'apple-touch-icon', 'sizes' => '180x180', 'href' => $base . '/apple-icon-180x180.png'],
            ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '192x192', 'href' => $base . '/android-icon-192x192.png'],
            ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => $base . '/favicon-32x32.png'],
            ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96', 'href' => $base . '/favicon-96x96.png'],
            ['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => $base . '/favicon-16x16.png'],
        ];

        foreach ($icons as $row) {
            $rel = htmlspecialchars((string) $row['rel'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            $href = htmlspecialchars((string) $row['href'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
            $sizes = isset($row['sizes']) ? ' sizes="' . htmlspecialchars((string) $row['sizes'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '"' : '';
            $type = isset($row['type']) ? ' type="' . htmlspecialchars((string) $row['type'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '"' : '';
            echo '<link rel="' . $rel . '"' . $type . $sizes . ' href="' . $href . '">' . "\n";
        }

        echo '<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">' . "\n";
        echo '<link rel="icon" href="' . htmlspecialchars($base . '/favicon.ico', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '" type="image/x-icon">' . "\n";
        echo '<meta name="msapplication-TileColor" content="#ffffff">' . "\n";
        echo '<meta name="msapplication-TileImage" content="' . htmlspecialchars($base . '/ms-icon-144x144.png', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '">' . "\n";
        echo '<meta name="theme-color" content="#ffffff">' . "\n";
    }
}
