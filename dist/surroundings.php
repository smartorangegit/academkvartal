<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Оточення</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body>
<?php include_once('includes/gtm_body.php'); ?>

    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section class="surroundings">
        <div class="page-heading">
            <h1>Оточення</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Оточення</span>
            </div>
        </div>
        <div class="container surroundings__container">
            <img src="img/surroundigs/surroundings_map.png" alt="Оточення" />
        </div>
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDssdEK_-ltBLRmxTIFH3xio-sx8EIAVBY"></script>
    <script src="js/common.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>