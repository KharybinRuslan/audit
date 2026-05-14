<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Аутсорсинг кадрового учета';

$pageDescription = 'Аутсорсинг кадрового учета ООО "Аудит Топ Эксперт": ведение кадровых документов, личных дел, приказов, отпусков, трудовых договоров и кадровой отчетности.';

$serviceCoverHeroTitle = 'Аутсорсинг кадрового учета для бизнеса';

$serviceCoverHeroLead = 'Возьмем на себя кадровое делопроизводство: оформление сотрудников, трудовые договоры, приказы, отпуска, личные дела, кадровые документы и сопровождение текущих вопросов. Поможем снизить риски ошибок в документах и выстроить понятный порядок работы с персоналом.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок запуска — от 3 рабочих дней',
    'Кадровые документы, приказы и личные дела',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'Оценим численность сотрудников, текущие кадровые документы и задачи бизнеса, после чего предложим удобный формат аутсорсинга.';

$serviceCoverHeroBgUrl = '/img/audit/buxgalteria.webp';

$auditOrderReasonsTitle = 'Когда нужен аутсорсинг кадрового учета';

$auditOrderReasonsIntro = [
    'Аутсорсинг кадрового учета нужен, когда компании важно обеспечить порядок в документах, снизить операционные и налоговые риски, разгрузить команду и получить регулярную экспертную поддержку.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'в компании нет штатного кадровика или HR-администратора',
    'кадровые документы ведутся нерегулярно или с ошибками',
    'нужно оформить приемы, переводы, отпуска, увольнения и личные дела',
    'штатная команда перегружена кадровыми задачами',
    'компания растет и требуется понятная кадровая система',
    'нужно снизить риски претензий по трудовым документам',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает аутсорсинг кадрового учета';

$auditCheckResultsParagraphs = [
    'Аутсорсинг кадрового учета показывает, насколько корректно организованы процессы, документы, ответственность, сроки и контрольные точки по выбранному направлению.',
    'По итогам работы бизнес получает не только выполненные операции, но и понятный порядок взаимодействия, рекомендации по снижению рисков и основу для стабильной регулярной работы.',
];

$auditQuestionsTitle = 'Какие задачи решает аутсорсинг кадрового учета';

$auditQuestionsIntro = 'Перечень задач зависит от структуры компании, количества операций и текущего состояния процессов, но чаще всего кадровый учет помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'правильно ли оформлены трудовые договоры и приказы',
    'есть ли полный комплект документов по сотрудникам',
    'корректно ли ведутся личные дела и кадровые журналы',
    'как организовать отпуска, переводы и увольнения без ошибок',
    'какие документы нужно обновить или восстановить',
    'как распределить ответственность за кадровые процессы',
    'какие сроки и отчеты нужно контролировать',
    'как выстроить кадровый документооборот для роста компании',
];

$auditQuestionsOutro = 'Если говорить простыми словами, кадровый учет помогает убрать хаос из текущих процессов и сделать работу более контролируемой для руководителя и команды.';

$auditServiceTypesTitle = 'Форматы услуги «Аутсорсинг кадрового учета»';

$auditServiceTypesIntro = 'Формат работы зависит от объема задач, численности компании, количества документов, текущих проблем и того, нужна ли разовая помощь или регулярное сопровождение.';

$auditServiceTypesLead = 'К основным форматам относятся:';

$auditServiceTypesItems = [
    'ведение кадрового делопроизводства',
    'оформление приема, перевода и увольнения сотрудников',
    'подготовка трудовых договоров и дополнительных соглашений',
    'ведение личных дел и кадровых документов',
    'контроль отпусков и кадровых графиков',
    'проверка и восстановление кадровых документов',
    'консультации по кадровым вопросам',
    'постановка кадровых процессов и регламентов',
];

$auditProcessTitle = 'Как организуется аутсорсинг кадрового учета';

$auditProcessIntro = 'Работа строится поэтапно: от первичной оценки документов и процессов до регулярного сопровождения и передачи результата.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичная оценка задачи',
        'text' => 'Вы направляете описание ситуации, сведения о компании, объем документов и текущие вопросы. Мы определяем формат работы и ключевые зоны внимания.',
    ],
    [
        'number' => '02',
        'title' => 'Анализ текущих процессов',
        'text' => 'Изучаются документы, отчетность, регистры, кадровые или расчетные данные, порядок взаимодействия и проблемные участки.',
    ],
    [
        'number' => '03',
        'title' => 'Согласование формата работы',
        'text' => 'Определяются состав задач, сроки, ответственные лица, порядок передачи документов и удобный канал коммуникации.',
    ],
    [
        'number' => '04',
        'title' => 'Выполнение работ',
        'text' => 'Проводится сопровождение выбранных участков, подготовка документов, расчеты, проверки, консультации и контроль сроков.',
    ],
    [
        'number' => '05',
        'title' => 'Контроль рисков и замечаний',
        'text' => 'Фиксируются ошибки, пробелы, спорные вопросы и рекомендации, которые помогают снизить риски и улучшить процессы.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете выполненные работы, комментарии, рекомендации и понятный план дальнейших действий.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки запуска услуги';

$auditDeadlinesIntro = 'Срок зависит от объема документов, состояния процессов, количества сотрудников или операций, а также от того, требуется ли только текущее сопровождение или предварительное восстановление данных.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'первичная консультация — в день обращения или на следующий рабочий день',
    'диагностика документов и процессов — от 1–3 рабочих дней',
    'запуск регулярного сопровождения — от 3–5 рабочих дней',
    'сложные или срочные задачи — по согласованию',
];

