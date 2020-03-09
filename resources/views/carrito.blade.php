@extends('layouts.header')
@section('titulo')
carrito
@endsection
@section('contenido')

    <!-- inicio carrito-->

<br>
<br>

 <div class="site-wrap">
    <div class="detalle-titulo text-center">
        <h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
    </div>
<br>
<br>

<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="get">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-imagen">Imagen</th>
                    <th class="product-nombre">Producto</th>
                    <th class="product-precio">Precio</th>
                    <th class="product-cantidad">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remover">Remover</th>
                  </tr>
                </thead>
               <tbody>

                  @foreach ($productos as $producto)
                  <tr>

                     <td class="product-imagen">
                      <img  alt="Imagen" class="img-fluid" src="img/{{$producto->imagen}}" >
                    </td>
                    <td class="product-nombre">
                      <h2 class=" text-center">{{$producto->nombre}}</h2>
                    </td>
                    <td class="product-precio">${{number_format($producto->precio,2)}}</td>

                    <td>


                        <input
                        type="number"
                         class="input-update-item"
                         min ="1"
                         max="1000000"
                         {{-- data-precio= "{{number_format($producto->precio,2)}}"
                         data-id="{{$producto->id}}" --}}
                         value="{{$producto->cantidad}}"
                         id ="producto_{{$producto->id}}"
                          {{-- placeholder="" aria-label="Example text with button addon"
                          aria-describedby="button-addon1"> --}}
                         >


                    </td>
                    <td >${{number_format($producto->precio * $producto->cantidad,2)}}</td>
                    <td>
                    <a href="{{route('carrito.delete', $producto->id)}}" class="btn btn-danger" data-id="{{$producto->id}}">


                     <i class="fa fa-remove"></i>
                    </a>
                </td>

                   {{-- --}}




                  </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
             <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Actualizar Carrito</button>
              </div>
              <div class="col-md-6">
                <a href="" class="btn btn-primary btn-sm btn-block">Vaciar Carrito</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Cupon</label>
                <p>Ingrese su código de cupón si tiene uno.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Código promocional">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm">Aplicar cupón</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Totales de carrito</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                 <div class="col-md-6 text-right">
                    <strong class="text-black">{{$total ?? ''}}</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class ="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">{{$total ?? ''}}</strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='{{route('checkout.index')}}'"> Finalizar la Compra </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     @endsection