<?php

$kates = rand (1, 3);
$sunys = rand (1, 3);
$katasuniai = 0;

for ($k =1; $k <= $kates; $k++) {
    for ($s = 1; $s <= $sunys; $s++) {
        $success = rand (0, 1); 
    
        if ($success = 1) {
            $katasuniai++;  
            break;
    }
  }
}

$text = "Event'e dalyvavo $kates katės ir $sunys šunys.<br>"
        . "Katašunių išeiga: $katasuniai";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>uzduotis</title>
    </head>
    <body>
        <p>
            <?php print $text; ?>
        </p>
    </body>
    
</html>    
