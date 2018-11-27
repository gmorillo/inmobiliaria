<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-cookie-name" content="{{ 'XSRF-TOKEN_' . substr(md5(env('APP_NAME')), 0, 10) }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('/js/bootstrap.js')}}" ></script>
    <script src="{{asset('/js/angular.js')}}" ></script>
    

    <script src="{{asset('js/app.js')}}" ></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    

    <!-- Styles -->
    <link href="{{asset('/css/angular-material.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/angular-toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form-search.css') }}">
    @yield('stylesheet')
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        // Sticky Header
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $(".top-nav").addClass("light-header");
            } else {
                $(".top-nav").removeClass("light-header");
            }
        });
        
    </script>
    
</head>
<body ng-app="template" class="bg-white">
    <div id="">
        <nav class="navbar navbar-expand-md fixed-top top-nav">
            <div class="container">
                <a class="navbar-brand" href="/"><strong class="h2">Inmovilizados</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/profile/mi-cuenta') }}">Mi cuenta <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('gestion-inmovilizado') }}">Gestionar Inmovilizado</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('total-inmovilizado') }}">Total Inmovilizado</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link small" href="{{ route('logout') }}">Cerrar Sesión</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Darse de alta</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div>  
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        <div class=" py-5">&nbsp;</div>
    </footer>
</body>
@yield('scripts')
</html>
