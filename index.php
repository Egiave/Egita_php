<?php

$sunny = 1;

if ($sunny) {
    print 'Sauleta';
} else {
    print 'Debesuota';
}

$x = 0;

if ($x == 1) {
    print 'x yra 1';
} elseif ($x == 2) {
    print 'x yra 2';
} else {
    print 'Nei tas, nei tas';
}

$distance = rand(800, 10000);
$consumption = 7.5;
$price_1 = 1.3;

$fuel_total = round(($distance * 7.5) / 100);
$price_trip = round($fuel_total * $price_1);
$text = 'Nuvažiavus ' . $distance . ' km, ' . ' mašina sunaudos ' . $fuel_total . ' l ' . ' kuro. ' . ' Kaina: ' . $price_trip . ' pinigų.';

$my_money = 100;
If ($my_money >= $price_trip) {
    $isvada = 'galiu';
} else {
    $isvada = 'negaliu';
}

$text2 = 'Išvada: Aš galiu sau tai ' . $isvada . ' leisti.';

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && $grizai_isgeres) {
    $atsakymas = 'Miegosi ant sofos, nes grįžai vėlai ir išgėręs.';
} elseif ($grizai_velai && !$grizai_isgeres) {
    $atsakymas = 'Nemiegosi ant sofos, nes negrįžai išgėręs.';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $atsakymas = 'Nemiegosi ant sofos, nes negrįžai vėlai.';
} else {
    $atsakymas = 'Nemiegosi ant sofos, nes nieko nepadarei.';
}

$oras = rand(0, 1);

if ($oras) {
    $img1 = 'https://cdn.iconscout.com/icon/free/png-256/brightness-summer-sun-sunny-hot-38953.png';
    $tekstas = 'Sauleta';
} else {
    $img1 = 'https://cdn2.iconfinder.com/data/icons/wthr/32/cloud-512.png';
    $tekstas = 'Debesuota';
}


$oras = rand(0, 1);

if ($oras) {
    $css_class = 'sauleta';
    $tekstas = 'Saulėta';
} else {
    $css_class = 'debesuota';
    $tekstas = 'Debesuota';
}

$sunny = rand(0, 1);
$rain = rand(0, 1);

if ($sunny && $rain) {
    $css_class = 'fas fa-rainbow';
    $textone = 'Rainbow';
} elseif ($sunny && !$rain) {
    $css_class = 'fas fa-sun';
    $textone = 'Sunny';
} elseif (!$sunny && $rain) {
    $css_class = 'fas fa-cloud-showers-heavy';
    $textone = 'Rain';
} else {
    $css_class = 'fas fa-cloud';
    $textone = 'Cloudly';
}

if (date('s') % 2 == 0) {
    $class = 'kvadratas';
    $text = date('s');
} else {
    $class = 'apskritimas';
    $text = date('s');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1">
        <title>Klases darbas</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style type="text/css">
            .rainbow {
                background-image: url('https://cdn.iconscout.com/icon/free/png-256/brightness-summer-sun-sunny-hot-38953.png');
                background-size: cover;
                height: 10%;
                width: 5%;
            }
            .debesuota {
                background-image: url('https://cdn2.iconfinder.com/data/icons/wthr/32/cloud-512.png');
                background-size: cover;
                height: 6%;
                width: 3%;
            }

            .sauleta {
                background-image: url('https://cdn.iconscout.com/icon/free/png-256/brightness-summer-sun-sunny-hot-38953.png');
                background-size: cover;
                height: 10%;
                width: 5%;
            }
            .debesuota {
                background-image: url('https://cdn2.iconfinder.com/data/icons/wthr/32/cloud-512.png');
                background-size: cover;
                height: 6%;
                width: 3%;
            }
        </style>
        <style type="text/css">
            .kvadratas {
                height: 150px;
                width: 150px;
                background-color: red;
            }
            .apskritimas {
                height: 150px;
                width: 150px;
                border-radius: 50%;
                background-color: blue;
            }
            .flex {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: center;
                align-content: center;
                float: none;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <?php
        print $text . '<br>';
        print $text2;
        ?>

        <h1><?php print $atsakymas; ?></h1>

        <img style="width: 3%;" src="<?php print $img1; ?>">
        <?php print $tekstas; ?>

        <div class="container">
            <div class="<?php print $css_class; ?>"></div>
            <p><?php print $tekstas; ?></p>
        </div>

        <div class="container">
            <h1 class="<?php print $css_class; ?>">
                <?php print $textone; ?>
            </h1>
        </div>

        <div class="container">
            <div class="<?php print $css_class; ?>">
                <p class="fas fa-rainbow">
                    <?php print $textone; ?>
                </p>
            </div>
        </div>

        <div class="container">
            <div class="<?php print $css_class; ?>">
                <p class="fas fa-rainbow">
                    <?php print $textone; ?>
                </p>
            </div>
        </div>
        
        <div class="flex <?php print $class ?>">
            <p><?php print $text; ?></p>
        </div>
        
    </body>
</hmtl>    
