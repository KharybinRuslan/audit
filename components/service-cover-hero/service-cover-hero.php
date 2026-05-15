<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';

/**
 * Герой услуги: фон + лид + буллеты + CTA (кнопка открывает модалку формы заявки).
 *
 * Задаётся на странице до include (пример — pages/audit.php):
 * - $serviceCoverHeroTitle, $serviceCoverHeroLead, $serviceCoverHeroBullets, $serviceCoverHeroNote
 * - $serviceCoverHeroBgUrl (опционально, /img/...; иначе без фото)
 * - $serviceCoverHeroCtaPrimaryLabel (по умолчанию «Получить консультацию»)
 * - $breadcrumbs — если задан, крошки здесь (внешний include breadcrumbs.php не подключайте)
 */
$serviceCoverHeroTitle ??= '';
$serviceCoverHeroLead ??= '';
$serviceCoverHeroBullets ??= [];
$serviceCoverHeroNote ??= '';
$serviceCoverHeroBgUrl ??= '';
$serviceCoverHeroCtaPrimaryLabel ??= 'Получить консультацию';

$serviceCoverHeroTitle = trim((string) $serviceCoverHeroTitle);
$serviceCoverHeroLead = trim((string) $serviceCoverHeroLead);
$serviceCoverHeroNote = trim((string) $serviceCoverHeroNote);
$serviceCoverHeroBgUrl = trim((string) $serviceCoverHeroBgUrl);

if (!is_array($serviceCoverHeroBullets)) {
    $serviceCoverHeroBullets = [];
}
$serviceCoverHeroBullets = array_values(array_filter(
    $serviceCoverHeroBullets,
    static fn ($line): bool => is_string($line) && trim($line) !== ''
));

?>
<section class="service-cover-hero" id="service-cover-hero"<?= $serviceCoverHeroTitle !== '' ? ' aria-labelledby="service-cover-hero-title"' : '' ?>>
    <div class="service-cover-hero__bg" aria-hidden="true">
        <?php if ($serviceCoverHeroBgUrl !== ''): ?>
            <?php aud_img_picture_webp($serviceCoverHeroBgUrl, '', ['class' => 'service-cover-hero__bg-img', 'width' => 1920, 'height' => 1080, 'decoding' => 'async', 'fetchpriority' => 'high', 'loading' => 'eager']); ?>
        <?php endif; ?>
    </div>
    <div class="service-cover-hero__inner">
        <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && $breadcrumbs !== []): ?>
            <?php include __DIR__ . '/../breadcrumbs/breadcrumbs.php'; ?>
        <?php endif; ?>
        <div class="service-cover-hero__content">
            <?php if ($serviceCoverHeroTitle !== ''): ?>
                <h1 class="service-cover-hero__title" id="service-cover-hero-title"><?= htmlspecialchars($serviceCoverHeroTitle, ENT_QUOTES, 'UTF-8') ?></h1>
            <?php endif; ?>
            <?php if ($serviceCoverHeroLead !== ''): ?>
                <p class="service-cover-hero__lead"><?= htmlspecialchars($serviceCoverHeroLead, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
            <?php if ($serviceCoverHeroBullets !== []): ?>
                <ul class="service-cover-hero__list">
                    <?php foreach ($serviceCoverHeroBullets as $line): ?>
                        <li class="service-cover-hero__item">
                            <span class="service-cover-hero__check" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                    <rect x="1.25" y="1.25" width="17.5" height="17.5" rx="3.5" stroke="currentColor" stroke-width="1.1" />
                                    <path d="M5.5 10.2 8.6 13.3 14.5 6.7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="service-cover-hero__item-text"><?= htmlspecialchars(trim($line), ENT_QUOTES, 'UTF-8') ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="service-cover-hero__actions">
                <button
                    type="button"
                    class="service-cover-hero__btn service-cover-hero__btn--ghost"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                ><?= htmlspecialchars($serviceCoverHeroCtaPrimaryLabel, ENT_QUOTES, 'UTF-8') ?></button>
            </div>
            <?php if ($serviceCoverHeroNote !== ''): ?>
                <p class="service-cover-hero__note"><?= htmlspecialchars($serviceCoverHeroNote, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
