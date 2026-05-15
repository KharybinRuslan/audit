<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/includes/news/helpers.php';
require_once dirname(__DIR__) . '/includes/defer-css.php';

$agreementSlug = 'polzovatelskoe-soglashenie';
$agreementH1 = 'Пользовательское соглашение';
$pageTitle = 'Пользовательское соглашение | ООО "Аудит Топ Эксперт"';
$pageDescription = 'Условия использования сайта auditte.ru: права и обязанности пользователей, порядок обработки данных, ограничения ответственности.';
$agreementDateDisplay = '06.05.2026';
$agreementDateIso = '2026-05-06';
$agreementCanonicalPath = '/' . $agreementSlug;
$agreementCanonicalAbs = aud_news_absolute_site_url($agreementCanonicalPath);

$breadcrumbs = [
    ['label' => 'Главная', 'href' => '/'],
    ['label' => $agreementH1],
];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="canonical" href="<?= htmlspecialchars($agreementCanonicalAbs, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($agreementCanonicalAbs, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <?php
    aud_inline_critical_shell_css();
    aud_render_blocking_styles([
        '/components/breadcrumbs/breadcrumbs.css',
        '/components/news-article/news-article.css',
        '/components/policy-accordion/policy-accordion.css',
    ]);
    include dirname(__DIR__) . '/includes/fonts-local.php';
    aud_render_deferred_styles([
        '/components/audit-request-form/audit-modal.css',
        '/components/site-footer/site-footer.min.css',
    ]);
    ?>
</head>

