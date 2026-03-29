/**
 * Анимация обводки карточек: вращение угла градиента по контуру (как у формы в hero).
 */
(function () {
  const DURATION = 6000; // 6 сек

  function run() {
    const borders = document.querySelectorAll('.directions__card-border');
    if (!borders.length) return;
    const startTime = Date.now();
    function tick() {
      const elapsed = (Date.now() - startTime) % DURATION;
      const angle = (elapsed / DURATION) * -360;
      for (var i = 0; i < borders.length; i++) {
        borders[i].style.setProperty('--border-angle', angle + 'deg');
      }
      requestAnimationFrame(tick);
    }
    tick();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', run);
  } else {
    run();
  }
})();
