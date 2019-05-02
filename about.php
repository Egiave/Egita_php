<?php

/**
 * @return array 3x3 random array
 */

function slot_run() {
    $array = [];

    for ($x = 1; $x <= 5; $x++) {
        $row = [];

        for ($z = 1; $z <= 5; $z++) {
            $row[] = rand(0, 1);
        }

        $array[] = $row;
    }

    return $array;
}

var_dump(slot_run());

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klasės darbas, 05.02</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    </body>
</html>









