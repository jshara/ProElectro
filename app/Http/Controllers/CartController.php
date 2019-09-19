<?php

namespace App\Http\Controllers;

use App\Cart;
use DB;
use Session;
use App\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $order = Order::all();
        // $order = DB::table('items')
        // ->join('orders','items->item_id','=','orders->item_id')
        // ->select('orders.order_quantity','items.item_name','items.item_price')
        // ->where('orders.done','=','0')
        // ->get();
        $session_id = Session::getId();

        
        // $sql = 'SELECT orders.order_id, orders.order_quantity, orders.session_id, items.item_name, items.item_price FROM orders 
        // INNER JOIN items ON (orders.item_id = items.item_id) WHERE (orders.session_id= $session_id)';
        // $order = DB::select($sql);

        $order = DB::table('orders')
        ->join('items','orders.item_id','=','items.item_id')
        ->select('orders.order_id', 'orders.order_quantity', 'items.item_name','items.item_price')
        ->where('orders.session_id', '=', $session_id)
        ->where('orders.done', '=', 0)
        ->get();
        // dd($order);

        return view('cart.details')->with('orders',$order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
