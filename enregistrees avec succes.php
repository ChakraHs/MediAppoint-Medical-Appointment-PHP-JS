<?php
session_start();

$_SESSION['time']="";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/enregistreesAvecSucces.css">
</head>
<body>



<nav>
        <div class="nav-content">
                <a href="index.php">
                    <div id="logo">
                        <h1>
                            Logo
                        </h1>
                    </div>
                </a>
                <ul class="first-list">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Nos Centres Hospitales</a>
                    </li>
                    <li>
                        <a href="loginformPatient.php">Espace Patient</a>
                    </li>
                </ul>

                <ul class="second-list">
                    <li>
                    <div class="box" id="box1">
                        <label class="*text-avant-input"></label>
                        <input type="text" placeholder=" Search...">
                    </div>
                    </li>
                    <li>
                        <a href="connexionM.php">Espace Administratif</a>
                    </li>
                    <li>
                        <a href="#">Aide et Contact</a>
                    </li>
                </ul>


                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
        </div>
    </nav>





    <div class="RdvSuccus"> 
        <h2>Rendez-vous enregistré avec succès<h2>
        <h3>important ! une modification de votre rendez-vous est possible dans 48h ( au maximum ) sinon aucune réclamation ne sera reçu</h3>
        <button> <a href="loginformPatient.php">Connectez vous maintenant</a></button>
    </div>
    
</body>
</html>