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
            <?php
            $auditRequestFormPrefix = 'contacts';
            include __DIR__ . '/../audit-request-form/audit-request-form.php';
            ?>
        </div>
    </div>
</section>

