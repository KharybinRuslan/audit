<?php
declare(strict_types=1);
/**
 * Текстовый блок страницы направления: выгоды, охват, плейсхолдер справа.
 */
$serviceDirectionDetailsBenefits = [
    'Честная картинка: независимая оценка бухгалтерии, налогов, управленческого учета и денежных потоков без «косметики»',
    'Деньги здесь и сейчас: исправление ошибок в учете НДС/прибыли, дебиторки, складских остатков — часто дает немедленный финансовый эффект',
    'Снижение рисков: выявляются зоны внимания до того, как ими заинтересуются контрагенты, банк или налоговая',
    'Сильнее переговорные позиции: заключение аудитора повышает доверие банков, лизинговых компаний, партнеров и заказчиков (особенно в тендерах)',
    'Управляемость: на выходе — понятная «дорожная карта» улучшений: регламенты, контрольные процедуры, KPI',
    'Готовность к сделке: база для due diligence, привлечения инвестиций или продажи доли',
];
$serviceDirectionDetailsScope = [
    'Бухучет и РСБУ: выручка, себестоимость, запасы, основные средства, резервы, валютные операции',
    'Налоги: НДС, налог на прибыль, страховые взносы, НДФЛ, камеральные риски, разрывы по контрагентам',
    'Деньги: платежная дисциплина, касса/РКО, эквайринг, «категории» расходов, бюджет движения денег',
    'Зарплата и кадровые процессы: штатка, договоры, локальные акты, риски переквалификации',
];
?>
<section class="service-direction-details" id="service-direction-details">
    <div class="service-direction-details__inner">
        <h2 class="service-direction-details__heading">Ключевая выгода для владельца</h2>
        <ul class="service-direction-details__list service-direction-details__list--benefits">
            <?php foreach ($serviceDirectionDetailsBenefits as $item): ?>
                <li class="service-direction-details__item"><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="service-direction-details__row">
            <div class="service-direction-details__col">
                <h2 class="service-direction-details__heading service-direction-details__heading--narrow">Что проверяют (типовой охват)</h2>
                <ul class="service-direction-details__list service-direction-details__list--scope">
                    <?php foreach ($serviceDirectionDetailsScope as $item): ?>
                        <li class="service-direction-details__item"><?= htmlspecialchars($item, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="service-direction-details__card" role="presentation" aria-hidden="true"></div>
        </div>
    </div>
</section>
