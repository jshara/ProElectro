@extends('layout.app')

@section('content')
<div>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="caurosal/headphones.jpg" class="d-block w-100px; h-25px" style="width: 2000px; height:700px"; alt="HeadPhone">
        <div class="carousel-caption d-none d-md-block">
          <h5>Headphones</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="caurosal/imac.png" class="d-block w-100px; h-25px" style="width: 2000px; height:700px"; alt="IMAC">
        <div class="carousel-caption d-none d-md-block">
          <h5>Apple Products</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="caurosal/smart-watch.jpg" class="d-block w-100px; h-25px" style="width: 2000px; height:700px"; alt="SmartWatch">
        <div class="carousel-caption d-none d-md-block">
          <h5>Smart Watch</h5>
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


<p>Hello this is what you need to change</p>
<button class="btn btn-danger">
click me
</button>
</div>


@endsection
