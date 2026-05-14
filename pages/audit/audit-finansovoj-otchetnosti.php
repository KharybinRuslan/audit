<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Аудит финансовой отчётности';
$pageDescription = 'Аудит финансовой отчётности ООО "Аудит Топ Эксперт": проверка достоверности отчетности, финансовых показателей, раскрытий и рисков для бизнеса.';
$serviceCoverHeroTitle = 'Аудит финансовой отчётности';
$serviceCoverHeroLead = 'Проверим финансовую отчётность компании, оценим достоверность ключевых показателей, корректность отражения активов, обязательств, доходов, расходов и денежных потоков. Поможем подготовить отчетность для собственников, инвесторов, банков, сделок, управленческого контроля или внешнего подтверждения.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Проверка показателей, раскрытий и финансовых рисков',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим цель проверки, формат отчетности и объем документов. Подскажем, какие показатели требуют особого внимания и какой итоговый результат будет полезнее для вашей задачи.';
$serviceCoverHeroBgUrl = '/img/audit/auditte.png';

$auditOrderReasonsTitle = 'В каких случаях заказывают аудит финансовой отчётности';
$auditOrderReasonsIntro = [
    'Аудит финансовой отчётности нужен, когда компании важно подтвердить достоверность показателей, подготовиться к сделке, кредитованию, привлечению инвестиций или внутреннему контролю.',
    'Услуга особенно востребована в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'отчетность нужно подтвердить перед собственниками, банком или инвесторами',
    'компания готовится к продаже бизнеса, сделке или привлечению финансирования',
    'есть сомнения в корректности финансовых показателей',
    'нужно проверить баланс, отчет о финансовых результатах или движение денежных средств',
    'требуется независимая оценка активов, обязательств, выручки и расходов',
    'нужно выявить ошибки, влияющие на управленческие или инвестиционные решения',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает аудит финансовой отчётности';
$auditCheckResultsParagraphs = [
    'Аудит финансовой отчётности показывает, насколько отчетность отражает реальное финансовое состояние компании, корректно ли сформированы показатели и есть ли существенные искажения.',
    'По итогам работы вы получаете выводы, замечания и рекомендации. Такой результат помогает собственникам, руководству, инвесторам и банкам понимать, можно ли опираться на отчетность при принятии решений.',
];

$auditQuestionsTitle = 'Какие задачи решает аудит финансовой отчётности';
$auditQuestionsIntro = 'Один из самых частых запросов — какие именно показатели проверяются и какую пользу получает компания. В зависимости от цели аудит помогает ответить на следующие вопросы:';
$auditQuestionsItems = [
    'достоверны ли показатели финансовой отчетности',
    'правильно ли отражены активы и обязательства',
    'корректно ли признаны выручка, расходы и финансовый результат',
    'есть ли существенные искажения в отчетности',
    'соответствуют ли показатели отчетности учетным данным и первичным документам',
    'насколько прозрачны раскрытия и пояснения',
    'можно ли использовать отчетность для сделки, банка или инвестора',
    'какие корректировки нужно внести перед представлением отчетности',
];
$auditQuestionsOutro = 'Если говорить простыми словами, аудит финансовой отчетности помогает понять, насколько отчетность пригодна для принятия решений и где в ней могут быть искажения.';

$auditServiceTypesTitle = 'Виды аудита финансовой отчётности';
$auditServiceTypesIntro = 'Аудит финансовой отчетности может быть полным или фокусироваться на отдельных формах, показателях, периодах или целях представления.';
$auditServiceTypesLead = 'К основным форматам относятся:';
$auditServiceTypesItems = [
    'аудит годовой финансовой отчетности',
    'проверка бухгалтерского баланса',
    'проверка отчета о финансовых результатах',
    'анализ движения денежных средств',
    'проверка отдельных статей отчетности',
    'аудит отчетности перед сделкой или кредитованием',
    'экспресс-анализ финансовых показателей',
    'подготовка рекомендаций по корректировкам и раскрытиям',
];

$auditProcessTitle = 'Как проводится аудит финансовой отчётности';
$auditProcessIntro = 'Порядок проверки зависит от формата отчетности и цели клиента, но обычно аудит финансовой отчетности проходит по понятной схеме.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ отчетности',
        'text' => 'Вы направляете отчетность, сведения о компании и цель проверки. Мы оцениваем объем работ и определяем ключевые показатели для анализа.',
    ],
    [
        'number' => '02',
        'title' => 'Определение объема проверки',
        'text' => 'Согласуем формы отчетности, проверяемый период, существенные статьи, документы и формат итоговых выводов.',
    ],
    [
        'number' => '03',
        'title' => 'Запрос документов',
        'text' => 'Изучаем отчетность, оборотно-сальдовые ведомости, регистры учета, первичные документы, расшифровки статей и пояснения.',
    ],
    [
        'number' => '04',
        'title' => 'Проверка показателей',
        'text' => 'Проверяем активы, обязательства, выручку, расходы, финансовый результат, денежные потоки и взаимосвязь показателей.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование замечаний',
        'text' => 'Фиксируем ошибки, искажения, спорные участки и возможные корректировки. При необходимости готовим рекомендации по раскрытиям.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет, выводы или рекомендации, которые можно использовать для собственников, банка, инвесторов или внутреннего контроля.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки аудита финансовой отчётности';
$auditDeadlinesIntro = 'Срок зависит от объема отчетности, количества расшифровок, размера компании, периода проверки и глубины анализа.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-анализ отчетности — от 1–3 рабочих дней',
    'проверка отдельных показателей — от 3–5 рабочих дней',
    'стандартный аудит финансовой отчетности — от 5–15 рабочих дней',
    'проверка отчетности крупной компании — по согласованию',
];
$auditDeadlinesOutro = 'Если отчетность нужна к конкретной дате, лучше заранее согласовать объем проверки и перечень документов.';

