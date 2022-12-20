
function showbuy(){
    document.getElementById("formbuy").style.display='inline';
    document.getElementById("formrent").style.display='none';
    document.getElementById("buyform").style.background="#FFB673";
    document.getElementById("rentform").style.background=""; 
}
function showrent(){
    document.getElementById("formrent").style.display='inline';
    document.getElementById("formbuy").style.display='none'; 
    document.getElementById("rentform").style.background='#FFB673'; 
    document.getElementById("buyform").style.background="";
    
}
