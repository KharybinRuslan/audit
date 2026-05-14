<?php

declare(strict_types=1);

/**
 * Публичный URL сайта (canonical, Open Graph, абсолютные ссылки).
 *
 * На продакшене https://auditte.ru задайте переменную окружения AUD_SITE_URL=https://auditte.ru
 * (без завершающего слеша), если сайт за прокси и $_SERVER не отражает схему/хост.
 * См. .env.example в корне репозитория.
 */
if (!function_exists('aud_site_public_base_url')) {
    function aud_site_public_base_url(): string
    {
        $fromEnv = getenv('AUD_SITE_URL');
        if (is_string($fromEnv) && trim($fromEnv) !== '') {
            $u = trim($fromEnv);
            if (preg_match('#^https?://#i', $u)) {
                return rtrim($u, '/');
            }
        }

        $host = isset($_SERVER['HTTP_HOST']) ? strtolower((string) $_SERVER['HTTP_HOST']) : '';
        if ($host === 'auditte.ru' || str_ends_with($host, '.auditte.ru')) {
            return 'https://auditte.ru';
        }

        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $hostRaw = isset($_SERVER['HTTP_HOST']) ? (string) $_SERVER['HTTP_HOST'] : 'localhost';

        return $scheme . '://' . $hostRaw;
    }
}
