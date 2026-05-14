<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Построение системы внутреннего контроля (СВК)';
$pageDescription = 'Построение системы внутреннего контроля СВК: регламенты, контрольные процедуры, матрица рисков, зоны ответственности и мониторинг процессов.';

$serviceCoverHeroTitle = 'Построение системы внутреннего контроля (СВК)';
$serviceCoverHeroLead = 'Поможем построить или доработать систему внутреннего контроля: описать ключевые процессы, определить риски, внедрить контрольные процедуры, распределить ответственность и настроить регулярный мониторинг. СВК помогает снизить ошибки, злоупотребления, финансовые потери и зависимость бизнеса от отдельных сотрудников.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 10 рабочих дней',
    'Регламенты, контрольные процедуры и матрица рисков',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'На старте оценим текущий уровень контроля и предложим реалистичный план построения СВК без избыточной бюрократии.';
$serviceCoverHeroBgUrl = '/img/audit/risk-kontrol.webp';

$auditOrderReasonsTitle = 'Когда нужно построение системы внутреннего контроля';
$auditOrderReasonsIntro = [
    'Система внутреннего контроля нужна, когда бизнесу важно управлять рисками не вручную и не постфактум, а через понятные процедуры, правила согласования, контрольные точки и распределение ответственности.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'компания растет и ручной контроль перестает работать',
    'возникают ошибки в документах, платежах, договорах или учете',
    'руководству нужно снизить риск злоупотреблений',
    'процессы зависят от отдельных сотрудников и не описаны формально',
    'нужна подготовка к аудиту, проверке, сделке или инвесторам',
    'собственники хотят повысить прозрачность управления бизнесом',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что дает система внутреннего контроля';
$auditCheckResultsParagraphs = [
    'СВК помогает заранее выявлять и предотвращать ошибки, финансовые потери, нарушения регламентов и конфликт интересов. Система делает процессы более прозрачными и управляемыми.',
    'По итогам проекта компания получает не просто документы, а рабочую модель контроля: кто, что, когда проверяет, какие риски закрываются и как фиксируются результаты.',
];

$auditQuestionsTitle = 'Какие задачи решает построение СВК';
$auditQuestionsIntro = 'Построение системы внутреннего контроля помогает превратить контроль из ручного наблюдения руководителя в понятную управленческую систему:';
$auditQuestionsItems = [
    'определить ключевые риски по процессам',
    'описать контрольные процедуры и точки проверки',
    'распределить ответственность между сотрудниками',
    'снизить вероятность ошибок и злоупотреблений',
    'настроить контроль договоров, платежей, закупок и учета',
    'сформировать матрицу рисков и контролей',
    'подготовить процессы к аудиту или проверке',
    'создать основу для регулярного мониторинга',
];
$auditQuestionsOutro = 'Главная цель СВК — сделать так, чтобы критичные операции проходили через понятные правила, а не зависели только от человеческого фактора.';

$auditServiceTypesTitle = 'Что входит в построение СВК';
$auditServiceTypesIntro = 'Состав работ зависит от текущего состояния компании и целей проекта. Можно построить систему с нуля или доработать уже существующие процедуры.';
$auditServiceTypesLead = 'В работу могут входить:';
$auditServiceTypesItems = [
    'диагностика действующих контрольных процедур',
    'описание ключевых бизнес-процессов',
    'формирование карты рисков',
    'разработка матрицы рисков и контролей',
    'подготовка регламентов и чек-листов',
    'настройка процедур согласования',
    'распределение ролей и ответственности',
    'сопровождение внедрения и корректировка процедур',
];

$auditProcessTitle = 'Как проводится работа по услуге «Построение системы внутреннего контроля (СВК)»';
$auditProcessIntro = 'Построение СВК проходит поэтапно: от диагностики текущих процессов до внедрения контрольных процедур.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Диагностика текущего контроля',
        'text' => 'Изучаем процессы, документы, полномочия, порядок согласования и существующие контрольные процедуры.',
    ],
    [
        'number' => '02',
        'title' => 'Выявление рисков',
        'text' => 'Определяем, где могут возникать ошибки, потери, злоупотребления, нарушения сроков или конфликт интересов.',
    ],
    [
        'number' => '03',
        'title' => 'Проектирование контрольной модели',
        'text' => 'Формируем контрольные точки, матрицу рисков и контролей, роли ответственных и порядок фиксации результатов.',
    ],
    [
        'number' => '04',
        'title' => 'Разработка документов',
        'text' => 'Готовим регламенты, чек-листы, инструкции, формы отчетности и правила согласования.',
    ],
    [
        'number' => '05',
        'title' => 'Сопровождение внедрения',
        'text' => 'Помогаем внедрить процедуры в работу, объяснить их сотрудникам и убрать избыточные действия.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Компания получает рабочую систему контроля, которую можно применять, проверять и развивать дальше.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, количества процессов, масштаба компании, доступности информации и глубины анализа. После первичного изучения задачи можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'диагностика СВК — от 5 рабочих дней',
    'разработка контрольных процедур по одному процессу — от 7–10 рабочих дней',
    'построение СВК по нескольким процессам — от 15–30 рабочих дней',
    'комплексный проект для группы компаний — по согласованию',
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
    'описание ключевых процессов',
    'действующие регламенты и инструкции',
    'должностные инструкции',
    'договоры и документы по согласованию операций',
    'данные по закупкам, платежам, продажам и учету',
    'сведения о полномочиях сотрудников',
    'информация о ранее выявленных ошибках и рисках',
];
$auditDocumentsNeededOutro = 'Если часть документов пока не готова, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный результат, который помогает оценить риски, принять управленческие решения и определить дальнейшие шаги.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'модель системы внутреннего контроля',
    'карту рисков и контрольных процедур',
    'матрицу ответственности',
    'регламенты, чек-листы и инструкции',
    'предложения по усилению контроля',
    'понятный порядок мониторинга процессов',
    'основу для внутреннего аудита и управления рисками',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, юристу, финансовому директору или инвестору.';

