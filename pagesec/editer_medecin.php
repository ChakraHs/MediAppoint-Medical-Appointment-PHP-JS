<?php 


if(!isset($_SESSION['champ-empty'])) $_SESSION['champ-empty'] = 'no';
if(!isset($_SESSION['empty-nom'])) $_SESSION['empty-nom'] = 'no';
if(!isset($_SESSION['empty-prenom'])) $_SESSION['empty-prenom'] = 'no';
if(!isset($_SESSION['empty-email'])) $_SESSION['empty-email'] = 'no';
if(!isset($_SESSION['empty-tele'])) $_SESSION['empty-tele'] = 'no';
if(!isset($_SESSION['empty-numordre'])) $_SESSION['empty-numordre'] = 'no';
if(!isset($_SESSION['empty-horaire'])) $_SESSION['empty-horaire'] = 'no';
if(!isset($_SESSION['empty-specialite'])) $_SESSION['empty-specialite'] = 'no';

?>



<div class="editer-block" id="editer" style="display:none;">
    <?php

            require("connexion.php");

            $tabmed = $bdd->query("SELECT * FROM medecin where idm = '".$_SESSION["idm"]."' ");
            $medecin = $tabmed->fetch();

            //$resultd = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where medecin.idm = '".$_SESSION["idm"]."' AND centre.ids = '".$_SESSION["id"]."' ");
            //$nbrd = $resultd->fetchColumn(0); //column 1

            echo'
            <form action="confirmer_editer_medecin.php" method="POST">
                        <div class="information" id="information">
                            <div class="titre-container">
                                <h3>Je modifie mes medecins informations</h3>
            ';

            if($_SESSION['champ-empty'] == 'ok'){
                echo '<h4 class="red-titre"> Tous les champs (*) doivent être remplis </h4>';
            }
            echo '
            </div>
                        <div class="information-container">
                            <div class="info-person-container info-con">
                                <h4>Informations Personnelles</h4>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
            ';
            if($_SESSION['empty-nom'] == 'ok'){
                echo '<h4 class="red"> (*) </h4>';
            }
            echo'
            <input type="text" name="nom" id="" placeholder="Nom (*)" value= "'.$medecin["nomM"].'">
                                    </div>
                                    <div class="input-con">
            ';
            if($_SESSION['empty-prenom'] == 'ok'){
                echo '<h4 class="red"> (*) </h4>';
            }
            echo'
            <input type="text" name="prenom" id="" placeholder="Prénom (*)" value="'.$medecin["prenomM"].'">
                                    </div>
                                </div>




                                <div class="deux-inputs Informations-contact">
                                <div class="input-con">
        ';
        if($_SESSION['empty-numordre'] == 'ok'){
            echo '<h4 class="red"> (*) </h4>';
        }
        echo '
        <input type="text" name="numordre" id="" placeholder="Numero d\'ordre (*)" value = "'.$medecin["numordre"].'">
                                </div>
                                <div class="input-con">
        ';
        if($_SESSION['empty-horaire'] == 'ok'){
            echo '<h4 class="red"> (*) </h4>';
        }

        echo'
        <input type="text" name="horaire" id="" placeholder="Horaire (*)" value = "'.$medecin["horaire"].'">
                                </div>
                            </div>




                            ';
            if($_SESSION['empty-specialite'] == 'ok'){
                echo '<h4 class="red"> (*) </h4>';
            }
            echo '


                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="specialite" id="" placeholder="Specialite" value = "'.$medecin["specialite"].'">
                                    </div>
                                </div>







                            </div>


                            <div class="info-contact-container info-con">
                                <h4>Informations de contact</h4>
                                <div class="deux-inputs Informations-contact">
                                    <div class="input-con">
            ';
            if($_SESSION['empty-email'] == 'ok'){
                echo '<h4 class="red"> (*) </h4>';
            }
            echo '
            <input type="email" name="email" id="" placeholder="Email (*)" value = "'.$medecin["mail"].'">
                                    </div>
                                    <div class="input-con">
            ';
            if($_SESSION['empty-tele'] == 'ok'){
                echo '<h4 class="red"> (*) </h4>';
            }

            echo'
            <input type="tel" name="tele" id="" placeholder="Téléphone Mobile (*)" value = "'.$medecin["numtel"].'">
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
            ';





    ?>
    </div>
                         
                                

<?php

$_SESSION['champ-empty'] = 'no';
$_SESSION['empty-nom'] = 'no';
$_SESSION['empty-prenom'] = 'no';
$_SESSION['empty-email'] = 'no';
$_SESSION['empty-tele'] = 'no';
$_SESSION['empty-numordre'] = 'no';
$_SESSION['empty-horaire'] = 'no';
$_SESSION['empty-specialite'] = 'no';

?>