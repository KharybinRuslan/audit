<?php
declare(strict_types=1);
$base = dirname(__DIR__) . '/img/audit';
$files = ['Initsiativnyy-audit', 'kompleksnyy-audit', 'nalogovyy-audit', 'finansovyy-audit', 'kadrovyy-audit'];
foreach ($files as $b) {
    $p = $base . '/' . $b . '.png';
    $o = $base . '/' . $b . '.webp';
    if (!is_file($p)) {
        fwrite(STDERR, "skip missing: $p\n");
        continue;
    }
    $im = @imagecreatefrompng($p);
    if (!$im) {
        fwrite(STDERR, "fail read: $p\n");
        continue;
    }
    if (!imageistruecolor($im)) {
        imagepalettetotruecolor($im);
    }
    imagealphablending($im, true);
    imagesavealpha($im, true);
    imagewebp($im, $o, 82);
    imagedestroy($im);
    echo "ok $o\n";
}
