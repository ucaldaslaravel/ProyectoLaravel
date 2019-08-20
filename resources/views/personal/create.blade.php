@extends('plantilla')

@section('titulo', 'Personal')

@section('contenido')
    @if (session()->has('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('personal.store') }}>
    {{-- si no se pasa la nueva instancia de User, fallará la carga. Ver la razón en form.blade.php --}}
    @include('personal.form', ['personal' => new App\Personal])
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection