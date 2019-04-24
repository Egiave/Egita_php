<?php

$x = rand (1, 10);


for ($z = 1; $z <= $x; $z++) {
    print "Tai yra $z-tasis ciklas <br>"; 
}    

$x = rand (1, 10);

$text = '';
        
for ($z = 1; $z < $x; $z++) {
    $text .= "Tai yra $z-tasis ciklas <br>"; 
} 

$kates = rand(1, 3);
$sunys = rand(1, 3);       
$katasuniai = 0;

for ($k = 1; $k <= $kates; $k++) {
    for ($s = 1; $s <= $sunys; $s++) {
    $success = rand(0, 1);
    
    if ($success) {
        $katasuniai++;
        break;
    }
  }
}
$text = "Event'e dalyvavo $kates katės ir $sunys šunys.<br>"
        . "Katašunių išeiga: $katasuniai";


$months = 12;
$kisene = 1000;
$alga = 700;


for ($months = 0; $months <12; $months++) {
    $islaidos = rand (300, 1200);
    $balansas = $kisene + $alga - $islaidos;
    
    if ($balansas <= 0) {
        print "Basta bus $months mėnesį";
        break;
    } else {
        $kisene = $balansas;
    }
}

$text = "likutis $balansas"; 




        

$pakelio_kaina = 3.75;
$surukyta = 0;
$surukyta2 = 0;
$viso_min = 0;
$rukymo_laikas = 5;
$div = '';

for ($day = 1; $day <= 365; $day++) {

  $weekday = date('N', strtotime("+$day days"));
  if ($weekday <= 4) {
      $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
      $surukyta += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
      $surukyta2 += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
      print $surukyta . "surukyta 1-4". "<br>"; 
      print $surukyta * 5 / 60 . "praleista valandu rukant" . "<br><br>";
  } elseif ($weekday == 5) {
      $cizos_fri = rand(10, 20); // Penktadienis
      $surukyta += $cizos_fri; // Kiek surukiau per penktadieni
      print $surukyta . "surukyta 5". "<br>"; 
      print $surukyta * 5 / 60 . "praleista valandu rukant" . "<br><br>";
  } else {
      $cizos_sat_sun = rand(1, 3); // Sestadienis-sek
      $surukyta += $cizos_sat_sun; // Kiek surukiau per sest-sek 
      print $surukyta . "surukyta 6-7". "<br>"; 
      print $surukyta * 5 /60 . "praleista valandu rukant" . "<br><br>";
  }
  $viso_min = $surukyta * 5;
}

for ($n = 0; $n <= $surukyta; $n++) {
      $div .= "<div class=\"image\"></div>";
}
    
$viso_hours = round($viso_min / 60);
//$viso_hours = round($surukyta * 5 / 60);
$kainuos2 = round($surukyta2 / 20 * 3.75);
$text2 = "Nerukydamas pirmadieni-ketvirtaideni sutaupyciau $kainuos2 eur.";
$kainuos = round($surukyta / 20 * 3.75);
$text = "Per metus surukysiu $surukyta cigareciu uz $kainuos eur.";

print "Per metus prastovesiu traukdamas $viso_hours valandu.";

?>
<?php

$grikiai = 5000;
$praejo_dienu = 0;

for (; $grikiai > 0;) {
    $per_diena = rand(200, 500);
    $praejo_dienu += 1; 
    $grikiai -= $per_diena;
    print "suvalgysiu $per_diena ir liks $grikiai grikiu" . "<br>";
}

$thedate = date('Y-m-d', strtotime("+$praejo_dienu days"));
$textone = "grikiai baigsis $thedate data";

?>

<?php

$months = 24;
$car_price_new = 30000;
$car_price_used = $car_price_new;
$santaupos = 15000;

for ($m = 1; $santaupos <= $car_price_used ; $m++) {
    $car_price_used -= round($car_price_used * 0.02);
    print "$m mėnesį verte $car_price_used" . '<br>';
    if ($santaupos >= $car_price_used) {
        print "Po $m menesiu turesiu tinkama pinigu suma. ";
    }
}

$pinigulikutis = $santaupos - $car_price_used;
$depreciated = round(100 - (($car_price_used / $car_price_new) * 100));
$texttwo = "Po 24 menesiu masinos verte bus: $car_price_used ir nuvertejo $depreciated procentu ir mano pinigu likutis bus $pinigulikutis eur.";



print $texttwo;


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>THE best</title>
        <style type="text/css">
        .image {
            background-image: url("https://www.varle.lt/blog/wp-content/uploads/2015/03/e-cigarete_kenkia.png");
            background-size: cover;
            height: 30px;
            width: 30px;
        }
        #cigaretes {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: stretch;
            align-content: stretch;
        }
        </style>
        
    </head>
    <body>
        
            <p>
                <?php print $text . ' ' . $text2 ;?>
            </p>
            <div id="cigaretes">
                <?php print $div; ?>
            </div>
            <section>
                <?php   print "suvalgysiu $per_diena ir liks $grikiai grikiu"; ?>
                <?php print $textone; ?>
            </section>
    </body>
</hmtl>    
