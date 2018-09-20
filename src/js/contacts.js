var contactsCtrl = (function() {
    
    function init() {
        
        var center = {
            lat: 50.472404,
            lng: 30.362129
        };
    
        var map = new google.maps.Map(document.querySelector('.js-contacts__map'), {
                    zoom: 18,
                    center: center,
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: true,
        });

        var mapMarker = new google.maps.Marker({
            map: map,
            position: center,
            icon: 'img/infrastructure/infra_main.png'
        })
    };

    return {
        init: init
    };
})();

contactsCtrl.init();