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


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/pagecentrem.css">
    <link rel="stylesheet" href="css/editerm.css">



    <?php 


    if(!isset($_SESSION["detail"])) $_SESSION["detail"] = 0;
    if(!isset($_SESSION["editer"])) $_SESSION["editer"] = 0;
    if(!isset($_SESSION['supm'])) $_SESSION["supm"] = 0;
    if(!isset($_SESSION['editerm'])) $_SESSION["editerm"] = 0;
    if(!isset($_SESSION['ajouterm'])) $_SESSION["ajouterm"] = 0;
    if(!isset($_SESSION['ajouterms'])) $_SESSION["ajouterms"] = 0;

    ?>




    <script>
        var det = <?php echo$_SESSION["detail"];?>;
        var supm = <?php echo$_SESSION["supm"];?>;
        var editerm = <?php echo$_SESSION["editer"];?>;
        var editerms = <?php echo$_SESSION["editerm"];?>;
        var ajouterm = <?php echo$_SESSION["ajouterm"];?>;
        var ajouterms = <?php echo$_SESSION["ajouterms"];?>;

        function onloadpagesec(){
        if(supm == 1){
            alert("médecin a été effacé");
        }

        if(editerms == 1){
            alert("médecin modifier avec succes");
        }

        if(ajouterms == 1){
            alert("médecin ajouter avec succes");
        }

        if(editerm == 1){
            document.getElementById('editer').style.display = 'flex';
        }
        if(det == 1){
            document.getElementById('detail').style.display = 'flex';

        }
        if(ajouterm == 1){
            document.getElementById('ajouter').style.display = 'flex';

        }
        if(det==0 && editerm==0 && ajouterm == 0){
            document.getElementById('home').style.display = 'flex';

            document.getElementById('1').style.background='#42454c';

            document.getElementById('b1').style.color='white';
        }

        }






        function changeClass(x,y){
            document.getElementById(this).classList.remove("x");
            document.getElementById(this).classList.add("y");
        }


        document.addEventListener("click", (evt) => {
        const flyoutEl = document.getElementById("box1");
        let targetEl = evt.target; // clicked element      
        do {
          if(targetEl == flyoutEl) {
            // This is a click inside, does nothing, just return.
            document.getElementById("box1").classList.remove("box");
            document.getElementById("box1").classList.add("box-after-click");
            return;
          }
          // Go up the DOM
          targetEl = targetEl.parentNode;
        } while (targetEl);
        // This is a click outside.      
        document.getElementById("box1").classList.add("box");
        document.getElementById("box1").classList.remove("box-after-click");
        });
    </script>

</head>
<body onload="onloadpagesec()">

    <?php 

    $d=(int)date("d");

    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin LEFT JOIN centre ON(centre.idc = medecin.idc) LEFT JOIN secretaire ON(secretaire.ids = centre.ids) where centre.ids = '".$_SESSION["id"]."' ");

    $tabrdvj = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where rdv.jour = '".$d."' AND centre.ids = '".$_SESSION["id"]."' ");

    $tabrdvt = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where centre.ids = '".$_SESSION["id"]."' ");




    $resultj = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where rdv.jour = '".$d."' AND centre.ids = '".$_SESSION["id"]."' ");
    $nbrj = $resultj->fetchColumn(0); //column 1 



    $resultt = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where centre.ids = '".$_SESSION["id"]."' ");
    $nbrt = $resultt->fetchColumn(0); //column 1 




    $resultm = $bdd->query("SELECT count(*) FROM medecin LEFT JOIN centre ON(centre.idc = medecin.idc) LEFT JOIN secretaire ON(secretaire.ids = centre.ids) where centre.ids = '".$_SESSION["id"]."' ");
    $nbmt = $resultm->fetchColumn(0); //column 1 

    ?>

    
    <?php
    include ("pagesec/nav.php");
    ?>


    <div class="content-hero">
    <?php
    include ("pagesec/nav_left.php");
    ?>
    <div class="cotent-right">
    <?php
    include ("pagesec/home.php");
    include ("pagesec/medecins.php");
    include ("pagesec/ajouter_medecin.php");
    include ("pagesec/detail.php");
    include ("pagesec/editer_medecin.php");
    include ("pagesec/rdv_tout.php");
    ?>
    </div>
    </div>

<script src="js/imgxclick.js"></script>
<script src="js/med-de-sec-btn-fcn.js"></script> 
<script src="js/annulerRdvConfirm.js"></script>
</body>
</html>

<?php
$_SESSION["detail"]= 0;
$_SESSION["supm"] = 0;
$_SESSION["editer"] = 0;
$_SESSION["editerm"] = 0;
$_SESSION["ajouterm"] = 0;
$_SESSION["ajouterms"] = 0;

?>