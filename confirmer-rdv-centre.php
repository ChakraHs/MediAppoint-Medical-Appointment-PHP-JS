<?php
session_start();
?>



<?php
if(!empty($_POST["hour"])) $_SESSION['time']=$_POST["hour"];
if ( empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dn']) || empty($_POST['adresse']) || empty($_POST['email']) || empty($_POST['tele']) || empty($_POST['nom-utilisateur']) || empty($_POST['mdp']) || empty($_POST['mdps']) ) {
	$_SESSION['champ-empty'] = 'ok';
	$_SESSION['nbpc'] = 4;
	if ( !empty($_POST['nom'])) $_SESSION['nom'] = $_POST['nom'];
	if ( !empty($_POST['prenom'])) $_SESSION['prenom'] = $_POST['prenom'];
	if ( !empty($_POST['dn'])) $_SESSION['dn'] = $_POST['dn'];
	if ( !empty($_POST['adresse'])) $_SESSION['adresse'] = $_POST['adresse'];
	if ( !empty($_POST['email'])) $_SESSION['email'] = $_POST['email'];
	if ( !empty($_POST['tele'])) $_SESSION['tele'] = $_POST['tele'];
	if ( !empty($_POST['nom-utilisateur'])) $_SESSION['nom-utilisateur'] = $_POST['nom-utilisateur'];
	if ( !empty($_POST['mdp'])) $_SESSION['mdp'] = $_POST['mdp'];
	if ( !empty($_POST['mdps'])) $_SESSION['mdpse'] = $_POST['mdps'];
	header("Location:prendrerdvniCentre.php");
}else{


	if($_POST['conditionAccept']=="false"){

		if ( !empty($_POST['nom'])) $_SESSION['nom'] = $_POST['nom'];
		if ( !empty($_POST['prenom'])) $_SESSION['prenom'] = $_POST['prenom'];
		if ( !empty($_POST['dn'])) $_SESSION['dn'] = $_POST['dn'];
		if ( !empty($_POST['adresse'])) $_SESSION['adresse'] = $_POST['adresse'];
		if ( !empty($_POST['email'])) $_SESSION['email'] = $_POST['email'];
		if ( !empty($_POST['tele'])) $_SESSION['numtele'] = $_POST['tele'];
		if ( !empty($_POST['nom-utilisateur'])) $_SESSION['username'] = $_POST['nom-utilisateur'];
		if ( !empty($_POST['mdp'])) $_SESSION['mdp'] = $_POST['mdp'];
		if ( !empty($_POST['mdps'])) $_SESSION['mdps'] = $_POST['mdps'];


		$_SESSION['conditionAccept']=$_POST["conditionAccept"];
		$_SESSION['nbpc'] = 4;
		header("Location:prendrerdvniCentre.php");
	}
	else{
        $_SESSION['nom'] = $_POST["nom"];
        $_SESSION['prenom'] = $_POST["prenom"];
		$_SESSION['dn'] = $_POST["dn"];
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['numtele'] = $_POST["tele"];
        $_SESSION['adresse'] = $_POST["adresse"];
        $_SESSION['username'] = $_POST["nom-utilisateur"];
        $_SESSION['mdp'] = $_POST["mdp"];
        $_SESSION['mdps'] = $_POST["mdps"];

			//require("connexion.php");
			//$bdd->exec("INSERT INTO patient(nom, prenom, daten, adrss, mail, username, mdp, numtelep) VALUES
			//('".$nom."', '".$prenom."', '".$dn."', '".$adresse."', '".$email."', '".$username."', '".$mdp."', '".$numtele."');");

			// $idpresult = $bdd->query("SELECT * from patient where mail = '".$email."' ");

			// $tupleb = $idpresult->fetch();
			// $idp = (int) $tupleb["idp"];

			// $bdd->exec("INSERT INTO rdv(idm, idp, jour, heure, mois, typeder) VALUES
			// ('".$_SESSION["idm"]."', '".$idp."', '".$date[1]."', '".$date[0]."', '".$date[2]."', '".$_SESSION["type"]."');");
			$_SESSION['nbpc'] = 5;
			header("Location:prendrerdvniCentre.php");
	}

        


			//header("Location:enregistrees avec succes.php");
	}

?>