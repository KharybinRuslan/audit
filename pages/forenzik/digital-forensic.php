<?php
declare(strict_types=1);
require_once __DIR__ . '/../../includes/defer-css.php';

$pageTitle = 'Digital forensic (цифровые расследования)';
$pageDescription = 'Digital forensic: цифровые расследования, анализ устройств, корпоративной почты, логов, облачных сервисов, мессенджеров, файлов и действий пользователей.';

$serviceCoverHeroTitle = 'Digital forensic (цифровые расследования)';
$serviceCoverHeroLead = 'Проведем цифровое расследование по корпоративным устройствам, почте, логам, файловым хранилищам, облачным сервисам, CRM, ERP, мессенджерам и другим источникам цифровых следов. Поможем восстановить хронологию действий, установить факты передачи данных, удаления файлов, несанкционированного доступа или злоупотреблений.';
$serviceCoverHeroBullets = [
    'Стоимость — рассчитывается индивидуально',
    'Срок — от 5 рабочих дней',
    'Анализ цифровых следов, логов и корпоративных систем',
    'Отчет для руководства, юристов или службы безопасности',
];
$serviceCoverHeroNote = 'Предварительно определим источники цифровых следов, порядок сохранения данных и формат работы без нарушения целостности материалов.';
$serviceCoverHeroBgUrl = '/img/audit/forenzik.webp';

$auditOrderReasonsTitle = 'В каких случаях заказывают digital forensic';
$auditOrderReasonsIntro = [
    'Digital forensic нужен, когда важные обстоятельства можно подтвердить цифровыми следами: действиями пользователей, журналами входов, перепиской, файлами, выгрузками, метаданными или историей изменений.',
    'Чаще всего цифровые расследования проводят в следующих ситуациях:',
];
$auditOrderReasonsItems = [
    'произошла утечка данных, клиентской базы или документов',
    'сотрудник удалял, копировал или пересылал файлы',
    'есть подозрение на несанкционированный доступ к системам',
    'нужно восстановить хронологию действий пользователя',
    'компания собирает доказательства для внутреннего расследования или суда',
    'требуется проверить корпоративную почту, логи, облака, CRM или ERP',
];
$auditOrderReasonsCtaLabel = 'Оставить заявку';

$auditCheckResultsTitle = 'Что показывает digital forensic';
$auditCheckResultsParagraphs = [
    'Цифровое расследование показывает, какие действия совершались в системах, когда это происходило, какие файлы создавались, изменялись, копировались, отправлялись или удалялись, какие пользователи имели доступ и какие следы подтверждают инцидент.',
    'По итогам работы вы получаете отчет с хронологией, цифровыми артефактами, выводами и рекомендациями по дальнейшим действиям и защите информации.',
];

$auditQuestionsTitle = 'Какие задачи решает digital forensic';
$auditQuestionsIntro = 'Цифровая экспертиза помогает подтвердить факты, которые сложно доказать только документами и устными пояснениями. Обычно она отвечает на следующие вопросы:';
$auditQuestionsItems = [
    'кто заходил в систему и когда',
    'какие файлы копировались, выгружались, отправлялись или удалялись',
    'были ли признаки несанкционированного доступа',
    'можно ли восстановить хронологию действий пользователя',
    'какие цифровые следы подтверждают утечку или злоупотребление',
    'какие системы и аккаунты были затронуты',
    'какие доказательства можно использовать для внутреннего отчета или спора',
    'какие меры безопасности нужно внедрить после инцидента',
];
$auditQuestionsOutro = 'Если говорить простыми словами, такая работа помогает быстро понять, где есть реальный риск, какие факты уже подтверждены и какие действия нужны для защиты интересов компании.';

$auditServiceTypesTitle = 'Что входит в digital forensic';
$auditServiceTypesIntro = 'Состав работ зависит от источников данных и задачи: утечка, удаление файлов, подозрительная активность, корпоративный конфликт, проверка устройства или анализ облачных сервисов.';
$auditServiceTypesLead = 'В работу могут входить:';
$auditServiceTypesItems = [
    'сбор и фиксация цифровых данных',
    'анализ корпоративной почты, облачных хранилищ и файловых серверов',
    'проверка логов входов, действий и изменений',
    'анализ устройств, носителей и рабочих станций при наличии доступа',
    'восстановление хронологии действий пользователей',
    'поиск следов передачи, копирования или удаления данных',
    'подготовка отчета с цифровыми артефактами',
    'рекомендации по защите систем и доступов',
];

