<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Курсы для бухгалтеров';
$pageDescription = 'Курсы для бухгалтеров: обучение, практика, материалы, кейсы и повышение квалификации для специалистов и корпоративных команд.';

$serviceCoverHeroTitle = 'Курсы для бухгалтеров';
$serviceCoverHeroLead = 'Практические курсы для бухгалтеров, помощников бухгалтеров, главных бухгалтеров и специалистов учетных служб. Разбираем бухгалтерский учет, первичные документы, закрытие периода, отчетность, типовые ошибки и рабочие ситуации, с которыми бухгалтерия сталкивается ежедневно.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Формат — очно или онлайн',
    'Практические материалы, кейсы и ответы на вопросы',
    'Для специалистов, руководителей и корпоративных команд',
];
$serviceCoverHeroNote = 'Предварительно определим уровень участников, цели обучения, нужные темы и формат проведения, чтобы программа была полезна именно под вашу задачу.';
$serviceCoverHeroBgUrl = '/img/audit/obuchenie.webp';

$auditOrderReasonsTitle = 'Когда нужно обучение по направлению «Курсы для бухгалтеров»';
$auditOrderReasonsIntro = [
    'Обучение по направлению «Курсы для бухгалтеров» нужно, если бухгалтерии нужно систематизировать знания, снизить количество ошибок, быстро обучить новых сотрудников или подготовить команду к более сложным задачам.',
    'Такой формат особенно востребован в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'нужно повысить квалификацию сотрудников',
    'команда сталкивается с новыми требованиями или задачами',
    'важно снизить количество ошибок в работе',
    'требуется единый подход внутри подразделения',
    'нужно разобрать практические кейсы и сложные ситуации',
    'руководству важно получить измеримый результат обучения',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что дает обучение';
$auditCheckResultsParagraphs = [
    'Обучение помогает участникам системно разобраться в теме, увидеть типовые ошибки, понять актуальную практику и получить понятные алгоритмы действий.',
    'По итогам участники получают материалы, чек-листы, примеры и рекомендации, которые можно применять в работе сразу после обучения.',
];

$auditQuestionsTitle = 'Какие задачи решает обучение';
$auditQuestionsIntro = 'Программа помогает закрыть практические пробелы и выстроить единый подход к работе:';
$auditQuestionsItems = [
    'систематизировать знания участников',
    'разобрать актуальные требования и практику',
    'отработать типовые рабочие ситуации',
    'снизить количество повторяющихся ошибок',
    'подготовить сотрудников к новым задачам',
    'сформировать единый подход внутри команды',
    'дать участникам практические материалы и чек-листы',
    'ответить на вопросы, которые возникают в ежедневной работе',
];
$auditQuestionsOutro = 'Главная цель обучения — не просто дать теорию, а помочь участникам применять знания в реальных рабочих ситуациях.';

$auditServiceTypesTitle = 'Форматы обучения';
$auditServiceTypesIntro = 'Программу можно собрать под разный уровень подготовки, количество участников, сроки и задачи компании.';
$auditServiceTypesLead = 'Возможные форматы:';
$auditServiceTypesItems = [
    'бухгалтерский учет и первичные документы',
    'закрытие периода и отчетность',
    'исправление ошибок в учете',
    'учет отдельных операций',
    'документооборот и контроль первички',
    'практические кейсы для бухгалтерии',
    'повышение квалификации бухгалтеров',
    'корпоративное обучение учетной команды',
];

$auditProcessTitle = 'Как проходит обучение по направлению «Курсы для бухгалтеров»';
$auditProcessIntro = 'Обучение строится по понятной схеме: от определения задачи до проведения занятий, практической отработки и передачи материалов.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичная консультация',
        'text' => 'Вы описываете задачу, уровень подготовки участников и желаемый результат. Мы определяем, какой формат обучения по направлению «Курсы для бухгалтеров» подойдет лучше всего.',
    ],
    [
        'number' => '02',
        'title' => 'Определение программы',
        'text' => 'Согласуем темы, продолжительность, глубину разбора, практические задания и акценты: учет, первичные документы, отчетность, закрытие периода, ошибки и практические ситуации.',
    ],
    [
        'number' => '03',
        'title' => 'Подготовка материалов',
        'text' => 'Готовим структуру занятий, презентации, методические материалы, примеры, тесты, чек-листы и практические кейсы.',
    ],
    [
        'number' => '04',
        'title' => 'Проведение обучения',
        'text' => 'Проводим занятия в согласованном формате: очно, онлайн, в виде вебинара, курса, практикума или корпоративной программы.',
    ],
    [
        'number' => '05',
        'title' => 'Практическая отработка',
        'text' => 'Разбираем реальные ситуации, типовые ошибки, вопросы участников и применимость материала в ежедневной работе.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Участники получают материалы, рекомендации, ответы на вопросы и понимание дальнейших шагов для применения знаний на практике.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки и формат обучения';
$auditDeadlinesIntro = 'Срок и продолжительность зависят от программы, уровня участников, количества тем, практических заданий и выбранного формата обучения.';
$auditDeadlinesLead = 'Ориентировочные форматы:';
$auditDeadlinesItems = [
    'разовый вебинар — от 1–2 часов',
    'практический семинар — от 1 дня',
    'короткий курс — от 2–4 занятий',
    'корпоративная или сертификационная программа — по согласованному графику',
];
$auditDeadlinesOutro = 'Если обучение нужно провести в конкретные даты, сообщите желаемый график — мы подскажем, какой формат можно подготовить под вашу задачу.';

$auditPricingTitle = 'Стоимость обучения';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от темы, продолжительности, количества участников, формата проведения, глубины практики и необходимости адаптации программы под компанию.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 1 занятия';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Что нужно для подготовки обучения';
$auditDocumentsNeededIntro = 'Для подготовки программы не всегда нужны документы, но для точной адаптации обучения полезно заранее направить:';
$auditDocumentsNeededItems = [
    'цели обучения и желаемый результат',
    'уровень подготовки участников',
    'количество участников',
    'перечень тем и вопросов для разбора',
    'типовые ошибки или сложные ситуации',
    'отраслевые особенности компании',
    'примеры кейсов или документов без конфиденциальных данных',
    'предпочтительный формат и график обучения',
];
$auditDocumentsNeededOutro = 'Если вы пока не знаете, какой формат выбрать, достаточно кратко описать задачу и уровень участников — после этого можно определить структуру программы.';

$auditResultsSummaryTitle = 'Что получат участники по итогам обучения';
$auditResultsSummaryIntro = 'По итогам обучения участники получают не только теоретическую базу, но и практические ориентиры, которые можно применять в работе.';
$auditResultsSummaryLead = 'Участники получат:';
$auditResultsSummaryItems = [
    'структурированное понимание темы',
    'практические алгоритмы действий',
    'презентации и методические материалы',
    'чек-листы, примеры и полезные шаблоны',
    'разбор типовых ошибок и кейсов',
    'ответы на вопросы участников',
    'рекомендации по дальнейшему применению знаний',
];
$auditResultsSummaryOutro = 'Обучение должно быть полезно не только для формального повышения квалификации, но и для ежедневной работы специалистов, руководителей и команд.';

$auditMandatoryPrepTitle = 'Нужно адаптировать обучение под вашу задачу?';
$auditMandatoryPrepIntro = 'Перед запуском важно определить уровень участников, темы, практические вопросы и ожидаемый результат. Это помогает сделать обучение прикладным, а не формальным.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какой формат обучения подойдет',
    'какие темы включить в программу',
    'какие практические задания подготовить',
    'какие вопросы собрать заранее',
    'как оценить результат обучения',
];
$auditMandatoryPrepOutro = 'Чем точнее сформулирована задача, тем полезнее будет программа для участников и компании.';

