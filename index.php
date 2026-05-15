<?php
declare(strict_types=1);
/**
 * Главная страница — Аудит и налоговая безопасность
 * PHP 8.1. Подключение компонентов: hero, services.
 */
require_once __DIR__ . '/includes/defer-css.php';

$pageTitle = 'Аудит и налоговая безопасность для бизнеса';
$pageDescription = 'Обязательный и инициативный аудит, налоговая безопасность, МСФО, due diligence и forensic. Быстро и конфиденциально по стандартам МСА — ООО "Аудит Топ Эксперт".';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preload" as="image" href="/img/block-audit.webp" type="image/webp">
    <?php
    aud_inline_critical_shell_css();
    include __DIR__ . '/includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/services/services.css',
        '/components/audit-types/audit-types.css',
        '/components/news/news.css',
        '/components/directions/directions.css',
        '/components/stages/stages.min.css',
        '/components/reviews/reviews.min.css',
        '/components/home-faq/home-faq.css',
        '/components/cta-te/cta-te.css',
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
        '/vendor/swiper/swiper-lite.min.css',
    ]);
    ?>
</head>

<body class="has-site-header">
    <?php include __DIR__ . '/components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/components/layout-main-open.php'; ?>
    <?php include __DIR__ . '/components/hero/hero.php'; ?>
    <?php include __DIR__ . '/components/services/services.php'; ?>
    <?php include __DIR__ . '/components/audit-types/audit-types.php'; ?>
    <?php include __DIR__ . '/components/news/news.php'; ?>
    <?php include __DIR__ . '/components/directions/directions.php'; ?>
    <?php include __DIR__ . '/components/stages/stages.php'; ?>
    <?php include __DIR__ . '/components/reviews/reviews.php'; ?>
    <?php include __DIR__ . '/components/home-faq/home-faq.php'; ?>
    <?php include __DIR__ . '/components/cta-te/cta-te.php'; ?>
    <?php include __DIR__ . '/components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/js/swiper-defer-init.js"></script>
    <script defer src="/vendor/swiper/swiper-lite.min.js"></script>
    <script defer src="/js/swiper-slide-a11y.js"></script>
    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/components/services/services.js"></script>
    <script defer src="/components/audit-types/audit-types.js"></script>
    <script defer src="/components/directions/directions.js"></script>
    <script defer src="/components/stages/stages.js"></script>
    <script defer src="/components/reviews/reviews.js"></script>
    <script defer src="/components/home-faq/home-faq.js"></script>
</body>

</html>