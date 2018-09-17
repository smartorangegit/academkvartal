<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <title>Інфраструктура</title>
</head>
<body class="infrastructure">
    <?include_once('includes/menu.php'); ?>
    <div class="page-blue_bg"></div>
    <?include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Інфраструктура</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Інфраструктура</span>
            </div>
        </div>
        <div class="container">
            <div class="map"></div>
        </div>
    </section>
    <?include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/infrastructure.min.js"></script>
</body>
</html>