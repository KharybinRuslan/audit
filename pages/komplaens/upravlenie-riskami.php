<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Управление рисками (risk management)';
$pageDescription = 'Управление рисками risk management: выявление, оценка, карта рисков, контрольные меры, мониторинг и рекомендации для бизнеса.';

$serviceCoverHeroTitle = 'Управление рисками (risk management)';
$serviceCoverHeroLead = 'Поможем выстроить систему управления рисками: выявить ключевые угрозы для бизнеса, оценить вероятность и последствия, подготовить карту рисков, определить контрольные меры и порядок регулярного мониторинга. Такой подход помогает принимать решения заранее, а не реагировать только после проблем.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 7 рабочих дней',
    'Карта рисков, контрольные меры и мониторинг',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'На первом этапе определим профиль рисков компании и предложим формат работы: диагностика, карта рисков, внедрение процедур или сопровождение.';
$serviceCoverHeroBgUrl = '/img/audit/risk-kontrol.webp';

$auditOrderReasonsTitle = 'Когда нужно управление рисками';
$auditOrderReasonsIntro = [
    'Управление рисками нужно, когда бизнесу важно понимать, какие события могут повлиять на деньги, процессы, репутацию, обязательства и устойчивость компании.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'компания растет и риски становятся сложнее',
    'нужно подготовиться к сделке, кредитованию, инвесторам или аудиту',
    'руководство хочет видеть риски в системном виде',
    'в бизнесе регулярно возникают непредвиденные потери или сбои',
    'нет единого порядка оценки и контроля рисков',
    'необходимо связать риски с ответственными лицами и контрольными действиями',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает risk management';
$auditCheckResultsParagraphs = [
    'Управление рисками показывает, какие угрозы наиболее существенны для компании, где вероятность проблем выше, какие последствия могут быть критичными и какие меры контроля уже существуют.',
    'По итогам работы компания получает карту рисков, приоритеты, рекомендации и понятный порядок мониторинга.',
];

$auditQuestionsTitle = 'Какие задачи решает управление рисками';
$auditQuestionsIntro = 'Risk management помогает руководству перейти от разрозненного реагирования к системному контролю рисков:';
$auditQuestionsItems = [
    'выявить ключевые финансовые, операционные и правовые риски',
    'оценить вероятность и последствия рисковых событий',
    'сформировать карту рисков',
    'определить приоритеты и ответственных лиц',
    'разработать меры снижения рисков',
    'настроить регулярный мониторинг',
    'связать риски с внутренним контролем',
    'подготовить управленческую отчетность по рискам',
];
$auditQuestionsOutro = 'Управление рисками помогает видеть не только текущие проблемы, но и события, которые могут повлиять на бизнес в будущем.';

$auditServiceTypesTitle = 'Форматы работы по управлению рисками';
$auditServiceTypesIntro = 'Формат проекта зависит от зрелости компании и целей руководства. Можно начать с диагностики или сразу выстраивать полноценную систему risk management.';
$auditServiceTypesLead = 'В работу могут входить:';
$auditServiceTypesItems = [
    'экспресс-диагностика рисков',
    'формирование карты рисков',
    'оценка вероятности и последствий',
    'разработка мер контроля',
    'назначение владельцев рисков',
    'подготовка риск-регистров',
    'настройка отчетности по рискам',
    'сопровождение внедрения risk management',
];

$auditProcessTitle = 'Как проводится работа по услуге «Управление рисками (risk management)»';
$auditProcessIntro = 'Работа по управлению рисками проводится поэтапно: от выявления рисков до внедрения мониторинга.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Анализ бизнеса и процессов',
        'text' => 'Изучаем структуру компании, ключевые процессы, цели руководства и существующие проблемы.',
    ],
    [
        'number' => '02',
        'title' => 'Идентификация рисков',
        'text' => 'Определяем финансовые, операционные, налоговые, правовые, кадровые, репутационные и иные риски.',
    ],
    [
        'number' => '03',
        'title' => 'Оценка рисков',
        'text' => 'Оцениваем вероятность, последствия, уровень влияния и текущие меры контроля.',
    ],
    [
        'number' => '04',
        'title' => 'Формирование карты рисков',
        'text' => 'Группируем риски по приоритету, владельцам, процессам и уровню значимости.',
    ],
    [
        'number' => '05',
        'title' => 'Разработка мер управления',
        'text' => 'Предлагаем контрольные действия, процедуры мониторинга и порядок отчетности.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете документы и рекомендации, которые можно использовать для регулярного управления рисками.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, количества процессов, масштаба компании, доступности информации и глубины анализа. После первичного изучения задачи можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-оценка рисков — от 3–5 рабочих дней',
    'карта рисков по одному направлению — от 5–10 рабочих дней',
    'комплексная карта рисков компании — от 10–20 рабочих дней',
    'внедрение risk management — по согласованию',
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
    'организационная структура',
    'описание бизнес-процессов',
    'управленческая и финансовая отчетность',
    'внутренние регламенты',
    'информация о ключевых договорах и обязательствах',
    'данные о контрагентах и проектах',
    'сведения о прошлых инцидентах и потерях',
    'стратегические цели и планы компании',
];
$auditDocumentsNeededOutro = 'Если часть документов пока не готова, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный результат, который помогает оценить риски, принять управленческие решения и определить дальнейшие шаги.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'карту рисков компании или направления',
    'риск-регистр',
    'оценку вероятности и последствий',
    'перечень приоритетных рисков',
    'меры по снижению и контролю рисков',
    'рекомендации по мониторингу',
    'основу для управленческой отчетности по рискам',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, юристу, финансовому директору или инвестору.';

$auditMandatoryPrepTitle = 'Хотите управлять рисками системно?';
$auditMandatoryPrepIntro = 'Чтобы risk management был полезным, важно не просто составить список рисков, а связать их с процессами, ответственными лицами, контрольными процедурами и регулярной отчетностью.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие риски наиболее существенны для бизнеса',
    'какие процессы требуют контроля в первую очередь',
    'кто должен быть владельцем риска',
    'какие меры уже работают, а какие нужно внедрить',
    'как сделать карту рисков удобной для руководства',
];
$auditMandatoryPrepOutro = 'Система управления рисками должна помогать принимать решения, а не быть формальной таблицей.';

$auditFinalCtaTitle = 'Нужно управление рисками? Начнем с диагностики';
$auditFinalCtaText = 'Опишите бизнес, ключевые процессы и зоны неопределенности. Мы подскажем, какой формат оценки рисков подойдет и как выстроить дальнейший контроль.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/risk-kontrol.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Управление рисками (risk management)»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Управление рисками (risk management)»?',
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
        'a' => 'Обычно нужны описание процессов, управленческая отчетность, регламенты, данные о договорах, проектах, контрагентах и прошлых инцидентах. Полный перечень уточняется после первичного анализа задачи.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите карту рисков, риск-регистр и рекомендации по снижению рисков, перечень выявленных рисков, выводы по проблемным зонам и рекомендации по дальнейшим действиям.',
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
        'a' => 'Руководитель получает независимый взгляд на риски бизнеса, их последствия и меры контроля, понимает реальные риски и может принимать управленческие решения на основе структурированных выводов, а не разрозненных мнений.',
    ],
];


// ==============================
// Антикоррупционный комплаенс
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

<body class="has-site-header has-breadcrumbs page-komplaens-upravlenie-riskami">
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