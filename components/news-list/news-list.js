(function () {
  var root = document.querySelector('[data-news-category-filter]');
  if (!root) return;

  var trigger = root.querySelector('[data-news-category-trigger]');
  var panel = root.querySelector('[data-news-category-panel]');

  function setOpen(open) {
    root.classList.toggle('news-list__category-filter--open', open);
    if (trigger) {
      trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
    }
    if (panel) {
      if (open) {
        panel.removeAttribute('hidden');
      } else {
        panel.setAttribute('hidden', 'hidden');
      }
    }
  }

  if (trigger) {
    trigger.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = trigger.getAttribute('aria-expanded') === 'true';
      setOpen(!open);
    });
  }

  document.addEventListener('click', function () {
    setOpen(false);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && root.classList.contains('news-list__category-filter--open')) {
      setOpen(false);
    }
  });

  root.addEventListener('click', function (e) {
    e.stopPropagation();
  });

  setOpen(false);
})();
