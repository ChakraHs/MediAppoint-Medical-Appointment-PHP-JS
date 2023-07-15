<?php 
session_start();

require("connexion.php");
$tablogin = $bdd->query("SELECT * FROM secretaire");
$find = false;
while ($tuple = $tablogin->fetch()) {
	if ($_POST["mail"] == $tuple["mail"] && $_POST["mdp"] == $tuple["mdp"]) {
		$find = true;
		break;
	}
}

if ($find == true) {
	header("Location:pagesec.php");
	$_SESSION["connected"] = true;
	$_SESSION["mail"] = $_POST["mail"];
	$_SESSION["nom"] = $tuple["noms"];
	$_SESSION["prenom"] = $tuple["prenoms"];
	$_SESSION["id"] = $tuple["ids"];
} /*else {
	
	$tablogin1 = $bdd->query("SELECT * FROM medecinavantverif");
	$find1 = false;
	while ($tuple1 = $tablogin1->fetch()) {
		if ($_POST["mail"] == $tuple1["mail"] && $_POST["mdp"] == $tuple1["mdp"]) {
			$find1 = true;
			break;
		}
	}

	if ($find1 == true) {
		// echo "votre dossier est en cours de verification, vous pourrez vous connexter une fois que votre dossier est verifié un administrateur ";
		header("Location:connexionM.php?verif");
	} */else {
	header("Location:connexions.php?incorrect");
	$_SESSION["connected"] = false;
	}
	// $_SESSION["connected"] = false;
	// header("Location:connexionM.php");
//}



?>