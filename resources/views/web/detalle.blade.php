@extends('layouts.app')

@section('title', 'Detalle')



@section('content')
  <div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $fruta->name }}</h1>



		<div class="panel-heading">

		<img width="250" height="250" src="/images/{{ $fruta->file }}" alt="">	<br>
			
			Categorias: <br>
			<hr style="border: solid 1px ;">

			@foreach($fruta->categorias as $categoria)
			
			<strong>Nombre: </strong> {{ $categoria->name }}
			<br>
			<strong>Descripcion: </strong>{{ $categoria->descripcion }}
			<hr style="border: solid 1px ;">

			@endforeach


			
			
		</div>
		<div class="panel-body">
			
		</div>

@endsection