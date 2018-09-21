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

    $('.js-filter-item__user_checkboxes').change(function() {
        filter.rooms = [];
        document.querySelectorAll('.js-filter__checkbox').forEach(function(checkbox) {
            if(checkbox.checked) {
                filter.rooms.push(parseInt(checkbox.value))
            }
        });
    });





})()