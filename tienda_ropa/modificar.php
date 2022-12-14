<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda_ropa_p7");


$id = $_GET['id'];


$consulta = "SELECT * FROM ropa WHERE id=$id";


$respuesta = mysqli_query($conexion, $consulta);

$datos=mysqli_fetch_array($respuesta);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de Ropa</title>
  <!-- vinculacion bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- vinculacion css -->
  <link rel="stylesheet" href="estilos.css">

  <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">

</head>

<body>
<header>
    <nav class="navbar navbar-dark " >
      <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="flex-direction: row;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Potrero Digital</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <h1 class="titulo">Tienda Sport</h1>
        <div>
          <li class="nav-item dropdown">
            <a class="nav-link nav-productos" href="productos.php">Productos</a> 
            <a button type="button" class="btn btn-black dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
                </button></a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <hr class="dropdown-divider">
              </li>
              
              <li><a class="dropdown-item" href="nike.php">Nike</a></li>
              <li><a class="dropdown-item" href="preciomayor500.php">Precio mayor a 500</a></li>
              <li><a class="dropdown-item" href="buzo.php">Buzo</a></li>
              <li><a class="dropdown-item" href="adidas.php">Adidas</a></li>  
            </ul>
          </li>
        </div>
          <li class="nav-item">
            <a class="nav-link" href="agregar.html">Agregar ropa</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </header>
  <main class="main_agregar">


        <?php
     
        $tipo_de_prenda=$datos["tipo_de_prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos de la prenda.</p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label>Tipo de prenda</label>
            <input type="text" name="tipo_de_prenda" placeholder="tipo_de_prenda" value="<?php echo "$tipo_de_prenda"; ?>">
            <label>Marca</label>
            <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
            <label>Talle</label>
            <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
            <label>Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
            <input class="btnenviar_agregar" type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button class="btnenviar_agregar" type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
        </form>
        <?php
   
        if(array_key_exists('guardar_cambios',$_POST)){

                    $tipo_de_prenda=$_POST['tipo_de_prenda'];
                    $marca=$_POST['marca'];
                    $talle=$_POST['talle'];
                    $precio=$_POST['precio'];
                    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        
            $consulta = "UPDATE ropa SET tipo_de_prenda='$tipo_de_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";

             
             mysqli_query($conexion,$consulta);

            
            header('location: index.html');

        }?>
</main>
  <footer>
    MSoledadC??2022 <span class=" jam jam-map-marker">Bah??a Blanca- Bs. As.</span>
      <div class=" btn-group-vertical" role="group" aria-label="Vertical button group">
        <a href="https://github.com/MSoledadC" target="_blank">
          <img class="logo" src="imagenes/GitHub-Mark-32px.png" alt="logo_github" />
        </a>
    </div>
  </footer>
    <!--<div class="col-md-6">
      <label for="inputEmail4" class="form-label">Tipo de prenda</label>
      <input type="text" name="tipo_de_prenda" placeholder="Tipo de prenda" required>
    </div>
    -->

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
crossorigin="anonymous"></script>
</body>

</html>

