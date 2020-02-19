   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Ionicons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b25540041c.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Mitr:400&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <title> @yield('titulo') </title>
   </head>
   <body>

<header>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark " tyle="background-color: #000;">
    <a class="navbar-brand p-0 pt-2" href="{{route('home')}}" style="background-color: transparent; width:15%; box-shadow: none;">
    <img src="/img/logo1.png" alt="LUPULUS" id=logoHeader></a>
    <button class="navbar-toggler" id="menuHeader" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        MENU<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="{{route('home')}}#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="{{route('home')}}#preguntas">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="{{route('shop')}}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="{{route('home')}}#contacto">Contacto</a>
            </li>
        </ul>
        <ul class="navbar-nav">
        @guest
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             mi cuenta
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="miCuentaHeader">
           
             <a class="dropdown-item" style="text-transform: capitalize"  href="{{ route('login') }}">{{ __('Ingresar') }}</a>
             @if(Route::has('register'))
             <a class="dropdown-item" style="text-transform: capitalize" href="{{ route('register') }}"> {{ __('Registrarse') }}</a>
             @endif
           </div>
           @else
           <li class="nav-item dropdown">
              
           <a class="nav-link dropdown-toggle text-white" style="text-transform: capitalize" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           @if(Auth::user()->id)
           {{ Auth::user()->username}} 
                @if(!empty(Auth::user()->avatar))
           <img src="/img/avatars/{{Auth::user()->avatar}}" class="avatar rounded-circle" alt="avatar" id="avatarHeader" style="width:30px; height:30px">
           @else           
           <img src="/img/avatars/avatar_2x.png" class="avatar rounded-circle" alt="avatar" id="avatarHeader" style="width:30px; height:30px">
           @endif
           @endif
           </a>
           <div class="dropdown-menu dropdown-open" aria-labelledby="navbarDropdown">
              @if(Auth::user()->rol_id==1)
             <a class="dropdown-item" style="text-transform: capitalize" href="{{route('admin')}}">Panel de Control</a>
              @endif
             <a class="dropdown-item" style="text-transform: capitalize" action="" href="{{route('micuenta')}}">Mi cuenta</a>
             <a class="dropdown-item text-danger" style="text-transform: capitalize" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar sesión </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
           </div>
           
           @endguest

            <li class="nav-item">
                <a class="nav-link text-white" style="text-transform: capitalize" href="carrito" id="carritoHeader">
                    <i class="icon ion-md-cart"></i> carrito</a>
            </li>

        </ul>
    </div>
</nav>
</header>

<!-- Inicio barra lateral -->
    <div class="container-fluid" id="bodyAdmin">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar" id="sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" id="menuAdmin">
              <li class="nav-item text-white">
                <a class="nav-link active" href="{{route('admin')}}">
                  <span data-feather="home"></span>
                  Panel de control <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}#ventas">
                  <span data-feather="file"></span>
                  Ventas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.prod')}}" >
                  <span data-feather="shopping-cart"></span>
                  Productos
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{route('users.index')}}">
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

@yield('contenido')
       
<footer id="footer">
    <div class="flex-container">
        <div> <a class="btn-floating  accent2" href="https://facebook.com"><span data-feather="facebook" id="iconos-footer"></span></a></div>
        <div> <a class="btn-floating  accent2" href="https://instagram.com"><span data-feather="instagram" id="iconos-footer"></span></a></div>
        <div>  <a href="home"> <img src="/img/lupulo.svg" class="img-top" alt="logo"></a> </div>
        <div> <a class="btn-floating  accent2" href="https://youtube.com"><span data-feather="youtube" id="iconos-footer"></span></a>
        </div>
        <div> <a class="btn-floating  accent2" href="https://twitter.com"><span data-feather="twitter" id="iconos-footer"></span></a>
        </div>
    </div>
    <div>
        <div class="card-footer text-center bg-warning" id="footericonos">
            <h5> <strong> Desarrollado por 5Bits <a href="https://github.com/Jucon8/lupulus" id="git"><span data-feather="github" class="feather"></span></strong></a></h5>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.min.js"></script>


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

   </body>
   </html>
   
   
   

