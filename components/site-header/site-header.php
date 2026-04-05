<?php
declare(strict_types=1);
/**
 * Шапка: лого, навигация, CTA «Заказать аудит» (hero__btn + модификаторы), бургер.
 */
?>
<header class="site-header" id="site-header" data-site-header>
    <div class="site-header__inner">
        <a class="site-header__logo" href="/index.php" aria-label="На главную">
            <img class="site-header__logo-img" src="/img/logo.png" width="48" height="48" alt="">
            <span class="site-header__logo-text">АУДИТ</span>
        </a>

        <nav class="site-header__nav" aria-label="Основная навигация">
            <ul class="site-header__nav-list">
                <li><a class="site-header__nav-link" href="/pages/about.php">О компании</a></li>
                <li><a class="site-header__nav-link" href="/pages/services.php">Услуги</a></li>
                <li><a class="site-header__nav-link" href="/index.php#news">Блог</a></li>
                <li><a class="site-header__nav-link" href="/index.php#contacts">Контакты</a></li>
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
                aria-controls="site-header-panel"
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
                <span class="site-header__burger-icon site-header__burger-icon--close" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00272 1L19.0027 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M19 1L1 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <div class="site-header__panel" id="site-header-panel" data-site-header-panel aria-hidden="true">
        <div class="site-header__panel-inner">
            <nav class="site-header__panel-nav" aria-label="Меню">
                <ul class="site-header__panel-list">
                    <li><a class="site-header__panel-link" href="/pages/about.php" data-site-header-panel-link>О компании</a></li>
                    <li><a class="site-header__panel-link" href="/pages/services.php" data-site-header-panel-link>Услуги</a></li>
                    <li><a class="site-header__panel-link" href="/index.php#news" data-site-header-panel-link>Блог</a></li>
                    <li><a class="site-header__panel-link" href="/index.php#contacts" data-site-header-panel-link>Контакты</a></li>
                </ul>
            </nav>
            <?php
            $siteHeaderAuditPanel = true;
            include __DIR__ . '/site-header-audit-button.php';
            ?>
        </div>
    </div>
</header>
