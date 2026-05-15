<?php

declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
require_once dirname(__DIR__, 2) . '/includes/services-home-slides.php';

/**
 * Компонент: Services — блок услуг со слайдером (навигация = разделы меню шапки).
 */
$servicesSlideRows = aud_services_home_slide_rows();
$servicesFirst = $servicesSlideRows[0] ?? null;
$servicesFirstDesc = $servicesFirst !== null ? (string) $servicesFirst['desc'] : '';
$servicesFirstHref = $servicesFirst !== null ? (string) $servicesFirst['href'] : '/services';
$servicesJson = json_encode(
    $servicesSlideRows,
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_THROW_ON_ERROR
);
?>
<section class="services" id="services">
    <svg xmlns="http://www.w3.org/2000/svg" class="services__line-defs" aria-hidden="true">
        <defs>
            <linearGradient id="services-line-gradient" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#dd6f20"/><stop offset="100%" stop-color="#e02727"/></linearGradient>
        </defs>
    </svg>
    <script type="application/json" id="services-slide-data"><?= $servicesJson ?></script>
    <div class="services__inner">
        <div class="services__header">
            <a href="/services" class="services__all-link">Все услуги</a>
        </div>
        <div class="services__main">
            <div class="services__content">
                <h2 class="services__title">Аудиторские услуги <span class="services__title-accent">ООО "Аудит Топ Эксперт"</span> — обязательный и финансовый аудит без рисков</h2>
                <div class="services__slider-wrap">
                    <nav class="services__nav swiper" aria-label="Услуги" id="services-nav-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($servicesSlideRows as $i => $row) {
                                $isActive = $i === 0;
                                $activeItem = $isActive ? ' services__nav-item--active' : '';
                                $loadingLine = $isActive ? ' services__nav-line--loading' : '';
                                $labelEsc = htmlspecialchars((string) $row['label'], ENT_QUOTES, 'UTF-8');
                                ?>
                            <div class="swiper-slide services__nav-slide" data-slide-index="<?= (int) $i ?>">
                                <div class="services__nav-item<?= $activeItem ?>" data-slide="<?= (int) $i ?>"><span class="services__nav-text"><?= $labelEsc ?></span></div>
                                <svg class="services__nav-line<?= $loadingLine ?>" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <?php } ?>
                        </div>
                    </nav>
                </div>
                <p class="services__desc" id="services-desc"><?= htmlspecialchars($servicesFirstDesc, ENT_QUOTES, 'UTF-8') ?></p>
                <a href="<?= htmlspecialchars($servicesFirstHref, ENT_QUOTES, 'UTF-8') ?>" class="services__link" id="services-link">Перейти на страницу</a>
            </div>
            <div class="services__media">
                <?php aud_img_picture_webp('/img/block-audit.png', '', ['class' => 'services__img', 'width' => 560, 'height' => 420, 'fetchpriority' => 'high', 'decoding' => 'async']); ?>
            </div>
        </div>
    </div>
</section>
