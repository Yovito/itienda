@extends('store.template')
@section('content')

  @foreach ($products as $key)
    <div class="product">
      <h3>{{$key->name}}</h3>
      <img src="{{ $key->image }}" width=250>
      <div class="product-info">
        <p>{{$key->extract}}</p>
        <p>Precio: {{ number_format($key->price, 2) }}</p>
        <p>
          <a href="{{ route('cart-add', $key->slug) }}"><li>Buy</li></a>
          <a href="{{ route('product-detail', $key->slug) }}">Details</a>
        </p>
      </div>
    </div>
  @endforeach
@endsection
