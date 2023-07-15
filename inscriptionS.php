<?php 
session_start();


if(!isset($_SESSION['champ-empty'])) $_SESSION['champ-empty'] = 'no';
if(!isset($_SESSION['mdp-no-same'])) $_SESSION['mdp-no-same'] = 'no';
if(!isset($_SESSION['empty-nom'])) $_SESSION['empty-nom'] = 'no';
if(!isset($_SESSION['empty-prenom'])) $_SESSION['empty-prenom'] = 'no';
if(!isset($_SESSION['empty-email'])) $_SESSION['empty-email'] = 'no';
if(!isset($_SESSION['empty-tele'])) $_SESSION['empty-tele'] = 'no';
if(!isset($_SESSION['empty-mdp'])) $_SESSION['empty-mdp'] = 'no';
if(!isset($_SESSION['empty-mdps'])) $_SESSION['empty-mdps'] = 'no';
if(!isset($_SESSION['mail-existe'])) $_SESSION['mail-existe'] = 'no';
if(!isset($_SESSION['empty-nomc'])) $_SESSION['empty-nomc'] = 'no';
if(!isset($_SESSION['empty-villec'])) $_SESSION['empty-villec'] = 'no';
if(!isset($_SESSION['empty-adressec'])) $_SESSION['empty-adressec'] = 'no';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription administratif</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/inscriptions.css">
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
                        <a href="nosCentre.php">Nos Centres Hospitales</a>
                    </li>
                    <li>
                        <a href="loginformPatient.php">Espace Patient</a>
                    </li>
                </ul>

                <ul class="second-list">
                    <li>
                    <div class="box" id="box1">
                        <label class="text-avant-input">
                        <?xml version="1.0" ?><svg style = "width: 16px; fill: #5AABF0; " viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="search"><path d="M29.71,28.29l-6.5-6.5-.07,0a12,12,0,1,0-1.39,1.39s0,.05,0,.07l6.5,6.5a1,1,0,0,0,1.42,0A1,1,0,0,0,29.71,28.29ZM14,24A10,10,0,1,1,24,14,10,10,0,0,1,14,24Z"/></g></svg>
                        </label>
                        <input type="text" placeholder=" Search...">
                    </div>
                    </li>
                    <li class="active">
                        <a href="connexionS.php">Espace Administratif</a>
                    </li>
                    <li>
                        <a href="aide et contact.php">Aide et Contact</a>
                    </li>
                </ul>


                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
        </div>
    </nav>








    <form action="confirm-inscriptions.php" method="POST">
    <div class="information" id="information">
                        <div class="titre-container">
                            <h3>Je m'inscrit</h3>
                            <?php
                            if($_SESSION['champ-empty'] == 'ok'){
                                echo '<h4 class="red-titre"> Tous les champs (*) doivent être remplis </h4>';
                            }
                            ?>
                            <?php
                            if($_SESSION['mail-existe'] == 'ok'){
                                echo '<h4 class="red-titre"> Email deja existe </h4>';
                            }
                            ?>
                        </div>
                        <div class="information-container">
                            <div class="info-person-container info-con">
                                <h4>Informations Personnelles</h4>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-nom'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="nom" id="" placeholder="Nom (*)">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-prenom'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="prenom" id="" placeholder="Prénom (*)">
                                    </div>
                                </div>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="adresse" id="" placeholder="Adresse (facultatif)">
                                    </div>
                                </div>
                            </div>


                            <div class="info-contact-container info-con">
                                <h4>Informations de contact</h4>
                                <div class="deux-inputs Informations-contact">
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-email'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="email" name="email" id="" placeholder="Email (*)">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-tele'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="tel" name="tele" id="" placeholder="Téléphone Mobile (*)">
                                    </div>
                                </div>
                            </div>


                            <div class="info-profil-container info-con">
                                <h4> Informations Profil </h4>
                                <?php
                                if($_SESSION['mdp-no-same'] == 'ok'){
                                    echo '<h4 class="red"> Les deux champs doivent être identiques </h4>';
                                }
                                if($_SESSION['empty-mdp'] == 'ok'){
                                    echo '<h4 class="red"> (*) </h4>';
                                }
                                ?>
                                <div class="deux-inputs Informations Profil">
                                    <div class="input-con">
                                        <input type="password" name="mdp" id="" placeholder="Mot de passe (*)">
                                </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-mdps'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="password" name="mdps" id="" placeholder="Confirmer le mot de passe(*)">
                                    </div>
                                </div>
                            </div>



                            <div class="info-person-container info-con">
                                <h4>Informations Centre</h4>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-nomc'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="nomc" id="" placeholder="Nom de centre (*)">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-villec'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="villec" id="" placeholder="Ville (*)">
                                    </div>
                                </div>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-adressec'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="adressec" id="" placeholder="Adresse (*)">
                                    </div>
                                </div>
                            </div>


                            <div class="info-edit-container">
                                    <h4>(*) champ obligatoire</h4>
                            </div>

                            <div class="enregistre-btn-container">
                                    <button class="enregistre-btn">enregistre</button>
                            </div>

                        </div>
                    </div>
                </form>




<script src="js/search.js"></script>               
</body>

</html>

<?php

$_SESSION['mdp-no-same'] = 'no';
$_SESSION['champ-empty'] = 'no';
$_SESSION['empty-nom'] = 'no';
$_SESSION['empty-prenom'] = 'no';
$_SESSION['empty-email'] = 'no';
$_SESSION['empty-tele'] = 'no';
$_SESSION['empty-mdp'] = 'no';
$_SESSION['empty-mdps'] = 'no';
$_SESSION['mail-existe'] = 'no';
$_SESSION['empty-nomc'] = 'no';
$_SESSION['empty-villec'] = 'no';
$_SESSION['empty-adressec'] = 'no';

?>