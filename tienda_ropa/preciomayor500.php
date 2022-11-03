<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
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
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

    <section>
    <div class="container">
      <div class="row">

    <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "tienda_ropa_p7");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta= "SELECT*FROM ropa WHERE precio >= 500 ";

    // 3) Ejecutar la orden y obtenemos los registros

    $datos= mysqli_query ($conexion, $consulta);


    // 4) Mostrar los datos del registro
    while ($reg = mysqli_fetch_array($datos)) {?>
      <div class="card_listar col-sm-12 col-md-6 col-lg-3 ">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="")>
        <div class="card-body">
          <h5 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h5>
          <p> <?php echo $reg['tipo_de_prenda']; ?></p>
          <p><?php echo $reg['talle']; ?></p>
        <a href="ver.php?id=<?php echo $reg['id'];?>" class="card-body">
        <span class=" jam jam-coin"> <?php echo $reg['precio']; ?></span>
          </a>
      </div>
    </div>

    <?php } ?>

  </div>
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
