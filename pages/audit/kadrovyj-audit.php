<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Кадровый аудит';
$pageDescription = 'Кадровый аудит ООО "Аудит Топ Эксперт": проверка кадровых документов, трудовых договоров, локальных актов, зарплатного блока и рисков для работодателя.';
$serviceCoverHeroTitle = 'Кадровый аудит компании';
$serviceCoverHeroLead = 'Проверим кадровые документы, трудовые договоры, локальные нормативные акты, оформление сотрудников, отпуска, табели, расчет заработной платы и соблюдение кадровых процедур. Выявим нарушения, риски трудовых споров, штрафов и претензий со стороны контролирующих органов, подготовим рекомендации по исправлению документов.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Проверка кадровых документов и зарплатного блока',
    'Работаем с компаниями по всей России',
];
$serviceCoverHeroNote = 'Предварительно оценим численность сотрудников, задачу и объем документов. Подскажем, какие материалы нужны для начала и какой формат кадрового аудита подойдет именно вам.';
$serviceCoverHeroBgUrl = '/img/audit/auditte.png';

$auditOrderReasonsTitle = 'В каких случаях заказывают кадровый аудит';
$auditOrderReasonsIntro = [
    'Кадровый аудит нужен, когда компании важно проверить правильность оформления работников, документов, кадровых процедур и расчетов. Такая проверка помогает снизить риск трудовых споров, штрафов и претензий при проверках.',
    'Услуга особенно востребована в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'компания готовится к проверке или внутренней ревизии',
    'есть сомнения в корректности трудовых договоров и кадровых документов',
    'планируется смена кадровика, бухгалтера или HR-ответственного',
    'нужно проверить оформление сотрудников, отпусков, табелей и приказов',
    'есть риск трудового спора с работником',
    'компания растет и хочет привести кадровый учет в порядок',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает кадровая аудиторская проверка';
$auditCheckResultsParagraphs = [
    'Кадровый аудит показывает, насколько корректно оформлены трудовые отношения, соблюдаются ли кадровые процедуры, есть ли ошибки в документах, локальных актах, табелях, отпусках, расчетах и хранении кадровых материалов.',
    'По итогам работы вы получаете перечень нарушений, оценку рисков и рекомендации по исправлению документов. Такой результат помогает работодателю привести кадровый учет в порядок и снизить вероятность претензий.',
];

$auditQuestionsTitle = 'Какие задачи решает кадровый аудит';
$auditQuestionsIntro = 'Один из самых частых запросов — какие кадровые риски можно выявить до проверки или спора с сотрудником. В зависимости от задачи кадровый аудит помогает ответить на следующие вопросы:';
$auditQuestionsItems = [
    'правильно ли оформлены трудовые договоры и дополнительные соглашения',
    'есть ли необходимые локальные нормативные акты',
    'корректно ли оформлены прием, перевод, увольнение и отпуска',
    'соответствуют ли табели, графики и приказы кадровым данным',
    'есть ли ошибки в расчетах заработной платы, отпускных или компенсаций',
    'правильно ли ведутся личные дела и кадровые журналы',
    'есть ли риски трудовых споров или штрафов',
    'какие документы нужно исправить в первую очередь',
];
$auditQuestionsOutro = 'Если говорить простыми словами, кадровый аудит помогает понять, насколько безопасно оформлены отношения с сотрудниками и какие документы нужно привести в порядок.';

$auditServiceTypesTitle = 'Виды кадрового аудита';
$auditServiceTypesIntro = 'Кадровый аудит может охватывать весь кадровый учет или отдельные участки. Формат зависит от численности персонала, цели проверки и текущего состояния документов.';
$auditServiceTypesLead = 'К основным видам работ относятся:';
$auditServiceTypesItems = [
    'комплексный кадровый аудит',
    'проверка трудовых договоров и дополнительных соглашений',
    'аудит локальных нормативных актов',
    'проверка оформления приема, перевода и увольнения',
    'проверка отпусков, графиков и табелей',
    'аудит расчетов по заработной плате и компенсациям',
    'проверка кадровых документов перед проверкой или спором',
    'подготовка рекомендаций по исправлению нарушений',
];

$auditProcessTitle = 'Как проводится кадровый аудит';
$auditProcessIntro = 'Многих интересует, как проходит кадровый аудит и какие документы проверяются. Обычно работа проводится по этапам.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ задачи',
        'text' => 'Вы описываете ситуацию, численность сотрудников и цель проверки. Мы определяем объем кадрового аудита и перечень документов.',
    ],
    [
        'number' => '02',
        'title' => 'Определение состава проверки',
        'text' => 'Согласуем, какие блоки проверяются: трудовые договоры, локальные акты, приказы, отпуска, табели, зарплата, увольнения или спорные ситуации.',
    ],
    [
        'number' => '03',
        'title' => 'Запрос документов',
        'text' => 'Изучаем трудовые договоры, дополнительные соглашения, приказы, личные карточки, графики отпусков, табели, расчетные документы и локальные акты.',
    ],
    [
        'number' => '04',
        'title' => 'Проверка кадровых процедур',
        'text' => 'Анализируем оформление работников, соблюдение процедур, наличие обязательных документов, внутреннюю логику кадрового учета и риски для работодателя.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование замечаний',
        'text' => 'Готовим перечень нарушений, спорных моментов и рекомендаций. При необходимости выделяем критичные риски, которые лучше исправить в первую очередь.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете отчет или перечень замечаний с практическими рекомендациями по исправлению кадровых документов и процедур.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки проведения кадрового аудита';
$auditDeadlinesIntro = 'Срок кадрового аудита зависит от численности сотрудников, количества документов, глубины проверки и срочности задачи.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'экспресс-проверка отдельных документов — от 1–2 рабочих дней',
    'аудит кадрового блока небольшой компании — от 3–5 рабочих дней',
    'стандартный кадровый аудит — от 5–10 рабочих дней',
    'проверка крупной компании — по согласованию',
];
$auditDeadlinesOutro = 'Если проверка или спор уже близко, можно начать с самых рискованных документов: трудовых договоров, увольнений, зарплаты и локальных актов.';

