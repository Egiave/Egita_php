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
        'nuolaida' => 10,
        'kaina su nuolaida' => 7.65
    ],
    [   
        'name' => 'Vynas',
        'kaina' => 10,
        'nuolaida' => 10,
        'kaina su nuolaida' => 9
    ],
    [   
        'name' => 'Zemaitijos pienas',
        'kaina' => 2,
        'nuolaida' => 0
   ],
];
      
foreach ($gerimai as $index => $gerimas) {
    if ($gerimas['nuolaida'] > 0) { 
        $gerimai[$index]['css_class'] = 'akcija';
        $kaina_su_nuolaida =  $gerimas['kaina'] * (100 - $gerimas['nuolaida']) / 100; 
        $gerimai[$index]['kaina_su_nuolaida'] = $kaina_su_nuolaida;
    } else {
        $gerimai[$index]['css_class'] = 'be-akcijos';
    }
}

//&$gerimas
//unset ($gerimas);
//var_dump($gerimai);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, antradienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css"> 
         <style type="text/css">
             .akcija {
                font-size: 20px;
             }
            .akcija .kaina {
                text-decoration: line-through;
            }
            .be-akcijos {
                font-size: 10px;
            }
            
            
        </style>
        
    </head>
    <body>
       <ul>
            <?php foreach ($gerimai as $gerimas): ?>
                <li class="<?php print $gerimas['css_class']; ?>">
                    <span><?php print $gerimas['name']; ?></span>
                    <?php if (isset($gerimas['kaina_su_nuolaida'])): ?>
                    <span><?php print $gerimas['kaina_su_nuolaida']; ?></span> 
                    <?php endif; ?>
                    <span class="kaina"><?php print $gerimas['kaina']; ?></span>
                </li>
            <?php endforeach; ?>    
        </ul>
    </body>
</html>