$auditFinalCtaTitle = 'Нужно обучение по направлению «Курсы для бухгалтеров»?';
$auditFinalCtaText = 'Опишите задачу, количество участников, уровень подготовки и желаемый формат. Мы подскажем, какую программу лучше подготовить и какие темы включить.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/obuchenie.webp';

$auditFaqTitle = 'Частые вопросы по обучению «Курсы для бухгалтеров»';
$auditFaqItems = [
    [
        'q' => 'Кому подойдет обучение «Курсы для бухгалтеров»?',
        'a' => 'Обучение подойдет бухгалтерам, помощникам бухгалтеров, главным бухгалтерам, специалистам учетных служб и компаниям, которым нужно повысить квалификацию бухгалтерии.',
    ],
    [
        'q' => 'Можно ли провести обучение онлайн?',
        'a' => 'Да, обучение можно провести онлайн, очно или в смешанном формате. Для корпоративных программ формат подбирается под график команды и задачи компании.',
    ],
    [
        'q' => 'Можно ли адаптировать программу под компанию?',
        'a' => 'Да, программу можно адаптировать под отрасль, уровень участников, внутренние процессы, реальные кейсы и вопросы, которые возникают в работе.',
    ],
    [
        'q' => 'Сколько длится обучение?',
        'a' => 'Продолжительность зависит от программы и глубины разбора. Это может быть короткий вебинар, практический семинар, курс на несколько занятий или комплексная корпоративная программа.',
    ],
    [
        'q' => 'Будет ли практика?',
        'a' => 'Да, в программу можно включить практические задания, разбор кейсов, тестирование, чек-листы, примеры документов и ответы на вопросы участников.',
    ],
    [
        'q' => 'Какие материалы получают участники?',
        'a' => 'Обычно участники получают презентации, методические материалы, чек-листы, примеры, практические задания и рекомендации по применению знаний.',
    ],
    [
        'q' => 'Можно ли обучить сотрудников разного уровня?',
        'a' => 'Да, программу можно разделить на базовый и продвинутый уровни или подготовить отдельные блоки для специалистов, руководителей и смежных подразделений.',
    ],
    [
        'q' => 'Что нужно для запуска обучения?',
        'a' => 'Для старта достаточно описать задачу, количество участников, уровень подготовки, желаемые темы и формат. После этого можно собрать программу и определить график.',
    ],
];



// ==============================
// Курсы по налогам
// ==============================


$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Обучение и академия HSEP', 'href' => '/hsep'],
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

<body class="has-site-header has-breadcrumbs page-hsep-kursy-dlya-buhgalterov">
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