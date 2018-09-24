<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Інфраструктура</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="infrastructure">
<?php include_once('includes/gtm_body.php'); ?>

    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Інфраструктура</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Інфраструктура</span>
            </div>
        </div>
        <div class="container map_container">
            <div class="map js-map"></div>
            <!-- <div class="legend animate">
            <table>
                <tr>
                    <td class="legend__icon-color legend__icon-color_souvenirs"> 
                        <div class="legend__icon legend__icon_souvenirs"></div>
                    </td>
                    <td class="legend__text legend__text_1">Сувениыне магазины</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_sport"> 
                        <div class="legend__icon legend__icon_sport"></div>
                    </td>
                    <td class="legend__text legend__text_2">Сорт комплексы</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_education">
                        <div class="legend__icon legend__icon_education"></div>
                    </td>
                    <td class="legend__text legend__text_3">Высшие учебные заведения</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_toy-shop"> 
                        <div class="legend__icon legend__icon_toy-shop"></div>
                    </td>
                    <td class="legend__text legend__text_4">Детские магазины</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_restaraunts"> 
                        <div class="legend__icon legend__icon_restaraunts"></div>
                    </td>
                    <td class="legend__text legend__text_5">Кафе, рестораны</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_schools"> 
                        <div class="legend__icon legend__icon_schools"></div>
                    </td>
                    <td class="legend__text legend__text_6">Школы</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_dentist"> 
                        <div class="legend__icon legend__icon_dentist"></div>
                    </td>
                    <td class="legend__text legend__text_7">Стоматология</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_pharmacy"> 
                        <div class="legend__icon legend__icon_pharmacy"></div>
                    </td>
                    <td class="legend__text legend__text_8">Аптеки</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_shop"> 
                        <div class="legend__icon legend__icon_shop"></div>
                    </td>
                    <td class="legend__text legend__text_9">Супермаркеты</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_shopping-mall"> 
                        <div class="legend__icon legend__icon_shopping-mall"></div>
                    </td>
                    <td class="legend__text legend__text_10">Тортговые центры</td>
                </tr>
                <tr>
                    <td class="legend__icon-color legend__icon-color_bank"> 
                        <div class="legend__icon legend__icon_bank"></div>
                    </td>
                    <td class="legend__text legend__text_11">Банки</td>
                </tr>
            </table>

            <a href="#" class="btn btn_orange btn_infrastructure">Перейти до вибору квартири</a>
        </div> -->
        </div>
        
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDssdEK_-ltBLRmxTIFH3xio-sx8EIAVBY"></script>
    <script src="js/common.min.js"></script>
    <script src="js/infrastructure.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>