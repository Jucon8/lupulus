@extends('layouts.header')

@section('contenido')
<br>
<br>
<br>
<h1>Usuarios registrados</h1>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Rol</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->apellido}}</td>
                  <td>{{$user->email}}</td>
                <td>{{$user->rol_id}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
<br>
<br>
<br>

@endsection

