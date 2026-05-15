<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Предоставление финансовых отчётов для судов';

$pageDescription = 'Финансовые отчеты для судов ООО "Аудит Топ Эксперт": подготовка расчетов, аналитических таблиц, финансовых выводов и пояснений для судебных споров.';

$serviceCoverHeroTitle = 'Финансовые отчёты и расчеты для судов';

$serviceCoverHeroLead = 'Подготовим финансовые отчеты, расчеты, аналитические таблицы и пояснения для судебного спора. Поможем структурировать данные, показать финансовые последствия, обосновать позицию и представить цифры в понятном для суда виде.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Финансовый анализ, расчеты и практические выводы',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно оценим вашу задачу, подскажем, какие данные понадобятся, какой формат результата подойдет и сколько времени займет работа.';

$serviceCoverHeroBgUrl = '/img/audit/finans.webp';

$auditOrderReasonsTitle = 'Когда нужна услуга: предоставление финансовых отчётов для судов';

$auditOrderReasonsIntro = [
    'Предоставление финансовых отчётов для судов требуется, когда нужно принять финансовое, инвестиционное, судебное или управленческое решение на основе проверенных данных, расчетов и понятных выводов.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'в судебном споре нужно обосновать финансовые последствия',
    'требуется расчет задолженности, убытков, потерь или стоимости',
    'нужно представить финансовые данные в понятном для суда формате',
    'есть спор между участниками, контрагентами, собственниками или подрядчиками',
    'необходимо проверить расчеты другой стороны',
    'юристам нужен структурированный финансовый материал для позиции',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает результат подготовки финансовых отчетов для суда';

$auditCheckResultsParagraphs = [
    'Результат подготовки финансовых отчетов для суда показывает, какие финансовые показатели, предпосылки, активы, обязательства, риски или ограничения влияют на решение и какие выводы можно сделать на основе документов.',
    'По итогам вы получаете понятный отчет, расчет, модель или консультационную позицию, которую можно использовать для руководства, собственников, суда, банка, инвестора или внутреннего контроля.',
];

$auditQuestionsTitle = 'Какие задачи решает предоставление финансовых отчётов для судов';

$auditQuestionsIntro = 'Перечень вопросов зависит от цели работы, но чаще всего услуга помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'какие финансовые показатели важны для спора',
    'как корректно рассчитать задолженность, убытки или потери',
    'какие документы подтверждают расчет',
    'есть ли ошибки в расчетах другой стороны',
    'как представить финансовые данные понятно и логично',
    'какие периоды и операции нужно включить в анализ',
    'какие выводы можно сделать на основе документов',
    'какой формат отчета подойдет для суда и юристов',
];

$auditQuestionsOutro = 'Если говорить простыми словами, услуга помогает перевести разрозненные финансовые данные в понятные выводы и действия.';

$auditServiceTypesTitle = 'Форматы работы';

$auditServiceTypesIntro = 'Предоставление финансовых отчётов для судов может быть выполнена в кратком, стандартном или комплексном формате. Выбор зависит от цели, объема данных, срочности и требований к итоговому документу.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'финансовый отчет для судебного спора',
    'расчет задолженности и обязательств',
    'расчет убытков и финансовых последствий',
    'анализ расчетов другой стороны',
    'таблицы и пояснения для исковых материалов',
    'финансовые выводы по договорным отношениям',
    'подготовка приложений и расшифровок',
    'консультация юристов по финансовым данным',
];

$auditProcessTitle = 'Как проходит предоставление финансовых отчётов для судов';

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
    'первичный разбор материалов — от 1–2 рабочих дней',
    'подготовка простого расчета — от 3–5 рабочих дней',
    'финансовый отчет для суда — от 5–10 рабочих дней',
    'сложные споры с большим объемом данных — по согласованию',
];

$auditDeadlinesOutro = 'Если результат нужен к переговорам, судебному заседанию, сделке, защите проекта или внутреннему совещанию, сообщите дату заранее.';

$auditPricingTitle = 'Стоимость услуги';

$auditPricingIntro = 'Стоимость подготовки финансовых отчетов для суда рассчитывается индивидуально и зависит от объема данных, сложности расчетов, срочности, периода анализа и требуемого формата результата.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 3 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы и данные понадобятся';

$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи. Для первичной оценки обычно достаточно направить ключевые материалы и краткое описание ситуации.';

$auditDocumentsNeededItems = [
    'исковые материалы или описание предмета спора',
    'договоры, акты, счета, УПД и накладные',
    'платежные документы и банковские выписки',
    'акты сверки и переписка сторон',
    'бухгалтерские регистры и карточки счетов',
    'расчеты, представленные другой стороной',
    'судебные вопросы или требования к отчету',
    'пояснения юристов по правовой позиции',
];

$auditDocumentsNeededOutro = 'Если часть документов отсутствует, можно начать с доступных данных. После первичного анализа мы подскажем, что действительно нужно дополнить.';

$auditResultsSummaryTitle = 'Что вы получите по итогам подготовки финансовых отчетов для суда';

$auditResultsSummaryIntro = 'Итоговый материал должен быть понятен тем, кто принимает решение: руководству, собственникам, инвесторам, банку, суду, юристам или финансовой службе.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'финансовый отчет или расчет для суда',
    'аналитические таблицы и расшифровки',
    'пояснения к методике расчета',
    'выявление ошибок или спорных мест в данных',
    'выводы, понятные юристам и суду',
    'перечень документов, подтверждающих расчет',
    'материалы для использования в позиции по спору',
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

$auditFinalCtaTitle = 'Нужна услуга «Предоставление финансовых отчётов для судов»? Начнем с оценки задачи';

$auditFinalCtaText = 'Опишите ситуацию, приложите доступные документы или данные. Мы оценим объем работы, предложим формат результата, сроки и перечень материалов для старта.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/finans.webp';

$auditFaqTitle = 'Частые вопросы: предоставление финансовых отчётов для судов';

$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Предоставление финансовых отчётов для судов»?',
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
// Финансовый анализ компании для пользователей
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

<body class="has-site-header has-breadcrumbs page-finans-finansovye-otchety-dlya-sudov">
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