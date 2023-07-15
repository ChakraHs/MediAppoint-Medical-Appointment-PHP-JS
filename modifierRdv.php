<?php
session_start();

echo $_POST['idrdv'];

$_SESSION["idr"] = $_POST['idrdv'];


require("connexion.php");
$erdv = $bdd->query("SELECT * FROM rdv where idr = '".$_SESSION["idr"]."' ");
$erdv = $erdv->fetch();

date_default_timezone_set('Africa/Casablanca');

$date = date('Y-m-d');
$diff = abs(strtotime($date) - strtotime($erdv['temp_prendre']));
$days    = floor($diff/ (60*60*24));

if($days>=2){
    $_SESSION["modifierRdv"] = -1;
    header("location:pagepat.php");
}

//$interval = $date->diff($erdv['temp_prendre']);
else{
    $_SESSION["idm"]=$erdv['idm'];
    $_SESSION["modifierRdv"] = 1;
    header("location:pagepat.php");
}
?>