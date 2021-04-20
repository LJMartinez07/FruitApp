@extends('layouts.app')
@section('title', 'Editar fruta')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">

            <h1>Editar</h1>
            {!! Form::model($fruta, ['route' => ['frutages.update', $fruta], 'method' => 'PUT', 'files' => true]) !!}
                @include('admin.fruta.partials.form')
                <div class="form-group">
    				{{ Form::submit('Editar', ['class' => 'btn btn-sm btn-primary']) }}
				</div>

            {!! Form::close() !!}




           
            



        </div>
    </div>
@endsection
