<div class="detail-block" id="detail">
    <?php
        
        if($_SESSION["detail"]== 1){

            $tabrdvtd = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where medecin.idm = '".$_SESSION["idm"]."' AND centre.ids = '".$_SESSION["id"]."' ");

            $resultd = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where medecin.idm = '".$_SESSION["idm"]."' AND centre.ids = '".$_SESSION["id"]."' ");
            $nbrd = $resultd->fetchColumn(0); //column 1




        echo '<div class="medcin-list">
        <div class="troix-card-medecin">
            <div class="un-medecin-card">
                <div class="card-container">
                <div class="card-medecin-header">
                    <div class="img-medecin"></div>
                    <div class="info-general">
                        <h4>'.$_SESSION["nomM"].' '.$_SESSION["prenomM"].'</h4>
                        <h5>'.$_SESSION["specialite"].'</h5>
                    </div>
                </div>
            </div>
            </div>    
        </div>
        </div>';

        echo '<h1> les rendez-vous ( '.$nbrd.' )</h1>';

        while ($tuple = $tabrdvtd->fetch()) {
            echo '

            <div class="card-rdv-d">
            <div class="card-rdv-info-left">
            <div class="patient info-rdv">Patient : '.$tuple["nom"].' '.$tuple["prenom"].'</div>
            </div>
            <div class="card-rdv-date-info-centre">
            <div class="date-rdv">Le '.$tuple["jour"].'/'.$tuple["mois"].'</div>
            <div class="heure-rdv">à l\'heure : '.$tuple["heure"].'h</div>
            </div>
            <div class="card-rdv-info-right">
            <form onsubmit="requiredConfirmRdv(this)">
            <input type="text" name="idrdv" value = "'.$tuple["idr"].'" style="display: none;">
            <button class="annuler-rdv-btn-d">
                <span>
                    Annuler
                </span>
            </button>
            </form>
            </div>
            </div>';
        }
        }
    ?>
    </div>