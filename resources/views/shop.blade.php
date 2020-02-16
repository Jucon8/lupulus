@extends('layouts.header')
@section('titulo')
Shop
@endsection
@section('contenido')
  <!--Inicio header-->

  <div class="d-lg-none" id="categoriasTienda">
    <nav class="navbar navbar-expand-md navbar-light" style="text-transform:capitalize; background-color:#000">
      <button class="navbar-toggler bg-white text-dark" type="button" data-toggle="collapse" data-target="#nav-prod"
      aria-controls="nav-prod" aria-expanded="false" aria-label="Toggle navigation">
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

  <section>
    <div class="container-fluid site">
      <div class="row bg-warning">
        <div class="col-3 d-none d-lg-block">
          <h2>NUESTROS PRODUCTOS</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-2 d-none d-lg-block mb-3" id="sidebar-categorias">
        <br>
          <h5 class="text-warning">Materia Prima</h5>
          <nav class="fm-nav nav navbar-dark flex-column">
            <a href="" class="nav-link">Lúpulo</a>
            <a href="" class="nav-link">Cebada</a>
            <a href="" class="nav-link">Malta</a>
            <a href="" class="nav-link">Levadura</a>
          </nav>
          <hr>
          <h5 class="text-warning">Embotellado</h5>
          <nav class="fm-nav nav navbar-dark flex-column">
            <a href="" class="nav-link">Botellas</a>
            <a href="" class="nav-link">Tapas</a>
            <a href="" class="nav-link">Precintos</a>
          </nav>
          <hr>
          <h5 class="text-warning">Equipamiento</h5>
          <nav class="fm-nav nav navbar-dark flex-column">
            <a href="" class="nav-link">Ollas</a>
            <a href="" class="nav-link">Medición</a>
            <a href="" class="nav-link">Enfriador</a>
            <a href="" class="nav-link">Filtros</a>
            <a href="" class="nav-link">Otros</a>
          </nav>
        </div>
        <div class="col">
          <div class="row">

              @foreach ($productos as $producto)
              <div class="col-12">
              <br>
              <div class="card mb-3 bg-warning">

                <div class="row no-gutters">
                  <div class="col-md-4">
                    @if(!empty($producto->imagen))
                    <img src="/img/{{$producto->imagen}}"
                     class="card-img" alt="...">
                    @else
                    <img src="/img/cartel.jpg" class="card-img" alt="...">
                    @endif
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <div class="pb-3">
                      <h4 class="card-title">{{$producto["nombre"]}}</h4>
                      </div>
                      <div class="pb-3">
                      {{-- <h5 class="card-text">=$producto["descripcion"]?></h5> --}}
                      <h5 class="card-text">{{$producto["descripcion"]}}</h5>

                      </div>
                      <div class="pb-3">
                      {{-- <h5 class="card-text">$?=$producto["precio"]?></h5> --}}
                      <h5 class="card-text">$ {{$producto["precio"]}}</h5>
                      </div>
                      <div class="float-left pb-3">
                        {{-- <a class="btn btn-success btn-lg" href="detalleProducto.php?id==$producto["id"]?>"> Detalle del producto</a> --}}
                             <a class="btn btn-success btn-lg" href="detalleProducto/{{$producto["id"]}}"> Detalle del producto</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link text-warning" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-warning" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-warning" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link text-success" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    </div>
  </section>
@endsection
