@extends('store.template')

@section('content')
  <div class="container">
    <div class="page-header">
      <h1> <i class="fa fa-shopping-cart"></i> Detail of Products <small>Subtext</small></h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="products-block">
          <img src="{{ $product->image }}" alt="" width="300" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="product-block">
          <h3>{{ $product->name }}</h3><hr>
          <div class="product-info panel">
            <p> {{ $product->descrition }} </p>
            <h3><span class="label label-success">
              price : {{ number_format( $product->price, 2 ) }}
            </span></h3>
            <p>
              <a class="btn btn-warning btn-block" href="#">
                BUY
                <i class="fa fa-cart-plus fa-2x  "></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div><hr>

    <p>
      <a class="btn btn-primary" href="{{ route('catalog') }}">
      <i class="fa fa-chevron-circle-left"></i>  Back</a>
    </p>

  </div>

@endsection