$auditProcessTitle = 'Как проводится digital forensic';
$auditProcessIntro = 'Порядок работы зависит от задачи, но обычно проверка проходит по понятной и контролируемой схеме.';
$auditProcessSteps = [
    [
        'number' => '01',
        'title' => 'Первичный анализ ситуации',
        'text' => 'Вы направляете описание задачи, известные факты и доступные материалы. Мы оцениваем цель работы, возможные источники информации, риски, сроки и формат проверки.',
    ],
    [
        'number' => '02',
        'title' => 'Определение периметра проверки',
        'text' => 'Согласуем период, список документов, системы, сотрудников, контрагентов и операции, которые нужно проверить. Определяем, какой результат нужен: отчет, справка, доказательная база или рекомендации.',
    ],
    [
        'number' => '03',
        'title' => 'Запрос и фиксация данных',
        'text' => 'Собираем документы, выгрузки, переписку, цифровые следы, учетные данные и иные материалы. При необходимости отдельно фиксируем источники, чтобы сохранить доказательную ценность информации.',
    ],
    [
        'number' => '04',
        'title' => 'Анализ фактов и операций',
        'text' => 'Проверяем документы, операции, связи, хронологию событий и действия участников. Выявляем несоответствия, признаки риска, слабые места в контролях и возможные нарушения.',
    ],
    [
        'number' => '05',
        'title' => 'Формирование выводов',
        'text' => 'Готовим выводы по результатам работы, описываем выявленные факты, риски, подтверждающие материалы и возможные последствия для компании.',
    ],
    [
        'number' => '06',
        'title' => 'Передача результата',
        'text' => 'Вы получаете итоговый документ с понятной структурой, приложениями, рекомендациями и перечнем дальнейших действий для руководства, юристов, службы безопасности или собственников.',
    ],
];
$auditProcessCtaLabel = 'Оставить заявку';

$auditDeadlinesTitle = 'Сроки проведения услуги «Digital forensic (цифровые расследования)»';
$auditDeadlinesIntro = 'Срок работы зависит от объема документов, количества операций, доступности данных, сложности ситуации, числа проверяемых лиц или контрагентов и требуемого формата результата.';
$auditDeadlinesLead = 'Ориентировочные сроки:';
$auditDeadlinesItems = [
    'первичный экспресс-анализ — от 1–3 рабочих дней',
    'проверка ограниченного объема документов — от 3–5 рабочих дней',
    'стандартная проверка или расследование — от 5–15 рабочих дней',
    'комплексный проект с большим объемом данных — по согласованию',
];
$auditDeadlinesOutro = 'Если результат нужен срочно, сообщите желаемый срок — мы подскажем, какой объем проверки реально выполнить в вашей ситуации.';

$auditPricingTitle = 'Стоимость услуги «Digital forensic (цифровые расследования)»';
$auditPricingIntro = 'Стоимость рассчитывается индивидуально и зависит от объема проверки, количества документов и источников данных, срочности, сложности ситуации, требуемой детализации отчета и необходимости сопровождения юристов или руководства.';
$auditPricingStatCost = 'по запросу';
$auditPricingStatTime = 'от 5 рабочих дней';
$auditPricingCtaLabel = 'Бесплатная консультация';

$auditDocumentsNeededTitle = 'Какие документы нужны для услуги «Digital forensic (цифровые расследования)»';
$auditDocumentsNeededIntro = 'Полный перечень документов зависит от задачи, но для первичного анализа обычно подходят следующие материалы:';
$auditDocumentsNeededItems = [
    'описание инцидента и предполагаемый период событий',
    'список систем, устройств, аккаунтов и пользователей',
    'журналы входов, действий, изменений и выгрузок',
    'данные корпоративной почты, облаков, CRM, ERP и файловых серверов',
    'резервные копии и архивы при наличии',
    'политики доступа и информационной безопасности',
    'переписка, уведомления и внутренние сообщения по инциденту',
    'материалы предыдущей IT- или внутренней проверки',
];
$auditDocumentsNeededOutro = 'Если полного комплекта документов пока нет, это не всегда мешает началу работы. На консультации подскажем, какие материалы нужны именно в вашем случае и что стоит сохранить в первую очередь.';

$auditResultsSummaryTitle = 'Что вы получите по итогам услуги «Digital forensic (цифровые расследования)»';
$auditResultsSummaryIntro = 'По итогам работы вы получаете практичный результат, который помогает принять управленческое, юридическое, финансовое или кадровое решение на основании фактов.';
$auditResultsSummaryLead = 'Вы получите:';
$auditResultsSummaryItems = [
    'итоговый отчет или аналитическую справку по результатам проверки',
    'описание выявленных фактов, рисков и спорных обстоятельств',
    'перечень подтверждающих документов, операций или цифровых следов',
    'хронологию событий при необходимости',
    'оценку возможного ущерба или последствий для бизнеса',
    'рекомендации по дальнейшим действиям',
    'предложения по усилению контроля, безопасности и профилактике нарушений',
];
$auditResultsSummaryOutro = 'Итоговый документ готовится так, чтобы его могли использовать не только профильные специалисты, но и руководитель, собственник, юрист, служба безопасности или финансовый директор.';

