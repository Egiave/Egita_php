<?php

$months = 24;
$car_price_new = 30000;
$car_price_used = $car_price_new;
$santaupos = 15000;

for ($m = 1; $santaupos <= $car_price_used; $m++) {
    $car_price_used -= round($car_price_used * 0.02);
    print "$m Mašinos vertė $car_price_used <br>";
//    if ($santaupos >= $car_price_used) {
//         print "Po $m mėnesių turėsiu tinkamą pinigų sumą. ";
}

$pinigulikutis = $santaupos - $car_price_used;
$depreciated = round(100 - ($car_price_used / $car_price_new) * 100);
$text = "Po $m mėnesių mašinos vertė bus: $car_price_used eurų. Nusipirkus tau liks $pinigulikutis eur."

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
