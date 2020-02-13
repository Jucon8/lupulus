@extends('layouts.header')

@section('contenido')
<br>
<br>
<br>
<br>
<br>
<h1>Usuarios registrados</h1>
<a name="Crear Usuario" id="" class="btn btn-warning" href="/admin/users/create" role="button">Crear Nuevo Usuario</a>
<br>
<br>
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
                  <th>Acciones</th>

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
                <td>
                  @if ($user->rol_id=="1")
                  <span class="badge badge-pill badge-danger">Administrador</span>
                  @elseif ($user->rol_id=="2")
                  <span class="badge badge-pill badge-success">Cliente</span>
                  @elseif ($user->rol_id=="3")
                  <span class="badge badge-pill badge-dark">Editor</span>
                  @elseif ($user->rol_id=="4")
                  <span class="badge badge-pill badge-warning">Proveedor</span>
                  @elseif ($user->rol_id=="5")
                  <span class="badge badge-pill badge-primary">Distribuidor</span>
                  @elseif ($user->rol_id=="6")
                  <span class="badge badge-pill badge-info">Vendedor</span>
                  @else
                  <span class="badge badge-pill badge-secondary">No asignado</span>
                  @endif
                </td>
                <td><a href="/admin/users/edit" class="btn btn-warning">Editar</a>
                    <a href="/admin/users/edit" class="btn btn-danger">Eliminar</a>
                </td>

                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
<br>
<br>
<br>

@endsection

