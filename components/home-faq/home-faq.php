<?php
declare(strict_types=1);
/**
 * Секция FAQ для главной — аккордеон (кнопка + панель), фон kletka2.svg.
 */
$homeFaqItems = [
    [
        'q' => 'Какие компании могут проводить финансовый аудит?',
        'html' =>
            '<p>В РФ аудит (в т.ч. финансовый) могут проводить аудиторские организации и аудиторы-физлица '
            . '(с квалификационным аттестатом), но ключевое условие — членство в СРО аудиторов. '
            . '<a class="home-faq__link" href="https://minfin.gov.ru" target="_blank" rel="noopener noreferrer">minfin.gov.ru</a></p>'
            . '<p>При этом обязательный аудит сейчас проводят только аудиторские организации (не «частный аудитор»). '
            . '<a class="home-faq__link" href="https://sroaas.ru" target="_blank" rel="noopener noreferrer">sroaas.ru</a></p>',
    ],
    [
        'q' => 'Чем отличается внутренний аудит от внешнего?',
        'html' =>
            '<p>Внутренний аудит — это проверка «изнутри»: по внутренним положениям компании, часто силами '
            . 'службы внутреннего аудита, руководства или набсовета; фокус на контроле, рисках, '
            . 'эффективности и корректности отчётности.</p>'
            . '<p>Внешний аудит — это проверка «снаружи»: независимые специалисты сопоставляют отчётность '
            . 'и учёт с требованиями и выдают независимую оценку / заключение.</p>',
    ],
    [
        'q' => 'С какой суммы оборота денежных средств организации начинается обязательный аудит?',
        'html' =>
            '<p>Обязательный аудит нужен организациям, у которых доход за год до отчётного — выше 800 млн ₽.</p>',
    ],
    [
        'q' => 'Когда аудит является обязательным?',
        'html' =>
            '<p>Если компания подпадает под требования закона — например:</p>'
            . '<ul class="home-faq__bullets">'
            . '<li>ценные бумаги допущены к организованным торгам / компания обязана раскрывать информацию как эмитент;</li>'
            . '<li>компания — профучастник рынка ценных бумаг или бюро кредитных историй;</li>'
            . '<li>компания имеет форму фонда, и поступление имущества (в т.ч. денег) за предшествующий год превысило 3 млн ₽;</li>'
            . '<li>компания соответствует финансовым критериям: доход &gt; 800 млн ₽ или активы баланса &gt; 400 млн ₽ '
            . '(на конец года, предшествующего отчётному).</li>'
            . '</ul>',
    ],
    [
        'q' => 'Чем отличается обязательный аудит от инициативного?',
        'html' =>
            '<p>Обязательный — «надо по закону»: проводится в установленных случаях и сроках.</p>'
            . '<p>Инициативный — «хочу сам»: назначается по решению руководства или собственников, чтобы заранее '
            . 'найти риски, слабые места и улучшить процессы (проактивная проверка).</p>',
    ],
];
?>
<section class="home-faq" id="home-faq" aria-labelledby="home-faq-heading">
    <div class="home-faq__bg" aria-hidden="true"></div>
    <div class="home-faq__inner">
        <div class="home-faq__layout">
            <div class="home-faq__intro">
                <p class="home-faq__eyebrow">
                    <span class="home-faq__eyebrow-accent">FAQ</span>
                    <span class="home-faq__eyebrow-rest">частые вопросы</span>
                </p>
                <h2 class="home-faq__title" id="home-faq-heading">
                    Что важно знать об аудите с <span class="home-faq__title-accent">ТОП ЭКСПЕРТ</span>
                </h2>
                <p class="home-faq__lead">
                Здесь мы собрали практические вопросы клиентов: где аудит действительно помогает, какие риски показывает, чего ожидать от проекта и в каких случаях он особенно выгоден бизнесу
                </p>
            </div>

            <div class="home-faq__list">
                <?php foreach ($homeFaqItems as $i => $item): ?>
                    <?php
                    $panelId = 'home-faq-panel-' . $i;
                    $triggerId = 'home-faq-trigger-' . $i;
                    $isOpenByDefault = $i === 1;
                    $itemClass = 'home-faq__item' . ($isOpenByDefault ? ' is-open' : '');
                    $expanded = $isOpenByDefault ? 'true' : 'false';
                    $panelHidden = $isOpenByDefault ? 'false' : 'true';
                    ?>
                <div class="<?= htmlspecialchars($itemClass, ENT_QUOTES, 'UTF-8') ?>">
                    <button
                        type="button"
                        class="home-faq__trigger"
                        id="<?= htmlspecialchars($triggerId, ENT_QUOTES, 'UTF-8') ?>"
                        aria-expanded="<?= htmlspecialchars($expanded, ENT_QUOTES, 'UTF-8') ?>"
                        aria-controls="<?= htmlspecialchars($panelId, ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <span class="home-faq__question"><?= htmlspecialchars((string) $item['q'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="home-faq__chevron" aria-hidden="true"></span>
                    </button>
                    <div
                        class="home-faq__panel-outer"
                        id="<?= htmlspecialchars($panelId, ENT_QUOTES, 'UTF-8') ?>"
                        role="region"
                        aria-labelledby="<?= htmlspecialchars($triggerId, ENT_QUOTES, 'UTF-8') ?>"
                        aria-hidden="<?= htmlspecialchars($panelHidden, ENT_QUOTES, 'UTF-8') ?>"
                    >
                        <div class="home-faq__panel">
                            <div class="home-faq__answer">
                                <?= $item['html'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
