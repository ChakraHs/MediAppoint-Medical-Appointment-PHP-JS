<?php
session_start();
?>



<?php


if ( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['tele']) || empty($_POST['mdp']) || empty($_POST['mdps']) || empty($_POST['nomc']) || empty($_POST['villec']) || empty($_POST['adressec'])) {
	$_SESSION['champ-empty'] = 'ok';
    if(empty($_POST['nom']))
    $_SESSION['empty-nom']='ok';

    if(empty($_POST['prenom']))
    $_SESSION['empty-prenom']='ok';

    if(empty($_POST['email']))
    $_SESSION['empty-email']='ok';

    if(empty($_POST['tele']))
    $_SESSION['empty-tele']='ok';

    if(empty($_POST['mdp']))
    $_SESSION['empty-mdp']='ok';

    if(empty($_POST['mdps']))
    $_SESSION['empty-mdps']='ok';

    if(empty($_POST['nomc']))
    $_SESSION['empty-nomc']='ok';

    if(empty($_POST['villec']))
    $_SESSION['empty-villec']='ok';

    if(empty($_POST['adressec']))
    $_SESSION['empty-adressec']='ok';

	header("Location:inscriptionS.php");
}else{

        if(isset($_POST['adresse'])){
            if ($_POST["mdp"] != $_POST["mdps"]) {
                header("Location:inscriptionS.php");
                $_SESSION['mdp-no-same'] = 'ok';
            }
            else{
			require("connexion.php");
            $tablogin = $bdd->query("SELECT * FROM secretaire");

		    while ($tuple = $tablogin->fetch()) {
			if ($_POST["email"] == $tuple["mail"]) {
				header("Location:inscriptionS.php");
                $_SESSION['mail-existe'] = 'ok';
                $find = true;
                break;
			}}
                require("connexion.php");

				$bdd->exec("INSERT INTO secretaire (noms, prenoms, numtel, mail, mdp, adresses) values ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["tele"]."','".$_POST["email"]."','".$_POST["mdp"]."','".$_POST["adresse"]."')");

                $result = $bdd->query("SELECT * from secretaire where mail = '".$_POST["email"]."' ");
                $infosec = $result->fetch();
                $ids = (int) $infosec['ids'];


                $bdd->exec("INSERT INTO centre (ids, nomc, ville, adresse) values ('".$ids."','".$_POST["nomc"]."','".$_POST["villec"]."','".$_POST["adressec"]."')");

                $_SESSION['inscri'] = 1;

				header("Location:connexions.php");
            }
        }else{
            if ($_POST["mdp"] != $_POST["mdps"]) {
                header("Location:inscriptionS.php");
                $_SESSION['mdp-no-same'] = 'ok';
            }
            else{
			require("connexion.php");
            $tablogin = $bdd->query("SELECT * FROM secretaire");

		    while ($tuple = $tablogin->fetch()) {
			if ($_POST["email"] == $tuple["mail"]) {
				header("Location:inscriptionS.php");
                $_SESSION['mail-existe'] = 'ok';
                $find = true;
                break;
			}}
                require("connexion.php");
				$bdd->exec("INSERT INTO secretaire (noms, prenoms, numtel, mail, mdp) values ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["tele"]."','".$_POST["email"]."')");


                $result = $bdd->query("SELECT * from secretaire where mail = '".$_POST["email"]."' ");
                $infosec = $result->fetch();
                $ids = (int) $infosec['ids'];


                $bdd->exec("INSERT INTO centre (ids, nomc, ville, adresse) values ('".$ids."','".$_POST["nomc"]."','".$_POST["villec"]."','".$_POST["adressec"]."')");

                $_SESSION['inscri'] = 1;
				header("Location:connexions.php");
            }
        }
    
    
    }

?>