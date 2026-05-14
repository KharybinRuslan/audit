<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

/**
 * Загрузка и выборка только WordPress post из migration/articles-ready.json.
 */

if (!function_exists('aud_news_articles_json_path')) {
    function aud_news_articles_json_path(): string
    {
        return dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'migration' . DIRECTORY_SEPARATOR . 'articles-ready.json';
    }
}

if (!function_exists('aud_news_load_raw_items')) {
    /**
     * @return list<array<string, mixed>>
     */
    function aud_news_load_raw_items(): array
    {
        static $cache = null;
        if ($cache !== null) {
            return $cache;
        }
        $path = aud_news_articles_json_path();
        if (!is_readable($path)) {
            return $cache = [];
        }
        $json = file_get_contents($path);
        if ($json === false) {
            return $cache = [];
        }
        $data = json_decode($json, true);
        if (!is_array($data) || !isset($data['items']) || !is_array($data['items'])) {
            return $cache = [];
        }
        $out = [];
        foreach ($data['items'] as $row) {
            if (is_array($row)) {
                $out[] = $row;
            }
        }

        return $cache = $out;
    }
}

if (!function_exists('aud_news_is_post_row')) {
    function aud_news_is_post_row(array $row): bool
    {
        $t = isset($row['post_type']) ? (string) $row['post_type'] : '';

        return $t === 'post';
    }
}

if (!function_exists('getAllNewsPosts')) {
    /** @return list<array<string, mixed>> */
    function getAllNewsPosts(): array
    {
        $posts = [];
        foreach (aud_news_load_raw_items() as $row) {
            if (aud_news_is_post_row($row)) {
                $posts[] = $row;
            }
        }

        return $posts;
    }
}

if (!function_exists('getNewsPostBySlug')) {
    /**
     * @return array<string, mixed>|null
     */
    function getNewsPostBySlug(string $slug): ?array
    {
        $slug = trim($slug);
        if ($slug === '') {
            return null;
        }
        foreach (getAllNewsPosts() as $row) {
            if (!isset($row['slug']) || (string) $row['slug'] !== $slug) {
                continue;
            }

            return $row;
        }

        return null;
    }
}

if (!function_exists('aud_news_category_excluded_from_filter')) {
    /**
     * Рубрики вроде «Без рубрики» не показываем в фильтре (посты с ними остаются в «Все»).
     */
    function aud_news_category_excluded_from_filter(string $category): bool
    {
        $n = mb_strtolower(trim($category), 'UTF-8');

        return $n === 'без рубрики' || $n === 'без категории';
    }
}

if (!function_exists('getNewsCategories')) {
    /**
     * Уникальные рубрики с хотя бы одним post, без служебной «Без рубрики»; порядок по алфавиту.
     *
     * @return list<string>
     */
    function getNewsCategories(): array
    {
        $set = [];
        foreach (getAllNewsPosts() as $row) {
            foreach (getPostCategories($row) as $c) {
                if (aud_news_category_excluded_from_filter($c)) {
                    continue;
                }
                $set[$c] = true;
            }
        }
        $list = array_keys($set);
        natcasesort($list);

        return array_values($list);
    }
}

if (!function_exists('getLatestRelatedPosts')) {
    /**
     * До 2 постов: сначала та же рубрика (date_published DESC), затем добор из общего пула.
     *
     * @param array<string, mixed> $currentPost
     * @param list<array<string, mixed>> $allPosts
     * @return list<array<string, mixed>>
     */
    function getLatestRelatedPosts(array $currentPost, array $allPosts): array
    {
        $currentId = isset($currentPost['id']) ? (int) $currentPost['id'] : 0;
        $currentSlug = isset($currentPost['slug']) ? (string) $currentPost['slug'] : '';
        $catSet = array_fill_keys(getPostCategories($currentPost), true);

        $sameCat = [];
        foreach ($allPosts as $p) {
            if ($currentId !== 0 && isset($p['id']) && (int) $p['id'] === $currentId) {
                continue;
            }
            if ($currentSlug !== '' && isset($p['slug']) && (string) $p['slug'] === $currentSlug) {
                continue;
            }
            foreach (getPostCategories($p) as $c) {
                if (isset($catSet[$c])) {
                    $sameCat[] = $p;
                    break;
                }
            }
        }
        usort($sameCat, static function (array $a, array $b): int {
            return aud_news_published_ts($b) <=> aud_news_published_ts($a);
        });
        $picked = array_slice($sameCat, 0, 2);
        $pickedKeys = [];
        foreach ($picked as $p) {
            $pickedKeys[aud_news_post_key($p)] = true;
        }

        if (count($picked) >= 2) {
            return $picked;
        }

        $pool = [];
        foreach ($allPosts as $p) {
            $k = aud_news_post_key($p);
            if (isset($pickedKeys[$k])) {
                continue;
            }
            if ($currentId !== 0 && isset($p['id']) && (int) $p['id'] === $currentId) {
                continue;
            }
            if ($currentSlug !== '' && isset($p['slug']) && (string) $p['slug'] === $currentSlug) {
                continue;
            }
            $pool[] = $p;
        }
        usort($pool, static function (array $a, array $b): int {
            return aud_news_published_ts($b) <=> aud_news_published_ts($a);
        });
        foreach ($pool as $p) {
            if (count($picked) >= 2) {
                break;
            }
            $k = aud_news_post_key($p);
            if (isset($pickedKeys[$k])) {
                continue;
            }
            $picked[] = $p;
            $pickedKeys[$k] = true;
        }

        return $picked;
    }
}

if (!function_exists('aud_news_post_key')) {
    function aud_news_post_key(array $p): string
    {
        if (isset($p['id'])) {
            return 'id:' . (string) (int) $p['id'];
        }
        if (isset($p['slug'])) {
            return 'slug:' . (string) $p['slug'];
        }

        return 'h:' . md5((string) json_encode($p));
    }
}

if (!function_exists('aud_news_published_ts')) {
    function aud_news_published_ts(array $p): int
    {
        $d = isset($p['date_published']) ? (string) $p['date_published'] : '';
        if ($d === '') {
            return 0;
        }
        $t = strtotime($d);

        return $t !== false ? $t : 0;
    }
}

if (!function_exists('getLatestNewsPosts')) {
    /**
     * Последние посты по дате публикации (новые первыми).
     *
     * @return list<array<string, mixed>>
     */
    function getLatestNewsPosts(int $limit = 6): array
    {
        if ($limit <= 0) {
            return [];
        }
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

        return array_slice($posts, 0, $limit);
    }
}
