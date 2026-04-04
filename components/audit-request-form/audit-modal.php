<?php
declare(strict_types=1);
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
