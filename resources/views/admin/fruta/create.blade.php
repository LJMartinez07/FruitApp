@extends('layouts.app')

@section('title', 'Crear fruta')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">

            <h1>Crear fruta</h1>

            {!! Form::open(['route' => 'frutages.store', 'files' => true]) !!}

            @include('admin.fruta.partials.form')

            <div class="form-group">
    			{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
			</div>




            {!! Form::close() !!}


        </div>
    </div>
@endsection
