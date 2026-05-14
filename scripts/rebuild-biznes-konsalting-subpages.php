<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$srcPath = $root . '/business_consulting_service_pages_all.php';
$src = file_get_contents($srcPath);
if ($src === false) {
    fwrite(STDERR, "Cannot read {$srcPath}\n");
    exit(1);
}

$sections = [
    ['prefix' => 'strategicКонсалтинг', 'file' => 'pages/biznes-konsalting/strategicheskiy-konsalting.php', 'slug' => 'strategicheskiy-konsalting'],
    ['prefix' => 'managementКонсалтинг', 'file' => 'pages/biznes-konsalting/upravlencheskiy-konsalting.php', 'slug' => 'upravlencheskiy-konsalting'],
    ['prefix' => 'businessPlanning', 'file' => 'pages/biznes-konsalting/biznes-planirovanie.php', 'slug' => 'biznes-planirovanie'],
    ['prefix' => 'supportDealsMA', 'file' => 'pages/biznes-konsalting/soprovozhdenie-sdelok-ma.php', 'slug' => 'soprovozhdenie-sdelok-ma'],
    ['prefix' => 'registrationBusiness', 'file' => 'pages/biznes-konsalting/registratsiya-biznesa.php', 'slug' => 'registratsiya-biznesa'],
    ['prefix' => 'liquidationИReorganization', 'file' => 'pages/biznes-konsalting/likvidatsiya-i-reorganizatsiya.php', 'slug' => 'likvidatsiya-i-reorganizatsiya'],
    ['prefix' => 'servicesByInventoryProperty', 'file' => 'pages/biznes-konsalting/uslugi-po-inventarizatsii-imuschestva.php', 'slug' => 'uslugi-po-inventarizatsii-imuschestva'],
    ['prefix' => 'accountingConsultations', 'file' => 'pages/biznes-konsalting/buhgalterskie-konsultatsii.php', 'slug' => 'buhgalterskie-konsultatsii'],
    ['prefix' => 'consultationsByTaxes', 'file' => 'pages/biznes-konsalting/konsultatsii-po-nalogam.php', 'slug' => 'konsultatsii-po-nalogam'],
    ['prefix' => 'legalConsultingServices', 'file' => 'pages/biznes-konsalting/yuridicheskie-konsaltingovye-uslugi.php', 'slug' => 'yuridicheskie-konsaltingovye-uslugi'],
    ['prefix' => 'managementAccounting', 'file' => 'pages/biznes-konsalting/upravlencheskiy-uchet.php', 'slug' => 'upravlencheskiy-uchet'],
    ['prefix' => 'automationУправленческогоУчета', 'file' => 'pages/biznes-konsalting/avtomatizatsiya-upravlencheskogo-ucheta.php', 'slug' => 'avtomatizatsiya-upravlencheskogo-ucheta'],
    ['prefix' => 'servicesByRegistrationOoo', 'file' => 'pages/biznes-konsalting/uslugi-po-registratsii-ooo.php', 'slug' => 'uslugi-po-registratsii-ooo'],
    ['prefix' => 'preparationLna', 'file' => 'pages/biznes-konsalting/podgotovka-lna.php', 'slug' => 'podgotovka-lna'],
];

$startPos = strpos($src, '$pageTitle =');
if ($startPos === false) {
    fwrite(STDERR, "Cannot find first page marker\n");
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
    ['label' => 'Консалтинг и сопровождение бизнеса', 'href' => '/biznes-konsalting'],
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

<body class="has-site-header has-breadcrumbs page-biznes-konsalting-__SLUG__">
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
    $chunk = preg_replace('/\$serviceCoverHeroBgUrl\s*=\s*\'[^\']*\';/', '$serviceCoverHeroBgUrl = \'/img/audit/konsalting2.webp\';', $chunk, 1);
    $chunk = preg_replace('/\$auditFinalCtaBgUrl\s*=\s*\'[^\']*\';/', '$auditFinalCtaBgUrl = \'/img/audit/konsalting2.webp\';', $chunk, 1);

    $out = str_replace(
        ['__VARS__', '__SLUG__'],
        [$chunk, $meta['slug']],
        $template
    );

    $outPath = $root . '/' . $meta['file'];
    file_put_contents($outPath, $out);
    echo "Wrote {$outPath}\n";
}
