<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';

/**
 * Финальный CTA: фон + стеклянная плашка + кнопка открытия модалки.
 *
 * Переопределение на странице (до include):
 * - $auditFinalCtaTitle
 * - $auditFinalCtaText
 * - $auditFinalCtaButtonLabel
 * - $auditFinalCtaBgUrl
 */
$auditFinalCtaTitle ??= '';
$auditFinalCtaText ??= '';
$auditFinalCtaButtonLabel ??= 'Оставить заявку';
$auditFinalCtaBgUrl ??= '/img/audit/audit.jpg';

$auditFinalCtaTitle = trim((string) $auditFinalCtaTitle);
$auditFinalCtaText = trim((string) $auditFinalCtaText);
$auditFinalCtaButtonLabel = trim((string) $auditFinalCtaButtonLabel);
$auditFinalCtaBgUrl = trim((string) $auditFinalCtaBgUrl);

?>
<section class="audit-final-cta" id="audit-final-cta"<?= $auditFinalCtaTitle !== '' ? ' aria-labelledby="audit-final-cta-title"' : '' ?>>
    <div class="audit-final-cta__bg" aria-hidden="true">
        <?php if ($auditFinalCtaBgUrl !== ''): ?>
            <?php aud_img_picture_webp($auditFinalCtaBgUrl, '', ['class' => 'audit-final-cta__bg-img', 'width' => 1920, 'height' => 720, 'decoding' => 'async', 'loading' => 'lazy']); ?>
        <?php endif; ?>
    </div>
    <div class="audit-final-cta__inner">
        <div class="audit-final-cta__glass">
            <?php if ($auditFinalCtaTitle !== ''): ?>
                <h2 class="audit-final-cta__title" id="audit-final-cta-title"><?= htmlspecialchars($auditFinalCtaTitle, ENT_QUOTES, 'UTF-8') ?></h2>
            <?php endif; ?>
            <?php if ($auditFinalCtaText !== ''): ?>
                <p class="audit-final-cta__text"><?= htmlspecialchars($auditFinalCtaText, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
            <?php if ($auditFinalCtaButtonLabel !== ''): ?>
                <button
                    type="button"
                    class="audit-final-cta__btn"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                ><?= htmlspecialchars($auditFinalCtaButtonLabel, ENT_QUOTES, 'UTF-8') ?></button>
            <?php endif; ?>
        </div>
    </div>
</section>
