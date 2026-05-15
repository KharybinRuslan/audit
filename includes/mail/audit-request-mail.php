<?php

declare(strict_types=1);

require_once __DIR__ . '/smtp-client.php';
require_once dirname(__DIR__) . '/recaptcha.php';

/**
 * @return array{ok: bool, message: string}
 */
function aud_audit_request_handle_post(): array
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        return ['ok' => false, 'message' => 'method'];
    }

    $hp = isset($_POST['company_site']) ? trim((string) $_POST['company_site']) : '';
    if ($hp !== '') {
        return ['ok' => true, 'message' => 'ok'];
    }

    $name = aud_post_string('name', 200);
    $phone = aud_post_string('phone', 80);
    $email = aud_post_string('email', 254);
    $service = aud_post_string('service', 64);
    $comment = aud_post_string('comment', 4000);
    $formSource = aud_post_string('form_source', 64);
    $consent = isset($_POST['consent']);

    if ($name === '' || $phone === '' || $email === '' || $service === '' || !$consent) {
        return ['ok' => false, 'message' => 'validation'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'validation'];
    }

    $allowedServices = [
        'audit', 'tax', 'financial', 'accounting', 'due-diligence', 'hr', 'ifrs',
        'compliance', 'consulting', 'training', 'other',
    ];
    if (!in_array($service, $allowedServices, true)) {
        return ['ok' => false, 'message' => 'validation'];
    }

    $ip = aud_client_ip();
    if (aud_recaptcha_enabled()) {
        $captchaTok = isset($_POST['g-recaptcha-response']) ? trim((string) $_POST['g-recaptcha-response']) : '';
        if (!aud_recaptcha_verify($captchaTok, $ip)) {
            return ['ok' => false, 'message' => 'captcha'];
        }
    }

    if (!aud_rate_limit_allow('audit_request', $ip, 8, 3600)) {
        return ['ok' => false, 'message' => 'ratelimit'];
    }

    $to = getenv('AUD_MAIL_TO') ?: 'info@auditte.ru';
    $to = trim($to);
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'config'];
    }

    $fromEmail = trim((string) (getenv('AUD_MAIL_FROM_EMAIL') ?: $to));
    if (!filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'config'];
    }

    $fromName = trim((string) (getenv('AUD_MAIL_FROM_NAME') ?: 'Заявка с сайта auditte.ru'));
    $subject = 'Заявка с сайта';

    $serviceLabel = aud_service_label_ru($service);
    $returnRaw = aud_post_string('_return', 512);
    $sourceLabel = aud_audit_request_resolve_source_label($formSource, $returnRaw);
    $lines = [
        'Новая заявка с сайта auditte.ru',
        '',
        'Имя: ' . $name,
        'Телефон: ' . $phone,
        'E-mail: ' . $email,
        'Услуга: ' . $serviceLabel . ' (' . $service . ')',
        '',
        'Комментарий:',
        $comment !== '' ? $comment : '—',
        'Источник: ' . $sourceLabel,
        'IP: ' . $ip,
    ];
    $bodyPlain = implode("\n", $lines);
    $bodyHtml = aud_audit_request_mail_html(
        $name,
        $phone,
        $email,
        $serviceLabel,
        $service,
        $sourceLabel,
        $ip,
        $comment !== '' ? $comment : '—',
    );

    $smtpHost = trim((string) (getenv('AUD_SMTP_HOST') ?: ''));
    $sent = false;
    if ($smtpHost !== '') {
        $port = (int) (getenv('AUD_SMTP_PORT') ?: '465');
        if ($port < 1 || $port > 65535) {
            $port = 465;
        }
        $enc = strtolower(trim((string) (getenv('AUD_SMTP_ENCRYPTION') ?: 'ssl')));
        if ($enc !== 'tls') {
            $enc = 'ssl';
        }
        $user = (string) (getenv('AUD_SMTP_USER') ?: '');
        $pass = (string) (getenv('AUD_SMTP_PASSWORD') ?: '');
        if ($user === '' || $pass === '') {
            return ['ok' => false, 'message' => 'config'];
        }
        $client = new AudSmtpClient($smtpHost, $port, $enc, $user, $pass);
        $sent = $client->send($fromEmail, $fromName, $email, $to, $subject, $bodyPlain, $bodyHtml);
    } else {
        $sent = aud_mail_send_native($to, $subject, $bodyPlain, $fromEmail, $fromName, $email, $bodyHtml);
    }

    return $sent ? ['ok' => true, 'message' => 'sent'] : ['ok' => false, 'message' => 'send'];
}

