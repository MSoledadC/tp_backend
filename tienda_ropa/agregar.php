<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda_ropa_p7");

$tipo_de_prenda = $_POST ['tipo_de_prenda'];
$marca = $_POST['marca'];
$talle = $_POST['talle'];
$precio = $_POST['precio'];

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen) VALUES ('','$tipo_de_prenda','$marca','$talle','$precio','$imagen')";

mysqli_query($conexion,$consulta);

header('location: index.html');
?>