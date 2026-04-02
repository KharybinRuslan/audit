<?php
declare(strict_types=1);
/**
 * Главная страница — Аудит и налоговая безопасность
 * PHP 8.1. Подключение компонентов: hero, services.
 */
$pageTitle = 'Аудит и налоговая безопасность для бизнеса';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/components/hero/hero.css">
    <link rel="stylesheet" href="/components/services/services.css">
    <link rel="stylesheet" href="/components/audit-types/audit-types.css">
    <link rel="stylesheet" href="/components/news/news.css">
    <link rel="stylesheet" href="/components/directions/directions.css">
    <link rel="stylesheet" href="/components/stages/stages.css">
    <link rel="stylesheet" href="/components/reviews/reviews.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <?php include __DIR__ . '/components/hero/hero.php'; ?>
    <?php include __DIR__ . '/components/services/services.php'; ?>
    <?php include __DIR__ . '/components/audit-types/audit-types.php'; ?>
    <?php include __DIR__ . '/components/news/news.php'; ?>
    <?php include __DIR__ . '/components/directions/directions.php'; ?>
    <?php include __DIR__ . '/components/stages/stages.php'; ?>
    <?php include __DIR__ . '/components/reviews/reviews.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/components/hero/hero.js"></script>
    <script src="/components/services/services.js"></script>
    <script src="/components/audit-types/audit-types.js"></script>
    <script src="/components/directions/directions.js"></script>
    <script src="/components/stages/stages.js"></script>
    <script src="/components/reviews/reviews.js"></script>
</body>

</html>