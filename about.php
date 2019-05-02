<?php

/**
 * generuoja dinamine matrica
 * @return array matrica
 */
function slot_run($size) {
    $array = [];

    for ($x = 1; $x <= $size; $x++) {
        $row = [];

        for ($z = 1; $z <= $size; $z++) {
            $row[] = rand(0, 1);
        }

        $array[] = $row;
    }

    return $array;
}

var_dump(slot_run(10));

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









