@extends('plantilla')

@section('titulo', 'Baja prodcuto')

@section('contenido')

    <br>
	<h3>Editar baja de producto</h3>
	<br>
    
    @if (session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif

	<form method="post" action={{ route('bajasproductos.update', $baja->id_baja_producto) }}>
		@csrf
		{!! method_field('PUT') !!}
		@include('bajasproductos.form')
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>	
@endsection