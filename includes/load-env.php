<?php

declare(strict_types=1);

/**
 * Подгружает KEY=value из корневого .env в putenv()/$_ENV (один раз).
 * На хостинге переменные лучше задавать в панели; .env не коммитить.
 */
if (!function_exists('aud_load_env_file')) {
    function aud_load_env_file(?string $path = null): void
    {
        static $done = false;
        if ($done) {
            return;
        }
        $done = true;

        $path ??= dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env';
        if (!is_readable($path)) {
            return;
        }

        $raw = @file_get_contents($path);
        if ($raw === false || $raw === '') {
            return;
        }

        foreach (preg_split("/\r\n|\n|\r/", $raw) as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }
            if (!preg_match('/^([A-Za-z_][A-Za-z0-9_]*)=(.*)$/', $line, $m)) {
                continue;
            }
            $key = $m[1];
            $val = $m[2];
            $val = trim($val);
            if ($val !== '' && ($val[0] === '"' || $val[0] === "'")) {
                $q = $val[0];
                if (str_ends_with($val, $q) && strlen($val) >= 2) {
                    $val = substr($val, 1, -1);
                }
            }
            putenv($key . '=' . $val);
            $_ENV[$key] = $val;
        }
    }
}
