<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/defer-css.php';

$pageTitle = 'Все услуги';
$pageDescription = 'Все услуги ООО "Аудит Топ Эксперт": аудит, налоги, МСФО, due diligence, бухгалтерский консалтинг и сопровождение бизнеса.';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги'],
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
    aud_inline_critical_shell_css();
    aud_render_blocking_styles([
        '/components/breadcrumbs/breadcrumbs.css',
        '/components/directions/directions.css',
    ]);
    include __DIR__ . '/../includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/contacts/contacts.css',
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs">
    <?php include __DIR__ . '/../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../components/breadcrumbs/breadcrumbs.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-open.php'; ?>
    <?php include __DIR__ . '/../components/directions/directions.php'; ?>
    <?php include __DIR__ . '/../components/contacts/contacts.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/directions/directions.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
</body>

</html>
