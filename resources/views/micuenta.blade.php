@extends('layouts.header')
@section('titulo')
Mi Cuenta
@endsection
@section('contenido')

  <div class="container-fluid pb-5" id=fondoMiCuenta>
    <br>
    <div class="container-fluid pt-5 pb-5 rounded" id=micuenta>
      <div class="container-fluid">
        <div class="row">
          <!-- columna izquierda -->
          <div class="col-md-3 pb-3">
            <div class="col-md-12 text-center">
              <h3>{{ Auth::user()->username }}</h3>
            </div>
            <div class="text-center">
              
              <!--mostrarAvatar()-->
              @if(!empty(Auth::user()->avatar))
              <img src="img/avatars/{{ Auth::user()->avatar }}" class="avatar rounded-circle img-thumbnail border border-dark" alt="avatar" style="width: 150px; height: 150px">
              @else
              <img src="img/avatars/avatar_2x.png" class="avatar rounded-circle img-thumbnail border border-dark" alt="avatar" style="width: 150px; height: 150px">
              @endif
              <form method="post" enctype="multipart/form-data" name='subir-avatar'>
              @csrf
              @method('PATCH')
              <div class="form-group pt-3">
                  <label for="avatar">Subí tu avatar</label>
                  <input type="file" class="form-control-file" name="avatar" enctype="multipart/form-data" accept= "image/*">
                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="text-center pb-3">
                <button class="btn btn-md btn-success" type="submit"> Subir avatar </button>                
              </div>
              </form>
            </div>
          </div>
          <!-- fin columna izquierda -->

          <div class="col-md-9">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tus datos</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#editar" role="tab" aria-controls="editar" aria-selected="true">Modificar datos</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form>
                  <div class="form-row">
                    <div class="form-group col-lg-6">

                      <label for="inputAddress">Nombre</label>

                      <h5  id="name"> {{ Auth::user()->name }}</h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputAddress">Apellido</label>
                      <h5  id="apellido"> {{ Auth::user()->apellido }}</h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputphone">Teléfono</label>
                      <h5  id="telefono"> {{ Auth::user()->telefono }}</h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="inputEmail4">email</label>
                      <h5  id="email"> {{ Auth::user()->email }}</h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="provincia_id">Provincia</label>
                      @if(!empty(Auth::user()->provincia_id))
                      <h5  id="provincia_id"> {{ App\Provincia::find(Auth::user()->provincia_id)->nombre }}</h5>
                      @else
                      <h5  id="provincia_id"> </h5>
                      @endif
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="ciudad_id">Ciudad</label>
                      @if(!empty(Auth::user()->ciudad_id))
                      <h5 id="ciudad_id"> {{ App\Ciudad::find(Auth::user()-> ciudad_id)->nombre }} </h5>
                      @else
                      <h5  id="tipoCons_id"> </h5>
                      @endif
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="direccion">Dirección</label>
                      <h5  id="direccion"> {{ Auth::user()->direccion }}</h5>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="tipoCons_id">Tipo de Cliente</label>
                      @if(!empty(Auth::user()->tipoCons_id))
                      <h5  id="tipoCons_id"> {{ App\TipoCons::find(Auth::user()->tipoCons_id)->nombre }}</h5>
                      @else
                      <h5  id="tipoCons_id"> </h5>
                      @endif
                    </div>
                    
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="profile-tab">
              <form method="post" name='formulario'>
              @csrf
              
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <label for="name">Nombre</label>
                      <input name = "name" type="text" class="form-control" id="name" placeholder="Ej: Tony" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="apellido">Apellido</label>
                      <input name = "apellido" type="text" class="form-control" id="apellido" placeholder="Ej: Stark" value="{{ Auth::user()->apellido }}">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="telefono">Teléfono</label>
                      <input name = "telefono" type="tel" class="form-control" id="telefono1" placeholder="Ej: 351-7832514" value="{{ Auth::user()->telefono }}">
                    </div>

                    <div class="form-group col-lg-6">
                      <label for="provincia_id">Seleccione su provincia</label>
                      <select type="text" name="provincia_id" class="form-control" id="provincia_id">
                      @if( Auth::user()->provincia_id == null)
                        <option value=""> seleccione...</option>                        
                        @foreach ($provincia as $prov)
                        <option value="{{$prov->id}}"> {{$prov->nombre}} </option>
                        @endforeach
                        @else
                        <option value="{{Auth::user()->provincia_id}}"> {{ App\Provincia::find(Auth::user()->provincia_id)->nombre }}</option>                        
                        @foreach ($provincia as $prov)
                        <option value="{{$prov->id}}"> {{$prov->nombre}} </option>
                        @endforeach
                      @endif
                      </select>
                    </div>

                    <div class="form-group col-lg-6">
                      <label for="ciudad_id">Seleccione su ciudad</label>
                      <select type="text" name="ciudad_id" class="form-control" id="ciudad_id">
                      @if( Auth::user()->ciudad_id == null)
                        <option value=""> seleccione...</option>                        
                        @foreach ($ciudad_id as $ciudad)
                        <option value="{{$ciudad->id}}"> {{$ciudad->nombre}} </option>
                        @endforeach
                        @else
                        <option value="{{Auth::user()->ciudad_id}}"> {{ App\Ciudad::find(Auth::user()->ciudad_id)->nombre }}</option>                        
                        @foreach ($ciudad_id as $ciudad)
                        <option value="{{$ciudad->id}}"> {{$ciudad->nombre}} </option>
                        @endforeach
                      @endif
                      </select>
                    </div>

                    <div class="form-group col-lg-6">
                      <label for="direccion">Dirección</label>
                      <input name = "direccion" type="text" class="form-control" id="direccion" placeholder="Ej: La Rioja 532" value="{{ Auth::user()->direccion }}">
                    </div>

                    <div class="form-group col-lg-6">
                      <label for="tipoCons_id">Seleccione su condicion</label>
                      <select name = "tipoCons_id" class="form-control" id="tipoCons_id">
                      @if( Auth::user()->tipoCons_id == null)
                        <option value=""> Seleccione </option>                      
                        @foreach($tipoCons as $tipo)
                        <option value="{{$tipo->id}}"> {{$tipo->nombre}} </option>
                        @endforeach
                        @else                         
                        <option value="{{ Auth::user()->tipoCons_id}}"> {{App\TipoCons::find(Auth::user()->tipoCons_id)->nombre}} </option>                      
                        @foreach($tipoCons as $tipo)
                        <option value="{{$tipo->id}}"> {{$tipo->nombre}} </option>
                        @endforeach
                        @endif
                      </select>
                    </div>

                    <div class="form-group col-lg-6">
                      <label hidden></label>
                        <input hidden type="text" name="ciudad" class="form-control" placeholder="Ej: Villa Allende" value="">
                    </div>

                    <div class="col-xs-12 col-md-6 pb-3">
                      <button class="btn btn-md btn-success" type="submit"><i class="icon ion-md-checkbox"></i> Guardar </button>
                      <button class="btn btn-md" type="reset"><i class="icon ion-md-refresh"></i> Limpiar</button>
                    </div>

                  </div>
                </form>
              </div>
            </form>
                
              </div>
            </div>
          </div><!-- fin columna derecha -->
        </div>
        <!--/row-->
      </div>
      <!--Div micuenta-->
    </div>
    <!--fondo-->

  </div>


@endsection