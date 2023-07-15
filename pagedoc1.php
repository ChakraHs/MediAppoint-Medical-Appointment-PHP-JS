<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page Administrateur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/pagedoc.css">
</head>

<body>

    <?php 
    /*
    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(patient.idp = rdv.idp) WHERE rdv.jour = CURDATE() AND idm = '".$_SESSION["id"]."'");
    */
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
                            <a href="pagecentrem.php" class="dark">Ma Liste Medecins</a>
                        </li>
                        <li>
                            <a href="pagedoc.php" class="dark active">Mes Medcins Rendez-vous</a>
                        </li>
                        <li>
                            <a href="edits.php" class="dark">DR. <?php echo $_SESSION["nom"]." ".$_SESSION["prenom"] ?></a>
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

    <div class="grid">
        <div class="text marg">
            <h2>Bienvenue, Dr. <?php echo $_SESSION["nom"]." ".$_SESSION["prenom"] ?></h2>

            <h3>Activité du jour (vos Rendez-vous) :</h3>
            <div class="sec-grid">

                <?php 
                /*
                while ($tuple = $tabmedecin->fetch()) {
                    echo '<div class="card">
                    <div class="flex infos">
                    <p class="bold">Nom patient :</p>
                    <p class="light">'.$tuple["nom"].'</p>
                    </div>
                    <div class="flex infos">
                    <p class="bold">Heure :</p>
                    <p class="light">'.$tuple["heure"].'h</p>
                    </div>
                    
                    </div>';
                }
                */
                ?>   

            </div>
        </div>

    </div>

</body>

</html>