<?php
session_start();
?>


<?php

    $_SESSION["type"] = $_POST["rad"];

    if($_SESSION["type"] == "A domicile"){
        if(!empty($_POST["specialiteD"])){
            if(empty($_POST["centreD"]) && empty($_POST["ville"])){
                header("Location:searchRdvBySpNi.php");
                $_SESSION["connected"] = true;
                $_SESSION["specialite"] = $_POST["specialiteD"];
            }
            if(!empty($_POST["centreD"])){
    
            }
            else if(!empty($_POST["ville"])){
    
            }
        }
        else if(!empty($_POST["centreD"])){
            echo"welcome";
            if(empty($_POST["ville"])){
                header("Location:searchRdvByCentreNi.php");
                $_SESSION["connected"] = true;
                $_SESSION["nomc"] = $_POST["centreD"];
            }
        }
    }else if($_SESSION["type"] == "Appel"){
        if(!empty($_POST["specialiteA"])){
            if(empty($_POST["centreA"]) && empty($_POST["ville"])){
                header("Location:searchRdvBySpNi.php");
                $_SESSION["connected"] = true;
                $_SESSION["specialite"] = $_POST["specialiteA"];
            }
            if(!empty($_POST["centreA"])){
    
            }
            else if(!empty($_POST["ville"])){
    
            }
        }
    }else if($_SESSION["type"] == "Cabinet"){
        if(!empty($_POST["specialiteC"])){
            if(empty($_POST["centreA"]) && empty($_POST["ville"])){
                header("Location:searchRdvBySpNi.php");
                $_SESSION["connected"] = true;
                $_SESSION["specialite"] = $_POST["specialiteC"];
            }
            if(!empty($_POST["centreA"])){
    
            }
            else if(!empty($_POST["ville"])){
    
            }
        }
    }
    
?>