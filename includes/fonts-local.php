<?php
declare(strict_types=1);
$h = htmlspecialchars('/css/fonts-local.css', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<link rel="stylesheet" href="<?= $h ?>" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="<?= $h ?>"></noscript>
