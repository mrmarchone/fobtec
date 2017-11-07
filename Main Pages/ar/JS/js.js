/*global $, document*/
$(document).ready(function () {
    'use strict';
    $('#update').click(function () {
        $('.update').slideToggle('slow');
    });
    $('html').smoothScroll();
    $('#box1').click(function () {
        $('#paragraph1').slideToggle('slow');
    });
    $('#box2').click(function () {
        $('#paragraph2').slideToggle('slow');
    });
    $('#box3').click(function () {
        $('#paragraph3').slideToggle('slow');
    });
    $('#box4').click(function () {
        $('#paragraph4').slideToggle('slow');
    });
    $('#box5').click(function () {
        $('#paragraph5').slideToggle('slow');
    });
    $('#box6').click(function () {
        $('#paragraph6').slideToggle('slow');
    });
    $('#box7').click(function () {
        $('#paragraph7').slideToggle('slow');
    });
    $('html').smoothScroll();
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
});
