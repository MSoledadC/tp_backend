<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda_ropa_p7");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
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
<body class="body_listar">
<header>
    <nav class="navbar navbar-dark ">
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
              <a button type="button" class="btn btn-black dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown" aria-expanded="false">
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
            <a  class="nav-link index_a" href="login.html">Vendedores</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </header>
<main class="main_filtros">
    <h1>Descripcion del Producto</h1>
  
  <?php
  // 6) asignamos a diferentes variables los respectivos valores del array $datos.
  // este paso no es estrictamente necesario, pero es mas practico
  //para despues llamarlos solo con el nombre de la variable
  $tipo_de_prenda=$datos["tipo_de_prenda"];
  $marca=$datos["marca"];
  $talle=$datos["talle"];
  $precio=$datos["precio"];
  $imagen=$datos['imagen'];
  $link=$datos["precio"];
  $colores=$datos["colores"];?>
  
  <section>
    <div class="container">
    <div class="row listar">
      <div class="card_listar w-50">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($imagen)?>" alt="..." />
        <div class="card-body">
        <h5 class="card-title">Marca: <?php echo $marca;?></h5>
          <p class="card-text"><?php echo $tipo_de_prenda; ?></p>
          <p class="card-text">Talle: <?php echo $talle?></p>
          <p class="card-text">Colores: <?php echo $datos["colores"];?></p>
          <p class="card-text">$<?php echo $datos["precio"];?></p>
          
          <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
            data-preference-id="118913702-015bb7b8-ebcd-4061-880a-54d15531ed38" data-source="button"></script>
        </div>
      </div>
    </div>
  </section>
  <div class="section_verproducto">
      <a href="productos.php"><button type="button" class="btn btn-dark">Volver a tienda</button></a>
    </div>
</main>
  <footer>
    MSoledadC©2022 <span class=" jam jam-map-marker">Bahía Blanca- Bs. As.</span>
      <div class=" btn-group-vertical" role="group" aria-label="Vertical button group">
        <a href="https://github.com/MSoledadC" target="_blank">
          <img class="logo" src="imagenes/GitHub-Mark-32px.png" alt="logo_github" />
        </a>
    </div>
  </footer>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>