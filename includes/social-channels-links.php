<?php
declare(strict_types=1);

/**
 * Ссылки на Дзен, VK, Rutube (иконки SVG).
 * Перед include задайте:
 * @var string $socialLinkClass класс ссылки, напр. site-footer__messenger
 * @var string $socialIconClass класс SVG, напр. site-footer__messenger-icon
 * @var string $socialSpanClass необязательный класс для span; пустая строка — без class
 */
$socialLinkClass = $socialLinkClass ?? '';
$socialIconClass = $socialIconClass ?? '';
$socialSpanClass = $socialSpanClass ?? '';
$spanAttr = $socialSpanClass !== '' ? ' class="' . htmlspecialchars($socialSpanClass, ENT_QUOTES, 'UTF-8') . '"' : '';
$lc = htmlspecialchars($socialLinkClass, ENT_QUOTES, 'UTF-8');
$ic = htmlspecialchars($socialIconClass, ENT_QUOTES, 'UTF-8');
?>
<a class="<?= $lc ?>" href="https://dzen.ru/topexpertt" target="_blank" rel="noopener noreferrer" aria-label="Яндекс Дзен">
    <svg class="<?= $ic ?>" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M20 10.1071V9.89286C15.5714 9.75 13.55 9.64286 11.9286 8.07143C10.3571 6.45 10.2429 4.42857 10.1071 0H9.89286C9.75 4.42857 9.64286 6.45 8.07143 8.07143C6.45 9.64286 4.42857 9.75714 0 9.89286V10.1071C4.42857 10.25 6.45 10.3571 8.07143 11.9286C9.64286 13.55 9.75714 15.5714 9.89286 20H10.1071C10.25 15.5714 10.3571 13.55 11.9286 11.9286C13.55 10.3571 15.5714 10.2429 20 10.1071Z" fill="currentColor" />
    </svg>
    <span<?= $spanAttr ?>>Дзен</span>
</a>
<a class="<?= $lc ?>" href="https://vk.com/top_expert_group" target="_blank" rel="noopener noreferrer" aria-label="ВКонтакте">
    <svg class="<?= $ic ?>" width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path fill="none" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" d="M27.55,35.19V28.55c4.46.68,5.87,4.19,8.71,6.64H43.5a29.36,29.36,0,0,0-7.9-10.47c2.6-3.58,5.36-6.95,6.71-12.06H35.73c-2.58,3.91-3.94,8.49-8.18,11.51V12.66H18l2.28,2.82,0,10.05c-3.7-.43-6.2-7.2-8.91-12.87H4.5C7,20.32,12.26,37.13,27.55,35.19Z" />
    </svg>
    <span<?= $spanAttr ?>>ВКонтакте</span>
</a>
<a class="<?= $lc ?>" href="https://rutube.ru/channel/47566711/" target="_blank" rel="noopener noreferrer" aria-label="Rutube">
    <svg class="<?= $ic ?>" width="20" height="20" viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <g transform="translate(1.605 -1.99)">
            <path fill="none" stroke="currentColor" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" d="M128.689 47.57H20.396v116.843h30.141V126.4h57.756l26.352 38.013h33.75l-29.058-38.188c9.025-1.401 15.522-4.73 19.493-9.985 3.97-5.255 5.956-13.664 5.956-24.875v-8.759c0-6.657-.721-11.912-1.985-15.941-1.264-4.029-3.43-7.533-6.498-10.686-3.249-2.978-6.858-5.08-11.19-6.481-4.332-1.226-9.747-1.927-16.424-1.927zm-4.873 53.08H50.537V73.321h73.279c4.15 0 7.038.7 8.482 1.927 1.444 1.226 2.347 3.503 2.347 6.832v9.81c0 3.503-.903 5.78-2.347 7.006s-4.331 1.752-8.482 1.752z" />
            <path fill="currentColor" d="M162.324 45.568c5.52 0 9.998-4.477 9.998-10s-4.478-10-9.998-10c-5.524 0-10.002 4.477-10.002 10s4.478 10 10.002 10z" />
        </g>
    </svg>
    <span<?= $spanAttr ?>>Rutube</span>
</a>
