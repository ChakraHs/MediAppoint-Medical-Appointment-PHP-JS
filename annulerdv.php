<?php
session_start();

echo '<meta charset="utf-8">';
require("connexion.php");
$bdd->exec("DELETE FROM rdv where idr = '".$_POST["idrdv"]."';");

header("location:pagesec.php");


?>