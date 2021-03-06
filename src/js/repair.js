var repairCtrl = (function() {

    var repairModalOpen = false;
    var items = $('.js-repair__item');
    var modal = $('.js-repair__modal');
    var maingallery = $('.js-gallery__main');
    var navgallery = $('.js-gallery__nav');
    var closeGal = $('.js-repair__gallery-close-btn');
    var galleryName = $('.js-gallery__name');
    var mainGal;

    function openModal(e) {
        body.classList.add('overflow-hidden');
        modal.addClass('repair__modal_open')
        repairModalOpen = true;
        pasteMainGalItems(this);
    };

    function closeModal() {
        body.classList.remove('overflow-hidden');
        modal.removeClass('repair__modal_open')
        repairModalOpen = false;
        maingallery.slick('unslick');
        navgallery.slick('unslick');
        maingallery.html('');
        navgallery.html('');
    };

    function pasteMainGalItems(clicked) {
        var html = $(clicked).children('.js-repair__gallery-items').html();
        var name = $(clicked).find('.repair__name').html();
        maingallery.html(html);
        navgallery.html(html);
        galleryName.html(name);
        initGalery();
    };

    function initGalery() {
        mainGal = maingallery.slick({
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

    document.addEventListener('keydown', function(e) {
        if (e.keyCode == '37') {
            mainGal.slick('slickPrev')
        }
        else if (e.keyCode == '39') {
            mainGal.slick('slickNext')
        }
    })

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

repairCtrl.init();