setTimeout(function(){

    var message = document.getElementById('S_msg');
    if(message){
        message.style.display = "none";

    }
},3000);


document.getElementById("show_user").addEventListener("click",function(){

    var go = document.getElementById("cardopen");

    if(go.style.display ==="none"){
        go.style.display ="block";
    }
    else{
        go.style.display ="none";
    }

});


