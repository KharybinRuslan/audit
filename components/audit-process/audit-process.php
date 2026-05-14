<?php
declare(strict_types=1);

/**
 * Блок процесса аудита: 6 шагов + CTA.
 *
 * Переопределение на странице (до include):
 * - $auditProcessTitle
 * - $auditProcessIntro
 * - $auditProcessSteps (массив [number, title, text])
 * - $auditProcessCtaLabel
 */
$auditProcessTitle ??= '';
$auditProcessIntro ??= '';
$auditProcessSteps ??= [];
$auditProcessCtaLabel ??= 'Оставить заявку';

$auditProcessTitle = trim((string) $auditProcessTitle);
$auditProcessIntro = trim((string) $auditProcessIntro);
$auditProcessCtaLabel = trim((string) $auditProcessCtaLabel);

if (!is_array($auditProcessSteps)) {
    $auditProcessSteps = [];
}
$auditProcessSteps = array_values(array_filter(
    $auditProcessSteps,
    static function ($step): bool {
        return is_array($step)
            && isset($step['number'], $step['title'], $step['text'])
            && trim((string) $step['number']) !== ''
            && trim((string) $step['title']) !== ''
            && trim((string) $step['text']) !== '';
    }
));
?>
<section class="audit-process" id="audit-process"<?= $auditProcessTitle !== '' ? ' aria-labelledby="audit-process-title"' : '' ?>>
    <div class="audit-process__inner">
        <?php if ($auditProcessTitle !== ''): ?>
            <h2 class="audit-process__title" id="audit-process-title"><?= htmlspecialchars($auditProcessTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditProcessIntro !== ''): ?>
            <p class="audit-process__intro"><?= htmlspecialchars($auditProcessIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditProcessSteps !== []): ?>
            <ol class="audit-process__list">
                <?php foreach ($auditProcessSteps as $step): ?>
                    <li class="audit-process__item">
                        <span class="audit-process__num"><?= htmlspecialchars((string) $step['number'], ENT_QUOTES, 'UTF-8') ?></span>
                        <h3 class="audit-process__item-title"><?= htmlspecialchars((string) $step['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="audit-process__item-text"><?= htmlspecialchars((string) $step['text'], ENT_QUOTES, 'UTF-8') ?></p>
                    </li>
                <?php endforeach; ?>
            </ol>
        <?php endif; ?>
        <?php if ($auditProcessCtaLabel !== ''): ?>
            <div class="audit-process__actions">
                <button
                    type="button"
                    class="audit-process__btn"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                ><?= htmlspecialchars($auditProcessCtaLabel, ENT_QUOTES, 'UTF-8') ?></button>
            </div>
        <?php endif; ?>
    </div>
</section>
