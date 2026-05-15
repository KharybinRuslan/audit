<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/includes/img-webp.php';
/**
 * Component: About Details
 */
?>
<section class="about-details" id="about-details">
    <div class="about-details__inner">
        <div class="about-details__top">
            <div class="about-details__left">
                <p class="about-details__eyebrow">ООО "Аудит Топ Эксперт"</p>
                <h2 class="about-details__title">Наша цель — уверенный бизнес клиента</h2>
            </div>
            <div class="about-details__right">
                <p class="about-details__lead">Помогаем компаниям управлять рисками, повышать эффективность и доверять своей финансовой отчётности</p>
                <div class="about-details__action-row">
                    <p class="about-details__note">Делаем сложный бизнес прозрачным</p>
                    <button
                        type="button"
                        class="about-details__btn"
                        data-open-audit-modal
                        aria-haspopup="dialog"
                        aria-controls="audit-request-modal"
                    >Консультация <span class="about-details__btn-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22.5" cy="22.5" r="22.5" fill="white"></circle><path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"></path></svg></span></button>
                </div>
            </div>
        </div>
        <div class="about-details__experts">
            <div class="about-details__experts-layout">
                <div class="about-details__experts-column">
                    <div class="about-details__experts-left">
                    <h3 class="about-details__experts-title">ЭКСПЕРТЫ 20+ ЛЕТ ОПЫТА</h3>
                    <p class="about-details__experts-desc">Аттестованные аудиторы с опытом работы более 20 лет обеспечивают глубокий анализ и выводы, которым доверяют собственники, руководители и контролирующие органы</p>
                    <button
                        type="button"
                        class="about-details__experts-link"
                        data-open-audit-modal
                        aria-haspopup="dialog"
                        aria-controls="audit-request-modal"
                    >Запросить коммерческое предложение<span class="about-details__experts-link-line" aria-hidden="true"></span></button>
                    <a href="/audit" class="about-details__experts-btn"><span class="about-details__experts-btn-text about-details__experts-btn-text--desktop">Бесплатная консультация аудитора</span><span class="about-details__experts-btn-text about-details__experts-btn-text--mobile">Консультация аудитора</span><span class="about-details__experts-btn-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="22.5" cy="22.5" r="22.5" fill="white"></circle><path d="M16 21C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23L16 22L16 21ZM30.7071 22.7071C31.0976 22.3166 31.0976 21.6834 30.7071 21.2929L24.3431 14.9289C23.9526 14.5384 23.3195 14.5384 22.9289 14.9289C22.5384 15.3195 22.5384 15.9526 22.9289 16.3431L28.5858 22L22.9289 27.6569C22.5384 28.0474 22.5384 28.6805 22.9289 29.0711C23.3195 29.4616 23.9526 29.4616 24.3431 29.0711L30.7071 22.7071ZM16 22L16 23L30 23L30 22L30 21L16 21L16 22Z" fill="#DF2726"></path></svg></span></a>
                    </div>
                    <div class="about-details__stats">
                        <article class="about-details__stats-card">
                            <div class="about-details__stats-head">
                                <div class="about-details__years"><span class="about-details__years-num">9</span><span class="about-details__years-text">лет</span></div>
                                <p class="about-details__stats-label">ОПЫТА АУДИТОРСКОЙ РАБОТЫ</p>
                            </div>
                            <div class="about-details__avatars">
                                <span class="about-details__avatar-slot" aria-hidden="true"><?php aud_img_picture_webp('/img/block-img1.png', '', ['class' => 'about-details__avatar', 'loading' => 'lazy', 'decoding' => 'async']); ?></span>
                                <span class="about-details__avatar-slot" aria-hidden="true"><?php aud_img_picture_webp('/img/block-img2.png', '', ['class' => 'about-details__avatar', 'loading' => 'lazy', 'decoding' => 'async']); ?></span>
                                <span class="about-details__avatar-slot" aria-hidden="true"><?php aud_img_picture_webp('/img/block-img3.png', '', ['class' => 'about-details__avatar', 'loading' => 'lazy', 'decoding' => 'async']); ?></span>
                                <span class="about-details__avatar-slot" aria-hidden="true"><?php aud_img_picture_webp('/img/block-img4.png', '', ['class' => 'about-details__avatar', 'loading' => 'lazy', 'decoding' => 'async']); ?></span>
                                <a class="about-details__avatar-link" href="/services">
                                    <span class="about-details__avatar-link-inner">
                                        <span class="about-details__avatar-link-text">Смотреть все услуги</span>
                                        <span class="about-details__avatar-link-arrow" aria-hidden="true">→</span>
                                    </span>
                                </a>
                            </div>
                        </article>

                        <article class="about-details__stats-card">
                            <p class="about-details__percent">90%</p>
                            <p class="about-details__stats-label about-details__stats-label--right">КЛИЕНТОВ К НАМ ВОЗРАЩАЮТСЯ</p>
                            <?php aud_img_picture_webp('/img/line-gradient.png', '', ['class' => 'about-details__line-gradient', 'loading' => 'lazy', 'decoding' => 'async']); ?>
                            <span class="about-details__line-divider" aria-hidden="true"></span>
                        </article>
                    </div>
                </div>
                <div class="about-details__experts-right">
                    <?php aud_img_picture_webp('/img/bord.png', '', ['class' => 'about-details__experts-image', 'loading' => 'lazy', 'decoding' => 'async']); ?>
                </div>
            </div>
        </div>
    </div>
</section>
