<?php 
session_start();

require("connexion.php");
$tablogin = $bdd->query("SELECT * FROM medecin");
$find = false;
while ($tuple = $tablogin->fetch()) {
	if ($_POST["id"] == $tuple["idm"]) {
		$find = true;
		break;
	}

}

	if ($find == true) {
		// echo $_POST["id"];
		header("Location:prendrerdv.php");
		$_SESSION["connected"] = true;
		$_SESSION["specialite"] = $tuple["specialite"];
		$_SESSION["nomM"] = $tuple["nomM"];
		$_SESSION["prenomM"] = $tuple["prenomM"];
		$_SESSION["idm"] = $tuple["idm"];
		$_SESSION["horaire"] = $tuple["horaire"];
		$_SESSION["numtel"] = $tuple["numtel"];
        $_SESSION["idc"] = $tuple["idc"];
	}else{
		echo "erreur";
	}
	
	

?>