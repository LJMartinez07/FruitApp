@extends('layouts.app')

@section('title', 'Editar categoria')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">

       <h1>Editar Categoria</h1>
  
    {!! Form::model($categoria, ['route' => ['categoria.update', $categoria], 'method' => 'PUT', 'files' => true]) !!}
        @include('admin.categoria.partials.form')
        <div class="form-group">
    {{ Form::submit('Editar', ['class' => 'btn btn-sm btn-primary']) }}
</div>



    {!! Form::close() !!}




    	
    </div>
</div>

@endsection