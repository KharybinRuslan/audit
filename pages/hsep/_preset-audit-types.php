<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Обучение и академия HSEP».
 */
$auditTypesHideImages = false;

$hsepAuditTypesImgPool = [
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/obyazatelnyy.png',
    '/img/audit/kadrovyy-audit.png',
];

$hsepAuditTypesRows = [
    ['title' => 'Курсы для бухгалтеров', 'desc' => 'Практика учёта, отчётность и типовые ситуации', 'href' => '/hsep/kursy-dlya-buhgalterov'],
    ['title' => 'Курсы по налогам', 'desc' => 'Режимы, спорные вопросы и документооборот', 'href' => '/hsep/kursy-po-nalogam'],
    ['title' => 'Обучение МСФО', 'desc' => 'Стандарты, раскрытия и закрытие периода', 'href' => '/hsep/obuchenie-msfo'],
    ['title' => 'Внутренний аудит', 'desc' => 'Методики, контроли и взаимодействие с бизнесом', 'href' => '/hsep/obuchenie-vnutrennemu-auditu'],
    ['title' => 'Квалификация аудиторов', 'desc' => 'Повышение квалификации и актуальные требования', 'href' => '/hsep/povyshenie-kvalifikatsii-auditorov'],
    ['title' => 'Корпоративное обучение', 'desc' => 'Программы под задачи компании и отрасль', 'href' => '/hsep/korporativnoe-obuchenie'],
    ['title' => 'Онлайн-курсы', 'desc' => 'Гибкий график и доступ к материалам', 'href' => '/hsep/onlayn-kursy'],
    ['title' => 'Семинары и вебинары', 'desc' => 'Разбор кейсов и изменений в регулировании', 'href' => '/hsep/seminary-i-vebinary'],
    ['title' => 'Сертификация', 'desc' => 'Программы с подтверждением компетенций', 'href' => '/hsep/sertifikatsionnye-programmy'],
];

$auditTypes = [];
$poolLen = count($hsepAuditTypesImgPool);
foreach ($hsepAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $hsepAuditTypesImgPool[$i % $poolLen]];
}
