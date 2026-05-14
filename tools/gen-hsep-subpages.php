<?php
declare(strict_types=1);

$pages = [
    ['kursy-dlya-buhgalterov', 'Курсы для бухгалтеров', 'Курсы для бухгалтеров: учёт, отчётность и практические кейсы. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['kursy-po-nalogam', 'Курсы по налогам', 'Курсы по налогам для бухгалтеров и финансовых директоров. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['obuchenie-msfo', 'Обучение МСФО', 'Обучение МСФО: стандарты, раскрытия и закрытие периода. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['obuchenie-vnutrennemu-auditu', 'Обучение внутреннему аудиту', 'Обучение внутреннему аудиту: методики и работа с бизнесом. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['povyshenie-kvalifikatsii-auditorov', 'Повышение квалификации аудиторов', 'Повышение квалификации аудиторов: актуальные требования и практика. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['korporativnoe-obuchenie', 'Корпоративное обучение', 'Корпоративное обучение под задачи компании. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['onlayn-kursy', 'Онлайн-курсы', 'Онлайн-курсы: гибкий график и доступ к материалам. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['seminary-i-vebinary', 'Семинары и вебинары', 'Семинары и вебинары по актуальным темам для финансовых служб. ООО "Аудит Топ Эксперт" и ВШЭП.'],
    ['sertifikatsionnye-programmy', 'Сертификационные программы', 'Сертификационные программы с подтверждением компетенций. ООО "Аудит Топ Эксперт" и ВШЭП.'],
];

$dir = dirname(__DIR__) . '/pages/hsep';
if (!is_dir($dir)) {
    fwrite(STDERR, "missing dir: $dir\n");
    exit(1);
}

$tail = <<<'PHP_TAIL'

require __DIR__ . '/_preset-audit-types.php';
$auditTypesEyebrow = 'HSEP';
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

$hsepLinkPara = '<p>Образовательный партнёр — <a href="https://hsep.ru/" target="_blank" rel="noopener noreferrer">Высшая школа экспертизы и права (ВШЭП)</a>; каталог программ на <a href="https://hsep.ru/" target="_blank" rel="noopener noreferrer">hsep.ru</a>.</p>';

foreach ($pages as [$slug, $title, $desc]) {
    $bodyClass = 'page-hsep-' . $slug;
    $heroP1 = 'Программа «' . $title . '»: практический фокус, актуальные требования и поддержка методистов ООО "Аудит Топ Эксперт".';
    $heroP2 = 'Формат и расписание согласуем под вашу команду; при необходимости комбинируем с корпоративным треком.';
    $heroHtml = '<p>' . $heroP1 . '</p>' . "\n" . '<p>' . $heroP2 . '</p>' . "\n" . $hsepLinkPara;

    $leftHtml = '<h2 class="mandatory-audit-segments__title">что входит</h2>' . "\n"
        . '<div class="mandatory-audit-segments__prose">' . "\n"
        . '    <p>Модули, материалы, проверка усвоения и обратная связь от преподавателей.</p>' . "\n"
        . '    <ul class="mandatory-audit-segments__list">' . "\n"
        . '        <li>Сертификат или удостоверение — по выбранной программе.</li>' . "\n"
        . '        <li>Доступ к записям и шаблонам (по регламенту курса).</li>' . "\n"
        . '        <li>Связка с практикой ООО "Аудит Топ Эксперт" в аудите и консалтинге.</li>' . "\n"
        . '    </ul>' . "\n"
        . '    <p class="mandatory-audit-segments__outro">Расширенный каталог направлений — на сайте партнёра <a href="https://hsep.ru/" target="_blank" rel="noopener noreferrer">hsep.ru</a>.</p>' . "\n"
        . '</div>';

    $rightHtml = '<h2 class="mandatory-audit-segments__title">кому подойдёт</h2>' . "\n"
        . '<div class="mandatory-audit-segments__prose">' . "\n"
        . '    <p>Бухгалтерам, финансовым директорам, внутренним аудиторам и руководителям, которым нужно выровнять знания команды.</p>' . "\n"
        . '    <p class="mandatory-audit-segments__outro">Старт групп — по <span class="mandatory-audit-segments__accent">набору</span>; корпоратив — в удобные даты.</p>' . "\n"
        . '</div>';

    $faq = [
        ['q' => 'Как записаться?', 'html' => '<p>Оставьте заявку через форму на сайте или свяжитесь с нами — подберём поток и формат.</p>'],
        ['q' => 'Есть ли онлайн?', 'html' => '<p>Да; уточняйте доступность для конкретной программы.</p>'],
        ['q' => 'Что такое ВШЭП?', 'html' => '<p>Высшая школа экспертизы и права — образовательный партнёр, программы и платформа: <a href="https://hsep.ru/" target="_blank" rel="noopener noreferrer">hsep.ru</a>.</p>'],
        ['q' => 'Корпоративный формат?', 'html' => '<p>Да, адаптируем программу под отрасль и политику компании.</p>'],
    ];

    $head = '<?php' . "\n"
        . 'declare(strict_types=1);' . "\n"
        . 'require_once __DIR__ . \'/../../includes/defer-css.php\';' . "\n\n"
        . '$pageTitle = ' . var_export($title, true) . ";\n"
        . '$pageDescription = ' . var_export($desc, true) . ";\n\n"
        . '$breadcrumbs = [' . "\n"
        . "    ['label' => 'Главная', 'href' => '/']," . "\n"
        . "    ['label' => 'Услуги', 'href' => '/services']," . "\n"
        . "    ['label' => 'Обучение и академия HSEP', 'href' => '/hsep']," . "\n"
        . '    [\'label\' => ' . var_export($title, true) . '],' . "\n"
        . "];\n\n"
        . '$serviceSubpageHeroTitle = ' . var_export($title, true) . ";\n"
        . "\$serviceSubpageHeroImage = '/img/audit/nalogovyy-audit.webp';\n"
        . '$serviceSubpageHeroBodyHtml = <<<' . "'HTML'\n" . $heroHtml . "\nHTML;\n\n"
        . "\$mandatoryAuditSegmentsEyebrow = 'Обучение';\n\n"
        . '$mandatoryAuditSegmentsColumnLeftHtml = <<<' . "'HTML'\n" . $leftHtml . "\nHTML;\n\n"
        . '$mandatoryAuditSegmentsColumnRightHtml = <<<' . "'HTML'\n" . $rightHtml . "\nHTML;\n\n"
        . "\$mandatoryAuditBenefitsHeadingLead = 'Польза для бизнеса';\n"
        . "\$mandatoryAuditBenefitsHeadingAccent = 'ООО "Аудит Топ Эксперт"';\n"
        . "\$mandatoryAuditBenefitsCards = [\n"
        . "    ['title' => 'Команда:', 'text' => 'Единый уровень знаний в финансовом контуре.'],\n"
        . "    ['title' => 'Риски:', 'text' => 'Меньше ошибок в учёте и отчётности.'],\n"
        . "    ['title' => 'Карьера:', 'text' => 'Подтверждение квалификации для сотрудников.'],\n"
        . "    ['title' => 'Партнёр:', 'text' => 'Доступ к экосистеме ВШЭП на hsep.ru.'],\n"
        . "];\n\n"
        . "\$mandatoryAuditAudienceHeading = 'Кому подойдёт';\n"
        . "\$mandatoryAuditAudienceCards = [\n"
        . "    ['body_html' => 'Главным бухгалтерам и бухгалтерам'],\n"
        . "    ['body_html' => 'Финансовым директорам и контролёрам'],\n"
        . "    ['body_html' => 'Специалистам <span class=\"mandatory-audit-audience__accent\">внутреннего аудита</span>'],\n"
        . "    ['body_html' => 'HR и руководителям, развивающим компетенции'],\n"
        . "    ['body_html' => 'Компаниям с распределёнными командами'],\n"
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
