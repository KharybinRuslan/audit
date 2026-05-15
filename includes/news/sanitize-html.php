<?php

declare(strict_types=1);

require_once __DIR__ . '/media.php';

/**
 * Финальный слой очистки HTML статьи перед выводом (whitelist тегов).
 */

if (!function_exists('aud_news_sanitize_article_html')) {
    function aud_news_sanitize_article_html(?string $html): string
    {
        if ($html === null || trim($html) === '') {
            return '';
        }
        $html = (string) $html;
        $html = preg_replace('/\[(?:elementor-template|embed|caption|gallery)[^\]]*\]/i', '', $html) ?? $html;
        /* Комментарии Gutenberg: wp:… и /wp:list-item и т.п. */
        $html = preg_replace('/<!--\s*\/?wp:[\s\S]*?-->/', '', $html) ?? $html;
        $html = preg_replace('#</?html[^>]*>#i', '', $html) ?? $html;
        $html = preg_replace('#</?body[^>]*>#i', '', $html) ?? $html;
        $html = preg_replace(
            '/<(div|span)[^>]*(text-token-text-primary|conversation-turn|data-message-author-role|agent-turn|markdown\s+prose)[^>]*>[\s\S]*?<\/\1>/iu',
            '',
            $html
        ) ?? $html;

        $html = aud_news_strip_junk_cta_anchors($html);

        $allowed = ['p', 'h2', 'h3', 'ul', 'ol', 'li', 'strong', 'em', 'a', 'img', 'blockquote', 'br'];
        $prev = null;
        for ($i = 0; $i < 5 && $html !== $prev; $i++) {
            $prev = $html;
            $html = aud_news_sanitize_html_dom_pass($html, $allowed, []);
        }

        $html = aud_news_strip_junk_cta_anchors($html);

        return trim($html);
    }
}

if (!function_exists('aud_news_strip_junk_cta_anchors')) {
    /**
     * Удаляет служебные ссылки-заглушки из миграции (напр. «Зарегистрироваться» без смысла в статье).
     */
    function aud_news_strip_junk_cta_anchors(string $html): string
    {
        $onlyText = [
            'Зарегистрироваться',
            'Войти',
            'Регистрация',
            'Подписаться',
            'Связаться с нами',
            'Написать нам',
            'Обратная связь',
        ];
        foreach ($onlyText as $label) {
            $q = preg_quote($label, '/');
            $html = preg_replace(
                '/<a\b[^>]*>\s*' . $q . '\s*<\/a>/iu',
                '',
                $html
            ) ?? $html;
        }

        return $html;
    }
}

