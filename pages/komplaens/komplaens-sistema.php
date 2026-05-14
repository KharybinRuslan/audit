<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Комплаенс-система';
$pageDescription = 'Комплаенс-система для бизнеса: правила, политики, контроль рисков, проверка контрагентов, конфликты интересов и процедуры соблюдения требований.';

$serviceCoverHeroTitle = 'Комплаенс-система для бизнеса';
$serviceCoverHeroLead = 'Поможем разработать и внедрить комплаенс-систему, которая снижает правовые, финансовые и репутационные риски компании. Настроим политики, процедуры проверки, правила взаимодействия с контрагентами, механизмы выявления конфликта интересов и порядок реагирования на нарушения.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 10 рабочих дней',
    'Политики, процедуры и контроль комплаенс-рисков',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Сначала оценим профиль рисков компании, отрасль, контрагентов и внутренние процессы, затем предложим практичный формат комплаенс-системы.';
$serviceCoverHeroBgUrl = '/img/audit/risk-kontrol.webp';

$auditOrderReasonsTitle = 'Когда нужна комплаенс-система';
$auditOrderReasonsIntro = [
    'Комплаенс-система нужна, когда компании важно не только формально соблюдать требования, но и управлять рисками, связанными с контрагентами, сотрудниками, платежами, подарками, конфликтом интересов и деловой репутацией.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'компания работает с крупными клиентами, государственными структурами или регулируемыми рынками',
    'нужно пройти проверку банка, инвестора, партнера или головной компании',
    'есть риски конфликта интересов, коррупции или недобросовестных контрагентов',
    'внутренние правила не описаны или применяются непоследовательно',
    'бизнес хочет снизить репутационные и юридические риски',
    'необходимо внедрить понятные процедуры комплаенс-контроля',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что дает комплаенс-система';
$auditCheckResultsParagraphs = [
    'Комплаенс-система помогает заранее выявлять и снижать риски нарушения требований, недобросовестного поведения, конфликта интересов и претензий со стороны партнеров, банков или контролирующих органов.',
    'По итогам проекта у компании появляется набор практических правил: как проверять контрагентов, согласовывать спорные операции, фиксировать нарушения и реагировать на риски.',
];

$auditQuestionsTitle = 'Какие задачи решает комплаенс-система';
$auditQuestionsIntro = 'Комплаенс-система помогает бизнесу выстроить понятные правила поведения и контроля:';
$auditQuestionsItems = [
    'определить ключевые комплаенс-риски',
    'разработать политики и внутренние процедуры',
    'настроить проверку контрагентов и сделок',
    'выявлять конфликт интересов',
    'снизить риск коррупционных и репутационных инцидентов',
    'установить порядок сообщения о нарушениях',
    'подготовиться к проверкам партнеров, банков или инвесторов',
    'повысить прозрачность принятия решений',
];
$auditQuestionsOutro = 'Комплаенс нужен не для формального набора документов, а для того, чтобы компания могла доказуемо управлять рисками и принимать решения по единым правилам.';

$auditServiceTypesTitle = 'Что входит в разработку комплаенс-системы';
$auditServiceTypesIntro = 'Комплаенс-система может включать разные элементы в зависимости от отрасли, масштаба бизнеса и требований партнеров.';
$auditServiceTypesLead = 'В работу могут входить:';
$auditServiceTypesItems = [
    'диагностика комплаенс-рисков',
    'разработка кодекса делового поведения',
    'политика по конфликту интересов',
    'антикоррупционная политика',
    'процедуры проверки контрагентов',
    'правила согласования подарков, представительских расходов и спорных платежей',
    'порядок сообщения о нарушениях',
    'обучение сотрудников и сопровождение внедрения',
];

$auditProcessTitle = 'Как проводится работа по услуге «Комплаенс-система»';
$auditProcessIntro = 'Внедрение комплаенс-системы начинается с диагностики рисков и заканчивается передачей рабочих документов и процедур.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Оценка профиля компании',
        'text' => 'Изучаем отрасль, структуру бизнеса, контрагентов, процессы согласования и требования партнеров.',
    ],
    [
        'number' => '02',
        'title' => 'Выявление комплаенс-рисков',
        'text' => 'Определяем риски конфликта интересов, коррупции, недобросовестных контрагентов, спорных платежей и нарушений внутренних правил.',
    ],
    [
        'number' => '03',
        'title' => 'Проектирование системы',
        'text' => 'Формируем набор политик, процедур, контрольных точек и ответственных лиц.',
    ],
    [
        'number' => '04',
        'title' => 'Разработка документов',
        'text' => 'Готовим политики, регламенты, чек-листы, формы раскрытия информации и порядок реагирования на нарушения.',
    ],
    [
        'number' => '05',
        'title' => 'Внедрение процедур',
        'text' => 'Помогаем адаптировать документы под реальную работу компании и объяснить порядок применения сотрудникам.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете комплаенс-систему, которую можно применять в работе и развивать по мере роста бизнеса.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, количества процессов, масштаба компании, доступности информации и глубины анализа. После первичного изучения задачи можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'диагностика комплаенс-рисков — от 5 рабочих дней',
    'разработка отдельных политик — от 5–10 рабочих дней',
    'комплаенс-система для компании — от 15–30 рабочих дней',
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
    'организационная структура',
    'действующие внутренние политики и регламенты',
    'типовые договоры и процедуры согласования сделок',
    'информация о контрагентах и ключевых партнерах',
    'описание процессов закупок, продаж и платежей',
    'сведения о полномочиях сотрудников',
    'требования банков, инвесторов или головной компании',
    'данные о ранее выявленных нарушениях или спорных ситуациях',
];
$auditDocumentsNeededOutro = 'Если часть документов пока не готова, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный результат, который помогает оценить риски, принять управленческие решения и определить дальнейшие шаги.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'комплаенс-политику и сопутствующие документы',
    'карту комплаенс-рисков',
    'процедуры проверки контрагентов и сделок',
    'правила выявления конфликта интересов',
    'порядок реагирования на нарушения',
    'рекомендации по внедрению и обучению сотрудников',
    'основу для регулярного комплаенс-контроля',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, юристу, финансовому директору или инвестору.';

