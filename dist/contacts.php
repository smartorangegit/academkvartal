<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Контакти</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="contacts">
    <?php include_once('includes/gtm_body.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section class="contacts-page">
        <div class="page-heading">
            <h1>Контакти</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Контакти</span>
            </div>
        </div>
        <div class="container">
            <div class="contacts animate">
                <div class="container contacts__container">
                    <div class="addresses">
                        <div class="main-contacts__item main-contacts__complex-address">
                        <h5 class="main-contacts__subheader">Адреса комплексу:</h5>
                        <p class="main-contacts__paragraph">м. Київ, вул. Приборний пров., 10</p>
                    </div>
                    <div class="main-contacts__item main-contacts__sales-department">
                        <h5 class="main-contacts__subheader">Відділ продажу:</h5>
                        <p class="main-contacts__paragraph">Київ, просп. Комарова, 46</p>
                        <p class="main-contacts__paragraph">ПН-ПТ: <span class="contacts__date">09:00 – 19:00</span></p>
                        <p class="main-contacts__paragraph">СБ-НД: <span class="contacts__date">10:00 – 17:00</span></p>
                    </div>
                    <div class="main-contacts__item contacts__consultation">
                        <h5 class="main-contacts__subheader">Запис на консультацію:</h5>
                        <p class="main-contacts__paragraph">(044) 391-01-00</p>
                    </div>
                    </div>
                    <div class="contacts__form main-contacts__form">
                        <form class="js-contacts-page-form">
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
            </div>
            <div class="contacts__map js-contacts__map"></div>
        </div>        
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDssdEK_-ltBLRmxTIFH3xio-sx8EIAVBY"></script>
    <script src="js/common.min.js"></script>
    <script src="js/contacts.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>