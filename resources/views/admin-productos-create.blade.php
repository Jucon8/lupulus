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
    <div class="container-fluid">
            <h4 class="text-center">AGREGAR PRODUCTO +</h4>
    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
              @csrf
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
      {{-- <div class="col-md-3 mb-3">
        <label for="validationDefault04">Categoria</label>
        <!-- Falta añadir categoria_id en tabla producto MySQL -->
        <select name="categoria_id"  class="custom-select" id="validationDefault05" required>
        <option selected disabled value="">Seleccione una categoria</option>
          <option value='1'>EQUIPAMIENTO</option>
          <option value='2'>INSUMOS</option>
          <option value='3'>KIT</option>
        </select>
      </div> --}}
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Estado</label>
        <select name="estado"  class="custom-select" id="validationDefault05" >
        <option selected disabled value="">Seleccione un estado</option>
          <option value='1'>Publica</option>
          <option value='0'>No publica</option>
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

      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Agregar Imagen</label>
        <input name="imagen_producto" type="file" class="" id="validationDefault08" >
      </div>

    </div>
    <button class="btn btn-warning" type="submit" name="add">AGREGAR</button>
    <br>
    <br>
  </form>
</div>
<br>
<br>
<br>
<br>
<br>
</main>
@endsection