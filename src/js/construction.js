var constructionCtrl = (function() {

    var constructionModalOpen = false;
    var items = $('.js-construction__item');
    var modal = $('.js-construction__modal');
    var maingallery = $('.js-gallery__main');
    var navgallery = $('.js-gallery__nav');
    var closeGal = $('.js-construction__gallery-close-btn');

    function openModal(e) {
        body.classList.add('overflow-hidden');
        modal.addClass('construction__modal_open')
        constructionModalOpen = true;
        pasteMainGalItems(this);
    };

    function closeModal() {
        body.classList.remove('overflow-hidden');
        modal.removeClass('construction__modal_open')
        constructionModalOpen = false;
        maingallery.slick('unslick');
        navgallery.slick('unslick');
        maingallery.html('');
        navgallery.html('');
    };

    function pasteMainGalItems(clicked) {
        var html = $(clicked).children('.js-construction__gallery-items').html();
        if(html === undefined) {
            maingallery.html('No Images In Gallery');
            navgallery.html('');
        } else {
            maingallery.html(html);
            navgallery.html(html);
            initGalery();
        }
    };

    function initGalery() {
        maingallery.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.js-gallery__nav',
            prevArrow: $('.js-gallery__main-arrow_left'),
            nextArrow: $('.js-gallery__main-arrow_right'),
        });

        navgallery.slick({
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
    };

    function addListeners() {
        items.click(openModal);
        closeGal.click(closeModal)
    };

    function init() {
        addListeners();
    };

    return {
        init: init
    };

})();

constructionCtrl.init();