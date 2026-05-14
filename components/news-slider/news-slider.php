<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
require_once dirname(__DIR__, 2) . '/includes/news/news-slider-items.php';

$newsSliderLimit = isset($newsSliderLimit) && is_int($newsSliderLimit) ? max(1, min(7, $newsSliderLimit)) : 7;
$newsSliderSeedArg = null;
if (isset($newsSliderPageSeed) && is_string($newsSliderPageSeed)) {
    $t = trim($newsSliderPageSeed);
    if ($t !== '') {
        $newsSliderSeedArg = $t;
    }
}
$newsSliderItems = aud_news_slider_items_for_page($newsSliderLimit, $newsSliderSeedArg);
if ($newsSliderItems === []) {
    $newsSliderItems = [
        [
            'href' => '/news',
            'date' => '',
            'dateIso' => '',
            'titleDefault' => 'Новости ООО "Аудит Топ Эксперт"',
            'titleHover' => 'Перейти в раздел',
            'desc' => 'Свежие материалы, разборы и практика — в разделе «Новости».',
            'img' => aud_news_placeholder_image(),
        ],
    ];
}
?>
<section class="news-slider" aria-labelledby="news-slider-heading">
    <div class="news-slider__inner">
        <header class="news-slider__head">
            <div class="news-slider__head-main">
                <p class="news-slider__eyebrow">НОВОСТИ</p>
                <h2 class="news-slider__title" id="news-slider-heading">
                    Статьи <span class="news-slider__title-accent">ООО "Аудит Топ Эксперт"</span>
                </h2>
            </div>
            <a class="news-slider__all" href="/news">Все новости</a>
        </header>

        <div class="news-slider__swiper swiper" id="news-slider-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($newsSliderItems as $item) {
                    $imgUrl = (string) $item['img'];
                    $aria = trim((string) $item['titleDefault'] . ' — ' . (string) $item['desc']);
                    ?>
                    <div class="swiper-slide">
                        <a class="news-slider__card" href="<?= htmlspecialchars((string) $item['href'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= htmlspecialchars($aria, ENT_QUOTES, 'UTF-8') ?>">
                            <?php
                            if (preg_match('#^https?://#i', $imgUrl)) {
                                echo '<picture><img src="' . htmlspecialchars($imgUrl, ENT_QUOTES, 'UTF-8')
                                    . '" alt="" class="news-slider__img" width="300" height="500" loading="lazy" decoding="async"></picture>';
                            } else {
                                aud_img_picture_webp($imgUrl, '', ['class' => 'news-slider__img', 'width' => 300, 'height' => 500, 'loading' => 'lazy', 'decoding' => 'async']);
                            }
                            ?>
                            <span class="news-slider__tone" aria-hidden="true"></span>
                            <span class="news-slider__blur" aria-hidden="true"></span>
                            <span class="news-slider__body">
                                <?php if (($item['dateIso'] ?? '') !== '') { ?>
                                <time class="news-slider__date" datetime="<?= htmlspecialchars((string) $item['dateIso'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars((string) $item['date'], ENT_QUOTES, 'UTF-8') ?>
                                </time>
                                <?php } ?>
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
