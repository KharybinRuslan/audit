/**
 * Hero: форма «Запрос на аудит» (маска телефона) + кастомный селект «Интересующая услуга»
 */
(function () {
    var phoneInput = document.getElementById('hero-phone');
    if (phoneInput) {
        var lastValue = '';
        var lastCursor = 0;
        function formatPhone(value) {
            var digits = value.replace(/\D/g, '');
            if (digits.length === 0) return '';
            if (digits.charAt(0) === '8') digits = '7' + digits.slice(1);
            if (digits.charAt(0) !== '7') digits = '7' + digits;
            digits = digits.slice(0, 11);
            if (digits.length <= 1) return '+' + digits;
            var result = '+7';
            if (digits.length > 1) result += ' (' + digits.slice(1, 4);
            if (digits.length >= 4) result += ') ' + digits.slice(4, 7);
            if (digits.length >= 7) result += ' ' + digits.slice(7, 9);
            if (digits.length >= 9) result += '-' + digits.slice(9, 11);
            return result;
        }
        function digitsBefore(value, pos) {
            var count = 0;
            for (var i = 0; i < pos && i < value.length; i++) {
                if (/\d/.test(value[i])) count++;
            }
            return count;
        }
        function positionAfterDigit(formatted, digitIndex) {
            if (digitIndex <= 0) return 0;
            var count = 0;
            for (var i = 0; i < formatted.length; i++) {
                if (/\d/.test(formatted[i])) {
                    count++;
                    if (count === digitIndex) return i + 1;
                }
            }
            return formatted.length;
        }
        function onPhoneInput() {
            var newValue = phoneInput.value;
            var newCursor = phoneInput.selectionStart;
            var newDigits = newValue.replace(/\D/g, '');
            var oldDigits = lastValue.replace(/\D/g, '');
            var digitsCountBefore = digitsBefore(newValue, newCursor);
            if (newDigits.length === oldDigits.length && newValue.length < lastValue.length && lastValue.length > 0) {
                var oldCursor = newCursor + 1;
                digitsCountBefore = digitsBefore(lastValue, oldCursor);
                if (digitsCountBefore > 0) {
                    newDigits = oldDigits.slice(0, digitsCountBefore - 1) + oldDigits.slice(digitsCountBefore);
                    digitsCountBefore = digitsCountBefore - 1;
                }
            }
            var formatted = formatPhone(newDigits);
            phoneInput.value = formatted;
            var addedSeven = newDigits.length > 0 && newDigits.charAt(0) !== '7';
            var cursorDigitIndex = digitsCountBefore + (addedSeven ? 1 : 0);
            var newStart = positionAfterDigit(formatted, cursorDigitIndex);
            phoneInput.setSelectionRange(newStart, newStart);
            lastValue = formatted;
            lastCursor = newStart;
        }
        phoneInput.addEventListener('input', onPhoneInput);
        phoneInput.addEventListener('paste', function () { setTimeout(onPhoneInput, 0); });
    }

    var wrap = document.querySelector('.hero__select-wrap');
    if (wrap) {
        var trigger = document.getElementById('hero-select-trigger');
        var select = document.getElementById('hero-service');
        var dropdown = document.getElementById('hero-select-list');
        var options = dropdown ? dropdown.querySelectorAll('.hero__select-option') : [];
        var textEl = wrap.querySelector('.hero__select-text');
        function open() {
            wrap.classList.add('is-open');
            dropdown.removeAttribute('hidden');
            trigger.setAttribute('aria-expanded', 'true');
            updateSelectedState();
        }
        function close() {
            wrap.classList.remove('is-open');
            dropdown.setAttribute('hidden', '');
            trigger.setAttribute('aria-expanded', 'false');
        }
        function updateSelectedState() {
            var val = select.value;
            options.forEach(function (opt) {
                opt.classList.toggle('is-selected', opt.getAttribute('data-value') === val);
            });
        }
        function choose(option) {
            var val = option.getAttribute('data-value');
            var text = option.textContent;
            select.value = val;
            if (textEl) textEl.textContent = text;
            updateSelectedState();
            close();
        }
        trigger.addEventListener('click', function () {
            if (wrap.classList.contains('is-open')) close(); else open();
        });
        trigger.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); trigger.click(); }
        });
        options.forEach(function (opt) {
            opt.addEventListener('click', function () { choose(opt); });
        });
        document.addEventListener('click', function (e) {
            if (wrap.classList.contains('is-open') && !wrap.contains(e.target)) close();
        });
    }
})();
