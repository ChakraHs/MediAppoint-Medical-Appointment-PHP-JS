<?php 
session_start();


if(!isset($_SESSION['champ-empty'])) $_SESSION['champ-empty'] = 'no';
if(!isset($_SESSION['mdp-no-same'])) $_SESSION['mdp-no-same'] = 'no';
if(!isset($_SESSION['empty-nom'])) $_SESSION['empty-nom'] = 'no';
if(!isset($_SESSION['empty-prenom'])) $_SESSION['empty-prenom'] = 'no';
if(!isset($_SESSION['empty-email'])) $_SESSION['empty-email'] = 'no';
if(!isset($_SESSION['empty-tele'])) $_SESSION['empty-tele'] = 'no';
if(!isset($_SESSION['username_empty'])) $_SESSION['username_empty'] = 'no';



require("connexion.php");
$tabpat = $bdd->query("SELECT * FROM patient where idp = '".$_SESSION["id"]."' ");
$patient = $tabpat->fetch();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer Compte</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/editer_patient.css">
</head>

<body>

    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin LEFT JOIN centre ON(centre.idc = medecin.idc) LEFT JOIN secretaire ON(secretaire.ids = centre.ids) where centre.ids = '".$_SESSION["id"]."' ");
    ?>



    <?php
    include("pagepat/nav_editer.php");
    ?>








    <form action="confirm_editer_patient.php" method="POST">
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
                                        <input type="text" name="nom" id="" placeholder="Nom (*)" value= "<?php echo $patient["nom"]; ?>">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-prenom'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="text" name="prenom" id="" placeholder="Prénom (*)" value="<?php echo $patient["prenom"]; ?>">
                                    </div>
                                </div>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="adresse" id="" placeholder="Adresse (facultatif)" value = "<?php echo $patient["adrss"]; ?>">
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
                                        <input type="email" name="email" id="" placeholder="Email (*)" value = "<?php echo $patient["mail"]; ?>">
                                    </div>
                                    <div class="input-con">
                                    <?php
                                        if($_SESSION['empty-tele'] == 'ok'){
                                            echo '<h4 class="red"> (*) </h4>';
                                        }
                                    ?>
                                        <input type="tel" name="tele" id="" placeholder="Téléphone Mobile (*)" value = "<?php echo $patient["numtelep"]; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="info-profil-container info-con">
                                <h4> Informations Profil </h4>
                                <?php
                                if($_SESSION['username_empty'] == 'ok'){
                                    echo '<h4 class="red"> (*) </h4>';
                                }
                                ?>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="username" id="" placeholder="username (*)" value = "<?php echo $patient["username"]; ?>">
                                    </div>
                                </div>
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
$_SESSION['username_empty'] = 'no';

?>