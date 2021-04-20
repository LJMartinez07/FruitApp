@extends('layouts.app')

@section('title', 'Frutas')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>Lista de fruta</h1>
		@guest
		<table class="table">
		
			<thead>
			<tr>
				<th scope="col">imagen</th>
			<th scope="col">Nombre</th>

			<th scope="col">Precio</th>
			<th scope="col"></th>
			
			</tr>

			</thead>

			<tbody>


	
			@foreach($frutas as $fruta)

				<tr>
					<td><img width="50" height="50" src="{{ $fruta->file }}" alt=""></td>
					<td>{{ $fruta->name }}</td>
					<td>RD$ {{ $fruta->precio }}</td>
					<td><a href="frutages/{{ $fruta->slug }}" class="btn btn-dark">Ver mas</a></td>
					

				</tr>

			@endforeach

			</tbody>

		</table>
		@else
		<table class="table">
		
			<thead>
			<tr>
				<th scope="col">imagen</th>
			<th scope="col">Nombre</th>

			<th scope="col">Precio</th>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"></th>
			</tr>

			</thead>

			<tbody>


	
			@foreach($frutas as $fruta)

				<tr>
					<td><img width="50" height="50" src="images/{{ $fruta->file }}" alt=""></td>
					<td>{{ $fruta->name }}</td>
					<td >RD$ {{ $fruta->precio }}</td>
					<td><a href="frutages/{{ $fruta->slug }}" class="btn btn-dark">Ver mas</a></td>
					<td><a href="frutages/{{ $fruta->slug }}/edit" class="btn btn-dark">Editar</a></td>

					<td> {!! Form::open(['route' => ['frutages.destroy', $fruta->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}</td>

				</tr>

			@endforeach

			</tbody>

		</table>
		@endguest


		<center>	{{ $frutas->render() }}</center>
	</div>

</div>


@endsection