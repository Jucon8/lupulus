@extends('layouts.header')
@section('titulo')
Detalle del Producto
@endsection
@section('contenido')


          <div class="alta-producto">
            <h4>MODIFICAR PRODUCTO +/- </h4>
            <form method="PUT" action="{{route('products.update', $producto->id)}} enctype="multipart/form-data">
              @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">Nombre</label>
        <input type="hidden" name="id" value="{{$producto['id']}}">
        <input value="{{$producto['nombre']}}" name="nombre" type="text" class="form-control" id="validationDefault01" required>
      </div>
      <div class="col-md-5 mb-3">
        <label for="validationDefault02">Precio</label>
        <input value="{{$producto['precio']}}" name="precio" type="text" class="form-control" id="validationDefault03" placeholder="Ingrese un número decimal sin el signo $" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Descripción</label>
        <input value="{{$producto['descripcion']}}" name="descripcion" type="text" class="form-control" id="validationDefault04" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Estado</label>
        <select name="estado"  class="custom-select" id="validationDefault05" required>
        <option disabled value="">Seleccione un estado</option>
          <option value='1'>Publica</option>
          <option value='0'>No publica</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">Subcategoria</label>
        <select name="subcategoria_id" class="custom-select" id="validationDefault06" required>

       <!--Equipamiento-->

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
        <label for="validationDefault06">Stock</label>
        <input value="{{$producto['stock']}}" name="stock" type="text" class="form-control" id="validationDefault07" placeholder="Cantidad" required>
      </div>
    </div>
    <button class="btn btn-success" type="submit" name="edit">GUARDAR CAMBIOS</button>
  <a href="{{route('products.index')}}" class="btn btn-danger" role="button">CANCELAR</a>
  <br>
  <br>
  <br>
  </form>
@endsection