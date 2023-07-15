<?php 
session_start();


if(!isset($_SESSION['champ-empty'])) $_SESSION['champ-empty'] = 'no';
if(!isset($_SESSION['mdp-no-same'])) $_SESSION['mdp-no-same'] = 'no';
if(!isset($_SESSION['empty-nom'])) $_SESSION['empty-nom'] = 'no';
if(!isset($_SESSION['empty-prenom'])) $_SESSION['empty-prenom'] = 'no';
if(!isset($_SESSION['empty-email'])) $_SESSION['empty-email'] = 'no';
if(!isset($_SESSION['empty-tele'])) $_SESSION['empty-tele'] = 'no';



require("connexion.php");
$tabsec = $bdd->query("SELECT * FROM secretaire where ids = '".$_SESSION["id"]."' ");
$secretaire = $tabsec->fetch();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer Compte</title>
    <link rel="stylesheet" href="css/edits.css">
</head>

<body>

    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin LEFT JOIN centre ON(centre.idc = medecin.idc) LEFT JOIN secretaire ON(secretaire.ids = centre.ids) where centre.ids = '".$_SESSION["id"]."' ");
    ?>

    
<nav>
            <div class="nav-content">
                    <a href="index1.html">
                        <div id="logo">
                            <h1>
                                Logo
                            </h1>
                        </div>
                    </a>
                    <ul class="first-list">
                        <li>
                            <a href="pagesec.php">Mon Centre</a>
                        </li>
                        <li class="active">
                            <a href="edits.php" class="dark">Mes informations</a>
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
                            <a href="pagesec.php" class="dark">notif</a>
                        </li>
                        <li>
                            <a href="connexions.php" class="dark">Déconnexion</a>
                        </li>
                    </ul>


                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
            </div>
    </nav>








    <form action="confirm-edits.php" method="POST">
    <div class="information" id="information">
                        <div class="titre-container">
                            <h3>Je modifie mes informations</h3>
                            <?php
                            if($_SESSION['champ-empty'] == 'ok'){
                                echo '<h4 class="red-titre"> Tous les champs (*) doivent être remplis </h4>';
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
                                        <input type="text" name="nom" id="" placeholder="Nom (*)" value= "<?php echo $secretaire["noms"]; ?>">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-prenom'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="prenom" id="" placeholder="Prénom (*)" value="<?php echo $secretaire["prenoms"]; ?>">
                                    </div>
                                </div>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="adresse" id="" placeholder="Adresse (facultatif)" value = "<?php echo $secretaire["adresses"]; ?>">
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
                                        <input type="email" name="email" id="" placeholder="Email (*)" value = "<?php echo $secretaire["mail"]; ?>">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-tele'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="tel" name="tele" id="" placeholder="Téléphone Mobile (*)" value = "<?php echo $secretaire["numtel"]; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="info-profil-container info-con">
                                <h4> Informations Profil </h4>
                                <?php
                                if($_SESSION['mdp-no-same'] == 'ok'){
                                    echo '<h4 class="red"> Les deux champs doivent être identiques </h4>';
                                }
                                ?>
                                <div class="deux-inputs Informations Profil">
                                    <div class="input-con">
                                        <input type="password" name="mdp" id="" placeholder="Nouveau mot de passe (facultatif)">
                                </div>
                                    <div class="input-con">
                                        <input type="password" name="mdps" id="" placeholder="Confirmer le mot de passe">
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




               
</body>

</html>

<?php

$_SESSION['mdp-no-same'] = 'no';
$_SESSION['champ-empty'] = 'no';
$_SESSION['empty-nom'] = 'no';
$_SESSION['empty-prenom'] = 'no';
$_SESSION['empty-email'] = 'no';
$_SESSION['empty-tele'] = 'no';

?>