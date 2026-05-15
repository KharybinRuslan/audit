<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/seo/sitemap.php';

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=86400');

echo aud_seo_build_robots_txt();
