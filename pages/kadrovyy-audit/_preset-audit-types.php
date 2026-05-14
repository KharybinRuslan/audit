<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Кадровый аудит».
 */
$auditTypesHideImages = false;

$kadrovyyAuditTypesImgPool = [
    '/img/audit/kadrovyy-audit.png',
    '/img/audit/obyazatelnyy.png',
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
];

$kadrovyyAuditTypesRows = [
    ['title' => 'Аудит кадрового делопроизводства', 'desc' => 'Приказы, личные дела, штатное расписание и соответствие ТК РФ', 'href' => '/kadrovyy-audit/audit-kadrovogo-deloproizvodstva'],
    ['title' => 'Проверка трудовых договоров', 'desc' => 'Условия, срочность, испытание, конфиденциальность и ИПДн', 'href' => '/kadrovyy-audit/proverka-trudovyh-dogovorov'],
    ['title' => 'Аудит начисления зарплаты', 'desc' => 'Связка кадровых событий с расчётом, взносами и НДФЛ', 'href' => '/kadrovyy-audit/audit-nachisleniya-zarplaty'],
    ['title' => 'Проверка соблюдения ТК', 'desc' => 'Графики, отпуска, сверхурочные, удалёнка и локальные акты', 'href' => '/kadrovyy-audit/proverka-soblyudeniya-tk'],
    ['title' => 'Кадровые риски и штрафы', 'desc' => 'Карта рисков: ГИТ, суды, взносы и персональные данные', 'href' => '/kadrovyy-audit/kadrovye-riski-i-shtrafy'],
    ['title' => 'Восстановление кадрового учёта', 'desc' => 'Восстановление личных дел и приказов за прошлые периоды', 'href' => '/kadrovyy-audit/vosstanovlenie-kadrovogo-ucheta'],
    ['title' => 'Постановка HR-процессов', 'desc' => 'Регламенты найма, адаптации, кадровых мероприятий и ЭДО', 'href' => '/kadrovyy-audit/postanovka-hr-protsessov'],
    ['title' => 'Разработка кадровой политики', 'desc' => 'ЛНА, шаблоны документов и единый стиль для филиалов', 'href' => '/kadrovyy-audit/razrabotka-kadrovoy-politiki'],
    ['title' => 'Аудит HR-документооборота', 'desc' => 'Маршруты согласования, хранение, ЭП и архив', 'href' => '/kadrovyy-audit/audit-hr-dokumentooborota'],
    ['title' => 'Подготовка к проверкам ГИТ', 'desc' => 'Предпроверочный аудит, пакет документов и бриф для руководства', 'href' => '/kadrovyy-audit/podgotovka-k-proverkam-git'],
];

$auditTypes = [];
$poolLen = count($kadrovyyAuditTypesImgPool);
foreach ($kadrovyyAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $kadrovyyAuditTypesImgPool[$i % $poolLen]];
}
