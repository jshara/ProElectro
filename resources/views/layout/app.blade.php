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
<!-- Footer -->
<footer style="background-color:#	#696969;" >
    <!-- Grid column -->
   

  <!-- Footer Elements -->
  <div style= "background-color:#F5F5F5;" >

  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">ProElectro</h6>
        <p>Your onestop shop for all electronic products. Visit our shop for greater variety.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">Phones</a>
        </p>
        <p>
          <a href="#!">Laptops</a>
        </p>
        <p>
          <a href="#!">Apple</a>
        </p>
        <p>
          <a href="#!">Smart-Watches</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Locations</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

<!-- Links -->
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>

<p>
<img src="https://img.icons8.com/material/24/000000/home.png"> <break>Nakasi, Nausori</p>
<img src="https://img.icons8.com/material-rounded/24/000000/email-open.png"><break> info@proelctro.com </p>
<img src="https://img.icons8.com/material-rounded/24/000000/phone--v1.png"><break> 5588</p>
<img src="https://img.icons8.com/material-rounded/24/000000/fax.png"><break> 5589</p>

</div>
  <div class="container">
      

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1"> <a href="https://www.facebook.com" target="_blank"><img alt="facebook"  src="https://img.icons8.com/color/48/000000/facebook-new.png" class="center"> </a>
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1"> <a href="https://twitter.com" target="_blank"> <img alt="twitter" src="https://img.icons8.com/color/48/000000/twitter-circled.png" > </a> 
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
            <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1"> <a href="https://linkedin.com" target="_blank"> <img alt="linkedin" src="https://img.icons8.com/color/48/000000/linkedin-circled.png"> 
          <i class="fab fa-linkedin-in"> </i>
        </a>
     
    </ul>
    <!-- Social buttons -->

  </div>
   
  <!-- Footer Elements -->

 <!-- Copyright -->

  <div class="footer-copyright text-right">© 2019 Copyright:
    <a href="www.proelctro.com"> ProElectro.com</a>
  </div>
  <!-- Copyright -->


</footer>
<!-- Footer -->
  
</html>