/**
 * Путь страницы из поля _return (pathname или полный URL только своего домена).
 */
function aud_audit_request_normalize_return_path(string $returnRaw): string
{
    $returnRaw = trim($returnRaw);
    if ($returnRaw === '') {
        return '';
    }
    if (preg_match('#^https?://#i', $returnRaw)) {
        $parts = parse_url($returnRaw);
        if (!is_array($parts) || empty($parts['host'])) {
            return '';
        }
        $allowed = ['auditte.ru', 'www.auditte.ru'];
        if (!empty($_SERVER['HTTP_HOST'])) {
            $allowed[] = strtolower((string) $_SERVER['HTTP_HOST']);
        }
        $env = getenv('AUD_SITE_URL');
        if (is_string($env) && trim($env) !== '') {
            $h = parse_url(trim($env), PHP_URL_HOST);
            if (is_string($h) && $h !== '') {
                $allowed[] = strtolower($h);
            }
        }
        $host = strtolower((string) $parts['host']);
        if (!in_array($host, array_unique($allowed), true)) {
            return '';
        }
        $p = isset($parts['path']) ? (string) $parts['path'] : '/';

        return aud_safe_return_path($p);
    }

    $pathOnly = explode('?', $returnRaw, 2)[0];

    return aud_safe_return_path($pathOnly);
}

/**
 * Короткое название страницы по пути (для письма).
 */
function aud_audit_request_page_label_for_path(string $path): string
{
    if ($path === '') {
        return '';
    }
    $path = $path === '/' ? '/' : rtrim($path, '/');
    if ($path === '') {
        $path = '/';
    }

    static $titles = [
        '/' => 'Главная',
        '/services' => 'Услуги',
        '/contacts' => 'Контакты',
        '/about' => 'О компании',
        '/news' => 'Новости',
        '/audit' => 'Аудиторские услуги',
        '/finans' => 'Финансы и оценка',
        '/buhgalteriya' => 'Бухгалтерия',
        '/biznes-konsalting' => 'Бизнес-консалтинг',
        '/forenzik' => 'Forensic',
        '/kadrovyy-audit' => 'Кадровый аудит',
        '/msfo' => 'МСФО',
        '/komplaens' => 'Комплаенс',
        '/hsep' => 'HSEP / обучение',
        '/due-diligence' => 'Due diligence',
        '/konsalting' => 'Налоговый консалтинг',
        '/politika-konfidencialnosti' => 'Политика конфиденциальности',
        '/karta-sajta' => 'Карта сайта',
    ];

    if (isset($titles[$path])) {
        return $titles[$path];
    }

    foreach ($titles as $base => $title) {
        if ($base !== '/' && str_starts_with($path, $base . '/')) {
            return $title . ' — ' . $path;
        }
    }

    return $path;
}

function aud_audit_request_form_source_fallback(string $src): string
{
    return match (trim($src)) {
        'hero' => 'Главная страница (путь не передан)',
        'contacts' => 'Форма в блоке контактов (путь не передан)',
        'audit-modal' => 'Модальное окно (путь не передан)',
        '' => '—',
        default => $src,
    };
}

/**
 * Человекочитаемый «Источник»: учитывает _return (реальная страница) и form_source (блок / модалка).
 */
function aud_audit_request_resolve_source_label(string $formSource, string $returnRaw): string
{
    $path = aud_audit_request_normalize_return_path($returnRaw);
    if ($path === '') {
        return aud_audit_request_form_source_fallback($formSource);
    }

    $page = aud_audit_request_page_label_for_path($path);

    return match ($formSource) {
        'audit-modal' => 'Модальное окно со страницы «' . $page . '»',
        'hero' => 'Блок формы на странице «' . $page . '»',
        'contacts' => 'Форма на странице «' . $page . '»',
        default => 'Страница «' . $page . '»',
    };
}

