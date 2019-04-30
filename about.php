<?php

$ataskaita = [
    [
        'name' => 'IKI Darbo Užmokestis',
        'amount' => '600',
    ],
    [
        'name' => 'Kavarijų Načnykas',
        'amount' => '-15',
    ],
    [
        'name' => 'Rimi',
        'amount' => '-10',
    ],
    [
        'name' => 'Komisas',
        'amount' => '300',
//      'css_class' => 'positive/negative'
    ]
];

//print $ataskaita [0]['amount'];
//$ataskaita[0]['amount'] = 10;

$visos_islaidos = 0;
$visos_iplaukos = 0;
$balansas = 0;

foreach ($ataskaita as $index => $irasas) {
    if ($irasas['amount'] > 0) {
        $visos_iplaukos += $irasas['amount'];
        $ataskaita[$index]['css_class'] = 'positive';
    } else {
        $visos_islaidos -= $irasas['amount'];
        $ataskaita[$index]['css_class'] = 'negative';
    }

    $balansas += $irasas['amount'];
}

$text_balance = "balansas: $balansas eur.";
$text_spend = "visos islaidos: $visos_islaidos eur.";
$text_earn = "visos iplaukos: $visos_iplaukos eur.";

$zodziai = [
    'Petras',
    'laukė',
    'ryte',
    'prie',
    'Maxima'
];

$atrinkti_zodziai = [];

foreach ($zodziai as $zodis) {
    $pateko = rand(0, 1);
    if ($pateko) {
        $atrinkti_zodziai[] = $zodis;
    }
}

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
    $random_index = rand(0, count($zodziai) -1);
    $random_zodis = $zodziai[$random_index];
    $rasinys[] = $random_zodis;
}

var_dump($rasinys);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, pirmadienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
            .positive {
                color: green;
            }
            .negative {
                color: red;
            }
        </style>
    </head>
    <body>
        <ul>
            <?php foreach ($ataskaita as $irasas): ?>
                <li class="<?php print $irasas['css_class']; ?>">
                    <span><?php print $irasas['name']; ?></span>
                    <span><?php print $irasas['amount']; ?></span>
                </li>
            <?php endforeach; ?>    
        </ul>
        <ul>
            <li>
                <?php print $text_balance; ?>
            </li>
            <li>
                <?php print $text_spend; ?>
            </li>
            <li>
                <?php print $text_earn; ?>
            </li>
        </ul> 
        <ul>
            <?php foreach ($atrinkti_zodziai as $zodis): ?>
                <li>
                    <?php print $zodis; ?>
                </li>
            <?php endforeach; ?>    
        </ul>
    </body>
</html>

