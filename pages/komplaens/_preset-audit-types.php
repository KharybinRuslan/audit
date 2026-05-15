<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Комплаенс, риск-контроль, внутренний аудит».
 */
$auditTypesHideImages = false;

$komplaensAuditTypesImgPool = [
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/obyazatelnyy.png',
    '/img/audit/kadrovyy-audit.png',
];

$komplaensAuditTypesRows = [
    ['title' => 'Внутренний аудит', 'desc' => 'Независимая оценка процессов, контролей и соблюдения политик', 'href' => '/komplaens/vnutrenniy-audit'],
    ['title' => 'Построение СВК', 'desc' => 'Система внутреннего контроля: цели, процедуры, мониторинг', 'href' => '/komplaens/postroenie-sistemy-vnutrennego-kontrolya-svk'],
    ['title' => 'Комплаенс-система', 'desc' => 'Политики, регламенты и контрольные точки под ваш профиль рисков', 'href' => '/komplaens/komplaens-sistema'],
    ['title' => 'Управление рисками', 'desc' => 'Реестр рисков, методика и связь со стратегией и отчётностью', 'href' => '/komplaens/upravlenie-riskami'],
    ['title' => 'Антикоррупционный комплаенс', 'desc' => 'Программа, расследования и обучение под 273-ФЗ и лучшие практики', 'href' => '/komplaens/antikorrupcionnyy-komplaens'],
    ['title' => 'AML', 'desc' => 'Процедуры идентификации, мониторинг операций, обучение линии', 'href' => '/komplaens/aml-protivodeystvie-otmyvaniyu'],
    ['title' => 'Оценка рисков бизнеса', 'desc' => 'Диагностика угроз и уязвимостей с приоритизацией мер', 'href' => '/komplaens/ocenka-riskov-biznesa'],
];

$auditTypes = [];
$poolLen = count($komplaensAuditTypesImgPool);
foreach ($komplaensAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $komplaensAuditTypesImgPool[$i % $poolLen]];
}
