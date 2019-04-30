<?php

$zodziai = [
    'Petras',
    'laukė',
    'ryte',
    'prie',
    'Maxima'
];
$rasinys = [];
$rasinio_ilgis = rand(100, 300);

for ($rasinio_zodis = 0; $rasinio_zodis < $rasinio_ilgis; $rasinio_zodis++) {
    $random_index = rand(0, count($zodziai) - 1);
    $random_zodis = $zodziai[$random_index];
    $rasinys[] = $random_zodis;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, pirmadienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <ul>
            <?php foreach ($rasinys as $zodis): ?>
                <li>
                    <?php print $zodis; ?>
                </li>
            <?php endforeach; ?>    
        </ul>
    </body>
</html>
