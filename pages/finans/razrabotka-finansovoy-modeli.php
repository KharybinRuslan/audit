<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Разработка финансовой модели';

$pageDescription = 'Разработка финансовой модели ООО "Аудит Топ Эксперт": построение модели бизнеса, проекта, инвестиций, cash flow, окупаемости и сценариев.';

$serviceCoverHeroTitle = 'Разработка финансовой модели под вашу задачу';

$serviceCoverHeroLead = 'Разработаем финансовую модель под конкретную цель: запуск проекта, инвестиции, кредит, стратегию, продажу бизнеса, управление cash flow или оценку сценариев. Сделаем расчетную структуру понятной, гибкой и пригодной для дальнейшего использования.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Финансовый анализ, расчеты и практические выводы',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно оценим вашу задачу, подскажем, какие данные понадобятся, какой формат результата подойдет и сколько времени займет работа.';

$serviceCoverHeroBgUrl = '/img/audit/finans.webp';

$auditOrderReasonsTitle = 'Когда нужна услуга: разработка финансовой модели';

$auditOrderReasonsIntro = [
    'Разработка финансовой модели требуется, когда нужно принять финансовое, инвестиционное, судебное или управленческое решение на основе проверенных данных, расчетов и понятных выводов.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'нужен рабочий инструмент для прогноза и сценариев',
    'планируется инвестиционный проект, кредит или запуск направления',
    'существующая модель неудобна, не связана или содержит ошибки',
    'руководству нужно управлять cash flow и планом прибыли',
    'требуется модель для инвестора, банка или собственников',
    'нужно связать операционные планы с финансовым результатом',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает результат разработки финансовой модели';

$auditCheckResultsParagraphs = [
    'Результат разработки финансовой модели показывает, какие финансовые показатели, предпосылки, активы, обязательства, риски или ограничения влияют на решение и какие выводы можно сделать на основе документов.',
    'По итогам вы получаете понятный отчет, расчет, модель или консультационную позицию, которую можно использовать для руководства, собственников, суда, банка, инвестора или внутреннего контроля.',
];

$auditQuestionsTitle = 'Какие задачи решает разработка финансовой модели';

$auditQuestionsIntro = 'Перечень вопросов зависит от цели работы, но чаще всего услуга помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'какая структура модели подойдет для задачи',
    'какие предпосылки влияют на результат сильнее всего',
    'как рассчитать выручку, расходы и денежные потоки',
    'как добавить сценарии и чувствительность',
    'какие показатели должны быть на итоговом листе',
    'как сделать модель понятной для инвестора или руководства',
    'как проверить корректность формул и связей',
    'как использовать модель после передачи',
];

$auditQuestionsOutro = 'Если говорить простыми словами, услуга помогает перевести разрозненные финансовые данные в понятные выводы и действия.';

$auditServiceTypesTitle = 'Форматы работы';

$auditServiceTypesIntro = 'Разработка финансовой модели может быть выполнена в кратком, стандартном или комплексном формате. Выбор зависит от цели, объема данных, срочности и требований к итоговому документу.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'модель действующего бизнеса',
    'модель нового проекта или направления',
    'инвестиционная финансовая модель',
    'модель движения денежных средств',
    'модель P&L и управленческого баланса',
    'сценарная модель с параметрами',
    'модель для банка, инвестора или презентации',
    'проверка и доработка существующей модели',
];

$auditProcessTitle = 'Как проходит разработка финансовой модели';

$auditProcessIntro = 'Работа проводится поэтапно: от первичного разбора задачи до передачи итогового материала и пояснений по результатам.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный разбор задачи',
        'text' => 'Вы направляете описание ситуации, цель работы и имеющиеся документы. Мы уточняем ожидаемый результат и формат подготовки материалов.',
    ],
    [
        'number' => '02',
        'title' => 'Сбор и проверка данных',
        'text' => 'Запрашиваем финансовые, учетные, договорные и управленческие данные, проверяем их полноту и достаточность для расчетов.',
    ],
    [
        'number' => '03',
        'title' => 'Структурирование информации',
        'text' => 'Приводим данные к удобному виду, выделяем ключевые периоды, показатели, активы, обязательства, сценарии или спорные участки.',
    ],
    [
        'number' => '04',
        'title' => 'Расчеты и анализ',
        'text' => 'Проводим необходимые расчеты, сравниваем показатели, оцениваем риски, динамику, предпосылки и влияние разных факторов.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование выводов',
        'text' => 'Готовим выводы, рекомендации, таблицы, расчеты или модель в формате, который подходит для вашей цели.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете итоговый документ, расчет, модель или консультацию с пояснениями и возможными дальнейшими шагами.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работы';

$auditDeadlinesIntro = 'Срок зависит от объема документов, качества исходных данных, срочности, детализации расчетов и требований к итоговому материалу.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'простая модель — от 3–5 рабочих дней',
    'модель с несколькими сценариями — от 5–10 рабочих дней',
    'модель для инвестора или банка — от 7–15 рабочих дней',
    'сложная модель с несколькими блоками — по согласованию',
];

