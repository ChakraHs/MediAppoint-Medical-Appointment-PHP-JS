<?php

include "cnx.php";

if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["email"])&& isset($_GET["password"]))
{
    $nom=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $email=$_GET["email"];
    $password=$_GET["password"];

    $req =mysqli_query($link, "insert into patient(nom,prenom,email,password) values('$nom','$prenom','$email','$password')" );

    if($req)
    {
        echo "insertion effectuee";
    }
    else
    {
        echo "erreur d'insertion";
    }
}

?>