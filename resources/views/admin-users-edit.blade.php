@extends('layouts.header')

@section('titulo', 'Editar Usuario' . ' ' . $user->username)
@section('contenido')
<br>
<br>
<div class="container-fluid bg-light">
    <div class="row">
    <div class="col-lg-12 bg-light text-center">
        <br>
        <br>
    <h1>Editar Usuario: {{$user->email}}</h1>
    </div>
    <div class="col-lg-12 bg-light align-content-center">
        {!! Form::open(['route'=>['users.update', $user], 'method'=>'PUT']) !!}
                {!! Form::token() !!}
                    <div class="form-group">
                        {!! Form::label('username', 'Nombre') !!}
                        {!! Form::text('username', $user->username, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Correo Electrónico') !!}
                        {!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Example@gmail.com', 'required']) !!}
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    {!! Form::label('rol_id', 'Rol') !!}
                    {!! Form::select('rol_id', ['null'=>'Seleccione una opción', '1' => 'Administrador', '2' => 'Cliente', '3' => 'Editor', '4'=> 'Proveedor', '5'=>'Distribuidor', '6'=>'Vendedor'], $user->rol_id, ['class' => 'form-control']) !!}
                  </div>
                

                  <div class="form-group align-content-center">
                      <br>
                    {!! Form::submit('Editar Usuario', ['class'=>'btn btn-warning col-12']) !!}
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
