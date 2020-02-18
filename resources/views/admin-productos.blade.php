@extends('layouts.header')
@section('titulo')
Lista de Productos
@endsection
@section('contenido')
<br>
<br>

    <div class="container-fluid" id="bodyAdmin">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block  sidebar" id="sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" id="menuAdmin">
              <li class="nav-item text-white">
                <a class="nav-link active" href="admin.php">
                  <span data-feather="home"></span>
                  Panel de control <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ventas">
                  <span data-feather="file"></span>
                  Ventas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#productos">
                  <span data-feather="shopping-cart"></span>
                  Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#usuarios">
                  <span data-feather="users"></span>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Estadisticas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="mail"></span>
                  Mensajes
                </a>
              </li>
            </ul>
          </div>
        </nav>

       

        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" id="adminproductos">
      <h1>Productos</h1>
      <a name="Nuevo Producto" id="" class="btn btn-warning" href="{{route('products.create')}}" role="button">Nuevo Producto</a>
      <br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th>Stock</th>
                  <th>Estado</th>
                  <th>Imagenes</th>
                  {{-- <th>Categoria_ID</th> --}}
                  <th>Subcategoria_ID</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($productos as $producto)
                  @if ($producto['borrado'] == 0)
                <tr>
                  <td>{{$producto['id']}}</td>
                  <td>{{$producto['nombre']}}</td>
                  <td>{{$producto['descripcion']}}</td>
                  <td>{{$producto['precio']}}</td>
                  <td>{{$producto['stock']}}</td>
                  <td>{{$producto['estado']}}</td>
                  <td>{{$producto['imagen_producto']}}</td>
                  {{-- <td>{{$producto['categoria_id']}}</td> --}}
                  <td>{{$producto['subcategoria_id']}}</td>

                  <td><a href="{{route('products.edit', $producto->id)}}">EDITAR</a>
                  <BR></BR>
                  <a href="{{route('products.destroy', $producto->id)}}">ELIMINAR</a> </td>
                </tr>
                @endif
              @endforeach
              </tbody>
            </table>
            

            <br>
            <br>
                     


          </div>
        </main>
      </div>
    </div>


    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0.2,
            backgroundColor: 'transparent',
            borderColor: '#f0b500',
            borderWidth: 4,
            pointBackgroundColor: '#f0b500'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
@endsection
