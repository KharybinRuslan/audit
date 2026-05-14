<?php
require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
/**
 * Компонент: Виды аудита — второй слайдер (карточки с иконками).
 * Уникальный id #audit-types-swiper, не конфликтует с services-nav-swiper.
 *
 * Опционально на странице:
 * @var string $auditTypesEyebrow подпись над блоком (капс в CSS)
 * @var string $auditTypesHeadingLead $auditTypesHeadingAccent $auditTypesHeadingRest — составной h2
 * @var list<array{title: string, desc: string, href: string, img?: string}>|null $auditTypes свой набор карточек
 * @var bool $auditTypesHideImages карточки без изображений (текст и ссылки)
 */
if (!isset($auditTypes)) {
$auditTypes = [
    [
        'title' => 'Обязательный аудит',
        'desc' => 'Аудит повышает доверие и снижает риски для всех заинтересованных сторон',
        'img' => '/img/audit/obyazatelnyy.png',
        'href' => '/audit/obyazatelnyj-audit',
    ],
    [
        'title' => 'Инициативный аудит',
        'desc' => 'Независимая оценка по инициативе руководства для выявления резервов и рисков',
        'img' => '/img/audit/Initsiativnyy-audit.png',
        'href' => '/audit/iniciativnyj-audit',
    ],
    [
        'title' => 'Комплексный аудит',
        'desc' => 'Единый подход к проверке учёта, налогов, внутреннего контроля и процессов',
        'img' => '/img/audit/kompleksnyy-audit.png',
        'href' => '/audit/kompleksnyj-audit',
    ],
    [
        'title' => 'Налоговый аудит',
        'desc' => 'Проверка расчётов с бюджетом и снижение налоговых рисков до проверок ФНС',
        'img' => '/img/audit/nalogovyy-audit.png',
        'href' => '/audit/nalogovyj-audit',
    ],
    [
        'title' => 'Аудит финансовой отчётности',
        'desc' => 'Подтверждение достоверности отчётности и согласованность с применимыми стандартами',
        'img' => '/img/audit/finansovyy-audit.png',
        'href' => '/audit/audit-finansovoj-otchetnosti',
    ],
    [
        'title' => 'Кадровый аудит',
        'desc' => 'Проверка кадрового документооборота и соответствия трудовому законодательству',
        'img' => '/img/audit/kadrovyy-audit.png',
        'href' => '/kadrovyy-audit',
    ],
];
}

