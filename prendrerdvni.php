<?php 
session_start();


if(!isset($_SESSION['champ-empty'])) $_SESSION['champ-empty'] = 'no';
if(!isset($_SESSION['champ-empty-p'])) $_SESSION['champ-empty-d'] = 'no';
if(!isset($_SESSION['nbp'])) $_SESSION['nbp'] = 2;
if(!isset($_SESSION['type'])) $_SESSION['type'] = 1;

if(!isset($_SESSION['nom'])) $_SESSION['nom'] = "";
if(!isset($_SESSION['prenom'])) $_SESSION['prenom'] = "";
if(!isset($_SESSION['dn'])) $_SESSION['dn'] = "";
if(!isset($_SESSION['email'])) $_SESSION['email'] = "";
if(!isset($_SESSION['numtele'])) $_SESSION['numtele'] = "";
if(!isset($_SESSION['adresse'])) $_SESSION['adresse'] = "";
if(!isset($_SESSION['username'])) $_SESSION['username'] = "";
if(!isset($_SESSION['mdp'])) $_SESSION['mdp'] = "";
if(!isset($_SESSION['mdps'])) $_SESSION['mdps'] = "";
if(!isset($_SESSION['mdps'])) $_SESSION['mdps'] = "";
if(!isset($_SESSION['conditionAccept'])) $_SESSION['conditionAccept'] = "true";

