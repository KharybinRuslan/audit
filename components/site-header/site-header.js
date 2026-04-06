/**
 * Шапка: скролл, боковое меню со слайд-анимацией между экранами.
 */
(function () {
  'use strict';

  var header = document.querySelector('[data-site-header]');
  if (!header) {
    return;
  }

  var SCROLL_THRESHOLD = 12;
  var VIEW_MS = 360;
  var EASE = 'cubic-bezier(0.22, 1, 0.36, 1)';

  var burger = header.querySelector('[data-site-header-burger]');
  var panel = document.querySelector('[data-site-header-panel]');
  var backdrop = document.querySelector('[data-site-header-backdrop]');
  var closeBtn = document.querySelector('[data-site-header-drawer-close]');

  var currentViewId = 'drawer-view-main';
  var drawerAnimating = false;

  function updateScrolled() {
    if (window.scrollY > SCROLL_THRESHOLD) {
      header.classList.add('site-header--scrolled');
    } else if (!header.classList.contains('site-header--menu-open')) {
      header.classList.remove('site-header--scrolled');
    }
  }

  updateScrolled();
  window.addEventListener('scroll', updateScrolled, { passive: true });

  function drawerIsBack(fromId, toId) {
    if (toId === 'drawer-view-main') {
      return true;
    }
    if (toId === 'drawer-view-services' && fromId.indexOf('drawer-view-cat-') === 0) {
      return true;
    }
    return false;
  }

  function drawerResetInstant() {
    if (!panel) {
      return;
    }
    panel.querySelectorAll('[data-drawer-view]').forEach(function (el) {
      el.style.transition = 'none';
      el.style.transform = '';
      el.style.visibility = '';
      el.style.zIndex = '';
      el.classList.remove(
        'site-header__drawer-view--active',
        'site-header__drawer-view--off-left',
        'site-header__drawer-view--off-right'
      );
      if (el.id === 'drawer-view-main') {
        el.classList.add('site-header__drawer-view--active');
        el.setAttribute('aria-hidden', 'false');
      } else {
        el.classList.add('site-header__drawer-view--off-right');
        el.setAttribute('aria-hidden', 'true');
      }
    });
    currentViewId = 'drawer-view-main';
    requestAnimationFrame(function () {
      panel.querySelectorAll('[data-drawer-view]').forEach(function (el) {
        el.style.transition = '';
      });
    });
  }

  function drawerNavigate(nextId) {
    if (!panel || drawerAnimating) {
      return;
    }
    var fromId = currentViewId;
    var currentEl = document.getElementById(fromId);
    var nextEl = document.getElementById(nextId);
    if (!currentEl || !nextEl || currentEl === nextEl) {
      return;
    }

    var isBack = drawerIsBack(fromId, nextId);
    drawerAnimating = true;

    nextEl.classList.remove('site-header__drawer-view--off-left', 'site-header__drawer-view--off-right');
    nextEl.style.visibility = 'visible';
    nextEl.style.zIndex = '3';
    currentEl.style.zIndex = '2';

    if (isBack) {
      nextEl.style.transform = 'translateX(-100%)';
    } else {
      nextEl.style.transform = 'translateX(100%)';
    }
    currentEl.style.transform = 'translateX(0)';

    void nextEl.offsetWidth;

    var transition = 'transform ' + VIEW_MS + 'ms ' + EASE;
    nextEl.style.transition = transition;
    currentEl.style.transition = transition;

    if (isBack) {
      nextEl.style.transform = 'translateX(0)';
      currentEl.style.transform = 'translateX(100%)';
    } else {
      nextEl.style.transform = 'translateX(0)';
      currentEl.style.transform = 'translateX(-100%)';
    }

    window.setTimeout(function () {
      currentEl.classList.remove('site-header__drawer-view--active');
      currentEl.classList.add(isBack ? 'site-header__drawer-view--off-right' : 'site-header__drawer-view--off-left');
      currentEl.style.transition = '';
      currentEl.style.transform = '';
      currentEl.style.zIndex = '';
      currentEl.setAttribute('aria-hidden', 'true');

      nextEl.classList.add('site-header__drawer-view--active');
      nextEl.style.transition = '';
      nextEl.style.transform = '';
      nextEl.style.zIndex = '';
      nextEl.style.visibility = '';
      nextEl.setAttribute('aria-hidden', 'false');

      drawerAnimating = false;
      currentViewId = nextId;
      nextEl.scrollTop = 0;
      panel.scrollTop = 0;
    }, VIEW_MS);
  }

  function setMenuOpen(open) {
    header.classList.toggle('site-header--menu-open', open);
    document.documentElement.classList.toggle('site-header-menu-open', open);
    document.body.classList.toggle('site-header-menu-open', open);
    if (open) {
      header.classList.add('site-header--scrolled');
      drawerResetInstant();
      if (panel) {
        panel.setAttribute('aria-hidden', 'false');
      }
      if (backdrop) {
        backdrop.setAttribute('aria-hidden', 'false');
      }
    } else {
      if (panel) {
        panel.setAttribute('aria-hidden', 'true');
      }
      if (backdrop) {
        backdrop.setAttribute('aria-hidden', 'true');
      }
      drawerResetInstant();
      if (window.scrollY <= SCROLL_THRESHOLD) {
        header.classList.remove('site-header--scrolled');
      }
    }
    if (burger) {
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      burger.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
    }
  }

  function bindCloseOnNavigate() {
    if (!panel) {
      return;
    }
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

  function bindDrawerNav() {
    if (!panel) {
      return;
    }
    panel.addEventListener('click', function (e) {
      var drill = e.target.closest('[data-drawer-nav]');
      if (drill) {
        e.preventDefault();
        var nav = drill.getAttribute('data-drawer-nav');
        if (nav === 'services') {
          drawerNavigate('drawer-view-services');
        } else if (nav === 'category') {
          var idx = drill.getAttribute('data-category-index');
          if (idx !== null && idx !== '') {
            drawerNavigate('drawer-view-cat-' + idx);
          }
        }
        return;
      }
      var back = e.target.closest('[data-drawer-back]');
      if (back) {
        e.preventDefault();
        var to = back.getAttribute('data-drawer-back');
        if (to === 'main') {
          drawerNavigate('drawer-view-main');
        } else if (to === 'services') {
          drawerNavigate('drawer-view-services');
        }
      }
    });
  }

  if (burger && panel) {
    burger.addEventListener('click', function () {
      var open = !header.classList.contains('site-header--menu-open');
      setMenuOpen(open);
    });

    bindCloseOnNavigate();
    bindDrawerNav();
  }

  if (backdrop) {
    backdrop.addEventListener('click', function () {
      setMenuOpen(false);
    });
  }

  if (closeBtn) {
    closeBtn.addEventListener('click', function () {
      setMenuOpen(false);
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && header.classList.contains('site-header--menu-open')) {
      setMenuOpen(false);
    }
  });
})();
