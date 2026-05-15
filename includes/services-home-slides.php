<?php

declare(strict_types=1);

/**
 * Данные для блока услуг на главной: те же разделы, что в меню шапки, + короткое описание и ссылка.
 *
 * @return list<array{label: string, href: string, desc: string}>
 */
function aud_services_home_slide_rows(): array
{
    $menuFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'site-header' . DIRECTORY_SEPARATOR . 'site-header-menu-data.php';
    $menu = [];
    if (is_readable($menuFile)) {
        require_once $menuFile;
        if (isset($siteHeaderMenuServices) && is_array($siteHeaderMenuServices)) {
            $menu = $siteHeaderMenuServices;
        } elseif (isset($GLOBALS['siteHeaderMenuServices']) && is_array($GLOBALS['siteHeaderMenuServices'])) {
            $menu = $GLOBALS['siteHeaderMenuServices'];
        }
    }
    $descriptions = [
        'Обязательный и инициативный аудит, отчётность и сопровождение проверок — с фокусом на риски и прозрачность для бизнеса.',
        'Налоговые консультации, диагностика, возражения на акты и сопровождение в спорах с ФНС.',
        'Финансовый анализ, оценка и моделирование, постановка учёта и поддержка при сделках и инвестициях.',
        'Бухгалтерское сопровождение, аутсорсинг, восстановление учёта и процессы под ваши задачи и отрасль.',
        'Forensic: расследования, проверка контрагентов и сотрудников, корпоративная безопасность и доказательная база.',
        'Кадровый аудит, проверка кадрового делопроизводства, соответствие ТК и снижение штрафных рисков.',
        'Подготовка и аудит отчётности по МСФО, переход на стандарты, автоматизация и консультации по применению.',
        'Внутренний аудит, СВК, комплаенс, управление рисками и антикоррупционные процедуры.',
        'Стратегический и управленческий консалтинг, сопровождение сделок M&A, регистрация и реорганизация компаний.',
        'Академия HSEP: курсы по аудиту, МСФО, налогам и внутреннему контролю для вашей команды.',
        'Due diligence: финансовый, налоговый, юридический и операционный анализ при сделках и для инвесторов.',
    ];
    $out = [];
    $i = 0;
    foreach ($menu as $cat) {
        if (!is_array($cat)) {
            continue;
        }
        $label = isset($cat['title']) ? trim((string) $cat['title']) : '';
        $href = isset($cat['href']) ? trim((string) $cat['href']) : '';
        if ($label === '' || $href === '') {
            continue;
        }
        if ($href[0] !== '/') {
            $href = '/' . ltrim($href, '/');
        }
        $out[] = [
            'label' => $label,
            'href' => $href,
            'desc' => $descriptions[$i] ?? $label,
        ];
        $i++;
    }
    if ($out !== []) {
        return $out;
    }

    return [
        ['label' => 'Аудиторские услуги', 'href' => '/audit', 'desc' => $descriptions[0]],
        ['label' => 'Налоговый консалтинг и налоговая безопасность', 'href' => '/konsalting', 'desc' => $descriptions[1]],
        ['label' => 'Финансовый консалтинг и оценка', 'href' => '/finans', 'desc' => $descriptions[2]],
        ['label' => 'Бухгалтерский консалтинг и аутсорсинг', 'href' => '/buhgalteriya', 'desc' => $descriptions[3]],
        ['label' => 'Форензик', 'href' => '/forenzik', 'desc' => $descriptions[4]],
        ['label' => 'Кадровый аудит', 'href' => '/kadrovyy-audit', 'desc' => $descriptions[5]],
        ['label' => 'МСФО и международная отчетность', 'href' => '/msfo', 'desc' => $descriptions[6]],
        ['label' => 'Комплаенс, риск-контроль, внутренний аудит', 'href' => '/komplaens', 'desc' => $descriptions[7]],
        ['label' => 'Консалтинг и сопровождение бизнеса', 'href' => '/biznes-konsalting', 'desc' => $descriptions[8]],
        ['label' => 'Обучение и академия HSEP', 'href' => '/hsep', 'desc' => $descriptions[9]],
        ['label' => 'DUE diligence', 'href' => '/due-diligence', 'desc' => $descriptions[10]],
    ];
}
