<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="timeinput.css">
    
</head>
<body>



<?php

 date_default_timezone_set('Africa/Casablanca');
 $d=(int)date("d");
 $m=(int)date("m");
 $h=(int)date("H");
 $ndm=(int)date("t");
 //echo $ndm;
 //echo date("w");
 //echo date("d/m", mktime(0,0,0,5,$d,2022));
 //echo date("H:i");
  ?>      

    <div class="rows">
        <form action="time.php" method="POST">
        <?php
        $i=0;
        while($i<4){
        $j=8;
        echo'
        <ul>
        <li class="list-header"> <h4>'.date("d/m", mktime(0,0,0,$m,$d+$i,2022)).'</h4> </li>
        ';
        while($j<18){
            $mr=$m;
            $ndm=$m;
            if(($d+$i)>$ndm){
                $d=1-$i;
            }
            if($i==0){
                if($j>$h){
                    echo '
                    <li><label><input type="radio" name="hour" id="" value="'.$j.' '.$d+$i.' '.$mr.'"><div class="h-d">'.$j.':00</div></label></li>
                    ';
                }
            }
            else{
                echo '
                <li><label><input type="radio" name="hour" id="" value="'.$j.' '.$d+$i.' '.$mr.'"><div class="h-d">'.$j.':00</div></label></li>
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


        ?>
        <input type="submit" value="ok">
        </form>
    </div>
    
</body>
</html>