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

    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <!-- <script scr="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script> -->

    <style>    
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            /* background-color: DodgerBlue; */
        }

        .flex-container > div {
            background-color: #f1f1f1;
            border-radius: 25px;
            width: 245px;
            margin: 15px;
            text-align: center;
            line-height: 70px;
            font-size: 20px;
        }
    </style>

</head>
<body>
    <div id="app"> 
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-dark">
            <div class="container">
                <a class="navbar-brand" href= "/" style="color:#07DA0F;">ProElectro</a>
                <!-- <a cursor="none" class="nav-link rounded-circle text-white" 
                            Style="text-shadow:0px 0px 8px #07DA0F;"> <strong>Your Electronic Stop</strong>  </a> -->
                <a class="nav-link text-white" href= "/aboutus">About Us</a>      
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
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/contact">Contact</a>
                        </li>
                    </ul>
                    
                    <div class="navbar-nav ml-auto">
                        <form action="/item" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="/cart" class="btn btn-warning" style="margin:0px 15px"> Cart </a>
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

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
         <a href="https://www.facebook.com" target="_blank"><img alt="facebook"  src="https://img.icons8.com/color/48/000000/facebook-new.png" class="center"> </a>
          
        </a>
      </li>
      <li class="list-inline-item">
        <a href="https://twitter.com" target="_blank"> <img alt="twitter" src="https://img.icons8.com/color/48/000000/twitter-circled.png" > </a> 
          
        </a>
      </li>
            <li class="list-inline-item">
         <a href="https://linkedin.com" target="_blank"> <img alt="linkedin" src="https://img.icons8.com/color/48/000000/linkedin-circled.png"> 
         
        </a>
     
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

 <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="www.proelctro.com"> ProElectro.com</a>
  </div>
  <!-- Copyright -->


</footer>
<!-- Footer -->

</html>
