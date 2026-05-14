<?php
declare(strict_types=1);

require_once __DIR__ . '/favicon-meta.php';
require_once __DIR__ . '/seo/schema-jsonld.php';

/**
 * Неблокирующие стили: media=print → all после загрузки (Lighthouse «render-blocking»).
 */
function aud_render_blocking_styles(array $hrefs): void
{
    foreach ($hrefs as $href) {
        $h = htmlspecialchars($href, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo '<link rel="stylesheet" href="' . $h . '">' . "\n";
    }
}

function aud_render_deferred_styles(array $hrefs): void
{
    foreach ($hrefs as $href) {
        $h = htmlspecialchars($href, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        echo '<link rel="stylesheet" href="' . $h . '" media="print" onload="this.media=\'all\'">' . "\n";
        echo '<noscript><link rel="stylesheet" href="' . $h . '"></noscript>' . "\n";
    }
}

/**
 * Пути к CSS «оболочки» (main + шапка + hero).
 *
 * @return list<string>
 */
function aud_critical_shell_source_paths(): array
{
    $root = dirname(__DIR__);

    return [
        $root . '/css/main.css',
        $root . '/components/site-header/site-header.css',
        $root . '/components/hero/hero.css',
    ];
}

/**
 * Встраивает критический CSS в HTML — без отдельного блокирующего запроса (Lighthouse).
 */
function aud_inline_critical_shell_css(): void
{
    aud_print_favicon_links();

    foreach (aud_critical_shell_source_paths() as $path) {
        if (!is_readable($path)) {
            aud_schema_print_json_ld();
            return;
        }
    }

    echo '<style data-critical-shell>';
    foreach (aud_critical_shell_source_paths() as $path) {
        readfile($path);
    }
    echo '</style>' . "\n";
    aud_schema_print_json_ld();
}
