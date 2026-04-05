<?php
declare(strict_types=1);
/** Кнопка «Заказать аудит» — те же классы и сетка, что у .hero__btn; отличия только в SVG (градиент круга + белая стрелка). Перед include: $siteHeaderAuditPanel = true|false */
$siteHeaderAuditIsPanel = !empty($siteHeaderAuditPanel);
$siteHeaderAuditGradId = $siteHeaderAuditIsPanel ? 'header-audit-disc-grad-panel' : 'header-audit-disc-grad';
?>
<button
    type="button"
    class="hero__btn site-header__audit-btn<?= $siteHeaderAuditIsPanel ? ' site-header__audit-btn--panel' : '' ?>"
    data-open-audit-modal
    aria-haspopup="dialog"
    aria-controls="audit-request-modal"
>
    <span class="site-header__audit-label">Заказать аудит</span><span class="hero__btn-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <linearGradient id="<?= htmlspecialchars($siteHeaderAuditGradId, ENT_QUOTES, 'UTF-8') ?>" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="0%" stop-color="#c83222"/>
                <stop offset="100%" stop-color="#e95729"/>
            </linearGradient>
        </defs>
        <circle cx="22.5" cy="22.5" r="22.5" fill="url(#<?= htmlspecialchars($siteHeaderAuditGradId, ENT_QUOTES, 'UTF-8') ?>)"/>
        <g transform="translate(14.5 15)">
            <path d="M1 6.36328C0.447715 6.36328 -4.82823e-08 6.811 0 7.36328C4.82823e-08 7.91557 0.447715 8.36328 1 8.36328L1 7.36328L1 6.36328ZM15.7071 8.07039C16.0976 7.67986 16.0976 7.0467 15.7071 6.65617L9.34314 0.292213C8.95262 -0.0983116 8.31946 -0.0983116 7.92893 0.292213C7.53841 0.682737 7.53841 1.3159 7.92893 1.70643L13.5858 7.36328L7.92893 13.0201C7.53841 13.4107 7.53841 14.0438 7.92893 14.4343C8.31946 14.8249 8.95262 14.8249 9.34315 14.4343L15.7071 8.07039ZM1 7.36328L1 8.36328L15 8.36328L15 7.36328L15 6.36328L1 6.36328L1 7.36328Z" fill="white"/>
        </g>
    </svg></span>
</button>
