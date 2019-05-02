<?php

/**
 * 
 * @return array generuoja 3x3 random array
 */

function slot_run (){
    $array = [
        [rand(0,1), rand(0,1), rand(0,1)],
        [rand(0,1), rand(0,1), rand(0,1)],
        [rand(0,1), rand(0,1), rand(0,1)],
    ];
    return $array;
}
var_dump (slot_run());
    
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body>
    </body>
</html>
