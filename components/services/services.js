/**
 * Слайдер на Swiper: h2 не смещается, между каждым контейнером — сплошная линия, на активной — прокрутка загрузки.
 */
(function () {
    var section = document.querySelector('.services');
    if (!section) return;

    function startServicesSwiper() {
    if (typeof Swiper === 'undefined') return;

    var descEl = section.querySelector('#services-desc');
    var linkEl = section.querySelector('#services-link');
    var navEl = section.querySelector('#services-nav-swiper');
    var metaScript = section.querySelector('#services-slide-data');
    if (!navEl) return;

    var slidesMeta = [];
    if (metaScript && metaScript.textContent) {
        try {
            var parsed = JSON.parse(metaScript.textContent);
            if (Array.isArray(parsed)) slidesMeta = parsed;
        } catch (e) {
            slidesMeta = [];
        }
    }

    function updateContent(index) {
        var s = slidesMeta[index];
        if (!s || typeof s !== 'object') return;
        var d = typeof s.desc === 'string' ? s.desc : '';
        var h = typeof s.href === 'string' ? s.href : '/services';
        var label = typeof s.label === 'string' ? s.label : '';
        if (descEl) descEl.textContent = d;
        if (linkEl) {
            linkEl.href = h || '/services';
            linkEl.textContent = 'Перейти на страницу';
            if (label) {
                linkEl.setAttribute('aria-label', 'Перейти в раздел: ' + label);
            } else {
                linkEl.removeAttribute('aria-label');
            }
        }
    }

    function setActiveSlide() {
        var activeSlideEl = navEl.querySelector('.swiper-slide-active');
        if (!activeSlideEl) return;
        var realIndex = parseInt(activeSlideEl.getAttribute('data-slide-index'), 10);
        if (isNaN(realIndex)) realIndex = 0;

        navEl.querySelectorAll('.services__nav-item').forEach(function (item) {
            item.classList.remove('services__nav-item--active');
        });
        navEl.querySelectorAll('.services__nav-line').forEach(function (line) {
            line.classList.remove('services__nav-line--loading');
        });

        var item = activeSlideEl.querySelector('.services__nav-item');
        var line = activeSlideEl.querySelector('.services__nav-line');
        if (item) item.classList.add('services__nav-item--active');
        if (line) line.classList.add('services__nav-line--loading');

        updateContent(realIndex);

        if (line) {
            var fill = line.querySelector('.services__loading-fill');
            if (fill) {
                var clone = fill.cloneNode(true);
                fill.parentNode.replaceChild(clone, fill);
                clone.addEventListener('animationend', function onEnd() {
                    clone.removeEventListener('animationend', onEnd);
                    if (window.servicesNavSwiper) window.servicesNavSwiper.slideNext();
                });
            }
        }
    }

    var swiper = new Swiper('#services-nav-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 0,
        loop: true,
        speed: 400,
        grabCursor: true,
        allowTouchMove: true,
        centeredSlides: false,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        on: {
            init: function () {
                setActiveSlide();
            },
            slideChangeTransitionEnd: function () {
                setActiveSlide();
            }
        }
    });

    window.servicesNavSwiper = swiper;

    if (typeof window.bindSwiperSlidesA11y === 'function') {
        window.bindSwiperSlidesA11y(swiper);
    }
    }

    if (typeof window.audInitSwiperWhenNear === 'function') {
        window.audInitSwiperWhenNear(section, startServicesSwiper, 100);
    } else {
        window.requestAnimationFrame(function () {
            window.requestAnimationFrame(startServicesSwiper);
        });
    }
})();
