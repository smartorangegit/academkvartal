var contactsCtrl = (function() {

    function init() {
        
        var center = {
            lat: 50.472404,
            lng: 30.362129
        };
    
        var map = new google.maps.Map(document.querySelector('.js-contacts__map'), {
                    zoom: 13,
                    center: center,
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: true,
        });
        
    
        var markersIcons = {
            main: {x: 104, y: 2},
            bank: {x: 2, y: 2},
            dentist: {x: 37, y: 1},
            education: {x: 70, y: 2},
            pharmacy: {x: 214, y: 1},
            restaraunt: {x: 248, y: 2},
            school: {x: 282, y: 1},
            shop: {x: 316,	y: 2},
            shopping_mall: {x: 350,y: 2},
            souvenirs: {x: 384,y: 2},
            sport: {x: 418,y: 2},
            toy_shop: {x: 452,y: 2},
            sales: {x: 486,y: 2}
        };
    
        var markers_spritesheet;
        var dev = false;
        if(dev) {
            markers_spritesheet = '/img/infrastructure/infrastructure_spritesheet.png';
        } else {
            markers_spritesheet = '/wp-content/themes/academpark/assets/img/infrastructure/infrastructure_spritesheet.png';
        }
    
        var markersData = [
            {
                content: '<div class="marker"><div class="marker__name">Академ Квартал</div><div class="marker__address">Приборный пер., 10</div></div>',
                position: {lat: 50.472404, lng: 30.362129},
                type: 'main'
            },
            {
                content: '<div class="marker"><div class="marker__name">Відділ продажу</div><div class="marker__address">просп. Комарова, 46</div></div>',
                position: {lat: 50.43487, lng: 30.403276},
                type: 'sales'
            },
        ];
    
        var activeInfoBubble;
    
        markersData.forEach(function(marker) {
            var markerSettings = {};
            if(marker.type === 'main' || marker.type === 'sales') {
                markerSettings.iconWidth = 106;
                markerSettings.iconHeight = 144;
            } else {
                markerSettings.iconWidth = 30;
                markerSettings.iconHeight = 37;
            }
            markerSettings.arrowSize = 0;
    
            var mapMarker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(marker.position.lat, marker.position.lng),
                icon: new google.maps.MarkerImage(markers_spritesheet, 
                                                new google.maps.Size(markerSettings.iconWidth, markerSettings.iconHeight), 
                                                new google.maps.Point(markersIcons[marker.type].x, markersIcons[marker.type].y)
                                                )
            });
    
            var infoBubble = new InfoBubble({
                map: map,
                content: marker.content,
                position: new google.maps.LatLng(marker.position.lat, marker.position.lng),
                padding: 20,
                borderRadius: 0,
                shadowStyle: 0,
                arrowSize: markerSettings.arrowSize,
                borderWidth: 1,
                borderColor: '#ececec',
                backgroundColor: '#f7f7f7',
                minWidth: 218,
                minHeight: 110,
                disableAutoPan: true,
                hideCloseButton: true,
                arrowPosition: markerSettings.arrowPosition,
                backgroundClassName: 'phoney',
            });
    
            mapMarker.addListener('click', function(e) {
                activeInfoBubble&&activeInfoBubble.close();
                infoBubble.open(map, mapMarker);
                activeInfoBubble = infoBubble;
            });
        });
    
        map.addListener('click', function(e) {
            activeInfoBubble&&activeInfoBubble.close();
        });

    }; //end init


    return {
        init: init
    };

})();

window.onload = contactsCtrl.init();