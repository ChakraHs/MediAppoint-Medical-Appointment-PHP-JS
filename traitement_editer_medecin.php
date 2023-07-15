<?php
session_start();

$_SESSION["idm"] = $_POST['idm'];
$_SESSION["editer"] = 1;


header("location:pagesec.php");
?>
<script src="js/med-de-sec-btn-fcn.js"></script>