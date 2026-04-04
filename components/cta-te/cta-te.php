<?php
declare(strict_types=1);
/**
 * CTA-блок с изображением te.png и кнопкой открытия модалки формы.
 */
?>
<section class="cta-te" id="cta-te" aria-labelledby="cta-te-heading">
    <div class="cta-te__inner">
        <div class="cta-te__card">
            <div class="cta-te__glow cta-te__glow--top" aria-hidden="true"></div>
            <div class="cta-te__glow cta-te__glow--bottom" aria-hidden="true"></div>
            <div class="cta-te__row">
                <div class="cta-te__visual">
                    <img
                        class="cta-te__img"
                        src="/img/te.png"
                        alt=""
                        width="560"
                        height="420"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <div class="cta-te__content">
                    <h2 class="cta-te__title" id="cta-te-heading">
                        <span class="cta-te__title-accent">ТОП ЭКСПЕРТ</span> — гарантия точности, прозрачности и безопасности бизнеса
                    </h2>
                    <p class="cta-te__text">
                        Аудит — не только контроль, но и развитие: повышает прозрачность, улучшает управление, снижает финансовые и юр. риски.
                        С нами вы получите профессиональный анализ и практические рекомендации. Мы — надёжный партнёр на пути к стабильности и успеху.
                    </p>
                    <button
                        type="button"
                        class="hero__btn cta-te__btn"
                        data-open-audit-modal
                        aria-haspopup="dialog"
                        aria-controls="audit-request-modal"
                    >
                        <span class="cta-te__btn-text cta-te__btn-text--full">Бесплатная консультация аудитора</span>
                        <span class="cta-te__btn-text cta-te__btn-text--short" aria-hidden="true">Консультация аудитора</span>
                        <span class="hero__btn-icon" aria-hidden="true">
                            <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="22.5" cy="22.5" r="22.5" fill="white"/>
                                <path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"/>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/../audit-request-form/audit-modal.php'; ?>
