<?php 
session_start();



if(!isset($_SESSION['inscri'])) $_SESSION['inscri'] = 0;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/connex.css">
    <link href="css/navbar.css" rel="stylesheet">
    <title> Espace Administratif</title>


    <script>
        var ins = <?php echo$_SESSION['inscri'];?>;
        function notinsc() {
            if(ins == 1){
                alert("Félicitations, votre compte a été bien créé avec succès, essayez de vous connecter maintenant");
            }
        }
    </script>
</head>
<body onload = "notinsc()">
    

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
                        <a href="nosCentre.php">Nos Centres Hospitaliers</a>
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
                    <li class="active">
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


    <div class="layout ">
        <section class="connexion">
            <div class="section-connect">
                <h2>Cellule informatique du centre hospitalier administrateur</h2>
                <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "incorrect") == true) {
                    echo "<p class='red'>Email ou mot de passe invalide</p>";
                }
                if (strpos($fullUrl, "verif") == true) {
                    echo "<p class='red'>votre dossier est en cours de verification, vous pourrez vous connecter une fois que votre dossier verifié par un administrateur</p>";
                }
                 ?>
                <form action="traitconnexionsec.php" method="POST">
                    <input type="text" id="mail" class="nom-util inp" placeholder="E-mail" name="mail">
                    <span id="validationmail"></span>
                    <input type="password" id="mdp" class="mdp inp" placeholder="Mot de passe" name="mdp">
                    <span id="yeux">
                        <i id="oeil" class="fa fa-eye" aria-hidden="true"></i>
                        <i id="oeils" class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                    <input type="submit" value="Se connecter" class="btn connect">
                </form>
            </div>

            <div class="section-identif">
                <p>Vous N'avez Pas Un Compte? <a href="inscriptionS.php" class="iden">Créez un compte !</a></p>
                
            </div>
            
        </section>

        <div class="image">
            <img src="img/connexion.svg" alt="">
        </div>
    </div>
  


<script src="js/search.js"></script>
</body>
</html>

<?php
$_SESSION['inscri'] = 0;
?>