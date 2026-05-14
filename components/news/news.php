<?php

declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
require_once dirname(__DIR__, 2) . '/includes/news/repository.php';

/**
 * Блок «Свежие новости ООО "Аудит Топ Эксперт"» — до 6 последних постов по дате.
 */
$newsHomeLimit = isset($newsHomeLimit) && is_int($newsHomeLimit) ? max(1, min(12, $newsHomeLimit)) : 6;
$newsHomePosts = getLatestNewsPosts($newsHomeLimit);
?>
<section class="news" id="news">
    <div class="news__circle" aria-hidden="true">
        <svg width="420" height="840" viewBox="0 0 420 840" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#news-blur)">
                <circle cx="0" cy="420" r="350" fill="url(#news-gradient)" />
            </g>
            <defs>
                <filter id="news-blur" x="-420" y="0" width="840" height="840" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="35" result="effect1_foregroundBlur" />
                </filter>
                <radialGradient id="news-gradient" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 420) rotate(90) scale(350)">
                    <stop stop-color="#B82920" stop-opacity="0.4" />
                    <stop offset="1" stop-color="#0D0D0D" stop-opacity="0.2" />
                </radialGradient>
            </defs>
        </svg>
    </div>
    <div class="news__inner">
        <header class="news__header">
            <h2 class="news__title">Свежие новости <span class="news__title-accent">ООО "Аудит Топ Эксперт"</span></h2>
            <a href="/news" class="news__all">Все новости</a>
        </header>
        <div class="news__grid">
            <?php foreach ($newsHomePosts as $newsIndex => $post) {
                $slug = isset($post['slug']) ? trim((string) $post['slug']) : '';
                if ($slug === '') {
                    continue;
                }
                $href = '/news/' . rawurlencode($slug);
                $title = isset($post['title']) ? trim((string) $post['title']) : '';
                if ($title === '') {
                    $title = 'Новость';
                }
                $dates = aud_news_format_date_ru($post);
                $excerpt = buildExcerpt($post);
                $imgResolved = resolveArticleImage($post);

                $newsTitleEsc = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
                $newsDateDisplayEsc = htmlspecialchars($dates['display'], ENT_QUOTES, 'UTF-8');
                $newsDateIsoEsc = htmlspecialchars($dates['iso'], ENT_QUOTES, 'UTF-8');
                $newsHrefEsc = htmlspecialchars($href, ENT_QUOTES, 'UTF-8');
                $newsExcerptEsc = htmlspecialchars($excerpt, ENT_QUOTES, 'UTF-8');
                $newsImgAria = 'Перейти к новости: ' . $title . ' (' . $dates['display'] . ', карточка ' . ($newsIndex + 1) . ')';
                $newsImgAriaEsc = htmlspecialchars($newsImgAria, ENT_QUOTES, 'UTF-8');
                ?>
            <article class="news__card">
                <?php if ($dates['display'] !== '' && $dates['iso'] !== '') { ?>
                <time class="news__date" datetime="<?= $newsDateIsoEsc ?>"><?= $newsDateDisplayEsc ?></time>
                <?php } elseif ($dates['display'] !== '') { ?>
                <span class="news__date"><?= $newsDateDisplayEsc ?></span>
                <?php } ?>
                <a href="<?= $newsHrefEsc ?>" class="news__img-wrap" aria-label="<?= $newsImgAriaEsc ?>">
                    <?php
                    if (preg_match('#^https?://#i', $imgResolved)) {
                        echo '<picture><img src="' . htmlspecialchars($imgResolved, ENT_QUOTES, 'UTF-8')
                            . '" alt="" class="news__img" loading="lazy" decoding="async"></picture>';
                    } else {
                        aud_img_picture_webp($imgResolved, '', ['class' => 'news__img', 'loading' => 'lazy', 'decoding' => 'async']);
                    }
                    ?>
                    <span class="news__plus" aria-hidden="true">+</span>
                </a>
                <h3 class="news__card-title">
                    <a href="<?= $newsHrefEsc ?>"><?= $newsTitleEsc ?></a>
                </h3>
                <p class="news__desc"><?= $newsExcerptEsc ?></p>
            </article>
            <?php } ?>
        </div>
    </div>
</section>
