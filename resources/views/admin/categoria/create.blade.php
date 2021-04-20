@extends('layouts.app')

@section('title', 'Crear categoria')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">

      <h1>Crear Categoria</h1>

      {!! Form::open(['route' => 'categoria.store', 'files' => true]) !!}

        @include('admin.categoria.partials.form')
        <div class="form-group">
    		{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
		</div>


      {!! Form::close() !!}
</div>

@endsection