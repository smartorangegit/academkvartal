var chooseFloor = (function() {

    var toolTip = document.querySelector('.js-choose-floor__tooltip');
    var floors = document.querySelectorAll('.js-choose-floor__floor');
    var tooltipFloor = document.querySelector('.js-tooltip-number-floor');
    var tooltopAppartment = document.querySelector('.js-tooltip-number-appartments');

    floors.forEach(function(floor) {
        floor.addEventListener('mouseover', function(e) {
            tooltipFloor.innerHTML = e.target.dataset.floor;
            tooltopAppartment.innerHTML = e.target.dataset.appartments;
            toolTip.style.top = e.clientY  - 20 + 'px';
            var left = document.querySelector('.js-tooltip-alignment-building-' + e.target.dataset.building).getBoundingClientRect().right;
            var distance;
            switch(e.target.dataset.building) {
                case '3':
                    distance = 115;
                    break;
                case '2':
                    distance = 125;
                    break;
                case '1':
                    distance = 140;
                    break;
                default:
                    distance = 120;
            } 
            toolTip.style.left = left - distance  + 'px';
        })
    })

})();