@extends('Admin.template')

@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-shopping-cart"></i>
        Categoria <small>[Agregar categoria]</small>
      </h1>
    </div>

    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <div class="page">
          @if (count($errors)>0)
            @include('Admin.commons.errors')
          @endif

          {!! Form::open(['route'=>'admin.category.store']) !!}
          {{ csrf_field() }}
          <div class="form-group">
              <label for="name">Nombre</label>
              {!!
                  Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Ingresa el nombre ...',
                                            'autofocus' => 'autofocus'])
               !!}
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            {!!
              Form::textarea('description', null, [
                                            'class' => 'form-control'])
             !!}
          </div>

          <div class="form-group">
            <label for="color">color:</label>
            <input type="color" name="color" value="" class="form-control">
            
          </div>

          <div class="form-group">
            {!! Form::submit('Guardar', [
                                          'class' => 'btn btn-primary']) !!}
            <a href="{{ route('admin.category.index')}}" class="btn btn-warning">Cancelar</a>
          </div>

          {!! Form::close() !!}
        </div>
      </div>

    </div>

  </div>

@endsection