$auditPricingTitle = 'Стоимость кадрового аудита';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от численности сотрудников, объема документов, проверяемого периода, состава проверки и срочности.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 3 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для кадрового аудита';
$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи, но для начала обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'штатное расписание',
    'трудовые договоры и дополнительные соглашения',
    'приказы о приеме, переводе, отпусках и увольнении',
    'личные карточки и личные дела работников',
    'графики отпусков',
    'табели учета рабочего времени',
    'локальные нормативные акты',
    'положения об оплате труда и премировании',
    'расчетные листки и документы по заработной плате',
    'документы по охране труда при необходимости',
];
$auditDocumentsNeededOutro = 'Если документов много, можно начать с выборочной проверки или с наиболее рискованных категорий сотрудников и процедур.';

$auditResultsSummaryTitle = 'Что вы получите по итогам кадрового аудита';
$auditResultsSummaryIntro = 'По итогам кадрового аудита вы получаете практический результат, который помогает привести кадровые документы в порядок и снизить риски работодателя.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'отчет или перечень выявленных кадровых нарушений',
    'оценку рисков трудовых споров и проверок',
    'рекомендации по исправлению трудовых договоров и локальных актов',
    'перечень недостающих или некорректных документов',
    'приоритетный план действий для HR, бухгалтерии и руководства',
    'понимание слабых мест кадрового учета',
    'рекомендации по улучшению кадровых процедур',
];
$auditResultsSummaryOutro = 'Кадровый аудит помогает не только найти ошибки, но и выстроить более устойчивую систему оформления сотрудников, чтобы снизить риски в будущем.';

$auditMandatoryPrepTitle = 'Готовитесь к проверке или трудовому спору? Поможем проверить документы заранее';
$auditMandatoryPrepIntro = 'Если есть риск проверки, конфликта с сотрудником, массового найма или увольнений, кадровые документы лучше проверить заранее. Это снижает вероятность претензий и помогает подготовить позицию работодателя.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие кадровые документы требуют срочной проверки',
    'какие нарушения могут быть критичными',
    'какие локальные акты нужно обновить',
    'какие процедуры стоит привести в порядок',
    'как снизить риск трудового спора или штрафов',
];
$auditMandatoryPrepOutro = 'Кадровый аудит особенно полезен до проверки, увольнений, смены HR-ответственного или масштабирования команды.';

$auditFinalCtaTitle = 'Нужен кадровый аудит? Начнем с оценки документов';
$auditFinalCtaText = 'Отправьте краткое описание ситуации, численность сотрудников и доступные кадровые документы. Мы подскажем, что проверить в первую очередь, сколько времени потребуется и какой результат вы получите.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/auditte.png';

$auditFaqTitle = 'Частые вопросы о кадровом аудите';
$auditFaqItems = [
    [
        'q' => 'Что входит в кадровый аудит?',
        'a' => 'Кадровый аудит может включать проверку трудовых договоров, приказов, личных дел, табелей, отпусков, локальных актов, зарплатных документов и кадровых процедур.',
    ],
    [
        'q' => 'Можно ли проверить только трудовые договоры?',
        'a' => 'Да, можно провести точечную проверку трудовых договоров, дополнительных соглашений или конкретной кадровой процедуры.',
    ],
    [
        'q' => 'Кадровый аудит нужен только перед проверкой?',
        'a' => 'Нет, он полезен перед проверкой, увольнениями, сменой кадровика, ростом компании, трудовым спором или внутренней ревизией.',
    ],
    [
        'q' => 'Можно ли провести кадровый аудит удаленно?',
        'a' => 'Да, если документы предоставлены в электронном виде и есть возможность получить пояснения по спорным вопросам.',
    ],
    [
        'q' => 'Сколько длится кадровый аудит?',
        'a' => 'Срок зависит от численности сотрудников и объема документов. Небольшая проверка может занять несколько дней, комплексная — дольше.',
    ],
    [
        'q' => 'Что делать, если найдены нарушения?',
        'a' => 'Вы получите рекомендации, какие документы исправить, какие локальные акты обновить и какие процедуры привести в порядок.',
    ],
    [
        'q' => 'Можно ли проверить расчеты по зарплате?',
        'a' => 'Да, кадровый аудит может включать проверку зарплаты, отпускных, компенсаций, табелей и документов по оплате труда.',
    ],
    [
        'q' => 'Кому полезен итоговый отчет?',
        'a' => 'Отчет полезен руководству, HR-службе, бухгалтерии, юристам и собственникам компании.',
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
    ['label' => 'Кадровый аудит'],
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

<body class="has-site-header has-breadcrumbs page-audit-kadrovyj-audit">
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