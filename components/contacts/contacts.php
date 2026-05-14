<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
require_once dirname(__DIR__, 2) . '/includes/site-address.php';
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
                <?php
                $socialLinkClass = 'contacts__messenger';
                $socialIconClass = 'contacts__messenger-icon';
                $socialSpanClass = 'contacts__messenger-text';
                include dirname(__DIR__, 2) . '/includes/social-channels-links.php';
                ?>
            </div>

            <div class="contacts__address-row">
                <div class="contacts__address">
                    <p class="contacts__address-label">Адрес</p>
                    <p class="contacts__address-text"><?= aud_site_office_address_html() ?></p>
                </div>
                <?php aud_img_picture_webp('/img/sfera.png', '', ['class' => 'contacts__sphere', 'loading' => 'lazy', 'decoding' => 'async']); ?>
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

