<?php 
session_start();

require("connexion.php");
$tablogin = $bdd->query("SELECT * FROM patient");
$find = false;
while ($tuple = $tablogin->fetch()) {
	if ($_POST["mail"] == $tuple["mail"] && $_POST["mdp"] == $tuple["mdp"]) {
		$find = true;
		break;
	}
}

if ($find == true) {
	header("Location:pagepat.php");
	$_SESSION["connected"] = true;
	$_SESSION["mail"] = $_POST["mail"];
	$_SESSION["username"] = $tuple["username"];
	$_SESSION["nom"] = $tuple["nom"];
	$_SESSION["prenom"] = $tuple["prenom"];
	$_SESSION["telep"] = $tuple["numtelep"];
	$_SESSION["mailp"] = $tuple["mail"];
	$_SESSION["id"] = $tuple["idp"];



} else {
	
	header("Location:loginformPatient.php?incorrect");
	// echo "<script type='text/javascript'>
 //       alert('Error, You have not used our services before, so no details for you to visit and explore'); </script>";
	$_SESSION["connected"] = false;
}

?>