<?php
declare(strict_types=1);
/** Ожидает $siteHeaderMenuServices из site-header-menu-data.php */
?>
<div
    class="site-header__drawer-backdrop"
    data-site-header-backdrop
    aria-hidden="true"
></div>

<button
    type="button"
    class="site-header__drawer-close"
    data-site-header-drawer-close
    aria-label="Закрыть меню"
>
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M1.00272 1L19.0027 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        <path d="M19 1L1 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
    </svg>
</button>

<div
    class="site-header__drawer"
    id="site-header-drawer"
    data-site-header-panel
    data-drawer-root
    role="dialog"
    aria-modal="true"
    aria-label="Меню сайта"
    aria-hidden="true"
>
    <div class="site-header__drawer-inner">
        <?php /* ——— Главный экран ——— */ ?>
        <div class="site-header__drawer-view site-header__drawer-view--main site-header__drawer-view--active" id="drawer-view-main" data-drawer-view="main" aria-hidden="false">
            <div class="site-header__drawer-main-scroll">
                <p class="site-header__drawer-brand">АУДИТ</p>

                <nav class="site-header__drawer-nav" aria-label="Основное меню">
                    <ul class="site-header__drawer-list">
                        <li class="site-header__drawer-item">
                            <a class="site-header__drawer-link" href="/about" data-site-header-panel-link>О компании</a>
                        </li>
                        <li class="site-header__drawer-item site-header__drawer-item--split">
                            <a class="site-header__drawer-link site-header__drawer-link--split-text" href="/services" data-site-header-panel-link>Услуги</a>
                            <button
                                type="button"
                                class="site-header__drawer-drill"
                                data-drawer-nav="services"
                                aria-label="Виды услуг"
                            >
                                <span class="site-header__drawer-chevron" aria-hidden="true"></span>
                            </button>
                        </li>
                        <li class="site-header__drawer-item">
                            <a class="site-header__drawer-link" href="/news" data-site-header-panel-link>Блог</a>
                        </li>
                        <li class="site-header__drawer-item">
                            <a class="site-header__drawer-link" href="/contacts" data-site-header-panel-link>Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="site-header__drawer-main-footer">
                <div class="site-header__drawer-schedule">
                    <p class="site-header__drawer-schedule-title">График работы ежедневно:</p>
                    <p class="site-header__drawer-schedule-line">пн-пт: 9:00-19:00</p>
                    <p class="site-header__drawer-schedule-line">сб-вс: выходной</p>
                </div>

                <button
                    type="button"
                    class="site-header__drawer-book hero__btn"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                >
                    <span class="site-header__drawer-book-text">Записаться</span>
                    <span class="hero__btn-icon" aria-hidden="true">
                        <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="white"/>
                            <path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"/>
                        </svg>
                    </span>
                </button>

                <div class="site-header__drawer-contacts">
                    <div class="site-footer__phone-row">
                        <a class="site-footer__phone" href="tel:+74952752233">+7 495 275-22-33</a>
                    </div>
                    <div class="site-footer__email-block">
                        <a class="site-footer__email" href="mailto:info@aditte.ru">info@aditte.ru</a>
                        <p class="site-footer__reply">Ответим в течение часа в рабочее время</p>
                    </div>
                    <div class="site-footer__messengers">
                        <a class="site-footer__messenger" href="#" aria-label="WhatsApp">
                            <img class="site-footer__messenger-icon" src="/img/wa.png" alt="">
                            <span>WhatsApp</span>
                        </a>
                        <a class="site-footer__messenger" href="#" aria-label="Telegram">
                            <img class="site-footer__messenger-icon" src="/img/tg.png" alt="">
                            <span>Telegram</span>
                        </a>
                    </div>
                    <div class="site-footer__address">
                        <p class="site-footer__address-label">Адрес</p>
                        <p class="site-footer__address-text">г. Москва, Гамсоновский пер., 2,<br>(метро Тульская)</p>
                    </div>
                </div>
            </div>
        </div>

        <?php /* ——— Экран «виды услуг» ——— */ ?>
        <div class="site-header__drawer-view site-header__drawer-view--off-right" id="drawer-view-services" data-drawer-view="services" aria-hidden="true">
            <div class="site-header__drawer-subhead">
                <button type="button" class="site-header__drawer-back" data-drawer-back="main" aria-label="Назад в меню">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M13 5L7 10L13 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <span class="site-header__drawer-subtitle">УСЛУГИ</span>
                <span class="site-header__drawer-subhead-spacer" aria-hidden="true"></span>
            </div>
            <ul class="site-header__drawer-list site-header__drawer-list--flush">
                <?php foreach ($siteHeaderMenuServices as $idx => $group): ?>
                <li class="site-header__drawer-item site-header__drawer-item--split">
                    <a
                        class="site-header__drawer-link site-header__drawer-link--split-text"
                        href="/services"
                        data-site-header-panel-link
                    ><?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8') ?></a>
                    <button
                        type="button"
                        class="site-header__drawer-drill"
                        data-drawer-nav="category"
                        data-category-index="<?= (int) $idx ?>"
                        aria-label="Подраздел: <?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <span class="site-header__drawer-chevron" aria-hidden="true"></span>
                    </button>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php /* ——— Экраны по категориям (только пункты этой категории) ——— */ ?>
        <?php foreach ($siteHeaderMenuServices as $idx => $group): ?>
        <div
            class="site-header__drawer-view site-header__drawer-view--off-right"
            id="drawer-view-cat-<?= (int) $idx ?>"
            data-drawer-view="category"
            data-category-index="<?= (int) $idx ?>"
            aria-hidden="true"
        >
            <div class="site-header__drawer-subhead">
                <button type="button" class="site-header__drawer-back" data-drawer-back="services" aria-label="Назад к видам услуг">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M13 5L7 10L13 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <span class="site-header__drawer-subtitle site-header__drawer-subtitle--wrap"><?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8') ?></span>
                <span class="site-header__drawer-subhead-spacer" aria-hidden="true"></span>
            </div>
            <ul class="site-header__drawer-list site-header__drawer-list--flush">
                <?php foreach ($group['items'] as $itemLabel): ?>
                <li class="site-header__drawer-item">
                    <a class="site-header__drawer-link site-header__drawer-link--sub" href="/services" data-site-header-panel-link><?= htmlspecialchars($itemLabel, ENT_QUOTES, 'UTF-8') ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>
</div>
