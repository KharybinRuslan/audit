<?php
declare(strict_types=1);
/**
 * Секция «Отзывы» — слайдер. Добавляйте элементы в $reviewsItems (как этапы в stages.php).
 *
 * Поля слайда:
 * - name, role, photo — автор
 * - p1 — основной абзац (HTML экранируется)
 * - p1_highlight — фрагмент в p1 для подсветки оранжевым (точное совпадение строки)
 * - p2 — необязательный второй абзац (приглушённый)
 */
$reviewsItems = [
    [
        'name' => 'Миронов Алексей',
        'role' => 'CEO',
        'photo' => 'https://i.pravatar.cc/160?img=12',
        'p1' => 'Мы работаем с ТОП ЭКСПЕРТ по вопросам обязательного аудита уже несколько лет. Команда всегда вовремя сдаёт отчётность и даёт понятные рекомендации.',
        'p1_highlight' => 'обязательного аудита',
        'p2' => 'Отдельно отмечу внимание к деталям и готовность подключиться к нестандартным задачам со стороны нашего бизнеса.',
    ],
    [
        'name' => 'Елена Соколова',
        'role' => 'Финансовый директор',
        'photo' => 'https://i.pravatar.cc/160?img=45',
        'p1' => 'Провели комплексную проверку перед сделкой — отчёт помог согласовать условия с инвестором без сюрпризов по цифрам.',
        'p1_highlight' => '',
        'p2' => 'Рекомендуем как надёжного партнёра для регулярного сопровождения.',
    ],
    [
        'name' => 'Дмитрий Волков',
        'role' => 'Управляющий партнёр',
        'photo' => 'https://i.pravatar.cc/160?img=33',
        'p1' => 'Налоговый блок и внутренний контроль проверили системно: выявили зоны риска и предложили понятный план митигации.',
        'p1_highlight' => 'зоны риска',
        'p2' => '',
    ],
];

/**
 * @param string $p1
 * @param string $highlight подстрока для <span class="reviews__accent">
 */
function reviews_format_lead(string $p1, string $highlight): string
{
    $out = htmlspecialchars($p1, ENT_QUOTES, 'UTF-8');
    if ($highlight !== '') {
        $h = htmlspecialchars($highlight, ENT_QUOTES, 'UTF-8');
        $out = str_replace($h, '<span class="reviews__accent">' . $h . '</span>', $out);
    }
    return $out;
}
?>
<section class="reviews" id="reviews" aria-labelledby="reviews-heading">
    <div class="reviews__inner">
        <header class="reviews__head">
            <div class="reviews__titles">
                <p class="reviews__eyebrow">ОТЗЫВЫ</p>
                <h2 class="reviews__title" id="reviews-heading">
                    Оценка деятельности <span class="reviews__title-accent">ТОП ЭКСПЕРТ</span> клиентами
                </h2>
            </div>
            <div class="reviews__nav" aria-label="Навигация слайдера">
                <button type="button" class="reviews__arrow reviews__arrow--prev" aria-label="Предыдущий отзыв">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="28" cy="28" r="27.5" stroke="rgba(255,255,255,0.35)"/>
                        <path d="M33 19L23 28L33 37" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button type="button" class="reviews__arrow reviews__arrow--next" aria-label="Следующий отзыв">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="28" cy="28" r="27.5" stroke="rgba(255,255,255,0.35)"/>
                        <path d="M23 19L33 28L23 37" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </header>

        <div class="reviews__slider-wrap">
            <div class="reviews__slider swiper" id="reviews-swiper">
                <div class="swiper-wrapper">
                <?php foreach ($reviewsItems as $i => $item): ?>
                    <?php
                    $num = str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT);
                    $p2 = trim((string) ($item['p2'] ?? ''));
                    ?>
                <div class="swiper-slide reviews__slide">
                    <article class="reviews__card">
                        <div class="reviews__card-glow" aria-hidden="true"></div>
                        <div class="reviews__card-top">
                            <span class="reviews__card-label">ОТЗЫВ КЛИЕНТА</span>
                            <span class="reviews__card-num"><?= htmlspecialchars($num, ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <div class="reviews__card-body">
                            <div class="reviews__card-main">
                                <p class="reviews__p1"><?= reviews_format_lead((string) $item['p1'], (string) ($item['p1_highlight'] ?? '')) ?></p>
                                <?php if ($p2 !== ''): ?>
                                <p class="reviews__p2"><?= htmlspecialchars($p2, ENT_QUOTES, 'UTF-8') ?></p>
                                <?php endif; ?>
                            </div>
                            <aside class="reviews__card-aside">
                                <img
                                    class="reviews__photo"
                                    src="<?= htmlspecialchars((string) $item['photo'], ENT_QUOTES, 'UTF-8') ?>"
                                    alt=""
                                    width="112"
                                    height="112"
                                    loading="lazy"
                                    decoding="async"
                                >
                                <p class="reviews__name"><?= htmlspecialchars((string) $item['name'], ENT_QUOTES, 'UTF-8') ?></p>
                                <p class="reviews__role">(<?= htmlspecialchars((string) $item['role'], ENT_QUOTES, 'UTF-8') ?>)</p>
                            </aside>
                        </div>
                    </article>
                    <span class="reviews__quote" aria-hidden="true"></span>
                </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="reviews__pagination swiper-pagination" aria-hidden="true"></div>
    </div>
</section>
