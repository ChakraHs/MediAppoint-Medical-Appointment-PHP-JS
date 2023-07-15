<div class="content-rdv" id="rdv">
                <div class="header-rdv-container">
                    <h2>Rendez-vous : tous les rendez-vous (<?php echo $nbrt; ?>)</h2>           
                </div>
            <?php
                while ($tuple = $tabrdvt->fetch()) {
                    echo '

                    <div class="card-rdv">
                    <div class="card-rdv-info-left">
                    <div class="patient info-rdv">Medecin : '.$tuple["nomM"].' '.$tuple["prenomM"].'</div>
                    <div class="medecin info-rdv">Type de consultation : '.$tuple["typeder"].'</div>
                    </div>
                    <div class="card-rdv-date-info-centre">
                    <div class="date-rdv">Le '.$tuple["jour"].'/'.$tuple["mois"].'</div>
                    <div class="heure-rdv">à l\'heure : '.$tuple["heure"].'h</div>
                    </div>
                    <div class="card-rdv-info-right">
                    <form action="modifierRdv.php" method = "POST">
                    <input type="text" name="idrdv" value = "'.$tuple["idr"].'" style="display: none;">
                    <button class="annuler-rdv-btn">
                        <span>
                            Modifier
                        </span>
                    </button>
                    </form>
                    </div>
                    </div>';
                }
            ?>
        </div>