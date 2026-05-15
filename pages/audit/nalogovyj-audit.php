<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Налоговый аудит';
$pageDescription = 'Налоговый аудит ООО "Аудит Топ Эксперт": проверка налогового учета, деклараций, контрагентов и операций, выявление рисков доначислений и рекомендаций для бизнеса.';
$serviceCoverHeroTitle = 'Налоговый аудит компании';
$serviceCoverHeroLead = 'Проверим корректность налогового учета, деклараций, расчетов, первичных документов и хозяйственных операций. Выявим риски доначислений, штрафов, претензий к контрагентам, дробления бизнеса или необоснованной налоговой выгоды. Подготовим понятные рекомендации, как снизить риски и доработать документы.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Проверка налогов, документов и операций',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим вашу ситуацию, подскажем, какие налоги и периоды стоит проверить, какие документы понадобятся и какой формат налогового аудита подойдет именно вам.';
$serviceCoverHeroBgUrl = '/img/audit/auditte.png';

$auditOrderReasonsTitle = 'В каких случаях заказывают налоговый аудит';
$auditOrderReasonsIntro = [
    'Налоговый аудит нужен, когда компании важно понять, правильно ли рассчитаны налоги, есть ли риск доначислений и насколько безопасны операции с точки зрения налогового контроля.',
    'Услуга особенно востребована в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'есть сомнения в корректности расчета НДС, налога на прибыль, УСН или других налогов',
    'компания получила требование, уведомление или запрос пояснений от налогового органа',
    'планируется налоговая проверка или внутренняя подготовка к ней',
    'нужно проверить контрагентов, договоры и подтверждающие документы',
    'планируется сделка, реорганизация или изменение бизнес-модели',
    'есть риск дробления бизнеса, переквалификации операций или отказа в расходах и вычетах',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает налоговая аудиторская проверка';
$auditCheckResultsParagraphs = [
    'Налоговая аудиторская проверка показывает, насколько корректно компания рассчитывает налоги, подтверждает расходы и вычеты, оформляет операции и хранит документы.',
    'По итогам работы вы получаете оценку налоговых рисков, перечень замечаний и рекомендации. Такой результат помогает подготовиться к требованиям ФНС, проверкам, сделкам или внутреннему контролю.',
];

$auditQuestionsTitle = 'Какие задачи решает налоговый аудит';
$auditQuestionsIntro = 'Один из самых частых запросов — какие налоговые риски можно выявить до претензий со стороны контролирующих органов. В зависимости от задачи налоговый аудит помогает ответить на следующие вопросы:';
$auditQuestionsItems = [
    'правильно ли рассчитаны и отражены налоги',
    'есть ли риск доначислений, пеней и штрафов',
    'подтверждены ли расходы и налоговые вычеты документами',
    'есть ли риски по контрагентам и хозяйственным операциям',
    'корректно ли оформлены договоры, акты, счета и УПД',
    'есть ли признаки дробления бизнеса или взаимозависимости',
    'какие операции могут вызвать вопросы у налогового органа',
    'что нужно исправить до проверки или ответа на требование',
];
$auditQuestionsOutro = 'Если говорить простыми словами, налоговый аудит помогает заранее увидеть слабые места в налоговом учете и подготовить защитную позицию до того, как возникнет спор.';

$auditServiceTypesTitle = 'Виды налогового аудита';
$auditServiceTypesIntro = 'Налоговый аудит может быть комплексным или точечным. Формат зависит от того, нужно проверить всю налоговую систему компании или отдельный налог, период, договор, операцию или контрагента.';
$auditServiceTypesLead = 'К основным видам работ относятся:';
$auditServiceTypesItems = [
    'комплексный налоговый аудит компании',
    'аудит НДС',
    'аудит налога на прибыль',
    'аудит УСН и специальных налоговых режимов',
    'проверка налоговых рисков по сделке',
    'анализ контрагентов и подтверждающих документов',
    'аудит рисков дробления бизнеса',
    'подготовка рекомендаций по налоговой безопасности',
];

$auditProcessTitle = 'Как проводится налоговый аудит';
$auditProcessIntro = 'Многих интересует, как проходит налоговый аудит и насколько глубоко проверяются документы. Порядок зависит от цели, но обычно работа проходит по понятной схеме.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ ситуации',
        'text' => 'Вы описываете задачу, налоги, периоды и возможные риски. Мы определяем, какой формат проверки подойдет и какие документы нужны.',
    ],
    [
        'number' => '02',
        'title' => 'Определение объема проверки',
        'text' => 'Согласуем налоги, периоды, участки учета, контрагентов, операции и формат итогового результата.',
    ],
    [
        'number' => '03',
        'title' => 'Запрос документов',
        'text' => 'Изучаем декларации, расчеты, регистры, договоры, первичные документы, банковские выписки, переписку и пояснения.',
    ],
    [
        'number' => '04',
        'title' => 'Проверка налоговых рисков',
        'text' => 'Сопоставляем данные учета и отчетности, анализируем расходы, вычеты, операции, контрагентов и спорные участки.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование выводов',
        'text' => 'Готовим перечень рисков, замечаний и рекомендаций. При необходимости предлагаем варианты исправления документов и подготовки пояснений.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет или консультационное заключение с понятным планом действий для снижения налоговых рисков.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки проведения налогового аудита';
$auditDeadlinesIntro = 'Срок зависит от количества налогов, проверяемого периода, объема документов, сложности операций и срочности задачи.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'первичный анализ вопроса — от 1 рабочего дня',
    'проверка отдельной операции или договора — от 1–3 рабочих дней',
    'аудит одного налога или участка — от 3–7 рабочих дней',
    'комплексный налоговый аудит — по согласованию',
];
$auditDeadlinesOutro = 'Если задача срочная, можно начать с анализа самых рискованных операций и затем расширить проверку.';

