<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="medl.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    






<?php 

    $type = $_SESSION["type"];
    $specialite = $_SESSION["specialite"];

    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin where specialite = '".$specialite."' ");
    $tabcentre = $bdd->query("SELECT * FROM centre left join medecin on(medecin.idc = centre.idc)");

    $result = $bdd->query("SELECT count(*) FROM medecin where specialite = '".$specialite."' ");
    $nbm = $result->fetchColumn(0); //column 1 

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
                        <li class="active">
                            <a href="pagepat.php">Mon espace</a>
                        </li>
                        <li>
                            <a href="/<!in review hhh-->/edits.php" class="dark"><?php echo $_SESSION["username"]; ?></a>
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
                            <a href="pagepat.php" class="dark">notif</a>
                        </li>
                        <li>
                            <a href="loginformPatient.php" class="dark">Déconnexion</a>
                        </li>
                    </ul>


                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
            </div>
    </nav>


    <?php
    if($nbm == 0){
        echo '<div class="videRdv"> 
        <h2>il n\'existe aucun medcin dans la spésialité '.$specialite.' maintenant<h2>
        <button> <a href="pagepat.php">Retour à l\'accueil</a></button>
        </div>';
    }
    ?>


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
                            '<h5><font style=" color: blue;">Centre: </font>'.$tupleb["nomc"].'
                                </h5>
                                <h5> <font style=" color: blue;">Ville: </font>'.$tupleb["ville"].'</h5>
                            <p>
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
                            $tupleb = $centrenom->fetch();
                                echo
                                '<h5><font style=" color: blue;">Centre: </font>'.$tupleb["nomc"].'
                                </h5>
                                <h5> <font style=" color: blue;">Ville: </font>'.$tupleb["ville"].'</h5>
                            </h5>
                            <p>
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

<script src="js/search.js"></script>
</body>
</html>