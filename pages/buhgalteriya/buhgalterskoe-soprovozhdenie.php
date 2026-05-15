<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Бухгалтерское сопровождение';

$pageDescription = 'Бухгалтерское сопровождение ООО "Аудит Топ Эксперт": ведение учета, отчетность, налоги, консультации бухгалтера и контроль бухгалтерских процессов.';

$serviceCoverHeroTitle = 'Бухгалтерское сопровождение бизнеса';

$serviceCoverHeroLead = 'Возьмем на себя бухгалтерское сопровождение компании, поможем вести учет, готовить отчетность, контролировать налоги, первичные документы и расчеты с контрагентами. Поддержим собственника, руководителя и бухгалтерию в текущих вопросах, чтобы учет был понятным, своевременным и безопасным для бизнеса.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок запуска — от 3 рабочих дней',
    'Ведение учета, отчетность и консультации',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно оценим вашу систему учета, объем операций и задачи бизнеса, подскажем формат сопровождения, список документов и порядок начала работы.';

$serviceCoverHeroBgUrl = '/img/audit/buxgalteria.webp';

$auditOrderReasonsTitle = 'Когда нужно бухгалтерское сопровождение';

$auditOrderReasonsIntro = [
    'Бухгалтерское сопровождение нужно, когда компании важно обеспечить стабильное ведение учета, своевременную сдачу отчетности, контроль налогов и понятную финансовую дисциплину без постоянного поиска разовых решений.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'компания запускается и нужно сразу выстроить корректный учет',
    'штатная бухгалтерия перегружена текущими задачами',
    'руководителю нужен внешний контроль учета и отчетности',
    'есть ошибки, просрочки или неясности в бухгалтерских данных',
    'нужно снизить зависимость бизнеса от одного сотрудника',
    'требуется регулярная консультационная поддержка по бухгалтерским вопросам',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает бухгалтерское сопровождение';

$auditCheckResultsParagraphs = [
    'Бухгалтерское сопровождение показывает, насколько учет компании организован системно: правильно ли оформляются документы, вовремя ли отражаются операции, контролируются ли налоги, отчетность и обязательства.',
    'По итогам работы бизнес получает не только текущие бухгалтерские действия, но и понятный порядок взаимодействия: кто готовит документы, кто отвечает за сроки, какие риски нужно отслеживать и какие участки требуют внимания.',
];

$auditQuestionsTitle = 'Какие задачи решает бухгалтерское сопровождение';

$auditQuestionsIntro = 'Перечень задач зависит от размера компании, системы налогообложения и объема операций, но чаще всего бухгалтерское сопровождение помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'как правильно организовать учет с учетом специфики бизнеса',
    'какие документы должны оформляться по каждой операции',
    'все ли налоги и отчеты контролируются в срок',
    'есть ли ошибки в первичных документах, регистрах и расчетах',
    'как снизить риск штрафов, доначислений и претензий',
    'как наладить взаимодействие между руководителем, бухгалтерией и менеджерами',
    'какие участки учета требуют регулярного контроля',
    'какие процессы можно упростить или автоматизировать',
];

$auditQuestionsOutro = 'Если говорить простыми словами, бухгалтерское сопровождение помогает держать учет под контролем и не допускать ситуаций, когда ошибки обнаруживаются слишком поздно.';

$auditServiceTypesTitle = 'Форматы бухгалтерского сопровождения';

$auditServiceTypesIntro = 'Формат сопровождения зависит от того, нужна ли компании полная передача учета на аутсорсинг, поддержка штатного бухгалтера или контроль отдельных участков.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'полное бухгалтерское сопровождение компании',
    'ведение отдельных участков бухгалтерского учета',
    'подготовка и сдача отчетности',
    'контроль первичных документов',
    'консультации бухгалтера для руководителя и сотрудников',
    'сопровождение главного бухгалтера',
    'проверка корректности текущего учета',
    'постановка бухгалтерских процессов и регламентов',
];

$auditProcessTitle = 'Как организуется бухгалтерское сопровождение';

$auditProcessIntro = 'Работа начинается с оценки текущей ситуации и выстраивается так, чтобы компания понимала сроки, ответственность и порядок передачи документов.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичная оценка задачи',
        'text' => 'Вы направляете сведения о компании, системе налогообложения, объеме операций и текущем состоянии учета. Мы определяем формат сопровождения и ключевые зоны внимания.',
    ],
    [
        'number' => '02',
        'title' => 'Анализ текущего учета',
        'text' => 'Изучаются отчетность, учетная база, первичные документы, договоры, налоги, задолженности и порядок внутреннего документооборота.',
    ],
    [
        'number' => '03',
        'title' => 'Согласование формата работы',
        'text' => 'Определяются участки учета, порядок передачи документов, сроки подготовки отчетности, ответственные лица и удобный канал коммуникации.',
    ],
    [
        'number' => '04',
        'title' => 'Ведение текущих операций',
        'text' => 'Проводится отражение операций, контроль документов, расчеты, подготовка отчетности, консультации и регулярное сопровождение бухгалтерских вопросов.',
    ],
    [
        'number' => '05',
        'title' => 'Контроль сроков и рисков',
        'text' => 'Отслеживаются отчетные даты, налоговые обязательства, ошибки в документах, задолженности, спорные операции и вопросы, требующие решения.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете готовую отчетность, рекомендации, пояснения по учетным вопросам и понятную картину по текущему состоянию бухгалтерии.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки запуска бухгалтерского сопровождения';

$auditDeadlinesIntro = 'Срок зависит от состояния учета, объема документов, количества операций и того, требуется ли восстановление прошлых периодов или только сопровождение текущей работы.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'первичная консультация — в день обращения или на следующий рабочий день',
    'диагностика учета — от 1–3 рабочих дней',
    'запуск регулярного сопровождения — от 3–5 рабочих дней',
    'передача сложного учета на сопровождение — по согласованию',
];

