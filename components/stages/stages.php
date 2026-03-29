<?php
declare(strict_types=1);
/**
 * Секция «Этапы / Как проходит аудит» — БЭМ .audit-steps
 * ПК ≥1101px: линия + subgrid; ≤1100px — простой список (см. stages.css).
 */
$auditStepsItems = [
    [
        'num' => 1,
        'desk' => 'above',
        'title' => 'Первичная консультация и постановка задач',
        'desc' => 'Обсуждаем бизнес, цели проверки, ключевые риски и определяем, какой формат нужен именно вам',
    ],
    [
        'num' => 2,
        'desk' => 'below',
        'title' => 'Договор и подготовка документов',
        'desc' => 'Аудит и заключаем договор, утверждаем объём проверки, список документов и график работ',
    ],
    [
        'num' => 3,
        'desk' => 'above',
        'title' => 'Проведение аудиторских процедур',
        'desc' => 'Анализируем отчётность, тестируем ключевые участки учёта и внутренний контроль, фиксируем риски',
    ],
    [
        'num' => 4,
        'desk' => 'below',
        'title' => 'Итоги, заключение и рекомендации',
        'desc' => 'Передаём руководству выводы, карту рисков, рекомендации и аудиторское заключение и итоговый отчёт',
    ],
];
?>
<section class="audit-steps" id="audit-steps" aria-labelledby="audit-steps-heading">
    <div class="audit-steps__bg" aria-hidden="true"></div>

    <div class="audit-steps__container">
        <header class="audit-steps__header">
            <div class="audit-steps__intro">
                <p class="audit-steps__eyebrow">ЭТАПЫ</p>
                <h2 class="audit-steps__title" id="audit-steps-heading">
                    Как проходит аудит<br>
                    <span class="audit-steps__title-accent">ТОП ЭКСПЕРТ</span>
                </h2>
                <a class="hero__btn audit-steps__cta" href="#">
                    Консультация
                    <span class="hero__btn-icon" aria-hidden="true">
                        <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="white"/>
                            <path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"/>
                        </svg>
                    </span>
                </a>
            </div>
        </header>
    </div>

    <!-- ПК: сетка 3 ряда (subgrid) — линия по центру блока, карточки в верхнем/нижнем ряду у узлов -->
    <div class="audit-steps__stage">
    <div class="audit-steps__track-bleed">
        <div class="audit-steps__track-desktop">
            <div class="audit-steps__path audit-steps__path--desktop" aria-hidden="true">
                <svg class="audit-steps__svg audit-steps__svg--desktop" viewBox="0 260 1920 400" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="auditStepsDeskLineGrad" x1="-9.99999" y1="371.166" x2="1870" y2="327.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#DD6F20"/>
                            <stop offset="0.581787" stop-color="#E02727"/>
                            <stop offset="0.971215" stop-color="#E02727" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                    <path
                        id="audit-steps-line-path"
                        d="M-1 301C84 301 145.444 396.5 188 396.5C244.5 396.5 303.5 292.568 371 316C414.204 330.998 558 448.996 605 440.996C692.173 426.158 792.777 289.267 886.5 336.496C962.5 374.794 1181.34 639.849 1275.5 617C1395 588 1346.62 540.001 1539.5 383.996C1617 321.311 1766 294.502 1920 354.998"
                        fill="none"
                        stroke="url(#auditStepsDeskLineGrad)"
                        stroke-width="2"
                        vector-effect="non-scaling-stroke"
                        class="audit-steps__svg-line"
                    />
                </svg>
            </div>
            <div class="audit-steps__nodes-layer"></div>
        </div>
    </div>

    <div class="audit-steps__container audit-steps__container--board">
        <div class="audit-steps__board">
            <!-- Мобилка / планшет: колонка с вертикальным SVG (декор, absolute внутри rail) -->
            <div class="audit-steps__rail-mobile" aria-hidden="true">
                <div class="audit-steps__path audit-steps__path--mobile">
                    <svg class="audit-steps__svg audit-steps__svg--mobile" viewBox="0 0 48 640" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="auditStepsMobGrad" x1="24" y1="0" x2="24" y2="640" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#DD6F20"/>
                                <stop offset="0.45" stop-color="#E02727"/>
                                <stop offset="1" stop-color="#E02727" stop-opacity="0.35"/>
                            </linearGradient>
                        </defs>
                        <path
                            d="M24 8C34 72 14 120 24 184C34 248 14 296 24 360C34 424 14 472 24 536C34 600 24 632 24 632"
                            fill="none"
                            stroke="url(#auditStepsMobGrad)"
                            stroke-width="2"
                            stroke-linecap="round"
                            vector-effect="non-scaling-stroke"
                        />
                    </svg>
                </div>
            </div>

            <ol class="audit-steps__list">
                    <?php foreach ($auditStepsItems as $i => $step): ?>
                        <?php
                        $deskMod = ($step['desk'] ?? 'below') === 'above' ? 'above' : 'below';
                        $mobMod = ($i % 2) === 0 ? 'left' : 'right';
                        ?>
                    <li class="audit-steps__item audit-steps__item--id-<?= (int) $step['num'] ?> audit-steps__item--desk-<?= $deskMod ?> audit-steps__item--mob-<?= $mobMod ?>">
                        <article class="audit-steps__card">
                            <h3 class="audit-steps__card-title"><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p class="audit-steps__card-desc"><?= htmlspecialchars($step['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                        </article>
                        <div class="audit-steps__marker">
                            <span class="audit-steps__marker-num"><?= (int) $step['num'] ?></span>
                        </div>
                    </li>
                    <?php endforeach; ?>
            </ol>
        </div>
    </div>
    </div>
</section>
