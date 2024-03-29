<?php

namespace App\Http\Controllers;

use App\Order;
use DB;
use Session;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function ajaxadd(Request $req){
        $order = new Order();
        $order->order_quantity = 1;
        $order->item_id = $req->id;
        $order->session_id = Session::getId();
        $order->save();

        return response()->json($order);
    }

    public function ajaxremove(Request $req){
        DB::table('orders')
        ->where('item_id','=',$req->id)
        ->where('session_id','=',Session::getId())
        ->update(['done'=> 1]);
        
        return response()->json($req);
    }

    public function cartremove(Request $req){
        DB::table('orders')
        ->where('order_id','=',$req->id)
        ->update(['done'=> 1]);

        return response()->json($req);
    }

    public function quanchange(Request $req){
        DB::table('orders')
        ->where('order_id','=',$req->id)
        ->update(['order_quantity'=> $req->quantity]);
        
        return response()->json($req->id);
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
