<div class="content-home" id="home">
                <div class="header-rdv-container">
                    <h2>Rendez-vous : rendez-vous du jour (<?php echo $nbrj; ?>)</h2>           
                </div>
            <?php
                while ($tuple = $tabrdvj->fetch()) {
                    echo '
                    <div class="card-rdv">
                    <div class="card-rdv-info-left">
                    <div class="medecin info-rdv">Medecin : '.$tuple["nomM"].' '.$tuple["prenomM"].'</div>
                    <div class="patient info-rdv">Patient : '.$tuple["nom"].' '.$tuple["prenom"].'</div>
                    </div>
                    <div class="card-rdv-date-info-centre">
                    <div class="date-rdv">Le '.$tuple["jour"].'/'.$tuple["mois"].'</div>
                    <div class="heure-rdv">à l\'heure : '.$tuple["heure"].'h</div>
                    <div class="heure-rdv">de type : '.$tuple["typeder"].'</div>
                    </div>
                    <div class="card-rdv-info-right">
                    <form onsubmit="requiredConfirmRdv(this)">
                    <input type="text" name="idrdv" value = "'.$tuple["idr"].'" style="display: none;">
                    <button class="annuler-rdv-btn">
                        <span>
                            Annuler
                        </span>
                    </button>
                    </form>
                    </div>
                    </div>';
                }
            ?>
            <div class="voir-trdv-btn" onclick="img(3)">
                    <button>
                        <span>
                            voir tous les rendez-vous
                        </span>
                    </button>
            </div>
        </div>