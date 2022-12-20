$(window).scroll(function(){
    if($(this).scrollTop()>5){
        $('.clientnavhid').fadeOut();
        $('.homelandoptions').fadeIn();
    }else{
        $('.clientnavhid').fadeIn();
        $('.homelandoptions').fadeOut();
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
