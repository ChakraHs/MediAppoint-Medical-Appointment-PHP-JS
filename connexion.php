<?php 
try {
	$bdd = new PDO("mysql:host=localhost;dbname=medicalg;charset=utf8","root","");
	//echo "connexion a la bdd faite avec succes";
} catch (Exception $e) {
	die("erreur : ".$e->getMessage());
}
?>