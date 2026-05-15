<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Налоговое консультирование';

$pageDescription = 'Налоговое консультирование ООО "Аудит Топ Эксперт": анализ налоговых рисков, консультации по спорным операциям, рекомендации по безопасной работе бизнеса.';

$serviceCoverHeroTitle = 'Налоговое консультирование для бизнеса';

$serviceCoverHeroLead = 'Поможем разобраться в сложных налоговых вопросах, оценить риски по сделкам, учету и отчетности, подготовить позицию для налоговой инспекции и выбрать безопасный порядок действий. Работаем с текущими задачами, спорными ситуациями и планируемыми операциями.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 1 рабочего дня',
    'Консультации по налогам, сделкам и проверкам',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно изучим вашу ситуацию, определим ключевые налоговые риски и подскажем, какие документы понадобятся для точного ответа.';

$serviceCoverHeroBgUrl = '/img/audit/audit.jpg';

$auditOrderReasonsTitle = 'Когда нужно налоговое консультирование';

$auditOrderReasonsIntro = [
    'Налоговое консультирование требуется, когда компании важно принять решение до совершения сделки, проверить корректность налогового учета, подготовить ответ в инспекцию или снизить риск доначислений.',
    'Чаще всего за консультацией обращаются в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'возник спорный вопрос по НДС, налогу на прибыль, УСН, НДФЛ или страховым взносам',
    'планируется крупная сделка, реорганизация, заем, продажа актива или изменение схемы работы',
    'инспекция направила требование, запрос пояснений или уведомление',
    'нужно оценить налоговые последствия договора или хозяйственной операции',
    'есть риск доначислений, штрафов или претензий со стороны ФНС',
    'руководству нужна независимая позиция по действиям бухгалтерии или подрядчиков',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что дает налоговая консультация';

$auditCheckResultsParagraphs = [
    'Налоговая консультация помогает понять, как действовать в конкретной ситуации, какие риски уже есть и какие решения могут снизить вероятность претензий со стороны налогового органа.',
    'По итогам работы вы получаете понятные выводы, рекомендации и аргументы, которые можно использовать для учета, договорной работы, общения с инспекцией или внутреннего согласования решения.',
];

$auditQuestionsTitle = 'Какие вопросы решает налоговое консультирование';

$auditQuestionsIntro = 'Налоговая консультация может быть разовой или комплексной. Перечень вопросов зависит от задачи, но чаще всего бизнесу требуется ответить на следующие вопросы:';

$auditQuestionsItems = [
    'как правильно отразить операцию в налоговом учете',
    'какие налоговые последствия возникнут по сделке',
    'можно ли принять расходы или вычет по НДС',
    'как снизить риск претензий по контрагенту',
    'какие документы нужны для подтверждения позиции компании',
    'как ответить на требование или запрос инспекции',
    'есть ли риск дробления бизнеса, необоснованной налоговой выгоды или переквалификации сделки',
    'какой вариант действий будет наиболее безопасным для компании',
];

$auditQuestionsOutro = 'Если говорить простыми словами, налоговое консультирование помогает не действовать вслепую, а заранее понимать последствия решений и защищать позицию компании документально.';

$auditServiceTypesTitle = 'Форматы налогового консультирования';

$auditServiceTypesIntro = 'Налоговое консультирование может быть точечным или комплексным. Формат зависит от срочности вопроса, объема документов и того, нужен ли устный ответ, письменная позиция или сопровождение дальнейших действий.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'разовая консультация по конкретному вопросу',
    'письменное заключение по налоговой ситуации',
    'анализ договора или сделки на налоговые риски',
    'консультация по требованиям и запросам ФНС',
    'подготовка аргументов для бухгалтерии, руководства или собственников',
    'сопровождение переговоров с контрагентами по налоговым условиям',
    'проверка налоговых последствий планируемых операций',
    'абонентское консультационное сопровождение бизнеса',
];

$auditProcessTitle = 'Как проходит налоговое консультирование';

$auditProcessIntro = 'Работа строится так, чтобы быстро разобраться в задаче и дать практичный ответ, который можно использовать в работе.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Описание ситуации',
        'text' => 'Вы направляете вопрос, документы и краткое описание обстоятельств. Мы уточняем цель консультации и ожидаемый результат.',
    ],
    [
        'number' => '02',
        'title' => 'Первичный анализ',
        'text' => 'Специалист изучает вводные данные, определяет спорные участки, возможные налоговые последствия и недостающие документы.',
    ],
    [
        'number' => '03',
        'title' => 'Изучение документов',
        'text' => 'Анализируются договоры, акты, счета, декларации, учетные данные, переписка с инспекцией и другие материалы, влияющие на вывод.',
    ],
    [
        'number' => '04',
        'title' => 'Оценка рисков',
        'text' => 'Определяются слабые места позиции, вероятность претензий, возможные суммы риска и варианты безопасного поведения.',
    ],
    [
        'number' => '05',
        'title' => 'Подготовка рекомендаций',
        'text' => 'Формируются выводы, аргументы и практические рекомендации: что исправить, какие документы собрать, как оформить операцию или ответ.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете устную консультацию, письменную позицию или подробный отчет — в зависимости от согласованного формата.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки налоговой консультации';

$auditDeadlinesIntro = 'Срок зависит от сложности вопроса, количества документов и необходимости подготовки письменной позиции. Срочные задачи можно разобрать в приоритетном порядке.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'устная консультация — от 1 рабочего дня',
    'письменный ответ по стандартному вопросу — от 1–3 рабочих дней',
    'анализ сделки или договора — от 3–5 рабочих дней',
    'комплексная налоговая позиция — по согласованию',
];

