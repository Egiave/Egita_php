<?php

$daiktai = [
    [
        'name' => 'Kremas',
        'size' => '5',
        'color' => 'šviesus'
    ],
    [
        'name' => 'Riešutai',
        'size' => '10',
        'color' => 'tamsus'
    ],
    [
        'name' => 'Raktai',
        'size' => '10',
        'color' => 'tamsus'
    ],
    [
        'name' => 'Lupdazis',
        'size' => '10',
        'color' => 'šviesus'
    ],
];

//random masyvas
$random_name = $daiktai[rand(0, count($daiktai) - 1)];

//randomina name su atsitiktiniu skaiciumi
$name = $random_name['name'];

//randomina size su atsitiktiniu skaiciumi (tuo paciu kaip $name)
$size = $random_name['size'];

//randomina tamsus/sviesus su atsitiktiniu skaiciumi (tuo paciu kaip $name)
$color = $random_name['color'];

//$random_name = $daiktai[rand(0, count($daiktai) - 1)];
//$name = $random_name['name'];
//$size = $random_name['size'];
//$color = $random_name ['color'];
//print 'name =>' . $name . '<br>';
//print 'size =>' . $size . '<br>';
//print 'color =>' . $color . '<br>';
//isspausdinamas tekstas
$text = "$name užima $size cm3. Daiktas $color";
// <?php print $name; ?> užima <?php print $size; ?> cm3. Daiktas <?php print $color ?>

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, antradienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <p>
            <?php print $text; ?>
        </p>
    </body>    
</html>

