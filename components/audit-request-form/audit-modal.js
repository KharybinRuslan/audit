/**
 * Открытие/закрытие модалки формы запроса на аудит.
 */
(function () {
  'use strict';

  var root = document.getElementById('audit-request-modal');
  if (!root) {
    return;
  }

  var dialog = root.querySelector('.audit-modal__dialog');
  var openers = document.querySelectorAll('[data-open-audit-modal]');
  var closers = root.querySelectorAll('[data-audit-modal-close]');
  var lastFocus = null;

  function openModal() {
    lastFocus = document.activeElement;
    root.removeAttribute('hidden');
    root.setAttribute('aria-hidden', 'false');
    document.documentElement.classList.add('audit-modal-open');
    document.body.classList.add('audit-modal-open');
    var firstField = root.querySelector('input:not([type="checkbox"]):not([type="hidden"]), textarea');
    requestAnimationFrame(function () {
      if (firstField) {
        firstField.focus();
      } else if (dialog) {
        dialog.focus();
      }
    });
  }

  function closeModal() {
    if (root.hasAttribute('hidden')) {
      return;
    }
    root.setAttribute('hidden', '');
    root.setAttribute('aria-hidden', 'true');
    document.documentElement.classList.remove('audit-modal-open');
    document.body.classList.remove('audit-modal-open');
    if (lastFocus && typeof lastFocus.focus === 'function') {
      try {
        lastFocus.focus();
      } catch (err) {
        /* ignore */
      }
    }
  }

  openers.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openModal();
    });
  });

  closers.forEach(function (el) {
    el.addEventListener('click', function () {
      closeModal();
    });
  });

  if (dialog) {
    dialog.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  }

  root.addEventListener('click', function (e) {
    if (e.target === root) {
      closeModal();
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !root.hasAttribute('hidden')) {
      closeModal();
    }
  });
})();
