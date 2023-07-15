<?php 
$time=$_POST["hour"];
$date = explode(" ",$time);
echo $time.' ';
echo $date[0].'h ';
echo $date[1].'d ';
echo $date[2].'m ';

?>