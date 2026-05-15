<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Форензик».
 */
$auditTypesHideImages = false;

$forenzikAuditTypesImgPool = [
    '/img/audit/obyazatelnyy.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/kadrovyy-audit.png',
];

$forenzikAuditTypesRows = [
    ['title' => 'Расследование финансовых мошенничеств', 'desc' => 'Реконструкция схем, поиск скрытых потоков и подготовка выводов для руководства', 'href' => '/forenzik/rassledovanie-finansovyh-moshennichestv'],
    ['title' => 'Проверка контрагентов', 'desc' => 'Due diligence контрагентов: связи, репутация и «красные флаги» до платежа', 'href' => '/forenzik/proverka-kontragentov'],
    ['title' => 'Антикоррупционные расследования', 'desc' => 'Сбор фактов по подозрению в коррупции с соблюдением процедур и конфиденциальности', 'href' => '/forenzik/antikorrupcionnye-rassledovaniya'],
    ['title' => 'Анализ подозрительных операций', 'desc' => 'Выборка и разбор операций, отклонений от политики и аномалий в учёте', 'href' => '/forenzik/analiz-podozritelnyh-operatsiy'],
    ['title' => 'Корпоративные расследования', 'desc' => 'Внутренние расследования по утечкам, конфликту интересов и злоупотреблениям полномочиями', 'href' => '/forenzik/korporativnye-rassledovaniya'],
    ['title' => 'Сбор доказательств для суда', 'desc' => 'Фиксация и систематизация доказательной базы под процессуальные требования', 'href' => '/forenzik/sbor-dokazatelstv-dlya-suda'],
    ['title' => 'Эффективная система безопасности', 'desc' => 'Контуры контроля: политики, мониторинг и реагирование на инциденты', 'href' => '/forenzik/effektivnaya-sistema-bezopasnosti'],
    ['title' => 'Анализ утечек и злоупотреблений', 'desc' => 'Разбор инцидентов с данными, активами и коммерческой тайной', 'href' => '/forenzik/analiz-utechek-i-zloupotrebleniy'],
    ['title' => 'Проверка сотрудников (fraud check)', 'desc' => 'Проверки благонадёжности и поведенческих рисков для чувствительных ролей', 'href' => '/forenzik/proverka-sotrudnikov-fraud-check'],
    ['title' => 'Digital forensic', 'desc' => 'Цифровые следы: носители, переписка, логи и восстановление хронологии', 'href' => '/forenzik/digital-forensic'],
    ['title' => 'Форензик при сделках (M&A)', 'desc' => 'Поиск скрытых обязательств и мошеннических схем в рамках due diligence', 'href' => '/forenzik/forenzik-pri-sdelkah-ma'],
];

$auditTypes = [];
$poolLen = count($forenzikAuditTypesImgPool);
foreach ($forenzikAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $forenzikAuditTypesImgPool[$i % $poolLen]];
}
