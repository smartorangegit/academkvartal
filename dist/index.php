<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Академ Квартал</title>
</head>
<body>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <?php include_once('includes/preloader.php');?>
    <section class="hero">
        <?php include_once('includes/header.php'); ?>

        <div class="main-page-hero-svg-container">
            <?php include_once('includes/main-page-hero.php'); ?>
        </div>
        <div class="hero-mobile">
            <h1 class="hero-mobile__heading">Квартал власного затишку</h1>
            <img src="img/main/mobile-heading-image.png" alt="mobile">
        </div>

        <div class="container">
            <div class="hero__intergal-logo">
                <a href="https://intergal-bud.com.ua/" target="_blank">
                    <img src="img/main/intergal_ogo.png" alt="интергал Логотип" />
                </a>
            </div>
        </div>
        
    </section>

    <section class="main-about-complex animate">
        <div class="container main-info">
            <div class="main-info__image main-about-complex_image">
                <img src="img/main//aboutcomplex_img.png" class="main-info__image-image" alt="About Complex Family">
            </div>
            <div class="main-info__text main-info__text_about-complex">
                <h2 class="main-info__subheading">Про комплекс</h2>
                <div class="main-info__slogan">Зона вашого комфорту!</div>
                <p class="main-info_paragraph">Житловий комплекс «АКАДЕМ-КВАРТАЛ» - це поєднання сучасної архітектури і високих вимог до комфорту мешканців.</p>
                <div class="main-info__btn">
                    <a href="/about-complex.php" class="btn btn_blue">Дивитись розділ</a>
                </div>
            </div>
        </div>
    </section>

    <section class="main-apartments animate">
        <div class="container main-info">
            <div class="main-info__text main-info__text_apartments">
                <h2 class="main-info__subheading">Квартири</h2>
                <div class="main-info__slogan">Функціональні та ергономічні</div>
                <p class="main-info_paragraph">У житловому комплексі «АКАДЕМ-КВАРТАЛ» архітектори передбачили комфортні планування квартир з оптимальною площею.</p>
                <div class="main-info__btn">
                    <a href="/dud.php" class="btn btn_blue">Дивитись розділ</a>
                </div>
            </div>
            <div class="main-info__image main-apartments_image">
                <img src="img/main/apartments_img.png" class="main-info__image-image" alt="About Complex Family">
            </div>
        </div>
    </section>

    <section class="main-infrastructure animate">
        <div class="container main-info">
            <div class="main-info__image main-infrastructure_image">
                <img src="img/main/infrastructure_img.png" class="main-info__image-image" alt="About Complex Family">
            </div>
            <div class="main-info__text main-info__text_infrastructure">
                <h2 class="main-info__subheading">Інфраструктура</h2>
                <div class="main-info__slogan">3 хв. до м. «Академмістечко»</div>
                <p class="main-info_paragraph">Гармонійне поєднання зручної транспортної розв'язки, мережі магазинів, супермаркетів, школи, дитячих садків, сфери сервісу та зелених скверів і парків.</p>
                <div class="main-info__btn">
                    <a href="/infrastructure.php" class="btn btn_blue">Дивитись розділ</a>
                </div>
            </div>
        </div>
    </section>

    <section class="main-news animate">
        <div class="container">
            <div class="main-news__top">
                <h2 class="main-news__subheading">Новини</h2>
                <a href="/news.php" class="btn more-news_desktop">Більше новин</a>
            </div>
            <ul class="news__list">
                <li class="news__item">
                    <a href="/news-open-1.php">
                        <div class="main-news__item-image news__item-image main-news__item-image_1">
                        </div>
                        <div class="news__item-text">
                            <div class="news__item-heading">
                                СТАРТУЄ ПРОДАЖ НОВОГО ЖИТЛОВОГО КОМПЛЕКСУ «АКАДЕМ-КВАРТАЛ»
                            </div>
                            <div class="news__item-date">
                                24.08.2018 &mdash; 19:00
                            </div>
                        </div>
                    </a>
                </li>
                <li class="news__item main-news__item_2">
                    <a href="/news-open-2.php">
                        <div class="main-news__item-image news__item-image main-news__item-image_2">
                        </div>
                        <div class="news__item-text">
                            <div class="news__item-heading">
                                ЗНИЖКА 10% ПЕРШИМ 10 ПОКУПЦЯМ КВАРТИР «АКАДЕМ-КВАРТАЛ»
                            </div>
                            <div class="news__item-date">
                                24.08.2018 &mdash; 19:00
                            </div>
                        </div>
                    </a>
                </li>
                <li class="news__item main-news__item_3">
                    <a href="/news-open-3.php">
                        <div class="main-news__item-image news__item-image main-news__item-image_3">
                        </div>
                        <div class="news__item-text">
                            <div class="news__item-heading">
                                ЖК «Академ-Квартал» - квартал комфортного життя
                            </div>
                            <div class="news__item-date">
                                24.08.2018 &mdash; 19:00
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <a href="/news.php" class="btn more-news_mobile">Більше новин</a>
        </div>
    </section>

    <section class="main-contacts animate">
        <h3 class="main-contacts__heading">Контакти</h3>
        <div class="container main-contacts__container">
            <img class="main-contacts__gyro" src="img/main/gyro_dude.png" alt="Gyroscooter Dude">
            <img class="main-contacts__bycicle" src="img/main/bycicle_girl.png" alt="Bycicle Girl">
            <div class="addresses">
                <div class="main-contacts__item main-contacts__complex-address">
                    <h5 class="main-contacts__subheader">Адреса комплексу:</h5>
                    <p class="main-contacts__paragraph">м. Київ, вул. Приборний пров., 10</p>
                </div>
                <div class="main-contacts__item main-contacts__sales-department">
                    <h5 class="main-contacts__subheader">Відділ продажу:</h5>
                    <p class="main-contacts__paragraph">Київ, просп. Комарова, 46</p>
                    <p class="main-contacts__paragraph">ПН-ПТ: 09:00 – 19:00</p>
                    <p class="main-contacts__paragraph">СБ-НД: 10:00 – 17:00</p>
                </div>
                <div class="main-contacts__item contacts__consultation">
                    <h5 class="main-contacts__subheader">Запис на консультацію:</h5>
                    <p class="main-contacts__paragraph">(044) 391-01-00</p>
                </div>
            </div>
            <div class="contacts__form main-contacts__form">
                <form class="js-main-page-form">
                    <h5 class="contacts__form-heading main-contacts__form-heading">Зворотній зв'язок</h5>
                    <div>
                        <input type="text" name="name" class="input main-contacts__input js-input-name" placeholder="Ім'я:">
                        <div style="display: none;" class="input-error js-input__error_name">Вкажіть ім'я</div>
                    </div>
                    <div>
                        <input type="text" name="phone" class="input main-contacts__input js-input-phone js-masked-phone" placeholder="Телефон:">
                        <div style="display: none;" class="input-error js-input__error_phone">Вкажіть телефон</div>
                        <div style="display: none;" class="input-error js-input__error_phone-format">Невірний формат телефону</div>
                    </div>
                    <textarea name="message" class="textarea main-contacts__textarea" rows="3">Повідомлення:</textarea>
                    <button stype="submit" class="btn contacts__form-btn">Надіслати</button>
                </form>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>