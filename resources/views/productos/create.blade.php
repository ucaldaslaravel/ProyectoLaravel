@extends('plantilla')

@section('titulo', 'Crear Producto')

@section('contenido')
    @if (session()->has('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('productos.store') }}>
    {{-- si no se pasa la nueva instancia de User, fallará la carga. Ver la razón en form.blade.php --}}
    @include('productos.form', ['Producto' => new App\Productos])
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection