<?php
declare(strict_types=1);
/**
 * Component: Contacts — контакты + форма
 */
?>
<section class="contacts" id="contacts">
    <div class="contacts__inner">
        <div class="contacts__left">
            <p class="contacts__eyebrow">КОНТАКТЫ</p>
            <h2 class="contacts__title">Свяжитесь с нами любым удобным способом</h2>

            <a class="contacts__phone" href="tel:+74952752233">+7 495 275-22-33</a>
            <div class="contacts__email-block">
                <a class="contacts__email" href="mailto:info@aditte.ru">info@aditte.ru</a>
                <p class="contacts__reply">Ответим в течении часа в рабочее время</p>
            </div>

            <div class="contacts__messengers">
                <a class="contacts__messenger" href="#" aria-label="WhatsApp">
                    <img class="contacts__messenger-icon" src="/img/wa.png" alt="">
                    <span class="contacts__messenger-text">WhatsApp</span>
                </a>
                <a class="contacts__messenger" href="#" aria-label="Telegram">
                    <img class="contacts__messenger-icon" src="/img/tg.png" alt="">
                    <span class="contacts__messenger-text">Telegram</span>
                </a>
            </div>

            <div class="contacts__address-row">
                <div class="contacts__address">
                    <p class="contacts__address-label">Адрес</p>
                    <p class="contacts__address-text">г. Москва, Гамсоновский пер., 2, стр. 2, этаж 2, офис 211 (метро Тульская)</p>
                </div>
                <img class="contacts__sphere" src="/img/sfera.png" alt="">
            </div>
        </div>

        <div class="hero__form-wrap contacts__form">
            <h2 class="hero__form-title">Запрос на аудит</h2>
            <p class="hero__form-subtitle">Ответим в течении часа в рабочее время</p>
            <form class="hero__form" action="#" method="post">
                <div class="hero__field">
                    <label for="hero-name">Ваше имя</label>
                    <input type="text" id="hero-name" name="name" placeholder="Иван Иванов" required>
                </div>
                <div class="hero__form-row">
                    <div class="hero__field">
                        <label for="hero-phone">Телефон</label>
                        <input type="tel" id="hero-phone" name="phone" placeholder="+7 (925) 435 82-16" required>
                    </div>
                    <div class="hero__field">
                        <label for="hero-email">E-mail</label>
                        <input type="email" id="hero-email" name="email" placeholder="you@company.ru" required>
                    </div>
                </div>
                <div class="hero__field">
                    <label for="hero-service">Интересующая услуга</label>
                    <div class="hero__select-wrap">
                        <select id="hero-service" name="service" class="hero__select-native" aria-hidden="true" tabindex="-1" required>
                            <option value="audit">Аудиторские услуги</option>
                            <option value="tax">Налоговый консалтинг и налоговая безопасность</option>
                            <option value="financial">Финансовый консалтинг и оценка</option>
                            <option value="accounting">Бухгалтерский консалтинг и аутсорсинг</option>
                            <option value="due-diligence">Due diligence и forensic</option>
                            <option value="hr">Кадровый аудит и консалтинг</option>
                            <option value="ifrs">МСФО и международная отчетность</option>
                            <option value="compliance">Коплаенс, риск-контроль, внутренний аудит</option>
                            <option value="consulting">Консалтинг и сопровождение бизнеса</option>
                            <option value="training">Обучение и академия HSEP</option>
                        </select>
                        <div class="hero__select-trigger" id="hero-select-trigger" tabindex="0" role="combobox" aria-expanded="false" aria-haspopup="listbox" aria-controls="hero-select-list" aria-label="Интересующая услуга">
                            <span class="hero__select-text">Аудиторские услуги</span>
                            <span class="hero__select-arrow" aria-hidden="true"><svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.07106 8.07039C7.68054 8.46091 7.04737 8.46091 6.65685 8.07039L0.292885 1.70643C-0.0976398 1.3159 -0.0976398 0.682738 0.292885 0.292214C0.683409 -0.0983107 1.31657 -0.0983107 1.7071 0.292214L7.36395 5.94907L13.0208 0.292213C13.4113 -0.0983112 14.0445 -0.0983112 14.435 0.292213C14.8255 0.682738 14.8255 1.3159 14.435 1.70643L8.07106 8.07039ZM7.36395 6.36328L8.36395 6.36328L8.36395 7.36328L7.36395 7.36328L6.36395 7.36328L6.36395 6.36328L7.36395 6.36328Z" fill="white"/></svg></span>
                        </div>
                        <div class="hero__select-dropdown" id="hero-select-list" role="listbox" hidden>
                            <div class="hero__select-option" data-value="audit" role="option">Аудиторские услуги</div>
                            <div class="hero__select-option" data-value="tax" role="option">Налоговый консалтинг и налоговая безопасность</div>
                            <div class="hero__select-option" data-value="financial" role="option">Финансовый консалтинг и оценка</div>
                            <div class="hero__select-option" data-value="accounting" role="option">Бухгалтерский консалтинг и аутсорсинг</div>
                            <div class="hero__select-option" data-value="due-diligence" role="option">Due diligence и forensic</div>
                            <div class="hero__select-option" data-value="hr" role="option">Кадровый аудит и консалтинг</div>
                            <div class="hero__select-option" data-value="ifrs" role="option">МСФО и международная отчетность</div>
                            <div class="hero__select-option" data-value="compliance" role="option">Коплаенс, риск-контроль, внутренний аудит</div>
                            <div class="hero__select-option" data-value="consulting" role="option">Консалтинг и сопровождение бизнеса</div>
                            <div class="hero__select-option" data-value="training" role="option">Обучение и академия HSEP</div>
                        </div>
                    </div>
                </div>
                <div class="hero__field">
                    <label for="hero-comment">Комментарий</label>
                    <textarea id="hero-comment" name="comment" placeholder="Размер компании, отчетность, сроки, пожелания"></textarea>
                </div>
                <div class="hero__checkbox-wrap">
                    <input type="checkbox" id="hero-consent" name="consent" required>
                    <label for="hero-consent"><span>Согласие на обработку персональных данных и условия конфиденциальности</span></label>
                </div>
                <button type="submit" class="hero__submit"><span class="hero__submit-text">Отправить</span> <span class="hero__btn-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22.5" cy="22.5" r="22.5" fill="white"></circle><path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"></path></svg></span></button>
            </form>
        </div>
    </div>
</section>

