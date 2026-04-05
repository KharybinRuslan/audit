/**
 * Шапка: фон при скролле, мобильное меню.
 */
(function () {
  'use strict';

  var header = document.querySelector('[data-site-header]');
  if (!header) {
    return;
  }

  var SCROLL_THRESHOLD = 12;

  function updateScrolled() {
    if (window.scrollY > SCROLL_THRESHOLD) {
      header.classList.add('site-header--scrolled');
    } else if (!header.classList.contains('site-header--menu-open')) {
      header.classList.remove('site-header--scrolled');
    }
  }

  updateScrolled();
  window.addEventListener('scroll', updateScrolled, { passive: true });

  var burger = header.querySelector('[data-site-header-burger]');
  var panel = header.querySelector('[data-site-header-panel]');

  function setMenuOpen(open) {
    header.classList.toggle('site-header--menu-open', open);
    document.documentElement.classList.toggle('site-header-menu-open', open);
    document.body.classList.toggle('site-header-menu-open', open);
    if (open) {
      header.classList.add('site-header--scrolled');
      if (panel) {
        panel.setAttribute('aria-hidden', 'false');
      }
    } else {
      if (panel) {
        panel.setAttribute('aria-hidden', 'true');
      }
      if (window.scrollY <= SCROLL_THRESHOLD) {
        header.classList.remove('site-header--scrolled');
      }
    }
    if (burger) {
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      burger.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
    }
  }

  if (burger && panel) {
    burger.addEventListener('click', function () {
      var open = !header.classList.contains('site-header--menu-open');
      setMenuOpen(open);
    });

    panel.querySelectorAll('[data-site-header-panel-link]').forEach(function (link) {
      link.addEventListener('click', function () {
        setMenuOpen(false);
      });
    });

    panel.addEventListener('click', function (e) {
      if (e.target.closest('[data-open-audit-modal]')) {
        setMenuOpen(false);
      }
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && header.classList.contains('site-header--menu-open')) {
      setMenuOpen(false);
    }
  });
})();
