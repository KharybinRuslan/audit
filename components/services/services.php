<?php
/**
 * Компонент: Services — блок услуг со слайдером
 */
?>
<section class="services" id="services">
    <svg xmlns="http://www.w3.org/2000/svg" class="services__line-defs" aria-hidden="true">
        <defs>
            <linearGradient id="services-line-gradient" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#dd6f20"/><stop offset="100%" stop-color="#e02727"/></linearGradient>
        </defs>
    </svg>
    <div class="services__inner">
        <div class="services__header">
            <a href="#" class="services__all-link">Все услуги</a>
        </div>
        <div class="services__main">
            <div class="services__content">
                <h2 class="services__title">Аудиторские услуги <span class="services__title-accent">ТОП ЭКСПЕРТ</span> — обязательный и финансовый аудит без рисков</h2>
                <div class="services__slider-wrap">
                    <nav class="services__nav swiper" aria-label="Услуги" id="services-nav-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide services__nav-slide" data-slide-index="0">
                                <div class="services__nav-item services__nav-item--active" data-slide="0"><span class="services__nav-text">Аудиторские услуги</span></div>
                                <svg class="services__nav-line services__nav-line--loading" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="1">
                                <div class="services__nav-item" data-slide="1"><span class="services__nav-text">Налоговый консалтинг и налоговая безопасность</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="2">
                                <div class="services__nav-item" data-slide="2"><span class="services__nav-text">Финансовый консалтинг и оценка</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="3">
                                <div class="services__nav-item" data-slide="3"><span class="services__nav-text">Бухгалтерский консалтинг и аутсорсинг</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="4">
                                <div class="services__nav-item" data-slide="4"><span class="services__nav-text">Due diligence и forensic</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="5">
                                <div class="services__nav-item" data-slide="5"><span class="services__nav-text">Кадровый аудит и консалтинг</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="6">
                                <div class="services__nav-item" data-slide="6"><span class="services__nav-text">МСФО и международная отчетность</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="7">
                                <div class="services__nav-item" data-slide="7"><span class="services__nav-text">Коплаенс, риск-контроль, внутренний аудит</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="8">
                                <div class="services__nav-item" data-slide="8"><span class="services__nav-text">Консалтинг и сопровождение бизнеса</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                            <div class="swiper-slide services__nav-slide" data-slide-index="9">
                                <div class="services__nav-item" data-slide="9"><span class="services__nav-text">Обучение и академия HSEP</span></div>
                                <svg class="services__nav-line" width="100" height="4" viewBox="0 0 100 4" aria-hidden="true"><line class="services__line-track" x1="0" y1="2" x2="100" y2="2"/><rect class="services__loading-fill" x="0" y="0" width="0" height="4" fill="url(#services-line-gradient)"/></svg>
                            </div>
                        </div>
                    </nav>
                </div>
                <p class="services__desc" id="services-desc">Фундамент нашего подхода к аудиту лежит в комплексной оценке рисков, оперативном выявлении ключевых вопросов и их четкой коммуникации</p>
                <a href="#" class="services__link" id="services-link">Перейти на страницу</a>
            </div>
            <div class="services__media">
                <img src="/img/block-audit.png" alt="" class="services__img">
            </div>
        </div>
    </div>
</section>
