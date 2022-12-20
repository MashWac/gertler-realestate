window.addEventListener("load",revealhouse);

function revealhouse(){
    var reveals=document.querySelectorAll('.revealhouse');
    for(var i=0 ; i<reveals.length; i++){
        var windowheight= window.innerHeight;
        var revealTop= reveals[i].getBoundingClientRect().top;
        var revealpoint= 0;

        if (revealTop< windowheight-revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}