function aud_h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function aud_audit_request_mail_html(
    string $name,
    string $phone,
    string $email,
    string $serviceLabel,
    string $serviceKey,
    string $sourceLabel,
    string $ip,
    string $comment,
): string {
    $row = static function (string $label, string $value): string {
        return '<tr><td style="padding:10px 0;border-bottom:1px solid #ececf0;font-size:14px;color:#6b6b70;width:38%;vertical-align:top;">'
            . aud_h($label) . '</td><td style="padding:10px 0;border-bottom:1px solid #ececf0;font-size:14px;color:#1a1a1a;font-weight:600;word-break:break-word;">'
            . aud_h($value) . '</td></tr>';
    };

    $rows = $row('Имя', $name)
        . $row('Телефон', $phone)
        . $row('E-mail', $email)
        . $row('Услуга', $serviceLabel . ' (' . $serviceKey . ')')
        . $row('Комментарий', $comment)
        . $row('Источник', $sourceLabel)
        . $row('IP', $ip);

    return '<!DOCTYPE html><html lang="ru"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">'
        . '<title>Заявка</title></head><body style="margin:0;padding:0;background:#eef0f3;">'
        . '<table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#eef0f3;padding:24px 12px;">'
        . '<tr><td align="center">'
        . '<table role="presentation" cellpadding="0" cellspacing="0" width="600" style="max-width:600px;width:100%;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 8px 32px rgba(15,15,20,0.08);">'
        . '<tr><td style="padding:22px 28px;background:linear-gradient(105deg,#dd6f20 0%,#e02727 55%,#c41f1f 100%);">'
        . '<p style="margin:0;font-family:Arial,Helvetica,sans-serif;font-size:11px;letter-spacing:0.12em;text-transform:uppercase;color:rgba(255,255,255,0.88);">auditte.ru</p>'
        . '<h1 style="margin:8px 0 0;font-family:Arial,Helvetica,sans-serif;font-size:22px;line-height:1.25;color:#ffffff;font-weight:700;">Новая заявка с сайта</h1>'
        . '</td></tr>'
        . '<tr><td style="padding:8px 28px 28px;font-family:Arial,Helvetica,sans-serif;">'
        . '<table role="presentation" cellpadding="0" cellspacing="0" width="100%">' . $rows . '</table>'
        . '<p style="margin:20px 0 0;font-size:12px;line-height:1.5;color:#9a9aa3;">Это письмо сформировано автоматически формой на сайте.</p>'
        . '</td></tr></table></td></tr></table></body></html>';
}

function aud_service_label_ru(string $key): string
{
    $map = [
        'audit' => 'Аудиторские услуги',
        'tax' => 'Налоговый консалтинг и налоговая безопасность',
        'financial' => 'Финансовый консалтинг и оценка',
        'accounting' => 'Бухгалтерский консалтинг и аутсорсинг',
        'due-diligence' => 'Due diligence и forensic',
        'hr' => 'Кадровый аудит и консалтинг',
        'ifrs' => 'МСФО и международная отчетность',
        'compliance' => 'Коплаенс, риск-контроль, внутренний аудит',
        'consulting' => 'Консалтинг и сопровождение бизнеса',
        'training' => 'Обучение и академия HSEP',
        'other' => 'Другое',
    ];

    return $map[$key] ?? $key;
}

function aud_post_string(string $key, int $maxLen): string
{
    if (!isset($_POST[$key])) {
        return '';
    }
    $s = is_array($_POST[$key]) ? '' : (string) $_POST[$key];
    $s = trim($s);
    if (mb_strlen($s, 'UTF-8') > $maxLen) {
        $s = mb_substr($s, 0, $maxLen, 'UTF-8');
    }

    return $s;
}

function aud_client_ip(): string
{
    $xff = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? (string) $_SERVER['HTTP_X_FORWARDED_FOR'] : '';
    if ($xff !== '') {
        $first = trim(explode(',', $xff)[0]);
        if (filter_var($first, FILTER_VALIDATE_IP)) {
            return $first;
        }
    }
    $ra = isset($_SERVER['REMOTE_ADDR']) ? (string) $_SERVER['REMOTE_ADDR'] : '';

    return filter_var($ra, FILTER_VALIDATE_IP) ? $ra : '0.0.0.0';
}

function aud_rate_limit_allow(string $bucket, string $ip, int $maxHits, int $windowSeconds): bool
{
    $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'aud-mail-rl';
    if (!is_dir($dir) && !@mkdir($dir, 0700, true) && !is_dir($dir)) {
        return true;
    }
    $file = $dir . DIRECTORY_SEPARATOR . preg_replace('/[^a-zA-Z0-9._-]/', '_', $bucket . '-' . $ip) . '.json';
    $now = time();
    $state = ['window_start' => $now, 'count' => 0];
    if (is_readable($file)) {
        $raw = @file_get_contents($file);
        if ($raw !== false) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded) && isset($decoded['window_start'], $decoded['count'])) {
                $state['window_start'] = (int) $decoded['window_start'];
                $state['count'] = (int) $decoded['count'];
            }
        }
    }
    if ($now - $state['window_start'] > $windowSeconds) {
        $state['window_start'] = $now;
        $state['count'] = 0;
    }
    $state['count']++;
    @file_put_contents($file, json_encode($state, JSON_UNESCAPED_UNICODE), LOCK_EX);

    return $state['count'] <= $maxHits;
}

