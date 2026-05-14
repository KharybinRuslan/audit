/**
 * Слайдер «Виды аудита» — карточки, стрелки + пагинация, бесконечная прокрутка (loop).
 */
(function () {
  var el = document.getElementById('audit-types-swiper');
  if (!el) return;

  var section = el.closest('.audit-types');

  function startAuditTypesSwiper() {
  if (typeof Swiper === 'undefined') return;
  var prevEl = section && section.querySelector('.audit-types__arrow--prev');
  var nextEl = section && section.querySelector('.audit-types__arrow--next');
  var paginationEl = section && section.querySelector('.audit-types__pagination');

  var swiper = new Swiper(el, {
    slidesPerView: 1.1,
    spaceBetween: 12,
    loop: true,
    speed: 400,
    grabCursor: true,
    allowTouchMove: true,
    centeredSlides: false,
    slidesPerGroup: 1,
    watchOverflow: true,
    navigation: {
      nextEl: nextEl,
      prevEl: prevEl,
    },
    pagination: {
      el: paginationEl,
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 12,
      },
      768: {
        slidesPerView: 2.1,
        spaceBetween: 12,
      },
      1100: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1520: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });
  window.auditTypesSwiper = swiper;
  if (typeof window.bindSwiperSlidesA11y === 'function') {
    window.bindSwiperSlidesA11y(swiper);
  }
  }

  if (typeof window.audInitSwiperWhenNear === 'function') {
    window.audInitSwiperWhenNear(section || el, startAuditTypesSwiper, 120);
  } else {
    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(startAuditTypesSwiper);
    });
  }
})();
