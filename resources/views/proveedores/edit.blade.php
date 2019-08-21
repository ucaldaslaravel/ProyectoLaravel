@extends('plantilla')

@section('titulo', 'Proveedores')

@section('contenido')

    <br>
    <h3>Editar Proveedor</h3>
    <br>

    @if (session()->has('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <form method="post" action={{ route('proveedores.update', $proveedor->id_proveedor) }}>
        {!! method_field('PUT') !!}
        @include('proveedores.form')
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>	

@endsection