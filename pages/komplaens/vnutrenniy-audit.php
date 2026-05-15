<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Внутренний аудит';
$pageDescription = 'Внутренний аудит: независимая оценка процессов, контроля, рисков, документооборота и эффективности управления внутри компании.';

$serviceCoverHeroTitle = 'Внутренний аудит бизнеса';
$serviceCoverHeroLead = 'Проведем внутренний аудит процессов, документов, контрольных процедур и зон ответственности внутри компании. Поможем выявить слабые места, управленческие и финансовые риски, дублирование функций, нарушения регламентов и точки, где бизнес теряет деньги, время или управляемость.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Проверка процессов, контроля и рисков',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим структуру бизнеса, ключевые процессы и цель проверки, после чего предложим формат внутреннего аудита под вашу задачу.';
$serviceCoverHeroBgUrl = '/img/audit/risk-kontrol.webp';

$auditOrderReasonsTitle = 'Когда компании нужен внутренний аудит';
$auditOrderReasonsIntro = [
    'Внутренний аудит нужен, когда руководству или собственникам важно получить независимую оценку того, как реально работают процессы, насколько надежны внутренние правила и где возникают финансовые, операционные или управленческие риски.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'собственникам нужна независимая оценка состояния бизнеса',
    'компания быстро растет и процессы перестают быть прозрачными',
    'есть подозрения на ошибки, потери, злоупотребления или неэффективность',
    'необходимо проверить соблюдение внутренних регламентов',
    'руководству важно понять, где контроль работает формально',
    'бизнес готовится к внешнему аудиту, сделке, масштабированию или реструктуризации',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает внутренний аудит';
$auditCheckResultsParagraphs = [
    'Внутренний аудит показывает, насколько процессы компании соответствуют внутренним правилам, целям бизнеса и требованиям управляемости. Проверка помогает увидеть не только отдельные ошибки, но и причины, по которым они возникают.',
    'По итогам работы вы получаете отчет с выявленными рисками, замечаниями, оценкой контрольной среды и рекомендациями по улучшению процессов.',
];

$auditQuestionsTitle = 'Какие задачи решает внутренний аудит';
$auditQuestionsIntro = 'Внутренний аудит помогает руководству и собственникам получить понятную картину по ключевым процессам компании и ответить на практические вопросы:';
$auditQuestionsItems = [
    'насколько надежно устроены внутренние процессы',
    'где возникают финансовые, операционные и управленческие риски',
    'соблюдают ли сотрудники утвержденные регламенты',
    'есть ли дублирование функций или зоны без ответственных',
    'какие процессы требуют формализации или пересмотра',
    'достаточно ли контрольных процедур для предотвращения ошибок',
    'какие нарушения могут привести к убыткам или претензиям',
    'что нужно изменить для повышения прозрачности бизнеса',
];
$auditQuestionsOutro = 'Если говорить простыми словами, внутренний аудит помогает понять, где бизнес управляется надежно, а где процессы держатся только на привычках сотрудников.';

$auditServiceTypesTitle = 'Форматы внутреннего аудита';
$auditServiceTypesIntro = 'Внутренний аудит может быть комплексным или точечным. Формат зависит от задачи, структуры компании, количества подразделений и глубины проверки.';
$auditServiceTypesLead = 'К основным форматам относятся:';
$auditServiceTypesItems = [
    'комплексный внутренний аудит компании',
    'аудит отдельных бизнес-процессов',
    'проверка соблюдения внутренних регламентов',
    'аудит системы внутреннего контроля',
    'оценка операционных и финансовых рисков',
    'аудит документооборота и зон ответственности',
    'проверка эффективности контрольных процедур',
    'консультационное сопровождение по итогам аудита',
];

$auditProcessTitle = 'Как проводится работа по услуге «Внутренний аудит»';
$auditProcessIntro = 'Порядок проведения внутреннего аудита зависит от масштаба задачи, но обычно работа строится по понятной последовательности.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ задачи',
        'text' => 'Вы описываете проблему, цель проверки и структуру бизнеса. Мы определяем, какие процессы и документы нужно изучить в первую очередь.',
    ],
    [
        'number' => '02',
        'title' => 'Определение объема проверки',
        'text' => 'Согласуем проверяемые подразделения, процессы, период, перечень документов и формат итогового результата.',
    ],
    [
        'number' => '03',
        'title' => 'Изучение документов и регламентов',
        'text' => 'Анализируем положения, инструкции, договоры, отчеты, учетные данные, схемы согласования и внутренние правила.',
    ],
    [
        'number' => '04',
        'title' => 'Проверка процессов на практике',
        'text' => 'Сопоставляем документы с фактическим порядком работы, проводим интервью, выявляем разрывы между регламентами и реальными действиями.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование выводов',
        'text' => 'Готовим перечень рисков, замечаний, причин проблем и рекомендаций по улучшению контроля.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет, который можно использовать для управленческих решений, доработки регламентов и усиления контроля.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, количества процессов, масштаба компании, доступности информации и глубины анализа. После первичного изучения задачи можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-диагностика процесса — от 3–5 рабочих дней',
    'аудит отдельного подразделения — от 5–10 рабочих дней',
    'комплексный внутренний аудит — от 10–20 рабочих дней',
    'проект для группы компаний — по согласованию',
];
$auditDeadlinesOutro = 'Если задача срочная, сообщите желаемый срок — мы подскажем, какой формат проверки или диагностики можно провести в первую очередь.';

