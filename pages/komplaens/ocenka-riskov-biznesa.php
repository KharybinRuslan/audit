<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Оценка рисков бизнеса';
$pageDescription = 'Оценка рисков бизнеса: финансовые, налоговые, правовые, операционные, кадровые и репутационные риски с рекомендациями по снижению.';

$serviceCoverHeroTitle = 'Оценка рисков бизнеса';
$serviceCoverHeroLead = 'Проведем оценку рисков бизнеса: финансовых, налоговых, правовых, операционных, кадровых, контрагентских и репутационных. Поможем увидеть слабые места, приоритизировать угрозы и подготовить практические рекомендации по снижению рисков.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Финансовые, правовые, операционные и репутационные риски',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим вашу задачу, сферу деятельности и доступные документы, чтобы определить глубину анализа и формат итогового отчета.';
$serviceCoverHeroBgUrl = '/img/audit/risk-kontrol.webp';

$auditOrderReasonsTitle = 'Когда нужна оценка рисков бизнеса';
$auditOrderReasonsIntro = [
    'Оценка рисков нужна, когда компании важно понять, какие угрозы могут повлиять на деньги, сделки, налоги, персонал, контрагентов, репутацию и устойчивость бизнеса.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'бизнес готовится к сделке, продаже, покупке или привлечению инвестиций',
    'руководству нужна независимая оценка слабых мест компании',
    'возникают регулярные потери, споры или непредвиденные проблемы',
    'компания планирует масштабирование или выход в новый регион',
    'нужно проверить риски перед крупным проектом или контрактом',
    'собственники хотят понять, какие угрозы требуют первоочередного внимания',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает оценка рисков бизнеса';
$auditCheckResultsParagraphs = [
    'Оценка рисков показывает, какие угрозы для компании наиболее вероятны, какие последствия они могут иметь и какие меры уже существуют для их снижения.',
    'По итогам вы получаете структурированную картину рисков и рекомендации, которые помогают принимать управленческие решения и планировать дальнейшие действия.',
];

$auditQuestionsTitle = 'Какие задачи решает оценка рисков бизнеса';
$auditQuestionsIntro = 'Оценка рисков помогает увидеть компанию не только через текущие показатели, но и через возможные проблемы, которые могут повлиять на устойчивость бизнеса:';
$auditQuestionsItems = [
    'выявить финансовые, налоговые и правовые риски',
    'оценить риски по контрагентам и сделкам',
    'определить слабые места в операционных процессах',
    'увидеть кадровые и управленческие риски',
    'оценить репутационные угрозы',
    'приоритизировать риски по значимости',
    'подготовить меры снижения рисков',
    'сформировать основу для внутреннего контроля',
];
$auditQuestionsOutro = 'Такая оценка помогает руководителю понять, какие проблемы нужно решать сейчас, а какие можно контролировать в плановом порядке.';

$auditServiceTypesTitle = 'Какие риски можно оценить';
$auditServiceTypesIntro = 'Оценка может быть комплексной или сфокусированной на отдельных направлениях. Формат зависит от целей собственника, руководства или инвестора.';
$auditServiceTypesLead = 'Чаще всего анализируются:';
$auditServiceTypesItems = [
    'финансовые риски',
    'налоговые риски',
    'правовые и договорные риски',
    'операционные риски',
    'кадровые риски',
    'риски контрагентов и сделок',
    'репутационные риски',
    'риски внутреннего контроля и управления',
];

$auditProcessTitle = 'Как проводится работа по услуге «Оценка рисков бизнеса»';
$auditProcessIntro = 'Оценка рисков бизнеса проводится поэтапно: от сбора информации до подготовки карты рисков и рекомендаций.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ ситуации',
        'text' => 'Вы описываете бизнес, цель оценки и проблемные зоны. Мы определяем направления анализа и перечень документов.',
    ],
    [
        'number' => '02',
        'title' => 'Сбор и изучение материалов',
        'text' => 'Анализируем отчетность, договоры, процессы, регламенты, данные по контрагентам и управленческую информацию.',
    ],
    [
        'number' => '03',
        'title' => 'Выявление рисков',
        'text' => 'Определяем финансовые, налоговые, правовые, операционные, кадровые и репутационные риски.',
    ],
    [
        'number' => '04',
        'title' => 'Оценка значимости',
        'text' => 'Оцениваем вероятность, последствия и приоритетность каждого риска.',
    ],
    [
        'number' => '05',
        'title' => 'Подготовка рекомендаций',
        'text' => 'Формируем меры снижения рисков, контрольные действия и предложения по дальнейшей работе.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет, карту рисков и понятный список дальнейших шагов.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, количества процессов, масштаба компании, доступности информации и глубины анализа. После первичного изучения задачи можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-оценка рисков — от 3–5 рабочих дней',
    'оценка отдельного направления — от 5–10 рабочих дней',
    'комплексная оценка рисков компании — от 10–20 рабочих дней',
    'оценка группы компаний или крупного проекта — по согласованию',
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
    'бухгалтерская и управленческая отчетность',
    'договоры с ключевыми контрагентами',
    'налоговые данные и расчеты',
    'внутренние регламенты',
    'организационная структура',
    'данные по персоналу и кадровым процессам',
    'информация о проектах, спорах и претензиях',
    'сведения о контрагентах и крупных сделках',
];
$auditDocumentsNeededOutro = 'Если часть документов пока не готова, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный результат, который помогает оценить риски, принять управленческие решения и определить дальнейшие шаги.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'отчет об оценке рисков бизнеса',
    'карту ключевых рисков',
    'приоритизацию рисков по значимости',
    'рекомендации по снижению рисков',
    'перечень документов и процессов, требующих доработки',
    'предложения по внутреннему контролю',
    'независимую позицию для собственников, руководства или инвесторов',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, юристу, финансовому директору или инвестору.';

$auditMandatoryPrepTitle = 'Нужна независимая оценка рисков перед решением?';
$auditMandatoryPrepIntro = 'Перед сделкой, масштабированием, инвестициями или запуском нового проекта важно заранее понимать, какие риски могут повлиять на результат.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие риски критичны для конкретной ситуации',
    'какие документы нужно проверить',
    'какие процессы требуют внимания',
    'какие риски можно снизить быстро',
    'какие решения стоит принимать только после дополнительной проверки',
];
$auditMandatoryPrepOutro = 'Оценка рисков помогает не только выявить проблемы, но и выбрать разумный порядок действий.';

$auditFinalCtaTitle = 'Нужна оценка рисков бизнеса? Начнем с диагностики';
$auditFinalCtaText = 'Отправьте краткое описание компании, задачи или планируемой сделки. Мы подскажем, какие риски стоит проверить в первую очередь и какой формат оценки подойдет.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/risk-kontrol.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Оценка рисков бизнеса»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Оценка рисков бизнеса»?',
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
        'a' => 'Обычно нужны отчетность, договоры, налоговые данные, регламенты, сведения о контрагентах, проектах, персонале и спорных ситуациях. Полный перечень уточняется после первичного анализа задачи.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите отчет об оценке рисков, карту рисков и рекомендации по снижению угроз, перечень выявленных рисков, выводы по проблемным зонам и рекомендации по дальнейшим действиям.',
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
        'a' => 'Руководитель получает независимый взгляд на финансовые, правовые, операционные и репутационные риски бизнеса, понимает реальные риски и может принимать управленческие решения на основе структурированных выводов, а не разрозненных мнений.',
    ],
];


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

<body class="has-site-header has-breadcrumbs page-komplaens-ocenka-riskov-biznesa">
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