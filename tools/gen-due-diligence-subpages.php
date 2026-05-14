<?php
declare(strict_types=1);

$pages = [
    ['finansovyy-due-diligence', 'Финансовый Due Diligence', 'Финансовый Due Diligence: отчётность, прибыль и оборотный капитал. ООО "Аудит Топ Эксперт".'],
    ['nalogovyy-due-diligence', 'Налоговый Due Diligence', 'Налоговый Due Diligence: режимы, сделки и риски доначислений. ООО "Аудит Топ Эксперт".'],
    ['yuridicheskiy-due-diligence', 'Юридический Due Diligence', 'Юридический Due Diligence: структура, активы и договоры. ООО "Аудит Топ Эксперт".'],
    ['operatsionnyy-due-diligence', 'Операционный Due Diligence', 'Операционный Due Diligence: процессы, IT и зависимости. ООО "Аудит Топ Эксперт".'],
    ['kompleksnyy-due-diligence', 'Комплексный Due Diligence', 'Комплексный Due Diligence: согласованные выводы для сделки. ООО "Аудит Топ Эксперт".'],
    ['due-diligence-dlya-investorov', 'Due Diligence для инвесторов', 'Due Diligence для инвесторов: риски и условия раунда. ООО "Аудит Топ Эксперт".'],
];

$dir = dirname(__DIR__) . '/pages/due-diligence';
if (!is_dir($dir)) {
    fwrite(STDERR, "missing dir: $dir\n");
    exit(1);
}

$tail = <<<'PHP_TAIL'

require __DIR__ . '/_preset-audit-types.php';
$auditTypesEyebrow = 'Due diligence';
$auditTypesHeadingLead = 'Услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' в этой области';
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
    aud_render_blocking_styles(['/components/breadcrumbs/breadcrumbs.css', '/components/service-subpage-hero/service-subpage-hero.css']);
    include __DIR__ . '/../../includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/mandatory-audit-segments/mandatory-audit-segments.css',
        '/components/mandatory-audit-benefits/mandatory-audit-benefits.css',
        '/components/mandatory-audit-audience/mandatory-audit-audience.css',
        '/components/home-faq/home-faq.css',
        '/components/audit-types/audit-types.css',
        '/components/directions/directions.css',
        '/components/news-slider/news-slider.css',
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
        '/vendor/swiper/swiper-lite.min.css',
    ]);
    ?>
</head>
<body class="has-site-header has-breadcrumbs BODY_CLASS">
    <?php include __DIR__ . '/../../components/site-header/site-header.php'; ?>
    <?php include __DIR__ . '/../../components/layout-main-open.php'; ?>
    <?php include __DIR__ . '/../../components/service-subpage-hero/service-subpage-hero.php'; ?>
    <?php include __DIR__ . '/../../components/mandatory-audit-segments/mandatory-audit-segments.php'; ?>
    <?php include __DIR__ . '/../../components/mandatory-audit-benefits/mandatory-audit-benefits.php'; ?>
    <?php include __DIR__ . '/../../components/mandatory-audit-audience/mandatory-audit-audience.php'; ?>
    <?php include __DIR__ . '/../../components/home-faq/home-faq.php'; ?>
    <?php include __DIR__ . '/../../components/audit-types/audit-types.php'; ?>
    <?php include __DIR__ . '/../../components/directions/directions.php'; ?>
    <?php include __DIR__ . '/../../components/news-slider/news-slider.php'; ?>
    <?php include __DIR__ . '/../../components/layout-main-close.php'; ?>
    <?php include __DIR__ . '/../../components/site-footer/site-footer.php'; ?>
    <?php include __DIR__ . '/../../components/audit-request-form/audit-modal.php'; ?>
    <script defer src="/js/swiper-defer-init.js"></script>
    <script defer src="/vendor/swiper/swiper-lite.min.js"></script>
    <script defer src="/js/swiper-slide-a11y.js"></script>
    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/components/audit-types/audit-types.js"></script>
    <script defer src="/components/news-slider/news-slider.js"></script>
    <script defer src="/components/directions/directions.js"></script>
    <script defer src="/components/home-faq/home-faq.js"></script>
</body>
</html>

PHP_TAIL;

