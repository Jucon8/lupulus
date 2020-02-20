@extends('layouts.header-admin');


@section('contenido')
<br>
<br>

<div class="container-fluid bg-light">
    <div class="row">
    <div class="col-lg-12 bg-light text-center">
        <br>
        <br>
    <h1>Crear Usuarios</h1>
    </div>
    @if(count($errors)>0)
<div class="container-fluid text-center alert alert-danger" role="alert">
    <ul>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

    <div class="col-lg-12 bg-light align-content-center">
{!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}
                {!! Form::token() !!}
                    <div class="form-group">
                        {!! Form::label('username', 'Nombre') !!}
                        {!! Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electrónico') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Example@gmail.com', 'required']) !!}
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña') !!}
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'********', 'required']) !!}
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    {!! Form::label('rol_id', 'Rol') !!}
                    {!! Form::select('rol_id', [' '=>'Seleccione una opción', '1' => 'Administrador', '2' => 'Cliente', '3' => 'Editor', '4'=> 'Proveedor', '5'=>'Distribuidor', '6'=>'Vendedor'], ' ', ['class' => 'form-control']) !!}
                  
                </div>

                  <div class="form-group align-content-center">
                      <br>
                    {!! Form::submit('Crear Usuario', ['class'=>'btn btn-warning col-12']) !!}
                    <br>
                    <br>
                <a name="cancelar" id="" class="btn btn-danger col-12" href="/admin/users" role="button">Cancelar</a>
                    <br>
                    <br>

                  </div>


        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