/**
 * Заголовок From: без ASCII-кавычек вокруг имени (MIME phrase) — так клиенты реже показывают «'…'» в списке писем.
 */
function aud_mail_format_from_header(string $fromEmail, string $fromName): string
{
    $fromEmail = trim($fromEmail);
    $fromName = trim(str_replace(["\r", "\n"], '', $fromName));
    if ($fromName === '') {
        return $fromEmail;
    }
    if (function_exists('mb_encode_mimeheader')) {
        $encoded = mb_encode_mimeheader($fromName, 'UTF-8', 'B', "\r\n");
        $oneLine = preg_replace('/\s+/u', ' ', str_replace(["\r", "\n"], ' ', $encoded));

        return $oneLine . ' <' . $fromEmail . '>';
    }

    return sprintf('"%s" <%s>', addcslashes($fromName, '"\\'), $fromEmail);
}

function aud_mail_send_native(
    string $to,
    string $subject,
    string $plainBody,
    string $fromEmail,
    string $fromName,
    string $replyToEmail,
    ?string $htmlBody = null,
): bool {
    $fromHeader = aud_mail_format_from_header($fromEmail, $fromName);

    $reply = filter_var($replyToEmail, FILTER_VALIDATE_EMAIL) ? $replyToEmail : $fromEmail;

    $headers = [
        'MIME-Version: 1.0',
        'From: ' . $fromHeader,
        'Reply-To: ' . $reply,
    ];

    if ($htmlBody !== null && $htmlBody !== '') {
        $b = 'bnd_' . bin2hex(random_bytes(16));
        $headers[] = 'Content-Type: multipart/alternative; boundary="' . $b . '"';
        $plainNorm = str_replace(["\r\n", "\r"], "\n", $plainBody);
        $htmlNorm = str_replace(["\r\n", "\r"], "\n", $htmlBody);
        $message = '--' . $b . "\r\n"
            . "Content-Type: text/plain; charset=UTF-8\r\n"
            . "Content-Transfer-Encoding: 8bit\r\n\r\n"
            . $plainNorm . "\r\n\r\n"
            . '--' . $b . "\r\n"
            . "Content-Type: text/html; charset=UTF-8\r\n"
            . "Content-Transfer-Encoding: 8bit\r\n\r\n"
            . $htmlNorm . "\r\n\r\n"
            . '--' . $b . "--\r\n";
    } else {
        $headers[] = 'Content-Type: text/plain; charset=UTF-8';
        $headers[] = 'Content-Transfer-Encoding: 8bit';
        $message = $plainBody;
    }

    $encSub = function_exists('mb_encode_mimeheader')
        ? mb_encode_mimeheader($subject, 'UTF-8', 'B', "\r\n")
        : $subject;

    return @mail($to, $encSub, $message, implode("\r\n", $headers), '-f' . $fromEmail);
}

function aud_safe_return_path(string $raw): string
{
    $raw = trim($raw);
    if ($raw === '') {
        return '/';
    }
    if (!str_starts_with($raw, '/') || str_starts_with($raw, '//')) {
        return '/';
    }
    if (str_contains($raw, "\r") || str_contains($raw, "\n")) {
        return '/';
    }
    if (strlen($raw) > 512) {
        return '/';
    }

    return $raw;
}

function aud_redirect_url_from_post(): string
{
    $return = isset($_POST['_return']) ? (string) $_POST['_return'] : '';
    $path = aud_safe_return_path($return);
    if ($path === '/' && !empty($_SERVER['HTTP_REFERER'])) {
        $ref = parse_url((string) $_SERVER['HTTP_REFERER']);
        $host = isset($ref['host']) ? strtolower((string) $ref['host']) : '';
        $self = isset($_SERVER['HTTP_HOST']) ? strtolower((string) $_SERVER['HTTP_HOST']) : '';
        $p = isset($ref['path']) ? (string) $ref['path'] : '';
        if ($host !== '' && $self !== '' && $host === $self) {
            $path = aud_safe_return_path($p);
        }
    }

    $sep = str_contains($path, '?') ? '&' : '?';

    return $path . $sep;
}
