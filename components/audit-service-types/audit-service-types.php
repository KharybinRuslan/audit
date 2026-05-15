<?php
declare(strict_types=1);

/**
 * Блок «Виды аудиторских услуг».
 *
 * Переопределение на странице (до include):
 * - $auditServiceTypesTitle
 * - $auditServiceTypesIntro
 * - $auditServiceTypesLead
 * - $auditServiceTypesItems (массив строк)
 */
$auditServiceTypesTitle ??= '';
$auditServiceTypesIntro ??= '';
$auditServiceTypesLead ??= '';
$auditServiceTypesItems ??= [];

$auditServiceTypesTitle = trim((string) $auditServiceTypesTitle);
$auditServiceTypesIntro = trim((string) $auditServiceTypesIntro);
$auditServiceTypesLead = trim((string) $auditServiceTypesLead);

if (!is_array($auditServiceTypesItems)) {
    $auditServiceTypesItems = [];
}
$auditServiceTypesItems = array_values(array_filter(
    $auditServiceTypesItems,
    static fn ($item): bool => is_string($item) && trim($item) !== ''
));
?>
<section class="audit-service-types" id="audit-service-types"<?= $auditServiceTypesTitle !== '' ? ' aria-labelledby="audit-service-types-title"' : '' ?>>
    <div class="audit-service-types__inner">
        <?php if ($auditServiceTypesTitle !== ''): ?>
            <h2 class="audit-service-types__title" id="audit-service-types-title"><?= htmlspecialchars($auditServiceTypesTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditServiceTypesIntro !== ''): ?>
            <p class="audit-service-types__intro"><?= htmlspecialchars($auditServiceTypesIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditServiceTypesLead !== ''): ?>
            <p class="audit-service-types__lead"><?= htmlspecialchars($auditServiceTypesLead, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditServiceTypesItems !== []): ?>
            <ul class="audit-service-types__grid">
                <?php foreach ($auditServiceTypesItems as $item): ?>
                    <li class="audit-service-types__card">
                        <span class="audit-service-types__card-text"><?= htmlspecialchars(trim($item), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