foreach ($pages as [$slug, $title, $desc]) {
    $bodyClass = 'page-due-diligence-' . $slug;
    $heroP1 = 'Проводим «' . $title . '» в рамках сделки или инвестиционного проекта: фиксируем задание, материальность и формат отчёта для совета и контрагента.';
    $heroP2 = 'Согласуем доступ к данным, минимизируем нагрузку на вашу команду и даём практичные рекомендации по условиям и митигации.';
    $heroHtml = '<p>' . $heroP1 . '</p>' . "\n" . '<p>' . $heroP2 . '</p>';

    $leftHtml = '<h2 class="mandatory-audit-segments__title">этапы</h2>' . "\n"
        . '<div class="mandatory-audit-segments__prose">' . "\n"
        . '    <p>Задание, запрос данных, интервью, аналитика, черновик находок, финальный отчёт и презентация для руководства.</p>' . "\n"
        . '    <ul class="mandatory-audit-segments__list">' . "\n"
        . '        <li>Чек-лист запросов и статус закрытия.</li>' . "\n"
        . '        <li>Карта рисков с оценкой влияния.</li>' . "\n"
        . '        <li>Связка с финансовой моделью сделки.</li>' . "\n"
        . '    </ul>' . "\n"
        . '    <p class="mandatory-audit-segments__outro">ООО "Аудит Топ Эксперт" координирует работу с юристами и налоговыми консультантами.</p>' . "\n"
        . '</div>';

    $rightHtml = '<h2 class="mandatory-audit-segments__title">когда критично</h2>' . "\n"
        . '<div class="mandatory-audit-segments__prose">' . "\n"
        . '    <p>M&amp;A, вход инвестора, рефинансирование, смена контроля, подготовка к листингу.</p>' . "\n"
        . '    <p class="mandatory-audit-segments__outro">Старт DD за <span class="mandatory-audit-segments__accent">2–4</span> недели до целевой даты подписания — оптимально.</p>' . "\n"
        . '</div>';

    $faq = [
        ['q' => 'Сколько длится DD?', 'html' => '<p>От нескольких недель до 1–2 месяцев в зависимости от масштаба и доступности данных.</p>'],
        ['q' => 'Нужен ли data room?', 'html' => '<p>Желателен; можем работать и с выгрузками в согласованной структуре.</p>'],
        ['q' => 'Это аудит?', 'html' => '<p>Нет; это согласованные процедуры due diligence для сделки, не независимый аудит отчётности.</p>'],
        ['q' => 'Конфиденциальность?', 'html' => '<p>NDA и регламент доступа — стандарт проекта.</p>'],
    ];

    $head = '<?php' . "\n"
        . 'declare(strict_types=1);' . "\n"
        . 'require_once __DIR__ . \'/../../includes/defer-css.php\';' . "\n\n"
        . '$pageTitle = ' . var_export($title, true) . ";\n"
        . '$pageDescription = ' . var_export($desc, true) . ";\n\n"
        . '$breadcrumbs = [' . "\n"
        . "    ['label' => 'Главная', 'href' => '/']," . "\n"
        . "    ['label' => 'Услуги', 'href' => '/services']," . "\n"
        . "    ['label' => 'DUE diligence', 'href' => '/due-diligence']," . "\n"
        . '    [\'label\' => ' . var_export($title, true) . '],' . "\n"
        . "];\n\n"
        . '$serviceSubpageHeroTitle = ' . var_export($title, true) . ";\n"
        . "\$serviceSubpageHeroImage = '/img/audit/nalogovyy-audit.png';\n"
        . '$serviceSubpageHeroBodyHtml = <<<' . "'HTML'\n" . $heroHtml . "\nHTML;\n\n"
        . "\$mandatoryAuditSegmentsEyebrow = 'DD';\n\n"
        . '$mandatoryAuditSegmentsColumnLeftHtml = <<<' . "'HTML'\n" . $leftHtml . "\nHTML;\n\n"
        . '$mandatoryAuditSegmentsColumnRightHtml = <<<' . "'HTML'\n" . $rightHtml . "\nHTML;\n\n"
        . "\$mandatoryAuditBenefitsHeadingLead = 'Польза для бизнеса';\n"
        . "\$mandatoryAuditBenefitsHeadingAccent = 'ООО "Аудит Топ Эксперт"';\n"
        . "\$mandatoryAuditBenefitsCards = [\n"
        . "    ['title' => 'Сделка:', 'text' => 'Меньше сюрпризов после закрытия.'],\n"
        . "    ['title' => 'Цена:', 'text' => 'Обоснование корректировок и escrow.'],\n"
        . "    ['title' => 'Совет:', 'text' => 'Понятный отчёт для акционеров.'],\n"
        . "    ['title' => 'Сроки:', 'text' => 'Сфокусированный запрос данных.'],\n"
        . "];\n\n"
        . "\$mandatoryAuditAudienceHeading = 'Кому подойдёт';\n"
        . "\$mandatoryAuditAudienceCards = [\n"
        . "    ['body_html' => 'Покупателям и инвесторам'],\n"
        . "    ['body_html' => 'Продавцам при подготовке к продаже'],\n"
        . "    ['body_html' => 'Финансовым директорам и <span class=\"mandatory-audit-audience__accent\">M&amp;A</span>'],\n"
        . "    ['body_html' => 'Банкам и лизингодателям'],\n"
        . "    ['body_html' => 'Совету директоров при крупных решениях'],\n"
        . "];\n\n"
        . '$homeFaqItems = ' . var_export($faq, true) . ";\n";

    $out = $head . str_replace('BODY_CLASS', $bodyClass, $tail);
    $path = $dir . '/' . $slug . '.php';
    if (file_put_contents($path, $out) === false) {
        fwrite(STDERR, "write fail: $path\n");
        exit(1);
    }
    echo "wrote $path\n";
}

echo "ok\n";
