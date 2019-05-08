import $ from 'jquery';
window.jQuery = $;
window.$ = $;

var nav = $('.navbar');

$(document).on('click', 'a[href^="#"]', function (event) {
    var NavHeight = nav.height();
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - NavHeight - 10
    }, 300)
});