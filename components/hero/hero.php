<?php
/**
 * Компонент: Hero — первый блок (аудит и форма запроса)
 */
?>
<section class="hero" id="hero">
    <div class="hero__inner">
        <div class="hero__content">
            <h1 class="hero__title">
                Аудит и налоговая безопасность <span class="hero__title-accent">для бизнеса ТОП уровня</span>
            </h1>
            <p class="hero__desc">
                Обязательный и инициативный аудит, сопровождение проверок ФНС, МСФО, due diligence и forensic. Быстро, конфиденциально, по стандартам МСА.
            </p>
            <div class="hero__list">
                <div class="hero__list-col">
                    <div class="hero__list-item">
                        <span class="hero__list-bullet" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="5" cy="5" r="5" fill="#E02727"/></svg></span>
                        <p class="hero__list-text">Компенсация шрафов<br>по договору*</p>
                    </div>
                    <div class="hero__list-item">
                        <span class="hero__list-bullet" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="5" cy="5" r="5" fill="#E02727"/></svg></span>
                        <p class="hero__list-text">Рейтинги/СРО, страхование<br>ответственности</p>
                    </div>
                </div>
                <div class="hero__list-col">
                    <div class="hero__list-item">
                        <span class="hero__list-bullet" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="5" cy="5" r="5" fill="#E02727"/></svg></span>
                        <p class="hero__list-text">Аудит за 2 дня: экспресс-<br>диагностика</p>
                    </div>
                    <div class="hero__list-item">
                        <span class="hero__list-bullet" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="5" cy="5" r="5" fill="#E02727"/></svg></span>
                        <p class="hero__list-text">Конфиденциальность<br>24/7 и NDA</p>
                    </div>
                </div>
            </div>
            <p class="hero__footnote hero__footnote--mobile">*условия в договоре</p>
            <div class="hero__actions">
                <button type="button" class="hero__btn">Получить смету <span class="hero__btn-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22.5" cy="22.5" r="22.5" fill="white"/><path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"/></svg></span></button>
                <a href="#services" class="hero__link">Все услуги</a>
                <p class="hero__footnote hero__footnote--desktop">*условия в договоре</p>
            </div>
        </div>
        <div class="hero__form-wrap">
            <?php
            $auditRequestFormPrefix = 'hero';
            include __DIR__ . '/../audit-request-form/audit-request-form.php';
            ?>
        </div>
    </div>
</section>
