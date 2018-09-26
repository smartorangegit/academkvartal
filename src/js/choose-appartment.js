var chooseAppartmentCtrl = (function() {

    var appartments = document.querySelectorAll('.svg-appartment__link');

    appartments.forEach(function(appartment) {
        appartment.addEventListener('mouseover', function() {
            for(var key in this.dataset) {
                if(document.querySelector('.js-' + key)) {
                    document.querySelector('.js-' + key).innerHTML = this.dataset[key];
                }
            }
        })
    });


})();