$auditPricingTitle = 'Стоимость аудита финансовой отчётности';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от количества форм отчетности, объема расшифровок, сложности учета, проверяемого периода, срочности и формата итогового результата.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 5 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для аудита финансовой отчётности';
$auditDocumentsNeededIntro = 'Для первичной оценки обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'финансовая или бухгалтерская отчетность за проверяемый период',
    'оборотно-сальдовые ведомости',
    'расшифровки существенных статей отчетности',
    'регистры учета',
    'первичные документы по ключевым операциям',
    'договоры с основными контрагентами',
    'банковские выписки и платежные документы',
    'учетная политика',
    'пояснения к отчетности',
    'управленческая отчетность при наличии',
];
$auditDocumentsNeededOutro = 'Если отчетность еще формируется, можно начать с проверки ключевых статей и подготовить перечень корректировок до финальной версии.';

$auditResultsSummaryTitle = 'Что вы получите по итогам аудита финансовой отчётности';
$auditResultsSummaryIntro = 'По итогам проверки вы получаете независимую оценку отчетности и практические рекомендации по ее доработке.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'выводы о достоверности финансовых показателей',
    'перечень выявленных ошибок и искажений',
    'оценку существенных статей отчетности',
    'рекомендации по корректировкам',
    'замечания по раскрытиям и пояснениям',
    'понимание рисков для собственников, банков или инвесторов',
    'готовую основу для принятия финансовых решений',
];
$auditResultsSummaryOutro = 'Аудит финансовой отчетности помогает превратить отчетность из формального документа в надежный инструмент для управления, переговоров и оценки бизнеса.';

$auditMandatoryPrepTitle = 'Готовите отчетность для банка, инвестора или сделки? Поможем проверить заранее';
$auditMandatoryPrepIntro = 'Перед передачей отчетности внешним пользователям важно убедиться, что показатели корректны, раскрытия понятны, а спорные статьи подтверждены документами.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие показатели требуют дополнительной проверки',
    'какие статьи отчетности могут вызвать вопросы',
    'какие документы нужно подготовить для подтверждения данных',
    'какие корректировки желательно внести до передачи отчетности',
    'какой формат выводов подойдет для вашей цели',
];
$auditMandatoryPrepOutro = 'Предварительный аудит помогает снизить риск вопросов со стороны банка, инвестора, покупателя бизнеса или собственников.';

$auditFinalCtaTitle = 'Нужен аудит финансовой отчётности? Начнем с проверки ключевых показателей';
$auditFinalCtaText = 'Отправьте отчетность, расшифровки или краткое описание задачи. Мы подскажем, какие документы понадобятся, какие показатели стоит проверить и сколько времени займет работа.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/auditte.png';

$auditFaqTitle = 'Частые вопросы об аудите финансовой отчётности';
$auditFaqItems = [
    [
        'q' => 'Что входит в аудит финансовой отчетности?',
        'a' => 'В проверку может входить анализ баланса, отчета о финансовых результатах, денежных потоков, расшифровок, первичных документов и существенных показателей.',
    ],
    [
        'q' => 'Можно ли проверить только отдельные статьи отчетности?',
        'a' => 'Да, можно проверить отдельные показатели: выручку, запасы, дебиторскую задолженность, обязательства, расходы, денежные средства или финансовый результат.',
    ],
    [
        'q' => 'Кому нужен аудит финансовой отчетности?',
        'a' => 'Он полезен собственникам, руководству, банкам, инвесторам, покупателям бизнеса и компаниям, которые хотят убедиться в достоверности данных.',
    ],
    [
        'q' => 'Можно ли провести проверку до финального закрытия периода?',
        'a' => 'Да, можно начать с предварительной проверки и подготовить рекомендации до формирования окончательной отчетности.',
    ],
    [
        'q' => 'Сколько длится аудит финансовой отчетности?',
        'a' => 'Срок зависит от объема отчетности и документов. Небольшой анализ может занять несколько дней, комплексная проверка — от одной-двух недель.',
    ],
    [
        'q' => 'Можно ли провести аудит удаленно?',
        'a' => 'Да, если отчетность, расшифровки и документы доступны в электронном виде.',
    ],
    [
        'q' => 'Что делать, если найдены искажения?',
        'a' => 'Вы получите перечень замечаний и рекомендации, какие корректировки внести и какие документы дополнительно подготовить.',
    ],
    [
        'q' => 'Подходит ли такая проверка перед кредитованием?',
        'a' => 'Да, аудит финансовой отчетности помогает подготовить данные для банка и заранее увидеть вопросы, которые могут возникнуть при рассмотрении заявки.',
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
    ['label' => 'Аудит финансовой отчётности'],
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

<body class="has-site-header has-breadcrumbs page-audit-audit-finansovoj-otchetnosti">
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