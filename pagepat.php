<?php 
session_start();


if(!isset($_SESSION['prRdv'])) $_SESSION['prRdv'] = 0;

if(!isset($_SESSION['form-d'])) $_SESSION['form-d'] = 'none';
if(!isset($_SESSION['rad-d'])) $_SESSION['rad-d'] = 'none';
if(!isset($_SESSION['empty-d'])) $_SESSION['empty-d'] = 'no';

if(!isset($_SESSION['form-a'])) $_SESSION['form-a'] = 'none';
if(!isset($_SESSION['rad-a'])) $_SESSION['rad-a'] = 'none';
if(!isset($_SESSION['empty-a'])) $_SESSION['empty-a'] = 'no';


if(!isset($_SESSION['form-c'])) $_SESSION['form-c'] = 'none';
if(!isset($_SESSION['rad-c'])) $_SESSION['rad-c'] = 'none';
if(!isset($_SESSION['empty-c'])) $_SESSION['empty-c'] = 'no';

if(!isset($_SESSION["modifierRdv"])) $_SESSION["modifierRdv"] = 0;
if(!isset($_SESSION["idm"])) $_SESSION["idm"] = "";

if(!isset($_SESSION['succes'])) $_SESSION['succes'] = 0;


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


    <link rel="stylesheet" href="medl.css">
    <link rel="stylesheet" href="css/pagepat.css">






    <script>


        var rdvmo = <?php echo$_SESSION["modifierRdv"];?>;
        var detform = <?php echo$_SESSION['prRdv'];?>;
        var succes = <?php echo$_SESSION['succes'];?>;

        function onloadpagepat(){

        if(succes == 1){
            alert("Rendez-vous bien enregistrer");
        }

        if(rdvmo == 1){
                document.getElementById('rdvTime').style.display = 'flex';

                document.getElementById('form').style.display = 'none';
                document.getElementById('home').style.display = 'none';
                document.getElementById('rdv').style.display = 'none';

                document.getElementById('1').style.background='transparent';
                document.getElementById('2').style.background='transparent';
                document.getElementById('3').style.background='transparent';
        }else if(rdvmo == -1){
            alert("Impossible de modifier ce rendez-vous parce que tu passe 48h aprés le prendre");
        }
        else if(detform == 1){
                document.getElementById('form').style.display = 'flex';
                document.getElementById('home').style.display = 'none';
                document.getElementById('rdv').style.display = 'none';
                document.getElementById('rdvTime').style.display = 'none';

                document.getElementById('1').style.background='transparent';
                document.getElementById('2').style.background='#F4FAFE';
                document.getElementById('3').style.background='transparent';
        }

        else if(detform == 0){
                document.getElementById('home').style.display = 'flex';
                document.getElementById('form').style.display = 'none';
                document.getElementById('rdv').style.display = 'none';

                document.getElementById('1').style.background='#F4FAFE';
                document.getElementById('2').style.background='transparent';
                document.getElementById('3').style.background='transparent';
                document.getElementById('rdvTime').style.display = 'none';

        }

        }




        function imgscl(x) {
            if (x == 1) {
                document.getElementById('home').style.display = 'flex';
                document.getElementById('form').style.display = 'none';
                document.getElementById('rdv').style.display = 'none';
                document.getElementById('rdvTime').style.display = 'none';

                document.getElementById('1').style.background='#F4FAFE';
                document.getElementById('2').style.background='transparent';
                document.getElementById('3').style.background='transparent';

            } else if (x == 2) {
                document.getElementById('form').style.display = 'flex';
                document.getElementById('home').style.display = 'none';
                document.getElementById('rdv').style.display = 'none';
                document.getElementById('rdvTime').style.display = 'none';

                document.getElementById('1').style.background='transparent';
                document.getElementById('2').style.background='#F4FAFE';
                document.getElementById('3').style.background='transparent';



            } else if (x == 3) {
                document.getElementById('rdv').style.display = 'flex';
                document.getElementById('home').style.display = 'none';
                document.getElementById('form').style.display = 'none';
                document.getElementById('rdvTime').style.display = 'none';


                document.getElementById('1').style.background='transparent';
                document.getElementById('2').style.background='transparent';
                document.getElementById('3').style.background='#F4FAFE';


            }
            return;
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




        var s = 0;
        function suivTime() {
            var i = 10;
            while (i<17){
                var idn = i+s;
                var idf= idn+7;
                document.getElementById(idn).style.display = 'none';
                document.getElementById(idf).style.display = 'flex';
                document.getElementById('prec2').style.display = 'flex';
                i++;
            }
            s+=7;
            if(s==21){
                document.getElementById('suiv2').style.display = 'none';
            }
        }
        function precTime() {
            var i = 10;
            while (i<17){
                var idn = i+s;
                var idf= idn-7;
                document.getElementById(idn).style.display = 'none';
                document.getElementById(idf).style.display = 'flex';
                document.getElementById('suiv2').style.display = 'flex';
                i++;
            }
            s-=7;
            if(s==0){
                document.getElementById('prec2').style.display = 'none';
            }
        }


    </script>

</head>
<body onload = "onloadpagepat()">

    <?php 

    $d=(int)date("d");

    require("connexion.php");
    $tabmedecin = $bdd->query("SELECT * FROM medecin");
    $tabcentre = $bdd->query("SELECT * FROM centre left join medecin on(medecin.idc = centre.idc)");

    $tabrdvt = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where patient.idp = '".$_SESSION["id"]."' ");

    $tabrdvj = $bdd->query("SELECT * FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where rdv.jour = '".$d."' AND patient.idp = '".$_SESSION["id"]."' ");


    $resultt = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where patient.idp = '".$_SESSION["id"]."' ");
    $nbrt = $resultt->fetchColumn(0); //column 1 


    $resultj = $bdd->query("SELECT count(*) FROM rdv LEFT JOIN patient ON(rdv.idp = patient.idp) LEFT JOIN medecin ON(medecin.idm = rdv.idm)LEFT JOIN centre ON(centre.idc = medecin.idc) where rdv.jour = '".$d."' AND patient.idp = '".$_SESSION["id"]."' ");
    $nbrj = $resultj->fetchColumn(0); //column 1 


    ?>





    <?php
    include("pagepat/nav.php");
    include("pagepat/navbar_bottom.php");
    ?>
    


    <div class="cotent-right">
    <?php
    include("pagepat/rdv_jour.php");
    ?>
    <div class="form-container" id="form">
    <?php
    include("pagepat/type_consultation_page_pat.php");
    include("pagepat/medecins.php");
    include("pagepat/rdv_tout.php");
    include("pagepat/modifier_time_rdv.php");
    ?>
    </div> 
    </div>

    <script src="js/img(x).js"></script>
    <script src="js/non-empty.js"></script>
</body>
</html>




<?php

$_SESSION['prRdv'] = 0;


$_SESSION['form-d'] = 'none';
$_SESSION['rad-d'] = '';
$_SESSION['empty-d'] = 'no';

$_SESSION['form-a'] = 'none';
$_SESSION['rad-a'] = '';
$_SESSION['empty-a'] = 'no';

$_SESSION['form-c'] = 'none';
$_SESSION['rad-c'] = '';
$_SESSION['empty-c'] = 'no';


$_SESSION["modifierRdv"] = 0;


$_SESSION['succes'] = 0;

?>