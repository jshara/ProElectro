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
                <a class="navbar-brand" href= "/" style="color:#07DA0F;">ProElectro</a>
                <button class="navbar-toggler" style="background-color:white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brand </a>                                
                            <div class="dropdown-menu" aria-labelledby="category">
                                <?php $brands = DB::table('brands')->select('brand_id','brand_name')->get(); ?>
                                @foreach($brands as $brand)
                                    <a class="dropdown-item" href="/brand/{{$brand->brand_id}}"><?php echo $brand->brand_name ?></a>
                                @endforeach                                
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category </a>
                            <div class="dropdown-menu" aria-labelledby="category">
                                <?php $cats = DB::table('categories')->select('cat_id','cat_name')->get(); ?>
                                @foreach($cats as $cat)
                                    <a class="dropdown-item" href="/cat/{{$cat->cat_id}}"><?php echo $cat->cat_name ?></a>
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="category" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Store </a>
                            <div class="dropdown-menu" aria-labelledby="category">
                                <?php $stores = DB::table('stores')->select('store_id','store_name')->get(); ?>
                                @foreach($stores as $store)
                                    <a class="dropdown-item" href="/store/{{$store->store_id}}"><?php echo $store->store_name ?></a>
                                @endforeach
                            </div>
                        </li>                     
                    </ul>
                    
                    <div class="navbar-nav ml-auto">
                        <form action="/item" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </form>

                        <a href="/cart" class="btn btn-warning"> Cart </a>
                    
                        <div class="nav-item">
                            <a href="" class="nav-link rounded-circle text-white" 
                            Style="text-shadow:0px 0px 8px #07DA0F;"> <strong>Your Electronic Stop</strong>  </a>
                        </div>
                    </div>
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
<footer class="page-footer font-small unique-color-dark pt-4">
</footer>
</html>
