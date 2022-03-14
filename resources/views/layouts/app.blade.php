<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Control Gasto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:#737373;">

     <div id="app">

          <nav class="navbar navbar-expand-md navbar-light bg-with shadow-sm" style="background-color:#FBFCBF
          ;">

            <img src="https://image.spreadshirtmedia.net/image-server/v1/mp/compositions/T1459A842PA4459PT28D189021642FS4783/views/1,width=378,height=378,appearanceId=842,backgroundColor=FFFFFF,noPt=true/letras-escalofriantes.jpg" width="65px"><h3>𝕯'𝖎𝖗𝖎𝖈𝖍𝖎†</h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" style="margin-left: 60%;">
    <div class="navbar-nav">

      <a type="button" class="btn btn-dark" href="{{route('usuarios')}}">Usuario</a>

      <a type="button" class="btn btn-dark" href="{{route('categorias')}}">Categorias</a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </div>
  </div>
</nav>
       <div class="">
        
        <!-- Esto es una seccion -->
        @yield('content') 
    </div>
   <!--  <div class="footer" style="background:black;color: white;">
        <h1>Footer</h1>
    </div> -->
</body>
</html>
