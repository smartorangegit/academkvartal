var galleryCtrl = (function() {

    function init() {
        $('.js-gallery__main').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.js-gallery__nav',
            prevArrow: $('.js-gallery__main-arrow_left'),
            nextArrow: $('.js-gallery__main-arrow_right'),
        });

        $('.js-gallery__nav').slick({
            focusOnSelect: true,
            slidesToShow: 7,
            slidesToScroll: 1,
            arrows: true,
            asNavFor: '.js-gallery__main',
            prevArrow: $('.js-gallery__nav-arrow_left'),
            nextArrow: $('.js-gallery__nav-arrow_right'),
        });
    }

    return {
        init: init
    }
})();

galleryCtrl.init();