<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <title>Квартира 2С</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="appartment">
    <?php include_once('includes/gtm_body.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Квартира 2С</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  // <span class="page-breadcrumbs__item"><a href="/choose-appartment.php">Вибір квартири</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Квартира 2С</span>
            </div>
        </div>
        <div class="container">
            <div class="appartment__container">
                <div class="appartment__left">
                    <a href="" class="btn btn__bg-image btn_floor_bg btn_appartment btn_appartment_1">
                        <span class="btn__bg-image-text">Обрати поверх</span>
                    </a>
                    <a href="/filter.php" class="btn btn__bg-image btn_filter_bg btn_appartment btn_appartment_2">
                        <span class="btn__bg-image-text btn__bg-image-text_filter">Підбір по параметрам</span>
                    </a>
                    <div class="compass compass__appartment-page">
                        <img src="img/choose-appartment/compass.png" alt="Compass Image">
                        <span class="compass__direction compass__direction_east">СХ</span>
                        <span class="compass__direction compass__direction_west">ЗХ</span>
                        <span class="compass__direction compass__direction_south">ПД</span>
                        <span class="compass__direction compass__direction_north">ПН</span>
                    </div>
                    <div class="appartment__plan">
                        <div class="appartment__plan-heading">План поверху</div>
                        <img src="img/appartment/mini.png" alt="">
                    </div>
                </div>
                <div class="appartment__center">
                    <img src="img/appartment/app.png" alt="Test">
                    <div class="appartment__center-btns">
                        <a href="/filter.php" class="btn btn__bg-image btn_pdf_bg">
                            <span class="btn__bg-image-text">Завантажити</span>
                        </a>
                        <a href="/filter.php" class="btn btn__bg-image btn_lock_bg">
                            <span class="btn__bg-image-text">Дізнатися ціну</span>
                        </a>
                        <a href="/filter.php" class="btn btn__bg-image btn_key_bg">
                            <span class="btn__bg-image-text">Забронювати</span>
                        </a>
                    </div>
                </div>
                <div class="appartment__right">
                <div class="app__info">
                        <h5 class="app__info-heading">Параметри Квартири</h5>
                        <table class="app__info-table">
                            <tr>
                                <td>Загальна:</td>
                                <td>64.89 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Житлова:</td>
                                <td>36.27 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Передпокій:</td>
                                <td>9.76 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Кухня:</td>
                                <td>11.31 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Спальня:</td>
                                <td>19.03 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Санвузол:</td>
                                <td>3.01 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Ванна:</td>
                                <td>4.54 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Спальня:</td>
                                <td>4.54 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Санвузол:</td>
                                <td>48.39 м<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Ванна:</td>
                                <td>48.39 м<sup>2</sup></td>
                            </tr>
                            <tr class="app__info-bold">
                                <td>Загальна площа:</td>
                                <td>48.39 м<sup>2</sup></td>
                            </tr>
                            <tr class="app__info-bold">
                                <td>Житлова площа:</td>
                                <td>48.39 м<sup>2</sup></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>