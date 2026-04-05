<?php
declare(strict_types=1);
$pageTitle = 'Контакты';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/components/site-header/site-header.css">
    <link rel="stylesheet" href="/components/hero/hero.css">
    <link rel="stylesheet" href="/components/contacts/contacts.css">
    <link rel="stylesheet" href="/components/contacts-map-requisites/contacts-map-requisites.css">
    <link rel="stylesheet" href="/components/home-faq/home-faq.css">
    <link rel="stylesheet" href="/components/reviews/reviews.css">
    <link rel="stylesheet" href="/components/audit-request-form/audit-modal.css">
    <link rel="stylesheet" href="/components/site-footer/site-footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body class="has-site-header">
    <?php include __DIR__ . '/../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../components/contacts/contacts.php'; ?>
    <?php include __DIR__ . '/../components/contacts-map-requisites/contacts-map-requisites.php'; ?>
    <?php include __DIR__ . '/../components/home-faq/home-faq.php'; ?>
    <?php include __DIR__ . '/../components/reviews/reviews.php'; ?>
    <?php include __DIR__ . '/../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../components/audit-request-form/audit-modal.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/components/hero/hero.js"></script>
    <script src="/components/site-header/site-header.js"></script>
    <script src="/components/audit-request-form/audit-modal.js"></script>
    <script src="/components/home-faq/home-faq.js"></script>
    <script src="/components/reviews/reviews.js"></script>
</body>

</html>
