<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>