$auditDeadlinesOutro = 'Если результат нужен к переговорам, судебному заседанию, сделке, защите проекта или внутреннему совещанию, сообщите дату заранее.';

$auditPricingTitle = 'Стоимость услуги';

$auditPricingIntro = 'Стоимость разработки финансовой модели рассчитывается индивидуально и зависит от объема данных, сложности расчетов, срочности, периода анализа и требуемого формата результата.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 5 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы и данные понадобятся';

$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи. Для первичной оценки обычно достаточно направить ключевые материалы и краткое описание ситуации.';

$auditDocumentsNeededItems = [
    'описание проекта или бизнеса',
    'исторические финансовые данные',
    'планы продаж, цен и объемов',
    'структура расходов и инвестиций',
    'налоговые и операционные предпосылки',
    'данные по финансированию и обязательствам',
    'ожидаемый горизонт прогноза',
    'требования к формату модели и пользователям',
];

$auditDocumentsNeededOutro = 'Если часть документов отсутствует, можно начать с доступных данных. После первичного анализа мы подскажем, что действительно нужно дополнить.';

$auditResultsSummaryTitle = 'Что вы получите по итогам разработки финансовой модели';

$auditResultsSummaryIntro = 'Итоговый материал должен быть понятен тем, кто принимает решение: руководству, собственникам, инвесторам, банку, суду, юристам или финансовой службе.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'готовую финансовую модель',
    'понятные входные параметры и предпосылки',
    'расчет выручки, расходов, прибыли и cash flow',
    'сценарии и анализ чувствительности',
    'итоговые показатели для принятия решений',
    'проверенную структуру формул',
    'пояснения по работе с моделью',
];

$auditResultsSummaryOutro = 'Главная цель результата — помочь принять решение на основе понятных расчетов, проверяемых данных и практических выводов.';

$auditMandatoryPrepTitle = 'Нужно принять решение на основе цифр? Начнем с диагностики';

$auditMandatoryPrepIntro = 'Перед началом важно определить цель: сделка, инвестиции, суд, банк, управление, внутренний контроль или сопровождение финансового учета.';

$auditMandatoryPrepLead = 'На первичном этапе мы поможем определить:';

$auditMandatoryPrepItems = [
    'какой формат результата нужен',
    'какие данные стоит изучить в первую очередь',
    'какой период и какие показатели важны',
    'какие риски уже видны по вводным данным',
    'какие сроки реалистичны для вашей задачи',
];

$auditMandatoryPrepOutro = 'Чем точнее сформулирована цель, тем полезнее будет итоговый документ или модель.';

$auditFinalCtaTitle = 'Нужна услуга «Разработка финансовой модели»? Начнем с оценки задачи';

$auditFinalCtaText = 'Опишите ситуацию, приложите доступные документы или данные. Мы оценим объем работы, предложим формат результата, сроки и перечень материалов для старта.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/finans.webp';

$auditFaqTitle = 'Частые вопросы: разработка финансовой модели';

$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Разработка финансовой модели»?',
        'a' => 'В работу входит анализ задачи и документов, подготовка расчетов, выводов, рекомендаций и итогового материала в формате, подходящем для вашей цели.',
    ],
    [
        'q' => 'Можно ли начать без полного комплекта документов?',
        'a' => 'Да, первичную оценку можно сделать по имеющимся данным. После этого мы подскажем, какие документы нужно добавить для точного результата.',
    ],
    [
        'q' => 'Можно ли выполнить работу удаленно?',
        'a' => 'Да, большинство финансовых и консультационных задач можно выполнить удаленно: документы передаются в электронном виде, обсуждения проходят по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Можно ли получить письменный отчет?',
        'a' => 'Да, по согласованию готовится письменный отчет, расчет, финансовая модель, аналитическая справка или иной документ под вашу задачу.',
    ],
    [
        'q' => 'Подойдет ли результат для суда, банка или инвестора?',
        'a' => 'Да, если такая цель обозначена заранее, структура и язык итогового материала адаптируются под конкретного пользователя.',
    ],
    [
        'q' => 'Можно ли проверить расчеты другой стороны?',
        'a' => 'Да, можно провести независимый анализ представленных расчетов, выявить ошибки, спорные предпосылки и слабые места.',
    ],
    [
        'q' => 'Вы даете рекомендации после анализа?',
        'a' => 'Да, итоговый материал может включать практические рекомендации, дальнейшие шаги и список данных, которые стоит дополнительно проверить.',
    ],
    [
        'q' => 'От чего зависит стоимость?',
        'a' => 'Стоимость зависит от объема документов, сложности расчетов, срочности, периода анализа и формата итогового результата.',
    ],
];

// ============================================================
// Автоматизация финансового учета
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

<body class="has-site-header has-breadcrumbs page-finans-razrabotka-finansovoy-modeli">
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