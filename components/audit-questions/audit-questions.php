<?php
declare(strict_types=1);

/**
 * Блок «какие задачи решают аудиторские услуги».
 *
 * Переопределение на странице (до include):
 * - $auditQuestionsTitle
 * - $auditQuestionsIntro
 * - $auditQuestionsItems (массив строк)
 * - $auditQuestionsOutro
 */
$auditQuestionsTitle ??= '';
$auditQuestionsIntro ??= '';
$auditQuestionsItems ??= [];
$auditQuestionsOutro ??= '';

$auditQuestionsTitle = trim((string) $auditQuestionsTitle);
$auditQuestionsIntro = trim((string) $auditQuestionsIntro);
$auditQuestionsOutro = trim((string) $auditQuestionsOutro);

if (!is_array($auditQuestionsItems)) {
    $auditQuestionsItems = [];
}
$auditQuestionsItems = array_values(array_filter(
    $auditQuestionsItems,
    static fn ($item): bool => is_string($item) && trim($item) !== ''
));
?>
<section class="audit-questions" id="audit-questions"<?= $auditQuestionsTitle !== '' ? ' aria-labelledby="audit-questions-title"' : '' ?>>
    <div class="audit-questions__inner">
        <?php if ($auditQuestionsTitle !== ''): ?>
            <h2 class="audit-questions__title" id="audit-questions-title"><?= htmlspecialchars($auditQuestionsTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditQuestionsIntro !== ''): ?>
            <p class="audit-questions__intro"><?= htmlspecialchars($auditQuestionsIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditQuestionsItems !== []): ?>
            <ul class="audit-questions__list">
                <?php foreach ($auditQuestionsItems as $item): ?>
                    <li class="audit-questions__item">
                        <span class="audit-questions__check" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false">
                                <rect x="1.25" y="1.25" width="17.5" height="17.5" rx="3.5" stroke="currentColor" stroke-width="1.1" />
                                <path d="M5.5 10.2 8.6 13.3 14.5 6.7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="audit-questions__item-text"><?= htmlspecialchars(trim($item), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($auditQuestionsOutro !== ''): ?>
            <p class="audit-questions__outro"><?= htmlspecialchars($auditQuestionsOutro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
    </div>
</section>
