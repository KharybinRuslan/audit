<?php

declare(strict_types=1);

/**
 * Единый фактический адрес офиса для сайта (подвал, контакты, политика из миграции и т.д.).
 */
if (!function_exists('aud_site_office_address_plain')) {
    function aud_site_office_address_plain(): string
    {
        return 'г. Москва, Гамсоновский пер., 2, (метро Тульская)';
    }
}

if (!function_exists('aud_site_office_address_html')) {
    /**
     * Для вывода в разметке (перенос перед «метро»).
     */
    function aud_site_office_address_html(): string
    {
        return 'г. Москва, Гамсоновский пер., 2,<br>(метро Тульская)';
    }
}

if (!function_exists('aud_site_normalize_office_addresses_in_html')) {
    /**
     * Подмена устаревших формулировок адреса в HTML из миграции (политика, контакты WP и т.п.).
     */
    function aud_site_normalize_office_addresses_in_html(string $html): string
    {
        if ($html === '') {
            return $html;
        }
        $to = aud_site_office_address_html();
        $literals = [
            '125009, г. Москва, Гамсоновский пер., 2, стр. 2, этаж 2, офис 211 (метро Тульская)',
            'г. Москва, Гамсоновский пер., 2, стр. 2, этаж 2, офис 211 (метро Тульская)',
            '125009, город Москва, Газетный пер, д. 3-5 стр. 1, этаж 3, помещ. I ком. 83',
            'г. Москва, Газетный переулок, д. 5',
        ];
        foreach ($literals as $f) {
            $html = str_replace($f, $to, $html);
        }

        return preg_replace(
            '#г\.\s*Москва,\s*Газетный\s+переулок,\s*д\.\s*5#iu',
            $to,
            $html
        ) ?? $html;
    }
}
