/**
 * Модалка формы запроса на аудит + модалка «форма отправлена» (?audit_request=sent).
 */
(function () {
  'use strict';

  var formRoot = document.getElementById('audit-request-modal');
  var thanksRoot = document.getElementById('audit-form-feedback-modal');

  if (!formRoot && !thanksRoot) {
    return;
  }

  function updateScrollLock() {
    var formOpen = formRoot && !formRoot.hasAttribute('hidden');
    var thanksOpen = thanksRoot && !thanksRoot.hasAttribute('hidden');
    if (formOpen || thanksOpen) {
      document.documentElement.classList.add('audit-modal-open');
      document.body.classList.add('audit-modal-open');
    } else {
      document.documentElement.classList.remove('audit-modal-open');
      document.body.classList.remove('audit-modal-open');
    }
  }

  var formDialog = formRoot ? formRoot.querySelector('.audit-modal__dialog') : null;
  var thanksDialog = thanksRoot ? thanksRoot.querySelector('.audit-modal__dialog') : null;
  var openers = document.querySelectorAll('[data-open-audit-modal]');
  var formClosers = formRoot ? formRoot.querySelectorAll('[data-audit-modal-close]') : [];
  var thanksClosers = thanksRoot ? thanksRoot.querySelectorAll('[data-audit-feedback-close]') : [];
  var lastFocus = null;

  function openFormModal() {
    if (!formRoot) {
      return;
    }
    lastFocus = document.activeElement;
    formRoot.removeAttribute('hidden');
    updateScrollLock();
    var firstField = formRoot.querySelector('input:not([type="checkbox"]):not([type="hidden"]), textarea');
    requestAnimationFrame(function () {
      if (firstField) {
        firstField.focus();
      } else if (formDialog) {
        formDialog.focus();
      }
    });
  }

  function closeFormModal() {
    if (!formRoot || formRoot.hasAttribute('hidden')) {
      return;
    }
    formRoot.setAttribute('hidden', '');
    updateScrollLock();
    if (lastFocus && typeof lastFocus.focus === 'function') {
      try {
        lastFocus.focus();
      } catch (err) {
        /* ignore */
      }
    }
  }

  function openThanksModal() {
    if (!thanksRoot) {
      return;
    }
    thanksRoot.removeAttribute('hidden');
    updateScrollLock();
    requestAnimationFrame(function () {
      if (thanksDialog) {
        thanksDialog.focus();
      }
    });
  }

  function closeThanksModal() {
    if (!thanksRoot || thanksRoot.hasAttribute('hidden')) {
      return;
    }
    thanksRoot.setAttribute('hidden', '');
    updateScrollLock();
  }

  if (formRoot) {
    openers.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        openFormModal();
      });
    });

    formClosers.forEach(function (el) {
      el.addEventListener('click', function () {
        closeFormModal();
      });
    });

    if (formDialog) {
      formDialog.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    }

    formRoot.addEventListener('click', function (e) {
      if (e.target === formRoot) {
        closeFormModal();
      }
    });
  }

  if (thanksRoot) {
    thanksClosers.forEach(function (el) {
      el.addEventListener('click', function () {
        closeThanksModal();
      });
    });

    if (thanksDialog) {
      thanksDialog.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    }

    thanksRoot.addEventListener('click', function (e) {
      if (e.target === thanksRoot) {
        closeThanksModal();
      }
    });
  }

  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') {
      return;
    }
    if (thanksRoot && !thanksRoot.hasAttribute('hidden')) {
      closeThanksModal();
      e.preventDefault();
      return;
    }
    if (formRoot && !formRoot.hasAttribute('hidden')) {
      closeFormModal();
      e.preventDefault();
    }
  });

  var pageParams = new URLSearchParams(window.location.search);
  var auditReq = pageParams.get('audit_request');

  function stripAuditRequestFromUrl() {
    pageParams.delete('audit_request');
    var q = pageParams.toString();
    var next = window.location.pathname + (q ? '?' + q : '') + window.location.hash;
    if (typeof history.replaceState === 'function') {
      history.replaceState({}, '', next);
    }
  }

  if (thanksRoot && auditReq === 'sent') {
    openThanksModal();
    stripAuditRequestFromUrl();
  } else if (auditReq && auditReq !== 'sent') {
    var errMap = {
      captcha: 'Подтвердите «Я не робот» и отправьте форму ещё раз.',
      validation: 'Проверьте заполнение полей формы.',
      ratelimit: 'Слишком много заявок с этого адреса. Попробуйте позже.',
      config: 'Временная ошибка сервера. Попробуйте позже или напишите на info@auditte.ru.',
      send: 'Не удалось отправить сообщение. Попробуйте позже.',
      error: 'Не удалось отправить сообщение. Попробуйте позже.'
    };
    var errText = errMap[auditReq] || errMap.error;
    function resetAllRecaptchaWidgets() {
      if (!window.grecaptcha || typeof window.grecaptcha.reset !== 'function') {
        return;
      }
      document.querySelectorAll('.g-recaptcha').forEach(function (el) {
        var wid = el.getAttribute('data-widget-id');
        if (wid !== null && wid !== '') {
          try {
            window.grecaptcha.reset(parseInt(wid, 10));
          } catch (err) {
            /* ignore */
          }
        }
      });
    }
    if (auditReq === 'captcha') {
      if (window.grecaptcha && typeof window.grecaptcha.ready === 'function') {
        window.grecaptcha.ready(resetAllRecaptchaWidgets);
      } else {
        var tries = 0;
        var waitId = setInterval(function () {
          tries += 1;
          if (window.grecaptcha && typeof window.grecaptcha.ready === 'function') {
            clearInterval(waitId);
            window.grecaptcha.ready(resetAllRecaptchaWidgets);
          } else if (tries > 40) {
            clearInterval(waitId);
          }
        }, 100);
      }
    }
    var bar = document.createElement('div');
    bar.className = 'audit-modal__flash';
    bar.setAttribute('role', 'alert');
    bar.textContent = errText;
    document.body.appendChild(bar);
    requestAnimationFrame(function () {
      bar.classList.add('is-visible');
    });
    setTimeout(function () {
      bar.classList.remove('is-visible');
      setTimeout(function () {
        if (bar.parentNode) {
          bar.parentNode.removeChild(bar);
        }
      }, 320);
    }, 9000);
    stripAuditRequestFromUrl();
  }
})();
