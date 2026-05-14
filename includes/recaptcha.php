<?php

declare(strict_types=1);

if (!function_exists('aud_recaptcha_site_key')) {
    function aud_recaptcha_site_key(): string
    {
        return trim((string) (getenv('AUD_RECAPTCHA_SITE_KEY') ?: ''));
    }

    function aud_recaptcha_secret_key(): string
    {
        return trim((string) (getenv('AUD_RECAPTCHA_SECRET_KEY') ?: ''));
    }

    function aud_recaptcha_enabled(): bool
    {
        return aud_recaptcha_site_key() !== '' && aud_recaptcha_secret_key() !== '';
    }

    /**
     * Проверка токена Google reCAPTCHA v2 (siteverify).
     */
    function aud_recaptcha_verify(string $token, string $remoteIp): bool
    {
        $secret = aud_recaptcha_secret_key();
        if ($secret === '') {
            return false;
        }
        $token = trim($token);
        if ($token === '') {
            return false;
        }

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $fields = [
            'secret' => $secret,
            'response' => $token,
            'remoteip' => $remoteIp,
        ];

        $raw = aud_recaptcha_post($url, $fields, 12);
        if ($raw === null || $raw === '') {
            return false;
        }

        $data = json_decode($raw, true);
        if (!is_array($data) || empty($data['success'])) {
            return false;
        }

        return true;
    }

    /**
     * @param array<string, string> $fields
     */
    function aud_recaptcha_post(string $url, array $fields, int $timeoutSeconds): ?string
    {
        $body = http_build_query($fields, '', '&');

        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            if ($ch === false) {
                return null;
            }
            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $body,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
                CURLOPT_TIMEOUT => $timeoutSeconds,
                CURLOPT_CONNECTTIMEOUT => min(10, $timeoutSeconds),
            ]);
            $out = curl_exec($ch);
            curl_close($ch);

            return is_string($out) ? $out : null;
        }

        $ctx = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => $body,
                'timeout' => $timeoutSeconds,
            ],
        ]);
        $out = @file_get_contents($url, false, $ctx);

        return is_string($out) ? $out : null;
    }
}
