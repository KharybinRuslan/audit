<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'AML / противодействие отмыванию';
$pageDescription = 'AML и противодействие отмыванию: оценка рисков клиентов и операций, процедуры проверки, внутренний контроль и подготовка документов.';

$serviceCoverHeroTitle = 'AML / противодействие отмыванию';
$serviceCoverHeroLead = 'Поможем выстроить процедуры AML-контроля и противодействия отмыванию: оценить риски клиентов, контрагентов и операций, разработать внутренние правила, чек-листы проверки, порядок мониторинга и фиксации подозрительных признаков.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 7 рабочих дней',
    'AML-процедуры, риск-оценка и внутренний контроль',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Сначала оценим сферу деятельности, типовые операции, клиентов и контрагентов, чтобы определить, какие AML-процедуры нужны именно вашей компании.';
$serviceCoverHeroBgUrl = '/img/audit/risk-kontrol.webp';

$auditOrderReasonsTitle = 'Когда нужны AML-процедуры';
$auditOrderReasonsIntro = [
    'AML-процедуры нужны, когда компания должна контролировать риски, связанные с клиентами, контрагентами, платежами, источниками средств и подозрительными операциями.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'нужно разработать или обновить внутренние правила AML-контроля',
    'компания работает с большим количеством клиентов или платежей',
    'банк, партнер или инвестор запрашивает подтверждение процедур проверки',
    'возникают вопросы по операциям, контрагентам или источникам средств',
    'необходимо снизить риск блокировок, отказов или претензий',
    'требуется систематизировать проверку клиентов и сделок',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает AML-диагностика';
$auditCheckResultsParagraphs = [
    'AML-диагностика показывает, насколько компания понимает риски клиентов и операций, есть ли процедуры проверки, кто отвечает за контроль и как фиксируются подозрительные признаки.',
    'По итогам работы формируются документы и рекомендации, которые помогают сделать процесс проверки понятным, регулярным и подтверждаемым.',
];

$auditQuestionsTitle = 'Какие задачи решает AML / противодействие отмыванию';
$auditQuestionsIntro = 'AML-процедуры помогают компании выстроить контролируемый порядок работы с клиентами, контрагентами и операциями:';
$auditQuestionsItems = [
    'оценить риски клиентов и контрагентов',
    'определить признаки подозрительных операций',
    'разработать внутренние правила проверки',
    'подготовить чек-листы и анкеты',
    'настроить порядок мониторинга операций',
    'распределить ответственность за AML-контроль',
    'снизить риск претензий со стороны банков и партнеров',
    'сформировать доказуемую систему внутреннего контроля',
];
$auditQuestionsOutro = 'AML — это не только проверка документов, но и понятная логика оценки операций, клиентов и источников риска.';

$auditServiceTypesTitle = 'Что входит в AML-сопровождение';
$auditServiceTypesIntro = 'Состав работ зависит от требований к компании, ее операций, отрасли и уровня рисков.';
$auditServiceTypesLead = 'В работу могут входить:';
$auditServiceTypesItems = [
    'диагностика AML-процессов',
    'оценка рисков клиентов и операций',
    'разработка внутренних правил',
    'подготовка чек-листов и анкет проверки',
    'описание признаков подозрительных операций',
    'порядок мониторинга и фиксации результатов',
    'распределение ролей и ответственности',
    'консультационное сопровождение по спорным операциям',
];

$auditProcessTitle = 'Как проводится работа по услуге «AML / противодействие отмыванию»';
$auditProcessIntro = 'Работа по AML строится от оценки текущих процессов до внедрения документов и процедур контроля.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Анализ деятельности и операций',
        'text' => 'Изучаем сферу бизнеса, клиентов, контрагентов, платежи, документы и типовые операции.',
    ],
    [
        'number' => '02',
        'title' => 'Оценка AML-рисков',
        'text' => 'Определяем рисковые категории клиентов, операций, стран, контрагентов и признаков нестандартного поведения.',
    ],
    [
        'number' => '03',
        'title' => 'Проектирование процедур',
        'text' => 'Формируем порядок проверки, мониторинга, фиксации результатов и реагирования на подозрительные признаки.',
    ],
    [
        'number' => '04',
        'title' => 'Разработка документов',
        'text' => 'Готовим внутренние правила, чек-листы, анкеты, инструкции и формы учета проверок.',
    ],
    [
        'number' => '05',
        'title' => 'Настройка применения',
        'text' => 'Помогаем адаптировать процедуры под реальную работу сотрудников и текущий документооборот.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете комплект AML-документов и рекомендации по поддержанию системы в актуальном состоянии.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, количества процессов, масштаба компании, доступности информации и глубины анализа. После первичного изучения задачи можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'AML-диагностика — от 3–5 рабочих дней',
    'разработка отдельных чек-листов — от 5 рабочих дней',
    'комплект внутренних AML-процедур — от 10–20 рабочих дней',
    'сопровождение внедрения — по согласованию',
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
    'описание деятельности компании',
    'сведения о клиентах и контрагентах',
    'типовые договоры и документы по операциям',
    'данные о платежах и расчетах',
    'действующие внутренние правила и инструкции',
    'требования банков или партнеров',
    'информация о спорных или нестандартных операциях',
    'перечень ответственных сотрудников',
];
$auditDocumentsNeededOutro = 'Если часть документов пока не готова, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный результат, который помогает оценить риски, принять управленческие решения и определить дальнейшие шаги.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'AML-диагностику или отчет по процессам',
    'внутренние правила и процедуры проверки',
    'чек-листы и анкеты клиентов или контрагентов',
    'критерии подозрительных операций',
    'порядок мониторинга и фиксации результатов',
    'рекомендации по снижению AML-рисков',
    'основу для регулярного внутреннего контроля',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, юристу, финансовому директору или инвестору.';

