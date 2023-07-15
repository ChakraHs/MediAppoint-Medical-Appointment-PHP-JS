function required()
{
var rad = document.forms["formRdvSearch"]["rad"].value;
var form = document.forms["formRdvSearch"];
if(rad == "A domicile"){
    var empt = document.forms["formRdvSearch"]["specialiteD"].value;
    var emptc = document.forms["formRdvSearch"]["centreD"].value;
    if(empt == "" && emptc == ""){
        form.action= 'traitindexform.php';
        form.method="POST";
    }else{
        form.action = 'traitsearchrdv.php';
        form.method="POST";
        return true;
    }
}else if(rad == "Appel"){
    var empt = document.forms["formRdvSearch"]["specialiteA"].value;
    var emptc = document.forms["formRdvSearch"]["centreA"].value;
    if(empt == ""&& emptc == ""){
        form.action= 'traitindexform.php';
        form.method="POST";
    }else{
        form.action = 'traitsearchrdv.php';
        form.method="POST";
        return true;
    }
}else if(rad == "Cabinet"){
    var empt = document.forms["formRdvSearch"]["specialiteC"].value;
    var emptc = document.forms["formRdvSearch"]["centreC"].value;
    if(empt == ""&& emptc == ""){
        form.action= 'traitindexform.php';
        form.method="POST";
    }else{
        form.action = 'traitsearchrdv.php';
        form.method="POST";
        return true;
    }
}
}






function requiredpat()
{
var rad = document.forms["formRdvSearch"]["rad"].value;
var form = document.forms["formRdvSearch"];
if(rad == "Domicile"){
    var empt = document.forms["formRdvSearch"]["specialiteD"].value;
    if(empt == ""){
        form.action= 'traitpatform.php';
        form.method="POST";
    }else{
        form.action = 'traitsearchrdv inscri.php';
        form.method="POST";
        return true;
    }
}else if(rad == "Appel"){
    var empt = document.forms["formRdvSearch"]["specialiteA"].value;
    if(empt == ""){
        form.action= 'traitpatform.php';
        form.method="POST";
    }else{
        form.action = 'traitsearchrdv inscri.php';
        form.method="POST";
        return true;
    }
}else if(rad == "Cabinet"){
    var empt = document.forms["formRdvSearch"]["specialiteC"].value;
    if(empt == ""){
        form.action= 'traitpatform.php';
        form.method="POST";
    }else{
        form.action = 'traitsearchrdv inscri.php';
        form.method="POST";
        return true;
    }
}
}