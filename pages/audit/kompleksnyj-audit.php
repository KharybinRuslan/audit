<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Комплексный аудит';
$pageDescription = 'Комплексный аудит ООО "Аудит Топ Эксперт": проверка бухгалтерского, налогового, финансового и кадрового учета, оценка рисков и рекомендации для бизнеса.';
$serviceCoverHeroTitle = 'Комплексный аудит компании';
$serviceCoverHeroLead = 'Проведем комплексную проверку бухгалтерского, налогового, финансового, кадрового и договорного блока компании. Выявим существенные ошибки, финансовые и налоговые риски, слабые места внутреннего контроля и подготовим понятные рекомендации для руководства, собственников и ответственных специалистов.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 10 рабочих дней',
    'Проверка учета, отчетности, налогов и процессов',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим масштаб бизнеса, цель проверки и объем документов. Подскажем, какие направления стоит включить в комплексный аудит и какой результат будет полезнее для вашей ситуации.';
$serviceCoverHeroBgUrl = '/img/audit/auditte.png';

$auditOrderReasonsTitle = 'В каких случаях заказывают комплексный аудит';
$auditOrderReasonsIntro = [
    'Комплексный аудит нужен, когда компании важно увидеть полную картину состояния учета, отчетности, налогов, финансов и внутренних процессов. Такая проверка помогает не ограничиваться одним участком, а оценить риски бизнеса системно.',
    'Услуга особенно востребована в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'собственники хотят получить независимую оценку состояния компании',
    'планируется продажа бизнеса, привлечение инвестиций или кредитование',
    'есть сомнения в качестве бухгалтерского, налогового или кадрового учета',
    'компания быстро выросла и внутренний контроль не успевает за масштабом операций',
    'нужно подготовиться к проверкам или крупной сделке',
    'требуется выявить системные ошибки, риски и зоны ответственности',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает комплексная аудиторская проверка';
$auditCheckResultsParagraphs = [
    'Комплексный аудит показывает, насколько корректно устроены ключевые учетные и контрольные процессы компании: бухгалтерия, налоги, финансовая отчетность, договоры, первичные документы, зарплата, кадровый учет и внутренние регламенты.',
    'По итогам работы вы получаете отчет с выводами, рисками, замечаниями и рекомендациями. Такой документ помогает руководству увидеть не отдельные ошибки, а общую картину: какие проблемы критичны, что можно исправить быстро, а какие процессы нужно перестраивать системно.',
];

$auditQuestionsTitle = 'Какие задачи решает комплексный аудит';
$auditQuestionsIntro = 'Один из самых частых запросов — чем комплексный аудит полезнее точечной проверки. Его задача — показать взаимосвязи между учетом, налогами, документами, финансами и управлением. Чаще всего аудит помогает ответить на следующие вопросы:';
$auditQuestionsItems = [
    'насколько достоверна отчетность и управленческие данные',
    'есть ли существенные бухгалтерские, налоговые или кадровые ошибки',
    'какие участки учета несут наибольшие риски',
    'как оформлены договоры и первичные документы',
    'насколько надежна система внутреннего контроля',
    'какие процессы зависят от конкретных сотрудников и создают операционные риски',
    'готова ли компания к сделке, проверке или привлечению инвестиций',
    'какие действия нужно выполнить в первую очередь',
];
$auditQuestionsOutro = 'Если говорить простыми словами, комплексный аудит помогает увидеть бизнес целиком: где все работает устойчиво, где накопились ошибки и какие решения помогут снизить риски.';

$auditServiceTypesTitle = 'Направления комплексного аудита';
$auditServiceTypesIntro = 'Комплексный аудит формируется из нескольких направлений. Их состав зависит от цели проверки, масштаба компании и ожидаемого результата.';
$auditServiceTypesLead = 'В комплексную проверку могут входить:';
$auditServiceTypesItems = [
    'аудит бухгалтерской отчетности',
    'налоговый аудит и оценка налоговых рисков',
    'проверка первичных документов и договоров',
    'аудит отдельных участков учета',
    'кадровый аудит и проверка зарплатного блока',
    'анализ финансовых показателей и управленческой отчетности',
    'оценка внутреннего контроля и документооборота',
    'подготовка плана исправления выявленных нарушений',
];

$auditProcessTitle = 'Как проводится комплексный аудит';
$auditProcessIntro = 'Комплексный аудит требует четкой организации, чтобы проверка не превратилась в хаотичный сбор замечаний. Обычно работа проходит поэтапно.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ компании',
        'text' => 'Вы направляете описание бизнеса, структуру, отчетность и основные вопросы. Мы оцениваем масштаб проверки и определяем приоритетные направления.',
    ],
    [
        'number' => '02',
        'title' => 'Формирование программы аудита',
        'text' => 'Согласуем блоки проверки, периоды, документы, ответственных лиц, сроки и формат итогового отчета.',
    ],
    [
        'number' => '03',
        'title' => 'Сбор и изучение документов',
        'text' => 'Анализируем бухгалтерскую и налоговую отчетность, регистры, договоры, первичные документы, кадровые материалы, финансовые отчеты и внутренние регламенты.',
    ],
    [
        'number' => '04',
        'title' => 'Проверка направлений',
        'text' => 'Проводим анализ по каждому блоку, выявляем ошибки, расхождения, налоговые, финансовые, кадровые, договорные и организационные риски.',
    ],
    [
        'number' => '05',
        'title' => 'Систематизация выводов',
        'text' => 'Группируем замечания по уровню значимости, показываем причины проблем, зоны ответственности и возможные последствия.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет с выводами, рекомендациями и планом действий, который можно использовать для управления, подготовки к сделке или внутреннего контроля.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки проведения комплексного аудита';
$auditDeadlinesIntro = 'Срок комплексного аудита зависит от количества направлений, размера компании, объема документов, проверяемого периода и глубины анализа.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'первичная оценка задачи — от 1 рабочего дня',
    'комплексная проверка небольшой компании — от 10 рабочих дней',
    'аудит средней компании — от 15–25 рабочих дней',
    'проверка крупного бизнеса или группы компаний — по согласованию',
];
$auditDeadlinesOutro = 'Если времени мало, можно начать с диагностики ключевых рисков, а затем расширить проверку на остальные направления.';

