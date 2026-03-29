/**
 * Слайдер на Swiper: h2 не смещается, между каждым контейнером — сплошная линия, на активной — прокрутка загрузки.
 */
(function () {
    var section = document.querySelector('.services');
    if (!section) return;

    var descEl = section.querySelector('#services-desc');
    var linkEl = section.querySelector('#services-link');
    var navEl = section.querySelector('#services-nav-swiper');
    if (!navEl) return;

    var slidesData = [
        { desc: 'Фундамент нашего подхода к аудиту лежит в комплексной оценке рисков, оперативном выявлении ключевых вопросов и их четкой коммуникации', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Комплексное сопровождение по налоговому праву, консультации по спорным вопросам и представительство в спорах с ФНС.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Оценка активов и бизнеса, финансовый Due Diligence, построение и аудит моделей и сценариев.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Ведение учёта, подготовка отчётности, постановка и оптимизация учётных процессов под ваши задачи.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Финансовый, налоговый и юридический Due Diligence, расследования мошенничества и нецелевого использования средств.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Аудит кадрового документооборота, проверка соответствия трудовому законодательству и оптимизация HR-процессов.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Подготовка и аудит отчётности по МСФО, конвертация отчётности, консультации по применению стандартов.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Построение и аудит систем внутреннего контроля, комплаенс-процедуры и оценка операционных рисков.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Стратегический и операционный консалтинг, сопровождение проектов и реструктуризации.', linkHref: '#', linkText: 'Перейти на страницу' },
        { desc: 'Курсы и тренинги по аудиту, МСФО, налогам и внутреннему контролю для вашей команды.', linkHref: '#', linkText: 'Перейти на страницу' }
    ];

    function updateContent(index) {
        var s = slidesData[index];
        if (!s) return;
        if (descEl) descEl.textContent = s.desc;
        if (linkEl) {
            linkEl.href = s.linkHref || '#';
            linkEl.textContent = s.linkText || 'Перейти на страницу';
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

    updateContent(0);
})();
