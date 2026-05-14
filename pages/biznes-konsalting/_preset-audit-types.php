<?php
declare(strict_types=1);
/**
 * Карточки слайдера для раздела «Консалтинг и сопровождение бизнеса».
 */
$auditTypesHideImages = false;

$biznesKonsaltingAuditTypesImgPool = [
    '/img/audit/kompleksnyy-audit.png',
    '/img/audit/finansovyy-audit.png',
    '/img/audit/nalogovyy-audit.png',
    '/img/audit/Initsiativnyy-audit.png',
    '/img/audit/obyazatelnyy.png',
    '/img/audit/kadrovyy-audit.png',
];

$biznesKonsaltingAuditTypesRows = [
    ['title' => 'Стратегический консалтинг', 'desc' => 'Цели, дорожные карты и контроль реализации стратегии', 'href' => '/biznes-konsalting/strategicheskiy-konsalting'],
    ['title' => 'Управленческий консалтинг', 'desc' => 'Оргструктура, процессы и KPI под рост компании', 'href' => '/biznes-konsalting/upravlencheskiy-konsalting'],
    ['title' => 'Бизнес-планирование', 'desc' => 'Планы, сценарии и обоснование для инвесторов и банка', 'href' => '/biznes-konsalting/biznes-planirovanie'],
    ['title' => 'Сопровождение сделок (M&A)', 'desc' => 'Поддержка на этапах сделки и пост-интеграции', 'href' => '/biznes-konsalting/soprovozhdenie-sdelok-ma'],
    ['title' => 'Регистрация бизнеса', 'desc' => 'Выбор формы, документы и взаимодействие с регистратором', 'href' => '/biznes-konsalting/registratsiya-biznesa'],
    ['title' => 'Ликвидация и реорганизация', 'desc' => 'Юридические процедуры с учётом кредиторов и сотрудников', 'href' => '/biznes-konsalting/likvidatsiya-i-reorganizatsiya'],
    ['title' => 'Инвентаризация имущества', 'desc' => 'Организация и документальное оформление результатов', 'href' => '/biznes-konsalting/uslugi-po-inventarizatsii-imuschestva'],
    ['title' => 'Бухгалтерские консультации', 'desc' => 'Разбор ситуаций и методика учёта под ваш контур', 'href' => '/biznes-konsalting/buhgalterskie-konsultatsii'],
    ['title' => 'Консультации по налогам', 'desc' => 'Точечные ответы и сопровождение спорных вопросов', 'href' => '/biznes-konsalting/konsultatsii-po-nalogam'],
    ['title' => 'Юридический консалтинг', 'desc' => 'Договоры, корпоративные вопросы и сопровождение проектов', 'href' => '/biznes-konsalting/yuridicheskie-konsaltingovye-uslugi'],
    ['title' => 'Управленческий учёт', 'desc' => 'Регламенты, отчёты для собственника и операционных команд', 'href' => '/biznes-konsalting/upravlencheskiy-uchet'],
    ['title' => 'Автоматизация управленческого учёта', 'desc' => 'Связка данных, дашборды и контроль показателей', 'href' => '/biznes-konsalting/avtomatizatsiya-upravlencheskogo-ucheta'],
    ['title' => 'Регистрация ООО', 'desc' => 'Пакет документов и сопровождение до записи в реестре', 'href' => '/biznes-konsalting/uslugi-po-registratsii-ooo'],
    ['title' => 'Подготовка ЛНА', 'desc' => 'Локальные нормативные акты под трудовое законодательство', 'href' => '/biznes-konsalting/podgotovka-lna'],
];

$auditTypes = [];
$poolLen = count($biznesKonsaltingAuditTypesImgPool);
foreach ($biznesKonsaltingAuditTypesRows as $i => $row) {
    $auditTypes[] = $row + ['img' => $biznesKonsaltingAuditTypesImgPool[$i % $poolLen]];
}
