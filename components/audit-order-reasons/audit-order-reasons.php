<?php
declare(strict_types=1);

/**
 * Блок «когда заказывают аудит»: заголовок, два абзаца, сетка карточек, CTA в модалку.
 *
 * Переопределение на странице (до include):
 * - $auditOrderReasonsTitle
 * - $auditOrderReasonsIntro (массив из двух строк — два абзаца после заголовка)
 * - $auditOrderReasonsItems (массив строк для карточек)
 * - $auditOrderReasonsCtaLabel
 */
$auditOrderReasonsTitle ??= '';
$auditOrderReasonsIntro ??= [];
$auditOrderReasonsItems ??= [];
$auditOrderReasonsCtaLabel ??= 'Оставить заявку';

if (!is_array($auditOrderReasonsIntro)) {
    $auditOrderReasonsIntro = [];
}
$auditOrderReasonsIntro = array_values(array_filter(
    $auditOrderReasonsIntro,
    static fn ($p): bool => is_string($p) && trim($p) !== ''
));

if (!is_array($auditOrderReasonsItems)) {
    $auditOrderReasonsItems = [];
}
$auditOrderReasonsItems = array_values(array_filter(
    $auditOrderReasonsItems,
    static fn ($t): bool => is_string($t) && trim($t) !== ''
));

$auditOrderReasonsTitle = trim((string) $auditOrderReasonsTitle);
$auditOrderReasonsCtaLabel = trim((string) $auditOrderReasonsCtaLabel);
?>
<section class="audit-order-reasons" id="audit-order-reasons"<?= $auditOrderReasonsTitle !== '' ? ' aria-labelledby="audit-order-reasons-title"' : '' ?>>
    <div class="audit-order-reasons__inner">
        <?php if ($auditOrderReasonsTitle !== ''): ?>
            <h2 class="audit-order-reasons__title" id="audit-order-reasons-title"><?= htmlspecialchars($auditOrderReasonsTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditOrderReasonsIntro !== []): ?>
            <div class="audit-order-reasons__intro">
                <?php foreach ($auditOrderReasonsIntro as $p): ?>
                    <p class="audit-order-reasons__p"><?= htmlspecialchars(trim($p), ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($auditOrderReasonsItems !== []): ?>
            <ul class="audit-order-reasons__grid">
                <?php foreach ($auditOrderReasonsItems as $text): ?>
                    <li class="audit-order-reasons__card">
                        <span class="audit-order-reasons__card-text"><?= htmlspecialchars(trim($text), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($auditOrderReasonsCtaLabel !== ''): ?>
            <div class="audit-order-reasons__actions">
                <button
                    type="button"
                    class="audit-order-reasons__btn"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                ><?= htmlspecialchars($auditOrderReasonsCtaLabel, ENT_QUOTES, 'UTF-8') ?></button>
            </div>
        <?php endif; ?>
    </div>
</section>
