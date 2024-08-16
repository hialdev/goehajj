$(document).ready(function() {
    let menu = $('.menu-box');
    let btnMenu = $('.btn-menu');
    let btnCloseMenu = $('.btn-menu-close');
    
    btnMenu.click(function(){
        menu.addClass('active')
    });
    btnCloseMenu.click(function(){
        menu.removeClass('active');
    });

    $('.faq-item').click(function() {
        $(this).toggleClass('active');
    });


});