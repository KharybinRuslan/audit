<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

if (!defined('AUD_NEWS_LIST_PER_PAGE')) {
    define('AUD_NEWS_LIST_PER_PAGE', 12);
}

if (!function_exists('aud_news_list_url')) {
    /**
     * Чистый URL списка новостей с учётом рубрики и страницы.
     */
    function aud_news_list_url(int $page, string $category): string
    {
        $q = [];
        if ($category !== '') {
            $q['category'] = $category;
        }
        if ($page > 1) {
            $q['page'] = (string) $page;
        }
        if ($q === []) {
            return '/news';
        }

        return '/news?' . http_build_query($q, '', '&', PHP_QUERY_RFC3986);
    }
}

if (!function_exists('aud_news_list_pagination_model')) {
    /**
     * Номера страниц и разделители «…» для компактной пагинации.
     *
     * @return list<array{type:'num', n:int}|array{type:'sep'}>
     */
    function aud_news_list_pagination_model(int $current, int $last): array
    {
        if ($last <= 1) {
            return [];
        }
        if ($last <= 9) {
            $out = [];
            for ($i = 1; $i <= $last; ++$i) {
                $out[] = ['type' => 'num', 'n' => $i];
            }

            return $out;
        }
        /* Узкая полоса: только текущая ±1 и короткие «хвосты» у 1 и last — влезает в одну строку на мобиле */
        $want = [];
        $want[1] = true;
        $want[$last] = true;
        foreach ([$current - 1, $current, $current + 1] as $p) {
            if ($p >= 1 && $p <= $last) {
                $want[$p] = true;
            }
        }
        if ($current <= 3) {
            for ($i = 1; $i <= min(4, $last); ++$i) {
                $want[$i] = true;
            }
        }
        if ($current >= $last - 2) {
            for ($i = max(1, $last - 3); $i <= $last; ++$i) {
                $want[$i] = true;
            }
        }
        ksort($want, SORT_NUMERIC);
        $nums = array_keys($want);
        sort($nums, SORT_NUMERIC);
        $out = [];
        $prev = null;
        foreach ($nums as $p) {
            if ($prev !== null && $p - $prev > 1) {
                $out[] = ['type' => 'sep'];
            }
            $out[] = ['type' => 'num', 'n' => $p];
            $prev = $p;
        }

        return $out;
    }
}

if (!function_exists('aud_news_list_page_state')) {
    /**
     * Состояние страницы списка новостей: срез постов, пагинация, активная рубрика.
     *
     * @return array{
     *   posts: list<array<string, mixed>>,
     *   category: string,
     *   page: int,
     *   total: int,
     *   total_pages: int,
     *   categories: list<string>
     * }
     */
    function aud_news_list_page_state(): array
    {
        static $cache = null;
        if ($cache !== null) {
            return $cache;
        }

        $newsCategoryTabs = getNewsCategories();
        $allowedSet = array_fill_keys($newsCategoryTabs, true);

        $category = '';
        if (isset($_GET['category']) && is_string($_GET['category'])) {
            $c = trim($_GET['category']);
            if ($c !== '' && isset($allowedSet[$c])) {
                $category = $c;
            }
        }

        $page = 1;
        if (isset($_GET['page'])) {
            $raw = $_GET['page'];
            if (!is_array($raw)) {
                $pi = (int) (string) $raw;
                if ($pi >= 1) {
                    $page = $pi;
                }
            }
        }

        $newsAllPosts = getAllNewsPosts();
        usort($newsAllPosts, static function (array $a, array $b): int {
            $ta = isset($a['date_published']) ? strtotime((string) $a['date_published']) : 0;
            $tb = isset($b['date_published']) ? strtotime((string) $b['date_published']) : 0;
            if ($ta === false) {
                $ta = 0;
            }
            if ($tb === false) {
                $tb = 0;
            }

            return $tb <=> $ta;
        });

        $filtered = $newsAllPosts;
        if ($category !== '') {
            $filtered = array_values(array_filter(
                $newsAllPosts,
                static function (array $post) use ($category): bool {
                    return in_array($category, getPostCategories($post), true);
                }
            ));
        }

        $total = count($filtered);
        $totalPages = $total > 0 ? (int) max(1, (int) ceil($total / AUD_NEWS_LIST_PER_PAGE)) : 1;
        if ($page > $totalPages) {
            $page = $totalPages;
        }
        $offset = ($page - 1) * AUD_NEWS_LIST_PER_PAGE;
        $pagePosts = $total > 0 ? array_slice($filtered, $offset, AUD_NEWS_LIST_PER_PAGE) : [];

        return $cache = [
            'posts' => $pagePosts,
            'category' => $category,
            'page' => $page,
            'total' => $total,
            'total_pages' => $totalPages,
            'categories' => $newsCategoryTabs,
        ];
    }
}
