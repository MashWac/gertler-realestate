$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:0,
        autoplay:1000,
        nav:true,
        center: true,
        responsiveClass:true,
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
  