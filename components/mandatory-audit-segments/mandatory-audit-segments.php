<?php
declare(strict_types=1);
/**
 * Два текстовых сегмента (АО / НКО) для страницы обязательного аудита.
 *
 * @var string $mandatoryAuditSegmentsEyebrow подпись над колонками
 * @var string $mandatoryAuditSegmentsColumnLeftHtml разметка левой колонки (доверенный HTML со страницы)
 * @var string $mandatoryAuditSegmentsColumnRightHtml разметка правой колонки
 */
$mandatoryAuditSegmentsEyebrow ??= '';
?>
<section class="mandatory-audit-segments" id="mandatory-audit-segments">
    <div class="mandatory-audit-segments__inner">
        <?php if ($mandatoryAuditSegmentsEyebrow !== ''): ?>
            <p class="mandatory-audit-segments__eyebrow"><?= htmlspecialchars($mandatoryAuditSegmentsEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <div class="mandatory-audit-segments__grid">
            <div class="mandatory-audit-segments__col mandatory-audit-segments__col--left">
                <?= $mandatoryAuditSegmentsColumnLeftHtml ?? '' ?>
            </div>
            <div class="mandatory-audit-segments__divider" aria-hidden="true"></div>
            <div class="mandatory-audit-segments__col mandatory-audit-segments__col--right">
                <?= $mandatoryAuditSegmentsColumnRightHtml ?? '' ?>
            </div>
        </div>
    </div>
</section>
