<?php
declare(strict_types=1);

$newsListItemTemplate = [
    'date' => '27.10.2025',
    'dateIso' => '2025-10-27',
    'title' => 'Налоговый аудит в Москве: как снизить риски перед проверками',
    'excerpt' => 'Краткая проверка налоговой нагрузки, цепочек контрагентов и спорных вычетов. Поможет выявить риски до визита ФНС и подготовить корректировки.',
    'href' => '#',
    'img' => '/img/news-def-1.png',
];

/** Все записи (позже — из БД). Заглушек >12, чтобы работала пагинация. */
$newsListAllItems = [];
for ($i = 0; $i < 25; $i++) {
    $row = $newsListItemTemplate;
    $row['href'] = '#item-' . ($i + 1);
    $newsListAllItems[] = $row;
}

$newsListPerPage = 12;
$newsListPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($newsListPage < 1) {
    $newsListPage = 1;
}

$newsListTotal = count($newsListAllItems);
$newsListTotalPages = max(1, (int) ceil($newsListTotal / $newsListPerPage));

if ($newsListPage > $newsListTotalPages) {
    $newsListPage = $newsListTotalPages;
}

$newsListOffset = ($newsListPage - 1) * $newsListPerPage;
$newsListItems = array_slice($newsListAllItems, $newsListOffset, $newsListPerPage);

function news_list_page_href(int $page): string
{
    return $page <= 1 ? '/news' : ('/news?page=' . $page);
}
?>
<section class="news-list" aria-label="Новости">
    <span class="news-list__glow" aria-hidden="true"></span>
    <span class="news-list__glow-br" aria-hidden="true"></span>
    <div class="news-list__inner">
        <div class="news-list__grid">
            <?php foreach ($newsListItems as $item) { ?>
                <article class="news-list__card">
                    <time class="news-list__date" datetime="<?= htmlspecialchars((string) $item['dateIso'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars((string) $item['date'], ENT_QUOTES, 'UTF-8') ?>
                    </time>
                    <a class="news-list__media" href="<?= htmlspecialchars((string) $item['href'], ENT_QUOTES, 'UTF-8') ?>">
                        <span class="news-list__media-body">
                            <span class="news-list__media-fill">
                                <img
                                    class="news-list__media-img"
                                    src="<?= htmlspecialchars((string) $item['img'], ENT_QUOTES, 'UTF-8') ?>"
                                    width="480"
                                    height="403"
                                    alt=""
                                    loading="lazy"
                                >
                                <span class="news-list__media-shade" aria-hidden="true"></span>
                                <img class="news-list__media-plus" src="/img/plus.svg" width="25" height="25" alt="">
                            </span>
                        </span>
                    </a>
                    <h3 class="news-list__heading">
                        <a class="news-list__heading-link" href="<?= htmlspecialchars((string) $item['href'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars((string) $item['title'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </h3>
                    <p class="news-list__excerpt"><?= htmlspecialchars((string) $item['excerpt'], ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            <?php } ?>
        </div>

        <?php if ($newsListTotalPages > 1) { ?>
            <nav class="news-list__pager" aria-label="Навигация по страницам">
                <?php if ($newsListPage > 1) { ?>
                    <a
                        class="news-list__pager-link news-list__pager-link--prev"
                        href="<?= htmlspecialchars(news_list_page_href($newsListPage - 1), ENT_QUOTES, 'UTF-8') ?>"
                    >Назад</a>
                <?php } ?>
                <?php for ($p = 1; $p <= $newsListTotalPages; $p++) { ?>
                    <?php if ($p === $newsListPage) { ?>
                        <span class="news-list__pager-current" aria-current="page"><?= $p ?></span>
                    <?php } else { ?>
                        <a class="news-list__pager-link" href="<?= htmlspecialchars(news_list_page_href($p), ENT_QUOTES, 'UTF-8') ?>"><?= $p ?></a>
                    <?php } ?>
                <?php } ?>
                <?php if ($newsListPage < $newsListTotalPages) { ?>
                    <a
                        class="news-list__pager-link news-list__pager-link--next"
                        href="<?= htmlspecialchars(news_list_page_href($newsListPage + 1), ENT_QUOTES, 'UTF-8') ?>"
                    >Вперёд</a>
                <?php } ?>
            </nav>
        <?php } ?>
    </div>
</section>
