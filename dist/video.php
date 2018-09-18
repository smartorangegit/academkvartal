<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <title>Відеопрезентації</title>
</head>
<body class="video">
    <?php include_once('includes/menu.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Відеопрезентації</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Відеопрезентації</span>
            </div>
        </div>
        <div class="container">
           <div class="video__list">
               <div class="video__item">
                    <div class="video__video video__video_1">
                    </div>
                    <div class="video__text">
                        <div class="video__name">Винтаж</div>
                        <div class="video__date">24.08.2018 &mdash; 19:00</div>
                    </div>
               </div>
           </div>
        </div>
        
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
</body>
</html>