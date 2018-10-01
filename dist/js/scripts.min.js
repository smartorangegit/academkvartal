var academkvartalState = {
  menuOpen: false,
  callbackOpen: false
};

var body = document.getElementsByTagName('body')[0];

//  =====================================================================================================================
// Animation on scroll
var animateHTMLCtrl = (function() {
    var aniamteClass = 'animate',
    elems = document.querySelectorAll('.animate'),
    windowHeight = window.innerHeight;

    // Here debounce returns your passed functions and assigns them to new vars so that you can do removeEventListener
    var _debouncedScroll = debounce(_checkPosition, 100);
    var _debouncedInit = debounce(init, 100);

    // if to more elements to animate remove event listener from scroll
    function _checkForAnimatedElements() {
        elems = document.querySelectorAll('.animate');
        if(elems.length === 0 ) {
            window.removeEventListener('scroll', _debouncedScroll);
            window.removeEventListener('resize', _debouncedInit);
        }
    };

    function _addEventHandlers() {
      window.addEventListener('scroll', _debouncedScroll);
      window.addEventListener('resize', _debouncedInit);
    };
  
    function _checkPosition() {        
      for (var i = 0; i < elems.length; i++) {
        var posFromTop = elems[i].getBoundingClientRect().top;
        if (posFromTop - windowHeight <= -200) {
          elems[i].classList.remove(aniamteClass);
        }
      }
      _checkForAnimatedElements();
    };
    
    function init() {
        _addEventHandlers();
        _checkPosition();
    };

    setTimeout(_checkPosition, 500)

    return {
      init: init
    };
  
  })();

animateHTMLCtrl.init();
//  =====================================================================================================================

//  =====================================================================================================================
// Menu open/close start
var menuCtrl = (function() {

  var menuBtn = document.querySelector('.js-menu__btn');
  var menu = document.querySelector('.js-menu');
  var menuBtnClose = document.querySelector('.js-menu__btn_close');

  function openMenu() {
    academkvartalState.menuOpen = true;
    menu.classList.add('menu__open');
    body.classList.add('overflow-hidden');
  };

  function closeMenu() {
    academkvartalState.menuOpen = false;
    menu.classList.remove('menu__open');
    if(!academkvartalState.callbackOpen) {
      body.classList.remove('overflow-hidden');
    }
  };

  function _addEventHandlers() {
    menuBtn.addEventListener('click',openMenu);
    menuBtnClose.addEventListener('click', closeMenu);
  };

  function init() {
    _addEventHandlers();
  };

  return {
    init: init
  };

})();
menuCtrl.init();
// Menu open/close end
//  =====================================================================================================================

//  =====================================================================================================================
// Callback form show/hide start


(function() {

  var showMenuBtn = $('.js-show-callback-form');
  var closeMenuBtn = $('.js-callback-form__form-close-btn');

  function showForm() {
    if(!academkvartalState.menuOpen) {
      body.classList.add('overflow-hidden');
    }
    $('.callback-form').addClass('callback-form__show');
  };

  function hideForm() {
    if(!academkvartalState.menuOpen) {
      body.classList.remove('overflow-hidden');
    }
    $('.callback-form').removeClass('callback-form__show');
  }

  showMenuBtn.click(showForm);
  closeMenuBtn.click(hideForm);



  

  function addForm(formClass) {

    $(formClass + ' .js-masked-phone').inputmask("+38 (099)999-99-99");


    $(formClass).submit(function(e) {
      e.preventDefault();

      var valid = false;

      var name = $(formClass + ' .js-input-name').val();
      var phone = $(formClass + ' .js-input-phone').val();
      var uaPhoneRegular = /^[\+]?[0-9]{2}[\s][(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{2}[-\s\.]?[0-9]{2}$/;

      var email = $(formClass + ' .js-input-email').val();
      var emailRegular = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      // Name check
      if($(formClass + ' .js-input-name').length !== 0) {
        if(name.length === 0) {
          valid = false;
          $(formClass + ' .js-input__error_name').css('display', 'block');
        } else {
          valid = true;
          $(formClass + ' .js-input__error_name').css('display', 'none');
        }
      }

      // Phone check
      if($(formClass + ' .js-input-phone').length !== 0) {
        if(phone.length === 0) {
          valid = false;
          $(formClass + ' .js-input__error_phone').css('display', 'block');
        } else {
          valid = true;
          $(formClass + ' .js-input__error_phone').css('display', 'none');

          // Phone valid check
          if(uaPhoneRegular.test(phone)) {
            valid = true;
            $(formClass + ' .js-input__error_phone-format').css('display', 'none');
          } else {
            valid = false;
            $(formClass + ' .js-input__error_phone-format').css('display', 'block');
          }

        } 
      }//end phone
      

      // Email check
      if($(formClass + ' .js-input-email').length !== 0) {
        if(email.length === 0) {
          valid = false;
          $(formClass + ' .js-input__error_email').css('display', 'block');

        } else {
          valid = true;
          $(formClass + ' .js-input__error_email').css('display', 'none');

          // Email valid check
          if(emailRegular.test(email)) {
            valid = true;
            $(formClass + ' .js-input__error_email-format').css('display', 'none');
          } else {
            valid = false;
            $(formClass + ' .js-input__error_email-format').css('display', 'block');
          }
        }
      } //End email
      
      var url;
      var wordpress = true;
      if(wordpress) {
        url = '/wp-content/themes/academpark/forms/application.php';
      } else {
        url = 'forms/application.php';
      }


      if(valid) {
      var data = $(formClass).serialize();
        $.ajax({
          type: "POST",
          url: url,
          data: data,
          success: function(res) {
            hideForm();
            alert('Дякую! Ваші дані відправлені, наші менеджери зв`язуються з Вами найближчим часом');
          },
          error: function(err) {
            console.log(err);
          }
        })
      }

      
    });
  };

  addForm('.js-callback-include-form');
  addForm('.js-main-page-form');
  addForm('.js-contacts-page-form');

})();

// Callback form show/hide end
//  =====================================================================================================================
