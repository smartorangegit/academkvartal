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
            slidesToShow: 6,
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


// construction filter
var constructionFilterCtrl = (function() {

    var filter = {
        year: 2018,
        month: 0
    };

    var form = document.querySelector('.js-mini-form__construction');
    var selects = document.querySelectorAll('.js-mini-filter__select');
    var items = document.querySelectorAll('.js-construction__item');
    
    function getPublishDate(date) {
        var temp = date.trim();
        var month = parseInt(temp.substring(3, 5)) - 1;
        var year = temp.substring(6, 10);
        return new Date(year, month).getTime();
    };

    function getFilterDate() {
        return new Date(filter.year, filter.month).getTime();
    };

    function filterNews() {
        var filterDate = getFilterDate();
        var showIndex = 0;
        items.forEach(function(item) {
            var date = item.querySelector('.js-construction__date').innerHTML;
            if(getPublishDate(date) !== filterDate) {
                item.style.display = 'none';
            } else {
                item.style.display = 'block';
                showIndex++;
                if(showIndex % 2 === 0) {
                    item.dataset.order = 'even';
                } else {
                    item.dataset.order = 'odd';
                }
            }
            
        });
    };

    function showAllNews() {
        items.forEach(function(item, index) {
            item.style.display = 'block';
            if(index % 2 === 0) {
                item.dataset.order = 'odd';
            } else {
                item.dataset.order = 'even';
            }
        });
    };
    showAllNews();

    selects.forEach(function(select) {
        select.addEventListener('change', function(e) {
            filter[e.target.name] = parseInt(e.target.value);
        });
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        filterNews();
    });
    
})();