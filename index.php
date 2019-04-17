 <?php
    $background_colors = array('#282E33', '#25373A', '#164852', '#495E67', '#FF3838');
    $rand_background = $background_colors[array_rand($background_colors)];
    $font =   array(
      "Arial", 
      "monospace", 
      "Comic Sans MS", 
      "Times", 
      "Lucida Sans", 
      "Verdana", 
      "Helvetica"
    );

    $FontSize = Array(12,13,14,15,16,17);
//    $random_Size = $font_size[array_rand($size)];
    
    $color = array(
    1 => "#FF0000",
    2 => "#006600",
    3 => "#000066"
); 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydės ir
         <?php 
         //Start point of our date range.
            $start = strtotime("16 April 2019");
 
        //End point of our date range.
            $end = strtotime("16 APril 2029");
 
        //Custom range.
            $timestamp = mt_rand($start, $end);
 
           //Print it out.
            echo date("Y-m-d", $timestamp);
         ?>
        </title>
    </head>
       <body style="background: <?php echo $rand_background; ?>;">
            <h1>Egita - Galbūt turėsiu <?php $min=1; $max=5; echo rand($min,$max); ?> vaikų(us)!<h1> 
            <p>Trumpas nebebus prezidentu
             <?php 
                $start = strtotime("16 April 2021");
                $end = strtotime("16 APril 2041");
                $timestamp = mt_rand($start, $end);
                echo date("Y-m-d", $timestamp);
             ?>.
            </p>
            <h1 style="font-family: <?php echo $font[rand(0,6)]; ?>;">Aš keičiu savo šriftą</h1>
<!--            <h1 style="font-size: <?php echo $fontSize[rand(12,17)]; ?>;">Aš keičiu savo dydį</h1>-->
            <p><?php 
            echo '<font color="'.$color[rand(1,3)].'">Aš keičiu savo spalvą</font>';?></p>
            
<!--            <img src="..\PR\Desktop\<?php echo rand(1,6); ?>.png" />
-->         <p>
            <img src="<?php echo rand(1,6);?> .png" >
            </p>
<!--             <p>
            <img src="...\Desktop\1.png">
            </p>-->
        </body>
</html>


