<?php
session_start();


if(isset($_POST['rad'])){
    $t=$_POST['rad'];
    if($t == "Domicile"){
        $_SESSION['empty-d'] = 'ok';
        $_SESSION['form-d'] = 'flex';
        $_SESSION['rad-d'] = 'checked';
    }else if($t == "Appel"){
        $_SESSION['empty-a'] = 'ok';
        $_SESSION['form-a'] = 'flex';
        $_SESSION['rad-a'] = 'checked';
    }else if($t == "Cabinet"){
        $_SESSION['empty-c'] = 'ok';
        $_SESSION['form-c'] = 'flex';
        $_SESSION['rad-c'] = 'checked';
    }
}
$_SESSION['prRdv'] = 1;
header("location:pagepat.php");

?>