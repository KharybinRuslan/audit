<?php
declare(strict_types=1);
$j = dirname(__DIR__) . '/img/audit/finans.jpg';
$w = dirname(__DIR__) . '/img/audit/finans.webp';
if (!is_file($j)) {
    fwrite(STDERR, "missing: $j\n");
    exit(1);
}
$im = @imagecreatefromjpeg($j);
if (!$im) {
    fwrite(STDERR, "fail read jpeg\n");
    exit(1);
}
imagewebp($im, $w, 82);
imagedestroy($im);
echo "ok $w\n";
