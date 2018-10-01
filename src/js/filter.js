var filterCtrl = (function() {

    var filter = {
        building: {
            min: null,
            max: null
        },
        floor: {
            min: null,
            max: null
        },
        totalArea: {
            min: null,
            max: null
        },
        livingArea: {
            min: null,
            max: null
        },
        rooms: []
    };

    function updateFilter(key, min, max) {
        filter[key].min = min;
        filter[key].max = max;
    }

    $('.js-ion-range').ionRangeSlider({
        type: "double",
        hide_min_max: true,
        hide_from_to: true,
        onChange: function(range) {
            var input = $(range.input[0]).data('type');
            $('[data-type=' + input + 'Min]').val(range.from);
            $('[data-type=' + input + 'Max]').val(range.to);
            updateFilter(input, range.from, range.to);
        },
        onStart: function(range) {
            var input = $(range.input[0]).data('type');
            updateFilter(input, range.from, range.to);

        }
    });

    // listening for keyups on inputs
    $('.js-filter-item__user').on('keyup',function() {
        var from = parseInt($(this).children('.filter__input_min').val());
        var to = parseInt($(this).children('.filter__input_max').val());
        var input = $(this).children('.filter__input_min').data('type').slice(0, -3);
        var slider = $('[data-type=' + input + ']').data("ionRangeSlider");
        if((slider.options.min <= from && slider.options.min <= to) && (slider.options.max >= to && slider.options.max >= from) ) {
            slider.update({
                from: from,
                to: to
            });
            updateFilter(input, from, to);
        }
    });

    // detecting checbox value change
    $('.js-filter-item__user_checkboxes').change(function() {
        filter.rooms = [];
        document.querySelectorAll('.js-filter__checkbox').forEach(function(checkbox) {
            if(checkbox.checked) {
                filter.rooms.push(parseInt(checkbox.value))
            }
        });
    });

    function Appartment(selector) {
        this.selector = selector;
        this.building = $(selector).data('building');
        this.rooms = $(selector).data('rooms');
        this.floor = $(selector).data('floor');
        this.totalArea = $(selector).data('tarea');
        this.livingArea = $(selector).data('larea');
    };

    var filterResults = document.querySelectorAll('.js-filter-result-item');
    var resultsObjects = [];
    var filteredResultObjects = [];
    var showPerPage = 5;
    $('.js-filter__results-number').text(filterResults.length);

    filterResults.forEach(function(result) {
        resultsObjects.push(new Appartment(result));
    });

    // filter logic here

    // filter once when page loads
    filterItems();

    function filterItems() {
        showPerPage = 5;
        var found = resultsObjects.length;
        filteredResultObjects = [];
        resultsObjects.forEach(function(result) {
            $(result.selector).css('display', 'block');
            var passed = false;
            for(var key in filter) {
                // value is array
                if(Array.isArray(filter[key])) {
                    // array is not empty
                    if(filter[key].length !== 0) {
                        if(filter[key].includes(result[key])) {
                            passed = true;
                        } else {
                            passed = false;
                            break;
                        }
                    } else {
                        // array is empty do nothing
                        continue;
                    }
                } else {
                // its not an array
                    if(result[key] >= filter[key].min && result[key] <= filter[key].max) {
                        passed = true;
                    } else {
                        passed = false;
                        break;
                    }
                }
            }

            if(passed) {
                filteredResultObjects.push(result);
            } else {
                $(result.selector).css('display', 'none');
                found--;
            }
        });
        showFirst(filteredResultObjects);
        $('.js-filter__results-number').text(found);
    }

    // filter on every form submit
    $('.js-filter').submit(function(e) {
        e.preventDefault();
        filterItems();
    });


    // default all inputs values (reset button)
    $('.js-filter__bottom_default').click(function(e) {
        e.preventDefault();
        document.querySelectorAll('.js-ion-range').forEach(function(range) {
            var ionInstance = $(range).data('ionRangeSlider');
            // update ion instance
            ionInstance.update({
                from: ionInstance.options.from,
                to: ionInstance.options.to
            });
            // update filter values
            updateFilter(ionInstance.options.type, ionInstance.options.from, ionInstance.options.to);
            // update what user sees
            $('[data-type=' + ionInstance.options.type + 'Min]').val(ionInstance.options.from);
            $('[data-type=' + ionInstance.options.type + 'Max]').val(ionInstance.options.to);
            // remove checked from filter rooms
            filter.rooms = [];
            document.querySelectorAll('.js-filter__checkbox').forEach(function(checkbox) {
                checkbox.checked = false;
            });
        });
    });

    // show more 
    function showFirst(items) {
        items.forEach(function(item, index) {
            $(item.selector).css('display', 'none');
            if(index < showPerPage) {
                $(item.selector).css('display', 'block');
            }
        });
        showPerPage += 5;
    };

    $('.js-filter__more-results-btn').click(function() {
        showFirst(filteredResultObjects);
    });
    
})()