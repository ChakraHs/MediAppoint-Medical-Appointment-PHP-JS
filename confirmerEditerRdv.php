<?php
session_start();


			require("connexion.php");
            if(empty($_POST['hour'])){
                header("Location:pagepat.php");
                $_SESSION['nbpp']=4;
            }

            else{
                $time = explode(" ",$_POST['hour']);
                $bdd->exec("UPDATE rdv
			SET jour = '".$time[1]."', heure = '".$time[0]."', mois = '".$time[2]."' WHERE idr = '".$_SESSION["idr"]."' ");

            
            header("Location:pagepat.php");
            $_SESSION['nbpp']=3;
    
            }

?>