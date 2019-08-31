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
    </div>
</div>


@endsection