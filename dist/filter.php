<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css" />
    <title>Підбір по параметрам</title>
    <?php include_once('includes/gtm_head.php'); ?>
</head>
<body class="filter-body">
    <?php include_once('includes/gtm_body.php'); ?>
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/callback_form.php'); ?>
    <div class="page-blue_bg"></div>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="page-heading">
            <h1>Підбір по параметрам</h1>
        </div>
        <div class="page-breadcrumbs">
            <div class="container">
                <span class="page-breadcrumbs__item"><a href="/">Головна</a></span>  // <span class="page-breadcrumbs__item"><a href="/">Обрати поверх</a></span>  //  <span class="page-breadcrumbs__item page-breadcrumbs__item_active-blue">Підбір по параметрам</span>
            </div>
        </div>
        <div class="container">
            <div class="filter">
                <div class="filter-item filter-item__building">
                    <div class="filter-item__user js-filter-item__user">
                        <label class="fiter__label">Будинок:</label>
                        <input value="1" type="number" data-type="buildingMin" class="filter__input filter__input_min filter-item__building_min">
                        <input value="2" type="number" data-type="buildingMax" class="filter__input filter__input_max filter-item__building_max">
                    </div>
                    <input data-min="1" data-max="2" data-type="building" type="text" class="js-ion-range js-ion-range__building">
                </div>
                <div class="filter-item filter-item__floor">
                    <div class="filter-item__user js-filter-item__user">
                        <label class="fiter__label">Поверх:</label>
                        <input value="1" type="number" data-type="floorMin" class="filter__input filter__input_min filter-item__floor_min">
                        <input value="24" type="number" data-type="floorMax" class="filter__input filter__input_max filter-item__floor_max">
                    </div>
                    <input data-min="1" data-max="24" data-type="floor" type="text" class="js-ion-range js-ion-range__floor">
                </div>
                <div class="filter-item filter-item__total-area">
                    <div class="filter-item__user js-filter-item__user">
                        <label class="fiter__label">Загальна лоща м2:</label>
                        <input value="44" type="number" data-type="totalAreaMin" class="filter__input filter__input_min filter-item__total-area_min">
                        <input value="172" type="number" data-type="totalAreaMax" class="filter__input filter__input_max filter-item__total-area_max">
                    </div>
                    <input data-min="44" data-max="172" data-type="totalArea" type="text" class="js-ion-range js-ion-range__total-area">
                </div>
                <div class="filter-item filter-item__living-area">
                    <div class="filter-item__user js-filter-item__user">
                        <label class="fiter__label">Житлова лоща м2:</label>
                        <input value="12" type="number" data-type = "livingAreaMin" class="filter__input filter__input_min filter-item__living-area_min">
                        <input value="154" type="number" data-type = "livingAreaMax" class="filter__input filter__input_max filter-item__living-area_max">
                    </div>
                    <input data-min="12" data-max="154" data-type="livingArea" type="text" class="js-ion-range js-ion-range__living-area">
                </div>
                <div class="filter-item filter-item__rooms">
                    <div class="filter-item__user js-filter-item__user_checkboxes">
                        <label class="fiter__label">К-сть Кімнат:</label>
                        <div class="filter__checkbox">
                            <input type="checkbox" class="js-filter__checkbox" id="filter__rooms_1" value="1">
                            <label class="filter__checkbox-label_1" for="filter__rooms_1">
                                <img src="img/filter/filter_rooms_1.png" alt="1 Room">
                            </label>
                            <label class="filter__checkbox-label_2" for="filter__rooms_1">1</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" class="js-filter__checkbox" id="filter__rooms_2" value="2">
                            <label class="filter__checkbox-label_1" for="filter__rooms_2">
                                <img src="img/filter/filter_rooms_2.png" alt="2 Room">
                            </label>
                            <label class="filter__checkbox-label_2" for="filter__rooms_2">2</label>
                        </div>
                        <div class="filter__checkbox">
                            <input type="checkbox" class="js-filter__checkbox" id="filter__rooms_3" value="3">
                            <label class="filter__checkbox-label_1" for="filter__rooms_3">
                                <img src="img/filter/filter_rooms_3.png" alt="2 Room">
                            </label>
                            <label class="filter__checkbox-label_2" for="filter__rooms_3">3</label>
                        </div>
                    </div>
                </div>
                <div class="filter-item filter-item__living-area">
                    <button class="btn btn_orange filter__search-btn">Шукати</button>
                </div>
            </div>
        </div>
        <div class="filter__results-top-bg"></div>
        <div class="filter__results-bg">
            <div class="container">
                <ul class="filter__resuls-list">
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                    <li class="filter-result-item">
                        <div class="filter-result-item__image">
                            <img src="img/filter/result_img.png" alt="result">
                        </div>
                        <div class="filter-result-item__text">
                            <ul>
                                <li>Секція: 3</li>
                                <li>К-сть кімнат: 2</li>
                                <li>Заг. площа: 36.2</li>
                                <li>Житлова площа: 20.4</li>
                            </ul>
                            <a href="" class="btn btn_orange filter-result-item__btn">Дивитися квартиру</a>
                        </div>
                    </li>
                </ul>

                <button class="btn filter__more-results-btn">Більше планувань</button>
            </div>
        </div>
    </section>
    <?php include_once('includes/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/common.min.js"></script>
    <script src="js/filter.min.js"></script>
    <script src="js/support.js"></script>
</body>
</html>