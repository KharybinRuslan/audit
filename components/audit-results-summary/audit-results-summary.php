<?php
declare(strict_types=1);

/**
 * Блок: что вы получите по итогам аудита.
 *
 * Переопределение на странице (до include):
 * - $auditResultsSummaryTitle
 * - $auditResultsSummaryIntro
 * - $auditResultsSummaryLead
 * - $auditResultsSummaryItems (массив строк)
 * - $auditResultsSummaryOutro
 */
$auditResultsSummaryTitle ??= '';
$auditResultsSummaryIntro ??= '';
$auditResultsSummaryLead ??= '';
$auditResultsSummaryItems ??= [];
$auditResultsSummaryOutro ??= '';

$auditResultsSummaryTitle = trim((string) $auditResultsSummaryTitle);
$auditResultsSummaryIntro = trim((string) $auditResultsSummaryIntro);
$auditResultsSummaryLead = trim((string) $auditResultsSummaryLead);
$auditResultsSummaryOutro = trim((string) $auditResultsSummaryOutro);

if (!is_array($auditResultsSummaryItems)) {
    $auditResultsSummaryItems = [];
}
$auditResultsSummaryItems = array_values(array_filter(
    $auditResultsSummaryItems,
    static fn ($item): bool => is_string($item) && trim($item) !== ''
));
?>
<section class="audit-results-summary" id="audit-results-summary"<?= $auditResultsSummaryTitle !== '' ? ' aria-labelledby="audit-results-summary-title"' : '' ?>>
    <div class="audit-results-summary__inner">
        <?php if ($auditResultsSummaryTitle !== ''): ?>
            <h2 class="audit-results-summary__title" id="audit-results-summary-title"><?= htmlspecialchars($auditResultsSummaryTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditResultsSummaryIntro !== ''): ?>
            <p class="audit-results-summary__intro"><?= htmlspecialchars($auditResultsSummaryIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditResultsSummaryLead !== ''): ?>
            <p class="audit-results-summary__lead"><?= htmlspecialchars($auditResultsSummaryLead, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditResultsSummaryItems !== []): ?>
            <ul class="audit-results-summary__grid">
                <?php foreach ($auditResultsSummaryItems as $item): ?>
                    <li class="audit-results-summary__card">
                        <span class="audit-results-summary__card-text"><?= htmlspecialchars(trim($item), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($auditResultsSummaryOutro !== ''): ?>
            <p class="audit-results-summary__outro"><?= htmlspecialchars($auditResultsSummaryOutro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </div>
</section>
