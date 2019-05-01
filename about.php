<?php

$days = 365;
$pakelio_kaina = 3.5;
$surukyta = 0;
$surukyta2 = 0;
$rukymo_laikas = 5;

for ($day = 1; $day <= $days; $day++){
    $weekday = date('N', strtotime("+$day days"));
    if ($weekday <= 4) {
        $cizos_mon_thu = rand(3, 4);
        $surukyta += $cizos_mon_thu;
        $surukyta2 += $cizos_mon_thu;
    } elseif ($weekday == 5) {
        $cizos_fri = rand(10, 20);
        $surukyta += $cizos_fri;
    } else {
        $cizos_sat_sun = rand(1, 3);
        $surukyta += $cizos_sat_sun;
    }
} 
$viso_hours = round(($surukyta * $rukymo_laikas) / 60);
$viso_kaina = round($surukyta / 20 * 3.5);
$text = "Per metus surūkysiu $surukyta cigarečių už $viso_kaina eur ir praleisiu rūkydamas $viso_hours.";
$mon_thu_kaina = round($surukyta2 / 20 * 3.5);
$text1 = "Nerūkydamas pirmadienį-ketvirtadienį sutaupyčiau $mon_thu_kaina eur."        

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, antradienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body>
        <?php print $text .' '. $text1; ?>
    </body>
</html>