$auditPricingTitle = 'Стоимость комплексного аудита';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от количества направлений проверки, объема документов, проверяемого периода, сложности учета, срочности и формата итогового отчета.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 10 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для комплексного аудита';
$auditDocumentsNeededIntro = 'Полный перечень зависит от состава проверки, но для начала обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'бухгалтерская отчетность за проверяемый период',
    'налоговые декларации и расчеты',
    'оборотно-сальдовые ведомости и регистры учета',
    'договоры с ключевыми контрагентами',
    'акты, счета, накладные, УПД и иные первичные документы',
    'банковские выписки и платежные документы',
    'кадровые документы и расчет заработной платы',
    'управленческая отчетность и финансовые показатели',
    'учетная политика и внутренние регламенты',
    'пояснения по нестандартным операциям',
];
$auditDocumentsNeededOutro = 'Если все документы сразу собрать сложно, можно начать с базового комплекта и постепенно расширять перечень по мере проверки.';

$auditResultsSummaryTitle = 'Что вы получите по итогам комплексного аудита';
$auditResultsSummaryIntro = 'По итогам комплексного аудита компания получает системный результат, который помогает не только исправить ошибки, но и улучшить процессы.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'подробный отчет по направлениям проверки',
    'перечень бухгалтерских, налоговых, кадровых и финансовых рисков',
    'приоритизацию замечаний по уровню значимости',
    'рекомендации по исправлению нарушений',
    'план дальнейших действий для руководства и ответственных служб',
    'независимую оценку состояния учета и внутреннего контроля',
    'основание для подготовки к сделке, проверке или реструктуризации',
];
$auditResultsSummaryOutro = 'Комплексный аудит особенно полезен, когда важно не просто найти ошибки, а понять их причины и выстроить систему, которая не будет регулярно воспроизводить одни и те же проблемы.';

$auditMandatoryPrepTitle = 'Нужна полная проверка компании? Поможем определить объем';
$auditMandatoryPrepIntro = 'Перед комплексным аудитом важно правильно определить, какие направления действительно нужно проверять. Это помогает не перегружать проект лишними действиями и сфокусироваться на рисках, которые важны для бизнеса.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие блоки стоит включить в проверку',
    'какие документы нужны на первом этапе',
    'какие риски выглядят наиболее существенными',
    'какой формат отчета подойдет руководству и собственникам',
    'как организовать аудит без остановки текущей работы',
];
$auditMandatoryPrepOutro = 'Комплексный аудит лучше начинать с диагностики цели: для сделки, внутреннего контроля, подготовки к проверке, смены команды или оценки состояния бизнеса.';

$auditFinalCtaTitle = 'Нужен комплексный аудит? Начнем с диагностики бизнеса';
$auditFinalCtaText = 'Отправьте краткое описание компании, отчетность и список вопросов. Мы подскажем, какие направления включить в проверку, какие документы понадобятся и сколько времени займет работа.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/auditte.png';

$auditFaqTitle = 'Частые вопросы о комплексном аудите';
$auditFaqItems = [
    [
        'q' => 'Что входит в комплексный аудит?',
        'a' => 'В комплексный аудит могут входить проверка бухгалтерского и налогового учета, отчетности, договоров, первичных документов, кадрового блока, финансовых показателей и внутреннего контроля.',
    ],
    [
        'q' => 'Можно ли исключить часть направлений?',
        'a' => 'Да, состав проверки формируется индивидуально. Можно включить только те блоки, которые важны для вашей задачи.',
    ],
    [
        'q' => 'Чем комплексный аудит отличается от обычного?',
        'a' => 'Обычный аудит часто ограничен отчетностью или отдельным направлением, а комплексный показывает состояние бизнеса шире: учет, налоги, финансы, документы, кадры и процессы.',
    ],
    [
        'q' => 'Сколько длится комплексный аудит?',
        'a' => 'Срок зависит от масштаба компании и количества направлений. Небольшая проверка может занять от 10 рабочих дней, крупная — дольше.',
    ],
    [
        'q' => 'Можно ли провести комплексный аудит удаленно?',
        'a' => 'Да, многие этапы можно провести удаленно при наличии электронных документов и возможности получать пояснения.',
    ],
    [
        'q' => 'Кому нужен итоговый отчет?',
        'a' => 'Отчет полезен собственникам, руководству, финансовой службе, бухгалтерии, юристам, инвесторам и менеджменту.',
    ],
    [
        'q' => 'Можно ли использовать результат перед сделкой?',
        'a' => 'Да, комплексный аудит помогает подготовиться к продаже бизнеса, покупке актива, привлечению инвестиций или кредитованию.',
    ],
    [
        'q' => 'Что делать после аудита?',
        'a' => 'После аудита компания получает рекомендации и план действий: что исправить срочно, что доработать системно и какие процессы усилить.',
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
    ['label' => 'Комплексный аудит'],
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

<body class="has-site-header has-breadcrumbs page-audit-kompleksnyj-audit">
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