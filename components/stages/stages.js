/**
 * Десктоп: центры маркеров 1–4 на кривой SVG (координаты X из макета Figma / path).
 * При ресайзе и смене breakpoint маркеры возвращаются в <li> (мобилка/планшет).
 */
(function () {
  'use strict';

  var MQ = '(min-width: 1101px)';
  var TARGET_X = [188, 371, 886.5, 1539.5];

  function lengthAtX(path, targetX) {
    var len = path.getTotalLength();
    var low = 0;
    var high = len;
    var i;
    var mid;
    var x;
    for (i = 0; i < 40; i++) {
      mid = (low + high) * 0.5;
      x = path.getPointAtLength(mid).x;
      if (Math.abs(x - targetX) < 0.8) {
        return mid;
      }
      if (x < targetX) {
        low = mid;
      } else {
        high = mid;
      }
    }
    return mid;
  }

  function placeMarkers(section, path, layer) {
    var svg = path.ownerSVGElement;
    if (!svg || !layer) {
      return;
    }

    var layerRect = layer.getBoundingClientRect();
    if (layerRect.width < 2 || layerRect.height < 2) {
      return;
    }

    var markers = layer.querySelectorAll('.audit-steps__marker');
    var i;
    var t;
    var pt;
    var p;
    var screenPt;
    var left;
    var top;

    for (i = 0; i < markers.length && i < TARGET_X.length; i++) {
      t = lengthAtX(path, TARGET_X[i]);
      pt = path.getPointAtLength(t);
      p = svg.createSVGPoint();
      p.x = pt.x;
      p.y = pt.y;
      var ctm = path.getScreenCTM();
      if (!ctm) {
        continue;
      }
      screenPt = p.matrixTransform(ctm);
      left = screenPt.x - layerRect.left;
      top = screenPt.y - layerRect.top;

      markers[i].style.left = left + 'px';
      markers[i].style.top = top + 'px';
    }
  }

  function mountLayer(section, layer, items) {
    var i;
    var marker;
    for (i = 0; i < items.length; i++) {
      marker = items[i].querySelector('.audit-steps__marker');
      if (marker) {
        layer.appendChild(marker);
      }
    }
  }

  function restoreToList(layer, items) {
    var markers = layer ? Array.prototype.slice.call(layer.querySelectorAll('.audit-steps__marker')) : [];
    var i;
    var li;
    var marker;
    var card;
    for (i = 0; i < items.length; i++) {
      li = items[i];
      marker = markers[i] || li.querySelector('.audit-steps__marker');
      if (!marker) {
        continue;
      }
      card = li.querySelector('.audit-steps__card');
      if (card && card.nextSibling) {
        li.insertBefore(marker, card.nextSibling);
      } else {
        li.appendChild(marker);
      }
      marker.style.left = '';
      marker.style.top = '';
    }
  }

  function init() {
    var section = document.querySelector('.audit-steps');
    if (!section) {
      return;
    }

    var path = document.getElementById('audit-steps-line-path');
    var layer = section.querySelector('.audit-steps__nodes-layer');
    var items = Array.prototype.slice.call(section.querySelectorAll('.audit-steps__item'));
    var mq = window.matchMedia(MQ);

    var scheduled = null;

    function tick() {
      scheduled = null;
      if (!mq.matches) {
        section.classList.remove('audit-steps--anchors-done');
        restoreToList(layer, items);
        return;
      }

      if (!path || !layer) {
        return;
      }

      if (layer.children.length === 0) {
        mountLayer(section, layer, items);
      }

      /* Маркеры в слое видны без ожидания идеального layout (раньше visibility зависела от класса) */
      section.classList.add('audit-steps--anchors-done');

      placeMarkers(section, path, layer);
      requestAnimationFrame(function () {
        placeMarkers(section, path, layer);
      });
      setTimeout(function () {
        placeMarkers(section, path, layer);
      }, 50);
      setTimeout(function () {
        placeMarkers(section, path, layer);
      }, 300);
    }

    function schedule() {
      if (scheduled !== null) {
        cancelAnimationFrame(scheduled);
      }
      scheduled = requestAnimationFrame(tick);
    }

    tick();
    window.addEventListener('resize', schedule, { passive: true });
    mq.addEventListener('change', schedule);

    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(schedule);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
