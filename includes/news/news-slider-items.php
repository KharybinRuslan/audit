<?php

declare(strict_types=1);

require_once __DIR__ . '/repository.php';

if (!function_exists('aud_news_slider_page_seed')) {
    /**
     * Строка для разнообразия набора новостей на разных URL.
     * Страница может задать $GLOBALS['newsSliderPageSeed'] до include компонента.
     */
    function aud_news_slider_page_seed(): string
    {
        if (isset($GLOBALS['newsSliderPageSeed']) && is_string($GLOBALS['newsSliderPageSeed'])) {
            $s = trim($GLOBALS['newsSliderPageSeed']);
            if ($s !== '') {
                return $s;
            }
        }
        $uri = $_SERVER['REQUEST_URI'] ?? '/';

        return is_string($uri) && $uri !== '' ? $uri : '/';
    }
}

if (!function_exists('aud_news_slider_start_offset')) {
    function aud_news_slider_start_offset(int $count, string $seed): int
    {
        if ($count <= 0) {
            return 0;
        }
        $h = crc32($seed);
        if ($h < 0) {
            $h += (1 << 32);
        }

        return $h % $count;
    }
}

if (!function_exists('aud_news_slider_post_to_card_row')) {
    /**
     * @param array<string, mixed> $post
     *
     * @return array{href: string, date: string, dateIso: string, titleDefault: string, titleHover: string, desc: string, img: string}
     */
    function aud_news_slider_post_to_card_row(array $post): array
    {
        $slug = isset($post['slug']) ? trim((string) $post['slug']) : '';
        $href = $slug !== '' ? '/news/' . rawurlencode($slug) : '/news';
        $title = isset($post['title']) ? trim((string) $post['title']) : '';
        $seo = isset($post['seo_title_effective']) ? trim((string) $post['seo_title_effective']) : '';
        $titleHover = ($seo !== '' && $seo !== $title) ? $seo : '';
        if ($titleHover === '') {
            foreach (getPostCategories($post) as $c) {
                if (!aud_news_category_excluded_from_filter($c)) {
                    $titleHover = trim($c);
                    break;
                }
            }
        }
        if ($titleHover === '' || $titleHover === $title) {
            $titleHover = buildExcerpt($post, 32, 96);
        }
        if ($titleHover === '' || $titleHover === $title) {
            $titleHover = 'Материалы и практика';
        }
        $desc = buildExcerpt($post);
        if ($desc === '') {
            $desc = ' ';
        }
        $dates = aud_news_format_date_ru($post);
        $img = resolveArticleImage($post);

        return [
            'href' => $href,
            'date' => $dates['display'],
            'dateIso' => $dates['iso'],
            'titleDefault' => $title !== '' ? $title : 'Новость',
            'titleHover' => $titleHover,
            'desc' => $desc,
            'img' => $img,
        ];
    }
}

if (!function_exists('aud_news_slider_items_for_page')) {
    /**
     * Реальные посты для слайдера: не больше $limit, набор зависит от seed (по умолчанию — URL страницы).
     *
     * @return list<array{href: string, date: string, dateIso: string, titleDefault: string, titleHover: string, desc: string, img: string}>
     */
    function aud_news_slider_items_for_page(int $limit = 7, ?string $seed = null): array
    {
        $limit = max(1, min(7, $limit));
        $seed = $seed ?? aud_news_slider_page_seed();
        $posts = array_values(array_filter(
            getAllNewsPosts(),
            static fn (array $p): bool => isset($p['slug']) && trim((string) $p['slug']) !== ''
        ));
        if ($posts === []) {
            return [];
        }
        usort($posts, static function (array $a, array $b): int {
            return aud_news_published_ts($b) <=> aud_news_published_ts($a);
        });
        $n = count($posts);
        $take = min($limit, $n);
        $start = aud_news_slider_start_offset($n, $seed);
        $out = [];
        for ($i = 0; $i < $take; $i++) {
            $out[] = aud_news_slider_post_to_card_row($posts[($start + $i) % $n]);
        }

        return $out;
    }
}
