// $(document).ready(function(){

//     console.log('listo1');

// });

$(function(){
    'use strict';

    // MENU TOP
    // var barraAltura = $('.barra').innerHeight();
    var alturaImagen = $('.alturaImagen').innerHeight();
    var barraVerde = $('.contacto').innerHeight();
    var totalAltura = alturaImagen + barraVerde; 

    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > totalAltura){
            $('.navbar').addClass('fixed-top');
            $('body').css({'margin-top': barraVerde+'px'});
        }else{
            $('.navbar').removeClass('fixed-top');
            $('body').css({'margin-top': '0px'});
        }
    });

    

});
    
    
    
