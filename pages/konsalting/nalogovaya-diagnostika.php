<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Налоговый аудит / диагностика';

$pageDescription = 'Налоговый аудит и диагностика ООО "Аудит Топ Эксперт": проверка налогового учета, выявление рисков, оценка документов и подготовка рекомендаций для бизнеса.';

$serviceCoverHeroTitle = 'Налоговый аудит и диагностика налоговых рисков';

$serviceCoverHeroLead = 'Проверим налоговый учет, отчетность, документы и хозяйственные операции, чтобы выявить ошибки, спорные участки и риски доначислений. Поможем понять, где компания уязвима перед налоговой проверкой и что нужно исправить заранее.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 3 рабочих дней',
    'Проверка налогов, документов и операций',
    'Итоговый отчет с выводами и рекомендациями',
];

$serviceCoverHeroNote = 'Начнем с первичной диагностики: определим объем проверки, ключевые рисковые зоны и документы, которые нужны для анализа.';

$serviceCoverHeroBgUrl = '/img/audit/audit.jpg';

$auditOrderReasonsTitle = 'Когда заказывают налоговый аудит';

$auditOrderReasonsIntro = [
    'Налоговый аудит нужен, когда бизнес хочет заранее увидеть риски, проверить корректность налоговой базы, подготовиться к проверке или убедиться, что учет и документы выдержат вопросы инспекции.',
    'Диагностика особенно полезна в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'компания ожидает налоговую проверку или уже получила запрос от инспекции',
    'есть сомнения в корректности учета НДС, налога на прибыль, УСН или зарплатных налогов',
    'нужно проверить контрагентов, расходы, вычеты и первичные документы',
    'бизнес готовится к сделке, продаже, привлечению инвестора или кредитованию',
    'сменился бухгалтер, финансовый директор или собственник',
    'нужно понять реальные налоговые риски до того, как они станут проблемой',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает налоговая диагностика';

$auditCheckResultsParagraphs = [
    'Налоговая диагностика показывает, какие участки учета могут вызвать вопросы у инспекции, где есть ошибки в документах, расчетах или декларациях, а также какие операции требуют дополнительного подтверждения.',
    'По итогам проверки вы получаете отчет с перечнем выявленных рисков, комментариями по спорным участкам и рекомендациями по исправлению нарушений или укреплению позиции компании.',
];

$auditQuestionsTitle = 'Какие задачи решает налоговый аудит';

$auditQuestionsIntro = 'Налоговый аудит помогает не только найти ошибки, но и понять, насколько защищена налоговая позиция бизнеса. Обычно проверка отвечает на следующие вопросы:';

$auditQuestionsItems = [
    'правильно ли рассчитаны основные налоги и взносы',
    'есть ли риски по вычетам НДС и признанию расходов',
    'достаточно ли документов для подтверждения операций',
    'есть ли признаки неблагонадежных контрагентов или спорных цепочек',
    'корректно ли оформлены договоры, акты, счета и УПД',
    'есть ли риски дробления бизнеса или переквалификации отношений',
    'какие суммы потенциально могут быть доначислены',
    'что нужно исправить до налоговой проверки',
];

$auditQuestionsOutro = 'Главная цель налогового аудита — увидеть слабые места заранее и дать бизнесу понятный план действий для снижения рисков.';

$auditServiceTypesTitle = 'Виды налоговой диагностики';

$auditServiceTypesIntro = 'Проверка может охватывать все налоги или отдельные участки. Формат зависит от цели: быстрая диагностика, подготовка к проверке или глубокий анализ налоговой безопасности.';

$auditServiceTypesLead = 'Возможные форматы работы:';

$auditServiceTypesItems = [
    'экспресс-диагностика налоговых рисков',
    'полный налоговый аудит компании',
    'проверка НДС и налоговых вычетов',
    'проверка налога на прибыль и расходов',
    'анализ УСН и специальных налоговых режимов',
    'проверка зарплатных налогов и взносов',
    'аудит операций с контрагентами',
    'диагностика перед налоговой проверкой или сделкой',
];

$auditProcessTitle = 'Как проводится налоговый аудит';

$auditProcessIntro = 'Процесс строится поэтапно: от определения объема проверки до передачи итогового отчета с выводами и рекомендациями.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичная оценка',
        'text' => 'Вы описываете задачу, проверяемый период и основные опасения. Мы определяем объем диагностики и приоритетные участки.',
    ],
    [
        'number' => '02',
        'title' => 'Согласование программы проверки',
        'text' => 'Фиксируются налоги, периоды, операции, документы и формат итогового результата: краткий отчет или подробное заключение.',
    ],
    [
        'number' => '03',
        'title' => 'Запрос документов',
        'text' => 'Мы формируем перечень материалов: декларации, ОСВ, карточки счетов, договоры, первичку, выписки и пояснения.',
    ],
    [
        'number' => '04',
        'title' => 'Анализ учета и документов',
        'text' => 'Проверяются налоговые базы, вычеты, расходы, документы, контрагенты, взаимосвязь данных учета и отчетности.',
    ],
    [
        'number' => '05',
        'title' => 'Оценка рисков и последствий',
        'text' => 'Выявленные нарушения группируются по уровню риска, возможным последствиям и срочности исправления.',
    ],
    [
        'number' => '06',
        'title' => 'Передача отчета',
        'text' => 'Вы получаете итоговый документ с замечаниями, выводами и практическими рекомендациями по снижению рисков.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки проведения налогового аудита';

$auditDeadlinesIntro = 'Срок зависит от объема документов, количества налогов, проверяемого периода и глубины анализа. Небольшую диагностику можно провести достаточно быстро.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'экспресс-диагностика — от 3 рабочих дней',
    'проверка отдельного налога — от 5 рабочих дней',
    'комплексный налоговый аудит — от 10 рабочих дней',
    'проверка крупной компании или группы — по согласованию',
];

