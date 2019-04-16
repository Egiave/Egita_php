<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydės <?php print date('D', (strtotime('+1day'))) ; ?></title>
    </head>
    <body>
        <h1>Egita - PHM su manimi buvo ir <?php print date('H', (strtotime('-hour'))) . ' valanda! '; ?></h1>
        <p><?php print date(' Y ', (strtotime('+1year'))); ?>už kalnų!</p>  
    </body>
</html>
