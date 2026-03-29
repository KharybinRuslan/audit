/**
 * Слайдер «Отзывы» — стабильный loop для desktop + корректная пагинация по realIndex.
 */
(function () {
  'use strict';

  var el = document.getElementById('reviews-swiper');
  if (!el || typeof Swiper === 'undefined') {
    return;
  }

  var section = el.closest('.reviews');
  var prevEl = section && section.querySelector('.reviews__arrow--prev');
  var nextEl = section && section.querySelector('.reviews__arrow--next');
  var paginationEl = section && section.querySelector('.reviews__pagination');
  var realSlidesCount = el.querySelectorAll('.swiper-wrapper > .swiper-slide').length;
  if (realSlidesCount < 2) {
    return;
  }

  var swiper = new Swiper('#reviews-swiper', {
    // Для 3 реальных слайдов keep loop-safe параметры (иначе Swiper отключает loop с warning).
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    loopAdditionalSlides: 0,
    loopPreventsSliding: false,
    watchOverflow: false,
    speed: 420,
    grabCursor: true,
    allowTouchMove: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      900: {
        slidesPerView: 1.12,
      },
      1200: {
        slidesPerView: 1.2,
      },
      1520: {
        slidesPerView: 1.28,
      },
    },
    navigation: {
      nextEl: nextEl,
      prevEl: prevEl,
    },
    pagination: {
      el: paginationEl,
      clickable: true,
    },
  });

  function syncPaginationByRealIndex(sw) {
    if (!paginationEl || !paginationEl.children) {
      return;
    }
    var bullets = paginationEl.children;
    var i;
    for (i = 0; i < bullets.length; i++) {
      bullets[i].classList.remove('swiper-pagination-bullet-active');
    }
    if (bullets[sw.realIndex]) {
      bullets[sw.realIndex].classList.add('swiper-pagination-bullet-active');
    }
  }

  swiper.on('slideChange', function (sw) {
    syncPaginationByRealIndex(sw);
  });

  syncPaginationByRealIndex(swiper);
})();
