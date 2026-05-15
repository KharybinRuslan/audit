<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$files = [
    __DIR__ . '/main.css',
    $root . '/components/site-header/site-header.css',
    $root . '/components/hero/hero.css',
];

foreach ($files as $path) {
    if (!is_readable($path)) {
        http_response_code(500);
        header('Content-Type: text/plain; charset=UTF-8');
        echo 'Critical CSS source missing';
        exit;
    }
}

header('Content-Type: text/css; charset=UTF-8');
/* Долгий кеш: при правках исходников обновите query или сбросьте кеш CDN */
header('Cache-Control: public, max-age=31536000, immutable');

foreach ($files as $path) {
    readfile($path);
    echo "\n";
}
