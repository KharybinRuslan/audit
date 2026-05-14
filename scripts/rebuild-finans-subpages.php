<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$srcPath = $root . '/finance_service_pages_all.php';
$src = file_get_contents($srcPath);
if ($src === false) {
    fwrite(STDERR, "Cannot read {$srcPath}\n");
    exit(1);
}

$sections = [
    ['prefix' => 'financialAnalysisCompany', 'file' => 'pages/finans/finansovyy-analiz-kompanii.php', 'slug' => 'finansovyy-analiz-kompanii'],
    ['prefix' => 'financialModeling', 'file' => 'pages/finans/finansovoe-modelirovanie.php', 'slug' => 'finansovoe-modelirovanie'],
    ['prefix' => 'businessValuation', 'file' => 'pages/finans/otsenka-biznesa.php', 'slug' => 'otsenka-biznesa'],
    ['prefix' => 'assetValuation', 'file' => 'pages/finans/otsenka-aktivov.php', 'slug' => 'otsenka-aktivov'],
    ['prefix' => 'investmentAnalysis', 'file' => 'pages/finans/investitsionnyy-analiz.php', 'slug' => 'investitsionnyy-analiz'],
    ['prefix' => 'financialEconomicAnalysis', 'file' => 'pages/finans/analiz-fhdy-predpriyatiya.php', 'slug' => 'analiz-fhdy-predpriyatiya'],
    ['prefix' => 'financialAccountingSetup', 'file' => 'pages/finans/postanovka-finansovogo-ucheta.php', 'slug' => 'postanovka-finansovogo-ucheta'],
    ['prefix' => 'courtFinancialReports', 'file' => 'pages/finans/finansovye-otchety-dlya-sudov.php', 'slug' => 'finansovye-otchety-dlya-sudov'],
    ['prefix' => 'userFinancialAnalysis', 'file' => 'pages/finans/finansovyy-analiz-dlya-polzovateley.php', 'slug' => 'finansovyy-analiz-dlya-polzovateley'],
    ['prefix' => 'financialModelDevelopment', 'file' => 'pages/finans/razrabotka-finansovoy-modeli.php', 'slug' => 'razrabotka-finansovoy-modeli'],
    ['prefix' => 'financeAutomation', 'file' => 'pages/finans/avtomatizatsiya-finansovogo-ucheta.php', 'slug' => 'avtomatizatsiya-finansovogo-ucheta'],
    ['prefix' => 'portfolioAudit', 'file' => 'pages/finans/audit-investitsionnogo-portfelya.php', 'slug' => 'audit-investitsionnogo-portfelya'],
    ['prefix' => 'assetAllocationConsulting', 'file' => 'pages/finans/konsultatsii-po-razmeshcheniyu-aktivov.php', 'slug' => 'konsultatsii-po-razmeshcheniyu-aktivov'],
];

$startPos = strpos($src, '$pageTitle =');
if ($startPos === false) {
    fwrite(STDERR, "Cannot find first $pageTitle marker\n");
    exit(1);
}
$payload = substr($src, $startPos);
$chunks = preg_split('#\R(?=\$pageTitle = )#u', (string) $payload);
if ($chunks === false) {
    fwrite(STDERR, "preg_split failed\n");
    exit(1);
}
if (count($chunks) !== count($sections)) {
    fwrite(STDERR, 'Unexpected section count: ' . count($chunks) . "\n");
    exit(1);
}

$template = <<<'PHP'
<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

__VARS__

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Финансовый консалтинг и оценка', 'href' => '/finans'],
    ['label' => (string) $pageTitle],
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
    $auditCriticalCssPaths = [
        dirname(__DIR__, 2) . '/components/breadcrumbs/breadcrumbs.css',
        dirname(__DIR__, 2) . '/components/service-cover-hero/service-cover-hero.css',
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
    include __DIR__ . '/../../includes/fonts-local.php';
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
        '/components/directions/directions.css',
        '/components/news-slider/news-slider.css',
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
        '/vendor/swiper/swiper-lite.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs page-finans-__SLUG__">
    <?php include __DIR__ . '/../../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../../components/layout-main-open.php'; ?>
    <?php include __DIR__ . '/../../components/service-cover-hero/service-cover-hero.php'; ?>
    <?php include __DIR__ . '/../../components/audit-order-reasons/audit-order-reasons.php'; ?>
    <?php include __DIR__ . '/../../components/audit-check-results/audit-check-results.php'; ?>
    <?php include __DIR__ . '/../../components/audit-questions/audit-questions.php'; ?>
    <?php include __DIR__ . '/../../components/audit-service-types/audit-service-types.php'; ?>
    <?php include __DIR__ . '/../../components/audit-process/audit-process.php'; ?>
    <?php include __DIR__ . '/../../components/audit-deadlines-pricing/audit-deadlines-pricing.php'; ?>
    <?php include __DIR__ . '/../../components/audit-documents-needed/audit-documents-needed.php'; ?>
    <?php include __DIR__ . '/../../components/audit-results-summary/audit-results-summary.php'; ?>
    <?php include __DIR__ . '/../../components/audit-mandatory-prep/audit-mandatory-prep.php'; ?>
    <?php include __DIR__ . '/../../components/audit-final-cta/audit-final-cta.php'; ?>
    <?php include __DIR__ . '/../../components/audit-faq/audit-faq.php'; ?>
    <?php include __DIR__ . '/../../components/audit-types/audit-types.php'; ?>
    <?php include __DIR__ . '/../../components/directions/directions.php'; ?>
    <?php include __DIR__ . '/../../components/news-slider/news-slider.php'; ?>
    <?php include __DIR__ . '/../../components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/../../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../../components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/js/swiper-defer-init.js"></script>
    <script defer src="/vendor/swiper/swiper-lite.min.js"></script>
    <script defer src="/js/swiper-slide-a11y.js"></script>
    <script defer src="/components/audit-types/audit-types.js"></script>
    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/components/news-slider/news-slider.js"></script>
    <script defer src="/components/directions/directions.js"></script>
    <script defer src="/components/audit-faq/audit-faq.js"></script>
</body>

</html>
PHP;

foreach ($sections as $idx => $meta) {
    $chunk = ltrim((string) $chunks[$idx]);
    $prefix = $meta['prefix'];
    $chunk = str_replace('$' . $prefix, '$audit', $chunk);

    $out = str_replace(
        ['__VARS__', '__SLUG__'],
        [$chunk, $meta['slug']],
        $template
    );

    $outPath = $root . '/' . $meta['file'];
    file_put_contents($outPath, $out);
    echo "Wrote {$outPath}\n";
}
