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

// Dependency Injection : for repetitive functions
 Route::bind('product', function($slug){
   return App\Product::where('slug', $slug)->first();
 });

 // Category dependency injection
 Route::bind('category', function($category){
     return App\Category::find($category);
 });

Route::bind('user', function($user){
  return App\User::find($user);
});

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', [
   'as' => 'catalog',
   'uses' => 'StoreController@index'
 ]);

 Route::get('product/{slug}', [
   'as' => 'product-detail',
   'uses' => 'StoreController@show'
 ]);


 // ..:: CART ::..  //
 Route::get('cart/show', [
   'as' => 'cart-show',
   'uses' => 'CartController@show'
 ]);

 Route::get('cart/add/{product}',[
   'as' => 'cart-add',
   'uses' => 'CartController@add'
 ]);

 Route::get('cart/delete/{product}',[
   'as' => 'cart-delete',
   'uses' => 'CartController@delete'
 ]);

 Route::get('cart/trash',[
   'as' => 'cart-trash',
   'uses' => 'CartController@trash'
 ]);

 Route::get('cart/update/{product}/{quatity}',[
   'as' => 'cart-update',
   'uses' => 'CartController@update'
 ]);

 Route::get('cart/update/{product}',[
   'as' => 'cart-refresh',
   'uses' => 'CartController@refresh'
 ]);

 Route::get('order-detail', [
   'middleware' => 'auth',
   'as' => 'order-detail',
   'uses' => 'CartController@orderDetail'
 ]);


/****************************************************
 *                                                  *
 *                    ADMIN                         *
 *                                                  *
 ***************************************************/

Route::resource('admin/category', 'Admin\CategoryController', [
  'names' => [
        'index'   =>  'admin.category.index',
        'create'  =>  'admin.category.create',
        'edit'    =>  'admin.category.edit',
        'update'  =>  'admin.category.update',
        'store'   =>  'admin.category.store',
        'destroy' =>  'admin.category.destroy'
      ]
]);

Route::resource('admin/product', 'Admin\ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index');
