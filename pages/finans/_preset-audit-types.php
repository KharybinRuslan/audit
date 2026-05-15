<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Финансовый консалтинг и оценка».
 */
$auditTypesHideImages = false;

$finansAuditTypesImgPool = [
    '/img/audit/finansovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/kadrovyy-audit.png',
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/obyazatelnyy.png',
];

$finansAuditTypesRows = [
    ['title' => 'Финансовый анализ компании', 'desc' => 'Ликвидность, рентабельность и устойчивость по вашей отчётности', 'href' => '/finans/finansovyy-analiz-kompanii'],
    ['title' => 'Финансовое моделирование', 'desc' => 'Сценарии P&amp;L, денежного потока и чувствительность к допущениям', 'href' => '/finans/finansovoe-modelirovanie'],
    ['title' => 'Оценка бизнеса', 'desc' => 'Справедливая стоимость для сделки, спора или корпоративного решения', 'href' => '/finans/otsenka-biznesa'],
    ['title' => 'Оценка активов (имущество, НМА)', 'desc' => 'Имущество и нематериальные активы под цели сделки и учёта', 'href' => '/finans/otsenka-aktivov'],
    ['title' => 'Инвестиционный анализ', 'desc' => 'Окупаемость, IRR и риски вложений в проекты и активы', 'href' => '/finans/investitsionnyy-analiz'],
    ['title' => 'Анализ финансово-хозяйственной деятельности', 'desc' => 'Эффективность операций, затрат и оборотного капитала', 'href' => '/finans/analiz-fhdy-predpriyatiya'],
    ['title' => 'Постановка финансового учёта', 'desc' => 'Политика, регламенты и сопровождение внедрения в компании', 'href' => '/finans/postanovka-finansovogo-ucheta'],
    ['title' => 'Финансовые отчёты для судов', 'desc' => 'Расчёты и пояснения для процесса по запросу сторон', 'href' => '/finans/finansovye-otchety-dlya-sudov'],
    ['title' => 'Анализ для пользователей отчётности', 'desc' => 'Понятные выводы для собственников, банка и совета', 'href' => '/finans/finansovyy-analiz-dlya-polzovateley'],
    ['title' => 'Разработка финансовой модели', 'desc' => 'Модель под кредит, инвестора или внутренний бюджет', 'href' => '/finans/razrabotka-finansovoy-modeli'],
    ['title' => 'Автоматизация финансового учёта', 'desc' => 'От выгрузок до дашбордов без ручного «Excel-ада»', 'href' => '/finans/avtomatizatsiya-finansovogo-ucheta'],
    ['title' => 'Аудит инвестиционного портфеля', 'desc' => 'Состав активов, доходность и соответствие договорам', 'href' => '/finans/audit-investitsionnogo-portfelya'],
    ['title' => 'Консультации по размещению активов', 'desc' => 'Ликвидность, риски и доходность в рамках вашей политики', 'href' => '/finans/konsultatsii-po-razmeshcheniyu-aktivov'],
];

$auditTypes = [];
$poolLen = count($finansAuditTypesImgPool);
foreach ($finansAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $finansAuditTypesImgPool[$i % $poolLen]];
}
