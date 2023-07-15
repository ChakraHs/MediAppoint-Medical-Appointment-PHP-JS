<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscriptionM.css">
    <title>Inscription Médecin</title>
</head>

<body>


    <div class="layout">
        <header>
            <a href="index.php" class="logo">MediCalendar</a>
        </header>
        <section class="inscription flex">
            <div class="section-inscription">
                <h2 class="title">Inscription Médecin</h2>
                <section class="infos-perso">
                    <h3 class="sous-title">Informations Personnelles</h3>

                    <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "empty") == true) {
                            echo "<p class='red'>Veuillez remplir les champs : Nom, Prenom, Numero d'ordre, Date de naissance, Spécialité, email et mot de passe </p>";
                        }
                        ?>

                    <form action="traitinscrimed.php" method="POST">
                        <span id="validnom"></span>
                        <div class="input">
                            <label for="nom">Nom : </label>

                            <input type="text" class="nom inp" id="nom" name="nom">
                        </div>


                        <span id="validprenom"></span>
                        <div class="input">
                            <label for="prenom">Prenom : </label>
                            <input type="text" class="prenom inp" id="prenom" name="prenom">

                        </div>

                        <div class="input">
                            <label for="dn">Date de naissance : </label>
                            <input type="date" class="dn inp" id="dn" name="dn">
                        </div>

                </section>

                <section class="infos-pro">
                    <h3 class="sous-title">Informations Personnelles</h3>

                    <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "idexiste") == true) {
                            echo "<p class='red'>Ce numero d'ordre existe deja</p>";
                        }
                        ?>

                    <span id="spno"></span>
                    <div class="input">
                        <label for="numordre">Numéro d'ordre des médecins : </label>
                        <input type="text" class="numordre inp" id="numordre" name="numordre">
                    </div>

                    <div class="input">
                        <label for="special">Spécialité : </label>
                        <input type="text" class="special inp" id="special" name="special">
                    </div>

                    <div class="input">
                        <label for="adr">Adresse du cabinet médical :</label>
                        <input type="text" class="adr inp" id="adr" name="adr">
                    </div>

                    <div class="input">
                        <label for="numtel">Numéro de téléphone :</label>
                        <input type="text" class="numtel inp" id="numtel" name="numtel">
                    </div>

                    <div class="input">
                        <label for="horr">Horaires d'ouverture (XXh-XXh) :</label>
                        <input type="text" class="horr inp" id="horr" name="horr">
                    </div>

                </section>

                <section class="infos-profil">
                    <h3 class="sous-title">Informations Profil</h3>

                    <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "mailexiste") == true) {
                            echo "<p class='red'>Cet email existe deja</p>";
                        }
                        ?>

                    <span id="validmail"></span>
                    <div class="input">
                        <label for="mail">Adresse mail : </label>
                        <input type="email" class="mail inp" id="mail" name="mail">

                    </div>

                    <?php 
                        $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "mdp") == true) {
                            echo "<p class='red'>mot de passe non confirmé</p>";
                        }
                        ?>

                    <div class="input">
                        <label for="mdp">Mot de passe : </label>
                        <input type="password" class="mdp inp" id="mdp" name="mdp">

                    </div>

                    <div class="input">
                        <label for="cmdp">Confirmer MDP </label>
                        <input type="password" class="cmdp inp" id="cmdp" name="cmdp">
                    </div>

                    <div class="marg">
                        <input type="submit" name="submit" class="submit btn" value="Valider">

                    </div>
                    </form>

                    <div class="section-identif flex">
                        <p>Vous êtes un Patient ? </p>
                        <a href="inscriptionP.php" class="iden"> Inscrivez-vous !</a>
                    </div>

                    <div class="section-inscriptionM">
                        <p class="blue">Vous avez déja un compte?<a href="connexionM.php" class="iden">Connectez vous
                        !</a></p>
                    </div>
                </section>
            </div>

        </section>

        <div class="imageM"></div>
    </div>

</body>

<script type="text/javascript" src="app/js/inscrivalid.js"></script>

</html>