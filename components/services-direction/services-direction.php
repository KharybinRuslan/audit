<?php
require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
/**
 * Hero страницы направления: заголовок, лид, изображение (без слайдера).
 *
 * Переопределение на странице (до include): $servicesDirectionTitleAccent, $servicesDirectionTitleRestHtml,
 * $servicesDirectionDesc, $servicesDirectionImage.
 */
$servicesDirectionTitleAccent ??= 'Аудиторские услуги';
$servicesDirectionTitleRestHtml ??= ' —<br>обязательный и финансовый аудит без рисков';
$servicesDirectionDesc ??= 'Фундамент нашего подхода к аудиту лежит в комплексной оценке рисков, оперативном выявлении ключевых вопросов и их четкой коммуникации';
$servicesDirectionImage ??= '/img/block-audit.png';
/** @var string опционально: внешняя ссылка под описанием (например партнёр ВШЭП) */
$servicesDirectionExternalLinkHref ??= '';
$servicesDirectionExternalLinkLabel ??= '';
?>
<section class="services-direction" id="services-direction">
    <div class="services-direction__inner">
        <div class="services-direction__main">
            <div class="services-direction__content">
                <h1 class="services-direction__title">
                    <span class="services-direction__title-accent"><?= htmlspecialchars($servicesDirectionTitleAccent, ENT_QUOTES, 'UTF-8') ?></span><span class="services-direction__title-rest"><?= $servicesDirectionTitleRestHtml ?></span>
                </h1>
                <p class="services-direction__desc"><?= htmlspecialchars($servicesDirectionDesc, ENT_QUOTES, 'UTF-8') ?></p>
                <?php if ($servicesDirectionExternalLinkHref !== ''): ?>
                <p class="services-direction__link">
                    <a href="<?= htmlspecialchars($servicesDirectionExternalLinkHref, ENT_QUOTES, 'UTF-8') ?>" class="services-direction__link-a" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($servicesDirectionExternalLinkLabel !== '' ? $servicesDirectionExternalLinkLabel : $servicesDirectionExternalLinkHref, ENT_QUOTES, 'UTF-8') ?></a>
                </p>
                <?php endif; ?>
            </div>
            <div class="services-direction__media">
                <?php aud_img_picture_webp($servicesDirectionImage, '', ['class' => 'services-direction__img', 'width' => 560, 'height' => 420, 'loading' => 'lazy', 'decoding' => 'async']); ?>
            </div>
        </div>
    </div>
</section>
