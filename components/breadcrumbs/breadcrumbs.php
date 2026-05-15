<?php
declare(strict_types=1);
/**
 * Хлебные крошки. Ожидает $breadcrumbs — список элементов:
 * ['label' => string, 'href' => string] для ссылки или ['label' => string] без href для текущей страницы.
 */
if (empty($breadcrumbs) || !is_array($breadcrumbs)) {
    return;
}

$breadcrumbs = array_values(array_filter(
    $breadcrumbs,
    static function ($c): bool {
        return is_array($c) && isset($c['label']) && trim((string) $c['label']) !== '';
    }
));
if ($breadcrumbs === []) {
    return;
}
?>
<nav class="breadcrumbs" aria-label="Хлебные крошки">
    <div class="breadcrumbs__inner">
        <ol class="breadcrumbs__list">
            <?php
            $lastIdx = count($breadcrumbs) - 1;
            foreach ($breadcrumbs as $i => $crumb):
                $label = (string) $crumb['label'];
                $href = isset($crumb['href']) ? (string) $crumb['href'] : null;
                ?>
            <li class="breadcrumbs__item">
                <?php if ($href !== null && $href !== ''): ?>
                    <a class="breadcrumbs__link" href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></a>
                <?php else: ?>
                    <span class="breadcrumbs__current" aria-current="page"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>
            </li>
                <?php if ($i < $lastIdx): ?>
            <li class="breadcrumbs__sep" aria-hidden="true">
                <svg class="breadcrumbs__sep-icon" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.500326 8.83398L4.66699 4.66732L0.500325 0.500651" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
