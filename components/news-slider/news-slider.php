<?php
declare(strict_types=1);

$newsSliderPlaceholder = [
    'date' => '28.10.2025',
    'dateIso' => '2025-10-28',
    'titleDefault' => 'Экспресс-аудит бухгалтерии: как быстро найти критические ошибки',
    'titleHover' => 'Налоговый аудит 2025: где чаще всего скрыты риски',
    'desc' => 'Типовые зоны внимания ФНС: разрывы по НДС, взаимозависимость, дробление, специфика УСН/ОСНО и как подготовить доказательную базу',
    'img' => '/img/news-def-1.png',
    'href' => '#',
];

$newsSliderItems = array_fill(0, 12, $newsSliderPlaceholder);
?>
<section class="news-slider" aria-labelledby="news-slider-heading">
    <div class="news-slider__inner">
        <header class="news-slider__head">
            <div class="news-slider__head-main">
                <p class="news-slider__eyebrow">НОВОСТИ</p>
                <h2 class="news-slider__title" id="news-slider-heading">
                    Статьи <span class="news-slider__title-accent">ТОП ЭКСПЕРТ</span> по данной отрасли
                </h2>
            </div>
            <a class="news-slider__all" href="/news">Все новости</a>
        </header>

        <div class="news-slider__swiper swiper" id="news-slider-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($newsSliderItems as $item) { ?>
                    <div class="swiper-slide">
                        <a class="news-slider__card" href="<?= htmlspecialchars((string) $item['href'], ENT_QUOTES, 'UTF-8') ?>">
                            <img
                                class="news-slider__img"
                                src="<?= htmlspecialchars((string) $item['img'], ENT_QUOTES, 'UTF-8') ?>"
                                width="300"
                                height="500"
                                alt=""
                            >
                            <span class="news-slider__tone" aria-hidden="true"></span>
                            <span class="news-slider__blur" aria-hidden="true"></span>
                            <span class="news-slider__body">
                                <time class="news-slider__date" datetime="<?= htmlspecialchars((string) $item['dateIso'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars((string) $item['date'], ENT_QUOTES, 'UTF-8') ?>
                                </time>
                                <span class="news-slider__default">
                                    <span class="news-slider__card-title">
                                        <?= htmlspecialchars((string) $item['titleDefault'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                </span>
                                <span class="news-slider__hover-stack">
                                    <span class="news-slider__rule" aria-hidden="true"></span>
                                    <span class="news-slider__card-title news-slider__card-title--hover">
                                        <?= htmlspecialchars((string) $item['titleHover'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                    <span class="news-slider__card-desc">
                                        <?= htmlspecialchars((string) $item['desc'], ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                </span>
                            </span>
                            <span class="news-slider__plus" aria-hidden="true">
                                <img src="/img/plus.svg" width="25" height="25" alt="">
                            </span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="news-slider__pagination swiper-pagination"></div>
    </div>
</section>
