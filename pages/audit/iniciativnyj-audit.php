<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Инициативный аудит';
$pageDescription = 'Инициативный аудит ООО "Аудит Топ Эксперт": независимая проверка учета и отчетности по запросу собственников, руководства, инвесторов или финансовой службы.';
$serviceCoverHeroTitle = 'Инициативный аудит для бизнеса';
$serviceCoverHeroLead = 'Проведем независимую проверку бухгалтерского, налогового или управленческого учета по инициативе собственников, руководства или инвесторов. Поможем понять реальное состояние учета, выявить ошибки, оценить риски и получить практические рекомендации до сделки, проверки, смены бухгалтера или принятия важного управленческого решения.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Проверка по выбранным участкам или комплексно',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим вашу задачу, подскажем, какой формат инициативного аудита подойдет именно вам, какие документы понадобятся и какой результат будет полезнее для бизнеса.';
$serviceCoverHeroBgUrl = '/img/audit/auditte.png';

$auditOrderReasonsTitle = 'В каких случаях заказывают инициативный аудит';
$auditOrderReasonsIntro = [
    'Инициативный аудит нужен, когда компания не обязана проходить проверку, но хочет получить независимую оценку учета, отчетности, финансовых рисков или работы бухгалтерии. Такой аудит помогает собственникам и руководству принимать решения на основе проверенных данных.',
    'Услуга особенно востребована в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'собственники хотят проверить состояние бухгалтерского и налогового учета',
    'планируется сделка, продажа бизнеса, привлечение инвестиций или кредитование',
    'есть сомнения в корректности работы бухгалтерии',
    'компания готовится к налоговой проверке или внутренней ревизии',
    'нужно проверить учет перед сменой главного бухгалтера или финансового директора',
    'требуется независимый отчет для руководства, партнеров или инвесторов',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает инициативная аудиторская проверка';
$auditCheckResultsParagraphs = [
    'Инициативная аудиторская проверка показывает, насколько корректно ведется учет, есть ли существенные ошибки, какие операции вызывают вопросы и какие риски могут повлиять на финансовый результат или налоговую безопасность.',
    'По итогам работы вы получаете отчет, перечень выявленных замечаний и рекомендации. Такой результат можно использовать для внутреннего контроля, переговоров, подготовки к сделке, оценки работы бухгалтерии или улучшения процессов.',
];

$auditQuestionsTitle = 'Какие задачи решает инициативный аудит';
$auditQuestionsIntro = 'Один из самых частых запросов — какие вопросы можно проверить без обязательного аудита. Перечень зависит от цели, но чаще всего инициативный аудит помогает ответить на следующие вопросы:';
$auditQuestionsItems = [
    'насколько корректно ведется бухгалтерский и налоговый учет',
    'есть ли ошибки, которые могут привести к доначислениям или штрафам',
    'соответствует ли отчетность реальному положению дел',
    'какие участки учета требуют исправления или дополнительного контроля',
    'насколько надежно оформлены первичные документы и договоры',
    'есть ли риски перед сделкой, кредитованием или проверкой',
    'насколько эффективно работает бухгалтерская служба',
    'что нужно исправить в первую очередь',
];
$auditQuestionsOutro = 'Если говорить простыми словами, инициативный аудит помогает собственнику увидеть учет без внутренних искажений: где все в порядке, где есть риски и какие действия нужно предпринять.';

$auditServiceTypesTitle = 'Виды инициативного аудита';
$auditServiceTypesIntro = 'Инициативный аудит может быть точечным или комплексным. Формат подбирается под задачу: проверить отдельный участок учета, оценить отчетность целиком или подготовить компанию к конкретному событию.';
$auditServiceTypesLead = 'К основным форматам относятся:';
$auditServiceTypesItems = [
    'инициативный аудит бухгалтерской отчетности',
    'налоговый инициативный аудит',
    'экспресс-аудит учета и отчетности',
    'аудит отдельных участков учета',
    'проверка работы бухгалтерии',
    'аудит перед сделкой или привлечением инвестиций',
    'аудит перед сменой бухгалтера',
    'подготовка рекомендаций по улучшению учета и контроля',
];

$auditProcessTitle = 'Как проводится инициативный аудит';
$auditProcessIntro = 'Многих интересует, как проходит инициативный аудит и насколько он отличается от обязательного. Главное отличие — гибкость: объем и глубина проверки определяются задачей клиента.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ задачи',
        'text' => 'Вы описываете ситуацию, цель проверки и ожидаемый результат. Мы уточняем, что именно нужно проверить и какой формат аудита будет оптимальным.',
    ],
    [
        'number' => '02',
        'title' => 'Определение объема проверки',
        'text' => 'Согласуем проверяемые периоды, участки учета, документы, формат отчета и уровень детализации выводов.',
    ],
    [
        'number' => '03',
        'title' => 'Запрос документов',
        'text' => 'Получаем отчетность, регистры, первичные документы, договоры, банковские выписки, налоговые расчеты и пояснения ответственных специалистов.',
    ],
    [
        'number' => '04',
        'title' => 'Анализ учета и рисков',
        'text' => 'Проверяем корректность отражения операций, сопоставляем данные, выявляем ошибки, расхождения, налоговые и финансовые риски.',
    ],
    [
        'number' => '05',
        'title' => 'Подготовка выводов',
        'text' => 'Формируем отчет с замечаниями, выводами и рекомендациями. При необходимости выделяем критичные, средние и несущественные риски.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете итоговый отчет и понятный план дальнейших действий для бухгалтерии, руководства или собственников.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки инициативного аудита';
$auditDeadlinesIntro = 'Срок зависит от объема проверки, количества документов, цели аудита и уровня детализации итогового отчета.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-аудит отдельного вопроса — от 1–3 рабочих дней',
    'проверка отдельного участка учета — от 3–5 рабочих дней',
    'стандартный инициативный аудит — от 5–15 рабочих дней',
    'комплексная проверка компании — по согласованию',
];
$auditDeadlinesOutro = 'Если задача срочная, можно начать с экспресс-анализа ключевых рисков и затем расширить проверку при необходимости.';

