<?php
session_start();
?>


<?php

    $_SESSION["type"] = $_POST["rad"];


    if($_SESSION["type"] == "A domicile"){
        if(!empty($_POST["specialiteD"])){
            if(empty($_POST["centre"]) && empty($_POST["ville"])){
                header("Location:searchRdvBySp inscri.php");
                $_SESSION["connected"] = true;
                $_SESSION["specialite"] = $_POST["specialiteD"];
            }
            if(!empty($_POST["centre"])){
    
            }
            else if(!empty($_POST["ville"])){
    
            }
        }
    }else if($_SESSION["type"] == "Appel"){
        if(!empty($_POST["specialiteA"])){
            if(empty($_POST["centre"]) && empty($_POST["ville"])){
                header("Location:searchRdvBySp inscri.php");
                $_SESSION["connected"] = true;
                $_SESSION["specialite"] = $_POST["specialiteA"];
            }
            if(!empty($_POST["centre"])){
    
            }
            else if(!empty($_POST["ville"])){
    
            }
        }
    }else if($_SESSION["type"] == "Cabinet"){
        if(!empty($_POST["specialiteC"])){
            if(empty($_POST["centre"]) && empty($_POST["ville"])){
                header("Location:searchRdvBySp inscri.php");
                $_SESSION["connected"] = true;
                $_SESSION["specialite"] = $_POST["specialiteC"];
            }
            if(!empty($_POST["centre"])){
    
            }
            else if(!empty($_POST["ville"])){
    
            }
        }
    }
    
?>