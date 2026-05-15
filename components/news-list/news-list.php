<?php

declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/news/news-list-state.php';
require_once dirname(__DIR__, 2) . '/includes/img-webp.php';

$nl = aud_news_list_page_state();
$newsCategoryTabs = $nl['categories'];
$newsListCategory = $nl['category'];
$newsListPage = $nl['page'];
$newsListTotalPages = $nl['total_pages'];
$newsListTotal = $nl['total'];
$newsPagePosts = $nl['posts'];

$categoryLabel = $newsListCategory !== '' ? $newsListCategory : 'Рубрики новостей';
$paginationModel = aud_news_list_pagination_model($newsListPage, $newsListTotalPages);

/**
 * @param array<string, mixed> $post
 */
function news_list_render_card_image(string $resolvedUrl, string $alt): void
{
    if ($resolvedUrl === '') {
        $resolvedUrl = aud_news_placeholder_image();
    }
    if (preg_match('#^https?://#i', $resolvedUrl)) {
        echo '<img class="news-list__media-img" src="' . htmlspecialchars($resolvedUrl, ENT_QUOTES, 'UTF-8')
            . '" alt="' . htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') . '" width="480" height="403" loading="lazy" decoding="async">';

        return;
    }
    aud_img_picture_webp($resolvedUrl, $alt, ['class' => 'news-list__media-img', 'width' => 480, 'height' => 403, 'loading' => 'lazy', 'decoding' => 'async']);
}
?>
<section class="news-list" aria-label="Новости">
    <div class="news-list__inner">
        <div class="news-list__category-filter" data-news-category-filter>
            <button
                type="button"
                class="news-list__category-trigger"
                id="news-category-trigger"
                aria-expanded="false"
                aria-haspopup="true"
                aria-controls="news-category-panel"
                data-news-category-trigger
            >
                <span class="news-list__category-trigger-text" data-news-category-label><?= htmlspecialchars($categoryLabel, ENT_QUOTES, 'UTF-8') ?></span>
                <span class="news-list__category-trigger-icon" aria-hidden="true">
                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L6 6L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </button>
            <div
                class="news-list__category-panel"
                id="news-category-panel"
                role="navigation"
                aria-label="Рубрики"
                hidden
                data-news-category-panel
            >
                <div class="news-list__category-panel-scroll">
                    <div class="news-list__category-grid">
                        <a
                            href="<?= htmlspecialchars(aud_news_list_url(1, ''), ENT_QUOTES, 'UTF-8') ?>"
                            class="news-list__category-option<?= $newsListCategory === '' ? ' news-list__category-option--active' : '' ?>"
                            <?= $newsListCategory === '' ? ' aria-current="page"' : '' ?>
                        >Все</a>
                        <?php foreach ($newsCategoryTabs as $cat) {
                            $catActive = $newsListCategory === $cat;
                            ?>
                            <a
                                href="<?= htmlspecialchars(aud_news_list_url(1, $cat), ENT_QUOTES, 'UTF-8') ?>"
                                class="news-list__category-option<?= $catActive ? ' news-list__category-option--active' : '' ?>"
                                <?= $catActive ? ' aria-current="page"' : '' ?>
                            ><?= htmlspecialchars($cat, ENT_QUOTES, 'UTF-8') ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-list__grid" id="news-list-grid">
            <?php if ($newsListTotal === 0 && $newsListCategory !== '') { ?>
                <p class="news-list__empty">В выбранной рубрике пока нет материалов.</p>
            <?php } ?>
            <?php foreach ($newsPagePosts as $post) {
                $slug = isset($post['slug']) ? (string) $post['slug'] : '';
                if ($slug === '') {
                    continue;
                }
                $href = '/news/' . rawurlencode($slug);
                $title = isset($post['title']) ? (string) $post['title'] : '';
                $dates = aud_news_format_date_ru($post);
                $excerpt = buildExcerpt($post);
                $img = resolveArticleImage($post);
                $cats = getPostCategories($post);
                $catsJsonRaw = json_encode($cats, JSON_UNESCAPED_UNICODE);
                $catsJson = htmlspecialchars($catsJsonRaw !== false ? $catsJsonRaw : '[]', ENT_QUOTES, 'UTF-8');
                ?>
                <article class="news-list__card" data-news-categories="<?= $catsJson ?>">
                    <time class="news-list__date" datetime="<?= htmlspecialchars($dates['iso'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($dates['display'], ENT_QUOTES, 'UTF-8') ?>
                    </time>
                    <a class="news-list__media" href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>">
                        <span class="news-list__media-body">
                            <span class="news-list__media-fill">
                                <?php news_list_render_card_image($img, $title); ?>
                                <span class="news-list__media-shade" aria-hidden="true"></span>
                                <img class="news-list__media-plus" src="/img/plus.svg" width="25" height="25" alt="">
                            </span>
                        </span>
                    </a>
                    <h3 class="news-list__heading">
                        <a class="news-list__heading-link" href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </h3>
                    <p class="news-list__excerpt"><?= htmlspecialchars($excerpt, ENT_QUOTES, 'UTF-8') ?></p>
                </article>
            <?php } ?>
        </div>

        <?php if ($newsListTotalPages > 1) { ?>
            <nav class="news-list__pagination" aria-label="Постраничная навигация по новостям">
                <?php if ($newsListPage > 1) { ?>
                    <a
                        class="news-list__pagination-step news-list__pagination-step--prev"
                        href="<?= htmlspecialchars(aud_news_list_url($newsListPage - 1, $newsListCategory), ENT_QUOTES, 'UTF-8') ?>"
                        rel="prev"
                        aria-label="Предыдущая страница"
                    >
                        <span class="news-list__pagination-step-icon" aria-hidden="true">
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2L2 8l6 6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span class="news-list__pagination-step-text" aria-hidden="true">Назад</span>
                    </a>
                <?php } else { ?>
                    <span class="news-list__pagination-step news-list__pagination-step--prev news-list__pagination-step--disabled" aria-disabled="true" aria-label="Предыдущая страница, недоступно">
                        <span class="news-list__pagination-step-icon" aria-hidden="true">
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2L2 8l6 6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <span class="news-list__pagination-step-text" aria-hidden="true">Назад</span>
                    </span>
                <?php } ?>

                <ul class="news-list__pagination-list">
                    <?php foreach ($paginationModel as $item) {
                        if ($item['type'] === 'sep') { ?>
                            <li class="news-list__pagination-item news-list__pagination-item--sep" aria-hidden="true"><span class="news-list__pagination-ellipsis">…</span></li>
                        <?php } else {
                            $n = $item['n'];
                            $isCurrent = $n === $newsListPage;
                            ?>
                            <li class="news-list__pagination-item">
                                <?php if ($isCurrent) { ?>
                                    <span class="news-list__pagination-num news-list__pagination-num--current" aria-current="page"><?= (int) $n ?></span>
                                <?php } else { ?>
                                    <a class="news-list__pagination-num" href="<?= htmlspecialchars(aud_news_list_url($n, $newsListCategory), ENT_QUOTES, 'UTF-8') ?>"><?= (int) $n ?></a>
                                <?php } ?>
                            </li>
                        <?php }
                    } ?>
                </ul>

                <?php if ($newsListPage < $newsListTotalPages) { ?>
                    <a
                        class="news-list__pagination-step news-list__pagination-step--next"
                        href="<?= htmlspecialchars(aud_news_list_url($newsListPage + 1, $newsListCategory), ENT_QUOTES, 'UTF-8') ?>"
                        rel="next"
                        aria-label="Следующая страница"
                    >
                        <span class="news-list__pagination-step-text" aria-hidden="true">Вперёд</span>
                        <span class="news-list__pagination-step-icon" aria-hidden="true">
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2l6 6-6 6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                    </a>
                <?php } else { ?>
                    <span class="news-list__pagination-step news-list__pagination-step--next news-list__pagination-step--disabled" aria-disabled="true" aria-label="Следующая страница, недоступно">
                        <span class="news-list__pagination-step-text" aria-hidden="true">Вперёд</span>
                        <span class="news-list__pagination-step-icon" aria-hidden="true">
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2l6 6-6 6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                    </span>
                <?php } ?>
            </nav>
        <?php } ?>
    </div>
</section>
