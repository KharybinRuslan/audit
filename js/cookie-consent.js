/**
 * Согласие на cookie: один раз сохраняется в localStorage, баннер скрывается.
 */
(function () {
    'use strict';

    var STORAGE_KEY = 'aud_cookie_consent_v1';
    var root = document.documentElement;

    function consentDone() {
        try {
            localStorage.setItem(STORAGE_KEY, '1');
        } catch (e) {
            /* ignore private mode / blocked storage */
        }
        root.classList.remove('js-cookie-banner-visible');
        root.classList.add('js-cookie-consent-done');
    }

    function init() {
        var bar = document.querySelector('[data-cookie-consent]');
        if (!bar) {
            return;
        }

        var btn = bar.querySelector('[data-cookie-consent-accept]');
        if (btn) {
            btn.addEventListener('click', function () {
                consentDone();
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
