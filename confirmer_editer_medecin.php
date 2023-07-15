<?php
session_start();
?>



<?php


if ( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['tele'])|| empty($_POST['specialite'])|| empty($_POST['numordre'])|| empty($_POST['horaire'])) {
	$_SESSION['champ-empty'] = 'ok';
    if(empty($_POST['nom']))
    $_SESSION['empty-nom']='ok';

    if(empty($_POST['prenom']))
    $_SESSION['empty-prenom']='ok';

    if(empty($_POST['email']))
    $_SESSION['empty-email']='ok';

    if(empty($_POST['tele']))
    $_SESSION['empty-tele']='ok';

    if(empty($_POST['specialite']))
    $_SESSION['empty-specialite']='ok';

    if(empty($_POST['numordre']))
    $_SESSION['empty-numordre']='ok';

    if(empty($_POST['horaire']))
    $_SESSION['empty-horaire']='ok';

	header("Location:pagesec.php");
    $_SESSION["editer"] = 1;
}else{

			require("connexion.php");

			$bdd->exec("UPDATE medecin
			SET nomM = '".$_POST["nom"]."', prenomM = '".$_POST["prenom"]."', numtel = '".$_POST["tele"]."', mail = '".$_POST["email"]."', specialite = '".$_POST["specialite"]."', numordre = '".$_POST["numordre"]."' WHERE idm = '".$_SESSION["idm"]."' ");

            $_SESSION["editerm"]=1;

        header("Location:pagesec.php");
        
	}

?>