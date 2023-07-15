<?php 
session_start();
if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dn']) || empty($_POST['no']) || empty($_POST['sp'])) {
	header("Location:pagesec.php?empty");
	$_SESSION["ajouterm"]=1;
}else{
		session_start();

		require("connexion.php");
		$tablogin = $bdd->query("SELECT * FROM medecin");
		$result = $bdd->query("SELECT * FROM centre left join secretaire on (secretaire.ids = centre.ids) where secretaire.ids = '".$_SESSION["id"]."' ");

		$infocentre = $result->fetch();
		$idc = (int) $infocentre['idc'];

		$find = false;

		while ($tuple = $tablogin->fetch()) {
			if ($_POST["numordre"] == $tuple["numordre"]) {
				header("Location:pagesec.php?idexiste");
				$_SESSION["ajouterm"]=1;
				break;
			}
		}
			require("connexion.php");
			$bdd->exec("INSERT INTO medecin(idc, nomM, prenomM, daten, numordre, specialite, numtel, horaire, mail) values ('".$idc."','".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["dn"]."','".$_POST["no"]."','".$_POST["sp"]."','".$_POST["numtel"]."','".$_POST["ho"]."','".$_POST["mail"]."');");

			$_SESSION["ajouterms"]=1;
			header("Location:pagesec.php");
	}

?>