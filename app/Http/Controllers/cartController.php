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
      $cart = \Session::get('cart');

      return view( 'store.cart', compact('cart') );
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
    public function delete(Product $product){
      $cart = \Session::get('cart');
      unset($cart[$product->slug]);
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    public function trash(){
      \Session::forget('cart');

      return redirect()->route('cart-show');
    }

    // update item
    public function update (Product $product, $quantity){
      $cart = \Session::get('cart');
      $cart[$product->slug]->quantity = $quantity;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

}
