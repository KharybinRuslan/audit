<?php
declare(strict_types=1);
/**
 * Шапка: лого, навигация, CTA «Заказать аудит», бургер, выезжающее меню слева.
 */
require __DIR__ . '/site-header-menu-data.php';
?>
<header class="site-header" id="site-header" data-site-header>
    <div class="site-header__inner">
        <a class="site-header__logo" href="/" aria-label="На главную">
            <img class="site-header__logo-img" src="/img/logo.png" width="48" height="48" alt="">
            <span class="site-header__logo-text">АУДИТ</span>
        </a>

        <nav class="site-header__nav" aria-label="Основная навигация">
            <ul class="site-header__nav-list">
                <li><a class="site-header__nav-link" href="/about">О компании</a></li>
                <li><a class="site-header__nav-link" href="/services">Услуги</a></li>
                <li><a class="site-header__nav-link" href="/news">Блог</a></li>
                <li><a class="site-header__nav-link" href="/contacts">Контакты</a></li>
            </ul>
        </nav>

        <div class="site-header__actions">
            <?php
            $siteHeaderAuditPanel = false;
            include __DIR__ . '/site-header-audit-button.php';
            ?>

            <button
                type="button"
                class="site-header__burger"
                data-site-header-burger
                aria-expanded="false"
                aria-controls="site-header-drawer"
                aria-label="Открыть меню"
            >
                <span class="site-header__burger-icon site-header__burger-icon--menu" aria-hidden="true">
                    <svg class="site-header__burger-svg site-header__burger-svg--lg" width="43" height="15" viewBox="0 0 43 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 13.5L41.5 13.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                        <path d="M1.5 1.5L41.5 1.5" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </svg>
                    <svg class="site-header__burger-svg site-header__burger-svg--md" width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H26" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M1 9H26" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</header>
<?php
/* Вне <header>: иначе fixed-панель внутри flex+fixed шапки ломает сетку страницы */
include __DIR__ . '/site-header-drawer.php';
?>
