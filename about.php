<?php

$dishes = [
    'nut_salad' => [
        'name' => 'Nut_Salad',
        'price' => 3.44,
        'ingredients' => [
            'Nuts',
            'Joghurt'
        ]
    ],
    'bulldish' => [
        'name' => 'Bulldish',
        'price' => 4.77,
        'ingredients' => [
            'Rice',
            'Soja Sauce'
        ]
    ]
];

//print $dishes['nut_salad']['img'] . '<br>';
//print $dishes['bulldish']['img'];
//    ($index == 'bulldish');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases darbas, pirmadienis</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .image1 {
                background-image: url("https://img.taste.com.au/EU9D0DbT/w720-h480-cfill-q80/taste/2016/11/ripper-thai-beef-noodle-salad-62642-1.jpeg");
                background-size: cover;
                height: 50vh;
                width: 50vh;
                border: 3px solid black;
            }
            .image2 {
                background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR54uqemQdRQK76vYKxQkee7jDFrTo9850qO4l7zT4knphQ2SD5");
                background-size: cover;
                height: 50vh;
                width: 50vh;
                border: 3px solid black;
            }
        </style>
    </head>
    <body>
        <ul>
            <?php foreach ($dishes as $dishes_index => $dish): ?>

                <?php if ($dishes_index == 'nut_salad'): ?>
                    <?php $dish['css_class'] = 'image1'; ?>
                <?php else: ?>
                    <?php $dish['css_class'] = 'image2'; ?>
                <?php endif ?>
                <li class="<?php print $dish['css_class']; ?>">
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

