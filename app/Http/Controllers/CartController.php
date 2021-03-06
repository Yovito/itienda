<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use DeepCopy\Filter\ReplaceFilter;

class CartController extends Controller{

    // contructor
    public function __construct(){

      if( ! \Session::has('cart') ){
        \Session::put( 'cart', array() );
      }else{
        return false;
      }
    }
    // show cart
    public function show(){
      $cart = \Session::get('cart'); //create ande session variable session for cart
      $total = $this->total();
      return view( 'store.cart', compact('cart', 'total') );
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

    // update item
    public function update(Product $product, $quantity){
      $cart = \Session::get('cart');
      $cart[$product->slug]->quantity = $quantity;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    // update item
    public function refresh(Product $product){
      $cart = \Session::get('cart');
      $cart[$product->slug]->quantity = $quantity;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    public function trash(){
      \Session::forget('cart'); //erase everything inside this var

      return redirect()->route('cart-show');
    }

    // Total
    private function total(){
      $cart = \Session::get('cart');
      $total = 0;
      foreach ($cart as $item) {
        $total += $item->price * $item->quantity;
      }

      return $total;
    }

    // Order Detail
    public function orderDetail(){
      if (count(\Session::get('cart')) <= 0)
          return redirect()->route('catalog');

        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
      }


}
