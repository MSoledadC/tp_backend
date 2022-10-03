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
    <br>
    <?php
        $par = [2,4,6,8,10];
            foreach ( $par as $numerop) {
            print "<p>$numerop</p>\n";
    }
    ?>

    <br><hr>

    <h1>Ejercicio 2</h1>

    <br>

    <?php
    $variable1 = ["Pedro","Ana","34","1"];
    print_r ($variable1);

    ?>
    <br><hr>
    <h1>Ejercicio 3</h1>
     

    <?php
    $datos= ['Nombre' => "Pedro" , 'Apellido' => "Torres", 'Direccion' => "Av. Mayor 3703", 'Telefono' => "1122334455"];
    ?>

    <br><hr>
    <h1>Ejercicio 4</h1>
   
    <?php

    $cuidades = ["Madrid","Barcelona","Londres","New York", "Los Ángeles", "Chicago"]; 

    foreach ($cuidades as $index => $ciudad) {
    print "<p>La ciudad con el índice " . $index . " tiene el nombre " . $ciudad . "</p>\n";
    }

    ?>

    <br><hr>
    
    <?php
   
    for ($i = 0; $i < count($cuidades) ; $i++) {
     print ("<p>La ciudad con el índice " . $i . " tiene el nombre " . $cuidades[$i] . "</p>\n") ;
    } 
    
    ?>   

    <br><hr>

    <h1>Ejercicio 5</h1>

    <?php

    $cuidades = [
	    'MD' => 'Madrid', 
	    'BCL' => 'Barcelona',
	    'LD' => 'Londres',
	    'NY' => 'New York',
	    'LA' => 'Los Ángeles', 
	    'CCG' =>'Chicago'];

    foreach ($cuidades as $index => $ciudad) {
        print ("<p>El índice de " . $ciudad . " es " . $index . "</p>\n") ;
     }

    ?>

    
</body>
</html>


  






