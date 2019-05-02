<?php

/**
 * @return array 3x3 random array
 */
function tekstas($text) {
    if(mb_strlen($text) <= 100) {
       return $text;
    }
    return mb_strcut($text, 0, 97) . '...';
}

$text = 'Because of the flexible itinerary it was possible to adapt the sights to the number of expected traffic for festivities in Kaunas. Starting with sad history of the Nazi regime killing about 100000 people from Vilnius and just burying the remains in the Paneriai Forest. With the good weather we continued to Kaunas to see many of its churches, the little fortress walking around most of the time. When we finally got to Trakai Castle I learnt about the way of defending the different parts of the castle, how the islands were connected by bridges and what else to do in Trakai. I highly recommend this tour.';
print tekstas($text) . '<br>';

function mh($text) {
   $text = str_replace('sudas', '***', $text);        
    $text = str_replace('pyp', '***', $text);  
    print $text . '<br>';
} 

mh('sudas tas gaidys pyp mane');


function replaced($text) {
   return str_replace('sudas', '***', $text);           
} 
 
$text = 'sudas tas gaidys sudas mane';
print replaced($text);

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









