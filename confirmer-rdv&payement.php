<?php
session_start();
?>



<?php


if ( empty($_POST['pr']) || empty($_POST['ncarte']) || empty($_POST['cvv']) || empty($_POST['month']) || empty($_POST['year'])) {
	$_SESSION['champ-empty-p'] = 'ok';
	$_SESSION['nbp'] = 5;
	header("Location:prendrerdvni.php");
}else{

			require("connexion.php");
			$bdd->exec("INSERT INTO patient(nom, prenom, adrss, mail, username, mdp, numtelep) VALUES
			('".$_SESSION['nom']."', '".$_SESSION['prenom']."', '".$_SESSION['adresse']."', '".$_SESSION['email']."', '".$_SESSION['username']."', '".$_SESSION['mdp']."', '".$_SESSION['numtele']."');");

			$idpresult = $bdd->query("SELECT * from patient where mail = '".$_SESSION['email']."' ");

			$tupleb = $idpresult->fetch();
			$idp = (int) $tupleb["idp"];

            $time = $_SESSION['time'];
            $t = explode(" ",$time);

			$bdd->exec("INSERT INTO rdv(idm, idp, jour, heure, mois, typeder) VALUES
			('".$_SESSION["idm"]."', '".$idp."', '".$t[1]."', '".$t[0]."', '".$t[2]."', '".$_SESSION["type"]."');");

			header("Location:enregistrees avec succes.php");
	}

?>