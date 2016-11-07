@extends('store.template')

@section('content')

  <div class="container text-center">
    <div class="page-header">
      <h1><i class="fa fa-shopping-cart"></i> Shopping Cart </h1>
    </div>

    <div class="table-cart">
      @if (count($cart))
        <p>
          <a href="{{ route('cart-trash') }}" class="btn btn-danger">Empty Cart</a>
        </p>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr>
              <th>images</th>
              <th>Products</th>
              <th>Price</th>
              <th>Quatity</th>
              <th>Sub-Total</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
              @foreach($cart as $item)
                <tr>
                  <td><img src="{{ $item->image }}" alt="" width="200"/></td>
                  <td>{{ $item->name }}</td>
                  <td>S/. {{ number_format( $item->price, 2 ) }}</td>
                  <td>
                    <input type="number"
                      min="1" max="100"
                      value="{{ $item->quantity }}"
                      id="product_{{ $item->id }}" name="name" >

                    <a href="#"
                      class="btn btn-warning btn-update-item"
                      data-href="{{ route('cart-refresh', $item->slug) }}"
                      data-id="{{ $item->id }}">
                      <i class="fa fa-refresh"></i>
                    </a>
                  </td>
                  <td>T- {{ number_format( $item->price * $item->quantity, 2 ) }}</td>
                  <td>
                    <a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
                      <li class="fa fa-remove"></li>
                    </a>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table><hr>
        <h3>
          <span class="label label-success">
            TOTAL:  {{ number_format( $total, 2 ) }}
          </span>
        </h3>
      </div>
      @else
        <h1>Nothig to show!</h1>
      @endif
      <hr>
      <p>
        <a href="{{ route('catalog') }}" class="btn btn-primary">
          <i class="fa fa-chevron-circle-left"></i>Continue Buying
        </a>
        <a href="{{ route('order-detail') }}" class="btn btn-primary">
          Next<i class="fa fa-chevron-circle-right"></i>
        </a>
      </p>
    </div>
  </div>
@endsection
