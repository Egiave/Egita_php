<?php

/**
 * @return array 3x3 random array
 */
function slot_run() {

    $empty_arr = [
        [],
        [],
        []
    ];

    $empty_text = "<table>";

    foreach ($empty_arr as $inside_arr) {

        $rand_value = rand(0, 10);
        $inside_arr[] = $rand_value;


        if ($rand_value % 2 == 0) {

            $empty_text .= "<tr> "
                    . "<td class=yellow>$rand_value </td>";
        } else {

            $empty_text .= "<tr> "
                    . "<td class=blue>$rand_value </td>";
        }

        $rand_value = rand(0, 10);
        $inside_arr[] = $rand_value;

        if ($rand_value % 2 == 0) {

            $empty_text .= "<td class=yellow> $rand_value </td>";
        } else {

            $empty_text .= "<td class=blue> $rand_value </td>";
        }


        $rand_value = rand(0, 10);
        $inside_arr[] = $rand_value;


        if ($rand_value % 2 == 0) {

            $empty_text .= "<td class=yellow> $rand_value </td>";
        } else {

            $empty_text .= "<td class=blue> $rand_value </td>";
        }


        var_dump($inside_arr);
    }

    print $empty_text;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>3 X 3</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            table {
                border-collapse: collapse;
            }

            td {
                padding: 10px;
            }

            .blue {
                background: blue;
            }

            .yellow {
                background: yellow;
            }
        </style>
    </head>
    <body>
        <?php slot_run(); ?>
    </body>
</html>









