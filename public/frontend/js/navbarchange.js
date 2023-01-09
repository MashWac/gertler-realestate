$(window).scroll(function(){
    if($(this).scrollTop()>5){
        $('.clientnavhid').fadeOut();
        $('.homelandoptions').fadeIn();
        $('.homelandoptions2').fadeIn();
    }else{
        $('.clientnavhid').fadeIn();
        $('.homelandoptions').fadeOut();
        $('.homelandoptions2').fadeOut();

    }
});
$(window).scroll(function(){
    if($(this).scrollTop()>5){
        $('.clientnav').fadeIn();
        // $('.homelandoptions').fadeIn();
    }else{
        $('.clientnav').fadeOut();
        // $('.homelandoptions').fadeOut();
    }
});
