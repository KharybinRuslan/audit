<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/load-env.php';
aud_load_env_file();

require_once __DIR__ . '/includes/mail/audit-request-mail.php';

$result = aud_audit_request_handle_post();
$base = aud_redirect_url_from_post();

if ($result['ok']) {
    header('Location: ' . $base . 'audit_request=sent', true, 303);
    exit;
}

$code = match ($result['message']) {
    'validation' => 'validation',
    'ratelimit' => 'ratelimit',
    'config' => 'config',
    'send' => 'send',
    'captcha' => 'captcha',
    default => 'error',
};
header('Location: ' . $base . 'audit_request=' . rawurlencode($code), true, 303);
exit;
