<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Ликвидация и реорганизация';
$pageDescription = 'Ликвидация, реорганизация, документы и риски: оценить состояние компании, выбрать способ ликвидации или реорганизации, рекомендации и сопровождение.';

$serviceCoverHeroTitle = 'Ликвидация и реорганизация';
$serviceCoverHeroLead = 'Поможем решить задачу по направлению «Ликвидация и реорганизация»: проведем анализ ситуации, изучим документы, выявим риски, подготовим рекомендации и практический план действий. Учитываем цели бизнеса, сроки, документы и возможные последствия для компании.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — зависит от процедуры',
    'Ликвидация, реорганизация, документы и риски',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим вашу задачу, подскажем подходящий формат работы, какие документы понадобятся и какой результат можно получить.';
$serviceCoverHeroBgUrl = '/img/audit/konsalting2.webp';

$auditOrderReasonsTitle = 'В каких случаях заказывают услугу «Ликвидация и реорганизация»';
$auditOrderReasonsIntro = [
    'Услуга «Ликвидация и реорганизация» нужна, когда компании важно получить независимую оценку ситуации, подготовить документы, снизить риски или выстроить понятный порядок дальнейших действий.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'компания фактически не ведет деятельность',
    'собственники решили закрыть юридическое лицо',
    'нужно объединить или разделить бизнес',
    'требуется изменить структуру группы компаний',
    'есть налоговые или кадровые вопросы',
    'необходимо пройти процедуру без лишних рисков',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает работа по услуге «Ликвидация и реорганизация»';
$auditCheckResultsParagraphs = [
    'Работа по направлению «Ликвидация и реорганизация» помогает увидеть текущее состояние вопроса, выявить риски, слабые места, спорные участки и варианты решения.',
    'По итогам вы получаете практический результат: выводы, рекомендации, документы, расчеты или план действий, который можно использовать для управления, переговоров, проверок, сделок или внутренней работы.',
];

$auditQuestionsTitle = 'Какие задачи решает услуга «Ликвидация и реорганизация»';
$auditQuestionsIntro = 'Перечень задач зависит от цели обращения, но чаще всего услуга помогает решить следующие вопросы:';
$auditQuestionsItems = [
    'оценить состояние компании',
    'выбрать способ ликвидации или реорганизации',
    'подготовить корпоративные документы',
    'проверить отчетность и обязательства',
    'учесть налоговые и кадровые последствия',
    'сопроводить уведомления',
    'снизить риск отказов и претензий',
    'закрыть процедуру в установленном порядке',
];
$auditQuestionsOutro = 'Если говорить простыми словами, услуга помогает перейти от неопределенности и разрозненных документов к понятному решению и дальнейшему плану действий.';

$auditServiceTypesTitle = 'Форматы работы';
$auditServiceTypesIntro = 'Формат работы зависит от размера бизнеса, цели обращения, объема документов, срочности и требуемой глубины анализа.';
$auditServiceTypesLead = 'К основным форматам относятся:';
$auditServiceTypesItems = [
    'консультация по выбору процедуры',
    'предварительная проверка компании',
    'добровольная ликвидация',
    'сопровождение реорганизации',
    'подготовка решений и уведомлений',
    'проверка налоговых вопросов',
    'кадровое сопровождение',
    'контроль этапов и сроков',
];

$auditProcessTitle = 'Как проводится работа';
$auditProcessIntro = 'Порядок работы зависит от задачи, но обычно процесс проходит по понятной схеме.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ задачи',
        'text' => 'Вы направляете описание ситуации, цель обращения и имеющиеся документы. Мы уточняем контекст, ожидаемый результат и возможные ограничения.',
    ],
    [
        'number' => '02',
        'title' => 'Определение объема работ',
        'text' => 'Согласуем перечень вопросов, документов, участников процесса, сроки и формат итогового результата.',
    ],
    [
        'number' => '03',
        'title' => 'Изучение материалов',
        'text' => 'Анализируем документы, данные учета, договоры, внутренние регламенты, отчеты и дополнительные пояснения по ситуации.',
    ],
    [
        'number' => '04',
        'title' => 'Выявление рисков и решений',
        'text' => 'Определяем проблемные зоны, возможные последствия, варианты действий и практические способы снижения рисков.',
    ],
    [
        'number' => '05',
        'title' => 'Подготовка выводов',
        'text' => 'Формируем рекомендации, документы, расчеты, план действий или иную итоговую позицию в зависимости от задачи.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете итоговые материалы, которые можно использовать для управления, переговоров, регистрации, проверки, сделки или внутренней работы.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работ';
$auditDeadlinesIntro = 'Срок зависит от объема документов, сложности задачи, количества участников, доступности информации и формата итогового результата.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'первичная консультация — от 1 рабочего дня',
    'экспресс-анализ документов — от 1–3 рабочих дней',
    'стандартная задача — от 3–7 рабочих дней',
    'комплексное сопровождение — по согласованию',
];
$auditDeadlinesOutro = 'Если задача срочная, сообщите желаемый срок — мы подскажем, какой формат работы можно выполнить в первую очередь.';

