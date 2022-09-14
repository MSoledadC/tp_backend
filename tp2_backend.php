<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend.php</title>
</head>
<body>
    
    <h1>ejercicio 1</h1>

    <?php
     $variable1 = 10
    ?>

    <?php
     if ($variable1 > 0 ) {
        echo " $variable1 numero positivo";
     }

    ?>

<br><hr>

    <h1>ejercicio 2</h1>

    <?php
     $variable2 = 7
    ?>


    <?php
     if ($variable2 > 1 &  $variable2 < 10 ) {
        echo "$variable2 es mayor a 1 y  $variable2 es menor a 10";
        }
        ?>

    <br><hr>

    <h1>ejercicio 3</h1>
     
    <?php
     $variable3 = 12
    ?>


    <?php
     if ($variable3 > 10 or $variable3 < 2 ) {
        echo "$variable3 es mayor a 10";
        }
        
        ?>

    <br><hr>

    <h1>ejercicio 4</h1>
    
    <?php

        $n1 = 8 ;
        $n2 = 4 ;
        
    ?>

    <?php

     if ($n1 > $n2) {
        echo "se muestra suma".($n1 + $n2);
     }
     
    ?>
    <br><hr>

    <?php

    if ($n1 > $n2) {
        echo "se muestra resta".($n1 - $n2);
    }

    ?>


</body>
</html>