$auditMandatoryPrepTitle = 'Нужно привести AML-процедуры в порядок?';
$auditMandatoryPrepIntro = 'AML-контроль должен быть связан с реальными операциями компании. Важно не просто иметь документы, а понимать, какие клиенты и операции требуют повышенного внимания.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие AML-риски есть в деятельности компании',
    'какие процедуры проверки нужны',
    'какие признаки операций стоит фиксировать',
    'кто должен отвечать за контроль',
    'как оформить документы так, чтобы их можно было применять на практике',
];
$auditMandatoryPrepOutro = 'Правильно настроенный AML-контроль помогает снизить риски и сделать работу с клиентами и контрагентами более прозрачной.';

$auditFinalCtaTitle = 'Нужны AML-процедуры или диагностика?';
$auditFinalCtaText = 'Опишите деятельность компании, типовые операции и требования банков или партнеров. Мы подскажем, какие документы и процедуры нужны в вашей ситуации.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/risk-kontrol.webp';

$auditFaqTitle = 'Частые вопросы по услуге «AML / противодействие отмыванию»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «AML / противодействие отмыванию»?',
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
        'a' => 'Обычно нужны описание деятельности, сведения о клиентах и контрагентах, договоры, данные о платежах, внутренние инструкции и требования банков или партнеров. Полный перечень уточняется после первичного анализа задачи.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите AML-документы, чек-листы проверки и рекомендации по контролю, перечень выявленных рисков, выводы по проблемным зонам и рекомендации по дальнейшим действиям.',
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
        'a' => 'Руководитель получает независимый взгляд на AML-риски клиентов, контрагентов и операций, понимает реальные риски и может принимать управленческие решения на основе структурированных выводов, а не разрозненных мнений.',
    ],
];


// ==============================
// Оценка рисков бизнеса
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

<body class="has-site-header has-breadcrumbs page-komplaens-aml-protivodeystvie-otmyvaniyu">
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