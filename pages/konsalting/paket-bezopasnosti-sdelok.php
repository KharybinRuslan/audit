<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Пакет безопасности сделок';

$pageDescription = 'Пакет безопасности сделок ООО "Аудит Топ Эксперт": проверка сделки, контрагента, договора, первичных документов и налоговых рисков.';

$serviceCoverHeroTitle = 'Пакет безопасности сделок';

$serviceCoverHeroLead = 'Проверим сделку до подписания или исполнения: оценим контрагента, договорные условия, документы, деловую цель и налоговые риски, чтобы снизить вероятность претензий со стороны ФНС и финансовых потерь.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 1 рабочего дня',
    'Анализ документов, рисков и налоговых последствий',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'На первичной консультации оценим вашу задачу, определим нужный формат работы, перечень документов и реалистичные сроки подготовки результата.';

$serviceCoverHeroBgUrl = '/img/audit/audit.jpg';

$auditOrderReasonsTitle = 'Когда нужна услуга: пакет безопасности сделок';

$auditOrderReasonsIntro = [
    'Пакет безопасности сделок требуется, когда компании важно заранее оценить налоговые последствия, подготовить документы, снизить риски и принять безопасное управленческое решение.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'планируется крупная, нестандартная или долгосрочная сделка',
    'нужно проверить договор до подписания',
    'важно оценить налоговые последствия и документы по исполнению',
    'есть сомнения в контрагенте или экономическом смысле операции',
    'компания хочет снизить риски по НДС, расходам и деловой цели',
    'требуется единая проверка сделки юристом, налоговым специалистом и бухгалтером',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает результат пакета безопасности сделок';

$auditCheckResultsParagraphs = [
    'Работа показывает, какие налоговые, документальные и организационные риски есть в ситуации, какие действия могут привести к претензиям и какие решения помогут снизить вероятность спора с налоговым органом.',
    'По итогам вы получаете понятные выводы, рекомендации и практический набор действий: что подготовить, что исправить, какие документы приложить и как выстроить дальнейшую позицию.',
];

$auditQuestionsTitle = 'Какие задачи решает пакет безопасности сделок';

$auditQuestionsIntro = 'Перечень вопросов зависит от ситуации и объема документов, но чаще всего работа помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'безопасны ли условия договора с налоговой точки зрения',
    'достаточно ли документов для подтверждения расходов и вычетов',
    'есть ли деловая цель и экономический смысл сделки',
    'какие риски связаны с контрагентом',
    'какие формулировки договора лучше доработать',
    'как организовать первичный документооборот',
    'какие налоговые последствия возникнут после исполнения',
    'что нужно проверить до оплаты или подписания',
];

$auditQuestionsOutro = 'Итоговая цель — не просто дать общую рекомендацию, а сформировать понятную и безопасную позицию, которую можно применить в работе бизнеса.';

$auditServiceTypesTitle = 'Форматы услуги';

$auditServiceTypesIntro = 'Пакет безопасности сделок может быть выполнена в виде разовой консультации, письменной позиции, анализа документов или комплексного сопровождения. Формат зависит от срочности, рисков и количества материалов.';

$auditServiceTypesLead = 'Возможные форматы работы:';

$auditServiceTypesItems = [
    'анализ договора и приложений',
    'проверка налоговых последствий сделки',
    'проверка контрагента и полномочий подписанта',
    'оценка первичных документов и закрывающих материалов',
    'проверка деловой цели и реальности исполнения',
    'рекомендации по оплате, актам и документообороту',
    'подготовка чек-листа безопасного исполнения',
    'сопровождение согласования сделки до подписания',
];

$auditProcessTitle = 'Как проходит пакет безопасности сделок';

$auditProcessIntro = 'Работа проводится поэтапно: от первичного анализа ситуации до передачи итоговых рекомендаций и, при необходимости, дальнейшего сопровождения.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Описание сделки',
        'text' => 'Вы передаете проект договора, цель сделки, сумму, контрагента и ключевые условия.',
    ],
    [
        'number' => '02',
        'title' => 'Проверка контрагента',
        'text' => 'Оцениваем признаки риска, полномочия, открытые сведения и документы, подтверждающие надежность партнера.',
    ],
    [
        'number' => '03',
        'title' => 'Анализ договора',
        'text' => 'Проверяем условия на налоговые, документальные и коммерческие риски, выявляем слабые формулировки.',
    ],
    [
        'number' => '04',
        'title' => 'Оценка документов',
        'text' => 'Смотрим, какие первичные документы понадобятся для подтверждения расходов, вычетов и исполнения.',
    ],
    [
        'number' => '05',
        'title' => 'Рекомендации по безопасности',
        'text' => 'Готовим правки, чек-лист и рекомендации по оформлению сделки и дальнейшему документообороту.',
    ],
    [
        'number' => '06',
        'title' => 'Передача пакета',
        'text' => 'Вы получаете выводы, перечень рисков, рекомендации и пакет материалов для безопасного заключения сделки.',
    ],
];

$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки выполнения работы';

$auditDeadlinesIntro = 'Срок зависит от сложности вопроса, объема документов, срочности и выбранного формата результата. Срочные задачи можно разобрать в приоритетном порядке.';

$auditDeadlinesLead = 'Ориентировочные сроки:';

$auditDeadlinesItems = [
    'первичная консультация — от 1 рабочего дня',
    'анализ стандартного комплекта документов — от 2–3 рабочих дней',
    'подготовка письменной позиции или пакета документов — от 3–5 рабочих дней',
    'комплексное сопровождение — по согласованию',
];

