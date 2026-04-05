<?php
/**
 * Блок «Свежие новости ТОП ЭКСПЕРТ» — 6 карточек новостей.
 */
$newsItems = [
    [
        'date' => '27.10.2025',
        'img' => '/img/unnamed.jpg',
        'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
        'desc' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
        'href' => '#',
    ],
    [
        'date' => '27.10.2025',
        'img' => '/img/unnamed.jpg',
        'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
        'desc' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
        'href' => '#',
    ],
    [
        'date' => '27.10.2025',
        'img' => '/img/unnamed.jpg',
        'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
        'desc' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
        'href' => '#',
    ],
    [
        'date' => '27.10.2025',
        'img' => '/img/unnamed.jpg',
        'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
        'desc' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
        'href' => '#',
    ],
    [
        'date' => '27.10.2025',
        'img' => '/img/unnamed.jpg',
        'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
        'desc' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
        'href' => '#',
    ],
    [
        'date' => '27.10.2025',
        'img' => '/img/unnamed.jpg',
        'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
        'desc' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
        'href' => '#',
    ],
];
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
            <h2 class="news__title">Свежие новости <span class="news__title-accent">ТОП ЭКСПЕРТ</span></h2>
            <a href="/news" class="news__all">Все новости</a>
        </header>
        <div class="news__grid">
            <?php foreach ($newsItems as $item): ?>
            <article class="news__card">
                <time class="news__date" datetime="<?= date('Y-m-d', strtotime(str_replace('.', '-', $item['date']))) ?>"><?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?></time>
                <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>" class="news__img-wrap">
                    <img src="<?= htmlspecialchars($item['img'], ENT_QUOTES, 'UTF-8') ?>" alt="" class="news__img" loading="lazy">
                    <span class="news__plus" aria-hidden="true">+</span>
                </a>
                <h3 class="news__card-title">
                    <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></a>
                </h3>
                <p class="news__desc"><?= htmlspecialchars($item['desc'], ENT_QUOTES, 'UTF-8') ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
