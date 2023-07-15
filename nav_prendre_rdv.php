<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>