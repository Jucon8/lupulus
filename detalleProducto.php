<?php
session_start();

$titulo="Detalle del Producto";
?>

<!DOCTYPE html>
<head>
  <?php include("head.php") ?>  
  </head>
  <body id="detalleProducto">
    <!--Inicio header-->
    <?php require_once 'header.php' ?>

    <!-- barra sm- -md -->
    <div class="d-lg-none">
      <nav class="navbar navbar-expand-md navbar-light" style="text-transform:capitalize; background-color:#000">
        <a class="navbar-brand bg-white rounded" href="index.php">Lupulus</a>
        <button class="navbar-toggler bg-white text-dark" type="button" data-toggle="collapse" data-target="#nav-prod" aria-controls="nav-prod" aria-expanded="false" aria-label="Toggle navigation">
          Productos
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-prod">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                materia prima
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">lupulo</a>
                <a class="dropdown-item" href="#">cebada</a>
                <a class="dropdown-item" href="#">malta</a>
                <a class="dropdown-item" href="#">levadura</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                embotellado
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">botellas</a>
                <a class="dropdown-item" href="#">tapas</a>
                <a class="dropdown-item" href="#">precintos</a>
              </div>
            </li>
            <li class="d-lg nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                equipamiento
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">ollas</a>
                <a class="dropdown-item" href="#">medicion</a>
                <a class="dropdown-item" href="#">enfriamiento</a>
                <a class="dropdown-item" href="#">filtros</a>
                <a class="dropdown-item" href="#">otros</a>
              </div>
            </li>
            <li class="d-lg nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                kit de equipos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Accesorios</a>
                <a class="dropdown-item" href="#">coccion</a>
                <a class="dropdown-item" href="#">molienda</a>
                <a class="dropdown-item" href="#">cervezas</a>
              </div>
            </li>
            <li class="d-lg nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                barriles
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">madera</a>
                <a class="dropdown-item" href="#">acero inoxidable</a>
                <a class="dropdown-item" href="#">otros</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Page Content -->
    <div class="container-fluid body">
      <div class="row">

        <div class="d-none-sm d-none-md col-lg-3 pb-3" id="lista">
          <h1 class="my-4">{{Aca iria el nombre del producto elegido...}}</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Accesorios</a>
            <a href="#" class="list-group-item">Coccion</a>
            <a href="#" class="list-group-item">Enfriado</a>
            <a href="#" class="list-group-item">Fermentacion</a>
            <a href="#" class="list-group-item">Kit de equipos</a>
            <a href="#" class="list-group-item">Molienda</a>
            <a href="#" class="list-group-item">Cervezas</a>
          </div>
        </div>

        <!-- /.col-lg-3 -->

        <div class="col-lg-9 pt-3 pb-3" style="background-color:rgba(255,255,255,0.5)">

          <div class="card mt-4 ">

            <img class="card-img-top img-fluid p-3" style="width: 60%; margin: 0 auto;" src="img/fermentadores.jpg" alt="FERMENTADORES">

            <div class="card-body">

              <h3 class="card-title">Equipo de fermentacion Pro3000</h3>
              <h4>$17000</h4>
              <p class="card-text">44MAG EQUIPAMIENTO CERVECERO</p>
              <p class="card-text">Bloque cocción 200lts FULL <br> Olla de licor 150 lts<br>Fondo en 2mm , Cilindro en 2mm, tapa con bisagra en 1,5mm<br>Encamisada, con salida lateral de gases de combustión de 4” y contención de llama<br>Termómetro con cuerpo de acero<br>Quemador de 30000 kcal<br><br></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 calificacion de los usuarios
            </div>
            <button type="button" class="btn btn-secondary btn-lg">Añadir al carrito <ion-icon name="cart"></ion-icon>
            </button>

            <button type="button" class="btn btn-secondary btn-sm">Agregar a favoritos</button>
            <button type="button" class="btn btn-secondary btn-sm">Preguntas frecuentes</button>

          </div>


        </div>
        <!-- /.card -->


        <!-- /.card -->

      </div>

      <!-- /.col-lg-9 -->

    </div>
    </div>

    <footer>
      <?php require_once 'desarroladoPor.php' ?>
    </footer>
    <?php require_once 'scripts.php' ?>
  </body>
