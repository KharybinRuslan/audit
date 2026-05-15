<?php
declare(strict_types=1);

/**
 * FAQ по аудиторским услугам.
 *
 * Переопределение на странице (до include):
 * - $auditFaqTitle
 * - $auditFaqItems (массив ['q' => string, 'a' => string])
 */
$auditFaqTitle ??= 'Частые вопросы об аудиторских услугах';
$auditFaqItems ??= [];

$auditFaqTitle = trim((string) $auditFaqTitle);

if (!is_array($auditFaqItems)) {
    $auditFaqItems = [];
}
$auditFaqItems = array_values(array_filter(
    $auditFaqItems,
    static function ($item): bool {
        return is_array($item)
            && isset($item['q'], $item['a'])
            && trim((string) $item['q']) !== ''
            && trim((string) $item['a']) !== '';
    }
));
?>
<section class="audit-faq" id="audit-faq"<?= $auditFaqTitle !== '' ? ' aria-labelledby="audit-faq-title"' : '' ?>>
    <div class="audit-faq__inner">
        <?php if ($auditFaqTitle !== ''): ?>
            <h2 class="audit-faq__title" id="audit-faq-title"><?= htmlspecialchars($auditFaqTitle, ENT_QUOTES, 'UTF-8') ?></h2>
        <?php endif; ?>
        <?php if ($auditFaqItems !== []): ?>
            <div class="audit-faq__list">
                <?php foreach ($auditFaqItems as $index => $item): ?>
                    <details class="audit-faq__item<?= $index === 0 ? ' is-open' : '' ?>"<?= $index === 0 ? ' open' : '' ?>>
                        <summary class="audit-faq__q"><?= htmlspecialchars((string) $item['q'], ENT_QUOTES, 'UTF-8') ?></summary>
                        <div class="audit-faq__a-wrap">
                            <p class="audit-faq__a"><?= htmlspecialchars((string) $item['a'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
