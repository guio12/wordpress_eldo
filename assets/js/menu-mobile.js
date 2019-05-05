import $ from 'jquery';
window.jQuery = $;
window.$ = $;


$('[data-toggle="slide-collapse"]').on('click', function() {
    var $navMenuCont = $($(this).data('target'));
    $navMenuCont.animate({
      'width': 'toggle'
    }, 350);
    $(".menu-overlay").fadeToggle(500);
    $(".burger").toggleClass("fa-bars fa-times");
  });

  $(".menu-overlay").click(function(event) {
    $(".navbar-toggler").trigger("click");
    $(".menu-overlay").fadeOut(500);
  });

  $(".nav-link").on('click', function() {
    $("#slide-navbar-collapse").hide(1000);
    $(".menu-overlay").fadeOut(500);
  });
