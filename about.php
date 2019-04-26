<?php

function amzius ($amzius) {
if ($amzius < 0) {
    return 'Klaida';
}    
if ($amzius < 18) {
   return 'nepilnametis';
}  if ($amzius < 65) {
   return 'pilnametis';  
}  if ($amzius < 100) {
   return 'pensininkas'; 
}  return 'negyvas'; 
}

print amzius(70);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
       
    </body>    
</html>    
