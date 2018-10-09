var galleryCtrl = (function() {

    function init() {

        var mainGal = $('.js-gallery__main').slick({
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
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 4,
                      slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 379,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                    }
                },
            ]
        });

        document.addEventListener('keydown', function(e) {
            if (e.keyCode == '37') {
                mainGal.slick('slickPrev')
            }
            else if (e.keyCode == '39') {
                mainGal.slick('slickNext')
            }
        })

    }

    return {
        init: init
    }
})();

galleryCtrl.init();