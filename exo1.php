<?php
$x=rand(-10,10);
$y=rand(-10,10);
$z=rand(-10,10);
echo("$x <br>");
echo("$y <br>");
echo("$z <br>");

if($x>$y && $y>$z){
    $min=$z;
    $moy=$y;
    $max=$x;
}elseif($x<$y && $y<$z){
    $min=$x;
    $moy=$y;
    $max=$z;
}elseif($x<$z && $z<$y){
    $min=$x;
    $moy=$z;
    $max=$y;
}elseif($y<$x && $x<$z){
    $min=$y;
    $moy=$x;
    $max=$z;
}elseif($z<$x && $x<$y){
    $min=$z;
    $moy=$x;
    $max=$y;
}else{
    $min=$y;
    $moy=$z;
    $max=$x;
}
echo("l'ordre croissant est : $min , $moy , $max");
?>