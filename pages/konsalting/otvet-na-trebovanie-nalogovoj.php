<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Ответ на требование налогового органа';

$pageDescription = 'Ответ на требование налогового органа ООО "Аудит Топ Эксперт": анализ запроса ФНС, подготовка пояснений, документов и безопасной позиции компании.';

$serviceCoverHeroTitle = 'Ответ на требование налогового органа';

$serviceCoverHeroLead = 'Поможем разобраться, что именно запрашивает инспекция, какие документы нужно предоставить, какие пояснения подготовить и как ответить так, чтобы снизить риск дополнительных вопросов и претензий.';

$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 1 рабочего дня',
    'Анализ документов, рисков и налоговых последствий',
    'Работаем с компаниями по всей России',
];

$serviceCoverHeroNote = 'На первичной консультации оценим вашу задачу, определим нужный формат работы, перечень документов и реалистичные сроки подготовки результата.';

$serviceCoverHeroBgUrl = '/img/audit/audit.jpg';

$auditOrderReasonsTitle = 'Когда нужна услуга: ответ на требование налогового органа';

$auditOrderReasonsIntro = [
    'Ответ на требование налогового органа требуется, когда компании важно заранее оценить налоговые последствия, подготовить документы, снизить риски и принять безопасное управленческое решение.',
    'Чаще всего услугу заказывают в следующих ситуациях:',
];

$auditOrderReasonsItems = [
    'компания получила требование о предоставлении документов или пояснений',
    'инспекция запрашивает информацию по контрагенту, НДС, расходам или операциям',
    'непонятно, какие документы действительно нужно направить',
    'есть риск предоставить лишнюю или некорректную информацию',
    'нужно подготовить пояснения без противоречий с учетом и отчетностью',
    'важно ответить в срок и снизить вероятность дальнейших претензий',
];

$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает результат ответа на требование налогового органа';

$auditCheckResultsParagraphs = [
    'Работа показывает, какие налоговые, документальные и организационные риски есть в ситуации, какие действия могут привести к претензиям и какие решения помогут снизить вероятность спора с налоговым органом.',
    'По итогам вы получаете понятные выводы, рекомендации и практический набор действий: что подготовить, что исправить, какие документы приложить и как выстроить дальнейшую позицию.',
];

$auditQuestionsTitle = 'Какие задачи решает ответ на требование налогового органа';

$auditQuestionsIntro = 'Перечень вопросов зависит от ситуации и объема документов, но чаще всего работа помогает ответить на следующие вопросы:';

$auditQuestionsItems = [
    'что именно требует налоговый орган',
    'какие документы нужно представить обязательно',
    'можно ли ограничить объем ответа',
    'как сформулировать пояснения без лишних рисков',
    'какие данные в учете нужно сверить перед отправкой',
    'что делать, если часть документов отсутствует',
    'как ответить на запрос по контрагенту или вычетам',
    'какие последствия возможны после ответа',
];

$auditQuestionsOutro = 'Итоговая цель — не просто дать общую рекомендацию, а сформировать понятную и безопасную позицию, которую можно применить в работе бизнеса.';

$auditServiceTypesTitle = 'Форматы услуги';

$auditServiceTypesIntro = 'Ответ на требование налогового органа может быть выполнена в виде разовой консультации, письменной позиции, анализа документов или комплексного сопровождения. Формат зависит от срочности, рисков и количества материалов.';

$auditServiceTypesLead = 'Возможные форматы работы:';

$auditServiceTypesItems = [
    'анализ требования налогового органа',
    'подготовка пояснений в ФНС',
    'подбор документов для ответа',
    'проверка рисков перед отправкой материалов',
    'сопровождение ответов по НДС и прибыли',
    'подготовка позиции по контрагентам',
    'корректировка пояснений бухгалтерии',
    'консультация по дальнейшим действиям после ответа',
];

$auditProcessTitle = 'Как проходит ответ на требование налогового органа';

