@extends('layout.app')

@section('content')
<div class="container">
<div id="content">
    <div>
        <h3 align="center">Quotation Cart</h3>
    </div>

    <div class="table-responsive cart_info">

        <table class="table table-condensed" id="data">
            <thead>
                <tr class="cart_menu">
                    <td class="description" style="width:30%;">Item</td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                </tr>
            </thead>
            <tbody>
                @if(count($orders) > 0)
                    @foreach($orders as $order)
                        <tr id="order{{$order->order_id}}">
                            <td class="cart_description">
                                <label><b>{{$order->item_name}}</b></label>
                            </td>
                            <td class="cart_price">
                                <div class="input-group" style="width:130px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <p class="cartprice form-control" id="price">{{$order->item_price}}</p>
                                </div>                                
                            </td>
                            <td id="{{$order->item_price}}" class="cart_quantity">
                                <input class="form-control" id="quantity" data-id="{{$order->order_id}}" style="width:80px;" type="number" min="1" value="{{$order->order_quantity}}" size="2">
                            </td>
                            <td class="cart_total">
                                <div class="input-group" style="width:175px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <?php $itemtotal= sprintf('%0.2f',($order->item_price * $order->order_quantity));?>
                                    <p id="totprice" class="form-control"> {{$itemtotal}}</p>
                                    <button class="btn btn-danger" id="removeitem" data-id="{{$order->order_id}}" style="background:white; margin:0px 5px;"><i class="fa fa-trash-alt"color="red"></i></button>
                                    <input name="_token" value="eRYFMqxeGXyGy7Kn1AU7af7qbGlt4uEp8RtYb4Vx" type="hidden">
                                </div>                              
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan ="3">
                            <label>There are no Items Selected</label>
                        </td>
                    </tr>
                @endif
                <tr >
                    <td colspan ="3">
                        <p class="form-control" align="center"> Quotation Total</p>
                    </td>
                    <td >
                        <div class="input-group" style="width:130px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <p id="finalprice" class="form-control"> </p>
                        </div> 
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="editor"></div>
<button class="btn btn-success" id="cmd">Download</button>
</div>

<script>

    var finalprice = 0;
    //this will not include the header row
    var rows = $("#data tr:gt(0)");
    rows.children("td:nth-child(4)").each(function() {
        //each time we add the cell to the total
        finalprice += parseFloat($(this).children().children("#totprice").html());
    });
    $("#finalprice").html(finalprice.toFixed(2));

    $(document).on('click', '#removeitem', function() {
        $.ajax({
            type: 'post',
            url: '/order/cartremove',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $(this).data('id')
            },
            success: function(data) {
                $('#order'+ data.id).remove();
             }   
        });
        
        finalprice = parseFloat($("#finalprice").html()) - parseFloat($(this).siblings("#totprice").html());
        $("#finalprice").html(finalprice.toFixed(2));

        
    });

    $(document).on('click focusout', '#quantity', function() {
        var quantity = $(this).val();
        var price = parseFloat($(this).parent().siblings(".cart_price").children().children("#price").html());
        var totalprice = price * quantity;
        $(this).parent().siblings(".cart_total").children().children("#totprice").html(totalprice.toFixed(2));


        var finalprice = 0;
        var rows = $("#data tr:gt(0)");
        rows.children("td:nth-child(4)").each(function() {
            finalprice += parseFloat($(this).children().children("#totprice").html());
        });
        $("#finalprice").html(finalprice.toFixed(2));

        $.ajax({
                type: 'post',
                url: '/order/quanchange',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $(this).data('id'),
                    'quantity': $(this).val()
                },
                success: function(data) { }                 
            });
    });


    var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };

    $(document).on('click', '#cmd', function() {
        doc.fromHTML($('#content').html(), 15, 15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
    });

</script>


@endsection