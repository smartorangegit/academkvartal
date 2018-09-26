var newsCtrl = (function() {

    var filter = {
        year: 2018,
        month: 0
    };

    var form = document.querySelector('.js-mini-form__news');
    var selects = document.querySelectorAll('.js-mini-filter__select');
    var items = document.querySelectorAll('.news__item');
    
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
        items.forEach(function(item) {
            var date = item.querySelector('.js-news__item-date').innerHTML;
            if(getPublishDate(date) !== filterDate) {
                item.style.display = 'none';
            } else {
                item.style.display = 'block';
            }
        });
    };

    function showAllNews() {
        items.forEach(function(item) {
            item.style.display = 'block';
        });
    };

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