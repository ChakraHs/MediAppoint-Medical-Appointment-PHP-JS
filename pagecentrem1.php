<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ma centre</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="css/pagedoc.css">


</head>

<body class="bod">

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
                    <ul>
                        <li>
                            <a href="pagecentrem.php" class="active">Ma Liste Medecins</a>
                        </li>
                        <li>
                            <a href="pagedoc.php" class="dark">Mes Medcins Rendez-vous</a>
                        </li>
                        <li>
                            <a href="editm.php" class="dark">DR. <?php echo $_SESSION["nom"]." ".$_SESSION["prenom"] ?></a>
                        </li>
                        <li>
                            <a href="connexionM.php" class="dark">Déconnexion</a>
                        </li>
                    </ul>
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
            </div>
    </nav>

        <div class="text marg">
            <h3>Vos centre medcins :</h3>
            <div class="sec-grid">
                <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "annule") == true) {
                    echo "<p class='red textc' style='color : green;'>medcin supprimer</p>";
                }
                elseif(strpos($fullUrl, "ajoute") == true){
                    echo "<p class='red textc' style='color : green;'>medcin bien ajouter</p>";
                }?>

                <?php 
                while ($tuple = $tabmedecin->fetch()) {
                    echo '
                    <div class="card">
                    <div class="left">
                        <div class="flex infos">
                            <p class="bold">Nom medcin :</p>
                            <p class="light">'.$tuple["nomM"].$tuple["prenomM"].'</p>
                        </div>
                    </div>
                    <div class="right">
                        <form action="annulerm.php" method="POST">
                            <input type="text" name="idrdv" class="idrdvt" style="display: none;">
                            <input type="submit" name="" value="detail" class="btn annuler">
                            
                        </form>
                    </div>
                </div>
                    ';
                }
                ?>

            </div>
        </div>

    </div>


</body>

<script type="text/javascript" src="app/js/annuler.js"></script>

</html>