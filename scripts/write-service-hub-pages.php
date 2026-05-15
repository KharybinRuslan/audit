<?php
declare(strict_types=1);

/**
 * Rewrites the 10 service hub pages to the same layout as pages/audit.php,
 * sourcing copy from per-page bundles: pages/<hub>/_bundle-audit-vars.php (generated).
 *
 * Run from repo root:
 *   php scripts/write-service-hub-pages.php
 */

$root = dirname(__DIR__);

$targets = [
    [
        'page' => 'pages/konsalting.php',
        'bundle' => 'pages/konsalting/_bundle-audit-vars.php',
        'preset' => 'pages/konsalting/_preset-audit-types.php',
        'bodyClass' => 'page-konsalting',
    ],
    [
        'page' => 'pages/finans.php',
        'bundle' => 'pages/finans/_bundle-audit-vars.php',
        'preset' => 'pages/finans/_preset-audit-types.php',
        'bodyClass' => 'page-finans',
    ],
    [
        'page' => 'pages/buhgalteriya.php',
        'bundle' => 'pages/buhgalteriya/_bundle-audit-vars.php',
        'preset' => 'pages/buhgalteriya/_preset-audit-types.php',
        'bodyClass' => 'page-buhgalteriya',
    ],
    [
        'page' => 'pages/forenzik.php',
        'bundle' => 'pages/forenzik/_bundle-audit-vars.php',
        'preset' => 'pages/forenzik/_preset-audit-types.php',
        'bodyClass' => 'page-forenzik',
    ],
    [
        'page' => 'pages/kadrovyy-audit.php',
        'bundle' => 'pages/kadrovyy-audit/_bundle-audit-vars.php',
        'preset' => 'pages/kadrovyy-audit/_preset-audit-types.php',
        'bodyClass' => 'page-kadrovyy-audit',
    ],
    [
        'page' => 'pages/msfo.php',
        'bundle' => 'pages/msfo/_bundle-audit-vars.php',
        'preset' => 'pages/msfo/_preset-audit-types.php',
        'bodyClass' => 'page-msfo',
    ],
    [
        'page' => 'pages/komplaens.php',
        'bundle' => 'pages/komplaens/_bundle-audit-vars.php',
        'preset' => 'pages/komplaens/_preset-audit-types.php',
        'bodyClass' => 'page-komplaens',
    ],
    [
        'page' => 'pages/biznes-konsalting.php',
        'bundle' => 'pages/biznes-konsalting/_bundle-audit-vars.php',
        'preset' => 'pages/biznes-konsalting/_preset-audit-types.php',
        'bodyClass' => 'page-biznes-konsalting',
    ],
    [
        'page' => 'pages/hsep.php',
        'bundle' => 'pages/hsep/_bundle-audit-vars.php',
        'preset' => 'pages/hsep/_preset-audit-types.php',
        'bodyClass' => 'page-hsep',
    ],
    [
        'page' => 'pages/due-diligence.php',
        'bundle' => 'pages/due-diligence/_bundle-audit-vars.php',
        'preset' => 'pages/due-diligence/_preset-audit-types.php',
        'bodyClass' => 'page-due-diligence',
    ],
];

$template = <<<'PHP'
<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/defer-css.php';

require __DIR__ . '/__BUNDLE__';
require __DIR__ . '/__PRESET__';

if (!isset($breadcrumbs) || !is_array($breadcrumbs) || $breadcrumbs === []) {
    $breadcrumbs = [
        ['label' => 'Главная', 'href' => '/'],
        ['label' => 'Услуги', 'href' => '/services'],
        ['label' => (string) $pageTitle],
    ];
}
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
    $auditCriticalCssPaths = [
        dirname(__DIR__) . '/components/breadcrumbs/breadcrumbs.css',
        dirname(__DIR__) . '/components/service-cover-hero/service-cover-hero.css',
    ];
    $auditCanInlineCritical = true;
    foreach ($auditCriticalCssPaths as $path) {
        if (!is_readable($path)) {
            $auditCanInlineCritical = false;
            break;
        }
    }
    if ($auditCanInlineCritical): ?>
        <style data-audit-critical>
