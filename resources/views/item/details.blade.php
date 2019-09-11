@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>Search Items</h3>
    </div>
    <div class="row">
    <table id="table" class ="table table-striped table-sm table-hover">
            <thead class="thead-dark">
                <tr>
                    <th> ID</th>
                    <th> Name</th>
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
                                <img src="{{$item->item_pic}}" height="50px" width="50px"/>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan ="3">
                            <label>There are no results for your search</label>
                        </td>
                    </tr>
                @endif
            </body>
        </table>
    </div>
</div>


@endsection