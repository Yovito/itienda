@extends('admin.template')

@section('content')

  <div class="container text-center">
      <div class="page-header">
        <h1>
          <i class="fa fa-shopping-cart">
            New Category
            <a href="{{ route('Admin.category.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>c</a>
          </i>
        </h1>
      </div>
  </div>

@foreach ($categories as $category)
  <h3>{{ $category->name }}</h3>
@endforeach
