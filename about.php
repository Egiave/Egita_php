<?php

$vaisiai = [
    'obuolys', 
    'apelsinas', 
    'cukinija'
];

var_dump ($vaisiai);

$arr = [
    'kiausiniai' => [
        'name' => 'Kiaušinis',
        'amount' => 1,
        'size' => 'didelis',
    ],
    'baklazanai' => [
        'name' => 'Baklažanas',
        'amount' => 1,
        'size' => 'mazas',
    ],
    'grietine' => [
        'name' => 'Grietinė',
        'amount' => 1,
        'size' => 'mazas',
    ]
];

var_dump($arr);

$all = [
    'Petro_Pizdžio' => [
        'vardas' => 'Petro pizdžio',
        'daikto_bukle' => 'prap*stas',
        'daiktas' => 'telefonas',
    ],
    'tomo_ablomo' => [
        'vardas' => 'Tomo Ablomo',
        'daikto_bukle' => 'naudojamas',
        'daiktas' => 'buljonas',
    ],
    'anos_shitkovos' => [
        'vardas' => 'Anos Shitkovos',
        'daikto_bukle' => 'pasibaigęs',
        'daiktas' => 'rulonas',
    ]
];

var_dump($all);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
         <div class="produktas">
            <span class="pavadinimas">
                <?php print $arr['grietine']['name']; ?>
            </span>
            <span class="kiekis">
                <?php print $arr['grietine']['amount']; ?>   
            </span>
            <span class="dydis">
                <?php print $arr['grietine']['size']; ?>
            </span>
        </div>
    </body>
</html>    
