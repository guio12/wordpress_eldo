import $ from 'jquery';
window.jQuery = $;
window.$ = $;


$(window).on('load', function() {
    $(".loader").fadeOut("slow");
});