<body class="has-site-header has-breadcrumbs page-policy">
    <?php include dirname(__DIR__) . '/components/site-header/site-header.php'; ?>
    <?php include dirname(__DIR__) . '/components/breadcrumbs/breadcrumbs.php'; ?>
    <?php include dirname(__DIR__) . '/components/layout-main-open.php'; ?>

    <article class="news-article news-article--policy-page" itemscope itemtype="https://schema.org/WebPage">
        <meta itemprop="name" content="<?= htmlspecialchars($agreementH1, ENT_QUOTES, 'UTF-8') ?>">
        <link itemprop="url" href="<?= htmlspecialchars($agreementCanonicalAbs, ENT_QUOTES, 'UTF-8') ?>">
        <div class="news-article__inner">
            <header class="news-article__head">
                <div class="news-article__head-text">
                    <time class="news-article__date" datetime="<?= htmlspecialchars($agreementDateIso, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($agreementDateDisplay, ENT_QUOTES, 'UTF-8') ?>
                    </time>
                    <h1 class="news-article__title"><?= htmlspecialchars($agreementH1, ENT_QUOTES, 'UTF-8') ?></h1>
                </div>
            </header>
            <div class="news-article__body article-content policy-accordion js-policy-accordion" itemprop="text">
                <h2>1. Общие положения</h2>
                <p>1.1. Настоящее Пользовательское соглашение (далее - Соглашение) регулирует порядок использования сайта <a href="https://auditte.ru/">https://auditte.ru/</a> (далее - Сайт) и его сервисов.</p>
                <p>1.2. Оператором Сайта является ООО "Аудит Топ Эксперт" (далее - Оператор).</p>
                <p>1.3. Используя Сайт, Пользователь подтверждает, что ознакомился с условиями Соглашения, Политикой конфиденциальности и принимает их в полном объеме.</p>

                <h2>2. Термины</h2>
                <p>2.1. Пользователь - любое физическое или юридическое лицо, посещающее Сайт.</p>
                <p>2.2. Сервисы Сайта - формы обратной связи, формы заявок, консультационные формы, контентные разделы и иные функции, доступные на Сайте.</p>
                <p>2.3. Контент - текстовые, графические, аудио-, видео- и иные материалы, размещенные на Сайте.</p>

                <h2>3. Предмет соглашения</h2>
                <p>3.1. Оператор предоставляет Пользователю право безвозмездно использовать Сайт и его сервисы в информационных и законных целях.</p>
                <p>3.2. Информация на Сайте носит справочный характер и не является публичной офертой, если прямо не указано иное.</p>
                <p>3.3. Отправка заявки через формы Сайта означает запрос на связь и не означает автоматическое заключение договора.</p>

                <h2>4. Права и обязанности пользователя</h2>
                <p>4.1. Пользователь обязуется предоставлять достоверные сведения при заполнении форм Сайта.</p>
                <p>4.2. Пользователь обязуется не использовать Сайт для распространения вредоносного ПО, спама, недостоверной информации и иных противоправных действий.</p>
                <p>4.3. Пользователь не вправе предпринимать действия, направленные на нарушение работоспособности Сайта и его сервисов.</p>

                <h2>5. Права и обязанности оператора</h2>
                <p>5.1. Оператор вправе изменять содержание Сайта, структуру разделов и условия настоящего Соглашения без предварительного уведомления.</p>
                <p>5.2. Оператор вправе ограничить доступ к Сайту при выявлении действий, нарушающих законодательство РФ или условия настоящего Соглашения.</p>
                <p>5.3. Оператор обязуется принимать разумные меры для поддержания работоспособности Сайта, но не гарантирует его бесперебойную работу.</p>

                <h2>6. Персональные данные и коммуникации</h2>
                <p>6.1. Порядок обработки персональных данных регулируется Политикой конфиденциальности, размещенной по адресу <a href="/politika-konfidencialnosti">/politika-konfidencialnosti</a>.</p>
                <p>6.2. Отправляя данные через формы Сайта, Пользователь подтверждает согласие на обработку персональных данных в объеме, необходимом для обратной связи и оказания услуг.</p>
                <p>6.3. Пользователь соглашается на получение ответов по указанным каналам связи (телефон, email, мессенджеры) в рамках обработки его запроса.</p>

                <h2>7. Интеллектуальная собственность</h2>
                <p>7.1. Исключительные права на Контент Сайта принадлежат Оператору либо иным правообладателям на законных основаниях.</p>
                <p>7.2. Копирование, распространение и иное использование Контента допускается только при наличии письменного согласия правообладателя, если иное прямо не предусмотрено законодательством РФ.</p>

                <h2>8. Ограничение ответственности</h2>
                <p>8.1. Оператор не несет ответственности за убытки, возникшие вследствие использования или невозможности использования Сайта, включая технические сбои, действия третьих лиц и иные обстоятельства, не зависящие от Оператора.</p>
                <p>8.2. Оператор не несет ответственности за содержание и доступность внешних ресурсов, ссылки на которые могут быть размещены на Сайте.</p>
                <p>8.3. Пользователь самостоятельно оценивает правовые и иные риски, связанные с использованием информации, размещенной на Сайте.</p>

                <h2>9. Порядок разрешения споров</h2>
                <p>9.1. Споры и разногласия по вопросам, связанным с исполнением настоящего Соглашения, разрешаются путем переговоров.</p>
                <p>9.2. При недостижении соглашения спор подлежит рассмотрению в судебном порядке в соответствии с законодательством Российской Федерации.</p>

                <h2>10. Заключительные положения</h2>
                <p>10.1. Настоящее Соглашение вступает в силу с момента начала использования Сайта Пользователем.</p>
                <p>10.2. Действующая редакция Соглашения постоянно доступна по адресу <a href="/polzovatelskoe-soglashenie">/polzovatelskoe-soglashenie</a>.</p>
                <p>10.3. По вопросам, связанным с Соглашением и работой Сайта, можно обратиться по адресу электронной почты: <a href="mailto:info@aditte.ru">info@aditte.ru</a>.</p>
            </div>
        </div>
    </article>

    <?php include dirname(__DIR__) . '/components/layout-main-close.php'; ?>
    <?php include dirname(__DIR__) . '/components/site-footer/site-footer.php'; ?>
    <?php include dirname(__DIR__) . '/components/audit-request-form/audit-modal.php'; ?>

    <script defer src="/components/site-header/site-header.js"></script>
    <script defer src="/components/audit-request-form/audit-modal.js"></script>
    <script defer src="/js/policy-accordion.js"></script>
</body>

</html>
