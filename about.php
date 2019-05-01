<?php

function god () {
    print 'wine';
}

god();

function px_to_color($lenght){
    if ($lenght > 30) {
        print 'Black';
    } else {
        print 'White';
    }
}

px_to_color(40);

/**
 * sumuoja x ir y
 * 
 * @param integer $x Pirma verte
 * @param integer $y Antra verte
 * @return integer
 */

function sum($x, $y) {
    return $x + $y;
} 

$suma = sum(10, 20);
print sum(10, 20) . '<br>';

function daugyba($x, $y) {
    return $x * $y;
}
print daugyba (2, 5) . '<br>';

/**
 * skaiciuoja vidurki is masyvo
 * @param array $array
 * @return float
 */

function average($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum / count($array); 
}

$skaiciai = [12, 43, 654, 23];        
print average ($skaiciai) . '<br>';

function dalyba ($x, $y) {
    return $x / $y;
}
print dalyba (6, 3) . '<br>';


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, antradienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body> 
    </body>
</html>
