@extends('layouts.header');


@section('contenido')


<br>
<br>
<div class="container-fluid bg-light">
    <div class="row">
    <div class="col-lg-12 bg-light text-center">
    <h1>Crear Usuarios</h1>
    </div>
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
                    {!! Form::select('rol_id', ['null'=>'Seleccione una opción', '1' => 'Administrador', '2' => 'Cliente', '3' => 'Editor', '4'=> 'Proveedor', '5'=>'Distribuidor', '6'=>'Vendedor'], 'null', ['class' => 'form-control']) !!}
                  </div>

                  <div class="form-group align-content-center">
                    {!! Form::submit('Crear Usuario', ['class'=>'btn btn-warning col-12']) !!}
                  </div>


        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
