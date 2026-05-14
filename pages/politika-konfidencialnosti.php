<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/news/helpers.php';
require_once dirname(__DIR__) . '/includes/pages/repository.php';
require_once dirname(__DIR__) . '/includes/defer-css.php';

$policySlug = 'politika-konfidencialnosti';
$policyPage = aud_pages_get_page_by_slug($policySlug);

$policyH1 = 'Политика конфиденциальности и обработка персональных данных';

if ($policyPage === null) {
    http_response_code(404);
    $policyIs404 = true;
    $pageTitle = 'Страница не найдена';
    $pageDescription = 'Документ не найден.';
    $policyBodyHtml = '';
    $policyDateDisplay = '';
    $policyDateIso = '';
} else {
    $policyIs404 = false;
    $seoTitle = isset($policyPage['seo_title_effective']) ? trim((string) $policyPage['seo_title_effective']) : '';
    $pageTitle = $seoTitle !== '' ? $seoTitle : $policyH1;
    $pageDescription = aud_pages_meta_description($policyPage);
    if ($pageDescription === '') {
        $pageDescription = 'Политика оператора в отношении обработки персональных данных.';
    }
    $policyBodyHtml = aud_pages_html_for_render($policyPage);
    $rawDate = isset($policyPage['date_published']) ? (string) $policyPage['date_published'] : '';
    $ts = strtotime($rawDate);
    if ($ts === false) {
        $policyDateDisplay = '';
        $policyDateIso = '';
    } else {
        $policyDateDisplay = date('d.m.Y', $ts);
        $policyDateIso = date('Y-m-d', $ts);
    }
}

$policyCanonicalPath = '/' . $policySlug;
$policyCanonicalAbs = aud_news_absolute_site_url($policyCanonicalPath);

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
];
if ($policyIs404) {
    $breadcrumbs[] = ['label' => 'Не найдено'];
} else {
    $breadcrumbs[] = ['label' => $policyH1];
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <?php if (!$policyIs404) { ?>
        <link rel="canonical" href="<?= htmlspecialchars($policyCanonicalAbs, ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:url" content="<?= htmlspecialchars($policyCanonicalAbs, ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:type" content="website">
    <?php } ?>
    <?php
    aud_inline_critical_shell_css();
    aud_render_blocking_styles([
        '/components/breadcrumbs/breadcrumbs.css',
        '/components/news-article/news-article.css',
        '/components/policy-accordion/policy-accordion.css',
    ]);
    include dirname(__DIR__) . '/includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs page-policy">
    <?php include dirname(__DIR__) . '/components/site-header/site-header.php'; ?>
    <?php include dirname(__DIR__) . '/components/breadcrumbs/breadcrumbs.php'; ?>
    <?php include dirname(__DIR__) . '/components/layout-main-open.php'; ?>

    <?php if ($policyIs404) { ?>
        <section class="news-article news-article--404" aria-label="Ошибка">
            <div class="news-article__inner">
                <p class="news-article__404-text">Документ не найден.</p>
                <a class="news-article__404-link" href="/">На главную</a>
            </div>
        </section>
    <?php } else { ?>
        <article class="news-article news-article--policy-page" itemscope itemtype="https://schema.org/WebPage">
            <meta itemprop="name" content="<?= htmlspecialchars($policyH1, ENT_QUOTES, 'UTF-8') ?>">
            <link itemprop="url" href="<?= htmlspecialchars($policyCanonicalAbs, ENT_QUOTES, 'UTF-8') ?>">
            <div class="news-article__inner">
                <header class="news-article__head">
                    <div class="news-article__head-text">
                        <?php if ($policyDateIso !== '') { ?>
                            <time class="news-article__date" datetime="<?= htmlspecialchars($policyDateIso, ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($policyDateDisplay, ENT_QUOTES, 'UTF-8') ?>
                            </time>
                        <?php } ?>
                        <h1 class="news-article__title"><?= htmlspecialchars($policyH1, ENT_QUOTES, 'UTF-8') ?></h1>
                    </div>
                </header>
                <div class="news-article__body article-content policy-accordion js-policy-accordion" itemprop="text">
                    <?= $policyBodyHtml ?>
                </div>
                <?php include dirname(__DIR__) . '/components/policy-page-cookie-block.php'; ?>
            </div>
        </article>
    <?php } ?>

    <?php include dirname(__DIR__) . '/components/layout-main-close.php'; ?>
    <?php include dirname(__DIR__) . '/components/site-footer/site-footer.php'; ?>
    <?php include dirname(__DIR__) . '/components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/js/policy-accordion.js"></script>
</body>

</html>