$auditDeadlinesOutro = 'Если задача привязана к отчетной дате, проверке, выплате или внутреннему сроку, сообщите дедлайн заранее — мы предложим реалистичный порядок действий.';

$auditPricingTitle = 'Стоимость услуги';

$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема задач, количества документов, численности сотрудников, сложности операций, срочности и формата сопровождения.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 3 рабочих дней';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы нужны для услуги';

$auditDocumentsNeededIntro = 'Точный перечень зависит от задачи. Для первичной оценки обычно подходят следующие материалы:';

$auditDocumentsNeededItems = [
    'штатное расписание',
    'трудовые договоры и дополнительные соглашения',
    'приказы по сотрудникам',
    'личные карточки и личные дела',
    'график отпусков',
    'документы по отпускам, переводам и увольнениям',
    'локальные нормативные акты, если есть',
    'данные по сотрудникам и должностям',
];

$auditDocumentsNeededOutro = 'Если полного комплекта документов пока нет, работу можно начать с диагностики. После первичного анализа мы подскажем, какие материалы нужно подготовить в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам работы';

$auditResultsSummaryIntro = 'Итоговый результат должен быть понятен не только специалисту, но и руководителю, собственнику или ответственному сотруднику компании.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'ведение кадровых документов',
    'оформление кадровых операций в срок',
    'проверку комплектности документов по сотрудникам',
    'рекомендации по исправлению ошибок',
    'понятный порядок кадрового документооборота',
    'снижение рисков по трудовым документам',
    'консультации по текущим кадровым вопросам',
];

$auditResultsSummaryOutro = 'Аутсорсинг кадрового учета помогает компании работать стабильнее, быстрее закрывать текущие вопросы и снижать риски, связанные с документами, сроками и человеческим фактором.';

$auditPrepTitle = 'Нужен аутсорсинг кадрового учета? Начнем с диагностики';

$auditPrepIntro = 'Перед запуском важно определить, какие задачи входят в объем работы, какие документы уже есть, какие процессы требуют срочного внимания и какой формат сопровождения будет удобен бизнесу.';

$auditPrepLead = 'На первичном этапе мы поможем определить:';

$auditPrepItems = [
    'какие кадровые документы уже есть',
    'какие документы нужно восстановить или обновить',
    'какой объем кадровых операций у компании',
    'какой формат сопровождения будет удобнее',
    'какие риски нужно закрыть в первую очередь',
];

$auditPrepOutro = 'Такая диагностика помогает сразу выстроить понятный процесс работы и избежать лишней нагрузки на вашу команду.';

$auditFinalCtaTitle = 'Нужен аутсорсинг кадрового учета? Начнем с оценки вашей ситуации';

$auditFinalCtaText = 'Отправьте краткое описание задачи, сведения о компании и доступные документы. Мы подскажем формат работы, сроки, необходимые материалы и ориентировочную стоимость.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/buxgalteria.webp';

$auditFaqTitle = 'Частые вопросы: аутсорсинг кадрового учета';

$auditFaqItems = [
    [
        'q' => 'Что входит в кадрового учета?',
        'a' => 'Состав работ зависит от задачи. Обычно это анализ текущих процессов, подготовка или проверка документов, контроль сроков, консультации и регулярное сопровождение выбранных участков.',
    ],
    [
        'q' => 'Можно ли передать только часть задач?',
        'a' => 'Да, можно передать на сопровождение отдельный участок или конкретный процесс, если компании не требуется полный аутсорсинг.',
    ],
    [
        'q' => 'Сколько времени занимает запуск?',
        'a' => 'Обычно первичная диагностика занимает несколько рабочих дней. Срок запуска зависит от объема документов, состояния процессов и срочности задачи.',
    ],
    [
        'q' => 'Можно ли работать удаленно?',
        'a' => 'Да, большинство задач по бухгалтерскому сопровождению и аутсорсингу можно выполнять удаленно: документы передаются в электронном виде, вопросы решаются по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Что делать, если документы ведутся с ошибками?',
        'a' => 'В таком случае работа начинается с диагностики. После проверки становится понятно, какие ошибки нужно исправить сразу, а какие можно доработать в рамках регулярного сопровождения.',
    ],
    [
        'q' => 'Как рассчитывается стоимость?',
        'a' => 'Стоимость зависит от объема работ, количества документов, численности сотрудников, сложности операций и выбранного формата сопровождения.',
    ],
];

// ===== Бухгалтерия Безлимитная =====

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

<body class="has-site-header has-breadcrumbs page-buhgalteriya-autsorsing-kadrovogo-ucheta">
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