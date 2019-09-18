@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>{{$category}}</h3>
    </div>
    <div class="flex-container d-flex justify-content-around">
        @if(count($items) > 0)
            @foreach($items as $item)
                <div>
                <div id="view">                                     
                    <label>{{$item->item_name}}</label><br>             
                    <img src="{{$item->item_pic}}" style="border-radius:15px" height="150px" width="150px"/>          
                    <label>{{$item->brand_name}}</label> <br> 
                </div>  
                    <label>${{$item->item_price}}</label>
                    <?php $check = DB::table('orders')->where('item_id',$item->item_id)->where('done',0)->where('session_id',Session::getId())->count();?>
                    <input name="_token" value="eRYFMqxeGXyGy7Kn1AU7af7qbGlt4uEp8RtYb4Vx" type="hidden">
                    @if($check)
                        <button class="acart btn btn-danger" data-id="{{$item->item_id}}" data-name="{{$item->item_name}}">Remove</button>                                    
                    @else
                        <button class="acart btn btn-success" data-id="{{$item->item_id}}" data-name="{{$item->item_name}}">Add Cart</button>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
</div>

@include('layout.modal')
<script>
    $(document).on('click','#view', function(){
        $('#myModal').modal('show');
    });

    $(document).on('click', '.acart', function() {
        if($(this).text()=="Add Cart"){
            $.ajax({
                type: 'post',
                url: '/order/add',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $(this).data('id')
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
                    'id': $(this).data('id')
                },
                success: function(data) { }   
            });
            $(this).css('background', '#008000');
            $(this).text("Add Cart");            
        }
        
    });

</script>


@endsection