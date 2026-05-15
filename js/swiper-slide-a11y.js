/**
 * Swiper помечает неактивные слайды aria-hidden, но ссылки внутри остаются в порядке табуляции.
 * Убираем из фокуса интерактив внутри aria-hidden="true" слайдов (Lighthouse / axe).
 */
(function (global) {
  'use strict';

  function bindSwiperSlidesA11y(swiper) {
    if (!swiper || !swiper.el || swiper.__slidesA11yBound) {
      return;
    }
    swiper.__slidesA11yBound = true;

    function sync() {
      swiper.el.querySelectorAll('.swiper-slide').forEach(function (slide) {
        var hidden = slide.getAttribute('aria-hidden') === 'true';
        slide
          .querySelectorAll('a[href], button:not([disabled]), input:not([type="hidden"]), select, textarea')
          .forEach(function (el) {
            if (hidden) {
              if (!el.hasAttribute('data-sw-a11y-tab')) {
                el.setAttribute(
                  'data-sw-a11y-tab',
                  el.hasAttribute('tabindex') ? el.getAttribute('tabindex') : ''
                );
              }
              el.setAttribute('tabindex', '-1');
            } else if (el.hasAttribute('data-sw-a11y-tab')) {
              var saved = el.getAttribute('data-sw-a11y-tab');
              el.removeAttribute('data-sw-a11y-tab');
              if (saved === '') {
                el.removeAttribute('tabindex');
              } else {
                el.setAttribute('tabindex', saved);
              }
            }
          });
      });
    }

    var syncScheduled = false;
    function scheduleSync() {
      if (syncScheduled) {
        return;
      }
      syncScheduled = true;
      global.requestAnimationFrame(function () {
        syncScheduled = false;
        sync();
      });
    }

    swiper.on('slideChange transitionEnd observerUpdate', scheduleSync);
    scheduleSync();
  }

  global.bindSwiperSlidesA11y = bindSwiperSlidesA11y;
})(typeof window !== 'undefined' ? window : globalThis);
