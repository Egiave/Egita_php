<?php

$x = 10;

for ($z = 1; $z <= $x; $z++) {
    print "Aš esu $z-tasis ciklas <br>"; 
}

$months = 24;
$car_price_new = 30000;
$car_price_used = $car_price_new;

for ($m = 1; $m <=24; $m++) {
    $car_price_used -= round($car_price_used * 0.02);
    print "$m Mašinos vertė $car_price_used <br>";
}

$depreciated = round(100 - ($car_price_used / $car_price_new) * 100);
$text = "Po 24 menesiu masinos verte bus: $car_price_used ir nuvertejo $depreciated procentu."

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>uzduotis</title>
    </head>
    <body>
        <p>
            <?php print $text; ?>
        </p>
    </body>
    
</html>    
