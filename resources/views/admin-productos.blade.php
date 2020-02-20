@extends('layouts.header-admin')
@section('titulo')
Lista de Productos
@endsection
@section('contenido')

        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" id="adminusuarios">
<h1>Productos</h1>

<br>
          <div class="alta-producto">
            <h4>AGREGAR PRODUCTO + </h4>
            <form method="post" enctype="multipart/form-data">
              @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="validationDefault01" value="" required>
      </div>
      <div class="col-md-5 mb-3">
        <label for="validationDefault02">Precio</label>
        <input name="precio" type="text" class="form-control" id="validationDefault02" value="" placeholder="Ingrese un número decimal sin el signo $" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Descripción</label>
        <input name="descripcion" type="text" class="form-control" id="validationDefault03" required>
      </div>
      {{-- <div class="col-md-3 mb-3">
        <label for="validationDefault04">Categoria</label>
        <!-- Falta añadir categoria_id en tabla producto MySQL -->
        <select name="categoria_id"  class="custom-select" id="validationDefault04" required>
        <option selected disabled value="">Seleccione una categoria</option>
          <option value='1'>EQUIPAMIENTO</option>
          <option value='2'>INSUMOS</option>
          <option value='3'>KIT</option>
        </select>
      </div> --}}
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Estado</label>
        <select name="estado"  class="custom-select" id="validationDefault05" >
        <option selected disabled value="">Seleccione un estado</option>
          <option value='1'>Publica</option>
          <option value='0'>No publica</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault06">Subcategoria</label>
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
        <label for="validationDefault07">Stock</label>
        <input name="stock" type="text" class="form-control" id="validationDefault07" placeholder="Cantidad" required>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationDefault08">Agregar Imagen</label>
        <input name="imagen_producto" type="file" class="" id="validationDefault08" >
      </div>

    </div>
    <button class="btn btn-warning mb-3" type="submit" name="add">AGREGAR</button>
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

                  <td><a href="{{route('prod.edit', $producto['id'])}}" onclick="return confirm('Editar Producto?')" class="btn btn-warning">Editar</a>
                  <br>
                
                  <a href="{{route('prod.delete', $producto['id'])}}" onclick="return confirm('Eliminar Producto?')" class="btn btn-danger">Eliminar</a> 
                
                </td>
                </tr>
                @endif
              @endforeach
              </tbody>              
            </table>
            
            {{$productos->links()}}
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
