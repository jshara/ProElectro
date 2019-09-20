@extends('layout.app')
@section('content')
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="caurosal/imac.png" class="d-block w-100px; h-25px" style="width: 100%; height:520px"; alt="IMAC">
        <div class="carousel-caption d-none d-md-block">
          <h5><a href="#" class="text-dark"> Apple Products </a> </h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="caurosal/smart-watch.jpg" class="d-block w-100px; h-25px" style="width: 100%; height:520px"; alt="SmartWatch">
        <div class="carousel-caption d-none d-md-block">
          <h5>Smart Watch</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="caurosal/headphones.jpg" class="d-block w-100px; h-25px" style="width: 100%; height:520px"; alt="HeadPhone">
        <div class="carousel-caption d-none d-md-block">
          <h5>Headphones</h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>


<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
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
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="www.proelctro.com"> ProElectro.com</a>
  </div>
  <!-- Copyright -->


</footer>
<!-- Footer -->
@endsection
