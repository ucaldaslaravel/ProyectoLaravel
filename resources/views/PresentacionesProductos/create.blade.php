@extends('plantilla')

@section('titulo', 'Crear Presentaciones Producto')

@section('contenido')
    @if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('presentacionesproductos.store') }}>
    {{-- si no se pasa la nueva instancia de User, fallará la carga. Ver la razón en form.blade.php --}}
    @include('presentacionesproductos.form', ['presentacionproducto' => new App\PresentacionesProductos])
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
	
@endsection