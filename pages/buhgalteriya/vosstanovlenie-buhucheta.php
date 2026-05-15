<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Восстановление бухгалтерского учета';

$pageDescription = 'Восстановление бухгалтерского учета ООО "Аудит Топ Эксперт": анализ ошибок, восстановление документов, регистров, отчетности и налогового учета.';

$serviceCoverHeroTitle = 'Восстановление бухгалтерского учета компании';

$serviceCoverHeroLead = 'Поможем восстановить бухгалтерский и налоговый учет, привести в порядок документы, регистры, отчетность и расчеты. Разберем прошлые периоды, выявим ошибки, восстановим недостающие данные и подготовим компанию к дальнейшему нормальному ведению учета.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Восстановление учета, документов и отчетности',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Предварительно оценим объем проблемы, подскажем, какие документы нужны для восстановления и какой порядок действий поможет быстрее вернуть учет в рабочее состояние.';

$serviceCoverHeroBgUrl = '/img/audit/buxgalteria.webp';

$auditOrderReasonsTitle = 'Когда нужно восстановление бухгалтерского учета';

$auditOrderReasonsIntro = [
    'Восстановление учета требуется, когда бухгалтерские данные неполные, документы утеряны, отчетность сдавалась с ошибками или учет длительное время велся нерегулярно.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'сменился бухгалтер, а учет передан неполностью',
    'есть пропущенные или некорректные отчеты',
    'первичные документы не собраны или не отражены в учете',
    'компания готовится к проверке, аудиту, сделке или закрытию периода',
    'обнаружены расхождения между отчетностью, базой и фактическими данными',
    'нужно восстановить учет после длительного перерыва или хаотичного ведения',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает восстановление учета';

$auditCheckResultsParagraphs = [
    'Восстановление учета показывает реальное состояние бухгалтерской базы, документов, налоговых обязательств и отчетности за проблемные периоды.',
    'По итогам работы становится понятно, какие документы отсутствуют, какие операции отражены неверно, где есть риски и что нужно исправить, чтобы учет можно было вести дальше без постоянных расхождений.',
];

$auditQuestionsTitle = 'Какие задачи решает восстановление бухгалтерского учета';

$auditQuestionsIntro = 'Объем задач зависит от периода и состояния документов, но чаще всего восстановление помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'какие периоды требуют восстановления',
    'какие документы отсутствуют или оформлены некорректно',
    'какие операции не отражены или отражены неверно',
    'есть ли расхождения по налогам, расчетам и задолженности',
    'можно ли исправить отчетность без полного пересбора учета',
    'какие риски есть по прошлым периодам',
    'как подготовить учет к проверке или аудиту',
    'как передать восстановленный учет на регулярное сопровождение',
];

$auditQuestionsOutro = 'Если говорить простыми словами, восстановление учета помогает навести порядок в прошлом, чтобы компания могла безопасно работать дальше.';

$auditServiceTypesTitle = 'Форматы восстановления бухгалтерского учета';

$auditServiceTypesIntro = 'Восстановление может касаться всего учета или отдельных участков. Формат зависит от количества периодов, доступности документов и целей клиента.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'полное восстановление бухгалтерского учета',
    'восстановление налогового учета и отчетности',
    'восстановление первичных документов',
    'восстановление учета по банку, кассе и расчетам',
    'восстановление учета заработной платы',
    'корректировка бухгалтерской базы',
    'подготовка уточненных данных и пояснений',
    'восстановление учета перед проверкой, аудитом или сделкой',
];

$auditProcessTitle = 'Как проводится восстановление бухгалтерского учета';

$auditProcessIntro = 'Работа проходит поэтапно: сначала определяется масштаб проблемы, затем восстанавливаются данные и формируются рекомендации по дальнейшему ведению учета.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ ситуации',
        'text' => 'Вы описываете проблему, период восстановления и доступные документы. Мы оцениваем объем работы и возможные риски.',
    ],
    [
        'number' => '02',
        'title' => 'Сбор и проверка документов',
        'text' => 'Запрашиваются отчетность, базы учета, первичные документы, выписки, договоры, кадровые данные и пояснения по спорным операциям.',
    ],
    [
        'number' => '03',
        'title' => 'Выявление пробелов и ошибок',
        'text' => 'Определяются отсутствующие документы, расхождения в учетной базе, ошибки в отчетности, задолженности и налоговых расчетах.',
    ],
    [
        'number' => '04',
        'title' => 'Восстановление данных',
        'text' => 'Операции приводятся в порядок, документы сопоставляются с учетными данными, корректируются регистры и формируется восстановленная картина учета.',
    ],
    [
        'number' => '05',
        'title' => 'Подготовка выводов',
        'text' => 'Фиксируются найденные ошибки, риски, необходимые исправления и дальнейшие действия по отчетности или документообороту.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете восстановленные данные, перечень проблемных мест, рекомендации и основу для дальнейшего регулярного ведения учета.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки восстановления бухгалтерского учета';

$auditDeadlinesIntro = 'Срок зависит от количества периодов, состояния документов, объема операций и необходимости исправления отчетности.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'первичная диагностика — от 1–3 рабочих дней',
    'восстановление отдельного участка — от 3–7 рабочих дней',
    'восстановление одного отчетного периода — от 5–15 рабочих дней',
    'восстановление нескольких периодов — по согласованию',
];