if($_SESSION['nbp']==2){
    $_SESSION['nom'] = "";
    $_SESSION['prenom'] = "";
    $_SESSION['dn'] = "";
    $_SESSION['email'] = "";
    $_SESSION['numtele'] = "";
    $_SESSION['adresse'] = "";
    $_SESSION['username'] = "";
    $_SESSION['mdp'] = "";
    $_SESSION['mdps'] = "";
}

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

    <link rel="stylesheet" href="timeinput.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="rdvni.css">

    <title>Document</title>




                            <?php

                                date_default_timezone_set('Africa/Casablanca');
                                $d=(int)date("d");
                                $m=(int)date("m");
                                $h=(int)date("H");
                                $ndm=(int)date("t");
                                //echo date('l', strtotime(date("Y-M-d", mktime(0,0,0,$m,$d,2022))));
                                 //echo $ndm;
                                //echo date("w");
                                //echo date("d/m", mktime(0,0,0,5,$d,2022));
                                //echo date("H:i");

                            ?>  

    <script>
        var x=<?php echo$_SESSION['nbp'];?>;
        function pagereload(){
            if (x == 1){
            document.getElementById('type').style.display = 'flex';
            document.getElementById('horaire').style.display = 'none';
            document.getElementById('information').style.display = 'none';
            document.getElementById('rdv2').classList.remove("active");
            document.getElementById('rdv4').classList.remove("active");
            document.getElementById('rdv1').classList.add("active");
            document.getElementById('btn2').style.display = 'none';

        }else if (x == 2){
            document.getElementById('horaire').style.display = 'flex';
            document.getElementById('information').style.display = 'none';
            document.getElementById('rdv2').classList.add("active");
            document.getElementById('rdv4').classList.remove("active");
            document.getElementById('btn2').style.display = 'none';

            document.getElementById('prec-btn').style.display = 'none';


        }else if(x == 4){

            window.scroll(450, 450);
            document.getElementById('information').style.display = 'flex';
            document.getElementById('rdv4').classList.add("active");
            document.getElementById('rdv2').classList.remove("active");
            document.getElementById('horaire').style.display = 'none';
            document.getElementById('btn2').style.display = 'flex';
            
        }else if(x == 5){
            window.scroll(450, 450);
            document.getElementById('payement').style.display = 'flex';
            document.getElementById('rdv5').classList.add("active");
            document.getElementById('rdv2').classList.remove("active");
            document.getElementById('horaire').style.display = 'none';
            document.getElementById('btn3').style.display = 'flex';

        }
        return;
        }


        function tyconsui() {
            if (x == 1) {
                document.getElementById('type').style.display = 'none';
                document.getElementById('horaire').style.display = 'flex';

                document.getElementById('rdv1').classList.remove("active");
                document.getElementById('rdv2').classList.add("active");

                x++;

            }else if(x == 2){
                document.getElementById('horaire').style.display = 'none';
                document.getElementById('information').style.display = 'flex';

                document.getElementById('rdv2').classList.remove("active");
                document.getElementById('rdv4').classList.add("active");

                document.getElementById('btn1').style.display = 'none';
                document.getElementById('btn2').style.display = 'flex';

                document.getElementById('prec-btn').style.display = 'flex';

                x+=2;

            }else if(x == 3){
                document.getElementById('motif').style.display = 'none';
                document.getElementById('information').style.display = 'flex';

                document.getElementById('rdv3').classList.remove("active");
                document.getElementById('rdv4').classList.add("active");


                x++;

            }else if(x == 4){
                document.getElementById('information').style.display = 'none';
                document.getElementById('payement').style.display = 'flex';

                document.getElementById('rdv4').classList.remove("active");
                document.getElementById('rdv5').classList.add("active");

                document.getElementById('btn3').style.display = 'flex';
                document.getElementById('btn2').style.display = 'none';

                x++;

            }
            return;
        }

        function tyconprec() {
            if (x == 2) {
                document.getElementById('type').style.display = 'flex';
                document.getElementById('horaire').style.display = 'none';

                document.getElementById('rdv1').classList.add("active");
                document.getElementById('rdv2').classList.remove("active");

                x--;
            }else if(x == 3){
                document.getElementById('horaire').style.display = 'flex';
                document.getElementById('motif').style.display = 'none';

                document.getElementById('rdv2').classList.add("active");
                document.getElementById('rdv3').classList.remove("active");

            
                x--;
            }else if(x == 4){
                document.getElementById('horaire').style.display = 'flex';
                document.getElementById('information').style.display = 'none';

                document.getElementById('rdv2').classList.add("active");
                document.getElementById('rdv4').classList.remove("active");

                document.getElementById('btn2').style.display = 'none';
                

                document.getElementById('prec-btn').style.display = 'none';
            
                x-=2;
            }else if(x == 5){
                document.getElementById('information').style.display = 'flex';
                document.getElementById('payement').style.display = 'none';

                document.getElementById('rdv4').classList.add("active");
                document.getElementById('rdv5').classList.remove("active");

                document.getElementById('btn2').style.display = 'flex';
                document.getElementById('btn3').style.display = 'none';
            
                x--;
            }
            return;
        }

        var s = 0;
        function suivTime() {
            var i = 0;
            while (i<7){
                var idn = i+s;
                var idf= idn+7;
                document.getElementById(idf).style.display = 'flex';
                document.getElementById(idn).style.display = 'none';
                document.getElementById('prec2').style.display = 'flex';
                i++;
            }
            s+=7;
            if(s==21){
                document.getElementById('suiv2').style.display = 'none';
            }
        }
        function precTime() {
            var i = 0;
            while (i<7){
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
<body onload="pagereload()">






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
                        <a href="#">Nos Centres Hospitales</a>
                    </li>
                    <li>
                        <a href="loginformPatient.php">Espace Patient</a>
                    </li>
                </ul>

                <ul class="second-list">
                    <li>
                    <div class="box" id="box1">
                        <label class="text-avant-input">
                        <?xml version="1.0" ?><svg style = "width: 16px; fill: #5AABF0; margin-left: 10px; margin-right: 8px; margin-top: 4px;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="search"><path d="M29.71,28.29l-6.5-6.5-.07,0a12,12,0,1,0-1.39,1.39s0,.05,0,.07l6.5,6.5a1,1,0,0,0,1.42,0A1,1,0,0,0,29.71,28.29ZM14,24A10,10,0,1,1,24,14,10,10,0,0,1,14,24Z"/></g></svg>
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




    <div class="container-all-info-rdv">
        <div class="medcin-list">
            <div class="troix-card-medecin">
                <div class="un-medecin-card">
                    <div class="card-container">
                    <div class="card-medecin-header">
                        <div class="img-medecin"></div>
                        <div class="info-general">
                            <h4><?php echo $_SESSION["nomM"].' '.$_SESSION["prenomM"]; ?></h4>
                            <h5><?php echo $_SESSION["specialite"]; ?></h5>
                        </div>
                    </div>
                    <div class="card-medecin-infos">
                        <h5>
                        <?php echo '<h5><font style=" color: blue;">Centre: </font>'.$tupleb["nomc"].'
                                </h5>
                                <h5> <font style=" color: blue;">Ville: </font>'.$tupleb["ville"].'</h5>';
                        ?>
                        </h5>
                        <p>
                        </p>
                    </div>
                </div>
                </div>    
            </div>
        </div>
        <div class="rdv-container">
            <div class="rdv-content">
                <div class="infos-rdv">
                    <?php
                    if($_SESSION["nbp"]!=5){
                        echo '
                        <h4 style="color:red;">Pour continuer , il faut disposer obligatoirement:</h4>
                        <h5 style="color:red;">1) D\'une adresse email valide. (exemple: nom_utilisateur@gmail.com)</h5>
                        <h5 style="color:red;">2) D\'un numéro de telephone valide.</h5>
                        ';
                    }

                    ?>
                </div>
                <div class="liste-header">
                    <div onclick="" id="rdv1">
                        <button id="rdvb1" style = "display: none;">
                            <span>
                                Type de consultation
                            </span>
                        </button>
                    </div>
                    <div onclick="" id="rdv2">
                    <button id="rdvb2">
                            <span>
                                Horaire
                            </span>
                        </button>
                    </div>
                    <div onclick="" id="rdv3" style = "display: none;">
                    <button>
                            <span id="rdvb3">
                                Motif
                            </span>
                        </button>
                    </div>
                    <div onclick="" id="rdv4">
                        <button>
                                <span id="rdvb4">
                                    Information
                                </span>
                        </button>
                    </div>
                    <div onclick="" id="rdv5">
                    <button>
                            <span id="rdvb5">
                                Payement
                            </span>
                        </button>
                    </div>
                </div>
                <div class="inputs-container">



                    <form onsubmit="return checkform()" name="ttrifpiop">
                    <div class="type-consultation" id="type">
                        <div class="content">
                            <div>
                                <h3>Je choisis le type de consultaion</h3>
                            </div>
                            
                            <div class="btns-choix">
                <div class="btns">
                    <b><h1></h1></b>
                    <table>
                        <tr>
                            <td>
                                <center>
                                    <label>
                                        <?php 

                                        if($_SESSION["type"]=="Domicile")
                                        echo '<input type="radio" name="rad" id="" value="Domicile" checked="checked">';
                                        else
                                        echo '<input type="radio" name="rad" id="" value="Domicile">';
                                        ?>
                                    <div class="img-domicile Domicile-radio radio-div" onclick="tyconsui()"> 
                                        <h1>1</h1>
                                        <svg version="1.1" id="home" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="82px" height="80px" viewBox="394.5 418.584 212 206.25" enable-background="new 394.5 418.584 212 206.25"
                                        xml:space="preserve">
                                   <path d="M600.116,503.301l-88.955-77.062c-0.298-0.254-0.656-0.472-1.059-0.639c-5.693-4.32-13.557-4.119-19.049,0.639
                                       l-88.956,77.053c-6.376,5.519-7.181,15.313-1.784,21.839c3.411,4.128,9.069,4.075,13.408,3.2v82.834
                                       c0,6.253,5.02,11.344,11.195,11.344h53.586c2.414,0,4.374-1.96,4.374-4.373v-72.242h36.471v72.242c0,2.413,1.959,4.373,4.372,4.373
                                       h53.587c6.175,0,11.195-5.091,11.195-11.344v-82.834c4.355,0.857,9.996,0.919,13.407-3.2
                                       C607.297,518.606,606.492,508.802,600.116,503.301z M595.166,519.551c-0.9,1.058-5.563,0.48-9.288-1.146
                                       c-1.355-0.595-2.93-0.454-4.146,0.351c-1.233,0.805-1.985,2.187-1.985,3.655v88.746c0,1.435-1.103,2.598-2.449,2.598h-49.214
                                       v-72.242c0-2.414-1.959-4.373-4.373-4.373h-45.217c-2.414,0-4.373,1.959-4.373,4.373v72.242h-49.214
                                       c-1.347,0-2.449-1.163-2.449-2.598V522.41c0-1.478-0.744-2.859-1.985-3.664c-1.233-0.796-2.799-0.919-4.155-0.342
                                       c-3.306,1.461-8.334,2.283-9.279,1.138c-2.388-2.887-2.046-7.207,0.77-9.647l88.956-77.061c2.432-2.099,5.956-2.099,8.388,0
                                       c0.314,0.28,0.674,0.507,1.05,0.674l88.186,76.405C597.213,512.344,597.553,516.664,595.166,519.551L595.166,519.551z"/>
                                   </svg>
                                   <span>
                                    Domicile
                                </span>
                                </div>
                                    </label>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <label>
                                    <?php 

                                    if($_SESSION["type"]=="Appel")
                                    echo '<input type="radio" name="rad" id="" value="Appel" checked="checked">';
                                    else
                                    echo '<input type="radio" name="rad" id="" value="Appel">';
                                    ?>
                                        <div class="Appel-radio radio-div" onclick="tyconsui()">
                                            <h1>2</h1>
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 56.005 56.005" style="enable-background:new 0 0 56.005 56.005;" xml:space="preserve">
	<path d="M18.683,32.562c-2.396,0-4.407,1.449-5.684,3.213c-1.276-1.764-3.288-3.213-5.684-3.213c-3.819,0-6.871,2.963-7.271,7.052
		c-0.042,0.267-0.145,1.22,0.226,2.709c0.546,2.197,1.801,4.192,3.631,5.77l8.329,7.127c0.223,0.191,0.496,0.287,0.769,0.287
		c0.273,0,0.546-0.096,0.769-0.286l8.331-7.129c1.828-1.575,3.083-3.57,3.629-5.768c0.369-1.49,0.268-2.442,0.226-2.71
		C25.554,35.525,22.502,32.562,18.683,32.562z M23.787,41.842c-0.445,1.794-1.479,3.432-2.99,4.732L13,53.246l-7.795-6.671
		c-1.513-1.303-2.547-2.94-2.992-4.734c-0.302-1.213-0.194-1.897-0.194-1.897l0.016-0.105c0.245-2.621,2.138-5.275,5.282-5.275
		c2.189,0,3.974,1.811,4.77,3.605L13,40.228l0.914-2.061c0.796-1.795,2.58-3.605,4.77-3.605c3.145,0,5.037,2.654,5.295,5.366
		C23.98,39.935,24.09,40.62,23.787,41.842z"/>
	<path d="M55.426,41.409c-2.008-3.796-8.98-7.912-9.287-8.092c-1.278-0.728-2.6-0.957-3.723-0.646
		c-0.844,0.233-1.531,0.767-1.994,1.545c-1.02,1.22-2.285,2.646-2.592,2.867c-2.37,1.604-4.252,1.414-6.295-0.629L20.049,24.969
		c-2.045-2.045-2.233-3.928-0.631-6.292c0.224-0.31,1.649-1.575,2.869-2.595c0.778-0.463,1.312-1.15,1.546-1.995
		c0.307-1.106,0.071-2.463-0.653-3.732c-0.173-0.296-4.289-7.269-8.085-9.276C13.169,0.057,10.84,0.407,9.299,1.95L6.763,4.487
		C0.73,10.519,0.532,17.889,6.19,25.802c0.321,0.448,0.944,0.553,1.396,0.231c0.449-0.321,0.553-0.946,0.231-1.396
		c-5.156-7.21-5.038-13.339,0.36-18.736l2.536-2.537c0.919-0.916,2.304-1.125,3.446-0.519c3.294,1.743,7.256,8.453,7.289,8.51
		c0.449,0.788,0.62,1.609,0.457,2.197c-0.1,0.36-0.323,0.633-0.683,0.835l-0.151,0.104c-0.853,0.712-2.883,2.434-3.308,3.062
		c-0.612,0.904-1.018,1.793-1.231,2.666c-0.711-1.418-1.286-3.061-1.475-4.881c-0.058-0.548-0.543-0.944-1.099-0.892
		c-0.549,0.058-0.948,0.549-0.892,1.099c0.722,6.953,6.13,11.479,6.359,11.668c0.026,0.021,0.056,0.029,0.083,0.047l10.61,10.61
		c0.044,0.044,0.089,0.083,0.134,0.125c0.036,0.053,0.059,0.111,0.106,0.158c0.189,0.187,4.704,4.567,11.599,5.283
		c0.035,0.003,0.07,0.005,0.104,0.005c0.506,0,0.94-0.383,0.994-0.896c0.057-0.55-0.343-1.041-0.892-1.099
		c-2.115-0.219-3.988-0.839-5.549-1.559c0.766-0.229,1.544-0.612,2.334-1.146c0.628-0.425,2.35-2.455,3.062-3.308l0.104-0.151
		c0.202-0.359,0.475-0.583,0.835-0.683c0.587-0.164,1.409,0.008,2.187,0.45c1.879,1.102,7.072,4.559,8.521,7.296
		c0.605,1.145,0.397,2.529-0.519,3.445l-2.537,2.537c-5.393,5.393-11.791,5.446-19.016,0.159c-0.448-0.327-1.072-0.229-1.397,0.216
		c-0.326,0.446-0.229,1.071,0.216,1.397c3.935,2.88,7.733,4.317,11.306,4.317c3.718,0,7.189-1.56,10.306-4.676l2.537-2.537
		C56.095,45.663,56.446,43.334,55.426,41.409z"/>
