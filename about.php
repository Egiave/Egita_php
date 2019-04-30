<?php

$gerimai = [
    [
        'name' => 'Vilkmerges alus',
        'kaina' => 4.50,
        'nuolaida' => 0
    ],
    [
        'name' => 'Stumbro Degtine',
        'kaina' => 8.50,
        'nuolaida' => 10
    ],
    [
        'name' => 'Vynas',
        'kaina' => 10,
        'nuolaida' => 2 
    ],
    [
        'name' => 'Zemaitijos pienas',
        'kaina' => 2,
        'nuolaida' => 0
   ],
];

foreach ($gerimai as $index => $gerimas) {
    if ($gerimas['nuolaida'] > 0) {
        $gerimai[$index]['css_class'] = 'positive';
    } else {
        $gerimai[$index]['css_class'] = 'negative';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, antradienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
         <style type="text/css">
            .positive {
                font-size: 20px;
            }
            .negative {
                font-size: 10px;
            }
        </style>
        
    </head>
    <body>
       <ul>
            <?php foreach ($gerimai as $gerimas): ?>
                <li class="<?php print $gerimas['css_class']; ?>">
                    <span><?php print $gerimas['name']; ?></span>
                    <span><?php print $gerimas['kaina']; ?></span>
                </li>
            <?php endforeach; ?>    
        </ul>
    </body>
</html>
