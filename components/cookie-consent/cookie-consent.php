<?php

declare(strict_types=1);

/**
 * Глобальный баннер согласия на cookie. Подключается после подвала на всех страницах.
 */
?>
<script>
(function () {
    try {
        if (localStorage.getItem('aud_cookie_consent_v1') === '1') {
            document.documentElement.classList.add('js-cookie-consent-done');
            return;
        }
    } catch (e) {}
    document.documentElement.classList.add('js-cookie-banner-visible');
})();
</script>
<link rel="stylesheet" href="/components/cookie-consent/cookie-consent.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="/components/cookie-consent/cookie-consent.css"></noscript>
<div class="cookie-consent" data-cookie-consent role="region" aria-label="Уведомление об использовании файлов cookie">
    <div class="cookie-consent__inner">
        <p class="cookie-consent__text">
            Мы используем файлы cookie. Продолжая использовать этот сайт, вы даёте согласие на использование файлов cookie.
        </p>
        <div class="cookie-consent__actions">
            <a class="cookie-consent__link" href="/politika-konfidencialnosti#cookie-policy">Узнать больше</a>
            <button type="button" class="cookie-consent__accept" data-cookie-consent-accept>Принять</button>
        </div>
    </div>
</div>
<script defer src="/js/cookie-consent.js"></script>
