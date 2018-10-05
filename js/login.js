
function echec() {
    var i = 0;
    img=document.getElementById('alert');
    var myTimer = window.setInterval(function(){
        if(img.style.opacity == 0){
            img.style.opacity = 1;
        }else{
            img.style.opacity = 0;
        }
        i++;
        if (i === 12) {
            img.style.opacity = 0;
            clearInterval(myTimer);
        }
    }, 500);

}
