function checkform(){
    let form = document.forms["ttrifpiop"];
    if(x==4){
        let mail = document.getElementById('email');
        let span = document.getElementById('span');
            const regex =/^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i;
            if(regex.test(mail.value)){
                form.action="confirmer-rdv.php";
                form.method="POST";
                return true;
            }else{
                span.innerText = "your email is invalid";
                span.style.color="red";
                mail.style.borderBottom = "1px solid red";
                return false;
            }
    }
    else if(x==5){
        form.method="POST";
        form.action= "confirmer-rdv&payement.php";
    }
    
}