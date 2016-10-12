<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 Route::get('store', [
   'as' => 'catalog',
   'uses' => 'storeController@index'
 ]);

 Route::get('product/{slug}', [
   'as' => 'product-detail',
   'uses' => 'storeController@show'
 ]);


 // ..:: CART ::..  //

// Dependency Injection : for repetitive functions
 Route::bind('product', function($slug){
   return App\Product::where('slug', $slug)->first();
 });

 Route::get('cart/show', [
   'as' => 'cart-show',
   'uses' => 'cartController@show'
 ]);

 Route::get('cart/add/{product}',[
   'as' => 'cart-add',
   'uses' => 'cartController@add'
 ]);

 Route::get('cart/delete/{product}',[
   'as' => 'cart-delete',
   'uses' => 'cartController@delete'
 ]);

 Route::get('cart/trash',[
   'as' => 'cart-trash',
   'uses' => 'cartController@trash'
 ]);

 Route::get('cart/update/{product}/{quatity}',[
   'as' => 'cart-update',
   'uses' => 'cartController@update'
 ]);
