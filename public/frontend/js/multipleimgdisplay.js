var selyyDiv="";
var storedFiles=[];
$(document).ready(function(){
    $('.galleryphotonew').on('click', function() {
        var $elem = $(this).closest('div.currentimage').next().next().find('div.galleryofnew'); 
        $(".galleryphotonew").on("change", handleFileSelect);
        selyyDiv=$elem;
    
        function handleFileSelect(e){
    
            var files=e.target.files;
            var filesArr=Array.prototype.slice.call(files);
            filesArr.forEach(function(f){
                if(!f.type.match("image.*")){
                    return;
                }
                storedFiles.push(f);
                
                var reader=new FileReader();
                reader.onload=function(e){
                    var html='<img src="' +
                    e.target.result + 
                    "\"data-file'" + 
                    f.name + 
                    "'class=avatar rounded lg' alt='Product Image' height='400px' width='350px'>";
                    selyyDiv.html(html);
                };
                reader.readAsDataURL(f);
        
            });
        
        } 
    });
    


});
