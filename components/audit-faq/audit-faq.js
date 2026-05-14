(function () {
  'use strict';

  var items = Array.prototype.slice.call(document.querySelectorAll('.audit-faq__item'));
  if (items.length === 0) {
    return;
  }

  function getParts(item) {
    return {
      summary: item.querySelector('.audit-faq__q'),
      wrap: item.querySelector('.audit-faq__a-wrap')
    };
  }

  function setExpanded(item, expanded) {
    var parts = getParts(item);
    if (!parts.summary) {
      return;
    }
    parts.summary.setAttribute('aria-expanded', expanded ? 'true' : 'false');
  }

  function openItem(item) {
    var parts = getParts(item);
    if (!parts.wrap) {
      return;
    }

    item.open = true;
    item.classList.add('is-open');

    parts.wrap.style.height = '0px';
    var targetHeight = parts.wrap.scrollHeight;
    parts.wrap.style.height = targetHeight + 'px';
    setExpanded(item, true);
  }

  function closeItem(item) {
    var parts = getParts(item);
    if (!parts.wrap) {
      return;
    }

    var currentHeight = parts.wrap.scrollHeight;
    parts.wrap.style.height = currentHeight + 'px';
    item.classList.remove('is-open');

    requestAnimationFrame(function () {
      parts.wrap.style.height = '0px';
    });
    setExpanded(item, false);
  }

  items.forEach(function (item, index) {
    var parts = getParts(item);
    if (!parts.summary || !parts.wrap) {
      return;
    }

    if (index === 0) {
      item.open = true;
      item.classList.add('is-open');
      parts.wrap.style.height = parts.wrap.scrollHeight + 'px';
      setExpanded(item, true);
    } else {
      item.open = false;
      item.classList.remove('is-open');
      parts.wrap.style.height = '0px';
      setExpanded(item, false);
    }

    parts.summary.addEventListener('click', function (event) {
      event.preventDefault();
      var alreadyOpen = item.classList.contains('is-open');

      if (alreadyOpen) {
        closeItem(item);
        return;
      }

      items.forEach(function (other) {
        if (other !== item && other.classList.contains('is-open')) {
          closeItem(other);
        }
      });

      openItem(item);
    });
  });

  document.addEventListener('transitionend', function (event) {
    if (!(event.target instanceof HTMLElement) || !event.target.classList.contains('audit-faq__a-wrap')) {
      return;
    }
    var item = event.target.closest('.audit-faq__item');
    if (!item) {
      return;
    }
    if (!item.classList.contains('is-open')) {
      item.open = false;
      event.target.style.height = '0px';
    } else {
      event.target.style.height = event.target.scrollHeight + 'px';
    }
  });

  window.addEventListener('resize', function () {
    items.forEach(function (item) {
      var parts = getParts(item);
      if (!parts.wrap) {
        return;
      }
      if (item.classList.contains('is-open')) {
        parts.wrap.style.height = parts.wrap.scrollHeight + 'px';
      }
    });
  });
})();
