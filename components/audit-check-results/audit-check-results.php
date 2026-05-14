<?php
declare(strict_types=1);

/**
 * Компактный текстовый блок: что показывает аудиторская проверка.
 *
 * Переопределение на странице (до include):
 * - $auditCheckResultsTitle
 * - $auditCheckResultsParagraphs (массив абзацев)
 */
$auditCheckResultsTitle ??= '';
$auditCheckResultsParagraphs ??= [];

if (!is_array($auditCheckResultsParagraphs)) {
    $auditCheckResultsParagraphs = [];
}
$auditCheckResultsParagraphs = array_values(array_filter(
    $auditCheckResultsParagraphs,
    static fn ($p): bool => is_string($p) && trim($p) !== ''
));

$auditCheckResultsTitle = trim((string) $auditCheckResultsTitle);
?>
<section class="audit-check-results" id="audit-check-results"<?= $auditCheckResultsTitle !== '' ? ' aria-labelledby="audit-check-results-title"' : '' ?>>
    <div class="audit-check-results__inner">
        <?php if ($auditCheckResultsTitle !== ''): ?>
            <h2 class="audit-check-results__title" id="audit-check-results-title"><?= htmlspecialchars($auditCheckResultsTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditCheckResultsParagraphs !== []): ?>
            <div class="audit-check-results__body">
                <?php foreach ($auditCheckResultsParagraphs as $paragraph): ?>
                    <p class="audit-check-results__p"><?= htmlspecialchars(trim($paragraph), ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
