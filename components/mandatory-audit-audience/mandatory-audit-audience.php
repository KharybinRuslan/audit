<?php
declare(strict_types=1);
/**
 * «Для кого необходим обязательный аудит» — 4+1 карточки, CTA открывает модалку аудита.
 *
 * @var string $mandatoryAuditAudienceHeading
 * @var list<array{body_html: string}> $mandatoryAuditAudienceCards ровно 5 элементов, body_html — доверенный HTML
 */
$mandatoryAuditAudienceHeading ??= '';
$mandatoryAuditAudienceCards ??= [];
$firstFour = array_slice($mandatoryAuditAudienceCards, 0, 4);
$fifth = $mandatoryAuditAudienceCards[4] ?? null;

$renderAudienceCard = static function (int $num, string $bodyHtml): void {
    $idx = str_pad((string) $num, 2, '0', STR_PAD_LEFT);
    ?>
    <article class="mandatory-audit-audience__card">
        <div class="mandatory-audit-audience__card-body">
            <div class="mandatory-audit-audience__text"><?= $bodyHtml ?></div>
        </div>
        <span class="mandatory-audit-audience__index" aria-hidden="true">/<?= htmlspecialchars($idx, ENT_QUOTES, 'UTF-8') ?></span>
    </article>
    <?php
};
?>
<section class="mandatory-audit-audience" id="mandatory-audit-audience">
    <div class="mandatory-audit-audience__glow mandatory-audit-audience__glow--left" aria-hidden="true"></div>
    <div class="mandatory-audit-audience__inner">
        <div class="mandatory-audit-audience__layout">
            <header class="mandatory-audit-audience__head">
                <?php if ($mandatoryAuditAudienceHeading !== ''): ?>
                    <h2 class="mandatory-audit-audience__heading"><?= htmlspecialchars($mandatoryAuditAudienceHeading, ENT_QUOTES, 'UTF-8') ?></h2>
                <?php endif; ?>
                <button
                    type="button"
                    class="hero__btn mandatory-audit-audience__cta"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                >
                    Консультация
                    <span class="hero__btn-icon" aria-hidden="true">
                        <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="white" />
                            <path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726" />
                        </svg>
                    </span>
                </button>
            </header>
            <div class="mandatory-audit-audience__tiles">
                <?php
                $n = 1;
                foreach ($firstFour as $item) {
                    $renderAudienceCard($n, $item['body_html'] ?? '');
                    $n++;
                }
                ?>
            </div>
            <?php if ($fifth !== null): ?>
                <div class="mandatory-audit-audience__card5-wrap">
                    <?php $renderAudienceCard(5, $fifth['body_html'] ?? ''); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