$auditMandatoryPrepTitle = 'Хотите построить СВК без лишней бюрократии?';
$auditMandatoryPrepIntro = 'Эффективная СВК должна помогать бизнесу, а не перегружать сотрудников формальными документами. Поэтому важно строить контроль вокруг реальных рисков и критичных операций.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие процессы требуют контроля в первую очередь',
    'какие процедуры уже работают, а какие существуют только формально',
    'какие контрольные точки действительно снижают риски',
    'как распределить ответственность между сотрудниками',
    'как внедрить СВК без остановки текущей работы',
];
$auditMandatoryPrepOutro = 'Хорошая система внутреннего контроля должна быть понятной, проверяемой и применимой в ежедневной работе.';

$auditFinalCtaTitle = 'Нужно построить систему внутреннего контроля?';
$auditFinalCtaText = 'Опишите структуру компании, ключевые процессы и текущие проблемы с контролем. Мы подскажем, с чего начать построение СВК и какой результат можно получить на первом этапе.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/risk-kontrol.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Построение системы внутреннего контроля (СВК)»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Построение системы внутреннего контроля (СВК)»?',
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
        'a' => 'Обычно нужны организационная структура, регламенты, должностные инструкции, описание процессов, данные по операциям и сведения о полномочиях сотрудников. Полный перечень уточняется после первичного анализа задачи.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите модель СВК, карту рисков и рекомендации по внедрению, перечень выявленных рисков, выводы по проблемным зонам и рекомендации по дальнейшим действиям.',
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
        'a' => 'Руководитель получает независимый взгляд на контрольные процедуры, риски и зоны ответственности, понимает реальные риски и может принимать управленческие решения на основе структурированных выводов, а не разрозненных мнений.',
    ],
];


// ==============================
// Комплаенс-система
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

<body class="has-site-header has-breadcrumbs page-komplaens-postroenie-sistemy-vnutrennego-kontrolya-svk">
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