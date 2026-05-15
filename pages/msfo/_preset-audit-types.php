<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «МСФО и международная отчётность».
 */
$auditTypesHideImages = false;

$msfoAuditTypesImgPool = [
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/obyazatelnyy.png',
    '/img/audit/kadrovyy-audit.png',
];

$msfoAuditTypesRows = [
    ['title' => 'Подготовка отчётности по МСФО', 'desc' => 'Формы, раскрытия и согласованность с РСБУ/управленкой', 'href' => '/msfo/podgotovka-otchetnosti-po-msfo'],
    ['title' => 'Переход на МСФО', 'desc' => 'Дорожная карта, мэппинг стандартов и вовлечение команд', 'href' => '/msfo/perehod-na-msfo'],
    ['title' => 'Первое применение МСФО', 'desc' => 'IFRS 1, открывающий баланс и пояснительные таблицы', 'href' => '/msfo/pervoe-primenenie-msfo'],
    ['title' => 'Аудит отчётности по МСФО', 'desc' => 'Подготовка к независимому мнению и работа с аудиторами', 'href' => '/msfo/audit-otchetnosti-po-msfo'],
    ['title' => 'Автоматизация учёта по МСФО', 'desc' => '1С, выгрузки и контрольные отчёты под МСФО', 'href' => '/msfo/avtomatizatsiya-ucheta-po-msfo'],
    ['title' => 'Обзорная проверка по МСФО', 'desc' => 'Ограниченная уверенность и выявление слабых мест', 'href' => '/msfo/obzornaya-proverka-po-msfo'],
    ['title' => 'Помощь в подготовке МСФО', 'desc' => 'Сопровождение закрытия периода и отчётных пакетов', 'href' => '/msfo/pomoshch-v-podgotovke-msfo'],
    ['title' => 'Обучение МСФО', 'desc' => 'Теория стандартов и практика на ваших формах', 'href' => '/msfo/obuchenie-teorii-i-praktike-msfo'],
    ['title' => 'Учётная политика МСФО', 'desc' => 'Выбор моделей, оценок и раскрытий под ваш профиль', 'href' => '/msfo/razrabotka-uchetnoj-politiki-msfo'],
    ['title' => 'Консолидационные пакеты МСФО', 'desc' => 'Матрицы, внутригрупповые обороты и валюта', 'href' => '/msfo/zapolnenie-konsolidatsionnyh-paketov-msfo'],
];

$auditTypes = [];
$poolLen = count($msfoAuditTypesImgPool);
foreach ($msfoAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $msfoAuditTypesImgPool[$i % $poolLen]];
}
