<?php

$days = 365;
$pakelio_kaina = 3.5;
$surukyta = 0;

for ($day = 1; $day <= $days; $day++){
    $weekday = date('N', strtotime("+$day days"));
    if ($weekday <= 4) {
        $cizos_mon_thu = rand(3, 4);
        $surukyta += $cizos_mon_thu;
    } elseif ($weekday == 5) {
        $cizos_fri = rand(10, 20);
        $surukyta += $cizos_fri;
    } else {
        $cizos_sat_sun = rand(1, 3);
        $surukyta += $cizos_sat_sun;
    }
} 

$viso_kaina = round($surukyta / 20 * 3.5);
$text = "Per metus surūkysiu $surukyta cigarečių už $viso_kaina eur."
       
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, antradienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body>
        <?php print $text; ?>
    </body>
</html>
