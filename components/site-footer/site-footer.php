<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
require_once dirname(__DIR__, 2) . '/includes/site-address.php';
/**
 * Подвал сайта — десктоп 4 колонки, мобильная колонка.
 */
$siteFooterLegalLine1 = '© 2026 «ООО "Аудит Топ Эксперт"».';
$siteFooterLegalLine2 = 'Все права защищены';

$siteFooterServices = [];
$siteFooterMenuFile = dirname(__DIR__) . '/site-header/site-header-menu-data.php';
if (is_readable($siteFooterMenuFile)) {
    require_once $siteFooterMenuFile;
    $siteFooterMenu = null;
    if (isset($siteHeaderMenuServices) && is_array($siteHeaderMenuServices)) {
        $siteFooterMenu = $siteHeaderMenuServices;
    } elseif (isset($GLOBALS['siteHeaderMenuServices']) && is_array($GLOBALS['siteHeaderMenuServices'])) {
        $siteFooterMenu = $GLOBALS['siteHeaderMenuServices'];
    }
    if (is_array($siteFooterMenu)) {
        foreach ($siteFooterMenu as $siteFooterCat) {
            if (!is_array($siteFooterCat)) {
                continue;
            }
            $siteFooterTitle = isset($siteFooterCat['title']) ? trim((string) $siteFooterCat['title']) : '';
            $siteFooterHref = isset($siteFooterCat['href']) ? trim((string) $siteFooterCat['href']) : '';
            if ($siteFooterTitle === '' || $siteFooterHref === '') {
                continue;
            }
            if ($siteFooterHref[0] !== '/') {
                $siteFooterHref = '/' . ltrim($siteFooterHref, '/');
            }
            $siteFooterServices[] = [$siteFooterTitle, $siteFooterHref];
        }
    }
}
if ($siteFooterServices === []) {
    $siteFooterServices = [
        ['Аудиторские услуги', '/audit'],
        ['Налоговый консалтинг и налоговая безопасность', '/konsalting'],
        ['Финансовый консалтинг и оценка', '/finans'],
        ['Бухгалтерский консалтинг и аутсорсинг', '/buhgalteriya'],
        ['Форензик', '/forenzik'],
        ['Кадровый аудит', '/kadrovyy-audit'],
        ['МСФО и международная отчетность', '/msfo'],
        ['Комплаенс, риск-контроль, внутренний аудит', '/komplaens'],
        ['Консалтинг и сопровождение бизнеса', '/biznes-konsalting'],
        ['Обучение и академия HSEP', '/hsep'],
        ['DUE diligence', '/due-diligence'],
    ];
}
?>
<footer class="site-footer" id="site-footer">
    <div class="site-footer__inner">
        <div class="site-footer__grid">
            <div class="site-footer__col site-footer__col--brand">
                <div class="site-footer__brand">
                    <span class="site-footer__brand-top">ООО "Аудит Топ Эксперт"</span>
                    <span class="site-footer__brand-sub">АУДИТ</span>
                </div>

                <p class="site-footer__legal site-footer__legal--desktop">
                    <?= htmlspecialchars($siteFooterLegalLine1, ENT_QUOTES, 'UTF-8') ?><br>
                    <?= htmlspecialchars($siteFooterLegalLine2, ENT_QUOTES, 'UTF-8') ?><br>
                    <a class="site-footer__legal-link" href="/politika-konfidencialnosti">Политика конфиденциальности<br>и обработка персональных данных</a>
                </p>

                <button
                    type="button"
                    class="hero__btn site-footer__cta"
                    data-open-audit-modal
                    aria-haspopup="dialog"
                    aria-controls="audit-request-modal"
                >
                    <span class="site-footer__cta-text">Заказать аудит</span>
                    <span class="hero__btn-icon" aria-hidden="true">
                        <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22.5" cy="22.5" r="22.5" fill="white"/>
                            <path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"/>
                        </svg>
                    </span>
                </button>
            </div>

            <div class="site-footer__col site-footer__col--services">
                <p class="site-footer__heading">Услуги</p>
                <ul class="site-footer__list">
                    <?php foreach ($siteFooterServices as $row): ?>
                    <li>
                        <a class="site-footer__link" href="<?= htmlspecialchars((string) $row[1], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars((string) $row[0], ENT_QUOTES, 'UTF-8') ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="site-footer__col site-footer__col--meta">
                <div class="site-footer__meta-block">
                    <p class="site-footer__heading">Блог</p>
                    <ul class="site-footer__list">
                        <li><a class="site-footer__link" href="/news">Новости</a></li>
                        <li><a class="site-footer__link" href="/karta-sajta">Карта сайта</a></li>
                    </ul>
                </div>
                <div class="site-footer__meta-block">
                    <p class="site-footer__heading">О компании</p>
                    <ul class="site-footer__list">
                        <li><a class="site-footer__link" href="/about">О нас</a></li>
                        <li><a class="site-footer__link" href="/services">Услуги</a></li>
                        <li><a class="site-footer__link" href="/contacts">Контакты</a></li>
                        <li><a class="site-footer__link" href="/about#audit-documents">Документы</a></li>
                        <li><a class="site-footer__link" href="/contacts#contacts-map-requisites">Реквизиты</a></li>
                    </ul>
                </div>
            </div>

            <div class="site-footer__col site-footer__col--contacts">
                <a class="site-footer__heading site-footer__heading--contacts" href="/contacts">Контакты</a>
                <div class="site-footer__phone-row">
                    <a class="site-footer__phone" href="tel:+74952752233">+7 495 275-22-33</a>
                </div>
                <div class="site-footer__email-block">
                    <a class="site-footer__email" href="mailto:info@aditte.ru">info@aditte.ru</a>
                    <p class="site-footer__reply">Ответим в течение часа в рабочее время</p>
                </div>
                <div class="site-footer__messengers">
                    <?php
                    $socialLinkClass = 'site-footer__messenger';
                    $socialIconClass = 'site-footer__messenger-icon';
                    $socialSpanClass = '';
                    include dirname(__DIR__, 2) . '/includes/social-channels-links.php';
                    ?>
                </div>
                <div class="site-footer__address">
                    <p class="site-footer__address-label">Адрес</p>
                    <p class="site-footer__address-text"><?= aud_site_office_address_html() ?></p>
                </div>
            </div>

            <div class="site-footer__legal-mob">
                <p class="site-footer__legal-copy">
                    <?= htmlspecialchars($siteFooterLegalLine1, ENT_QUOTES, 'UTF-8') ?><br>
                    <?= htmlspecialchars($siteFooterLegalLine2, ENT_QUOTES, 'UTF-8') ?>
                </p>
                <a class="site-footer__legal-link" href="/politika-konfidencialnosti">Политика конфиденциальности<br>и обработка персональных данных</a>
            </div>
        </div>
    </div>
</footer>
<?php include dirname(__DIR__) . '/cookie-consent/cookie-consent.php'; ?>
