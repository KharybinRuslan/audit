<?php
declare(strict_types=1);
/**
 * Компонент: About Banner — верхний баннер страницы About
 */
?>
<section class="about-banner" id="about-banner">
    <div class="about-banner__layer about-banner__layer--base" aria-hidden="true"></div>
    <div class="about-banner__layer about-banner__layer--image" aria-hidden="true">
        <picture>
            <source srcset="/img/hammer-mob.png" media="(max-width: 767px)">
            <img class="about-banner__image" src="/img/hammer.png" alt="">
        </picture>
    </div>
    <div class="about-banner__layer about-banner__layer--overlay" aria-hidden="true"></div>
    <div class="about-banner__content">
        <div class="about-banner__columns">
            <div class="about-banner__left">
                <p class="about-banner__eyebrow">Защита, прозрачность, рост</p>
                <h1 class="about-banner__title">Аудит, которому доверяют бизнес и суды</h1>
            </div>
            <div class="about-banner__right">
                <h2 class="about-banner__subtitle">Мы проводим финансовый и налоговый аудит, экспертизу и консалтинг</h2>
                <p class="about-banner__text">Помогаем компаниям повышать прозрачность отчётности, управлять налоговыми рисками и создавать долгосрочную ценность для собственников и инвесторов</p>
            </div>
        </div>
        <div class="about-banner__services">
            <h3 class="about-banner__services-title">КЛЮЧЕВЫЕ УСЛУГИ</h3>
            <div class="about-banner__services-list">
                <article class="about-banner__service about-banner__service--audit">
                    <p class="about-banner__service-number"><span class="about-banner__service-hash">#</span><span class="about-banner__service-num">01</span></p>
                    <p class="about-banner__service-name">Аудиторские<br>услуги</p>
                </article>
                <article class="about-banner__service about-banner__service--accounting">
                    <p class="about-banner__service-number"><span class="about-banner__service-hash">#</span><span class="about-banner__service-num">02</span></p>
                    <p class="about-banner__service-name">Бухгалтерский<br>и налоговый учёт</p>
                </article>
                <article class="about-banner__service about-banner__service--consulting">
                    <p class="about-banner__service-number"><span class="about-banner__service-hash">#</span><span class="about-banner__service-num">03</span></p>
                    <p class="about-banner__service-name">Консалтинг<br>и оценка</p>
                </article>
                <article class="about-banner__service about-banner__service--risks">
                    <p class="about-banner__service-number"><span class="about-banner__service-hash">#</span><span class="about-banner__service-num">04</span></p>
                    <p class="about-banner__service-name">Риски и юридическое<br>сопровождение</p>
                </article>
            </div>
        </div>
    </div>
</section>
