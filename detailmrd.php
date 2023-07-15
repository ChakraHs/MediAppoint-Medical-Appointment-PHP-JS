<?php
session_start();

$_SESSION["idm"] = $_POST['idm'];
$_SESSION["detail"] = 1;


require("connexion.php");
$edmedecin = $bdd->query("SELECT * FROM medecin where idm = '".$_SESSION["idm"]."' ");
$edunmedcin = $edmedecin->fetch();

$_SESSION["nomM"] = $edunmedcin['nomM'];
$_SESSION["prenomM"] = $edunmedcin['prenomM'];
$_SESSION["datenM"] = $edunmedcin['daten'];
$_SESSION["numordre"] = $edunmedcin['numordre'];
$_SESSION["specialite"] = $edunmedcin['specialite'];
$_SESSION["numtelM"] = $edunmedcin['numtel'];
$_SESSION["horaire"] = $edunmedcin['horaire'];
$_SESSION["mailM"] = $edunmedcin['mail'];




header("location:pagesec.php");
?>


<!DOCTYPE html>
<html lang="en">


    <script>
        function detailmrd(){
        var idm = <?php echo $_SESSION['idm'];?>;
        }
    </script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="detailmrd()">
    
</body>
</html>

<script src="js/med-de-sec-btn-fcn.js"></script>