$auditPricingTitle = 'Стоимость налогового аудита';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема документов, количества налогов, проверяемого периода, сложности операций, срочности и формата итоговых выводов.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 3 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для налогового аудита';
$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи, но для начала обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'налоговые декларации и расчеты',
    'оборотно-сальдовые ведомости и регистры учета',
    'договоры с контрагентами',
    'акты, счета, накладные, УПД и иные первичные документы',
    'банковские выписки и платежные документы',
    'книги покупок и продаж при проверке НДС',
    'расшифровки доходов и расходов',
    'переписка с контрагентами или налоговыми органами',
    'требования, уведомления или акты проверок при наличии',
    'пояснения по спорным операциям',
];
$auditDocumentsNeededOutro = 'Если документов много, можно начать с выборки по наиболее значимым операциям или периодам, где риски выглядят выше.';

$auditResultsSummaryTitle = 'Что вы получите по итогам налогового аудита';
$auditResultsSummaryIntro = 'По итогам налогового аудита вы получаете практический результат, который помогает снизить риск претензий и подготовить документы.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'оценку налоговых рисков по выбранным налогам или операциям',
    'перечень ошибок и спорных участков',
    'анализ подтверждающих документов',
    'рекомендации по исправлению нарушений',
    'план подготовки к налоговому требованию или проверке',
    'понимание вероятных претензий со стороны контролирующих органов',
    'рекомендации по повышению налоговой безопасности',
];
$auditResultsSummaryOutro = 'Налоговый аудит особенно полезен до проверки или крупной сделки: он помогает увидеть риски заранее и подготовить документы до того, как компания столкнется с претензиями.';

$auditMandatoryPrepTitle = 'Нужно подготовиться к налоговой проверке? Поможем заранее';
$auditMandatoryPrepIntro = 'Если компания получила требование или ожидает проверку, важно быстро понять, какие операции и документы могут вызвать вопросы. Налоговый аудит помогает подготовить позицию заранее.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие налоги и периоды стоит проверить в первую очередь',
    'какие операции выглядят наиболее рискованными',
    'какие документы нужно собрать и доработать',
    'какие пояснения стоит подготовить',
    'какие ошибки можно исправить до развития спора',
];
$auditMandatoryPrepOutro = 'Чем раньше провести налоговый аудит, тем больше возможностей снизить риск доначислений и подготовить аргументированную позицию.';

$auditFinalCtaTitle = 'Нужен налоговый аудит? Начнем с оценки рисков';
$auditFinalCtaText = 'Отправьте налоговые декларации, описание ситуации или список вопросов. Мы подскажем, какие документы понадобятся, какие участки стоит проверить и какой результат вы получите по итогам работы.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/auditte.png';

$auditFaqTitle = 'Частые вопросы о налоговом аудите';
$auditFaqItems = [
    [
        'q' => 'Что входит в налоговый аудит?',
        'a' => 'Налоговый аудит включает проверку налоговых деклараций, расчетов, регистров учета, первичных документов, договоров, операций и налоговых рисков.',
    ],
    [
        'q' => 'Можно ли проверить только НДС или налог на прибыль?',
        'a' => 'Да, налоговый аудит может быть точечным. Можно проверить отдельный налог, период, операцию, контрагента или договор.',
    ],
    [
        'q' => 'Поможет ли налоговый аудит перед проверкой ФНС?',
        'a' => 'Да, он помогает заранее выявить слабые места, собрать документы, подготовить пояснения и снизить риск ошибок в ответах.',
    ],
    [
        'q' => 'Можно ли провести налоговый аудит удаленно?',
        'a' => 'Да, если документы предоставлены в электронном виде и есть возможность получить пояснения по спорным операциям.',
    ],
    [
        'q' => 'Что будет, если найдут налоговые ошибки?',
        'a' => 'Ошибки фиксируются в выводах, после чего вы получаете рекомендации, какие документы и учетные данные нужно исправить.',
    ],
    [
        'q' => 'Сколько длится налоговый аудит?',
        'a' => 'Срок зависит от объема проверки. Анализ отдельного вопроса может занять несколько дней, комплексная проверка — дольше.',
    ],
    [
        'q' => 'Налоговый аудит заменяет налоговую консультацию?',
        'a' => 'Нет, это более глубокая проверка документов и учета. Но по итогам аудита могут быть даны консультационные рекомендации.',
    ],
    [
        'q' => 'Можно ли проверить риски по конкретной сделке?',
        'a' => 'Да, можно отдельно проанализировать сделку, договор, контрагента, документы и возможные налоговые последствия.',
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
    ['label' => 'Налоговый аудит'],
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

<body class="has-site-header has-breadcrumbs page-audit-nalogovyj-audit">
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