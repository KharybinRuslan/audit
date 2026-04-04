/**
 * FAQ: один открытый пункт, плавная высота панели (grid 0fr / 1fr).
 */
(function () {
  'use strict';

  var root = document.getElementById('home-faq');
  if (!root) {
    return;
  }

  var items = root.querySelectorAll('.home-faq__item');
  if (!items.length) {
    return;
  }

  items.forEach(function (item) {
    var btn = item.querySelector('.home-faq__trigger');
    var panel = item.querySelector('.home-faq__panel-outer');
    if (!btn || !panel) {
      return;
    }

    btn.addEventListener('click', function () {
      var opening = !item.classList.contains('is-open');

      items.forEach(function (other) {
        var b = other.querySelector('.home-faq__trigger');
        var p = other.querySelector('.home-faq__panel-outer');
        other.classList.remove('is-open');
        if (b) {
          b.setAttribute('aria-expanded', 'false');
        }
        if (p) {
          p.setAttribute('aria-hidden', 'true');
        }
      });

      if (opening) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        panel.setAttribute('aria-hidden', 'false');
      }
    });
  });
})();
