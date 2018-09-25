var developerCtrl = (function() {

    var learnMoreBtn = document.querySelector('.js-developer-learn-more');
    var textContainer = document.querySelector('.js-developer__about');
    

    function init() {
        learnMoreBtn.addEventListener('click', function() {
            if(textContainer.classList.contains('developer__about_hidden')) {
                textContainer.classList.remove('developer__about_hidden');
            } else {
                textContainer.classList.add('developer__about_hidden');
            }
        })
    }

    return  {
        init: init
    }

})();

developerCtrl.init();