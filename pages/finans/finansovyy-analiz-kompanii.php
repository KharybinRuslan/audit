<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Финансовый анализ компании';

$pageDescription = 'Финансовый анализ компании ООО "Аудит Топ Эксперт": оценка показателей, рентабельности, ликвидности, долговой нагрузки и финансовых рисков бизнеса.';

$serviceCoverHeroTitle = 'Финансовый анализ компании для управленческих решений';

$serviceCoverHeroLead = 'Проведем независимый финансовый анализ компании, оценим выручку, прибыльность, ликвидность, долговую нагрузку, денежные потоки и ключевые риски. Поможем понять реальное финансовое состояние бизнеса, найти слабые места и подготовить выводы для собственников, руководства, банка, инвестора или суда.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Анализ отчетности, показателей и денежных потоков',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно оценим задачу, подскажем, какие документы нужны для анализа, какой формат отчета подойдет и какие выводы можно получить по итогам работы.';

$serviceCoverHeroBgUrl = '/img/audit/finans.webp';

$auditOrderReasonsTitle = 'Когда нужен финансовый анализ компании';

$auditOrderReasonsIntro = [
    'Финансовый анализ нужен, когда компании важно понять фактическое состояние бизнеса, оценить устойчивость, прибыльность, платежеспособность и риски перед важными решениями.',
    'Чаще всего финансовый анализ заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'собственникам нужна независимая оценка состояния бизнеса',
    'компания готовится к сделке, кредитованию, продаже или привлечению инвестиций',
    'есть сомнения в прибыльности, ликвидности или долговой нагрузке',
    'нужно выявить причины кассовых разрывов, падения маржинальности или роста расходов',
    'требуется подготовить финансовые выводы для банка, инвестора, суда или руководства',
    'необходимо сравнить динамику показателей за несколько периодов',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает финансовый анализ';

$auditCheckResultsParagraphs = [
    'Финансовый анализ показывает, насколько компания устойчива, прибыльна и платежеспособна, какие показатели влияют на результат и где находятся основные зоны риска.',
    'По итогам работы вы получаете отчет с расчетами, выводами и рекомендациями. Его можно использовать для управленческих решений, переговоров с инвесторами, банков, суда, собственников или внутреннего контроля.',
];

$auditQuestionsTitle = 'Какие задачи решает финансовый анализ компании';

$auditQuestionsIntro = 'Перечень вопросов зависит от цели анализа, но чаще всего финансовый анализ помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'насколько компания финансово устойчива',
    'достаточно ли у бизнеса ликвидности для исполнения обязательств',
    'какие направления или статьи формируют прибыль и убытки',
    'есть ли риск кассовых разрывов или роста долговой нагрузки',
    'как меняются выручка, маржинальность, расходы и чистая прибыль',
    'насколько эффективно используются активы и оборотный капитал',
    'какие показатели требуют контроля или корректировки',
    'какие управленческие решения могут улучшить финансовый результат',
];

$auditQuestionsOutro = 'Если говорить простыми словами, финансовый анализ помогает увидеть бизнес в цифрах: что реально приносит результат, где теряются деньги и какие решения нужно принять в первую очередь.';

$auditServiceTypesTitle = 'Форматы финансового анализа';

$auditServiceTypesIntro = 'Финансовый анализ может быть обзорным или комплексным. Формат зависит от цели, периода, количества документов и того, нужен ли краткий вывод или подробный отчет.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'экспресс-анализ финансового состояния',
    'анализ бухгалтерской и управленческой отчетности',
    'анализ ликвидности и платежеспособности',
    'анализ рентабельности, маржинальности и затрат',
    'анализ денежных потоков и кассовых разрывов',
    'анализ долговой нагрузки и финансовой устойчивости',
    'сравнение показателей по периодам',
    'подготовка финансового отчета для собственников, банков, инвесторов или суда',
];

$auditProcessTitle = 'Как проводится финансовый анализ компании';

$auditProcessIntro = 'Работа строится по понятной схеме: от определения цели анализа до передачи отчета с выводами и рекомендациями.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичная оценка задачи',
        'text' => 'Вы направляете описание ситуации, цель анализа и доступные документы. Мы определяем, какие показатели нужно рассчитать и какой формат результата подойдет.',
    ],
    [
        'number' => '02',
        'title' => 'Сбор финансовых данных',
        'text' => 'Запрашиваются бухгалтерская и управленческая отчетность, оборотно-сальдовые ведомости, данные по выручке, расходам, обязательствам и денежным потокам.',
    ],
    [
        'number' => '03',
        'title' => 'Проверка и структурирование данных',
        'text' => 'Финансовые данные приводятся к сопоставимому виду, выделяются ключевые статьи, периоды, направления бизнеса и показатели для анализа.',
    ],
    [
        'number' => '04',
        'title' => 'Расчет показателей',
        'text' => 'Рассчитываются показатели ликвидности, рентабельности, финансовой устойчивости, оборачиваемости, долговой нагрузки и динамики результатов.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование выводов',
        'text' => 'Определяются сильные и слабые стороны финансового состояния, причины отклонений, риски и возможные управленческие действия.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет, таблицы, выводы и рекомендации, которые можно использовать для руководства, собственников, инвесторов, банка или суда.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки финансового анализа';

$auditDeadlinesIntro = 'Срок зависит от объема документов, количества периодов, детализации учета и цели анализа. Небольшие задачи можно выполнить быстро, комплексная проверка требует индивидуальной оценки.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'экспресс-анализ — от 1–3 рабочих дней',
    'анализ стандартного комплекта отчетности — от 3–5 рабочих дней',
    'подробный финансовый отчет — от 5–10 рабочих дней',
    'комплексный анализ группы компаний — по согласованию',
];

