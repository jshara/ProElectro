@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>{{$brandname}} Products</h3>
    </div>
    <div class="row">
        <table id="table" class ="table table-striped table-sm table-hover">
            <thead class="">
                <tr>
                    <th> ID</th>
                    <th> Name</th>
                    <th> Details</th>
                    <th> Brand</th>
                    <th> Price</th>
                    <th> Logo</th>                            
                </tr>
            </thead>
            <body>
                @if(count($items) > 0)
                    @foreach($items as $item)
                        <tr data-toggle="tooltip" title="click for details">
                            <td>
                                <label>{{$item->item_id}}</label>
                            </td>                   
                            <td>
                                <label>{{$item->item_name}}</label>
                            </td>
                            <td>
                                <label>{{$item->item_details}}</label>
                            </td> 
                            <td>
                                <label>{{$item->brand_name}}</label>
                            </td>                    
                            <td>
                                <label>{{$item->item_price}}</label>
                            </td>
                            <td>	
                                <img src="{{$item->item_pic}}" height="50px" width="50px"/>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </body>
        </table>
    </div>
</div>


@endsection