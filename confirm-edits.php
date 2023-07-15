<?php
session_start();
?>



<?php


if ( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['tele'])) {
	$_SESSION['champ-empty'] = 'ok';
    if(empty($_POST['nom']))
    $_SESSION['empty-nom']='ok';

    if(empty($_POST['prenom']))
    $_SESSION['empty-prenom']='ok';

    if(empty($_POST['email']))
    $_SESSION['empty-email']='ok';

    if(empty($_POST['tele']))
    $_SESSION['empty-tele']='ok';

	header("Location:edits.php");
}else{

        if(isset($_POST['mdp']) && isset($_POST['mdps']) && isset($_POST['adresse'])){
            if ($_POST["mdp"] != $_POST["mdps"]) {
                header("Location:edits.php");
                $_SESSION['mdp-no-same'] = 'ok';
            }
            else{

			require("connexion.php");

			$bdd->exec("UPDATE secretaire
			SET noms = '".$_POST["nom"]."', prenoms = '".$_POST["prenom"]."', adresses = '".$_POST["adresse"]."', numtel = '".$_POST["tele"]."', mail = '".$_POST["email"]."', mdp = '".$_POST["mdp"]."' WHERE ids = '".$_SESSION["id"]."' ");

            }
        }else if(isset($_POST['mdp']) && isset($_POST['mdps'])){
            if ($_POST["mdp"] != $_POST["mdps"]) {
                header("Location:edits.php");
                $_SESSION['mdp-no-same'] = 'ok';
            }
            else{

			require("connexion.php");

			$bdd->exec("UPDATE secretaire
			SET noms = '".$_POST["nom"]."', prenoms = '".$_POST["prenom"]."', numtel = '".$_POST["tele"]."', mail = '".$_POST["email"]."' , mdp = '".$_POST["mdp"]."' WHERE ids = '".$_SESSION["id"]."' ");

            }
        }else if(isset($_POST['adresse'])){

			require("connexion.php");

			$bdd->exec("UPDATE secretaire
			SET noms = '".$_POST["nom"]."', prenoms = '".$_POST["prenom"]."', numtel = '".$_POST["tele"]."', mail = '".$_POST["email"]."', adresses = '".$_POST["adresse"]."' WHERE ids = '".$_SESSION["id"]."' ");
        }

        $_SESSION['nom'] = $_POST["nom"];
        $_SESSION['prenom'] = $_POST["prenom"];
        header("Location:edits.php");
        
	}

?>