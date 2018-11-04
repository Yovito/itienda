<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class ProductController extends Controller{

    //
    public function index(){

      $products = Product::orderBy('id', 'desc')->paginate(10);
      dd($products);
    }

    public function create(){

    }

    public function store(){

    }
}
