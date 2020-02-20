@extends('layouts.header-admin')
@section('titulo')
Lista de Usuarios
@endsection
@section('contenido')


   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" id="adminusuarios">
      <h1>Usuarios registrados</h1>
        <a name="Crear Usuario" id="" class="btn btn-warning" href="{{route('users.create')}}" role="button">Crear Nuevo Usuario</a>
<br>
<br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Usuario</th>
                  {{-- <th>Nombre</th>
                  <th>Apellido</th> --}}
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
                  {{-- <td>{{$user->name}}</td>
                  <td>{{$user->apellido}}</td> --}}
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
                <td><a href="{{route('users.edit', $user->id)}}" onclick="return confirm('Editar Usuario?')" class="btn btn-warning">Editar</a>
                    <a href="{{route('users.destroy', $user->id)}}" onclick="return confirm('Eliminar Usuario?')" class="btn btn-danger">Eliminar</a>
                </td>

                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="mx-auto" style="width: 200px;">
            {!!$users->render()!!}
            </div>
        </div>
<br>
<br>
<br>
      </main>
@endsection

