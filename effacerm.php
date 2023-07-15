<?php
session_start();

echo '<meta charset="utf-8">';
require("connexion.php");
$bdd->exec("DELETE FROM medecin where idm = '".$_POST["idm"]."';");

header("location:pagesec.php");

$_SESSION["supm"] = 1;


?>