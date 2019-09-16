@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <h3>This is where the quotations will go</h3>
    </div>

    <!-- <div class="table-responsive cart_info">

        <table class="table table-condensed">
            <thead>
                <tr class="cart_menu">
                    <td class="description">Item</td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                </tr>
            </thead>
            <tbody>
                @if(count($orders) > 0)
                    @foreach($orders as $order)
                        <tr id="{{$order->order_id}}">
                            <td class="cart_description">
                                <h4><a href="">{{$order->item_name}}</a></h4>
                            </td>
                            <td class="cart_price">
                                <p class="cartprice" id="price">{{$order->item_price}}</p>
                                <input hidden id="abc" type="text" value="1" />
                            </td>
                            <td id="{{$order->item_price}}" class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" id="AddButton"> + </a>
                                    <input class="cart_quantity_input" id="TextBox" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" id="subbutton"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p id="totprice" class="cart_total_price">{{$order->item_price}}</p>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan ="3">
                            <label>There are no Items in the Cart</label>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div> -->

    <div class="table-responsive cart_info">

        <table class="table table-condensed">
            <thead>
                <tr class="cart_menu">
                    <td class="description">Item</td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                </tr>
            </thead>
            <tbody>
                @if(count($orders) > 0)
                    @foreach($orders as $order)
                        <tr id="{{$order->order_id}}">
                            <td class="cart_description">
                                <h4><a href="">{{$order->item_name}}</a></h4>
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
                                <input class="form-control" id="quantity" style="width:80px;" type="number" min="1" value="{{$order->order_quantity}}" size="2">
                            </td>
                            <td class="cart_total">
                                <div class="input-group" style="width:130px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <p id="totprice" class="form-control"> {{$order->item_price}}</p>
                                </div>                                
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan ="3">
                            <label>There are no Items in the Cart</label>
                        </td>
                    </tr>
                @endif
                <tr >
                    <td colspan ="3">
                        <p class="form-control" align="center"> Cart Total</p>
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

    <!-- <div class="row">
        <table id="table" class ="table table-striped table-sm table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>                         
                </tr>
            </thead>
            <tbody>
                @if(count($orders) > 0)
                    @foreach($orders as $order)
                        <tr data-toggle="tooltip" title="click for details">
                            <td>
                                <label>{{$order->item_name}}</label>
                            </td>                   
                            <td>
                                <input type="text" class="form-control" style="width:100px;" value="{{$order->item_price}}" id="pricing" readonly/>
                            </td>
                            <td>	
                                <input type="number" class="quans form-control" id="quantity" style="width:80px;" value="{{$order->order_quantity}}">
                            </td>
                            <td>	
                                <input type="text" class="itotal form-control" style="width:100px;" readonly/>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan ="3">
                            <label>There are no Items in the Cart</label>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div> -->
</div>
<script>
    $(document).on('click', '#quantity', function() {
        var quantity = $(this).val();
        var price = parseFloat($(this).parent().siblings(".cart_price").children().children("#price").html());
        var totalprice = price * quantity;
        $(this).parent().siblings(".cart_total").children().children("#totprice").html(totalprice.toFixed(2));
    });

    $(document).on('focusout', '#quantity', function() {
        var quantity = $(this).val();
        var price = parseFloat($(this).parent().siblings(".cart_price").children().children("#price").html());
        var totalprice = price * quantity;
        $(this).parent().siblings(".cart_total").children().children("#totprice").html(totalprice.toFixed(2));
    });

    var finalprice = 0;

    //reference the rows you want to add
    //this will not include the header row
    var rows = $("#data tr:gt(0)");
    rows.children("td:nth-child(4)").each(function() {
        //each time we add the cell to the total
        finalprice += parseFloat($(this).html());
    });
    $("#finalprice").html(finalprice.toFixed(2));

    // $(document).ready(function() {
    //     $('.cart_quantity_up').click(function(){
    //         var quantityBox = $(this).siblings("#TextBox");
    //         var quantity= parseInt(quantityBox.val()) + 1;
    //         quantityBox.val(quantity);

    //         var price = parseFloat($(this).parent().parent().siblings(".cart_price").children("#price").html());
    //         // var p1box = $(this).parent().parent().siblings(".cart_price").children("#price").html();
    //         // var p1 = parseFloat(p1box.val());
    //         // console.log('this is theone' + p1);
    //         // console.log('howdy101 '+ $(this).parent().previousSibling("#price").html());
    //         console.log('howdy102 '+ price);
    //         var totalPrice = quantity * price;
    //         console.log('howdy '+ totalPrice);
    //         $(this).parent().parent().siblings(".cart_total").children("#totprice").html(totalPrice);
    //     });

    //     $('.cart_quantity_down').click(function() {
    //         var quantityBox = $(this).siblings("#TextBox");
    //         var quantity= parseInt(quantityBox.val()) - 1;
    //         quantityBox.val(quantity);

    //         var price = parseFloat($(this).parent().siblings(".cart_price").children("#price").html());
    //         var totalPrice = quantity * price;
    //         $(this).parent().siblings(".cart_total").children("#totprice").html(totalPrice);
    //     });
    // });
    

</script>


@endsection