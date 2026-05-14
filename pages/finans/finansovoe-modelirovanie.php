<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Финансовое моделирование';

$pageDescription = 'Финансовое моделирование ООО "Аудит Топ Эксперт": разработка моделей выручки, расходов, денежных потоков, окупаемости, сценариев и инвестиционных расчетов.';

$serviceCoverHeroTitle = 'Финансовое моделирование для бизнеса и проектов';

$serviceCoverHeroLead = 'Разработаем финансовую модель для бизнеса, инвестиционного проекта, стартапа, сделки или управленческого решения. Рассчитаем выручку, расходы, прибыль, денежные потоки, окупаемость, потребность в финансировании и сценарии развития.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Модель в Excel / Google Sheets',
    'Сценарии, показатели и управленческие выводы',
];

$serviceCoverHeroNote = 'На старте определим цель модели, нужную детализацию, исходные данные, период прогнозирования и формат, который будет удобен для дальнейшего использования.';

$serviceCoverHeroBgUrl = '/img/audit/finans.webp';

$auditOrderReasonsTitle = 'Когда нужно финансовое моделирование';

$auditOrderReasonsIntro = [
    'Финансовое моделирование нужно, когда необходимо заранее просчитать экономику проекта, оценить варианты развития и понять, какие решения влияют на прибыль, окупаемость и денежный поток.',
    'Чаще всего финансовую модель заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'планируется запуск нового проекта, продукта или направления',
    'нужно привлечь инвестиции, кредит или финансирование',
    'требуется оценить окупаемость и потребность в оборотном капитале',
    'компания хочет сравнить несколько сценариев развития',
    'нужно подготовить модель для инвестора, банка, собственников или совета директоров',
    'есть необходимость связать продажи, расходы, налоги, инвестиции и денежные потоки в единую систему',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает финансовая модель';

$auditCheckResultsParagraphs = [
    'Финансовая модель показывает, как меняются выручка, расходы, прибыль, денежный поток и окупаемость при разных сценариях и управленческих предпосылках.',
    'По итогам вы получаете рабочий файл с расчетами, логикой, сценариями и выводами, который помогает оценивать решения до их внедрения.',
];

$auditQuestionsTitle = 'Какие задачи решает финансовое моделирование';

$auditQuestionsIntro = 'Финансовая модель помогает не просто посчитать цифры, а увидеть взаимосвязь между решениями, затратами, продажами и результатом. Чаще всего она отвечает на вопросы:';

$auditQuestionsItems = [
    'какая выручка нужна для безубыточности',
    'когда проект выйдет на окупаемость',
    'сколько денег потребуется на запуск и развитие',
    'как изменится прибыль при росте затрат или снижении продаж',
    'какой сценарий развития наиболее устойчивый',
    'как распределяются инвестиции, расходы и денежные потоки по периодам',
    'какие показатели важно контролировать руководству',
    'какие риски могут повлиять на финансовый результат',
];

$auditQuestionsOutro = 'Если говорить простыми словами, финансовая модель превращает бизнес-план в управляемую систему расчетов, где видно, что будет с деньгами при разных решениях.';

$auditServiceTypesTitle = 'Форматы финансового моделирования';

$auditServiceTypesIntro = 'Финансовая модель может быть простой управленческой таблицей или комплексным инструментом для инвесторов. Формат зависит от цели, данных и глубины прогнозирования.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'финансовая модель действующего бизнеса',
    'модель инвестиционного проекта',
    'модель стартапа или нового направления',
    'модель денежных потоков и кассовых разрывов',
    'модель окупаемости и точки безубыточности',
    'сценарная модель: базовый, оптимистичный и стресс-сценарий',
    'модель для банка, инвестора или презентации собственникам',
    'доработка и проверка существующей финансовой модели',
];

$auditProcessTitle = 'Как проходит финансовое моделирование';

$auditProcessIntro = 'Работа проводится поэтапно: от постановки цели модели до передачи готового файла и пояснений по его использованию.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Постановка задачи',
        'text' => 'Определяем цель модели, пользователей, период прогноза, нужную детализацию и ключевые показатели.',
    ],
    [
        'number' => '02',
        'title' => 'Сбор исходных данных',
        'text' => 'Запрашиваем данные по продажам, расходам, инвестициям, налогам, персоналу, задолженности, финансированию и планам развития.',
    ],
    [
        'number' => '03',
        'title' => 'Проектирование структуры',
        'text' => 'Формируем логику модели: входные параметры, расчетные блоки, сценарии, отчеты и итоговые показатели.',
    ],
    [
        'number' => '04',
        'title' => 'Расчеты и сценарии',
        'text' => 'Собираем модель, рассчитываем выручку, расходы, прибыль, денежные потоки, окупаемость и чувствительность к ключевым параметрам.',
    ],
    [
        'number' => '05',
        'title' => 'Проверка логики',
        'text' => 'Проверяем формулы, взаимосвязи, допущения, корректность сценариев и удобство дальнейшего изменения параметров.',
    ],
    [
        'number' => '06',
        'title' => 'Передача модели',
        'text' => 'Вы получаете рабочую модель, пояснения к расчетам и рекомендации по использованию показателей в управлении или презентации.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки разработки финансовой модели';

$auditDeadlinesIntro = 'Срок зависит от сложности проекта, количества блоков, детализации исходных данных и требований к презентационному формату.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'простая модель проекта — от 3–5 рабочих дней',
    'модель действующего бизнеса — от 5–10 рабочих дней',
    'инвестиционная модель с несколькими сценариями — от 7–15 рабочих дней',
    'сложная модель группы или нескольких направлений — по согласованию',
];

