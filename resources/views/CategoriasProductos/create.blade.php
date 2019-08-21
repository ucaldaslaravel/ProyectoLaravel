@extends('plantilla')

@section('titulo', 'Crear Categoria')

@section('contenido')
    @if (session()->has('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('categoria.store') }}>
    {{-- si no se pasa la nueva instancia de User, fallará la carga. Ver la razón en form.blade.php --}}
    @include('CategoriasProductos.form', ['Categoria' => new  App\CategoriasProductos])
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection