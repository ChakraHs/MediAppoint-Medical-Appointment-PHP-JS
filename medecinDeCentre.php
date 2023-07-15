<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="css/medCentrel.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>


    <?php 
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin LEFT JOIN centre on(medecin.idc = centre.idc) where centre.idc = '".$_POST["id"]."' ");
    ?>




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
                    <li>
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
                            '
                            </h5>
                            <p>
                            </p>
                        </div>
                        <div class="prendre-rdv-lien">
                                <form action="traitement prendre rendez-vousNiCentre.php" method="POST">
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
                            $tupleb = $centrenom->fetch();
                            echo'
                            </h5>
                            <p>
                            </p>
                        </div>
                        <div class="prendre-rdv-lien">
                            <form action="traitement prendre rendez-vousNiCentre.php" method="POST">
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
    
</body>
</html>