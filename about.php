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
$draugo_atmintis = [
            'Penktadienis',
	    'Paskaita',
            'Draugai',
	    'Baras',
            'Alus',
            'šašlykas',
	    'ežeras',
	    
]

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
       <h1>Kas buvo penktadienį ?!</h1>
	<h2>Mano atmintis</h2>
	<p>
            <ul> <!-- foreach -->
                <?php foreach($mano_atmintis as $value): ?>
                <li> 
                        <?php print $value; ?>
                </li>
                <?php endforeach; ?>
            </ul><!-- endforeach -->
	</p>
	<?php 
            print '#' .$rand_flashback . ': ' . $mano_atmintis[$rand_flashback] ;
	 ?>
        <h2>Draugo atmintis:</h2>
            <ul> <!-- foreach -->
                <?php foreach($draugo_atmintis as $value): ?>
                <li> 
                        <?php print $value; ?>
                </li>
                <?php endforeach; ?>
            </ul><!-- endforeach -->
    </body>    
</html>    
