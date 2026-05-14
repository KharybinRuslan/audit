<?php
declare(strict_types=1);
$j = dirname(__DIR__) . '/img/audit/konsalting2.jpg';
$w = dirname(__DIR__) . '/img/audit/konsalting2.webp';
if (!is_file($j)) {
    fwrite(STDERR, "missing: $j\n");
    exit(1);
}
$im = @imagecreatefromjpeg($j);
if (!$im) {
    fwrite(STDERR, "fail read jpeg\n");
    exit(1);
}
imagewebp($im, $w, 85);
imagedestroy($im);
echo "ok $w\n";
