import $ from 'jquery';
window.jQuery = $;
window.$ = $;

// Click sur burger 
$('[data-toggle="slide-collapse"]').on('click', function() {
    var $navMenuCont = $($(this).data('target'));
    $navMenuCont.animate({
      'width': 'toggle'
    }, 350);
    $(".menu-overlay").fadeToggle(500);
    $(".burger").toggleClass("fa-bars fa-times");
  });

  // Click à l'intérieur de la page
  $(".menu-overlay").on('click', function() {
    $(".navbar-toggler").trigger("click");
    $(".menu-overlay").fadeOut(500);
  });

  // Click sur un lien du menu
  $(".nav-link").on('click', function() {
    $("#slide-navbar-collapse").animate({
      'width': 'toggle'
    }, 350);
    $(".menu-overlay").fadeOut(500);
    $(".burger").toggleClass("fa-times fa-bars");
  });

  
