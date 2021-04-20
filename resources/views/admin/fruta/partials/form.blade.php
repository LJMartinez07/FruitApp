<div class="form-group">
	{{ Form::label('name', 'Nombre de la Fruta') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
		{{ Form::label('precio', 'Nombre de la Fruta') }}
    {{ Form::number('precio', null, ['class' => 'form-control', 'id' => 'precio']) }}
</div>
@if(isset($fruta))
<div class="form-group">
     Imagen actual <br>
     <img width="50" height="50" src="/images/{{ $fruta->file }}" alt="">


</div>
   
@endif
<div class="form-group">
	{{ Form::label('file', 'Imagen') }}
    {{ Form::file('file', null, ['class' => 'form-control', 'id' => 'file']) }}
</div>
<div class="form-group">
	{{ Form::label('categoria', 'Categoria') }} <br>
	  @foreach($categorias as $a)
    {{ Form::checkbox('categorias[]', $a->id) }} {{ $a->name }} 
     @endforeach
   
</div>

