<?php
declare(strict_types=1);

/**
 * Блок подготовки к обязательному аудиту.
 * Переиспользует типографику/карточки из audit-deadlines-pricing.css
 * (без отдельного CSS-файла).
 *
 * Переопределение на странице (до include):
 * - $auditMandatoryPrepTitle
 * - $auditMandatoryPrepIntro
 * - $auditMandatoryPrepLead
 * - $auditMandatoryPrepItems (массив строк)
 * - $auditMandatoryPrepOutro
 */
$auditMandatoryPrepTitle ??= '';
$auditMandatoryPrepIntro ??= '';
$auditMandatoryPrepLead ??= '';
$auditMandatoryPrepItems ??= [];
$auditMandatoryPrepOutro ??= '';

$auditMandatoryPrepTitle = trim((string) $auditMandatoryPrepTitle);
$auditMandatoryPrepIntro = trim((string) $auditMandatoryPrepIntro);
$auditMandatoryPrepLead = trim((string) $auditMandatoryPrepLead);
$auditMandatoryPrepOutro = trim((string) $auditMandatoryPrepOutro);

if (!is_array($auditMandatoryPrepItems)) {
    $auditMandatoryPrepItems = [];
}
$auditMandatoryPrepItems = array_values(array_filter(
    $auditMandatoryPrepItems,
    static fn ($item): bool => is_string($item) && trim($item) !== ''
));
?>
<section class="audit-deadlines-pricing" id="audit-mandatory-prep"<?= $auditMandatoryPrepTitle !== '' ? ' aria-labelledby="audit-mandatory-prep-title"' : '' ?>>
    <div class="audit-deadlines-pricing__inner">
        <?php if ($auditMandatoryPrepTitle !== ''): ?>
            <h2 class="audit-deadlines-pricing__title" id="audit-mandatory-prep-title"><?= htmlspecialchars($auditMandatoryPrepTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditMandatoryPrepIntro !== ''): ?>
            <p class="audit-deadlines-pricing__intro"><?= htmlspecialchars($auditMandatoryPrepIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditMandatoryPrepLead !== ''): ?>
            <p class="audit-deadlines-pricing__lead"><?= htmlspecialchars($auditMandatoryPrepLead, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditMandatoryPrepItems !== []): ?>
            <ul class="audit-deadlines-pricing__grid">
                <?php foreach ($auditMandatoryPrepItems as $item): ?>
                    <li class="audit-deadlines-pricing__card">
                        <span class="audit-deadlines-pricing__card-text"><?= htmlspecialchars(trim($item), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($auditMandatoryPrepOutro !== ''): ?>
            <p class="audit-deadlines-pricing__outro"><?= htmlspecialchars($auditMandatoryPrepOutro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </div>
</section>
