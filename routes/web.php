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
	
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    dd($q);
    // $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    // if(count($user) > 0)
    //     return view('welcome')->withDetails($user)->withQuery ( $q );
    // else return view ('welcome')->withMessage('No Details found. Try to search again !');
});

// Route::get('/Item/{itemid}', 'ItemController@index');
// Route::get('/cart/{cartid}', 'CartController@index');