$auditDeadlinesOutro = 'Если модель нужна к переговорам, защите проекта или встрече с инвестором, сообщите дату заранее — мы предложим реалистичный объем работы.';

$auditPricingTitle = 'Стоимость финансового моделирования';

$auditPricingIntro = 'Стоимость зависит от сложности модели, количества сценариев, объема исходных данных, горизонта прогнозирования и требований к визуализации результата.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 5 рабочих дней';

$auditPricingCtaLabel = 'Обсудить модель';

$auditDocumentsNeededTitle = 'Какие данные нужны для финансовой модели';

$auditDocumentsNeededIntro = 'Для разработки модели нужны исходные данные и предпосылки. Полный перечень зависит от проекта, но обычно требуются:';

$auditDocumentsNeededItems = [
    'описание бизнеса, проекта или направления',
    'исторические данные по выручке и продажам',
    'структура расходов и себестоимости',
    'планы по персоналу, аренде, закупкам и инвестициям',
    'налоговые условия и система налогообложения',
    'данные по кредитам, займам и финансированию',
    'планы по ценам, объемам продаж и маржинальности',
    'ожидаемые сценарии развития и ключевые ограничения',
];

$auditDocumentsNeededOutro = 'Если точных данных пока нет, модель можно построить на допущениях. Важно явно зафиксировать предпосылки, чтобы их можно было менять и тестировать.';

$auditResultsSummaryTitle = 'Что вы получите по итогам моделирования';

$auditResultsSummaryIntro = 'Финансовая модель должна быть не просто таблицей, а инструментом для принятия решений и проверки сценариев.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'рабочий файл финансовой модели',
    'расчет выручки, расходов, прибыли и денежных потоков',
    'сценарии развития и анализ чувствительности',
    'расчет окупаемости, точки безубыточности и потребности в финансировании',
    'понятную структуру входных параметров',
    'итоговые таблицы и ключевые показатели',
    'пояснения и рекомендации по использованию модели',
];

$auditResultsSummaryOutro = 'Грамотно собранная модель помогает быстрее отвечать на вопрос: что произойдет с бизнесом, если изменить цену, объем, расходы, сроки или инвестиции.';

$auditMandatoryPrepTitle = 'Есть идея или проект? Начнем с финансовой логики';

$auditMandatoryPrepIntro = 'Перед разработкой модели важно понять, какое решение она должна поддержать: запуск, инвестиции, кредит, продажу бизнеса, управление cash flow или сравнение сценариев.';

$auditMandatoryPrepLead = 'На первичном этапе мы поможем определить:';

$auditMandatoryPrepItems = [
    'какой горизонт прогноза нужен',
    'какие блоки должны быть в модели',
    'какие исходные данные уже есть',
    'какие допущения нужно зафиксировать',
    'какой формат подойдет для инвестора, банка или руководства',
];

$auditMandatoryPrepOutro = 'Чем яснее цель модели, тем удобнее она будет в реальной работе.';

$auditFinalCtaTitle = 'Нужна финансовая модель? Начнем с вводных данных';

$auditFinalCtaText = 'Опишите проект, цель модели и имеющиеся данные. Мы предложим структуру, сроки, формат результата и перечень материалов, которые понадобятся для разработки.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/finans.webp';

$auditFaqTitle = 'Частые вопросы: финансовое моделирование';

$auditFaqItems = [
    [
        'q' => 'Что входит в финансовое моделирование?',
        'a' => 'В работу входит сбор вводных данных, проектирование структуры модели, расчет ключевых показателей, сценарии, проверка логики и передача готового файла.',
    ],
    [
        'q' => 'В каком формате будет модель?',
        'a' => 'Обычно модель готовится в Excel или Google Sheets, чтобы ее можно было использовать, изменять и передавать другим участникам проекта.',
    ],
    [
        'q' => 'Можно ли выполнить работу удаленно?',
        'a' => 'Да, большинство финансовых и консультационных задач можно выполнить удаленно: документы передаются в электронном виде, обсуждения проходят по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Можно ли сделать модель для инвестора?',
        'a' => 'Да, модель можно адаптировать под инвестора: с понятными предпосылками, прогнозом, денежными потоками, окупаемостью и ключевыми метриками.',
    ],
    [
        'q' => 'Можно ли доработать уже существующую модель?',
        'a' => 'Да, можно проверить текущую модель, исправить ошибки, добавить сценарии, улучшить структуру и сделать расчеты понятнее.',
    ],
    [
        'q' => 'Что делать, если нет точных исходных данных?',
        'a' => 'Можно начать с допущений и диапазонов. Важно, чтобы предпосылки были прозрачными и их можно было менять.',
    ],
    [
        'q' => 'Можно ли посчитать несколько сценариев?',
        'a' => 'Да, обычно в модель закладываются базовый, оптимистичный и стресс-сценарий, а также чувствительность к ключевым параметрам.',
    ],
    [
        'q' => 'Вы объясняете, как пользоваться моделью?',
        'a' => 'Да, по итогам можно провести разбор модели и показать, какие параметры менять и как читать результаты.',
    ],
];

// ============================================================
// Оценка бизнеса
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

<body class="has-site-header has-breadcrumbs page-finans-finansovoe-modelirovanie">
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