if (!function_exists('aud_news_sanitize_html_dom_pass')) {
    /**
     * @param list<string> $allowed
     */
    /**
     * @param list<string> $extraRemoveTags дополнительные теги для полного удаления (не unwrap)
     */
    function aud_news_sanitize_html_dom_pass(string $html, array $allowed, array $extraRemoveTags = []): string
    {
        if (!class_exists(DOMDocument::class)) {
            return strip_tags($html, '<' . implode('><', $allowed) . '>');
        }

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $wrapped = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><div id="aud-news-root">' . $html . '</div>';
        $ok = @$dom->loadHTML($wrapped, LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        if (!$ok) {
            return strip_tags($html, '<' . implode('><', $allowed) . '>');
        }

        $root = $dom->getElementById('aud-news-root');
        if ($root === null) {
            return strip_tags($html, '<' . implode('><', $allowed) . '>');
        }

        $xpath = new DOMXPath($dom);
        $badTags = array_merge(['script', 'style', 'iframe', 'object', 'embed'], $extraRemoveTags);
        foreach ($badTags as $badTag) {
            foreach (iterator_to_array($xpath->query('.//' . $badTag, $root) ?: []) as $bad) {
                $bad->parentNode?->removeChild($bad);
            }
        }

        $guard = 0;
        while ($guard++ < 500) {
            $nodes = iterator_to_array($xpath->query('.//*', $root) ?: []);
            $nodes = array_values(array_filter($nodes, static function ($n): bool {
                return $n instanceof DOMElement;
            }));
            if ($nodes === []) {
                break;
            }
            usort($nodes, static function (DOMNode $a, DOMNode $b): int {
                return aud_news_dom_depth($b) <=> aud_news_dom_depth($a);
            });
            $did = false;
            foreach ($nodes as $el) {
                if (!$el instanceof DOMElement) {
                    continue;
                }
                $tag = strtolower($el->tagName);
                if (!in_array($tag, $allowed, true)) {
                    aud_news_dom_unwrap_element($el);
                    $did = true;
                    break;
                }
            }
            if (!$did) {
                break;
            }
        }

        foreach (iterator_to_array($xpath->query('.//*', $root) ?: []) as $el) {
            if (!$el instanceof DOMElement) {
                continue;
            }
            $tag = strtolower($el->tagName);
            if (!in_array($tag, $allowed, true)) {
                continue;
            }
            if ($tag === 'a') {
                $href = $el->getAttribute('href');
                if (!aud_news_sanitize_href($href)) {
                    $el->removeAttribute('href');
                } else {
                    $el->setAttribute('href', $href);
                    if (!$el->hasAttribute('rel')) {
                        $el->setAttribute('rel', 'noopener noreferrer');
                    }
                }
                foreach (iterator_to_array($el->attributes ?? []) as $attr) {
                    if (!in_array(strtolower($attr->name), ['href', 'rel', 'title'], true)) {
                        $el->removeAttribute($attr->name);
                    }
                }
                continue;
            }
            if ($tag === 'img') {
                $src = $el->getAttribute('src');
                if (!aud_news_sanitize_src($src)) {
                    $el->setAttribute('src', '');
                } else {
                    $el->setAttribute('src', aud_news_resolve_media_url($src));
                }
                $srcset = $el->getAttribute('srcset');
                if ($srcset !== '') {
                    $resolvedSet = aud_news_resolve_media_srcset($srcset);
                    if ($resolvedSet !== '') {
                        $el->setAttribute('srcset', $resolvedSet);
                    } else {
                        $el->removeAttribute('srcset');
                    }
                }
                foreach (iterator_to_array($el->attributes ?? []) as $attr) {
                    if (!in_array(strtolower($attr->name), ['src', 'srcset', 'sizes', 'alt', 'loading', 'decoding', 'width', 'height'], true)) {
                        $el->removeAttribute($attr->name);
                    }
                }
                if (!$el->hasAttribute('loading')) {
                    $el->setAttribute('loading', 'lazy');
                }
                if (!$el->hasAttribute('decoding')) {
                    $el->setAttribute('decoding', 'async');
                }
                continue;
            }
            while ($el->attributes !== null && $el->attributes->length > 0) {
                $el->removeAttribute($el->attributes->item(0)->name);
            }
        }

        $inner = '';
        foreach (iterator_to_array($root->childNodes) as $child) {
            $inner .= $dom->saveHTML($child);
        }

        return $inner;
    }
}

if (!function_exists('aud_news_dom_depth')) {
    function aud_news_dom_depth(DOMNode $n): int
    {
        $d = 0;
        while ($n->parentNode !== null) {
            $d++;
            $n = $n->parentNode;
        }

        return $d;
    }
}

if (!function_exists('aud_news_dom_unwrap_element')) {
    function aud_news_dom_unwrap_element(DOMElement $el): void
    {
        $parent = $el->parentNode;
        if ($parent === null) {
            return;
        }
        while ($el->firstChild !== null) {
            $parent->insertBefore($el->firstChild, $el);
        }
        $parent->removeChild($el);
    }
}

if (!function_exists('aud_news_sanitize_href')) {
    function aud_news_sanitize_href(string $href): bool
    {
        $h = trim($href);
        if ($h === '' || stripos($h, 'javascript:') === 0 || stripos($h, 'data:') === 0) {
            return false;
        }
        if (preg_match('#^https?://#i', $h)) {
            return !str_contains(strtolower($h), 'w3.org');
        }

        return str_starts_with($h, '/') && !str_starts_with($h, '//');
    }
}

if (!function_exists('aud_news_sanitize_src')) {
    function aud_news_sanitize_src(string $src): bool
    {
        $s = trim($src);
        if ($s === '' || stripos($s, 'data:') === 0 || stripos($s, 'javascript:') === 0) {
            return false;
        }
        if (str_contains(strtolower($s), 'w3.org')) {
            return false;
        }

        return preg_match('#^https?://#i', $s) === 1 || str_starts_with($s, '/');
    }
}

if (!function_exists('aud_pages_sanitize_html')) {
    /**
     * Санитайзер для длинных статических страниц (политика и т.п.): больше семантики и таблиц, без SVG/форм.
     */
    function aud_pages_sanitize_html(?string $html): string
    {
        if ($html === null || trim($html) === '') {
            return '';
        }
        $html = (string) $html;
        $html = preg_replace('/\[(?:elementor-template|embed|caption|gallery)[^\]]*\]/i', '', $html) ?? $html;
        $html = preg_replace('/<!--\s*\/?wp:[\s\S]*?-->/', '', $html) ?? $html;
        $html = preg_replace('#</?html[^>]*>#i', '', $html) ?? $html;
        $html = preg_replace('#</?body[^>]*>#i', '', $html) ?? $html;
        $html = preg_replace(
            '/<(div|span)[^>]*(text-token-text-primary|conversation-turn|data-message-author-role|agent-turn|markdown\s+prose)[^>]*>[\s\S]*?<\/\1>/iu',
            '',
            $html
        ) ?? $html;

        $html = aud_news_strip_junk_cta_anchors($html);

        $allowed = [
            'p', 'h2', 'h3', 'h4', 'h5', 'section', 'div', 'ul', 'ol', 'li', 'strong', 'em', 'a', 'img',
            'blockquote', 'br', 'hr', 'table', 'thead', 'tbody', 'tr', 'th', 'td', 'caption',
        ];
        $extraRemove = [
            'svg', 'link', 'meta', 'form', 'input', 'button', 'textarea', 'select', 'option', 'label',
            'canvas', 'video', 'audio', 'source', 'picture', 'noscript', 'template',
        ];
        $prev = null;
        for ($i = 0; $i < 6 && $html !== $prev; $i++) {
            $prev = $html;
            $html = aud_news_sanitize_html_dom_pass($html, $allowed, $extraRemove);
        }

        $html = aud_news_strip_junk_cta_anchors($html);

        // Пустые абзацы из миграции Elementor (&nbsp; / nbsp); разделитель ~ — в сущностях есть #
        $html = preg_replace('~<p>\s*(?:&nbsp;|&#160;|&#x0*A0;|\x{00A0})\s*</p>~iu', '', $html) ?? $html;
        $html = preg_replace('~<p>\s*</p>~iu', '', $html) ?? $html;
        $html = preg_replace('~<p>\s+</p>~iu', '', $html) ?? $html;

        // Пустые <section> из миграции (например <section>&nbsp;</section>); несколько проходов — вложенность
        for ($si = 0; $si < 5; $si++) {
            $prevS = $html;
            $html = preg_replace('~<section[^>]*>\s*(?:&nbsp;|&#160;|&#x0*A0;|\x{00A0}|\s)*</section>~iu', '', $html) ?? $html;
            if ($html === $prevS) {
                break;
            }
        }

        return trim($html);
    }
}
