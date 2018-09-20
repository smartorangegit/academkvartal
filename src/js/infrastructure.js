var infrastructureCtrl = (function() {

    function init() {
        
        var center = {
            lat: 50.472404,
            lng: 30.362129
        };
    
        var map = new google.maps.Map(document.querySelector('.js-map'), {
                    zoom: 18,
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
        };
    
        var markers_spritesheet = '/img/infrastructure/infrastructure_spritesheet.png';
    
        var markersData = [
            {
                content: '<div class="marker"><div class="marker__name">Академ Квартал</div><div class="marker__address">Приборный пер., 10</div></div>',
                position: {lat: 50.472404, lng: 30.362129},
                type: 'main'
            },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.438027, lng: 30.406896},
            //     type: 'education'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437992, lng: 30.407704},
            //     type: 'sport'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437708, lng: 30.407036},
            //     type: 'souvenirs'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437834, lng: 30.408168},
            //     type: 'restaraunt'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437147, lng: 30.407090},
            //     type: 'toy_shop'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437103, lng: 30.408270},
            //     type: 'school'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437493, lng: 30.408192},
            //     type: 'shopping_mall'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437449, lng: 30.408460},
            //     type: 'dentist'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437155, lng: 30.408747},
            //     type: 'pharmacy'
            // },
            // {
            //     content: '<div class="marker"><div class="marker__name">Marker text</div><div class="marker__address">Address</div></div>',
            //     position: {lat: 50.437351, lng: 30.409088},
            //     type: 'shop'
            // }
        ];
    
        var activeInfoBubble;
    
        markersData.forEach(function(marker) {
            var markerSettings = {};
            if(marker.type === 'main') {
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

window.onload = infrastructureCtrl.init();