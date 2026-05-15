<?php

declare(strict_types=1);

/**
 * Минимальный SMTP-клиент (AUTH LOGIN, SSL или STARTTLS) без внешних зависимостей.
 */
final class AudSmtpClient
{
    /** @var resource|null */
    private $fp = null;

    public function __construct(
        private readonly string $host,
        private readonly int $port,
        /** 'ssl' | 'tls' */
        private readonly string $encryption,
        private readonly string $username,
        private readonly string $password,
        private readonly int $timeoutSeconds = 25,
    ) {
    }

    public function send(
        string $fromEmail,
        string $fromName,
        string $replyToEmail,
        string $toEmail,
        string $subject,
        string $plainBody,
        ?string $htmlBody = null,
    ): bool {
        $enc = strtolower($this->encryption);
        if ($enc !== 'ssl' && $enc !== 'tls') {
            return false;
        }

        $remote = $enc === 'ssl'
            ? 'ssl://' . $this->host . ':' . $this->port
            : 'tcp://' . $this->host . ':' . $this->port;

        $ctx = stream_context_create([
            'ssl' => [
                'verify_peer' => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false,
            ],
        ]);

        $this->fp = @stream_socket_client(
            $remote,
            $errno,
            $errstr,
            $this->timeoutSeconds,
            STREAM_CLIENT_CONNECT,
            $ctx,
        );
        if (!is_resource($this->fp)) {
            return false;
        }

        stream_set_timeout($this->fp, $this->timeoutSeconds);

        try {
            $this->expect($this->readMultiline(), 220);
            $this->ehlo();

            if ($enc === 'tls') {
                $r = $this->cmd('STARTTLS');
                if ((int) substr($r, 0, 3) !== 220) {
                    return false;
                }
                $cryptoOk = @stream_socket_enable_crypto($this->fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
                if ($cryptoOk !== true) {
                    return false;
                }
                $this->ehlo();
            }

            $this->expect($this->cmd('AUTH LOGIN'), 334);
            $this->expect($this->cmd(base64_encode($this->username)), 334);
            $this->expect($this->cmd(base64_encode($this->password)), 235);

            $this->expect($this->cmd('MAIL FROM:<' . $this->sanitizeAddr($fromEmail) . '>'), 250);
            $this->expect($this->cmd('RCPT TO:<' . $this->sanitizeAddr($toEmail) . '>'), 250);

            $this->expect($this->cmd('DATA'), 354);

            $msgId = bin2hex(random_bytes(16));
            $fromHeader = $this->formatAddress($fromEmail, $fromName);
            $replyTo = $this->sanitizeAddr($replyToEmail) !== ''
                ? 'Reply-To: <' . $this->sanitizeAddr($replyToEmail) . '>'
                : '';
            $mimeHeaders = [
                'From: ' . $fromHeader,
                'To: ' . $this->formatAddress($toEmail, ''),
                $replyTo,
                'Subject: ' . $this->encodeSubject($subject),
                'MIME-Version: 1.0',
                'Message-ID: <' . $msgId . '@' . $this->host . '>',
                'Date: ' . gmdate('D, d M Y H:i:s') . ' +0000',
            ];

            if ($htmlBody !== null && $htmlBody !== '') {
                $b = 'aud_alt_' . bin2hex(random_bytes(12));
                $mimeHeaders[] = 'Content-Type: multipart/alternative; boundary="' . $b . '"';
                $mimeHeaders = array_values(array_filter($mimeHeaders, static fn (string $h): bool => $h !== ''));
                $plainNorm = str_replace(["\r\n", "\r"], "\n", $plainBody);
                $htmlNorm = str_replace(["\r\n", "\r"], "\n", $htmlBody);
                $body = '--' . $b . "\r\n"
                    . "Content-Type: text/plain; charset=UTF-8\r\n"
                    . "Content-Transfer-Encoding: 8bit\r\n\r\n"
                    . $plainNorm . "\r\n\r\n"
                    . '--' . $b . "\r\n"
                    . "Content-Type: text/html; charset=UTF-8\r\n"
                    . "Content-Transfer-Encoding: 8bit\r\n\r\n"
                    . $htmlNorm . "\r\n\r\n"
                    . '--' . $b . "--\r\n";
            } else {
                $mimeHeaders[] = 'Content-Type: text/plain; charset=UTF-8';
                $mimeHeaders[] = 'Content-Transfer-Encoding: 8bit';
                $mimeHeaders = array_values(array_filter($mimeHeaders, static fn (string $h): bool => $h !== ''));
                $body = str_replace(["\r\n", "\r"], "\n", $plainBody);
            }

            $body = $this->dotStuff($body);
            $payload = implode("\r\n", $mimeHeaders) . "\r\n\r\n" . $body . "\r\n.";
            $this->expect($this->cmd($payload), 250);
            $this->cmd('QUIT');
        } catch (Throwable) {
            $this->close();
            return false;
        }

        $this->close();
        return true;
    }

    private function close(): void
    {
        if (is_resource($this->fp)) {
            @fclose($this->fp);
        }
        $this->fp = null;
    }

    private function sanitizeAddr(string $email): string
    {
        return preg_replace('/[\r\n<>]/', '', trim($email)) ?? '';
    }

    private function formatAddress(string $email, string $name): string
    {
        $email = $this->sanitizeAddr($email);
        $name = trim(str_replace(["\r", "\n"], '', $name));
        if ($name === '') {
            return '<' . $email . '>';
        }

        if (function_exists('mb_encode_mimeheader')) {
            $encoded = mb_encode_mimeheader($name, 'UTF-8', 'B', "\r\n");
            $oneLine = preg_replace('/\s+/u', ' ', str_replace(["\r", "\n"], ' ', $encoded));

            return $oneLine . ' <' . $email . '>';
        }

        return '"' . addcslashes($name, '"\\') . '" <' . $email . '>';
    }

    private function encodeSubject(string $subject): string
    {
        if (function_exists('mb_encode_mimeheader')) {
            return mb_encode_mimeheader($subject, 'UTF-8', 'B', "\r\n");
        }

        return '=?UTF-8?B?' . base64_encode($subject) . '?=';
    }

    private function dotStuff(string $body): string
    {
        $out = [];
        foreach (explode("\n", $body) as $line) {
            $line = rtrim($line, "\r");
            if (str_starts_with($line, '.')) {
                $out[] = '.' . $line;
            } else {
                $out[] = $line;
            }
        }

        return implode("\r\n", $out);
    }

    private function readMultiline(): string
    {
        $fp = $this->fp;
        if (!is_resource($fp)) {
            return '';
        }
        $data = '';
        while (!feof($fp)) {
            $line = @fgets($fp, 8192);
            if ($line === false) {
                break;
            }
            $data .= $line;
            if (strlen($line) >= 4 && $line[3] === ' ') {
                break;
            }
        }

        return $data;
    }

    private function cmd(string $line): string
    {
        $fp = $this->fp;
        if (!is_resource($fp)) {
            return '';
        }
        $payload = str_replace(["\r", "\n"], '', $line);
        @fwrite($fp, $payload . "\r\n");

        return $this->readMultiline();
    }

    private function ehlo(): void
    {
        $host = isset($_SERVER['HTTP_HOST']) ? preg_replace('/[^\w.-]/', '', (string) $_SERVER['HTTP_HOST']) : 'localhost';
        if ($host === '') {
            $host = 'localhost';
        }
        $this->expect($this->cmd('EHLO ' . $host), 250);
    }

    private function expect(string $reply, int $code): void
    {
        if ((int) substr(trim($reply), 0, 3) !== $code) {
            throw new RuntimeException('SMTP unexpected reply');
        }
    }
}
