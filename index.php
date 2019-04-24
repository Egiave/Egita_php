<?php
    
$grikiai_start = 5000;
$praejo_dienu = 0;
$per_diena = rand(200, 500);
 
for ($grikiai = $grikiai_start; $grikiai > 0;  $grikiai -= rand(200, 500)) {
    $praejo_dienu++;
    print "suvalgysiu $per_diena ir liks $grikiai grikiu <br>";
}

$date = date('Y-m-d', strtotime("+$praejo_dienu days"));
$text = "Jei turėsiu $grikiai_start g. grikių, valgysiu juos $praejo_dienu dienų."
        . " Jei pradėsiu šiandien, grikiai baigsis $date datą."
        
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
