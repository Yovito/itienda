@extends('store.template')

@section('content')

  <div class="container text-center">
      <form class="" action="" method="post">
        <label for="product-id"></label>
        <input type="text" id="product-id" name="product-name" value="">
        <br>
        <label for="slug"></label>
        <input type="text" id="slug" name="slug" value="">
        <br>
        <label for=""></label>
        <input type="text" name="description" value="">
        <br>
        <label for=""></label>
        <input type="text" name="color" value="">
      </form>
  </div>

@endsection
