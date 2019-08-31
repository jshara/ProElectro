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

Route::get('/item', 'ItemController@index');
Route::get('/cart', 'CartController@index');

// Route::get('/Item/{itemid}', 'ItemController@index');
// Route::get('/cart/{cartid}', 'CartController@index');

