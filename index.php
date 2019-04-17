 <?php 
 
 $string = 'Hello'; 
 $integer = 0;
 $float = 1.234;
 $boolean = true;
 $nothing = null;
 
 $image = 'https://images.theconversation.com/files/137600/original/image-20160913-4948-6fyxz.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip';
 $image2 = 'https://amp.thisisinsider.com/images/5b61765ebda1c72b008b4567-750-562.jpg';
 $image3 = 'https://static.dezeen.com/uploads/2016/08/zhangjiajie-grand-canyon-glass-bridge-haim-dotan_dezeen_2364_ss_1-852x609.jpg';
 
 $euru = rand(1, 100); 
 $suvienu = rand(101, 200);
 $sudviem = rand(201, 300);
 
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klases darbas</title>
    </head>
    <body>
        <?php print "String: $string <br>"; ?>
        <?php print "Integer: $integer <br>"; ?>
        <?php print "Float: $float <br>"; ?>
        <?php print "Boolean: $boolean <br>"; ?>
        <?php print "Nothing: $nothing <br>"; ?>
        
        <img src="<?php print $image; ?>">
        <img src="<?php print $image; ?>"> 
        <img src="<?php print $image; ?>">
        <img src="<?php print $image; ?>">
        <img src="<?php print $image2; ?>">
        <img src="<?php print $image2; ?>">
        <img src="<?php print $image3; ?>">
        <img src="<?php print $image3; ?>">
        
        <div>
            <h1>Skolos skaiciuokle</h1>
            <h3>Jei paėmei <?php print $euru; ?>jievru</h3>
            <h3>Su dviem kabančiais grąžinsi <?php print $sudviem; ?></h3>
            <h3>Su vienu kabančiu grąžinsi <?php print $suvienu; ?></h3>
        </div>
    </body>
</hmtl>    
