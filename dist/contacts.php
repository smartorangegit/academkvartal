<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <title>Контакти</title>
</head>
<body class="contacts">
    <?php include_once('includes/menu.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
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
                            <h5 class="main-contacts__subheader">Адрес комплекса:</h5>
                            <p class="main-contacts__paragraph">г. Киев, ул. Академика Каблукова, 23</p>
                        </div>
                        <div class="main-contacts__item main-contacts__sales-department">
                            <h5 class="main-contacts__subheader">Отдел продаж:</h5>
                            <p class="main-contacts__paragraph">Киев, просп. Комарова, 46</p>
                            <p class="main-contacts__paragraph">ПН-ПТ: 09:00 – 19:00</p>
                            <p class="main-contacts__paragraph">СБ-ВС: 10:00 – 17:00</p>
                        </div>
                        <div class="main-contacts__item contacts__consultation">
                            <h5 class="main-contacts__subheader">Запись на консультацию:</h5>
                            <p class="main-contacts__paragraph">(044) 391-01-51</p>
                        </div>
                    </div>
                    <div class="contacts__form main-contacts__form">
                        <form>
                            <h5 class="contacts__form-heading main-contacts__form-heading">Зворотній зв'язок</h5>
                            <input type="text" name="name" class="input main-contacts__input" placeholder="Ім'я:">
                            <input type="text" name="phone" class="input main-contacts__input" placeholder="Телефон:">
                            <textarea name="message" class="textarea main-contacts__textarea" rows="5">Повідомлення:</textarea>
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
</body>
</html>