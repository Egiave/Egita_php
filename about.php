<?php

$daiktai = [
       'Kremas',
       'Riešutai',
       'Raktai',
       'Lupdazis',   
];

$size = rand(0, 10);
$is_dark = rand(0, 1);
$rand_name = rand(0, count($daiktai) -1);

if ($is_dark == 1){
    $color = 'tamsus';
    
} else {
    $color = 'šviesus';
}

$text = "$daiktai[$rand_name] užima $size cm3. Daiktas $color.";



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

