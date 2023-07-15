<?php
session_start();
?>



<?php


if ( empty($_POST['pr']) || empty($_POST['ncarte']) || empty($_POST['cvv']) || empty($_POST['month']) || empty($_POST['year'])) {
	$_SESSION['champ-empty-p'] = 'ok';
	$_SESSION['nbpi'] = 3;
	header("Location:prendrerdv.php");
}else{


	require("connexion.php");

    $tabpat = $bdd->query("SELECT * from patient where idp = '".$_SESSION['idp']."' ");
    $tuple = $tabpat->fetch();


            $time = $_POST['hour'];
            $t = explode(" ",$time);

			$bdd->exec("INSERT INTO rdv(idm, idp, jour, heure, mois, typeder) VALUES
			('".$_SESSION["idm"]."', '".$_SESSION["id"]."', '".$t[1]."', '".$t[0]."', '".$t[2]."', '".$_SESSION["type"]."');");

			header("Location:pagepat.php");
			$_SESSION['succes'] = 1;
	}

?>