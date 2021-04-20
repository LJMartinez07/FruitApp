<div class="form-group">
	{{ Form::label('name', 'Nombre de la Categoria') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}

</div>
<div class="form-group">
	{{ Form::label('descripcion', 'Descripción') }}
    {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
