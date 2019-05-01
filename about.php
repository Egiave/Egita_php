<?php

//Uzduotis Nr.2
$months = 12;
$kisene = 1000;
$alga = 700;

for ($m = 1; $m <= $months; $m++) {
    $islaidos = rand(500, 1200);
    $balansas = $kisene + $alga - $islaidos;
//    print "$islaidos<br>";
    print "menuo $m<br>kisene $kisene eur<br>islaidos $islaidos<br>balansas $balansas<br><br>";
    if ($balansas <= 0) {
        print "Bloga prognozė: $m mėnesį gali baigtis pinigai! Atsargiai!. Likutis $kisene. <br>";
        break;
    } else {
        $kisene = $balansas;   
    }
}

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
