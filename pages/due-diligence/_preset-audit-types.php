<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «DUE diligence».
 */
$auditTypesHideImages = false;

$dueDiligenceAuditTypesImgPool = [
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/obyazatelnyy.png',
    '/img/audit/kadrovyy-audit.png',
];

$dueDiligenceAuditTypesRows = [
    ['title' => 'Финансовый Due Diligence', 'desc' => 'Качество прибыли, оборотный капитал и долговая нагрузка', 'href' => '/due-diligence/finansovyy-due-diligence'],
    ['title' => 'Налоговый DD', 'desc' => 'Риски доначислений, сделки и соответствие режимам', 'href' => '/due-diligence/nalogovyy-due-diligence'],
    ['title' => 'Юридический DD', 'desc' => 'Корпоративная структура, активы и контракты', 'href' => '/due-diligence/yuridicheskiy-due-diligence'],
    ['title' => 'Операционный DD', 'desc' => 'Процессы, IT и зависимость от ключевых факторов', 'href' => '/due-diligence/operatsionnyy-due-diligence'],
    ['title' => 'Комплексный DD', 'desc' => 'Единое задание и согласованные выводы для сделки', 'href' => '/due-diligence/kompleksnyy-due-diligence'],
    ['title' => 'DD для инвесторов', 'desc' => 'Фокус на рисках, влияющих на цену и условия раунда', 'href' => '/due-diligence/due-diligence-dlya-investorov'],
];

$auditTypes = [];
$poolLen = count($dueDiligenceAuditTypesImgPool);
foreach ($dueDiligenceAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $dueDiligenceAuditTypesImgPool[$i % $poolLen]];
}
