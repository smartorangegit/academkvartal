<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Вибір квартири</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="chaapp">
    <?php include_once('includes/gtm_body.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Вибір квартири</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Вибір квартири</span>
            </div>
        </div>
        <div class="container">
            <div class="chapp__container">
                <div class="chapp__links">
                    <a href="" class="btn btn__bg-image chapp__btn btn_floor_bg chapp__btn_appartment">
                        <span class="btn__bg-image-text">Обрати поверх</span>
                    </a>
                    <a href="/filter.php" class="btn btn__bg-image chapp__btn btn_filter_bg chapp__btn_filter">
                        <span class="btn__bg-image-text btn__bg-image-text_filter">Підбір по параметрам</span>
                    </a>
                    <ul class="chapp__legend">
                        <li class="chapp__legend-circle chapp__legend-circle_bought">Куплено</li>
                        <li class="chapp__legend-circle chapp__legend-circle_1-room">1 кімната</li>
                        <li class="chapp__legend-circle chapp__legend-circle_2-room">2 кімнати</li>
                        <li class="chapp__legend-circle chapp__legend-circle_3-room">3 кімнати</li>
                    </ul>
                </div>
                <div class="chapp__img">
                    <img src="img/choose-appartment/dud_appartment.png" alt="Compass Image">
                </div>
                <div class="chapp__data">
                    <div class="compass">
                        <img src="img/choose-appartment/compass.png" alt="Compass Image">
                        <span class="compass__direction compass__direction_east">СХ</span>
                        <span class="compass__direction compass__direction_west">ЗХ</span>
                        <span class="compass__direction compass__direction_south">ПД</span>
                        <span class="compass__direction compass__direction_north">ПН</span>
                    </div>
                    <div class="app__info">
                        <h5 class="app__info-heading">Параметри Квартири</h5>
                        <table class="app__info-table">
                            <tr>
                                <td>Будинок:</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Секція:</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Кватира:</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>К-сть кімнат:</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Загальна площа:</td>
                                <td>48.39 м<sup>2</sup></td>
                            </tr>
                            <tr>
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