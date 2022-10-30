<?php
$n=rand(1,100);
echo("le nombre de notes a generer est de :".$n);echo("<br>");
$i=1;
$moy=0;
$min=20;
$max=0;
while($i<=$n){
    $no=rand(0,20);
    echo("$no <br>");
    $moy=$moy+$no;
    
    if($min>$no){
        $min=$no;
    }
    
    if($max<$no){
        $max=$no;
    }
    $i++;
}
$moy=$moy/$n;
echo("la moyenne est de :".$moy);echo("<br>");
echo("le plus petit est de :".$min);echo("<br>");
echo("le plus grand est de :".$max);echo("<br>");

?>