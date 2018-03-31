$(function($) {

    $(document).ready(function(){
        $(window).resize(function(){
            console.log($(document).height());
        });
    });

    $('.carousel').carousel({
        interval: 2000
    })

    $(document).on('mouseenter','.genders',function () {
        $(this).find(".item-gender").slideDown(100);
    });
    $(document).on('mouseleave','.genders',function () {
        $(this).find(".item-gender").slideUp(100);
    });

});