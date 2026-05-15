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
        'photo' => '/img/rewie/mironov.webp',
        'p1' => 'Благодаря команде ООО "Аудит Топ Эксперт" мы получили не просто обязательный аудит, а детальный взгляд со стороны на всю финансовую модель розничной сети. Аудиторы быстро разобрались в специфике распределенных магазинов, учли сезонность и особенности регионов.',
        'p1_highlight' => 'обязательный аудит',
        'p2' => 'На всех этапах аудит проходил чётко по графику и без лишней нагрузки на операционную команду. Консультанты заранее объясняли цели каждого запроса, аккуратно выстраивали коммуникацию с региональными подразделениями и ИТ-службой.',
    ],
    [
        'name' => 'Корнеев Максим',
        'role' => 'Директор',
        'photo' => '/img/rewie/korneev.webp',
        'p1' => 'Аудит, проведенный ООО "Аудит Топ Эксперт", позволил по-новому взглянуть на систему внутреннего контроля в нашей отраслевой группе. Команда аккуратно отработала сложную структуру холдинга с дочерними обществами, проектами в энергетике и госзаказом.',
        'p1_highlight' => '',
        'p2' => 'Команда показала высокий уровень методологии аудита и умение говорить с руководством на одном языке. Все ключевые выводы были подкреплены цифрами, а рекомендации — реалистичными сроками и ответственными.',
    ],
    [
        'name' => 'Маркова Ева',
        'role' => 'Финансовый директор',
        'photo' => '/img/rewie/markova.webp',
        'p1' => 'Финансовый аудит от ООО "Аудит Топ Эксперт" стал для нас полезным инструментом, а не формальностью: команда быстро вникла в структуру группы и аккуратно разобрала взаиморасчеты и спорные участки учета.',
        'p1_highlight' => 'зоны риска',
        'p2' => 'Команда показала высокий уровень методологии аудита и умение говорить с руководством на одном языке. Все ключевые выводы были подкреплены цифрами, а рекомендации — реалистичными сроками и ответственными.',
    ],
    [
        'name' => 'Калинин Иван',
        'role' => 'Руководитель отдела',
        'photo' => '/img/rewie/kalinin.webp',
        'p1' => 'Аудит от ООО "Аудит Топ Эксперт" помог нам разложить по полкам ключевые финансовые потоки и убрать "слепые зоны" в учете, которые неизбежно появляются в крупной компании с несколькими направлениями бизнеса и разветвленной структурой.',
        'p1_highlight' => '',
        'p2' => 'Отдельно отмечу качество аналитики: выводы были подтверждены цифрами и первичными документами, а рекомендации — понятными, применимыми и ориентированными на управленческие решения.',
    ],
    [
        'name' => 'Новиков Михаил',
        'role' => 'Менеджер',
        'photo' => '/img/rewie/novikov.webp',
        'p1' => 'Консалтинг и сопровождение бизнеса стали для нас опорой в ежедневных управленческих вопросах. Команда быстро разобралась в нашей структуре и процессах, помогла навести порядок в документах и регламентах, подсветила риски и предложила понятные шаги, которые реально внедряются.',
        'p1_highlight' => '',
        'p2' => 'Особенно ценно, что специалисты всегда на связи и говорят на языке бизнеса: без “воды”, с цифрами, приоритетами и конкретными решениями.',
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
                    Оценка деятельности <span class="reviews__title-accent">ООО "Аудит Топ Эксперт"</span> клиентами
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
        <nav class="reviews__pagination-nav" aria-label="Пагинация отзывов">
            <div class="reviews__pagination swiper-pagination"></div>
        </nav>
    </div>
</section>
