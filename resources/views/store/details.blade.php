@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>{{$store->store_name}}</h3>
    </div>
    <div class="row">
       <p>
       The Store is located at {{$store->store_address}}.
       <br><br>
       The store is open {{$store->store_details}}.
       </p>

       <!--Google map-->
       <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 550px text=right">
          <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>

<!--Google Maps-->

    </div>
</div>


@endsection