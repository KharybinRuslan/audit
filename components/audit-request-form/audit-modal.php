<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/load-env.php';
aud_load_env_file();
require_once dirname(__DIR__, 2) . '/includes/recaptcha.php';

/**
 * Модальное окно с формой запроса на аудит (префикс полей audit-modal).
 */
?>
<div class="audit-modal" id="audit-request-modal" hidden data-audit-modal-root>
    <div class="audit-modal__backdrop" data-audit-modal-close tabindex="-1" aria-hidden="true"></div>
    <div
        class="audit-modal__dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="audit-modal-form-title"
        tabindex="-1"
    >
        <button type="button" class="audit-modal__close" data-audit-modal-close aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
        <div class="hero__form-wrap audit-modal__form-wrap">
            <?php
            $auditRequestFormPrefix = 'audit-modal';
            include __DIR__ . '/audit-request-form.php';
            ?>
        </div>
    </div>
</div>

<div class="audit-modal audit-modal--thanks" id="audit-form-feedback-modal" hidden data-audit-feedback-root>
    <div class="audit-modal__backdrop" data-audit-feedback-close tabindex="-1" aria-hidden="true"></div>
    <div
        class="audit-modal__dialog audit-modal__dialog--thanks"
        role="dialog"
        aria-modal="true"
        aria-labelledby="audit-feedback-title"
        tabindex="-1"
    >
        <button type="button" class="audit-modal__close" data-audit-feedback-close aria-label="Закрыть">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
        <div class="audit-modal__thanks-inner">
            <h2 class="audit-modal__thanks-title" id="audit-feedback-title">Заявка на услугу</h2>
            <div class="audit-modal__thanks-copy">
                <p class="audit-modal__thanks-line">Спасибо! Ваша заявка успешно отправлена.</p>
                <p class="audit-modal__thanks-line">Мы получили ваше сообщение и скоро с вами свяжемся.</p>
            </div>
            <a href="/services" class="audit-modal__thanks-btn">Наши услуги</a>
        </div>
    </div>
</div>
<?php if (aud_recaptcha_enabled()): ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>
<script defer src="/components/audit-request-form/audit-request-form.js"></script>
