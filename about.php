<?php

$grikiai_start = 5000;
$praejo_dienu = 0;

for ($grikiai = $grikiai_start; $grikiai > 0; $grikiai -= rand(200, 500)) {
    $praejo_dienu++;
}

$date = date('Y-M-d', strtotime("+$praejo_dienu days"));
$text = "Jei turesiu $grikiai_start g. grikiu, valgysiu juos $praejo_dienu dienu."
        . " Jei pradesiu siandien, grikiai baigsis $date data";

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
