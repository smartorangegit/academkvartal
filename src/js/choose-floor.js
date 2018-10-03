var chooseFloor = (function() {

    var toolTip = document.querySelector('.js-choose-floor__tooltip');
    var floors = document.querySelectorAll('.js-choose-floor__floor');
    var tooltipFloor = document.querySelector('.js-tooltip-number-floor');
    var tooltopAppartment = document.querySelector('.js-tooltip-number-appartments');
    var parentSvg = document.querySelector('.choose-floor__svg');

    floors.forEach(function(floor) {
        floor.addEventListener('mouseover', function(e) {
            var parentSvgpos = parentSvg.getBoundingClientRect();
            var rect = e.target.getBoundingClientRect();
            tooltipFloor.innerHTML = e.target.dataset.floor;
            tooltopAppartment.innerHTML = e.target.dataset.appartments;
            toolTip.style.top = rect.top - parentSvgpos.top + 'px';
            toolTip.style.left = rect.right - parentSvgpos.left + 'px';
            toolTip.style.display = 'block';
        });

        floor.addEventListener('mouseleave', function() {
            toolTip.style.display = 'none';
        });
    })

})();