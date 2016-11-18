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
   'uses' => 'storeController@index'
 ]);

 Route::get('product/{slug}', [
   'as' => 'product-detail',
   'uses' => 'storeController@show'
 ]);


 // ..:: CART ::..  //
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

 Route::get('cart/update/{product}',[
   'as' => 'cart-refresh',
   'uses' => 'cartController@refresh'
 ]);

 Route::get('order-detail', [
   'middleware' => 'auth',
   'as' => 'order-detail',
   'uses' => 'cartController@orderDetail'
 ]);


/****************************************************
 *                                                  *
 *                    ADMIN                         *
 *                                                  *
 ***************************************************/

Route::resource('admin/category', 'Admin\categoryController', [
  'names' => [
        'index'   =>  'admin.category.index',
        'create'  =>  'admin.category.create',
        'edit'    =>  'admin.category.edit',
        'store'   =>  'admin.category.store',
        'destroy' =>  'admin.category.destroy'
      ]
]);


Route::get('auth/login', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@login'
]);

Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\RegisterController@register'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
