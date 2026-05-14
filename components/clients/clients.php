<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
/**
 * Компонент: Clients — наши клиенты
 */
?>
<section class="clients" id="clients">
    <div class="clients__inner">
        <h2 class="clients__title">НАШИ<br>КЛИЕНТЫ</h2>
        <?php aud_img_picture_webp('/img/c1.png', 'Газпром', ['class' => 'clients__logo', 'loading' => 'lazy', 'decoding' => 'async']); ?>
        <?php aud_img_picture_webp('/img/c2.png', 'РЖД', ['class' => 'clients__logo', 'loading' => 'lazy', 'decoding' => 'async']); ?>
        <?php aud_img_picture_webp('/img/c3.png', 'Магнит', ['class' => 'clients__logo', 'loading' => 'lazy', 'decoding' => 'async']); ?>
        <?php aud_img_picture_webp('/img/c4.png', 'Росатом', ['class' => 'clients__logo', 'loading' => 'lazy', 'decoding' => 'async']); ?>
        <?php aud_img_picture_webp('/img/c5.png', 'X5 Group', ['class' => 'clients__logo', 'loading' => 'lazy', 'decoding' => 'async']); ?>
    </div>
</section>
