<?php
declare(strict_types=1);

/**
 * Блок сроков и стоимости аудита.
 *
 * Переопределение на странице (до include):
 * - $auditDeadlinesTitle
 * - $auditDeadlinesIntro
 * - $auditDeadlinesLead
 * - $auditDeadlinesItems (массив строк)
 * - $auditDeadlinesOutro
 * - $auditPricingTitle
 * - $auditPricingIntro
 * - $auditPricingStatCost
 * - $auditPricingStatTime
 * - $auditPricingCtaLabel
 */
$auditDeadlinesTitle ??= '';
$auditDeadlinesIntro ??= '';
$auditDeadlinesLead ??= '';
$auditDeadlinesItems ??= [];
$auditDeadlinesOutro ??= '';
$auditPricingTitle ??= '';
$auditPricingIntro ??= '';
$auditPricingStatCost ??= '';
$auditPricingStatTime ??= '';
$auditPricingCtaLabel ??= 'Бесплатная консультация';

$auditDeadlinesTitle = trim((string) $auditDeadlinesTitle);
$auditDeadlinesIntro = trim((string) $auditDeadlinesIntro);
$auditDeadlinesLead = trim((string) $auditDeadlinesLead);
$auditDeadlinesOutro = trim((string) $auditDeadlinesOutro);
$auditPricingTitle = trim((string) $auditPricingTitle);
$auditPricingIntro = trim((string) $auditPricingIntro);
$auditPricingStatCost = trim((string) $auditPricingStatCost);
$auditPricingStatTime = trim((string) $auditPricingStatTime);
$auditPricingCtaLabel = trim((string) $auditPricingCtaLabel);

if (!is_array($auditDeadlinesItems)) {
    $auditDeadlinesItems = [];
}
$auditDeadlinesItems = array_values(array_filter(
    $auditDeadlinesItems,
    static fn ($item): bool => is_string($item) && trim($item) !== ''
));
?>
<section class="audit-deadlines-pricing" id="audit-deadlines-pricing"<?= $auditDeadlinesTitle !== '' ? ' aria-labelledby="audit-deadlines-pricing-title"' : '' ?>>
    <div class="audit-deadlines-pricing__inner">
        <?php if ($auditDeadlinesTitle !== ''): ?>
            <h2 class="audit-deadlines-pricing__title" id="audit-deadlines-pricing-title"><?= htmlspecialchars($auditDeadlinesTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditDeadlinesIntro !== ''): ?>
            <p class="audit-deadlines-pricing__intro"><?= htmlspecialchars($auditDeadlinesIntro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditDeadlinesLead !== ''): ?>
            <p class="audit-deadlines-pricing__lead"><?= htmlspecialchars($auditDeadlinesLead, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <?php if ($auditDeadlinesItems !== []): ?>
            <ul class="audit-deadlines-pricing__grid">
                <?php foreach ($auditDeadlinesItems as $item): ?>
                    <li class="audit-deadlines-pricing__card">
                        <span class="audit-deadlines-pricing__card-text"><?= htmlspecialchars(trim($item), ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($auditDeadlinesOutro !== ''): ?>
            <p class="audit-deadlines-pricing__outro"><?= htmlspecialchars($auditDeadlinesOutro, ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>

        <?php if ($auditPricingTitle !== '' || $auditPricingIntro !== '' || $auditPricingStatCost !== '' || $auditPricingStatTime !== '' || $auditPricingCtaLabel !== ''): ?>
            <div class="audit-deadlines-pricing__panel" aria-label="Стоимость аудиторских услуг">
                <div class="audit-deadlines-pricing__panel-head">
                    <?php if ($auditPricingTitle !== ''): ?>
                        <h3 class="audit-deadlines-pricing__panel-title"><?= htmlspecialchars($auditPricingTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                    <?php endif; ?>
                    <?php if ($auditPricingIntro !== ''): ?>
                        <p class="audit-deadlines-pricing__panel-intro"><?= htmlspecialchars($auditPricingIntro, ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>
                </div>
                <div class="audit-deadlines-pricing__stats">
                    <?php if ($auditPricingStatCost !== ''): ?>
                        <div class="audit-deadlines-pricing__stat">
                            <span class="audit-deadlines-pricing__stat-label">Стоимость аудита</span>
                            <strong class="audit-deadlines-pricing__stat-value"><?= htmlspecialchars($auditPricingStatCost, ENT_QUOTES, 'UTF-8') ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ($auditPricingStatTime !== ''): ?>
                        <div class="audit-deadlines-pricing__stat">
                            <span class="audit-deadlines-pricing__stat-label">Сроки проведения</span>
                            <strong class="audit-deadlines-pricing__stat-value"><?= htmlspecialchars($auditPricingStatTime, ENT_QUOTES, 'UTF-8') ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ($auditPricingCtaLabel !== ''): ?>
                        <div class="audit-deadlines-pricing__cta-wrap">
                            <button
                                type="button"
                                class="audit-deadlines-pricing__cta"
                                data-open-audit-modal
                                aria-haspopup="dialog"
                                aria-controls="audit-request-modal"
                            ><?= htmlspecialchars($auditPricingCtaLabel, ENT_QUOTES, 'UTF-8') ?></button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
