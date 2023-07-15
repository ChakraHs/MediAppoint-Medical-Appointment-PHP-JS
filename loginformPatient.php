<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

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
                    <li class="active">
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
                        <a href="connexions.php">Espace Administratif</a>
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



    <div class="ttl">
        <div class="container">
            <div class="login-content">

            

                <form action="traitconnexionpat.php" method="POST">
                    <img src="img/avatar.svg">
                    <h2 class="title">Bienvenue</h2>



                    <?php 
                $fullUrl = "http//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($fullUrl, "incorrect") == true) {
                    echo "<p class='red'>Email ou mot de passe invalide</p>";
                }
                ?>

                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Email</h5>
                            <input type="email" class="input" name="mail">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Mot de pass</h5>
                            <input type="password" class="input" name="mdp">
                        </div>
                    </div>
                    <a href="#">Mot de pass oublier?</a>
                    <input type="submit" class="btn" value="CONNEXION">
                </form>
            </div>

            <div class="img">
                <img src="img/doctor.png">
            </div>
            
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/search.js"></script>
</body>

</html>