<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$confuser= "admin";
$confpass= "1234";

if ($usuario == $confuser && $contrasenia == $confpass) {
  header ( "location:listar.php");
}
else {
    header ( "location:error.html");
    }

?>