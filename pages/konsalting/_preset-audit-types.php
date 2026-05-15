<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Налоговый консалтинг».
 * Подключать до include audit-types.php; задаёт $auditTypes (иконки циклически из пула).
 */
$auditTypesHideImages = false;

$konsaltingAuditTypesImgPool = [
    '/img/audit/finansovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/kadrovyy-audit.png',
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/obyazatelnyy.png',
];

$konsaltingAuditTypesRows = [
    [
        'title' => 'Налоговое консультирование',
        'desc' => 'Заключения по спорным операциям, схемам и договорам под вашу отрасль',
        'href' => '/konsalting/nalogovoe-konsultirovanie',
    ],
    [
        'title' => 'Налоговый аудит / диагностика',
        'desc' => 'Проверка учёта и регистров до того, как вопросы задаст инспектор',
        'href' => '/konsalting/nalogovaya-diagnostika',
    ],
    [
        'title' => 'Услуги оптимизации налогов',
        'desc' => 'Выстраивание модели в рамках закона без агрессивных «схем»',
        'href' => '/konsalting/optimizatsiya-nalogov',
    ],
    [
        'title' => 'Возражения на акт налоговой',
        'desc' => 'Аргументация, расчёты и процессуальная поддержка при оспаривании',
        'href' => '/konsalting/vozrazheniya-na-akt',
    ],
    [
        'title' => 'Ответ на требование налогового органа',
        'desc' => 'Структурированный ответ, пакет документов и контроль сроков',
        'href' => '/konsalting/otvet-na-trebovanie-nalogovoj',
    ],
    [
        'title' => 'Оптимизация видов налогов',
        'desc' => 'НДС, прибыль, взносы: где снижать нагрузку без нарушения правил',
        'href' => '/konsalting/optimizatsiya-vidov-nalogov',
    ],
    [
        'title' => 'Оптимизация для юрлиц',
        'desc' => 'Режимы, структура группы и договорная архитектура для ООО и АО',
        'href' => '/konsalting/optimizatsiya-dlya-yurlic',
    ],
    [
        'title' => 'Консультации по налогам',
        'desc' => 'Точечные ответы руководству и бухгалтерии с учётом практики ФНС',
        'href' => '/konsalting/konsultatsii-po-nalogam',
    ],
    [
        'title' => 'Пакет должной осмотрительности',
        'desc' => 'Проверка контрагентов и документов для снижения риска претензий',
        'href' => '/konsalting/paket-dolzhnoj-osmotritelnosti',
    ],
    [
        'title' => 'Пакет безопасности сделок',
        'desc' => 'Налоговый и документальный контур перед крупными договорами',
        'href' => '/konsalting/paket-bezopasnosti-sdelok',
    ],
    [
        'title' => 'Сопровождение похода в налоговую инспекцию',
        'desc' => 'Подготовка, присутствие и фиксация итогов общения с инспекцией',
        'href' => '/konsalting/soprovozhdenie-nalogovoj-inspektsii',
    ],
];

$auditTypes = [];
$poolLen = count($konsaltingAuditTypesImgPool);
foreach ($konsaltingAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $konsaltingAuditTypesImgPool[$i % $poolLen]];
}
