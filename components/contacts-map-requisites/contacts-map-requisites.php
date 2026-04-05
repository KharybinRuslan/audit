<?php
declare(strict_types=1);

$yandexMapsOrgUrl = 'https://yandex.com/maps/org/top_expert/1888527326/';
/*
 * Центр видимой области (ll) чуть севернее точки компании: метка визуально ниже центра iframe (~3/4 высоты).
 * При z=17 смещение по широте подбирается эмпирически (увеличить — метка ещё ниже).
 */
$yandexMapLon = 37.60935;
$yandexMapOrgLat = 55.7612;
$yandexMapViewLatOffset = 0.00165;
$yandexMapLat = $yandexMapOrgLat + $yandexMapViewLatOffset;
$mapEmbedSrc = 'https://yandex.com/map-widget/v1/org/top_expert/1888527326/?ll=' . rawurlencode((string) $yandexMapLon . ',' . (string) $yandexMapLat) . '&z=17';
/* Мобильный виджет: центр карты = точке организации (метка по центру блока). */
$mapEmbedSrcMobile = 'https://yandex.com/map-widget/v1/org/top_expert/1888527326/?ll=' . rawurlencode((string) $yandexMapLon . ',' . (string) $yandexMapOrgLat) . '&z=17';
?>
<section class="contacts-map-requisites" aria-labelledby="contacts-map-requisites-title">
    <div class="contacts-map-requisites__inner">
        <div class="contacts-map-requisites__map">
            <div class="contacts-map-requisites__map-inner">
                <iframe
                    class="contacts-map-requisites__frame contacts-map-requisites__frame--desktop"
                    src="<?= htmlspecialchars($mapEmbedSrc, ENT_QUOTES, 'UTF-8') ?>"
                    width="560"
                    height="400"
                    title="АНО ЭПЦ «Топ Эксперт» на Яндекс.Картах"
                    loading="lazy"
                    allowfullscreen
                ></iframe>
                <iframe
                    class="contacts-map-requisites__frame contacts-map-requisites__frame--mobile"
                    src="<?= htmlspecialchars($mapEmbedSrcMobile, ENT_QUOTES, 'UTF-8') ?>"
                    width="560"
                    height="339"
                    title="АНО ЭПЦ «Топ Эксперт» на Яндекс.Картах"
                    loading="lazy"
                    allowfullscreen
                ></iframe>
            </div>
            <a class="contacts-map-requisites__map-link" href="<?= htmlspecialchars($yandexMapsOrgUrl, ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">
                Открыть на Яндекс.Картах
            </a>
        </div>

        <div class="contacts-map-requisites__content">
            <p class="contacts-map-requisites__eyebrow">ТОП ЭКСПЕРТ</p>
            <h2 class="contacts-map-requisites__title" id="contacts-map-requisites-title">
                Информация о компании и банковские реквизиты
            </h2>
            <dl class="contacts-map-requisites__list">
                <dt class="contacts-map-requisites__term">Полное наименование организации</dt>
                <dd class="contacts-map-requisites__def">
                    Автономная некоммерческая организация Экспертно-правовой центр «Топ Эксперт»
                </dd>

                <dt class="contacts-map-requisites__term">Сокращённое наименование организации</dt>
                <dd class="contacts-map-requisites__def">АНО ЭПЦ «Топ Эксперт»</dd>

                <dt class="contacts-map-requisites__term">Юр. адрес</dt>
                <dd class="contacts-map-requisites__def">
                    <a class="contacts-map-requisites__link" href="<?= htmlspecialchars($yandexMapsOrgUrl, ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">
                        125009, город Москва, Газетный пер, д. 3-5 стр. 1, этаж 3, помещ. I ком. 83
                    </a>
                </dd>

                <dt class="contacts-map-requisites__term">Контактная информация</dt>
                <dd class="contacts-map-requisites__def">
                    <a class="contacts-map-requisites__link" href="tel:+74952752233">+7 495 275-22-33</a>
                </dd>

                <dt class="contacts-map-requisites__term">Эл. почта</dt>
                <dd class="contacts-map-requisites__def">
                    <a class="contacts-map-requisites__link" href="mailto:info@aditte.ru">info@aditte.ru</a>
                </dd>

                <dt class="contacts-map-requisites__term">ИНН / КПП</dt>
                <dd class="contacts-map-requisites__def">9710019884 / 770301001</dd>

                <dt class="contacts-map-requisites__term">ОГРН</dt>
                <dd class="contacts-map-requisites__def">1167700069976</dd>

                <dt class="contacts-map-requisites__term">ОКПО</dt>
                <dd class="contacts-map-requisites__def">05424590</dd>

                <dt class="contacts-map-requisites__term">ОКВЭД</dt>
                <dd class="contacts-map-requisites__def">71.20</dd>

                <dt class="contacts-map-requisites__term">Налоговый орган</dt>
                <dd class="contacts-map-requisites__def">Инспекция ФНС России № 3 по г. Москве</dd>

                <dt class="contacts-map-requisites__term">Фактический адрес</dt>
                <dd class="contacts-map-requisites__def">
                    <a class="contacts-map-requisites__link" href="<?= htmlspecialchars($yandexMapsOrgUrl, ENT_QUOTES, 'UTF-8') ?>" rel="noopener noreferrer" target="_blank">
                        125009, г. Москва, Гамсоновский пер., 2, стр. 2, этаж 2, офис 211 (метро Тульская)
                    </a>
                </dd>
            </dl>
        </div>
    </div>
</section>
