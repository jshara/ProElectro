@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>Our Locations</h3>
    </div>
    <div class="row">
    <div class="col-md-3">
    <p>
      <h5> Nakasi HQ </h5>
       Opening Hours:
       <br>
       Mon-Fri: 8.00am - 5.00pm
       <br>
       Sat    : 10.00am - 2.00pm
       <br>
       Sun    : Closed
       </p>
       

      <p>
       <h5>Nadi</h5>
       Opening Hours:
       <br>
       Mon-Fri: 8.00am - 5.00pm
       <br>
       Sat    : 10.00am - 2.00pm
       <br>
       Sun    : Closed
       </p>
      
       <p>
       <h5>Labasa</h5>
       Opening Hours:
       <br>
       Mon-Fri: 8.00am - 5.00pm
       <br>
       Sat    : 10.00am - 2.00pm
       <br>
       Sun    : Closed
       </p>
    </div>
    <div class="col-md-4 offset-md-1">
        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 1000px">
            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    
    </div>
</div>


@endsection