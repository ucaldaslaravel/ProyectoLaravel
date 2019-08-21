@extends('plantilla')

@section('titulo', 'Editar Cliente')

@section('contenido')

    <br>
	<h3>Editar Cliente</h3>
	<br>
    
    @if (session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif

	<form method="post" action={{ route('clientes.update', $cliente->id_cliente) }}>
		{!! method_field('PUT') !!}
		@include('clientes.form')
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>	
@endsection