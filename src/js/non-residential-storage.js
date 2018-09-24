var nonResidentialStorage = (function() {

    var gallery = $('.js-non-residential__storage-gallery');

    gallery.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.js-gallery__main-arrow_left'),
        nextArrow: $('.js-gallery__main-arrow_right'),
    });

})();