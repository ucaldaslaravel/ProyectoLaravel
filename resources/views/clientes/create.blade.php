@extends('plantilla')

@section('titulo', 'Crear Cliente')

@section('contenido')
    @if (session()->has('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('clientes.store') }}>
    {{-- si no se pasa la nueva instancia de User, fallará la carga. Ver la razón en form.blade.php --}}
    @include('clientes.form', ['cliente' => new App\Clientes])
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection