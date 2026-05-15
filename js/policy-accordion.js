/**
 * Блоки «заголовок <a> без href + абзацы» из миграции Elementor → кнопка + панель (аккордеон).
 * Инициализируется только внутри .js-policy-accordion.
 */
(function () {
    'use strict';

    function isAccordionTrigger(anchor) {
        if (!(anchor instanceof HTMLAnchorElement)) {
            return false;
        }
        const href = anchor.getAttribute('href');
        if (href !== null && href.trim() !== '') {
            return false;
        }
        return anchor.textContent.trim().length > 0;
    }

    function initPolicyAccordion(container) {
        if (!(container instanceof HTMLElement)) {
            return;
        }
        let seq = 0;
        while (true) {
            const anchors = [...container.querySelectorAll('a')].filter(function (el) {
                if (!(el instanceof HTMLAnchorElement)) {
                    return false;
                }
                if (el.closest('.policy-accordion__item')) {
                    return false;
                }
                return isAccordionTrigger(el);
            });
            const a = anchors[0];
            if (!a) {
                break;
            }
            const title = a.textContent.trim();
            if (!title) {
                a.remove();
                continue;
            }
            const parent = a.parentNode;
            if (!parent) {
                break;
            }

            const item = document.createElement('div');
            item.className = 'policy-accordion__item';

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'policy-accordion__trigger';
            const bid = 'policy-acc-h-' + seq;
            const pid = 'policy-acc-p-' + seq;
            seq += 1;
            btn.id = bid;
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-controls', pid);
            btn.textContent = title;

            const panel = document.createElement('div');
            panel.className = 'policy-accordion__panel';
            panel.id = pid;
            panel.setAttribute('role', 'region');
            panel.setAttribute('aria-labelledby', bid);

            item.appendChild(btn);
            item.appendChild(panel);
            parent.replaceChild(item, a);

            let cur = item.nextSibling;
            while (cur) {
                const next = cur.nextSibling;
                if (cur.nodeType === Node.ELEMENT_NODE) {
                    const el = /** @type {Element} */ (cur);
                    if (el.tagName === 'A' && isAccordionTrigger(/** @type {HTMLAnchorElement} */ (el))) {
                        break;
                    }
                    if (el.tagName === 'H2' || el.tagName === 'H3') {
                        break;
                    }
                }
                panel.appendChild(cur);
                cur = next;
            }

            btn.addEventListener('click', function () {
                const open = btn.getAttribute('aria-expanded') === 'true';
                const nextOpen = !open;
                btn.setAttribute('aria-expanded', nextOpen ? 'true' : 'false');
                item.classList.toggle('policy-accordion__item--open', nextOpen);
            });
        }
    }

    function boot() {
        document.querySelectorAll('.js-policy-accordion').forEach(function (root) {
            initPolicyAccordion(root);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
