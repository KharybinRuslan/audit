<?php

declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/news/bootstrap.php';
require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
require_once dirname(__DIR__, 2) . '/includes/defer-css.php';

$newsArticleSlug = isset($_GET['slug']) ? trim((string) $_GET['slug']) : '';
$newsArticlePost = $newsArticleSlug !== '' ? getNewsPostBySlug($newsArticleSlug) : null;

if ($newsArticlePost === null) {
    http_response_code(404);
    $pageTitle = 'Страница не найдена';
    $pageDescription = 'Материал не найден.';
    $newsArticleIs404 = true;
} else {
    $newsArticleIs404 = false;
    $pageTitle = aud_news_page_title($newsArticlePost);
    $pageDescription = aud_news_meta_description($newsArticlePost);
}

$newsArticleCanonical = '/news/' . rawurlencode($newsArticleSlug);
$newsArticleOgImage = '';
if (!$newsArticleIs404 && $newsArticlePost !== null) {
    $newsArticleOgImage = aud_news_absolute_site_url(resolveArticleImage($newsArticlePost));
}

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Новости', 'href' => '/news'],
];
if (!$newsArticleIs404 && $newsArticlePost !== null) {
    $breadcrumbs[] = ['label' => (string) ($newsArticlePost['title'] ?? 'Статья')];
} else {
    $breadcrumbs[] = ['label' => 'Не найдено'];
}

$newsArticleBodyHtml = '';
$newsArticleRelated = [];
$newsArticleHero = '';
$newsArticleDateDisplay = '';
$newsArticleDateIso = '';
$newsArticleLead = '';
if (!$newsArticleIs404 && $newsArticlePost !== null) {
    $newsArticleBodyHtml = aud_news_article_html_for_render($newsArticlePost);
    $newsArticleRelated = getLatestRelatedPosts($newsArticlePost, getAllNewsPosts());
    $newsArticleHero = resolveArticleImage($newsArticlePost);
    $d = aud_news_format_date_ru($newsArticlePost);
    $newsArticleDateDisplay = $d['display'];
    $newsArticleDateIso = $d['iso'];
    $newsArticleLead = aud_news_article_lead_plain($newsArticlePost);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <?php if (!$newsArticleIs404) { ?>
        <link rel="canonical" href="<?= htmlspecialchars(aud_news_absolute_site_url($newsArticleCanonical), ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
        <?php if ($newsArticleOgImage !== '') { ?>
            <meta property="og:image" content="<?= htmlspecialchars($newsArticleOgImage, ENT_QUOTES, 'UTF-8') ?>">
        <?php } ?>
    <?php } ?>
    <?php
    aud_inline_critical_shell_css();
    aud_render_blocking_styles([
        '/components/breadcrumbs/breadcrumbs.css',
        '/components/news-article/news-article.css',
    ]);
    include dirname(__DIR__, 2) . '/includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs page-news">
    <?php include dirname(__DIR__, 2) . '/components/site-header/site-header.php'; ?>
    <?php include dirname(__DIR__, 2) . '/components/breadcrumbs/breadcrumbs.php'; ?>
    <?php include dirname(__DIR__, 2) . '/components/layout-main-open.php'; ?>

    <?php if ($newsArticleIs404) { ?>
        <section class="news-article news-article--404" aria-label="Ошибка">
            <div class="news-article__inner">
                <p class="news-article__404-text">Материал не найден.</p>
                <a class="news-article__404-link" href="/news">К списку новостей</a>
            </div>
        </section>
    <?php } else { ?>
        <article class="news-article" itemscope itemtype="https://schema.org/Article">
            <div class="news-article__inner">
                <header class="news-article__head">
                    <div class="news-article__head-text">
                        <time class="news-article__date" datetime="<?= htmlspecialchars($newsArticleDateIso, ENT_QUOTES, 'UTF-8') ?>" itemprop="datePublished">
                            <?= htmlspecialchars($newsArticleDateDisplay, ENT_QUOTES, 'UTF-8') ?>
                        </time>
                        <h1 class="news-article__title" itemprop="headline"><?= htmlspecialchars((string) ($newsArticlePost['title'] ?? ''), ENT_QUOTES, 'UTF-8') ?></h1>
                        <?php if ($newsArticleLead !== '') { ?>
                            <p class="news-article__lead"><?= htmlspecialchars($newsArticleLead, ENT_QUOTES, 'UTF-8') ?></p>
                        <?php } ?>
                    </div>
                    <div class="news-article__head-media">
                        <?php
                        $hero = $newsArticleHero;
                        if ($hero !== '' && preg_match('#^https?://#i', $hero)) {
                            echo '<img class="news-article__hero-img" src="' . htmlspecialchars($hero, ENT_QUOTES, 'UTF-8') . '" alt="" width="640" height="420" loading="eager" decoding="async" itemprop="image">';
                        } elseif ($hero !== '') {
                            aud_img_picture_webp($hero, '', ['class' => 'news-article__hero-img', 'width' => 640, 'height' => 420, 'loading' => 'eager', 'decoding' => 'async']);
                        }
                        ?>
                    </div>
                </header>

                <div class="news-article__layout">
                    <aside class="news-article__related" aria-label="Похожие материалы">
                        <?php foreach ($newsArticleRelated as $rel) {
                            $rslug = isset($rel['slug']) ? (string) $rel['slug'] : '';
                            if ($rslug === '') {
                                continue;
                            }
                            $rd = aud_news_format_date_ru($rel);
                            $rt = isset($rel['title']) ? (string) $rel['title'] : '';
                            $rimg = resolveArticleImage($rel);
                            $rh = '/news/' . rawurlencode($rslug);
                            ?>
                            <a class="news-article__related-card" href="<?= htmlspecialchars($rh, ENT_QUOTES, 'UTF-8') ?>">
                                <span class="news-article__related-media">
                                    <?php if ($rimg !== '' && preg_match('#^https?://#i', $rimg)) { ?>
                                        <img src="<?= htmlspecialchars($rimg, ENT_QUOTES, 'UTF-8') ?>" alt="" width="120" height="80" loading="lazy" decoding="async">
                                    <?php } elseif ($rimg !== '') { ?>
                                        <?php aud_img_picture_webp($rimg, '', ['width' => 120, 'height' => 80, 'loading' => 'lazy', 'decoding' => 'async']); ?>
                                    <?php } ?>
                                </span>
                                <time class="news-article__related-date" datetime="<?= htmlspecialchars($rd['iso'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($rd['display'], ENT_QUOTES, 'UTF-8') ?></time>
                                <span class="news-article__related-title"><?= htmlspecialchars($rt, ENT_QUOTES, 'UTF-8') ?></span>
                            </a>
                        <?php } ?>
                    </aside>
                    <div class="news-article__body article-content" itemprop="articleBody">
                        <?= $newsArticleBodyHtml ?>
                    </div>
                </div>
            </div>
        </article>
    <?php } ?>

    <?php include dirname(__DIR__, 2) . '/components/layout-main-close.php'; ?>
    <?php include dirname(__DIR__, 2) . '/components/site-footer/site-footer.php'; ?>
    <?php include dirname(__DIR__, 2) . '/components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
</body>

</html>
