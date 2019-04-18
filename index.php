<?php 
        
$sunny = 1;  

if ($sunny) {
    print 'Sauleta';
} else {
     print 'Debesuota'; 
}

$x = 0;

if ($x == 1) {
    print 'x yra 1';
} elseif ($x == 2) {
    print 'x yra 2';
} else {
    print 'Nei tas, nei tas';
}
   
$distance = rand (800, 10000);
$consumption = 7.5;
$price_1 = 1.3;

$fuel_total = round(($distance * 7.5) / 100);
$price_trip = round($fuel_total * $price_1);
$text = 'Nuvažiavus ' . $distance . ' km, ' . ' mašina sunaudos ' . $fuel_total . ' l ' . ' kuro. ' . ' Kaina: ' . $price_trip . ' pinigų.';

$my_money = 100;
If ($my_money >= $price_trip) {
    $isvada = 'galiu';
} else {
    $isvada = 'negaliu';
}

$text2 = 'Išvada: Aš galiu sau tai ' . $isvada . ' leisti.';

$grizai_velai = rand (0, 1);
$grizai_isgeres = rand (0, 1);
     
if ($grizai_velai && $grizai_isgeres) {
    $atsakymas = 'Miegosi ant sofos, nes grįžai vėlai ir išgėręs.'; 
} elseif ($grizai_velai && !$grizai_isgeres ) {
    $atsakymas = 'Nemiegosi ant sofos, nes negrįžai išgėręs.';
} elseif (!$grizai_velai && $grizai_isgeres ) {
    $atsakymas = 'Nemiegosi ant sofos, nes negrįžai vėlai.';
} else {
    $atsakymas = 'Nemiegosi ant sofos, nes nieko nepadarei.';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klases darbas</title>
    </head>
    <body>
        
        <?php
        
        print $text . '<br>';
        print $text2;
        
        ?>
        
        <h1><?php print $atsakymas; ?></h1>
        
    </body>
</hmtl>    
