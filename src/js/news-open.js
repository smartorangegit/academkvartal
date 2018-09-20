var newsOpenCtrl = (function() {

    function init() {
        $('.js-news-open__images').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            prevArrow: $('.js-news-open__gallery-nav-arrow_left'),
            nextArrow: $('.js-news-open__gallery-nav-arrow_right'),
        });
    }

    return {
        init: init
    }
})();

newsOpenCtrl.init();