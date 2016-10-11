<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class cartController extends Controller{

    // contructor
    public function __construct(){

      if( ! \Session::has('cart') ){
        \Session::put( 'cart', array() );
      }
    }
    // show cart
    public function show(){
      return dd(\Session::get('cart'));
    }

    // add item
    public function add(Product $product){
      $cart = \Session::get('cart');
      $product->quantity = 1;
      $cart[$product->slug] = $product;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
   }

    // delete item

    // update item

}
