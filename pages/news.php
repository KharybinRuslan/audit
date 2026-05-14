<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/defer-css.php';
require_once __DIR__ . '/../includes/news/news-list-state.php';

$audNewsList = aud_news_list_page_state();

$pageTitle = 'Новости';
$pageDescription = 'Новости и статьи ООО "Аудит Топ Эксперт" по аудиту, налогам и отчётности для бизнеса.';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Новости'],
];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <?php
    if ($audNewsList['total_pages'] > 1) {
        if ($audNewsList['page'] > 1) {
            echo '<link rel="prev" href="' . htmlspecialchars(aud_news_list_url($audNewsList['page'] - 1, $audNewsList['category']), ENT_QUOTES, 'UTF-8') . '">' . "\n    ";
        }
        if ($audNewsList['page'] < $audNewsList['total_pages']) {
            echo '<link rel="next" href="' . htmlspecialchars(aud_news_list_url($audNewsList['page'] + 1, $audNewsList['category']), ENT_QUOTES, 'UTF-8') . '">' . "\n    ";
        }
    }
    aud_inline_critical_shell_css();
    aud_render_blocking_styles([
        '/components/breadcrumbs/breadcrumbs.css',
        '/components/news-list/news-list.css',
    ]);
    include __DIR__ . '/../includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs page-news">
    <?php include __DIR__ . '/../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../components/breadcrumbs/breadcrumbs.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-open.php'; ?>
    <?php include __DIR__ . '/../components/news-list/news-list.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/components/news-list/news-list.js"></script>
</body>

</html>
