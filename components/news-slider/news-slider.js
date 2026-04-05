/**
 * Слайдер новостей на странице направления — до 5 карточек в ряд, пагинация как у audit-types.
 */
(function () {
  'use strict';

  var el = document.getElementById('news-slider-swiper');
  if (!el || typeof Swiper === 'undefined') {
    return;
  }

  var section = el.closest('.news-slider');
  var paginationEl = section && section.querySelector('.news-slider__pagination');

  var config = {
    slidesPerView: 1.12,
    spaceBetween: 16,
    speed: 400,
    grabCursor: true,
    watchOverflow: true,
    breakpoints: {
      520: {
        slidesPerView: 1.5,
        spaceBetween: 16,
      },
      700: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      900: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1520: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  };

  if (paginationEl) {
    config.pagination = {
      el: paginationEl,
      clickable: true,
    };
  }

  new Swiper('#news-slider-swiper', config);
})();
