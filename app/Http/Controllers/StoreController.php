<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class StoreController extends Controller{

    //StoreController for all maintinence stock
   public function index(){
     $products = Product::all();
     return view('store.index', compact('products'));
   }

   public function show($slug){
     $product = Product::where('slug', $slug)->first();
     //dd($products);

     return view('store.show', compact('product'));
   }

}
