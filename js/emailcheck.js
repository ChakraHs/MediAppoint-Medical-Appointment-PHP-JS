    let mail = document.getElementById('email');
    let span = document.getElementById('span');


        mail.onkeydown = function(){
            const regex =/^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i;
            if(regex.test(mail.value)){
                span.innerText = "your email is valid";
                span.style.color="lime";
                mail.style.borderBottom = "1px solid lime";
            }else{
                span.innerText = "your email is invalid";
                span.style.color="red";
                mail.style.borderBottom = "1px solid red";
            }
        }