$auditPricingTitle = 'Стоимость услуги';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема работ, количества документов, сложности ситуации, срочности и необходимости дальнейшего сопровождения.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 3 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для работы';
$auditDocumentsNeededIntro = 'Полный перечень документов зависит от задачи, но для первичной оценки обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'учредительные документы',
    'сведения об участниках и руководителе',
    'бухгалтерская и налоговая отчетность',
    'данные о долгах и обязательствах',
    'информация о сотрудниках',
    'договоры с контрагентами',
    'данные об активах',
    'сведения о спорах',
];
$auditDocumentsNeededOutro = 'Если полного комплекта документов пока нет, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';
$auditResultsSummaryIntro = 'По итогам работы вы получаете понятный практический результат, который помогает принять решение, снизить риски или организовать дальнейшие действия.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'план ликвидации или реорганизации',
    'подготовленные корпоративные документы',
    'перечень рисков и действий',
    'сопровождение регистрационных этапов',
    'рекомендации по налоговым вопросам',
    'контроль сроков и документов',
    'итоговые материалы',
];
$auditResultsSummaryOutro = 'Итоговый документ должен быть полезен не только профильному специалисту, но и руководителю, собственнику, бухгалтеру, юристу или финансовому директору.';

$auditMandatoryPrepTitle = 'Нужно подготовиться к услуге «Ликвидация и реорганизация»?';
$auditMandatoryPrepIntro = 'Перед началом работы важно правильно определить цель обращения, перечень документов, ожидаемый результат и возможные ограничения.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какой формат работы подойдет именно вам',
    'какие документы нужны в первую очередь',
    'какие риски требуют отдельного внимания',
    'какой результат будет полезен руководству',
    'какие действия стоит выполнить после завершения работы',
];
$auditMandatoryPrepOutro = 'Чем точнее сформулирована задача, тем быстрее можно подготовить полезный и применимый результат.';

$auditFinalCtaTitle = 'Нужна услуга «Ликвидация и реорганизация»? Начнем с оценки вашей ситуации';
$auditFinalCtaText = 'Отправьте краткое описание задачи, документы или список вопросов. Мы подскажем, какой формат работы подойдет, какие материалы понадобятся и какой результат вы получите.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/konsalting2.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Ликвидация и реорганизация»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Ликвидация и реорганизация»?',
        'a' => 'Состав работ зависит от задачи. Обычно услуга включает первичный анализ ситуации, изучение документов, выявление рисков, подготовку рекомендаций, документов или плана действий.',
    ],
    [
        'q' => 'Можно ли начать с консультации?',
        'a' => 'Да, работу можно начать с консультации. Это помогает быстро определить проблему, объем документов, возможные риски и подходящий формат сопровождения.',
    ],
    [
        'q' => 'Сколько времени занимает работа?',
        'a' => 'Срок зависит от объема документов, сложности ситуации, количества участников и требуемого результата.',
    ],
    [
        'q' => 'Какие документы нужны для начала?',
        'a' => 'Обычно нужны учредительные документы, сведения об участниках и руководителе, бухгалтерская и налоговая отчетность, данные о долгах и обязательствах, информация о сотрудниках. Полный перечень зависит от задачи и уточняется после первичного анализа.',
    ],
    [
        'q' => 'Можно ли работать удаленно?',
        'a' => 'Да, во многих случаях работа проводится удаленно: документы передаются в электронном виде, обсуждения проходят онлайн, итоговые материалы направляются в согласованном формате.',
    ],
    [
        'q' => 'Что будет по итогам работы?',
        'a' => 'По итогам вы получите план ликвидации или реорганизации, подготовленные корпоративные документы, перечень рисков и действий, понятные выводы, рекомендации и перечень дальнейших действий.',
    ],
    [
        'q' => 'Можно ли заказать только часть работ?',
        'a' => 'Да, можно заказать как комплексное сопровождение, так и отдельную консультацию, проверку документов, подготовку конкретного документа или анализ отдельного вопроса.',
    ],
    [
        'q' => 'Для кого подходит услуга?',
        'a' => 'Услуга подходит собственникам, руководителям, финансовым директорам, бухгалтерам, юристам и компаниям, которым нужен независимый взгляд на ситуацию.',
    ],
];



// ==============================
// Услуги по инвентаризации имущества
// ==============================


$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Консалтинг и сопровождение бизнеса', 'href' => '/biznes-konsalting'],
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

<body class="has-site-header has-breadcrumbs page-biznes-konsalting-likvidatsiya-i-reorganizatsiya">
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