$auditDeadlinesOutro = 'Если восстановление нужно к проверке или отчетной дате, сообщите срок заранее — мы предложим приоритетный порядок действий.';

$auditPricingTitle = 'Стоимость восстановления бухгалтерского учета';

$auditPricingIntro = 'Стоимость зависит от количества периодов, состояния базы, объема документов, количества операций, наличия ошибок и необходимости подготовки корректировок или пояснений.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 5 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы нужны для восстановления учета';

$auditDocumentsNeededIntro = 'Для начала работы обычно подходят следующие материалы:';

$auditDocumentsNeededItems = [
    'бухгалтерская база или выгрузки из учетной системы',
    'сданная бухгалтерская и налоговая отчетность',
    'оборотно-сальдовые ведомости и регистры',
    'банковские выписки',
    'договоры с контрагентами',
    'акты, счета, накладные, УПД и иная первичка',
    'кадровые документы и расчет заработной платы',
    'доступные пояснения по спорным операциям',
    'переписка или акты сверок с контрагентами',
];

$auditDocumentsNeededOutro = 'Если часть документов утеряна, это не всегда мешает работе. Мы подскажем, какие сведения можно восстановить по выпискам, базам, актам сверок и другим источникам.';

$auditResultsSummaryTitle = 'Что вы получите по итогам восстановления учета';

$auditResultsSummaryIntro = 'Результат восстановления должен помочь бизнесу понять, что было не так, что исправлено и как вести учет дальше.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'восстановленные участки бухгалтерского и налогового учета',
    'перечень найденных ошибок и отсутствующих документов',
    'обновленные учетные данные и регистры',
    'рекомендации по исправлению прошлых периодов',
    'оценку налоговых и бухгалтерских рисков',
    'основу для дальнейшего регулярного сопровождения',
    'понятный план действий по проблемным участкам',
];

$auditResultsSummaryOutro = 'После восстановления учет становится не набором разрозненных данных, а рабочей системой, с которой можно продолжать деятельность.';

$auditPrepTitle = 'Учет требует восстановления? Начнем с диагностики';

$auditPrepIntro = 'Перед восстановлением важно не пытаться исправлять все хаотично. Сначала нужно понять масштаб проблемы, приоритетные периоды и риски.';

$auditPrepLead = 'На первичном этапе мы поможем определить:';

$auditPrepItems = [
    'какие периоды требуют восстановления',
    'какие документы нужно запросить в первую очередь',
    'какие ошибки критичны для отчетности',
    'можно ли восстановить учет поэтапно',
    'какие действия снизят риск претензий и доначислений',
];

$auditPrepOutro = 'Диагностика помогает не тратить время на лишние действия и сразу двигаться по понятному плану.';

$auditFinalCtaTitle = 'Нужно восстановить бухгалтерский учет? Начнем с оценки документов';

$auditFinalCtaText = 'Отправьте краткое описание ситуации, период восстановления и доступные документы. Мы оценим объем работы, предложим порядок действий, сроки и формат результата.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/buxgalteria.webp';

$auditFaqTitle = 'Частые вопросы: восстановление бухгалтерского учета';

$auditFaqItems = [
    [
        'q' => 'Когда нужно восстанавливать бухгалтерский учет?',
        'a' => 'Восстановление требуется, если учет велся нерегулярно, документы отсутствуют, отчетность содержит ошибки, бухгалтер сменился без передачи дел или данные в базе не соответствуют фактическим операциям.',
    ],
    [
        'q' => 'Можно ли восстановить учет без всех документов?',
        'a' => 'Да, часто работу можно начать с доступных данных: выписок, отчетности, базы, актов сверок и договоров. Полный перечень недостающих документов определяется после диагностики.',
    ],
    [
        'q' => 'Можно ли восстановить только один участок учета?',
        'a' => 'Да, можно восстановить отдельный участок: банк, кассу, расчеты с контрагентами, зарплату, налоги, первичные документы или отчетность.',
    ],
    [
        'q' => 'Можно ли работать удаленно?',
        'a' => 'Да, большинство задач по бухгалтерскому сопровождению и аутсорсингу можно выполнять удаленно: документы передаются в электронном виде, вопросы решаются по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Что будет, если в прошлых периодах найдены ошибки?',
        'a' => 'Ошибки фиксируются, после чего готовятся рекомендации по исправлению, корректировке учета, сбору документов и дальнейшим действиям.',
    ],
    [
        'q' => 'Сколько стоит восстановление учета?',
        'a' => 'Стоимость рассчитывается индивидуально и зависит от периода, объема операций, состояния базы, количества отсутствующих документов и сложности исправлений.',
    ],
];

// ===== Аутсорсинг кадрового учета =====

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Бухгалтерский консалтинг и аутсорсинг', 'href' => '/buhgalteriya'],
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

<body class="has-site-header has-breadcrumbs page-buhgalteriya-vosstanovlenie-buhucheta">
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