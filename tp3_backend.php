<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3_backend.php</title>
</head>
<body>
    
    <h1>Ejercicio 1</h1>

    <?php
     $i = 1;
    ?>

    <?php
    print "<p> Números  del 1 al 100 </p>\n";
     for ($i =1; $i < 101; $i++) {
        echo "<p> $i </p>\n";
        } 
    ?>

<br><hr>

    <h1>Ejercicio 2</h1>

    <?php
     $i = 100;
    ?>

    <br>


    <?php
    print "<p> Números  del 100 al 1 </p>\n";
     for ($i =100; $i >0; $i--) {
        echo "<p> $i </p>\n";
        } 
    ?>

    <br><hr>

    <h1>Ejercicio 3</h1>
     
    
    <?php
     $i = 2;
    ?>

    <br>

    <?php
    print "<p> Números pares del 1 al 100 </p>\n";
     for ($i =2; $i < 101; $i= $i+2) {
        echo "<p> $i</p>\n";
        } 
    ?>

    <br><hr>
    <h1>Ejercicio 4</h1>

    <?php
     $i = 1;
    ?>

    <br>


    <?php
    print "<p> Números impares del 1 al 100 </p>\n";
     for ($i =1; $i < 101; $i= $i+2) {
        echo "<p> $i</p>\n";
        } 
    ?>
   
    <br><hr>
    <h1>Ejercicio 5</h1>

    <?php
     $suma = 0;
       
    ?>

    <br>


    <?php
    print "<p> Suma de los Números de 1 a 20 </p>\n";
     for ($i =1; $i < 21; $i++) {
        echo "$suma+ $i =", $suma + $i,"<br>";

        $suma+=$i;
        } 

        echo "<p> TOTAL =  $suma</p>\n";
    ?>

    <br><hr>
    <h1>Ejercicio 6</h1>

    <?php
     $suma = 2;
          
    ?>

    <br>


    <?php
    print "<p> Suma de los Números pares de 1 a 20 </p>\n";
     for ($i =2; $i < 21; $i= $i+2) {
        echo "$suma+ $i =", $suma + $i, "<br>";
        $suma+=$i;

        } 

        echo "<p> TOTAL = $suma</p>\n";
    ?>

</body>
</html>


  