$auditPricingTitle = 'Стоимость услуги';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема проверки, количества документов, числа процессов, глубины анализа, срочности и формата итогового результата.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 5 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для работы';
$auditDocumentsNeededIntro = 'Полный перечень документов зависит от задачи, но для первичной оценки обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'организационная структура компании',
    'внутренние регламенты и положения',
    'должностные инструкции и матрицы ответственности',
    'договоры, отчеты и управленческие документы',
    'учетные данные и финансовые показатели',
    'документы по согласованию операций',
    'информация о ключевых бизнес-процессах',
    'описание проблемных или спорных ситуаций',
];
$auditDocumentsNeededOutro = 'Если часть документов пока не готова, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный результат, который помогает оценить риски, принять управленческие решения и определить дальнейшие шаги.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'отчет по результатам внутреннего аудита',
    'перечень выявленных рисков и слабых мест',
    'оценку соблюдения внутренних регламентов',
    'рекомендации по усилению контрольных процедур',
    'предложения по оптимизации процессов',
    'понимание зон ответственности и проблемных участков',
    'независимую позицию для собственников и руководства',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, юристу, финансовому директору или инвестору.';

$auditMandatoryPrepTitle = 'Готовите внутренний аудит? Поможем определить фокус проверки';
$auditMandatoryPrepIntro = 'Перед началом внутреннего аудита важно правильно определить цель проверки. Это помогает не распыляться на второстепенные документы и сосредоточиться на процессах, где риски действительно значимы.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие процессы стоит проверить в первую очередь',
    'какие документы и регламенты понадобятся',
    'какие риски требуют отдельного внимания',
    'какой формат отчета будет полезен руководству',
    'как провести проверку без лишней нагрузки на сотрудников',
];
$auditMandatoryPrepOutro = 'Чем точнее сформулирована задача, тем практичнее будут выводы внутреннего аудита.';

$auditFinalCtaTitle = 'Нужен внутренний аудит? Начнем с оценки процессов';
$auditFinalCtaText = 'Отправьте описание компании, список процессов или проблемных участков. Мы подскажем, какой формат внутреннего аудита подойдет, какие документы понадобятся и какой результат вы получите.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/risk-kontrol.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Внутренний аудит»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Внутренний аудит»?',
        'a' => 'В услугу входит первичный анализ задачи, изучение документов и процессов, выявление рисков, подготовка выводов и практических рекомендаций. Состав работ зависит от цели проверки, масштаба бизнеса и доступных материалов.',
    ],
    [
        'q' => 'Можно ли провести работу удаленно?',
        'a' => 'Да, во многих случаях работу можно провести удаленно: документы передаются в электронном виде, интервью и обсуждение замечаний проводятся онлайн, а итоговый отчет направляется в согласованном формате.',
    ],
    [
        'q' => 'Сколько времени занимает проверка?',
        'a' => 'Срок зависит от объема документов, количества процессов, проверяемого периода и глубины анализа. Небольшая диагностика может занять несколько рабочих дней, комплексный проект требует индивидуальной оценки.',
    ],
    [
        'q' => 'Какие документы нужны для начала?',
        'a' => 'Обычно нужны внутренние регламенты, организационная структура, управленческие отчеты, договоры, учетные данные и описание ключевых процессов. Полный перечень уточняется после первичного анализа задачи.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите отчет по результатам внутреннего аудита, перечень выявленных рисков, выводы по проблемным зонам и рекомендации по дальнейшим действиям.',
    ],
    [
        'q' => 'Можно ли проверить только один процесс или участок?',
        'a' => 'Да, можно провести как комплексную проверку, так и анализ отдельного процесса, подразделения, сделки, процедуры или группы документов.',
    ],
    [
        'q' => 'Подходит ли услуга для подготовки к проверке или аудиту?',
        'a' => 'Да, такой формат помогает заранее выявить слабые места, подготовить документы, снизить риск замечаний и выстроить более прозрачную систему контроля.',
    ],
    [
        'q' => 'Чем такая работа полезна руководителю?',
        'a' => 'Руководитель получает независимый взгляд на процессы, контроль и управленческие риски компании, понимает реальные риски и может принимать управленческие решения на основе структурированных выводов, а не разрозненных мнений.',
    ],
];


// ==============================
// Построение системы внутреннего контроля (СВК)
// ==============================


$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Комплаенс, риск-контроль, внутренний аудит', 'href' => '/komplaens'],
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

<body class="has-site-header has-breadcrumbs page-komplaens-vnutrenniy-audit">
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