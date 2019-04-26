<?php

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Alus',
    'Cigarete',
    'Pirmadienis',
    'Paskaita'
];

$draugo_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Ezeras',
    'pusys',
    'Pirmadienis',
    'Paskaita'
];​



$rand_flashback = rand(0, count($mano_atmintis) - 1);
$flashback_text = '#' . $rand_flashback . ': ' . $mano_atmintis[$rand_flashback];
​
$bendri_atsiminimai = [];

foreach ($mano_atmintis as $prisiminimas) {      
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    if ($egzistuoja) {
       $bendri_atsiminimai[] = $prisiminimas;
    } 
    print $prisiminas;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, 5-tadienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Kas buvo penktadienį ?!</h1>
        <h2>Mano atmintis</h2>
        <ul> 
            <!-- foreach -->
            <?php foreach ($mano_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->        
        </ul>

        <!-- Flashback is random each page refresh -->   
        <p><?php print $flashback_text; ?></p>
        <h2>Draugo atmintis</h2>
        <ul>
            <!-- foreach -->
            <?php foreach ($draugo_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
            <!-- endforeach -->
        </ul>
        <ul>
            <?php foreach($bendri_atisiminimai as $prisiminimas): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