$auditDeadlinesOutro = 'Если отчет нужен к конкретной дате, сообщите срок заранее — мы предложим реалистичный объем анализа под ваш дедлайн.';

$auditPricingTitle = 'Стоимость финансового анализа компании';

$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема данных, количества периодов, детализации отчета, срочности и необходимости презентации результатов.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 3 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы нужны для финансового анализа';

$auditDocumentsNeededIntro = 'Точный перечень зависит от цели анализа. Для первичной оценки обычно подходят следующие материалы:';

$auditDocumentsNeededItems = [
    'бухгалтерская отчетность за анализируемый период',
    'управленческая отчетность, если ведется отдельно',
    'оборотно-сальдовые ведомости и расшифровки ключевых счетов',
    'данные по выручке, расходам и себестоимости',
    'информация о дебиторской и кредиторской задолженности',
    'данные по кредитам, займам и обязательствам',
    'банковские выписки и данные о денежных потоках',
    'пояснения по структуре бизнеса, направлениям и нестандартным операциям',
];

$auditDocumentsNeededOutro = 'Если часть данных отсутствует, анализ можно начать с доступной отчетности. После первичного изучения мы подскажем, какие сведения стоит дополнить.';

$auditResultsSummaryTitle = 'Что вы получите по итогам финансового анализа';

$auditResultsSummaryIntro = 'Итоговый результат должен быть понятен не только финансисту, но и собственнику, руководителю, юристу, банку или инвестору.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'финансовый отчет с расчетами и выводами',
    'анализ ключевых финансовых показателей',
    'оценку ликвидности, устойчивости и платежеспособности',
    'выявление рисков, слабых мест и причин отклонений',
    'рекомендации по улучшению финансового состояния',
    'таблицы и расшифровки для внутреннего использования',
    'независимую позицию для переговоров, суда, банка или инвестора',
];

$auditResultsSummaryOutro = 'Финансовый анализ помогает принимать решения не на ощущениях, а на цифрах, которые показывают реальное состояние бизнеса.';

$auditMandatoryPrepTitle = 'Нужно понять состояние компании? Начнем с диагностики';

$auditMandatoryPrepIntro = 'Перед финансовым анализом важно определить цель: управленческое решение, сделка, банк, суд, инвестор или внутренний контроль. От этого зависит состав данных и глубина проверки.';

$auditMandatoryPrepLead = 'На первичном этапе мы поможем определить:';

$auditMandatoryPrepItems = [
    'какой период и какие показатели нужно анализировать',
    'какие документы понадобятся в первую очередь',
    'нужен ли краткий вывод или подробный отчет',
    'какие риски уже видны по исходным данным',
    'какой формат результата подойдет для вашей цели',
];

$auditMandatoryPrepOutro = 'Чем точнее сформулирована цель анализа, тем полезнее будет итоговый отчет для принятия решений.';

$auditFinalCtaTitle = 'Нужен финансовый анализ компании? Начнем с оценки данных';

$auditFinalCtaText = 'Отправьте отчетность, управленческие данные или краткое описание задачи. Мы оценим объем работы, предложим формат анализа, сроки и результат, который вы получите по итогам.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/finans.webp';

$auditFaqTitle = 'Частые вопросы: финансовый анализ компании';

$auditFaqItems = [
    [
        'q' => 'Что входит в финансовый анализ компании?',
        'a' => 'В работу входит изучение отчетности, расчет финансовых показателей, анализ динамики, выявление рисков, подготовка выводов и рекомендаций.',
    ],
    [
        'q' => 'Можно ли сделать анализ только по бухгалтерской отчетности?',
        'a' => 'Да, базовый анализ можно провести по бухгалтерской отчетности. Для более точных выводов желательно дополнить ее управленческими данными и расшифровками.',
    ],
    [
        'q' => 'Можно ли выполнить работу удаленно?',
        'a' => 'Да, большинство финансовых и консультационных задач можно выполнить удаленно: документы передаются в электронном виде, обсуждения проходят по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Подойдет ли отчет для банка или инвестора?',
        'a' => 'Да, при постановке задачи можно подготовить отчет в формате, удобном для банка, инвестора, собственников или другой заинтересованной стороны.',
    ],
    [
        'q' => 'Можно ли анализировать несколько периодов?',
        'a' => 'Да, сравнение нескольких периодов обычно делает выводы точнее: видно динамику, сезонность, рост расходов и изменения финансовой устойчивости.',
    ],
    [
        'q' => 'Можно ли выявить причины убытков?',
        'a' => 'Да, анализ помогает определить, какие статьи расходов, направления, задолженность или управленческие решения могли повлиять на убыток.',
    ],
    [
        'q' => 'Нужна ли управленческая отчетность?',
        'a' => 'Она желательна, если нужно глубоко понять прибыльность направлений, проектов или продуктов. Но начать можно с доступных данных.',
    ],
    [
        'q' => 'Можно ли получить рекомендации после отчета?',
        'a' => 'Да, по итогам анализа можно подготовить практические рекомендации и план дальнейших действий.',
    ],
];

// ============================================================
// Финансовое моделирование
// ============================================================

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Финансовый консалтинг и оценка', 'href' => '/finans'],
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

<body class="has-site-header has-breadcrumbs page-finans-finansovyy-analiz-kompanii">
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