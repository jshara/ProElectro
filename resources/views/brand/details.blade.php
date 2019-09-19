@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3 align="center">{{$brandname}} Products</h3>
    </div>
    <div class="flex-container d-flex justify-content-around">
        @if(count($items) > 0)
            @foreach($items as $item)
                <div class="hovering" >
                    <div id="view" style="cursor:pointer;" data-name="{{$item->item_name}}" data-image="{{$item->item_pic}}"
                            data-details="{{$item->item_details}}" data-description="{{$item->item_desc}}"
                            data-brand="{{$item->brand_name}}" data-category="{{$item->cat_name}}" data-price="{{$item->item_price}}">                                     
                        <label>{{$item->item_name}}</label><br>             
                        <img src="{{$item->item_pic}}" style="border-radius:15px" height="150px" width="150px"/>          
                        <label></label> <br> 
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
        $('#item_name').text($(this).data('name'));
        $('#item_details').text($(this).data('details'));
        $('#item_description').text($(this).data('description'));
        $('#item_brand').text($(this).data('brand'));
        $('#item_category').text($(this).data('category'));
        $('#item_price').text("$ "+$(this).data('price'));
        $('#item_image').attr('src', $(this).data('image'));
        $('#myModal').modal('show');
    });

    $(document).ready(function(){
        $(".hovering").hover(function(){
            $(this).css("background-color", "#DCDCDC");
            }, function(){
            $(this).css("background-color", "#f1f1f1");
        });
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