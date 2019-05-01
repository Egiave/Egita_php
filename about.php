<?php

$grikiai_start = 5000;
$grikiai = $grikiai_start;
$survive_days = 0;
$result = "";

for($day = 1; $day < 100; $day++){
      $per_diena = rand(200, 500);
      if ($grikiai >= 500){
          $grikiai -= $per_diena;
          $survive_days++;
          $result .= "Grikiu yra $grikiai per $survive_days dienas." . '<br>';
      }else{
          $result .= "Paskutine diena $survive_days" . "grikiu liko $grikiai " . '<br>';
          break;
      }
 }

?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
    <body>
        <?php print $result; ?>
    </body>
</html>
