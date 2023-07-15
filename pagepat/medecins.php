<div class="container-medcins" id="medecins">

    <?php 
        $i=0;
        
        echo '<div class="medcin-list">';

        while ($tuple = $tabmedecin->fetch()) {
            if($i==0){
                echo'
                <div class="troix-card-medecin">
                    <div class="un-medecin-card">
                        <div class="card-container">
                            <div class="card-medecin-header">
                                <div class="img-medecin"></div>
                                    <div class="info-general">
                                        <h4>'.$tuple["nomM"].' '.$tuple["prenomM"].'</h4>
                                        <h5>'.$tuple["specialite"].'</h5>
                                    </div>
                            </div>
                            <div class="card-medecin-infos">
                                <h5>';
                                $centrenom = $bdd->query("SELECT * FROM centre where idc='".$tuple["idc"]."' ");
                                $tupleb = $centrenom->fetch();
                                echo
                                $tupleb["nomc"].' '.$tupleb["ville"].'
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. harum atque asperiores maxime quibusdam!
                                </p>
                            </div>
                            <div class="prendre-rdv-lien">
                                    <form action="traitement prendre rendez-vous.php" method="POST">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 14">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                        <input class="none" type="text" name="id" value="'.$tuple["idm"].'">
                                        <input type="submit" value="prendre rendez-vous">
                                    </h4>
                                    </form>
                            </div>
                        </div>
                    </div>
                ';
                $i++;
            }
            else{     
                echo '
                    <div class="un-medecin-card">
                        <div class="card-container">
                            <div class="card-medecin-header">
                                <div class="img-medecin"></div>
                                    <div class="info-general">
                                        <h4>'.$tuple["nomM"].' '.$tuple["prenomM"].'</h4>
                                        <h5>'.$tuple["specialite"].'</h5>
                                    </div>
                            </div>
                            <div class="card-medecin-infos">
                                <h5>';
                                $centrenom = $bdd->query("SELECT * FROM centre where idc='".$tuple["idc"]."' ");
                                if($tupleb = $centrenom->fetch()){
                                    echo
                                        $tupleb["nomc"].' '.$tupleb["ville"];
                                }
                                echo'
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. harum atque asperiores maxime quibusdam!
                                </p>
                            </div>
                            <div class="prendre-rdv-lien">
                                <form action="traitement prendre rendez-vous.php" method="POST">
                                <h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 14">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg>
                                    <input class="none" type="text" name="id" value="'.$tuple["idm"].'">
                                    <input type="submit" value="prendre rendez-vous">
                                </h4>
                                </form>
                            </div>
                        </div>
                    </div>
            ';
            $i++;

                if($i==3){
                    echo '</div>';
                    $i=0;
                }
            }
            
        }
        echo '
        </div>
        </div>
        
        ';
    ?>
    </div>