$auditPricingTitle = 'Стоимость инициативного аудита';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема проверки, количества документов, проверяемого периода, срочности и формата итогового отчета.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 3 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для инициативного аудита';
$auditDocumentsNeededIntro = 'Полный перечень зависит от цели проверки, но для первичной оценки обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'бухгалтерская отчетность за проверяемый период',
    'налоговые декларации и расчеты',
    'оборотно-сальдовые ведомости',
    'регистры учета',
    'первичные документы по выбранным участкам',
    'договоры с контрагентами',
    'банковские выписки и платежные документы',
    'учетная политика',
    'пояснения по спорным или нестандартным операциям',
];
$auditDocumentsNeededOutro = 'Если вы пока не знаете, какие документы нужны, достаточно описать задачу. Мы подскажем, с чего начать и какие материалы запросить у бухгалтерии.';

$auditResultsSummaryTitle = 'Что вы получите по итогам инициативного аудита';
$auditResultsSummaryIntro = 'Инициативный аудит дает практический результат для управления бизнесом, а не только формальную проверку документов.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'отчет по результатам проверки',
    'перечень ошибок, замечаний и спорных участков',
    'оценку финансовых и налоговых рисков',
    'рекомендации по исправлению нарушений',
    'приоритетный план действий для бухгалтерии и руководства',
    'независимую позицию для собственников или инвесторов',
    'понимание реального состояния учета и отчетности',
];
$auditResultsSummaryOutro = 'Результат инициативного аудита должен быть понятен не только бухгалтеру, но и руководителю или собственнику, который принимает решения о дальнейшем развитии бизнеса.';

$auditMandatoryPrepTitle = 'Нужно проверить учет до сделки или проверки? Поможем заранее';
$auditMandatoryPrepIntro = 'Инициативный аудит особенно полезен до событий, где цена ошибки высока: сделки, проверки, кредитования, смены бухгалтера, привлечения инвестиций или внутреннего конфликта между участниками бизнеса.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие участки учета несут наибольшие риски',
    'какие документы нужно проверить в первую очередь',
    'какие ошибки стоит исправить до сделки или проверки',
    'какие выводы важно зафиксировать для собственников',
    'какой формат отчета будет полезен для принятия решения',
];
$auditMandatoryPrepOutro = 'Чем раньше провести инициативную проверку, тем больше возможностей исправить ошибки до того, как они станут проблемой.';

$auditFinalCtaTitle = 'Нужен инициативный аудит? Начнем с оценки вашей задачи';
$auditFinalCtaText = 'Отправьте краткое описание ситуации, отчетность или список вопросов. Мы подскажем, какой формат проверки подойдет, сколько времени потребуется и какой результат вы получите по итогам работы.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/auditte.png';

$auditFaqTitle = 'Частые вопросы об инициативном аудите';
$auditFaqItems = [
    [
        'q' => 'Чем инициативный аудит отличается от обязательного?',
        'a' => 'Обязательный аудит проводится при наличии установленной необходимости, а инициативный — по желанию собственников, руководства, инвесторов или финансовой службы для оценки учета и рисков.',
    ],
    [
        'q' => 'Можно ли проверить только один участок учета?',
        'a' => 'Да, инициативный аудит может быть точечным: можно проверить налоги, зарплату, расчеты с контрагентами, выручку, расходы, основные средства или конкретные операции.',
    ],
    [
        'q' => 'Получим ли мы аудиторское заключение?',
        'a' => 'По инициативному аудиту чаще готовится отчет с выводами и рекомендациями. Если нужно именно аудиторское заключение, формат обсуждается отдельно.',
    ],
    [
        'q' => 'Можно ли провести аудит удаленно?',
        'a' => 'Да, если документы предоставлены в электронном виде и есть возможность получить пояснения от ответственных специалистов.',
    ],
    [
        'q' => 'Сколько длится инициативный аудит?',
        'a' => 'Срок зависит от объема проверки. Экспресс-анализ может занять несколько дней, комплексная проверка — от одной-двух недель и более.',
    ],
    [
        'q' => 'Кому полезен инициативный аудит?',
        'a' => 'Он полезен собственникам, руководству, инвесторам, финансовым директорам и компаниям, которые хотят увидеть реальное состояние учета и снизить риски.',
    ],
    [
        'q' => 'Что делать, если нашли ошибки?',
        'a' => 'Ошибки фиксируются в отчете, после чего вы получаете рекомендации по исправлению документов, учета и внутренних процессов.',
    ],
    [
        'q' => 'Можно ли заказать аудит перед сменой бухгалтера?',
        'a' => 'Да, это один из частых сценариев. Проверка помогает понять, в каком состоянии передается учет и какие риски нужно закрыть.',
    ],
];

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Аудиторские услуги', 'href' => '/audit'],
    ['label' => 'Инициативный аудит'],
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

<body class="has-site-header has-breadcrumbs page-audit-iniciativnyj-audit">
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