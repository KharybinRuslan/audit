<?php
declare(strict_types=1);

$pages = [
    ['strategicheskiy-konsalting', 'Стратегический консалтинг', 'Стратегический консалтинг: цели, инициативы и контроль реализации для роста компании. ООО "Аудит Топ Эксперт".'],
    ['upravlencheskiy-konsalting', 'Управленческий консалтинг', 'Управленческий консалтинг: процессы, оргмодель и эффективность. ООО "Аудит Топ Эксперт".'],
    ['biznes-planirovanie', 'Бизнес-планирование', 'Бизнес-планирование: финансовые модели и сценарии для банка и инвестора. ООО "Аудит Топ Эксперт".'],
    ['soprovozhdenie-sdelok-ma', 'Сопровождение сделок (M&A)', 'Сопровождение M&A: этапы сделки, данные и координация с советом. ООО "Аудит Топ Эксперт".'],
    ['registratsiya-biznesa', 'Регистрация бизнеса', 'Регистрация бизнеса: форма собственности, документы и регистрация. ООО "Аудит Топ Эксперт".'],
    ['likvidatsiya-i-reorganizatsiya', 'Ликвидация и реорганизация', 'Ликвидация и реорганизация: процедуры, кредиторы и сотрудники. ООО "Аудит Топ Эксперт".'],
    ['uslugi-po-inventarizatsii-imuschestva', 'Услуги по инвентаризации имущества', 'Инвентаризация имущества: методика, акты и учётные последствия. ООО "Аудит Топ Эксперт".'],
    ['buhgalterskie-konsultatsii', 'Бухгалтерские консультации', 'Бухгалтерские консультации: учётная политика и нетиповые операции. ООО "Аудит Топ Эксперт".'],
    ['konsultatsii-po-nalogam', 'Консультации по налогам', 'Консультации по налогам для бизнеса: режимы, риски и документы. ООО "Аудит Топ Эксперт".'],
    ['yuridicheskie-konsaltingovye-uslugi', 'Юридические консалтинговые услуги', 'Юридический консалтинг: договоры, корпоративные вопросы и проекты. ООО "Аудит Топ Эксперт".'],
    ['upravlencheskiy-uchet', 'Управленческий учет', 'Управленческий учёт: регламенты, отчёты и дашборды для руководства. ООО "Аудит Топ Эксперт".'],
    ['avtomatizatsiya-upravlencheskogo-ucheta', 'Автоматизация управленческого учета', 'Автоматизация управленческого учёта: данные, интеграции и контроль KPI. ООО "Аудит Топ Эксперт".'],
    ['uslugi-po-registratsii-ooo', 'Услуги по регистрации ООО', 'Регистрация ООО: учредительные документы и сопровождение в ФНС. ООО "Аудит Топ Эксперт".'],
    ['podgotovka-lna', 'Подготовка ЛНА', 'Подготовка локальных нормативных актов под ваши процессы и ТК РФ. ООО "Аудит Топ Эксперт".'],
];

$dir = dirname(__DIR__) . '/pages/biznes-konsalting';
if (!is_dir($dir)) {
    fwrite(STDERR, "missing dir: $dir\n");
    exit(1);
}

$tail = <<<'PHP_TAIL'

require __DIR__ . '/_preset-audit-types.php';
$auditTypesEyebrow = 'Консалтинг';
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

/** Вставляется в генерируемые подстраницы как есть (без конкатенации длинных массивов). */
$biznesSubpageBenefitsAudiencePhp = <<<'BIZNES_SUBPAGE_PHP'
$mandatoryAuditBenefitsHeadingLead = 'Польза для бизнеса';
$mandatoryAuditBenefitsHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$mandatoryAuditBenefitsCards = [
    ['title' => 'Фокус:', 'text' => 'Решения под ваш масштаб и отрасль.'],
    ['title' => 'Сроки:', 'text' => 'Понятные вехи и статусы.'],
    ['title' => 'Команда:', 'text' => 'Меньше разрывов между финансами, налогами и правом.'],
    ['title' => 'Результат:', 'text' => 'Документы, которые можно внедрять.'],
];

$mandatoryAuditAudienceHeading = 'Кому подойдёт';
$mandatoryAuditAudienceCards = [
    ['body_html' => 'Собственникам и генеральным директорам'],
    ['body_html' => 'Финансовым и операционным директорам'],
    ['body_html' => 'Компаниям на этапе <span class="mandatory-audit-audience__accent">роста</span> или сделки'],
    ['body_html' => 'Тем, кто готовит отчётность для банка или инвестора'],
    ['body_html' => 'Среднему бизнесу без выделенного проектного офиса'],
];