$auditTypesEyebrow ??= '';
$auditTypesHeadingLead ??= '';
$auditTypesHeadingAccent ??= '';
$auditTypesHeadingRest ??= '';
$auditTypesHideImages ??= false;
?>
<section class="audit-types<?= $auditTypesHideImages ? ' audit-types--text-only' : '' ?>" id="audit-types">
    <svg xmlns="http://www.w3.org/2000/svg" class="audit-types__defs" aria-hidden="true"><defs>
        <linearGradient id="audit-types-arrow-gradient" x1="28" y1="0" x2="28" y2="56" gradientUnits="userSpaceOnUse">
            <stop stop-color="#1E1E1E" /><stop offset="1" stop-color="white" />
        </linearGradient>
    </defs></svg>
    <div class="audit-types__inner">
        <?php if ($auditTypesEyebrow !== '' || $auditTypesHeadingLead !== '' || $auditTypesHeadingAccent !== '' || $auditTypesHeadingRest !== ''): ?>
            <div class="audit-types__intro">
                <?php if ($auditTypesEyebrow !== ''): ?>
                    <p class="audit-types__eyebrow"><?= htmlspecialchars($auditTypesEyebrow, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
                <?php if ($auditTypesHeadingLead !== '' || $auditTypesHeadingAccent !== '' || $auditTypesHeadingRest !== ''): ?>
                    <h2 class="audit-types__page-title">
                        <?= htmlspecialchars($auditTypesHeadingLead, ENT_QUOTES, 'UTF-8') ?><?php if ($auditTypesHeadingAccent !== ''): ?><span class="audit-types__page-title-accent"><?= htmlspecialchars($auditTypesHeadingAccent, ENT_QUOTES, 'UTF-8') ?></span><?php endif; ?><?= htmlspecialchars($auditTypesHeadingRest, ENT_QUOTES, 'UTF-8') ?>
                    </h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="audit-types__nav">
            <button type="button" class="audit-types__arrow audit-types__arrow--prev" aria-label="Назад">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <circle cx="28" cy="28" r="27.5" transform="rotate(90 28 28)" stroke="url(#audit-types-arrow-gradient)" />
                    <path d="M38 27.25C38.4142 27.25 38.75 27.5858 38.75 28C38.75 28.4142 38.4142 28.75 38 28.75L38 28L38 27.25ZM17.4697 28.5303C17.1768 28.2374 17.1768 27.7626 17.4697 27.4697L22.2426 22.6967C22.5355 22.4038 23.0104 22.4038 23.3033 22.6967C23.5962 22.9896 23.5962 23.4645 23.3033 23.7574L19.0607 28L23.3033 32.2426C23.5962 32.5355 23.5962 33.0104 23.3033 33.3033C23.0104 33.5962 22.5355 33.5962 22.2426 33.3033L17.4697 28.5303ZM38 28L38 28.75L18 28.75L18 28L18 27.25L38 27.25L38 28Z" fill="white" />
                    <defs>
                        <linearGradient id="audit-types-arrow-gradient" x1="28" y1="0" x2="28" y2="56" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1E1E1E" />
                            <stop offset="1" stop-color="white" />
                        </linearGradient>
                    </defs>
                </svg>
            </button>
            <button type="button" class="audit-types__arrow audit-types__arrow--next" aria-label="Вперёд">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <circle cx="28" cy="28" r="27.5" transform="rotate(90 28 28)" stroke="url(#audit-types-arrow-gradient-next)" />
                    <path d="M38 27.25C38.4142 27.25 38.75 27.5858 38.75 28C38.75 28.4142 38.4142 28.75 38 28.75L38 28L38 27.25ZM17.4697 28.5303C17.1768 28.2374 17.1768 27.7626 17.4697 27.4697L22.2426 22.6967C22.5355 22.4038 23.0104 22.4038 23.3033 22.6967C23.5962 22.9896 23.5962 23.4645 23.3033 23.7574L19.0607 28L23.3033 32.2426C23.5962 32.5355 23.5962 33.0104 23.3033 33.3033C23.0104 33.5962 22.5355 33.5962 22.2426 33.3033L17.4697 28.5303ZM38 28L38 28.75L18 28.75L18 28L18 27.25L38 27.25L38 28Z" fill="white" />
                    <defs>
                        <linearGradient id="audit-types-arrow-gradient-next" x1="28" y1="0" x2="28" y2="56" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1E1E1E" />
                            <stop offset="1" stop-color="white" />
                        </linearGradient>
                    </defs>
                </svg>
            </button>
        </div>
        <div class="audit-types__slider swiper" id="audit-types-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($auditTypes as $i => $item): ?>
                <div class="swiper-slide audit-types__slide">
                    <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>" class="audit-types__card" aria-label="<?= htmlspecialchars($item['title'] . ' — ' . $item['desc'], ENT_QUOTES, 'UTF-8') ?>">
                        <?php if (!$auditTypesHideImages && !empty($item['img'])): ?>
                        <span class="audit-types__img-wrap">
                            <?php aud_img_picture_webp($item['img'], '', ['class' => 'audit-types__img', 'width' => 140, 'height' => 140, 'loading' => 'lazy', 'decoding' => 'async']); ?>
                        </span>
                        <?php endif; ?>
                        <span class="audit-types__title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="audit-types__desc"><?= htmlspecialchars($item['desc'], ENT_QUOTES, 'UTF-8') ?></span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="audit-types__pagination swiper-pagination"></div>
    </div>
</section>
