<?php

//$isviso = 0;
//
//$array = [20, 30, 69];
//
//foreach ($array as $value) {
//    $isviso += $value; 
//    print "ciklo $value <br>";
//}
//
//print "Iš viso cikle yra $isviso" . '<br>';
//$animals = array('suo' => 'loja',
//    'kate' => 'miauksi',
//    'liutas' => 'riaumoja',
//    'gyvate' => 'šnypšia');
//
////foreach ($animals as $name => $sound){
//////     print $name.' '.$sound . '<br>';
////     print $animals[$name] . '<br>';
////}    
//
//foreach ($animals as $name){
//    print $name . '<br>';
//}    
//
//$numbers = array(1,2,3,4,5,);
//   print_r($numbers);
//   
//foreach ($numbers as &$number){
//    $number = $number * 2;
//}
//  print '<br>';
//  unset($number);
//  print_r($numbers);
  
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
