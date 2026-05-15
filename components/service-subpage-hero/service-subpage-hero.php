<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
/**
 * Первый блок подстраницы: слева колонка (заголовок + текст), справа иллюстрация.
 * На узкой ширине — строка «заголовок | картинка», ниже текст (flex + order).
 */
$serviceSubpageHeroImage ??= '/img/audit/audit.jpg';
?>
<section class="service-subpage-hero" id="service-subpage-hero">
    <div class="service-subpage-hero__glow service-subpage-hero__glow--left" aria-hidden="true"></div>
    <div class="service-subpage-hero__glow service-subpage-hero__glow--right" aria-hidden="true"></div>
    <div class="service-subpage-hero__inner">
        <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && $breadcrumbs !== []): ?>
            <?php include __DIR__ . '/../breadcrumbs/breadcrumbs.php'; ?>
        <?php endif; ?>
        <div class="service-subpage-hero__rule" aria-hidden="true"></div>
        <div class="service-subpage-hero__layout">
            <div class="service-subpage-hero__copy">
                <h1 class="service-subpage-hero__title"><?= htmlspecialchars($serviceSubpageHeroTitle, ENT_QUOTES, 'UTF-8') ?></h1>
                <div class="service-subpage-hero__body">
                    <?= $serviceSubpageHeroBodyHtml ?? '' ?>
                </div>
            </div>
            <div class="service-subpage-hero__figure">
                <?php aud_img_picture_webp($serviceSubpageHeroImage, '', ['class' => 'service-subpage-hero__img', 'width' => 560, 'height' => 520, 'decoding' => 'async']); ?>
            </div>
        </div>
    </div>
</section>
