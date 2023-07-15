<div class="container-medcins" id="medecins">

    <div class="ajouter-container">
        <h2>Medecins: tous les Medecins (<?php echo $nbmt; ?>)</h2>
        <div class="ajouter" onclick="img(4)"><font>Ajouter Medecin</font></div>            
    </div>

    <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "annule") == true) {
                    echo "<p class='red textc' style='color : green;'>medcin supprimer</p>";
                }
                elseif(strpos($fullUrl, "ajoute") == true){
                    echo "<p class='red textc' style='color : green;'>medcin bien ajouter</p>";
                }
    ?>



    <?php 
        $i=0;
        echo '
        <table class="table-medecin">
        <tr class="table-top">
            <td></td>
            <td>
                <div>
                    <span>nom et prenome</span>
                </div>
            </td>
            <td>
                <div>
                    <span>rendez-vous des jour</span>
                </div>
            </td>
            <td></td>
        </tr>
        ';
        while ($tuple = $tabmedecin->fetch()) {
            $i++;
            echo '
            <tr>
                <td>
                    <div class="container-img">
                        <div class="content-img">
                            '.$i.'
                        </div>
                    </div>
                </td>
                <td>
                    <div class="medcin-infos">
                        <p class="np">'.$tuple["nomM"].' '.$tuple["prenomM"].'</p>
                    </div>
                </td>
                <td>
                        <div>
                            <div class="info-rdv">
                                il ya ';
                                $resultd = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where medecin.idm = '".$tuple["idm"]."' AND centre.ids = '".$_SESSION["id"]."' AND rdv.jour = '".$d."' ");
                                $nbrd = $resultd->fetchColumn(0); //column 1 


                                echo $nbrd.' rendez-vous aujourd'."'".'huit
                            </div>
                        </div>
                </td>
                <td>
                <div class="right">

                        <form action = "detailmrd.php" name = "formMdetail" method="POST">
                        <input type="text" name="idm" value = "'.$tuple["idm"].'" style="display: none;">
                        <button class="btn detail">detail</button>
                        </form>

                        <form action = "traitement_editer_medecin.php" method="POST">
                        <input type="text" name="idm" value = "'.$tuple["idm"].'" style="display: none;">
                        <button class="btn editer">éditer</button>
                        </form>';


                        echo'
                        <form onsubmit = "requiredConfirmem(this)">
                        <input type="text" name="idm" value = "'.$tuple["idm"].'" style="display: none;">
                        <button class="btn effacer">effacer</button>
                        </form>';
                        echo'
                </td>
            </tr>
            ';
        }
        echo '</table>';
    ?>
    </div>
