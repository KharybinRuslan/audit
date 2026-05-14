<?php
declare(strict_types=1);
/**
 * Блок «Польза обязательного аудита» — сетка карточек. Данные задаёт страница.
 *
 * @var string $mandatoryAuditBenefitsHeadingLead белая часть заголовка (без закрывающего пробела по желанию)
 * @var string $mandatoryAuditBenefitsHeadingAccent акцентная часть (например ООО "Аудит Топ Эксперт")
 * @var list<array{title: string, text: string}> $mandatoryAuditBenefitsCards
 */
$mandatoryAuditBenefitsHeadingLead ??= '';
$mandatoryAuditBenefitsHeadingAccent ??= '';
$mandatoryAuditBenefitsCards ??= [];
?>
<section class="mandatory-audit-benefits" id="mandatory-audit-benefits">
    <div class="mandatory-audit-benefits__glow" aria-hidden="true"></div>
    <div class="mandatory-audit-benefits__inner">
        <?php if ($mandatoryAuditBenefitsHeadingLead !== '' || $mandatoryAuditBenefitsHeadingAccent !== ''): ?>
            <h2 class="mandatory-audit-benefits__heading">
                <?php if ($mandatoryAuditBenefitsHeadingLead !== ''): ?>
                    <span class="mandatory-audit-benefits__heading-lead"><?= htmlspecialchars($mandatoryAuditBenefitsHeadingLead, ENT_QUOTES, 'UTF-8') ?></span><?php if ($mandatoryAuditBenefitsHeadingAccent !== ''): ?> <span class="mandatory-audit-benefits__heading-accent"><?= htmlspecialchars($mandatoryAuditBenefitsHeadingAccent, ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?>
                <?php elseif ($mandatoryAuditBenefitsHeadingAccent !== ''): ?>
                    <span class="mandatory-audit-benefits__heading-accent"><?= htmlspecialchars($mandatoryAuditBenefitsHeadingAccent, ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>
            </h2>
        <?php endif; ?>
        <div class="mandatory-audit-benefits__grid">
            <?php foreach ($mandatoryAuditBenefitsCards as $card): ?>
                <article class="mandatory-audit-benefits__card">
                    <h3 class="mandatory-audit-benefits__card-title"><?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                    <p class="mandatory-audit-benefits__card-text"><?= htmlspecialchars($card['text'], ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
