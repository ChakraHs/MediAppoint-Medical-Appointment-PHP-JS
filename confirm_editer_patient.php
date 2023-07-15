<?php
session_start();
?>



<?php


if ( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['tele'])|| empty($_POST['username'])) {
	$_SESSION['champ-empty'] = 'ok';
    if(empty($_POST['nom']))
    $_SESSION['empty-nom']='ok';

    if(empty($_POST['prenom']))
    $_SESSION['empty-prenom']='ok';

    if(empty($_POST['email']))
    $_SESSION['empty-email']='ok';

    if(empty($_POST['tele']))
    $_SESSION['empty-tele']='ok';
    if(empty($_POST['username']))
    $_SESSION['username_empty']='ok';

	header("Location:editer_patient.php");
}else{

        $_SESSION["username"] = $_POST['username'];
        if(isset($_POST['mdp']) && isset($_POST['mdps']) && isset($_POST['adrss'])){
            if ($_POST["mdp"] != $_POST["mdps"]) {
                header("Location:editer_patient.php");
                $_SESSION['mdp-no-same'] = 'ok';
            }
            else{

			require("connexion.php");

			$bdd->exec("UPDATE patient
			SET nom = '".$_POST["nom"]."', prenom = '".$_POST["prenom"]."', adrss = '".$_POST["adresse"]."', numtelep = '".$_POST["tele"]."', mail = '".$_POST["email"]."', username = '".$_POST["username"]."', mdp = '".$_POST["mdp"]."' WHERE idp = '".$_SESSION["id"]."' ");

            }
        }else if(isset($_POST['mdp']) && isset($_POST['mdps'])){
            if ($_POST["mdp"] != $_POST["mdps"]) {
                header("Location:editer_patient.php");
                $_SESSION['mdp-no-same'] = 'ok';
            }
            else{

			require("connexion.php");

			$bdd->exec("UPDATE patient
			SET nom = '".$_POST["nom"]."', prenom = '".$_POST["prenom"]."', numtelep = '".$_POST["tele"]."', mail = '".$_POST["email"]."' , username = '".$_POST["username"]."', mdp = '".$_POST["mdp"]."' WHERE idp = '".$_SESSION["id"]."' ");

            }
        }else if(isset($_POST['adrss'])){

			require("connexion.php");

			$bdd->exec("UPDATE patient
			SET nom = '".$_POST["nom"]."', prenom = '".$_POST["prenom"]."', numtelep = '".$_POST["tele"]."', mail = '".$_POST["email"]."', username = '".$_POST["username"]."', adrss = '".$_POST["adresse"]."' WHERE id = '".$_SESSION["id"]."' ");
        }

        $_SESSION['nom'] = $_POST["nom"];
        $_SESSION['prenom'] = $_POST["prenom"];
        header("Location:editer_patient.php");
        
	}

?>