$auditMandatoryPrepTitle = 'Нужны цифровые доказательства? Поможем сохранить и проанализировать следы';
$auditMandatoryPrepIntro = 'В цифровых расследованиях особенно важно сохранить исходные данные и не нарушить целостность следов. Чем быстрее зафиксированы логи и файлы, тем выше шанс восстановить картину событий.';
$auditMandatoryPrepLead = 'Мы помогаем определить:';
$auditMandatoryPrepItems = [
    'какие источники цифровых данных нужно сохранить',
    'какие действия нельзя делать до фиксации материалов',
    'как определить период и круг пользователей для проверки',
    'какие цифровые артефакты могут быть полезны для спора',
    'как усилить защиту доступов после инцидента',
];
$auditMandatoryPrepOutro = 'Чем раньше зафиксированы документы, данные и обстоятельства, тем выше качество итоговых выводов и тем проще защитить позицию компании.';

$auditFinalCtaTitle = 'Нужна услуга «Digital forensic (цифровые расследования)»? Начнем с оценки ситуации';
$auditFinalCtaText = 'Отправьте краткое описание задачи, известные факты, документы или список вопросов. Мы подскажем, какой формат проверки подойдет, какие данные понадобятся, сколько времени займет работа и какой результат вы получите по итогам.';
$auditFinalCtaButtonLabel = 'Оставить заявку';
$auditFinalCtaBgUrl = '/img/audit/forenzik.webp';

$auditFaqTitle = 'Частые вопросы по услуге «Digital forensic (цифровые расследования)»';
$auditFaqItems = [
    [
        'q' => 'Что входит в услугу «Digital forensic (цифровые расследования)»?',
        'a' => 'В состав работы может входить анализ документов, операций, контрагентов, сотрудников, переписки, цифровых следов, внутренних регламентов и иных данных. Точный объем определяется после первичного анализа задачи.',
    ],
    [
        'q' => 'Можно ли начать проверку, если документов пока мало?',
        'a' => 'Да, во многих случаях можно начать с имеющихся материалов. После первичного анализа мы подскажем, каких документов не хватает и какие данные нужно запросить дополнительно.',
    ],
    [
        'q' => 'Можно ли провести работу конфиденциально?',
        'a' => 'Да, формат работы можно выстроить конфиденциально: с ограниченным кругом участников, аккуратным запросом данных и понятным порядком доступа к информации.',
    ],
    [
        'q' => 'Подойдет ли итоговый отчет для суда или юристов?',
        'a' => 'Отчет можно подготовить в формате, удобном для юристов, переговоров, претензионной работы или судебного спора. При необходимости отдельно структурируем доказательства и приложения.',
    ],
    [
        'q' => 'Сколько времени занимает проверка?',
        'a' => 'Срок зависит от объема материалов, числа операций и сложности ситуации. Небольшой анализ может занять несколько дней, комплексное расследование — от одной-двух недель и более.',
    ],
    [
        'q' => 'Что делать, если в ходе проверки подтвердятся нарушения?',
        'a' => 'Мы фиксируем выявленные факты, описываем подтверждающие материалы и даем рекомендации по дальнейшим действиям: управленческим, юридическим, кадровым или контрольным.',
    ],
    [
        'q' => 'Можно ли проверить только один эпизод или одну сделку?',
        'a' => 'Да, можно ограничить проверку конкретной сделкой, платежом, контрагентом, сотрудником, периодом или инцидентом. Такой формат часто подходит для быстрой оценки риска.',
    ],
    [
        'q' => 'Кому полезна такая услуга?',
        'a' => 'Услуга полезна собственникам, руководителям, юристам, финансовым директорам, службам безопасности, комплаенс-подразделениям и инвесторам, когда нужно разобраться в рисковой ситуации и принять решение на фактах.',
    ],
];

// ============================================================
// FILE: employee-fraud-check.php
// ============================================================

// Проверка сотрудников (fraud check)

$auditTypesEyebrow = 'Аудиторские услуги';
$auditTypesHeadingLead = 'Все услуги ';
$auditTypesHeadingAccent = 'ООО "Аудит Топ Эксперт"';
$auditTypesHeadingRest = ' по данному направлению';

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => 'Услуги', 'href' => '/services'],
    ['label' => 'Форензик', 'href' => '/forenzik'],
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

<body class="has-site-header has-breadcrumbs page-forenzik-digital-forensic">
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