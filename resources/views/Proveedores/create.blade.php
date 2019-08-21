@extends('plantilla')

@section('titulo', 'Proveedores')

@section('contenido')
@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('proveedores.store') }}>
    {{-- si no se pasa la nueva instancia de User, fallará la carga. Ver la razón en form.blade.php --}}
    @include('proveedores.form', ['proveedor' => new App\Proveedores])
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection