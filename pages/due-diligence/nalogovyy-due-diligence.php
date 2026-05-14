<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Налоговый Due Diligence';
$pageDescription = 'Налоговый Due Diligence: проверка налоговых рисков, деклараций, НДС, прибыли, контрагентов, требований ФНС и рисков доначислений.';

$serviceCoverHeroTitle = 'Налоговый Due Diligence';
$serviceCoverHeroLead = 'Проведем налоговый Due Diligence компании или актива перед сделкой, инвестированием, покупкой доли, реорганизацией или кредитованием. Проверим налоговую отчетность, структуру операций, НДС, налог на прибыль, контрагентов, требования ФНС, спорные участки и риски возможных доначислений.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Налоги, ФНС, контрагенты, доначисления и риски',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим объект проверки, цель сделки и доступные документы, чтобы предложить подходящий формат Due Diligence.';
$serviceCoverHeroBgUrl = '/img/audit/DUE diligence.webp';

$auditOrderReasonsTitle = 'Когда нужен Налоговый Due Diligence';
$auditOrderReasonsIntro = [
    'Due Diligence нужен, когда важно заранее проверить объект сделки, оценить риски и принять решение на основе документов, а не только заявленных данных.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'планируется покупка компании или доли в бизнесе',
    'инвестор хочет оценить риск налоговых доначислений',
    'у компании были требования, проверки или споры с ФНС',
    'есть сложные сделки, контрагенты или цепочки поставок',
    'нужно проверить корректность НДС, прибыли, УСН или иных налогов',
    'требуется оценить налоговые последствия сделки или реорганизации',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Налоговый Due Diligence показывает';
$auditCheckResultsParagraphs = [
    'Налоговый Due Diligence показывает, насколько корректно компания рассчитывала и уплачивала налоги, есть ли риски по НДС, прибыли, дроблению бизнеса, необоснованной налоговой выгоде, контрагентам, расходам и документальному подтверждению операций.',
    'По итогам вы получаете отчет с налоговыми рисками, возможными последствиями и рекомендациями, которые можно учесть в сделке.',
];

$auditQuestionsTitle = 'Какие задачи решает услуга «Налоговый Due Diligence»';
$auditQuestionsIntro = 'Проверка помогает заранее оценить объект сделки, подтвердить данные и выявить риски, которые могут повлиять на цену, условия или решение о сделке:';
$auditQuestionsItems = [
    'проверить налоговые декларации и расчеты',
    'оценить риски доначислений, штрафов и пеней',
    'выявить проблемных контрагентов и спорные операции',
    'проверить НДС, налог на прибыль, УСН и другие налоги',
    'оценить документальное подтверждение расходов',
    'проверить требования и переписку с ФНС',
    'оценить риски дробления бизнеса и необоснованной выгоды',
    'подготовить рекомендации по условиям сделки',
];
$auditQuestionsOutro = 'Если говорить простыми словами, Due Diligence помогает понять, что именно вы покупаете, во что инвестируете и какие риски принимаете.';

$auditServiceTypesTitle = 'экспресс-оценка налоговых рисков';
$auditServiceTypesIntro = 'Формат проверки зависит от цели сделки, отрасли, размера компании, доступных документов и уровня детализации, который нужен клиенту.';
$auditServiceTypesLead = 'К основным форматам относятся:';
$auditServiceTypesItems = [
    'экспресс-оценка налоговых рисков',
    'полный налоговый Due Diligence',
    'проверка НДС и контрагентов',
    'проверка налога на прибыль',
    'анализ требований и переписки с ФНС',
    'проверка налоговых рисков сделки',
    'оценка рисков дробления бизнеса',
    'подготовка налогового отчета для инвестора или покупателя',
];

$auditProcessTitle = 'Как проводится услуга «Налоговый Due Diligence»';
$auditProcessIntro = 'Due Diligence проводится поэтапно: от первичного анализа сделки до подготовки отчета, выводов и рекомендаций.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ задачи',
        'text' => 'Вы описываете объект проверки, цель сделки, текущую стадию переговоров и ключевые вопросы. Мы определяем периметр Due Diligence и перечень документов.',
    ],
    [
        'number' => '02',
        'title' => 'Запрос и изучение документов',
        'text' => 'Формируем список материалов, анализируем документы, отчетность, договоры, данные по операциям, активам, обязательствам и процессам.',
    ],
    [
        'number' => '03',
        'title' => 'Проверка по направлению «налоговый»',
        'text' => 'Проводим профильный анализ, сопоставляем данные между собой, выявляем расхождения, спорные участки, слабые места и вопросы для уточнения.',
    ],
    [
        'number' => '04',
        'title' => 'Выявление рисков',
        'text' => 'Фиксируем существенные риски, оцениваем их возможное влияние на цену, структуру сделки, гарантии, обязательства сторон и дальнейшую работу бизнеса.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование выводов',
        'text' => 'Готовим выводы, рекомендации, перечень дополнительных запросов и вопросы, которые стоит вынести на переговоры до подписания документов.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете итоговый отчет, который можно использовать для принятия решения, согласования условий сделки и защиты интересов клиента.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки проведения Due Diligence';
$auditDeadlinesIntro = 'Срок проверки зависит от объема документов, размера компании, количества проверяемых периодов, доступности пояснений и глубины анализа. После первичной оценки можно точнее определить реалистичный срок.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-проверка — от 3–5 рабочих дней',
    'проверка отдельного блока — от 5–10 рабочих дней',
    'комплексный анализ — от 10–20 рабочих дней',
    'проверка крупной компании или группы — по согласованию',
];
$auditDeadlinesOutro = 'Если сделка срочная, сообщите желаемый срок — мы подскажем, какой формат проверки можно провести в первую очередь.';

$auditPricingTitle = 'Стоимость Due Diligence';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от вида проверки, объема документов, количества направлений, проверяемого периода, срочности и формата итогового отчета.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 5 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для Due Diligence';
$auditDocumentsNeededIntro = 'Полный перечень документов зависит от направления проверки и цели сделки, но для первичной оценки обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'налоговые декларации и расчеты',
    'бухгалтерская отчетность',
    'оборотно-сальдовые ведомости',
    'договоры с контрагентами',
    'акты, счета, накладные, УПД и иные первичные документы',
    'книги покупок и продаж при наличии НДС',
    'требования, акты и переписка с ФНС',
    'информация о налоговых проверках, спорах и претензиях',
];
$auditDocumentsNeededOutro = 'Если полный комплект документов пока недоступен, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам Due Diligence';
$auditResultsSummaryIntro = 'По итогам проверки вы получаете практичный результат, который помогает оценить риски, принять решение и подготовиться к переговорам по сделке.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'отчет по налоговому Due Diligence',
    'перечень существенных налоговых рисков',
    'оценку риска доначислений, штрафов и пеней',
    'анализ спорных операций и контрагентов',
    'выводы по налоговой отчетности и документам',
    'рекомендации по условиям сделки и дополнительным запросам',
    'независимую налоговую позицию для инвестора или покупателя',
];
$auditResultsSummaryOutro = 'Итоговый отчет должен быть понятен не только профильным специалистам, но и инвестору, покупателю, собственнику, руководителю, юристу или финансовому директору.';

$auditMandatoryPrepTitle = 'Готовите сделку? Поможем определить периметр проверки';
$auditMandatoryPrepIntro = 'Перед сделкой важно заранее определить периметр проверки и список документов, чтобы не пропустить существенные риски.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие налоги и периоды проверить',
    'какие документы запросить у продавца',
    'какие риски могут стать критичными',
    'какие условия включить в сделку',
    'какие вопросы задать до подписания документов',
];
$auditMandatoryPrepOutro = 'Чем раньше проведена проверка, тем проще учесть риски в цене, структуре, гарантиях и условиях сделки.';

$auditFinalCtaTitle = 'Нужен Налоговый Due Diligence?';
$auditFinalCtaText = 'Опишите объект сделки, цель проверки и текущую стадию переговоров. Мы подскажем, какой периметр Due Diligence подойдет и какие документы нужно запросить.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/DUE diligence.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Налоговый Due Diligence»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Налоговый Due Diligence»?',
        'a' => 'Состав работ зависит от цели проверки, объекта сделки и доступных документов. Обычно услуга включает анализ материалов, выявление рисков, подготовку выводов, рекомендаций и итогового отчета.',
    ],
    [
        'q' => 'Когда лучше проводить Due Diligence?',
        'a' => 'Проверку лучше проводить до подписания ключевых документов, оплаты, покупки доли, входа в проект или принятия инвестиционного решения.',
    ],
    [
        'q' => 'Можно ли провести проверку удаленно?',
        'a' => 'Да, во многих случаях Due Diligence можно провести удаленно, если документы предоставлены в электронном виде и есть возможность получить пояснения от ответственных лиц.',
    ],
    [
        'q' => 'Сколько времени занимает проверка?',
        'a' => 'Срок зависит от объема документов, размера компании, количества проверяемых периодов, глубины анализа и срочности сделки.',
    ],
    [
        'q' => 'Какие документы нужны для начала?',
        'a' => 'Обычно нужны налоговые декларации и расчеты, бухгалтерская отчетность, оборотно-сальдовые ведомости, договоры с контрагентами, акты, счета, накладные, УПД и иные первичные документы. Полный перечень уточняется после первичной оценки задачи.',
    ],
    [
        'q' => 'Что будет, если в ходе проверки найдут риски?',
        'a' => 'Риски фиксируются в отчете с пояснением возможных последствий. По существенным вопросам можно подготовить рекомендации: запросить дополнительные документы, изменить условия сделки, снизить цену, предусмотреть гарантии или отказаться от сделки.',
    ],
    [
        'q' => 'Можно ли проверить только один блок?',
        'a' => 'Да, можно провести отдельный финансовый, налоговый, юридический, операционный или другой профильный Due Diligence без комплексной проверки всех направлений.',
    ],
    [
        'q' => 'Что я получу по итогам работы?',
        'a' => 'По итогам вы получите отчет по налоговому Due Diligence, выводы, рекомендации и перечень дальнейших действий.',
    ],
];



// ==============================
// Юридический Due Diligence
// ==============================


$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Due Diligence', 'href' => '/due-diligence'],
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

<body class="has-site-header has-breadcrumbs page-due-diligence-nalogovyy-due-diligence">
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