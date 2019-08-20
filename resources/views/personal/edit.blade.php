@extends('plantilla')

@section('titulo', 'Personal')

@section('contenido')

    <br>
	<h3>Editar usuario del personal</h3>
	<br>
    
    @if (session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif

	<form method="post" action={{ route('personal.update', $personal->id) }}>
		{!! method_field('PUT') !!}
		@include('personal.form')
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>	
@endsection