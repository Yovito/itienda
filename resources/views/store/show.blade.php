@extends('store.template')

@section('content')

  <h1>Detail of Product</h1>
  <div class="products-block">
    <img src="{{ $product->image }}" alt="" width="300" />
  </div>
  <div class="product-block">
    <h3>{{ $product->name }}</h3>
    <div class="product-info">
      <p> {{ $product->descrition }} </p>
      <p> price : {{ number_format( $product->price, 2 ) }} </p>
      <p>
        <a href="#">BUY</a>
      </p>
    </div>
    <p>
      <a href="{{ route('catalog') }}">Back</a>
    </p>
  </div>
@endsection
