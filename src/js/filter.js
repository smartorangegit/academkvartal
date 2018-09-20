var filterCtrl = (function() {


    $('.js-ion-range').ionRangeSlider({
        type: "double",
        hide_min_max: true,
        // hide_from_to: true,
        onChange: function(d) {
            console.log(d.input)
        }
    });
    

})()