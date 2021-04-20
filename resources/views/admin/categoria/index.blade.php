@extends('layouts.app')

@section('title', 'Frutas')

@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h1>Lista de categoria</h1>

		<a href="{{ route('categoria.create') }}" class="btn btn-success" >Crear vueva categoria</a>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Descripcion</th>
					<th scope="col"></th>
					<th scope="col"></th>
				</tr>

				<tbody>
					@foreach($categoria as $cat)

					<tr>

					<td>{{ $cat->name }}</td>
					<td>{{ $cat->descripcion }}</td>
					<td><a href="categoria/{{ $cat->id }}/edit"  class="btn btn-dark">Editar</a></td>
					<td>
						 {!! Form::open(['route' => ['categoria.destroy', $cat->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
					</td>
					</tr>

					@endforeach
				</tbody>
			</thead>

		</table>
	</div>
</div>

@endsection 