<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/seo/sitemap.php';

header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=3600');

echo aud_seo_build_sitemap_xml();