</svg>
                                            <span>
                                                Appel/Video
                                            </span>
                                        </div>
                                    </label>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <label>
                                    <?php 

                                    if($_SESSION["type"]=="Cabinet")
                                    echo '<input type="radio" name="rad" id="" value="Cabinet" checked="checked">';
                                    else
                                    echo '<input type="radio" name="rad" id="" value="Cabinet">';
                                    ?>
                                    <div class="Cabinet-radio radio-div" onclick="tyconsui()">
                                        <h1>3</h1>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 229.957 229.957" style="enable-background:new 0 0 229.957 229.957;" xml:space="preserve">
			<path d="M104.706,129.12h24.242v-16.162h16.162V88.715h-16.162V72.554h-24.242v16.162H88.544v24.242h16.162V129.12z
				 M96.625,104.877v-8.081h16.162V80.635h8.081v16.162h16.161v8.08h-16.162v16.162h-8.081v-16.162H96.625z"/>
			<rect x="23.897" y="137.2" width="28.283" height="8.081"/>
			<rect x="23.897" y="153.362" width="28.283" height="8.081"/>
			<rect x="23.897" y="169.523" width="28.283" height="8.081"/>
			<rect x="177.433" y="137.2" width="28.283" height="8.081"/>
			<rect x="177.433" y="153.362" width="28.283" height="8.081"/>
			<rect x="177.433" y="169.523" width="28.283" height="8.081"/>
			<path d="M221.877,197.807L221.877,197.807v-76.768h-52.525V32.15h20.202v-8.081h-20.202H60.261H40.059v8.081h20.202v88.889H7.736
				v76.768H0v8.081h7.736h52.525h8.081h24.242h44.444h24.242h8.081h52.525h8.081v-8.081H221.877z M60.261,197.806H15.817v-68.687
				h44.444V197.806z M128.948,197.806h-28.283v-32.323h28.283V197.806z M161.271,121.039v76.768h-24.242v-0.001v-40.404H92.584
				v40.404H68.342v-76.767V32.15h92.929V121.039z M213.796,197.806h-44.444v-68.687h44.444V197.806z"/>
                <span>
                    Cabinet
                </span>
                                    </div>
                                   </label>
                                </center>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


                        </div>
                    </div>





                    <div class="horaire" id="horaire">
                        <div class="content-horaire">
                            <?php

                                date_default_timezone_set('Africa/Casablanca');
                                $d=(int)date("d");
                                $m=(int)date("m");
                                $h=(int)date("H");
                                $ndm=(int)date("t");
                                //echo date('l', strtotime(date("Y-M-d", mktime(0,0,0,$m,$d,2022))));
                                 //echo $ndm;
                                //echo date("w");
                                //echo date("d/m", mktime(0,0,0,5,$d,2022));
                                //echo date("H:i");

                            ?>  
                            
                            <div>
                                <h3>Je choisis l'horaire</h3>
                            </div>
 <?php
    echo '<div class="rows">';

    echo'
            <div class="prec-time-btn" onclick = "precTime()" style="display:none;" id="prec2"> 
            <svg viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" style="width:80px;"><title/><path d="M39.3756,48.0022l30.47-25.39a6.0035,6.0035,0,0,0-7.6878-9.223L26.1563,43.3906a6.0092,6.0092,0,0,0,0,9.2231L62.1578,82.615a6.0035,6.0035,0,0,0,7.6878-9.2231Z"/></svg>
            </div>
        ';
        $i=0;
        while($i<28){
            if ($i<7) {
                $j=8;
                if(($d+$i)>$ndm){
                    $d=1-$i;
                    $m++;
                }
        echo'
        <ul id="'.$i.'">
        <li class="list-header"><h5>'.date('l', strtotime(date("Y-M-d", mktime(0,0,0,$m,$d+$i,2022)))).'</h5><h4>'.date("d/m", mktime(0,0,0,$m,$d+$i,2022)).'</h4> </li>
        ';
        while($j<18){
            if($i==0){
                if($j>$h){
                    $trdvm = $bdd->query("SELECT * FROM rdv where rdv.idm = '".$_SESSION["idm"]."' ORDER BY mois, jour, heure ASC") ;
                    $findh = false;
                    while($tabrdv=$trdvm->fetch())
                        if($tabrdv['heure']==$j && $tabrdv['jour']==$d+$i && $tabrdv['mois']==$m){
                            echo '
                                <li><label><div class="h-d" style="background-color: gray; color: white;">'.$j.':00</div></label></li>
                                ';
                            $findh=true;
                        }
                    if(!$findh)
                    echo '
                    <li><label><input type="radio" name="hour" id="" value="'.$j.' '.$d+$i.' '.$m.'"><div class="h-d" onclick="tyconsui()">'.$j.':00</div></label></li>
                    ';
                }else{
                    echo '
                        <li><label><div class="h-d" style="background-color: gray; color: white;">'.$j.':00</div></label></li>
                         ';
                }
            }
            else{
                $trdvm = $bdd->query("SELECT * FROM rdv where rdv.idm = '".$_SESSION["idm"]."' ORDER BY mois, jour, heure ASC") ;
                $findh = false;
                    while($tabrdv = $trdvm->fetch()){
                        if($tabrdv['heure']==$j && $tabrdv['jour']==$d+$i && $tabrdv['mois']==$m){
                            echo '
                            <li><label><div class="h-d" style="background-color: gray; color: white;">'.$j.':00</div></label></li>
                            ';
                            $findh=true;
                        }
                    }
                if(!$findh)
                echo '
                <li><label><input type="radio" name="hour" id="" value="'.$j.' '.$d+$i.' '.$m.'"><div class="h-d" onclick="tyconsui()">'.$j.':00</div></label></li>
                ';
            }
        
        if($j==11)
        $j=14;
        else
        $j++;
        }
        $i++;
        echo'</ul>';
        }







        else{
            $j=8;
            if(($d+$i)>$ndm){
                $d=1-$i;
                $m++;
            }
        echo'
        <ul style=" display: none;" id="'.$i.'">
        <li class="list-header"><h5>'.date('l', strtotime(date("Y-M-d", mktime(0,0,0,$m,$d+$i,2022)))).'</h5><h4>'.date("d/m", mktime(0,0,0,$m,$d+$i,2022)).'</h4> </li>
        ';
        while($j<18){
                $trdvm = $bdd->query("SELECT * FROM rdv where rdv.idm = '".$_SESSION["idm"]."' ORDER BY mois, jour, heure ASC") ;
                $findh = false;
                    while($tabrdv = $trdvm->fetch()){
                        if($tabrdv['heure']==$j && $tabrdv['jour']==$d+$i && $tabrdv['mois']==$m){
                            echo '
                            <li><label><div class="h-d" style="background-color: gray; color: white;">'.$j.':00</div></label></li>
                            ';
                            $findh=true;
                        }
                    }
                if(!$findh)
                echo '
                <li><label><input type="radio" name="hour" id="" value="'.$j.' '.$d+$i.' '.$m.'"><div class="h-d" onclick="tyconsui()">'.$j.':00</div></label></li>
                ';
        
        if($j==11)
        $j=14;
        else
        $j++;
        }
        $i++;
        echo'</ul>';
        }
        
        }

        echo'
            <div class="suiv-time-btn" onclick = "suivTime()" id="suiv2"> 
            <svg viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" style="width:80px;"><title/><path d="M69.8437,43.3876,33.8422,13.3863a6.0035,6.0035,0,0,0-7.6878,9.223l30.47,25.39-30.47,25.39a6.0035,6.0035,0,0,0,7.6878,9.2231L69.8437,52.6106a6.0091,6.0091,0,0,0,0-9.223Z"/></svg>
            </div>
        ';


        ?>
    </div>
                        </div>
                    </div>
                   


                    <div class="information" id="information">
                        <div>
                            <h3>Je complète mes informations</h3>
                            <?php
                            if($_SESSION['champ-empty'] == 'ok'){
                                echo '<h5 class="red-titre"> Tous les champs doivent être remplis </h5>';
                            }
                            ?>
                            <span id="erremail"></span>
                        </div>
                        <div class="information-container">
                            <div class="info-person-container info-con">
                                <h4>Informations Personnelles</h4>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="nom" id="" placeholder="Nom" value="<?php echo $_SESSION['nom']; ?>">
                                    </div>
                                    <div class="input-con">
                                        <input type="text" name="prenom" id="" placeholder="Prénom" value="<?php echo $_SESSION['prenom']; ?>">
                                    </div>
                                </div>
                                <div class="deux-inputs Informations-Personnelles">
                                    <div class="input-con">
                                        <input type="text" name="adresse" id="" placeholder="Adresse" value="<?php echo $_SESSION['adresse']; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="info-contact-container info-con">
                                <h4>Informations de contact</h4>
                                <div class="deux-inputs Informations-contact">
                                    <div class="input-con">
                                        <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>">
                                        <span id="span"></span>
                                    </div>
                                    <div class="input-con">
                                        <input type="tel" name="tele" id="" placeholder="Téléphone Mobile" value="<?php echo $_SESSION['numtele']; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="info-profil-container info-con">
                                <h4> Création du compte </h4>
                                <div class = "un-input">
                                    <input type="text" name="nom-utilisateur" id="" placeholder="Nom d'utilisateur ( rentrer votre email )" value="<?php echo $_SESSION['username']; ?>">
                                </div>
                                <div class="deux-inputs Informations Profil">
                                    <div class="input-con">
                                        <input type="password" name="mdp" id="" placeholder="Mot de passe" value="<?php echo $_SESSION['mdp']; ?>">
                                </div>
                                    <div class="input-con">
                                        <input type="password" name="mdps" id="" placeholder="Confirmer le mot de passe" value="<?php echo $_SESSION['mdps']; ?>">
                                    </div>
                                </div>
                            </div>

                                <div></div>
                                <div class="deux-inputs-check">

                                <?php
                                        if($_SESSION['conditionAccept'] == "false"){
                                        echo '<h5 class="red-titre"> Il faut accepte notre conditions </h5>';
                                        }
                                    ?>

                                </div>

                        </div>
                    </div>






                    <div class="payement" id="payement">
                    <h3>Je paye</h3>
                    <div class="container-payement-form">
                    <?php
                            if($_SESSION['champ-empty-p'] == 'ok'){
                                echo '<h5 class="red-titre"> Tous les champs doivent être remplis </h5>';
                            }
                    ?>
        <div class="first-row">
            <div class="owner">
                <h4>Propriétaire (Nom et prenom)</h4>
                <div class="input-field">
                    <input type="text" name="pr">
                </div>
            </div>
            <div class="cvv">
                <h4>CVV</h4>
                <div class="input-field">
                    <input type="password" name="cvv">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h4>Numéro de la carte</h4>
                <div class="input-field">
                    <input type="text" name="ncarte">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h4>Date d'experation</h4>
            <div class="selection">
                <div class="date">
                    <select name="month" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="year" id="years">
                        <option value="2020">2027</option>
                        <option value="2019">2026</option>
                        <option value="2018">2025</option>
                        <option value="2017">2024</option>
                        <option value="2016">2023</option>
                        <option value="2015">2022</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="img/mc.png" alt="">
                    <img src="img/vi.png" alt="">
                    <img src="img/pp.png" alt="">
                </div>
            </div>    
        </div>
    </div>
                    </div>




                    <div class="content-precedent-suivant-btn">
                        <div onclick="">
                            <div onclick="tyconprec()" class="button prec-btn" id="prec-btn">
                                    <span>
                                        précédent
                                    </span>
                            </div>
                        </div>

                        <div onclick="">
                            <button class="button btn2" id="btn2">
                                    <span type="submit">
                                        Je passe au payement
                                    </span>
                            </button>

                            <div id="btn1" class="btn1 button">
                                    <input type="button" value="suivant" onclick="tyconsui()">
                            </div>
                            <button id="btn3" class="btn2 button" type="submit" onclick="conf_paye()">
                                    <input type="submit" value="je paye 200dh" onclick="">
                            </button>
                        </div>

                        </div>

            </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/search.js"></script>
    <script src="js/emailcheck.js"></script>
    <script src="js/checkform.js"></script>
</body>
</html>


<?php

    $_SESSION['champ-empty'] = 'no';
    $_SESSION['nbp'] = 2;
    $_SESSION['champ-empty-p'] = 'no';
    $_SESSION['conditionAccept'] = "true";


?>
