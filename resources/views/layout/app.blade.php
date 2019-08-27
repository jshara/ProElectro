<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ProElectro</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Datatables --}}
    <script src="{{ asset('DataTables/datatables.js') }}" defer></script>

    <!-- Awesome Fonts Icons -->
    <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
    <!-- <script src="https://kit.fontawesome.com/087ae4bfd6.js"></script> -->

</head>
<body>
    <div id="app"> 
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-dark">
            <div class="container">
                <a class="navbar-brand" style="color:#07DA0F;">ProElectro</a>
                <button class="navbar-toggler" style="background-color:white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link rounded-circle text-white" 
                            Style="text-shadow:0px 0px 8px #07DA0F;"> <strong>Your Electronic Stop</strong>  </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brands </a>
                            <div class="dropdown-menu" aria-labelledby="category">
                                <a class="dropdown-item" href="#">Samsang</a>
                                <a class="dropdown-item" href="#">Philhps</a>
                                <a class="dropdown-item" href="#">Sony</a>
                                <a class="dropdown-item" href="#">Toshiba</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Items </a>
                            <div class="dropdown-menu" aria-labelledby="category">
                                <a class="dropdown-item" href="#">TV</a>
                                <a class="dropdown-item" href="#">Smart Watch</a>
                                <a class="dropdown-item" href="#">Phones</a>
                                <a class="dropdown-item" href="#">Camera</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Stores </a>
                            <div class="dropdown-menu" aria-labelledby="category">
                                <a class="dropdown-item" href="#">Suva</a>
                                <a class="dropdown-item" href="#">Nakasi</a>
                            </div>
                        </li>                     
                    </ul>
                </div>
            </div>
        </nav>        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
  
    </script>
    
</body>
</html>