$auditDeadlinesOutro = 'Если есть установленный срок ответа, визита, подписания сделки или подачи документов, сообщите его заранее — мы предложим реалистичный формат работы.';

$auditPricingTitle = 'Стоимость услуги';

$auditPricingIntro = 'Стоимость пакета безопасности сделок рассчитывается индивидуально и зависит от объема документов, срочности, сложности налоговой ситуации и необходимости сопровождения после подготовки результата.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 1 рабочего дня';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы понадобятся';

$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи. Для первичной оценки обычно достаточно направить основные документы и краткое описание ситуации.';

$auditDocumentsNeededItems = [
    'проект договора, приложения и спецификации',
    'карточка контрагента и документы о полномочиях',
    'коммерческое предложение и переписка по условиям',
    'планируемые акты, УПД, накладные или отчеты',
    'платежные условия и график расчетов',
    'документы, подтверждающие деловую цель',
    'данные учета, если сделка связана с текущими операциями',
    'внутренние согласования и пояснения по экономике сделки',
];

$auditDocumentsNeededOutro = 'Если вы не уверены, какие документы нужны, начните с описания ситуации. После первичного анализа мы подготовим точный список материалов.';

$auditResultsSummaryTitle = 'Что вы получите по итогам пакета безопасности сделок';

$auditResultsSummaryIntro = 'Результат должен быть практичным: понятным для руководителя, бухгалтера, юриста и других участников процесса.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'оценку налоговых и документальных рисков сделки',
    'проверку контрагента и полномочий',
    'комментарии к договору и приложениям',
    'список документов для безопасного исполнения',
    'рекомендации по формулировкам и документообороту',
    'чек-лист действий до подписания и оплаты',
    'понимание, можно ли заключать сделку в текущем виде',
];

$auditResultsSummaryOutro = 'Итоговый материал помогает принять решение, подготовить документы и действовать последовательно, без лишних налоговых рисков.';

$auditMandatoryPrepTitle = 'Планируется сделка? Проверим безопасность';

$auditMandatoryPrepIntro = 'Если вопрос связан с налоговыми рисками, сроками ответа, проверкой сделки или общением с инспекцией, лучше не откладывать анализ ситуации.';

$auditMandatoryPrepLead = 'На первичном этапе мы поможем определить:';

$auditMandatoryPrepItems = [
    'в чем основной риск',
    'какие документы нужно изучить в первую очередь',
    'какой формат работы подойдет именно вам',
    'какие действия лучше выполнить до общения с инспекцией или контрагентом',
    'какой результат можно подготовить в имеющийся срок',
];

$auditMandatoryPrepOutro = 'Чем раньше подготовить позицию, тем проще снизить риски и избежать ошибок в документах, пояснениях или решениях.';

$auditFinalCtaTitle = 'Планируете сделку? Проверим ее безопасность до подписания';

$auditFinalCtaText = 'Пришлите проект договора, данные контрагента и описание сделки. Мы оценим риски, подготовим рекомендации и поможем оформить сделку безопаснее.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/audit.jpg';

$auditFaqTitle = 'Частые вопросы: пакет безопасности сделок';

$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Пакет безопасности сделок»?',
        'a' => 'В услугу входит анализ ситуации и документов, оценка рисков, подготовка выводов, рекомендаций и, при необходимости, проекта документов или позиции для налогового органа.',
    ],
    [
        'q' => 'Можно ли начать без полного комплекта документов?',
        'a' => 'Да, для первичной оценки достаточно описания ситуации и ключевых материалов. После анализа мы подскажем, какие документы нужно добавить.',
    ],
    [
        'q' => 'Можно ли получить консультацию или провести проверку удаленно?',
        'a' => 'Да, большинство налоговых и консультационных задач можно выполнить удаленно: документы передаются в электронном виде, вопросы согласуются по телефону, почте или видеосвязи.',
    ],
    [
        'q' => 'Можно ли получить письменный результат?',
        'a' => 'Да, по согласованию готовится письменная позиция, отчет, заключение, проект ответа, чек-лист или иной документ, подходящий под вашу задачу.',
    ],
    [
        'q' => 'Вы работаете только с юридическими лицами?',
        'a' => 'Основной фокус — бизнес, юридические лица и предприниматели, но отдельные вопросы можно разобрать индивидуально.',
    ],
    [
        'q' => 'Можно ли заказать срочную подготовку?',
        'a' => 'Да, если есть дедлайн по требованию, сделке, визиту или проверке, мы оценим возможность срочного формата и предложим реалистичный объем работы.',
    ],
    [
        'q' => 'Помогаете ли вы после подготовки результата?',
        'a' => 'Да, можно дополнительно заказать сопровождение: доработку документов, участие в коммуникации с инспекцией, внедрение рекомендаций или дальнейшие консультации.',
    ],
    [
        'q' => 'Гарантирует ли услуга отсутствие претензий ФНС?',
        'a' => 'Нет, ни один специалист не может гарантировать отсутствие вопросов со стороны налогового органа. Задача услуги — снизить риски, усилить документы и подготовить аргументированную позицию.',
    ],
];

// ============================================================
// Сопровождение похода в налоговую инспекцию
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

<body class="has-site-header has-breadcrumbs page-konsalting-paket-bezopasnosti-sdelok">
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