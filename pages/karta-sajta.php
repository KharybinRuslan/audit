<?php

declare(strict_types=1);

require_once __DIR__ . '/../includes/defer-css.php';
require_once __DIR__ . '/../includes/news/helpers.php';
require_once __DIR__ . '/../includes/seo/sitemap.php';

$pageTitle = 'Карта сайта';
$pageDescription = 'Структура сайта ООО "Аудит Топ Эксперт": разделы, услуги и новости.';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Карта сайта'],
];

$groups = aud_seo_sitemap_groups_for_html();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="canonical" href="<?= htmlspecialchars(aud_news_absolute_site_url('/karta-sajta'), ENT_QUOTES, 'UTF-8') ?>">
    <?php
    aud_inline_critical_shell_css();
    aud_render_blocking_styles([
        '/components/breadcrumbs/breadcrumbs.css',
        '/components/site-map/site-map.css',
    ]);
    include __DIR__ . '/../includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs">
    <?php include __DIR__ . '/../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../components/breadcrumbs/breadcrumbs.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-open.php'; ?>

    <section class="site-map" aria-label="Карта сайта">
        <div class="site-map__inner">
            <h1 class="site-map__title">Карта сайта</h1>
            <p class="site-map__intro">Ниже перечислены основные страницы сайта по разделам.</p>

            <?php foreach ($groups as $block) {
                $dense = !empty($block['dense']);
                ?>
                <section class="site-map__section">
                    <h2 class="site-map__section-title"><?= htmlspecialchars($block['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <ul class="site-map__list<?= $dense ? ' site-map__list--dense' : '' ?>">
                        <?php foreach ($block['items'] as $item) {
                            $href = htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8');
                            $text = htmlspecialchars((string) $item['label'], ENT_QUOTES, 'UTF-8');
                            ?>
                            <li class="site-map__item">
                                <a class="site-map__link" href="<?= $href ?>"><?= $text ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </section>
            <?php } ?>
        </div>
    </section>

    <?php include __DIR__ . '/../components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
</body>

</html>
