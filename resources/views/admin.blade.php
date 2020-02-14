    @extends('layouts.header')

    @section('contenido')
    <div class="container-fluid" id="bodyAdmin">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block  sidebar" id="sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" id="menuAdmin">
              <li class="nav-item text-white">
                <a class="nav-link active" href="{{URL::previous()}}">
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
              <a class="nav-link" href="{{route('users.index')}}">
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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" id="graph">
            <br>
            <br>
            <br>
            <br>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Panel de Control</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Compartir</button>
                <button class="btn btn-sm btn-outline-secondary">Exportar</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
              </button>
            </div>
          </div>
          <div class="panel-body">
                    <div id="chart">
            <canvas class="my-4" id="myChart" width="2" height="1"></canvas>
            </div>
                </div>
    <hr id="ventas">
    <br>
    <br>

          <h2>Ventas</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id_venta</th>
                  <th>Id_usuario</th>
                  <th>Id_producto</th>
                  <th>Pago</th>
                  <th>Estado</th>
                  <th>Envio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>User_id</td>
                  <td>Product_id</td>
                  <td>Tarjeta/efectivo</td>
                  <td>en curso(1)/finalizada(0)</td>
                  <td>retiro por sucursal/envio a domicilio</td>
                </tr>
              </tbody>
            </table>
          </div>



          <h1>AQUI VA EL LINK O BOTON PARA EL ABM PRODUCTOS</h1>
          {{-- <hr id="productos">
          <br>
          <br>
          <h2>Productos</h2>
          <div class="alta-producto">
            <h4>AGREGAR PRODUCTO + </h4>
            <form method="post">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="validationDefault01" value="" required>
      </div>
      <div class="col-md-5 mb-3">
        <label for="validationDefault02">Precio</label>
        <input name="precio" type="text" class="form-control" id="validationDefault03" value="" placeholder="Ingrese un número decimal sin el signo $" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Descripción</label>
        <input name="descripcion" type="text" class="form-control" id="validationDefault04" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Categoria</label>
        <!-- Falta añadir categoria_id en tabla producto MySQL -->
        <select name="categoria_id"  class="custom-select" id="validationDefault05" required>
        <option selected disabled value="">Seleccione una categoria</option>
          <option value='1'>EQUIPAMIENTO</option>
          <option value='2'>INSUMOS</option>
          <option value='3'>KIT</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Subcategoria</label>
        <select name="subcategoria_id" class="custom-select" id="validationDefault06" required>

       <!--Equipamiento-->
       <option selected disabled value="">Seleccione una subcategoria</option>
       <option disabled value="">Equipamiento ↓</option>
        <option value="1">Canillas y conectores</option>
        <option value="2">Embarrilado</option>
        <option value="3">Embotellado</option>
        <option value="4">Enfriado</option>
        <option value="5">Fermentación</option>
        <option value="6">Macerado y hervido</option>
        <option value="7">Mangueras</option>
        <option value="8">Medición y control</option>
        <option value="9">Molienda</option>
        <option value="10">Tratamiento agua</option>
        <!--Insumos-->
       <option disabled value="">Insumos ↓</option>
         <option value="11">Azucares</option>
         <option value="12">Botellas</option>
         <option value="13">Clarificantes</option>
         <option value="14">Correción agua</option>
         <option value="15">Levaduras</option>
         <option value="16">Limpieza</option>
         <option value="17">Lúpulus</option>
         <option value="18">Maltas</option>
         <option value="19">Tapas</option>
         <!--Kits-->
        <option disabled value="">Kits ↓</option>
          <option value="20">Kit equipos</option>
          <option value="21">Kit insumos</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Stock</label>
        <input name="stock" type="text" class="form-control" id="validationDefault07" placeholder="Cantidad" required>
      </div>
    </div>
    <button class="btn btn-warning" type="submit" name="add">AGREGAR</button>
  </form>
          </div>
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
                  <th>Categoria_ID</th>
                  <th>Subcategoria_ID</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                  {{-- @foreach --}}
                {{-- <tr>
                  <td>producto['id']</td>
                  <td>producto['nombre']</td>
                  <td>producto['descripcion']</td>
                  <td>producto['precio']</td>
                  <td>producto['stock']</td>
                  <td>producto['estado']</td>
                  <td>Imágenes</td>
                  <td>producto['categoria_id']</td>
                  <td>producto['subcategoria_id']</td>  --}}

                  {{-- <td><a href="editarProducto.php?variable1=(producto['id'])?>">EDITAR</a>
                  <BR></BR>
                  <a href="admin.php?variable2= producto['id']">ELIMINAR</a></td>
                </tr> --}}
                {{-- @endif --}}
              </tbody>
            </table>
<hr>

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
