@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>{{$catname}}</h3>
    </div>
    <div class="row">
        <table id="table" class ="table table-striped table-sm table-hover">
            <thead class="thead-dark">
                <tr>
                    <th> ID</th>
                    <th> Name</th>
                    <th> Logo</th>  
                    <th> Add Cart</th>                          
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
                            <td>
                                <button class="acart btn btn-success" data-id="{{$item->item_id}}" data-name="{{$item->item_name}}">Add Cart</button>
                                <input name="_token" value="eRYFMqxeGXyGy7Kn1AU7af7qbGlt4uEp8RtYb4Vx" type="hidden">
                                
                            </td>
                        </tr>
                    @endforeach
                @endif
            </body>
        </table>
    </div>
</div>

<script>
    $(document).on('click', '.acart', function() {
        if($(this).text()=="Add Cart"){
            $.ajax({
                type: 'post',
                url: '/order/add',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $(this).data('id'),
                    'name': $(this).data('name')
                },
                success: function(data) { }                 
            }); 
            $(this).css('background', '#f02f03');
            $(this).text("Remove");        
            
        }else{
            $.ajax({
                type: 'post',
                url: '/order/remove',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $(this).data('id'),
                    'name': $(this).data('name')
                },
                success: function(data) { }   
            });
            $(this).css('background', '#008000');
            $(this).text("Add Cart");            
        }
        
    });

</script>


@endsection