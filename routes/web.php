<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


// Route::get('/brand/{catid}', 'BrandController@index');
Route::get('/brand/{brandid}', 'BrandController@index');

Route::get('/cat/{catid}', 'CategoryController@index');
Route::get('/store/{storeid}', 'StoreController@index');

Route::any('/item', 'ItemController@index');
Route::get('/cart', 'CartController@index');
	
Route::post('/order/add', 'OrdersController@ajaxadd');
Route::post('/order/remove', 'OrdersController@ajaxremove');
Route::post('/order/cartremove', 'OrdersController@cartremove');
Route::post('/order/quanchange', 'OrdersController@quanchange');

// Route::get('/Item/{itemid}', 'ItemController@index');
// Route::get('/cart/{cartid}', 'CartController@index');