$auditProcessIntro = 'Работа проводится поэтапно: от первичного анализа ситуации до передачи итоговых рекомендаций и, при необходимости, дальнейшего сопровождения.';

$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Анализ требования',
        'text' => 'Разбираем содержание требования, сроки, правовое основание и фактический предмет запроса.',
    ],
    [
        'number' => '02',
        'title' => 'Определение объема ответа',
        'text' => 'Выясняем, какие документы и пояснения нужны, а какие материалы лучше не направлять без необходимости.',
    ],
    [
        'number' => '03',
        'title' => 'Сверка данных',
        'text' => 'Проверяем, чтобы пояснения не противоречили декларациям, учетным данным и первичным документам.',
    ],
    [
        'number' => '04',
        'title' => 'Подготовка позиции',
        'text' => 'Формируем текст ответа, аргументы и структуру приложений для налогового органа.',
    ],
    [
        'number' => '05',
        'title' => 'Проверка рисков',
        'text' => 'Оцениваем, может ли ответ вызвать дополнительные вопросы, и корректируем формулировки.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете готовый проект ответа, перечень приложений и рекомендации по отправке в инспекцию.',
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

$auditPricingIntro = 'Стоимость ответа на требование налогового органа рассчитывается индивидуально и зависит от объема документов, срочности, сложности налоговой ситуации и необходимости сопровождения после подготовки результата.';

$auditPricingStatCost = 'по запросу';

$auditPricingStatTime = 'от 1 рабочего дня';

$auditPricingCtaLabel = 'Получить консультацию';

$auditDocumentsNeededTitle = 'Какие документы понадобятся';

$auditDocumentsNeededIntro = 'Полный перечень зависит от задачи. Для первичной оценки обычно достаточно направить основные документы и краткое описание ситуации.';

$auditDocumentsNeededItems = [
    'требование налогового органа',
    'приложения, уведомления и сопроводительные письма',
    'налоговые декларации, к которым относится запрос',
    'договоры и первичные документы по операциям',
    'счета-фактуры, УПД, акты, накладные',
    'ОСВ, карточки счетов и налоговые регистры',
    'банковские выписки и платежные документы',
    'переписка с контрагентами и подтверждающие материалы',
];

$auditDocumentsNeededOutro = 'Если вы не уверены, какие документы нужны, начните с описания ситуации. После первичного анализа мы подготовим точный список материалов.';

$auditResultsSummaryTitle = 'Что вы получите по итогам ответа на требование налогового органа';

$auditResultsSummaryIntro = 'Результат должен быть практичным: понятным для руководителя, бухгалтера, юриста и других участников процесса.';

$auditResultsSummaryLead = 'Вы получите:';

$auditResultsSummaryItems = [
    'разбор требования и сроков ответа',
    'перечень документов, которые стоит предоставить',
    'проект пояснений для налогового органа',
    'проверку рисков перед отправкой',
    'рекомендации по объему и формату ответа',
    'согласованную позицию для бухгалтерии и руководства',
    'понимание дальнейших действий после отправки',
];

$auditResultsSummaryOutro = 'Итоговый материал помогает принять решение, подготовить документы и действовать последовательно, без лишних налоговых рисков.';

$auditMandatoryPrepTitle = 'Получили требование из налоговой? Подготовим ответ';

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

$auditFinalCtaTitle = 'Нужно ответить на требование ФНС? Подготовим позицию';

$auditFinalCtaText = 'Пришлите требование налогового органа и документы по ситуации. Мы разберем запрос, подготовим пояснения, список приложений и рекомендации по безопасной отправке ответа.';

$auditFinalCtaButtonLabel = 'Оставить заявку';

$auditFinalCtaBgUrl = '/img/audit/audit.jpg';

$auditFaqTitle = 'Частые вопросы: ответ на требование налогового органа';

$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Ответ на требование налогового органа»?',
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
// Оптимизация видов налогов
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

<body class="has-site-header has-breadcrumbs page-konsalting-otvet-na-trebovanie-nalogovoj">
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