<?php
        foreach ($auditCriticalCssPaths as $path) {
            readfile($path);
        }
?>
        </style>
    <?php else:
        aud_render_blocking_styles([
            '/components/breadcrumbs/breadcrumbs.css',
            '/components/service-cover-hero/service-cover-hero.css',
        ]);
    endif;
    include __DIR__ . '/../includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/audit-types/audit-types.css',
        '/components/audit-order-reasons/audit-order-reasons.css',
        '/components/audit-check-results/audit-check-results.css',
        '/components/audit-questions/audit-questions.css',
        '/components/audit-service-types/audit-service-types.css',
        '/components/audit-process/audit-process.css',
        '/components/audit-deadlines-pricing/audit-deadlines-pricing.css',
        '/components/audit-documents-needed/audit-documents-needed.css',
        '/components/audit-results-summary/audit-results-summary.css',
        '/components/audit-final-cta/audit-final-cta.css',
        '/components/audit-faq/audit-faq.css',
        '/components/news-slider/news-slider.css',
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
        '/vendor/swiper/swiper-lite.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs __BODY__">
    <?php include __DIR__ . '/../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-open.php'; ?>
    <?php include __DIR__ . '/../components/service-cover-hero/service-cover-hero.php'; ?>
    <?php include __DIR__ . '/../components/audit-types/audit-types.php'; ?>
    <?php include __DIR__ . '/../components/audit-order-reasons/audit-order-reasons.php'; ?>
    <?php include __DIR__ . '/../components/audit-check-results/audit-check-results.php'; ?>
    <?php include __DIR__ . '/../components/audit-questions/audit-questions.php'; ?>
    <?php include __DIR__ . '/../components/audit-service-types/audit-service-types.php'; ?>
    <?php include __DIR__ . '/../components/audit-process/audit-process.php'; ?>
    <?php include __DIR__ . '/../components/audit-deadlines-pricing/audit-deadlines-pricing.php'; ?>
    <?php include __DIR__ . '/../components/audit-documents-needed/audit-documents-needed.php'; ?>
    <?php include __DIR__ . '/../components/audit-results-summary/audit-results-summary.php'; ?>
    <?php include __DIR__ . '/../components/audit-mandatory-prep/audit-mandatory-prep.php'; ?>
    <?php include __DIR__ . '/../components/audit-final-cta/audit-final-cta.php'; ?>
    <?php include __DIR__ . '/../components/audit-faq/audit-faq.php'; ?>
    <?php include __DIR__ . '/../components/news-slider/news-slider.php'; ?>
    <?php include __DIR__ . '/../components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/js/swiper-defer-init.js"></script>
    <script defer src="/vendor/swiper/swiper-lite.min.js"></script>
    <script defer src="/js/swiper-slide-a11y.js"></script>
    <script defer src="/components/audit-types/audit-types.js"></script>
    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/components/news-slider/news-slider.js"></script>
    <script defer src="/components/audit-faq/audit-faq.js"></script>
</body>

</html>
PHP;

foreach ($targets as $t) {
    $pagePath = $root . '/' . $t['page'];
    $bundleRel = basename(dirname($t['bundle'])) . '/' . basename($t['bundle']);
    $presetRel = basename(dirname($t['preset'])) . '/' . basename($t['preset']);

    $out = str_replace(
        ['__BUNDLE__', '__PRESET__', '__BODY__'],
        [$bundleRel, $presetRel, $t['bodyClass']],
        $template
    );

    if (file_put_contents($pagePath, $out) === false) {
        fwrite(STDERR, "Failed write: {$pagePath}\n");
        exit(1);
    }

    echo "Wrote {$pagePath}\n";
}
