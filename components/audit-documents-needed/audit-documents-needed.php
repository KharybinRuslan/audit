<?php
declare(strict_types=1);

/**
 * Блок: какие документы нужны для аудита.
 *
 * Переопределение на странице (до include):
 * - $auditDocumentsNeededTitle
 * - $auditDocumentsNeededIntro
 * - $auditDocumentsNeededItems (массив строк)
 * - $auditDocumentsNeededOutro
 */
$auditDocumentsNeededTitle ??= '';
$auditDocumentsNeededIntro ??= '';
$auditDocumentsNeededItems ??= [];
$auditDocumentsNeededOutro ??= '';

$auditDocumentsNeededTitle = trim((string) $auditDocumentsNeededTitle);
$auditDocumentsNeededIntro = trim((string) $auditDocumentsNeededIntro);
$auditDocumentsNeededOutro = trim((string) $auditDocumentsNeededOutro);

if (!is_array($auditDocumentsNeededItems)) {
    $auditDocumentsNeededItems = [];
}
$auditDocumentsNeededItems = array_values(array_filter(
    $auditDocumentsNeededItems,
    static fn ($item): bool => is_string($item) && trim($item) !== ''
));
?>
<section class="audit-documents-needed" id="audit-documents-needed"<?= $auditDocumentsNeededTitle !== '' ? ' aria-labelledby="audit-documents-needed-title"' : '' ?>>
    <div class="audit-documents-needed__inner">
        <?php if ($auditDocumentsNeededTitle !== ''): ?>
            <h2 class="audit-documents-needed__title" id="audit-documents-needed-title"><?= htmlspecialchars($auditDocumentsNeededTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditDocumentsNeededIntro !== ''): ?>
            <p class="audit-documents-needed__intro"><?= htmlspecialchars($auditDocumentsNeededIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditDocumentsNeededItems !== []): ?>
            <ul class="audit-documents-needed__list">
                <?php foreach ($auditDocumentsNeededItems as $item): ?>
                    <li class="audit-documents-needed__item">
                        <span class="audit-documents-needed__check" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                <rect x="1.25" y="1.25" width="17.5" height="17.5" rx="3.5" stroke="currentColor" stroke-width="1.1" />
                                <path d="M5.5 10.2 8.6 13.3 14.5 6.7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="audit-documents-needed__item-text"><?= htmlspecialchars(trim($item), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($auditDocumentsNeededOutro !== ''): ?>
            <p class="audit-documents-needed__outro"><?= htmlspecialchars($auditDocumentsNeededOutro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </div>
</section>