$auditDeadlinesOutro = 'Если задача срочная, можно начать с экспресс-анализа и затем расширить проверку по наиболее рискованным участкам.';

$auditPricingTitle = 'Стоимость налогового аудита';

$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема проверки, количества документов, числа налогов, периода и сложности операций.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 3 рабочих дней';

$auditPricingCtaLabel = 'Заказать диагностику';

$auditDocumentsNeededTitle = 'Какие документы нужны для налогового аудита';

$auditDocumentsNeededIntro = 'Для качественной проверки нужны данные учета, отчетности и документы, подтверждающие операции. Точный перечень зависит от выбранного формата.';

$auditDocumentsNeededItems = [
    'налоговые декларации и расчеты за проверяемый период',
    'бухгалтерская отчетность и оборотно-сальдовые ведомости',
    'карточки счетов и налоговые регистры',
    'договоры с покупателями, поставщиками и подрядчиками',
    'акты, счета, накладные, УПД и счета-фактуры',
    'банковские выписки и платежные документы',
    'документы по зарплате, выплатам и взносам',
    'учетная политика и внутренние регламенты',
    'переписка с налоговыми органами, если она есть',
];

$auditDocumentsNeededOutro = 'Если документов много, мы поможем сформировать удобный перечень и определить, что нужно предоставить в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам налогового аудита';

$auditResultsSummaryIntro = 'По результатам проверки вы получаете не просто список ошибок, а практическую картину налоговой безопасности компании.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'отчет о выявленных налоговых рисках',
    'перечень ошибок и спорных участков',
    'оценку возможных последствий и приоритетов',
    'рекомендации по исправлению документов и учета',
    'анализ слабых мест в налоговой позиции',
    'предложения по снижению риска доначислений',
    'понятный план дальнейших действий для бухгалтерии и руководства',
];

$auditResultsSummaryOutro = 'Итоговый отчет помогает руководителю, бухгалтерии и собственникам принять решения до того, как проблемы выявит налоговый орган.';

$auditMandatoryPrepTitle = 'Готовитесь к налоговой проверке? Начните с диагностики';

$auditMandatoryPrepIntro = 'Перед проверкой важно заранее понять, какие участки учета требуют внимания, какие документы нужно восстановить и какие вопросы инспекции наиболее вероятны.';

$auditMandatoryPrepLead = 'Мы поможем определить:';

$auditMandatoryPrepItems = [
    'какие операции могут вызвать вопросы',
    'какие документы нужно собрать или доработать',
    'какие риски лучше устранить до проверки',
    'какие пояснения стоит подготовить заранее',
    'как организовать работу бухгалтерии и руководства',
];

$auditMandatoryPrepOutro = 'Диагностика до проверки часто позволяет снизить риски и избежать срочных исправлений в последний момент.';

$auditFinalCtaTitle = 'Нужен налоговый аудит? Проведем диагностику рисков';

$auditFinalCtaText = 'Опишите ситуацию, проверяемый период и цель аудита. Мы предложим формат проверки, перечень документов, сроки и итоговый результат, который поможет защитить бизнес.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/audit.jpg';

$auditFaqTitle = 'Частые вопросы: налоговый аудит / диагностика';

$auditFaqItems = [
    [
        'q' => 'Чем налоговый аудит отличается от обычной консультации?',
        'a' => 'Консультация отвечает на конкретный вопрос, а налоговый аудит предполагает проверку документов, учета и отчетности с выявлением рисков и подготовкой рекомендаций.',
    ],
    [
        'q' => 'Можно ли проверить только НДС или налог на прибыль?',
        'a' => 'Да, можно провести аудит отдельного налога или конкретного участка учета, если полный анализ сейчас не требуется.',
    ],
    [
        'q' => 'Можно ли получить консультацию или провести проверку удаленно?',
        'a' => 'Да, большинство налоговых и консультационных задач можно выполнить удаленно: документы передаются в электронном виде, вопросы согласуются по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Что будет, если вы найдете ошибки?',
        'a' => 'Ошибки фиксируются в отчете, после чего мы предлагаем варианты исправления, доработки документов и снижения риска претензий.',
    ],
    [
        'q' => 'Подходит ли налоговый аудит перед сделкой?',
        'a' => 'Да, проверка помогает оценить налоговые риски компании перед покупкой, продажей бизнеса, привлечением инвестора или кредитованием.',
    ],
    [
        'q' => 'Можно ли провести экспресс-диагностику?',
        'a' => 'Да, если нужно быстро оценить основные риски, можно начать с экспресс-формата и затем углубить проверку по проблемным участкам.',
    ],
    [
        'q' => 'Проверяете ли вы контрагентов в рамках аудита?',
        'a' => 'Да, при необходимости анализируются документы, признаки реальности операций, деловая цель и подтверждение должной осмотрительности.',
    ],
    [
        'q' => 'Можно ли использовать отчет для руководства или собственников?',
        'a' => 'Да, итоговый отчет готовится в понятном формате и может использоваться для управленческих решений, внутреннего контроля и подготовки к проверкам.',
    ],
];

// ============================================================
// Услуги оптимизации налогов
// ============================================================

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Налоговый консалтинг и налоговая безопасность', 'href' => '/konsalting'],
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

<body class="has-site-header has-breadcrumbs page-konsalting-nalogovaya-diagnostika">
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