BIZNES_SUBPAGE_PHP;

foreach ($pages as [$slug, $title, $desc]) {
    $bodyClass = 'page-biznes-konsalting-' . $slug;
    $heroP1 = 'Помогаем с направлением «' . $title . '»: фиксируем цели, этапы и ответственных, подключаем экспертизу ООО "Аудит Топ Эксперт" там, где нужны цифры, право или налоги.';
    $heroP2 = 'Формат — от разового консалта до проекта с контрольными точками и отчётностью руководству.';
    $heroHtml = '<p>' . $heroP1 . '</p>' . "\n" . '<p>' . $heroP2 . '</p>';

    $leftHtml = '<h2 class="mandatory-audit-segments__title">формат работ</h2>' . "\n"
        . '<div class="mandatory-audit-segments__prose">' . "\n"
        . '    <p>Диагностика запроса, план работ, промежуточные согласования, итоговый пакет документов и рекомендаций.</p>' . "\n"
        . '    <ul class="mandatory-audit-segments__list">' . "\n"
        . '        <li>Прозрачная смета часов и ролей.</li>' . "\n"
        . '        <li>Единая точка контакта на стороне ООО "Аудит Топ Эксперт".</li>' . "\n"
        . '        <li>Передача знаний команде заказчика.</li>' . "\n"
        . '    </ul>' . "\n"
        . '    <p class="mandatory-audit-segments__outro">Связываем консалтинг с бухгалтерией, налогами и юристами внутри группы услуг.</p>' . "\n"
        . '</div>';

    $rightHtml = '<h2 class="mandatory-audit-segments__title">когда обращаться</h2>' . "\n"
        . '<div class="mandatory-audit-segments__prose">' . "\n"
        . '    <p>Перед сделкой, сменой модели, ростом штата или требованием банка и инвестора к прозрачности процессов.</p>' . "\n"
        . '    <p class="mandatory-audit-segments__outro">Чем раньше выровняли <span class="mandatory-audit-segments__accent">регламенты</span>, тем дешевле исправления на ходу.</p>' . "\n"
        . '</div>';

    $faq = [
        ['q' => 'Работаете удалённо?', 'html' => '<p>Да, с выездом по согласованию.</p>'],
        ['q' => 'Можно ли разовую консультацию?', 'html' => '<p>Да, фиксируем состав и срок в задании.</p>'],
        ['q' => 'NDA?', 'html' => '<p>Подписываем стандартный или ваш.</p>'],
        ['q' => 'Сроки проекта?', 'html' => '<p>Зависят от охвата; оцениваем на старте.</p>'],
    ];
    $faqExport = var_export($faq, true);

    $titleLit = var_export($title, true);
    $descLit = var_export($desc, true);
    $head = '<?php' . "\n"
        . 'declare(strict_types=1);' . "\n"
        . 'require_once __DIR__ . \'/../../includes/defer-css.php\';' . "\n\n"
        . '$pageTitle = ' . $titleLit . ";\n"
        . '$pageDescription = ' . $descLit . ";\n\n"
        . '$breadcrumbs = [' . "\n"
        . "    ['label' => 'Главная', 'href' => '/']," . "\n"
        . "    ['label' => 'Услуги', 'href' => '/services']," . "\n"
        . "    ['label' => 'Консалтинг и сопровождение бизнеса', 'href' => '/biznes-konsalting']," . "\n"
        . '    [\'label\' => ' . $titleLit . '],' . "\n"
        . "];\n\n"
        . '$serviceSubpageHeroTitle = ' . $titleLit . ";\n"
        . "\$serviceSubpageHeroImage = '/img/audit/kompleksnyy-audit.webp';\n"
        . '$serviceSubpageHeroBodyHtml = <<<' . "'HTML'\n" . $heroHtml . "\nHTML;\n\n"
        . "\$mandatoryAuditSegmentsEyebrow = 'Проект';\n\n"
        . '$mandatoryAuditSegmentsColumnLeftHtml = <<<' . "'HTML'\n" . $leftHtml . "\nHTML;\n\n"
        . '$mandatoryAuditSegmentsColumnRightHtml = <<<' . "'HTML'\n" . $rightHtml . "\nHTML;\n\n"
        . $biznesSubpageBenefitsAudiencePhp . "\n";

    $head .= '$homeFaqItems = ' . $faqExport . ";\n";
    $out = $head . str_replace('BODY_CLASS', $bodyClass, $tail);
    $path = $dir . '/' . $slug . '.php';
    if (file_put_contents($path, $out) === false) {
        fwrite(STDERR, "write fail: $path\n");
        exit(1);
    }
    echo "wrote $path\n";
}

echo "ok\n";
