 <?php 
 
 $string = 'Hello'; 
 $integer = 0;
 $float = 1.234;
 $boolean = true;
 $nothing = null;
 
 $image = 'https://images.theconversation.com/files/137600/original/image-20160913-4948-6fyxz.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip';
 $image2 = 'https://amp.thisisinsider.com/images/5b61765ebda1c72b008b4567-750-562.jpg';
 $image3 = 'https://static.dezeen.com/uploads/2016/08/zhangjiajie-grand-canyon-glass-bridge-haim-dotan_dezeen_2364_ss_1-852x609.jpg';
 
 $skola = rand(1, 100); 
 $graza_1 = rand(101, 200);
 $graza_2 = rand(201, 300);
 
$siukslines_turis = 40;
$siuksliu_turis_avg_per_day = 20;
$max_kaupo_turis = rand(10, 40);
$pilna_siuksliu_deze = $siukslines_turis + $max_kaupo_turis;
$dienu = floor($pilna_siuksliu_deze / $siuksliu_turis_avg_per_day);
$text = "Po $dienu dienų " . '(' . date('Y-m-d', strtotime("+ $dienu day")) . ')';
$text .= ' pirk gėlių ir šampano, jeigu nori, kad žmona šiukšles išneštų pati.';



$time = date('s');
$timer = $time % 10;
$explo = $timer<1;

$a = 6;
$b = 10;
$c = 51;
$d = 12;
$e = 3;
$f = 0;

$suma = $a + $c;
$minusas = $c - $d;
$dalyba = $a / $e;
$daugyba = $b * $e;
$kvadratu = $e ** 2;
$kvadratu2 = $e ** $e;
$modulo = $d % $b;
$pliusVienas = ++$e;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klases darbas</title>
        <style type="text/css">
            .imgboom {
                background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSW6ILKN600XbXsaU0Uqkkdj8ALJJhx5ApqTnmzbMWSUYA8rLoC');
                backgroud-size: cover;
                height: 250px;
                width: 200px;
            }
            .imgboom-1 {
                background-image: url('https://img.pixers.pics/pho_wat(s3:700/FO/40/93/54/04/700_FO40935404_c2b5894743927528079b347276f36426.jpg,700,473,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,423,jpg)/stickers-cartoon-bang.jpg.jpg');
                backgroud-size: cover;
                height: 250px;
                width: 200px;
            }
         </style>
    </head>
    <body>
        <?php print "String: $string <br>"; ?>
        <?php print "Integer: $integer <br>"; ?>
        <?php print "Float: $float <br>"; ?>
        <?php print "Boolean: $boolean <br>"; ?>
        <?php print "Nothing: $nothing <br>"; ?>
        
        <img style="width: 20%;" src="<?php print $image; ?>">
        <img style="width: 20%;" src="<?php print $image; ?>"> 
        <img style="width: 20%;" src="<?php print $image; ?>">
        <img style="width: 20%;" src="<?php print $image; ?>">
        <img style="width: 20%;" src="<?php print $image2; ?>">
        <img style="width: 20%;" src="<?php print $image2; ?>">
        <img style="width: 20%;" src="<?php print $image3; ?>">
        <img style="width: 20%;" src="<?php print $image3; ?>">
        
       
        <h1>Skolos skaiciuokle</h1>
        <h2>Jei paėmei <?php print $skola; ?> jievru:</h2>
        <h3>su dviem kabančiais grąžinsi <?php print $graza_1; ?> eurų</h3>
        <h3>su vienu kabančiu grąžinsi <?php print $graza_2; ?> eurų</h3>
        
        <h1>Po kelių dienų kils barnis?</h1>
        <p><?php print $text; ?></p>
       
        <div class="imgboom-<?php print $explo; ?> imgboom"></div>
        
        <?php 
        
        "print $time <br>";
        print $timer;
        print $explo;
        
        ?>
         <?php 
        
        print $suma . '<br>';
        print $minusas . '<br>';
        print $dalyba . '<br>';
        print $daugyba . '<br>';
        print $kvadratu . '<br>';
        print $kvadratu2 . '<br>';
        print $modulo . '<br>';
        print $pliusVienas . '<br>';
        
        ?>
        
        
        
    </body>
</hmtl>    
