<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Новини</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="news">
<?php include_once('includes/gtm_body.php'); ?>

    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Новини</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active">Новини</span>
            </div>
        </div>
        <div class="container">
            <div class="mini-filter__container">
                <form class="mini-form">
                    <div class="mini-filter-year">
                        <label class="mini-filter-label" for="mini-filter__year">Рік:</label>
                        <select class="mini-filter__select" name="year" id="mini-filter__year">
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option selected value="2018">2018</option>
                        </select>
                    </div>
                    <div class="mini-filter-month">
                        <label class="mini-filter-label" for="mini-filter__month">Місяць:</label>
                        <select class="mini-filter__select" name="month" id="mini-filter__month">
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
            <div>
                <ul class="news__list news__list_2">
                    <li class="news__item">
                        <a href="/news-open-1.php">
                            <div class="news__item-image news__item-image_1">
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
                    <li class="news__item">
                        <a href="/news-open-2.php">
                            <div class="news__item-image news__item-image_2">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    10% знижка першим покупцям! Стань одним із перших!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_3">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    Акційна пропозиція для молодих сімей. Дізнайся Більше!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_4">
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
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_5">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    10% знижка першим покупцям! Стань одним із перших!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_6">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    Акційна пропозиція для молодих сімей. Дізнайся Більше!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_7">
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
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_8">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    10% знижка першим покупцям! Стань одним із перших!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_9">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    Акційна пропозиція для молодих сімей. Дізнайся Більше!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_10">
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
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_11">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    10% знижка першим покупцям! Стань одним із перших!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="news__item">
                        <a href="#">
                            <div class="news__item-image news__item-image_12">
                            </div>
                            <div class="news__item-text">
                                <div class="news__item-heading">
                                    Акційна пропозиція для молодих сімей. Дізнайся Більше!
                                </div>
                                <div class="news__item-date">
                                    24.08.2018 &mdash; 19:00
                                </div>
                            </div>
                        </a>
                    </li> -->
                </ul>
                <div style="height: 120px; width: 100%"></div>
                <!-- <div class="page-pagiantion news__page-pagiantion">
                    <div class="container page-pagiantion__container">
                        <div class="page-pagination__arrow page-pagination__arrow_left">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="100%" height="100%" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;"
                                xml:space="preserve">
                                <g>
                                    <path d="M165.304,142.468L277.517,30.267c1.902-1.903,2.847-4.093,2.847-6.567c0-2.475-0.951-4.665-2.847-6.567L263.239,2.857
                                        C261.337,0.955,259.146,0,256.676,0c-2.478,0-4.665,0.955-6.571,2.857L117.057,135.9c-1.903,1.903-2.853,4.093-2.853,6.567
                                        c0,2.475,0.95,4.664,2.853,6.567l133.048,133.043c1.903,1.906,4.086,2.851,6.564,2.851c2.478,0,4.66-0.947,6.563-2.851
                                        l14.277-14.267c1.902-1.903,2.851-4.094,2.851-6.57c0-2.472-0.948-4.661-2.851-6.564L165.304,142.468z"/>
                                    <path d="M55.668,142.468L167.87,30.267c1.903-1.903,2.851-4.093,2.851-6.567c0-2.475-0.947-4.665-2.851-6.567L153.6,2.857
                                        C151.697,0.955,149.507,0,147.036,0c-2.478,0-4.668,0.955-6.57,2.857L7.417,135.9c-1.903,1.903-2.853,4.093-2.853,6.567
                                        c0,2.475,0.95,4.664,2.853,6.567l133.048,133.043c1.902,1.906,4.09,2.851,6.57,2.851c2.471,0,4.661-0.947,6.563-2.851
                                        l14.271-14.267c1.903-1.903,2.851-4.094,2.851-6.57c0-2.472-0.947-4.661-2.851-6.564L55.668,142.468z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="page-pagination__list">
                            <li><a class="page-pagination_active-link" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                        </ul>
                        <div class="page-pagination__arrow page-pagination__arrow_right">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="100%" height="100%" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;"
                                xml:space="preserve">
                                <g>
                                    <path d="M277.515,135.9L144.464,2.857C142.565,0.955,140.375,0,137.9,0c-2.472,0-4.659,0.955-6.562,2.857l-14.277,14.275
                                        c-1.903,1.903-2.853,4.089-2.853,6.567c0,2.478,0.95,4.664,2.853,6.567l112.207,112.204L117.062,254.677
                                        c-1.903,1.903-2.853,4.093-2.853,6.564c0,2.477,0.95,4.667,2.853,6.57l14.277,14.271c1.902,1.905,4.089,2.854,6.562,2.854
                                        c2.478,0,4.665-0.951,6.563-2.854l133.051-133.044c1.902-1.902,2.851-4.093,2.851-6.567S279.417,137.807,277.515,135.9z"/>
                                    <path d="M170.732,142.471c0-2.474-0.947-4.665-2.857-6.571L34.833,2.857C32.931,0.955,30.741,0,28.267,0s-4.665,0.955-6.567,2.857
                                        L7.426,17.133C5.52,19.036,4.57,21.222,4.57,23.7c0,2.478,0.95,4.664,2.856,6.567L119.63,142.471L7.426,254.677
                                        c-1.906,1.903-2.856,4.093-2.856,6.564c0,2.477,0.95,4.667,2.856,6.57l14.273,14.271c1.903,1.905,4.093,2.854,6.567,2.854
                                        s4.664-0.951,6.567-2.854l133.042-133.044C169.785,147.136,170.732,144.945,170.732,142.471z"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div> -->
                <div class="news__people">
                    <img class="news__people-person news__people-person_eating" src="img/news/news_people_picnic.png" alt="News people picnic">
                    <img class="news__people-person news__people-person_running" src="img/news/news__poeple_runners.png" alt="News people running">
                </div>
            </div>
        </div>
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/news.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>