$auditMandatoryPrepTitle = 'Нужно внедрить комплаенс без формальности?';
$auditMandatoryPrepIntro = 'Комплаенс-система должна соответствовать реальным рискам компании. Если взять шаблонные политики и не связать их с процессами, они не помогут при проверке и не снизят риски.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие комплаенс-риски актуальны именно для вашей компании',
    'какие политики нужны в первую очередь',
    'как проверять контрагентов и спорные операции',
    'кто должен отвечать за комплаенс-процедуры',
    'как внедрить систему так, чтобы сотрудники ей пользовались',
];
$auditMandatoryPrepOutro = 'Практичный комплаенс должен быть понятен сотрудникам и полезен руководству.';

$auditFinalCtaTitle = 'Нужна комплаенс-система? Начнем с оценки рисков';
$auditFinalCtaText = 'Опишите деятельность компании, отрасль, контрагентов и требования партнеров. Мы подскажем, какие элементы комплаенса нужны в первую очередь и как выстроить систему поэтапно.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/risk-kontrol.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Комплаенс-система»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Комплаенс-система»?',
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
        'a' => 'Обычно нужны внутренние политики, регламенты, договоры, данные о контрагентах, описание процессов и требования партнеров или инвесторов. Полный перечень уточняется после первичного анализа задачи.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите комплаенс-документы, карту рисков и рекомендации по внедрению, перечень выявленных рисков, выводы по проблемным зонам и рекомендации по дальнейшим действиям.',
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
        'a' => 'Руководитель получает независимый взгляд на комплаенс-риски, внутренние правила и деловую репутацию, понимает реальные риски и может принимать управленческие решения на основе структурированных выводов, а не разрозненных мнений.',
    ],
];


// ==============================
// Управление рисками (risk management)
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

<body class="has-site-header has-breadcrumbs page-komplaens-komplaens-sistema">
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