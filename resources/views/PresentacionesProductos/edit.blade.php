@extends('plantilla')

@section('titulo', 'Editar Presentacion Producto')

@section('contenido')

    <br>
	<h3>Editar Presentacion Producto</h3>
	<br>
    
    @if (session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif

	<form method="post" action={{ route('presentacionesproductos.update', $presentacionproducto->id_presentacion_producto) }}>
		{!! method_field('PUT') !!}
		@include('presentacionesproductos.form')
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>	
@endsection