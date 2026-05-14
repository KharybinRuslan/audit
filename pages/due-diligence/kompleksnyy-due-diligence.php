<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Комплексный Due Diligence';
$pageDescription = 'Комплексный Due Diligence: финансовая, налоговая, юридическая и операционная проверка бизнеса перед сделкой, инвестированием или покупкой.';

$serviceCoverHeroTitle = 'Комплексный Due Diligence';
$serviceCoverHeroLead = 'Проведем комплексный Due Diligence бизнеса, компании, проекта или актива перед покупкой, инвестированием, сделкой M&A, реструктуризацией или кредитованием. Проверим финансовые, налоговые, юридические, операционные и управленческие риски, чтобы сформировать целостную картину объекта сделки.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 10 рабочих дней',
    'Финансы, налоги, право, операции и риски сделки',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим объект проверки, цель сделки и доступные документы, чтобы предложить подходящий формат Due Diligence.';
$serviceCoverHeroBgUrl = '/img/audit/DUE diligence.webp';

$auditOrderReasonsTitle = 'Когда нужен Комплексный Due Diligence';
$auditOrderReasonsIntro = [
    'Due Diligence нужен, когда важно заранее проверить объект сделки, оценить риски и принять решение на основе документов, а не только заявленных данных.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'планируется покупка бизнеса, доли или актива',
    'инвестор оценивает компанию перед вложением средств',
    'готовится сделка M&A или реструктуризация',
    'нужно проверить финансовые, налоговые, юридические и операционные риски',
    'стороны обсуждают цену, гарантии и условия сделки',
    'собственникам нужна независимая оценка объекта перед решением',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Комплексный Due Diligence показывает';
$auditCheckResultsParagraphs = [
    'Комплексный Due Diligence показывает реальное состояние бизнеса с разных сторон: финансовые показатели, налоговые риски, юридическую чистоту документов, обязательства, операционную устойчивость, активы, процессы и скрытые проблемы.',
    'По итогам вы получаете сводный отчет, который помогает принять решение, скорректировать цену, запросить дополнительные гарантии или изменить структуру сделки.',
];

$auditQuestionsTitle = 'Какие задачи решает услуга «Комплексный Due Diligence»';
$auditQuestionsIntro = 'Проверка помогает заранее оценить объект сделки, подтвердить данные и выявить риски, которые могут повлиять на цену, условия или решение о сделке:';
$auditQuestionsItems = [
    'проверить финансовое состояние компании',
    'оценить налоговые риски и историю взаимодействия с ФНС',
    'проверить юридические документы, договоры и активы',
    'оценить операционную модель и устойчивость процессов',
    'выявить скрытые обязательства и спорные вопросы',
    'подготовить выводы для переговоров',
    'сформировать условия защиты покупателя или инвестора',
    'принять обоснованное решение о сделке',
];
$auditQuestionsOutro = 'Если говорить простыми словами, Due Diligence помогает понять, что именно вы покупаете, во что инвестируете и какие риски принимаете.';

$auditServiceTypesTitle = 'Что входит в комплексный Due Diligence';
$auditServiceTypesIntro = 'Формат проверки зависит от цели сделки, отрасли, размера компании, доступных документов и уровня детализации, который нужен клиенту.';
$auditServiceTypesLead = 'К основным форматам относятся:';
$auditServiceTypesItems = [
    'финансовый Due Diligence',
    'налоговый Due Diligence',
    'юридический Due Diligence',
    'операционный Due Diligence',
    'проверка активов и обязательств',
    'анализ контрагентов и договоров',
    'оценка кадровых и управленческих рисков',
    'сводный отчет для покупателя, инвестора или собственника',
];

$auditProcessTitle = 'Как проводится услуга «Комплексный Due Diligence»';
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
        'title' => 'Проверка по направлению «комплексный»',
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
    'бухгалтерская и управленческая отчетность',
    'налоговые декларации и расчеты',
    'корпоративные документы',
    'договоры с ключевыми контрагентами',
    'документы на активы и обязательства',
    'судебные и претензионные материалы',
    'организационная структура и данные по персоналу',
    'описание бизнес-процессов и управленческие отчеты',
];
$auditDocumentsNeededOutro = 'Если полный комплект документов пока недоступен, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам Due Diligence';
$auditResultsSummaryIntro = 'По итогам проверки вы получаете практичный результат, который помогает оценить риски, принять решение и подготовиться к переговорам по сделке.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'сводный отчет по комплексному Due Diligence',
    'финансовые, налоговые, юридические и операционные выводы',
    'перечень существенных рисков сделки',
    'оценку скрытых обязательств и спорных вопросов',
    'рекомендации по цене, гарантиям и условиям сделки',
    'перечень дополнительных запросов и действий',
    'независимую позицию для покупателя, инвестора или собственника',
];
$auditResultsSummaryOutro = 'Итоговый отчет должен быть понятен не только профильным специалистам, но и инвестору, покупателю, собственнику, руководителю, юристу или финансовому директору.';

$auditMandatoryPrepTitle = 'Готовите сделку? Поможем определить периметр проверки';
$auditMandatoryPrepIntro = 'Перед сделкой важно заранее определить периметр проверки и список документов, чтобы не пропустить существенные риски.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие направления Due Diligence нужны',
    'какой период и периметр проверять',
    'какие документы запросить у второй стороны',
    'какие риски могут повлиять на цену',
    'какие условия сделки стоит предусмотреть заранее',
];
$auditMandatoryPrepOutro = 'Чем раньше проведена проверка, тем проще учесть риски в цене, структуре, гарантиях и условиях сделки.';

$auditFinalCtaTitle = 'Нужен Комплексный Due Diligence?';
$auditFinalCtaText = 'Опишите объект сделки, цель проверки и текущую стадию переговоров. Мы подскажем, какой периметр Due Diligence подойдет и какие документы нужно запросить.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/DUE diligence.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Комплексный Due Diligence»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Комплексный Due Diligence»?',
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
        'a' => 'Обычно нужны бухгалтерская и управленческая отчетность, налоговые декларации и расчеты, корпоративные документы, договоры с ключевыми контрагентами, документы на активы и обязательства. Полный перечень уточняется после первичной оценки задачи.',
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
        'a' => 'По итогам вы получите сводный отчет по комплексному Due Diligence, выводы, рекомендации и перечень дальнейших действий.',
    ],
];



// ==============================
// Due Diligence для инвесторов
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

<body class="has-site-header has-breadcrumbs page-due-diligence-kompleksnyy-due-diligence">
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