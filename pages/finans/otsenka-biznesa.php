<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Оценка бизнеса';

$pageDescription = 'Оценка бизнеса ООО "Аудит Топ Эксперт": расчет стоимости компании, анализ финансовых показателей, активов, рисков и факторов, влияющих на цену бизнеса.';

$serviceCoverHeroTitle = 'Оценка бизнеса для сделок, суда и управленческих решений';

$serviceCoverHeroLead = 'Определим стоимость бизнеса или доли, проанализируем финансовые показатели, активы, обязательства, прибыльность, денежные потоки и риски. Подготовим понятный результат для собственников, инвесторов, суда, сделки, раздела имущества или внутреннего решения.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Финансовый анализ, расчеты и практические выводы',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно оценим вашу задачу, подскажем, какие данные понадобятся, какой формат результата подойдет и сколько времени займет работа.';

$serviceCoverHeroBgUrl = '/img/audit/finans.webp';

$auditOrderReasonsTitle = 'Когда нужна услуга: оценка бизнеса';

$auditOrderReasonsIntro = [
    'Оценка бизнеса требуется, когда нужно принять финансовое, инвестиционное, судебное или управленческое решение на основе проверенных данных, расчетов и понятных выводов.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'нужно определить стоимость компании или доли перед сделкой',
    'планируется продажа, покупка, вход инвестора или выход участника',
    'требуется финансовое обоснование для суда или переговоров',
    'собственникам нужно понять рыночный ориентир стоимости бизнеса',
    'есть спор о стоимости доли, активов или вклада участника',
    'нужно подготовить независимые расчеты для банка, инвестора или партнера',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает результат оценки бизнеса';

$auditCheckResultsParagraphs = [
    'Результат оценки бизнеса показывает, какие финансовые показатели, предпосылки, активы, обязательства, риски или ограничения влияют на решение и какие выводы можно сделать на основе документов.',
    'По итогам вы получаете понятный отчет, расчет, модель или консультационную позицию, которую можно использовать для руководства, собственников, суда, банка, инвестора или внутреннего контроля.',
];

$auditQuestionsTitle = 'Какие задачи решает оценка бизнеса';

$auditQuestionsIntro = 'Перечень вопросов зависит от цели работы, но чаще всего услуга помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'сколько может стоить бизнес или доля',
    'какие показатели сильнее всего влияют на стоимость',
    'как прибыль, долги и активы отражаются на оценке',
    'какие риски могут снизить цену компании',
    'какой метод оценки подходит для ситуации',
    'насколько цена сделки соответствует финансовым данным',
    'какие документы подтверждают расчет стоимости',
    'как представить выводы для переговоров, суда или инвестора',
];

$auditQuestionsOutro = 'Если говорить простыми словами, услуга помогает перевести разрозненные финансовые данные в понятные выводы и действия.';

$auditServiceTypesTitle = 'Форматы работы';

$auditServiceTypesIntro = 'Оценка бизнеса может быть выполнена в кратком, стандартном или комплексном формате. Выбор зависит от цели, объема данных, срочности и требований к итоговому документу.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'оценка бизнеса целиком',
    'оценка доли в компании',
    'оценка перед продажей или покупкой',
    'оценка для инвестора или партнера',
    'оценка для судебного спора',
    'оценка по финансовой отчетности и управленческим данным',
    'сравнительный и доходный подходы к расчету стоимости',
    'экспресс-оценка стоимости бизнеса',
];

$auditProcessTitle = 'Как проходит оценка бизнеса';

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
    'первичная консультация — от 1 рабочего дня',
    'экспресс-анализ документов — от 2–3 рабочих дней',
    'подготовка отчета или расчета — от 5–10 рабочих дней',
    'комплексная работа с большим объемом данных — по согласованию',
];

$auditDeadlinesOutro = 'Если результат нужен к переговорам, судебному заседанию, сделке, защите проекта или внутреннему совещанию, сообщите дату заранее.';

$auditPricingTitle = 'Стоимость услуги';

$auditPricingIntro = 'Стоимость оценки бизнеса рассчитывается индивидуально и зависит от объема данных, сложности расчетов, срочности, периода анализа и требуемого формата результата.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 3 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы и данные понадобятся';

$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи. Для первичной оценки обычно достаточно направить ключевые материалы и краткое описание ситуации.';

$auditDocumentsNeededItems = [
    'бухгалтерская и управленческая отчетность',
    'данные по выручке, прибыли и денежным потокам',
    'информация об активах и обязательствах',
    'данные по кредитам, займам и задолженности',
    'сведения о структуре бизнеса и долях участников',
    'договоры, влияющие на стоимость бизнеса',
    'информация о клиентах, проектах и направлениях',
    'описание цели оценки и предполагаемой сделки',
];

$auditDocumentsNeededOutro = 'Если часть документов отсутствует, можно начать с доступных данных. После первичного анализа мы подскажем, что действительно нужно дополнить.';

$auditResultsSummaryTitle = 'Что вы получите по итогам оценки бизнеса';

$auditResultsSummaryIntro = 'Итоговый материал должен быть понятен тем, кто принимает решение: руководству, собственникам, инвесторам, банку, суду, юристам или финансовой службе.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'отчет или расчет стоимости бизнеса',
    'описание подхода и ключевых предпосылок',
    'анализ финансовых показателей, влияющих на стоимость',
    'оценку рисков и факторов, снижающих стоимость',
    'выводы для переговоров, суда или собственников',
    'рекомендации по подготовке бизнеса к сделке',
    'понятное обоснование расчетов для заинтересованных сторон',
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

$auditFinalCtaTitle = 'Нужна услуга «Оценка бизнеса»? Начнем с оценки задачи';

$auditFinalCtaText = 'Опишите ситуацию, приложите доступные документы или данные. Мы оценим объем работы, предложим формат результата, сроки и перечень материалов для старта.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/finans.webp';

$auditFaqTitle = 'Частые вопросы: оценка бизнеса';

$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Оценка бизнеса»?',
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
// Оценка активов (имущество, НМА)
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

<body class="has-site-header has-breadcrumbs page-finans-otsenka-biznesa">
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