$auditDeadlinesOutro = 'Если вопрос связан с требованием ФНС или приближающимся сроком ответа, сообщите дату дедлайна — мы предложим реалистичный формат работы.';

$auditPricingTitle = 'Стоимость налогового консультирования';

$auditPricingIntro = 'Стоимость зависит от сложности вопроса, объема документов, срочности, необходимости письменного заключения и дальнейшего сопровождения.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 1 рабочего дня';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы нужны для консультации';

$auditDocumentsNeededIntro = 'Точный перечень зависит от вопроса. Для первичной оценки обычно достаточно направить основные материалы по ситуации.';

$auditDocumentsNeededItems = [
    'краткое описание вопроса и цели консультации',
    'договоры, дополнительные соглашения и приложения',
    'первичные документы по операции',
    'налоговые декларации и расчеты, если вопрос связан с отчетностью',
    'требования, уведомления или письма налогового органа',
    'учетные данные, ОСВ, карточки счетов или выписки',
    'переписка с контрагентами или инспекцией',
    'пояснения по нестандартным обстоятельствам',
];

$auditDocumentsNeededOutro = 'Если документов пока мало, можно начать с описания ситуации. После первичного анализа мы подскажем, какие материалы действительно нужны.';

$auditResultsSummaryTitle = 'Что вы получите по итогам консультации';

$auditResultsSummaryIntro = 'Результат налогового консультирования должен быть понятным и применимым на практике, а не просто общим пересказом норм.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'оценку налоговых рисков по ситуации',
    'понятные выводы по возможным вариантам действий',
    'рекомендации по документальному оформлению',
    'аргументы для бухгалтерии, руководства, контрагента или инспекции',
    'перечень документов, которые стоит подготовить или доработать',
    'понимание возможных последствий и способов их снизить',
    'практический план дальнейших действий',
];

$auditResultsSummaryOutro = 'Наша задача — помочь принять решение, которое будет не только выгодным, но и защищенным с точки зрения налоговой безопасности.';

$auditMandatoryPrepTitle = 'Есть срочный налоговый вопрос? Начнем с диагностики';

$auditMandatoryPrepIntro = 'Если ситуация уже требует реакции, важно быстро определить, какие действия безопасны, какие документы нужны и какие ошибки нельзя допустить.';

$auditMandatoryPrepLead = 'На первичной оценке мы поможем понять:';

$auditMandatoryPrepItems = [
    'в чем основной налоговый риск',
    'какие документы нужно изучить в первую очередь',
    'можно ли подготовить позицию в короткий срок',
    'какие действия лучше не совершать без проверки',
    'какой формат консультации подойдет для вашей задачи',
];

$auditMandatoryPrepOutro = 'Чем раньше разобрать вопрос, тем больше вариантов для спокойного и безопасного решения.';

$auditFinalCtaTitle = 'Нужна налоговая консультация? Начнем с вашей ситуации';

$auditFinalCtaText = 'Опишите вопрос, приложите документы или требование налогового органа. Мы оценим задачу, предложим формат работы, сроки и результат, который вы получите по итогам консультации.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/audit.jpg';

$auditFaqTitle = 'Частые вопросы: налоговое консультирование';

$auditFaqItems = [
    [
        'q' => 'Что входит в налоговое консультирование?',
        'a' => 'В услугу входит анализ вопроса, изучение документов, оценка налоговых последствий, выявление рисков и подготовка рекомендаций по безопасному порядку действий.',
    ],
    [
        'q' => 'Можно ли получить письменное заключение?',
        'a' => 'Да, по запросу мы готовим письменную позицию с выводами, аргументами и рекомендациями, которую можно использовать внутри компании или при подготовке ответа.',
    ],
    [
        'q' => 'Можно ли получить консультацию или провести проверку удаленно?',
        'a' => 'Да, большинство налоговых и консультационных задач можно выполнить удаленно: документы передаются в электронном виде, вопросы согласуются по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Можно ли проконсультироваться по требованию ФНС?',
        'a' => 'Да, мы анализируем требование, определяем, какие документы и пояснения нужны, и помогаем подготовить корректный ответ.',
    ],
    [
        'q' => 'Нужны ли документы для консультации?',
        'a' => 'Для точного ответа документы желательны. Если их пока нет, можно начать с описания ситуации и затем дополнить материалы по нашему запросу.',
    ],
    [
        'q' => 'Можно ли получить консультацию до заключения сделки?',
        'a' => 'Да, это один из самых правильных вариантов: до сделки проще изменить условия, подготовить документы и снизить налоговые риски.',
    ],
    [
        'q' => 'Вы помогаете после консультации внедрить рекомендации?',
        'a' => 'Да, при необходимости можно заказать сопровождение: доработку документов, подготовку ответа, проверку учета или дальнейшие консультации.',
    ],
    [
        'q' => 'Подходит ли услуга для малого бизнеса?',
        'a' => 'Да, налоговое консультирование полезно как малому бизнесу, так и крупным компаниям, если есть спорные операции, вопросы по отчетности или риски общения с ФНС.',
    ],
];

// ============================================================
// Налоговый аудит / диагностика
// ============================================================

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Налоговый консалтинг и налоговая безопасность', 'href' => '/konsalting'],
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

<body class="has-site-header has-breadcrumbs page-konsalting-nalogovoe-konsultirovanie">
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