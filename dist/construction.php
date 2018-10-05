<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Хід будівництва</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="construction">
    <?php include_once('includes/gtm_body.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Хід будівництва</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Хід будівництва</span>
            </div>
        </div>
        <div class="container">
            <div class="mini-filter__container mini-filter__container_construction">
                <form class="mini-form js-mini-form__construction">
                    <div class="mini-filter-year">
                        <label class="mini-filter-label mini-filter-label_construction" for="mini-filter__year">Рік:</label>
                        <select class="mini-filter__select js-mini-filter__select mini-filter__select_construction" name="year" id="mini-filter__year">
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option selected value="2018">2018</option>
                        </select>
                    </div>
                    <div class="mini-filter-month">
                        <label class="mini-filter-label mini-filter-label_construction" for="mini-filter__month">Місяць:</label>
                        <select class="mini-filter__select js-mini-filter__select mini-filter__select_construction" name="month" id="mini-filter__month">
                            <option value="0">Січень</option>
                            <option value="1">Лютий</option>
                            <option value="2">Березень</option>
                            <option value="3">Квітень</option>
                            <option value="4">Травень</option>
                            <option value="5">Червень</option>
                            <option value="6">Липень</option>
                            <option value="7">Серпень</option>
                            <option value="8">Вересень</option>
                            <option value="9">Жовтень</option>
                            <option value="10">Листопад</option>
                            <option value="11">Грудень</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn_orange mini-filter__btn" type="submit">Фільтрувати</button>
                    </div>
                </form>
            </div>
            <div class="construction__list">
                <div class="construction__middle-line construction__middle-line_orange"></div>
                <div class="construction__middle-line construction__middle-line_fading"></div>
               <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_1">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.08.2018 &mdash; 19:00</div>
                    </div>
                    <div class="construction__gallery-items js-construction__gallery-items">
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                        <div class="construction__gallery-item construction__gallery-item_main"><img src="img/construction/construction_item_img_1.png" alt="test"></div>
                    </div>
               </div>
               <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_2">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.01.2018 &mdash; 19:00</div>
                    </div>
                </div>
                <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_3">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.01.2018 &mdash; 19:00</div>
                    </div>
                </div>
                <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_4">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.02.2018 &mdash; 19:00</div>
                    </div>
                </div>
                <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_5">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.02.2018 &mdash; 19:00</div>
                    </div>
                </div>
                <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_6">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.02.2018 &mdash; 19:00</div>
                    </div>
                </div>
                <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_7">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.05.2018 &mdash; 19:00</div>
                    </div>
                </div>
                <div class="construction__item js-construction__item">
                    <div class="construction__construction construction__construction_8">
                        <div class="construction__overlay">
                            Дивитися альбом
                        </div>
                    </div>
                    <div class="construction__text">
                        <div class="construction__date js-construction__date">24.05.2018 &mdash; 19:00</div>
                    </div>
                </div>
           </div>
        </div>
        <div class="construction__modal js-construction__modal">
            <div class="container">
                <div class="gallery__container">
                    <div class="gallery__main js-gallery__main">
                        <div class="gallery__main-item gallery__main-item_1"></div>
                        <div class="gallery__main-item gallery__main-item_2"></div>
                        <div class="gallery__main-item gallery__main-item_3"></div>
                        <div class="gallery__main-item gallery__main-item_4"></div>
                        <div class="gallery__main-item gallery__main-item_5"></div>
                        <div class="gallery__main-item gallery__main-item_6"></div>
                        <div class="gallery__main-item gallery__main-item_7"></div>
                        <div class="gallery__main-item gallery__main-item_8"></div>
                    </div>
                    <div class="construction__gallery-close-btn js-construction__gallery-close-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="100%" height="100%" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
                            <g>
                                <polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 
                                    214.2,178.5 		"/>
                            </g>
                        </svg>
                    </div>
                    <div class="gallery__main-arrows">
                        <div class="gallery__main-arrow gallery__main-arrow_left js-gallery__main-arrow_left">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
                                    viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                                <g>
                                    <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                                        c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="gallery__main-arrow gallery__main-arrow_right js-gallery__main-arrow_right">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
                                    viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                                <g>
                                <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
                                    "/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="gallery__nav-container">
                        <div class="gallery__nav js-gallery__nav">
                            <div class="gallery__nav-item gallery__nav-item_1"></div>
                            <div class="gallery__nav-item gallery__nav-item_2"></div>
                            <div class="gallery__nav-item gallery__nav-item_3"></div>
                            <div class="gallery__nav-item gallery__nav-item_4"></div>
                            <div class="gallery__nav-item gallery__nav-item_5"></div>
                            <div class="gallery__nav-item gallery__nav-item_6"></div>
                            <div class="gallery__nav-item gallery__nav-item_7"></div>
                            <div class="gallery__nav-item gallery__nav-item_8"></div>
                        </div>
                        <div class="gallery__nav-arrows">
                            <div class="gallery__nav-arrow gallery__nav-arrow_left js-gallery__nav-arrow_left">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
                                        viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                                    <g>
                                        <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                                            c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="gallery__nav-arrow gallery__nav-arrow_right js-gallery__nav-arrow_right">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
                                        viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                                    <g>
                                    <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                                        c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
                                        "/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container construction__people">
            <img class="construction__family construction__family_1" src="img/construction/construction_family_1.png" alt="Construction Family Vector 1" />
            <img class="construction__family construction__family_2" src="img/construction/construction_family_2.png" alt="Construction Family Vector 2" />
        </div>
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/construction.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>