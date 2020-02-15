<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>



<body id="detalleProducto">
  <!--Inicio header-->


  <!-- barra sm- -md -->


  <div class="d-lg-none">
    <nav class="navbar navbar-expand-md navbar-light" style="text-transform:capitalize; background-color:#000">

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
  <div class="container-fluid">
    <div class="row">
    <div class="d-none-sm d-none-md col-lg-3 pb-3" id="lista">


        <h1 class="my-4">{{$producto->nombre}}</h1>


      <nav class="navbar navbar-expand-lg" style="text-transform:capitalize; background-color:#000">
         <div class="collapse navbar-collapse" id="nav-prod">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown">
               {{-- php foreach ($subcategorias as $subcategoria) :?> --}}
               <a name={{-- '<= $subcategoria['id'];?>'--}} class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{$producto->subcategoria}}
               </a>

             </li>
           </ul>
         </div>
       </nav>
       </div>

      <div class="col-lg-9 pt-3 pb-3" style="background-color:rgba(255,255,255,0.5)">

        <div class="card-body  mt-4 ">

          <img class="card-img-top s p-3" style="width: 60%; margin: 0 auto;" src="img/{{--= $producto['imagen']?>--}} " alt="">
          <h3>{{$producto->nombre}}</h3>
          <h4>${{$producto->precio}}</h4>
          <p class="card-text">{{$producto->descripcion}} </p>
          <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 calificacion de los usuarios
         <p><a href="carrito.php?id={{$producto->id}}" class="buy-now btn btn-sm btn-primary">Agregar a Carrito</a></p>

          <button type="button" class="btn btn-secondary btn-sm">Agregar a favoritos</button>
          <button type="button" class="btn btn-secondary btn-sm">Preguntas frecuentes</button>
      </div>

    </div>
  </div>
</div>



  <footer>

  </footer>
  <!-- Fin del Footer -->
  <!-- Optional JavaScript -->

  {{-- <script>
      $(function () {
        $('.example-popover').popover({
          container: 'body'
        })
      })


  </script> --}}

</body>



</html>
