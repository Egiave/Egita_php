<?php

/**
 * generuoja dinaminę matricą
 * @param integer $size Matricos dydis
 * @return array
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

//var_dump(slot_run(10));
$size = rand(1, 10);
$array = slot_run($size);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klasės darbas, 05.02</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            div {
                border: 3px solid black;
                padding: 20px;
                margin: 20px;
                height: 5vh;
                width: 5vh;
            }
            section {
                display: flex;
                justify-content: center;
                align-items: baseline;
            }

            .yellow {
                background-color: blue;
            }

            .green {
                background-color: orange;
            }   
        </style>        
    </head>
    <body>
        <?php foreach ($array as $index => $value): ?>
            <section>
                <?php foreach ($value as $index => $random): ?>
                    <?php if ($random): ?>
                        <div class="yellow"></div>
                    <?php else: ?>
                        <div class="green"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>
    </body>
</html>









