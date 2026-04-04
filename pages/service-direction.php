<?php
declare(strict_types=1);
$pageTitle = 'Услуга направления';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/components/services-direction/services-direction.css">
    <link rel="stylesheet" href="/components/audit-types/audit-types.css">
    <link rel="stylesheet" href="/components/service-direction-details/service-direction-details.css">
    <link rel="stylesheet" href="/components/hero/hero.css">
    <link rel="stylesheet" href="/components/audit-request-form/audit-modal.css">
    <link rel="stylesheet" href="/components/site-footer/site-footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>
    <?php include __DIR__ . '/../components/services-direction/services-direction.php'; ?>
    <?php include __DIR__ . '/../components/audit-types/audit-types.php'; ?>
    <?php include __DIR__ . '/../components/service-direction-details/service-direction-details.php'; ?>
    <?php include __DIR__ . '/../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../components/audit-request-form/audit-modal.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/components/audit-types/audit-types.js"></script>
    <script src="/components/audit-request-form/audit-modal.js"></script>
</body>

</html>