$auditDeadlinesOutro = 'Если нужно срочно подготовить отчетность или закрыть проблемный период, сообщите дату и объем документов — мы предложим реалистичный порядок действий.';

$auditPricingTitle = 'Стоимость бухгалтерского сопровождения';

$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от системы налогообложения, количества операций, сотрудников, документов, участков учета и объема консультационной поддержки.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 3 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы нужны для бухгалтерского сопровождения';

$auditDocumentsNeededIntro = 'Точный перечень зависит от задачи и текущего состояния учета. Для первичной оценки обычно подходят следующие материалы:';

$auditDocumentsNeededItems = [
    'учредительные данные и сведения о компании',
    'информация о системе налогообложения',
    'доступная бухгалтерская и налоговая отчетность',
    'оборотно-сальдовые ведомости и учетные регистры',
    'договоры с контрагентами',
    'акты, счета, накладные, УПД и иные первичные документы',
    'банковские выписки и платежные документы',
    'данные по сотрудникам и заработной плате',
    'учетная политика и внутренние регламенты, если есть',
];

$auditDocumentsNeededOutro = 'Если часть документов пока не готова, сопровождение можно начать с диагностики. После первичного анализа мы подскажем, какие материалы нужно собрать в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам сопровождения';

$auditResultsSummaryIntro = 'Бухгалтерское сопровождение должно давать бизнесу не только закрытые отчеты, но и уверенность, что учет находится под контролем.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'ведение бухгалтерского и налогового учета',
    'подготовку и контроль отчетности',
    'проверку первичных документов и спорных операций',
    'консультации по текущим бухгалтерским вопросам',
    'контроль сроков, налогов и обязательств',
    'рекомендации по исправлению ошибок и снижению рисков',
    'понятную систему взаимодействия с бухгалтерией',
];

$auditResultsSummaryOutro = 'Такой формат помогает руководителю видеть состояние учета, не погружаясь в каждую бухгалтерскую операцию самостоятельно.';

$auditPrepTitle = 'Нужно передать бухгалтерию на сопровождение? Начнем с диагностики';

$auditPrepIntro = 'Перед началом сопровождения важно понять, в каком состоянии находится учет и какие участки требуют срочного внимания. Это помогает избежать переноса старых ошибок в новую систему работы.';

$auditPrepLead = 'На первичном этапе мы поможем определить:';

$auditPrepItems = [
    'какой формат сопровождения подходит компании',
    'какие документы нужны для старта',
    'есть ли критичные ошибки или просрочки',
    'какие участки учета требуют контроля',
    'как организовать передачу документов без лишней нагрузки',
];

$auditPrepOutro = 'Чем понятнее стартовая ситуация, тем быстрее можно выстроить регулярную работу и снизить бухгалтерские риски.';

$auditFinalCtaTitle = 'Нужно бухгалтерское сопровождение? Начнем с оценки вашей ситуации';

$auditFinalCtaText = 'Отправьте краткое описание компании, систему налогообложения, объем операций и текущие вопросы по учету. Мы подскажем формат сопровождения, перечень документов, сроки запуска и ориентировочную стоимость.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/buxgalteria.webp';

$auditFaqTitle = 'Частые вопросы: бухгалтерское сопровождение';

$auditFaqItems = [
    [
        'q' => 'Что входит в бухгалтерское сопровождение?',
        'a' => 'В сопровождение может входить ведение учета, подготовка отчетности, контроль первичных документов, расчет налогов, консультации бухгалтера, проверка спорных операций и сопровождение текущих бухгалтерских процессов.',
    ],
    [
        'q' => 'Можно ли передать на сопровождение только часть учета?',
        'a' => 'Да, можно передать отдельные участки: первичные документы, зарплату, банк, расчеты с контрагентами, отчетность или контроль работы штатного бухгалтера.',
    ],
    [
        'q' => 'Подходит ли услуга для малого бизнеса?',
        'a' => 'Да, формат можно адаптировать под малый бизнес, где нет необходимости держать полноценный бухгалтерский отдел, но нужен регулярный контроль учета и отчетности.',
    ],
    [
        'q' => 'Можно ли работать удаленно?',
        'a' => 'Да, большинство задач по бухгалтерскому сопровождению и аутсорсингу можно выполнять удаленно: документы передаются в электронном виде, вопросы решаются по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Можно ли начать, если учет ведется с ошибками?',
        'a' => 'Да, в таком случае работа начинается с диагностики. После анализа становится понятно, что нужно исправить сразу, а что можно доработать постепенно.',
    ],
    [
        'q' => 'Как рассчитывается стоимость сопровождения?',
        'a' => 'Стоимость зависит от объема операций, системы налогообложения, количества сотрудников, документооборота и состава задач, которые передаются на сопровождение.',
    ],
];

// ===== Восстановление бухгалтерского учета =====

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Бухгалтерский консалтинг и аутсорсинг', 'href' => '/buhgalteriya'],
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

<body class="has-site-header has-breadcrumbs page-buhgalteriya-buhgalterskoe-soprovozhdenie">
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