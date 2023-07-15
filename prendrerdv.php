<?php 
session_start();


if(!isset($_SESSION['champ-empty-p'])) $_SESSION['champ-empty-p'] = 'no';
if(!isset($_SESSION['nbpi'])) $_SESSION['nbpi'] = 2;

require("connexion.php");

$centrenom = $bdd->query("SELECT * FROM centre  where centre.idc = '".$_SESSION["idc"]."' ");
$tupleb = $centrenom->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/rdv.css">
    <link rel="stylesheet" href="timeinput.css">
    <link rel="stylesheet" href="css/navbar.css">

    <title>Document</title>


    <script>
    var x=<?php echo$_SESSION['nbpi'];?>;
        function pagereload(){
            if(x == 2){
            document.getElementById('rdv2').classList.add("active");
            document.getElementById('horaire').style.display = 'flex';

        }
            if(x == 3){
            window.scroll(450, 450);
            document.getElementById('payement').style.display = 'flex';
            document.getElementById('rdv4').classList.add("active");
            document.getElementById('rdv2').classList.remove("active");
            document.getElementById('horaire').style.display = 'none';
            document.getElementById('btn3').style.display = 'flex';

        }
        return;
        }
    </script>


</head>
<body onload = "pagereload()">
    <?php
    include("nav_prendre_rdv.php");
    ?>
    <div class="container-all-info-rdv">
        <?php 
        include("prendre_rdv/medecin_prendre_rdv.php");
        ?>
        <div class="rdv-container">
            <div class="rdv-content">
                <div class="infos-rdv"></div>              
                <?php 
                include("prendre_rdv/liste_header_prendre_rdv.php");
                ?>
                <div class="inputs-container">
                    <form action="confirmer_rdv$payement_inscri.php" method="POST">
                        <?php
                        include("prendre_rdv/type_consultation.php");
                        include("prendre_rdv/horaire.php");
                        include("prendre_rdv/payement.php");
                        include("prendre_rdv/prec_suiv_prendre_rdv.php");
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/suivprectime.js"></script>
    <script src="js/suivPrecbBtnPrendreRdv.js"></script>
</body>
</html>

<?php 
$_SESSION['champ-empty-p'] = 'no';
$_SESSION['nbpi'] = 2;
?>