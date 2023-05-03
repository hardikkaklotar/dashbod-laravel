import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;


$('body').on('click', '.hamburger', function() {
    $(".sidebar").addClass("aside");
});
$('body').on('click', '.close', function() {
    $(".sidebar").removeClass("aside");
});
$('body').on('click', '.drop-btn', function() {
    $(".dropdown").slideToggle("down");
});
$('body').on('click', '.btn-2', function() {
    $(".dropdown-2").slideToggle("down");
});
$('body').on('click', '.btn-3', function() {
    $(".dropdown-3").slideToggle("down");
});
$('body').on('click', '.popup_btn', function() {
    $(".popup").fadeIn("active");
});
$('body').on('click', '.close', function() {
    $(".popup").fadeOut("active");
});
$('body').on('click', '.test-btn', function() {
    $(".test-popup").fadeIn("active");
});
$('body').on('click', '.close', function() {
    $(".test-popup").fadeOut("active");
});

