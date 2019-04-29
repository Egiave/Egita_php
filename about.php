<?php
//$mano_atmintis = [
//    'Penktadienis',
//    'Paskaita',
//    'Baras',
//    'Viskis',
//    'Alus',
//    'Alus',
//    'Alus',
//    'Pirmadienis',
//    'Paskaita'
//];
//
//$draugo_atmintis = [
//    'Penktadienis',
//    'Rytas',
//    'Baras',
//    'Viskis',
//    'Degtine',
//    'Degtine',
//    'Alus',
//    'Degtine',
//    'Samagonas',
//    'Antradienis'
//];
//
//$flashback_index = rand(0, count($mano_atmintis) - 1);
//$flashback_num = $flashback_index + 1;
//$flashback_text = "#$flashback_num: {$mano_atmintis[$flashback_index]}";
//
//$bendri_atsiminimai = [];
//foreach ($mano_atmintis as $prisiminimas) {
//    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
//    $duplikuojasi = in_array($prisiminimas, $bendri_atsiminimai);
//
//    if ($egzistuoja && !$duplikuojasi) {
//        $bendri_atsiminimai[] = $prisiminimas;
//    }
//}
//
//$array = [20, 30, 69];
//print $array[0] + $array[1] + $array[2];

$dishes = [
    'nut_salad' => [
        'name' => 'Nut_Salad',
        'price' => 3.44,
        'img' => 'https://img.taste.com.au/EU9D0DbT/w720-h480-cfill-q80/taste/2016/11/ripper-thai-beef-noodle-salad-62642-1.jpeg',
        'ingredients' => [
            'Nuts',
            'Joghurt'
        ]
    ],
    'bulldish' => [
        'name' => 'Bulldish',
        'price' => 4.77,
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR54uqemQdRQK76vYKxQkee7jDFrTo9850qO4l7zT4knphQ2SD5',
        'ingredients' => [
            'Rice',
            'Soja Sauce'
        ]
    ]
];

print $dishes['nut_salad']['img'];
print $dishes['bulldish']['img'];


//foreach($dishes as $key => $value) {
//    print $key . '<br>' . '<br>'; 
//    foreach ($value as $name => $names) {
//        print $name . '<br>' . '<br>';
//        print $names . '<br>';
//        foreach ($names as $some) {
//        print $some . '<br>' . '<br>';
//    }
//    }
//}

print $dishes['nut_salad']['name'];
print $dishes['nut_salad']['price'];
print $dishes['nut_salad']['ingredients'][0];
print $dishes['nut_salad']['ingredients'][1] . '<br>';

print $dishes['bulldish']['name'];
print $dishes['bulldish']['price'];
print $dishes['bulldish']['ingredients'][0];
print $dishes['bulldish']['ingredients'][1];

//    foreach($dishes as list($a, $b, $c)) {
//        print "A: $a; B: $b\n";
//    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, pirmadienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <ul>
            <?php foreach ($dishes as $dishes_index => $dish): ?>
                <li>
                    <?php print $dishes_index; ?>
                    <ul>
                        <?php foreach ($dish as $dish_index => $parameters): ?>
                            <li>
                                <?php print $dish_index; ?>
                                <?php if (is_array($parameters)): ?>
                                    <ul>
                                        <?php foreach ($parameters as $ingri): ?>
                                            <li>
                                                <?php print $ingri; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>    
                                <?php else: ?>
                                    <?php print $parameters . '<br>'; ?>
                                <?php endif; ?> 
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>



    </body>
</html>

