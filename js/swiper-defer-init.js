/**
 * Откладывает тяжёлую инициализацию Swiper после компоновки / у края вьюпорта — меньше forced reflow.
 */
(function (g) {
  'use strict';

  function afterPaint(cb) {
    if (typeof cb !== 'function') {
      return;
    }
    g.requestAnimationFrame(function () {
      g.requestAnimationFrame(cb);
    });
  }

  /**
   * @param {Element|null} el корень секции (или null — только afterPaint)
   * @param {function(): void} cb
   * @param {number} [marginPx] rootMargin в пикселях
   */
  function whenNearViewport(el, cb, marginPx) {
    if (!el) {
      afterPaint(cb);
      return;
    }
    var m = marginPx == null ? 120 : marginPx;
    var margin = '0px 0px ' + String(m) + 'px 0px';
    if (!('IntersectionObserver' in g)) {
      afterPaint(cb);
      return;
    }
    var io = new g.IntersectionObserver(
      function (entries, obs) {
        for (var i = 0; i < entries.length; i++) {
          if (entries[i].isIntersecting) {
            obs.disconnect();
            afterPaint(cb);
            return;
          }
        }
      },
      { rootMargin: margin, threshold: 0.01 }
    );
    io.observe(el);
  }

  g.audRunAfterPaint = afterPaint;
  g.audInitSwiperWhenNear = whenNearViewport;
})(typeof window !== 'undefined' ? window : globalThis);
