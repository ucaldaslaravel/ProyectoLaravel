@extends('plantilla')

@section('titulo', 'Editar Producto')

@section('contenido')

    <br>
	<h3>Editar Producto</h3>
	<br>
    
    @if (session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif

	<form method="post" action={{ route('productos.update', $producto->id_producto) }}>
		{!! method_field('PUT') !!}
		@include('productos.form')
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>	
@endsection