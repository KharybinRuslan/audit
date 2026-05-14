<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Бухгалтерский консалтинг и аутсорсинг».
 */
$auditTypesHideImages = false;

$buhgalteriyaAuditTypesImgPool = [
    '/img/audit/finansovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/kadrovyy-audit.png',
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/obyazatelnyy.png',
];

$buhgalteriyaAuditTypesRows = [
    ['title' => 'Бухгалтерское сопровождение', 'desc' => 'Полный контур учёта, отчётность и взаимодействие с ФНС под ключ', 'href' => '/buhgalteriya/buhgalterskoe-soprovozhdenie'],
    ['title' => 'Восстановление учёта', 'desc' => 'Восстановление регистров и отчётности за прошлые периоды', 'href' => '/buhgalteriya/vosstanovlenie-buhucheta'],
    ['title' => 'Аутсорсинг кадрового учёта', 'desc' => 'Кадровые документы, табель и связка с зарплатой', 'href' => '/buhgalteriya/autsorsing-kadrovogo-ucheta'],
    ['title' => 'Бухгалтерия Безлимитная', 'desc' => 'Фиксированный пакет операций без счётчиков сверх лимита', 'href' => '/buhgalteriya/buhgalteriya-bezlimitnaya'],
    ['title' => 'Аутсорсинг на декрет Главбуха', 'desc' => 'Временная замена главного бухгалтера без разрыва учёта', 'href' => '/buhgalteriya/autsorsing-dekret-glavbuh'],
    ['title' => 'Иностранная компания', 'desc' => 'Учёт представительств и филиалов с учётом валюты и ВЭД', 'href' => '/buhgalteriya/autsorsing-inostrannoy-kompanii'],
    ['title' => 'Сопровождение ВЭД', 'desc' => 'Валютный контроль, ГТД и НДС по внешней торговле', 'href' => '/buhgalteriya/buhgalteriya-ved'],
    ['title' => 'Аутсорсинг по отраслям', 'desc' => 'Методики под торговлю, услуги, производство и стройку', 'href' => '/buhgalteriya/autsorsing-po-otraslyam'],
    ['title' => 'Аутсорсинг зарплаты', 'desc' => 'Начисления, взносы, отчётность по персоналу', 'href' => '/buhgalteriya/autsorsing-zarplaty'],
    ['title' => 'Сопровождение главбуха', 'desc' => 'Экспертная поддержка штатного бухгалтера и методология', 'href' => '/buhgalteriya/soprovozhdenie-glavbuh'],
];

$auditTypes = [];
$poolLen = count($buhgalteriyaAuditTypesImgPool);
foreach ($buhgalteriyaAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $buhgalteriyaAuditTypesImgPool[$i % $poolLen]];
}
