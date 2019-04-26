<?php

$mano_atmintis = [
	    'Penktadienis',
	    'Paskaita',
	    'Baras',
	    'Viskis',
	    'Alus',
	    'Degtine',
	    'Alus',
	    'Pirmadienis',
	    'Paskaita'
	];

$rand_flashback = rand(0, count($mano_atmintis) - 1);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <h1>Kas buvo penktadienį?!</h1>
        <h2>Mano atmintis</h2>
            <ul> <!-- foreach -->
                <?php foreach($mano_atmintis as $value): ?>
                <li> 
                   <?php print $value; ?>
                </li>
                <?php endforeach; ?>
            </ul><!-- endforeach -->
                <?php 
//              print $mano_atmintis["$rand_flashback"];
                print '#' . $rand_flashback . ': ' . $mano_atmintis[$rand_flashback];
                ?>
    </body>    
</html>    
