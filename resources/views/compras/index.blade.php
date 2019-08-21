
@extends('plantilla')

@section('titulo', 'Compras')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Compras</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
    <a class="btn btn-success btn-sm float-right" href="{{ route('compras.create') }}">
        Crear nueva compra
    </a>
</div>

    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Credito</th>
                <th>Contado</th>
                <th>Proveedor</th>
                <th>Fecha Recibido</th>
                <th>Fecha Compra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
            <tr>
                <td> <a href="{{route('compras.show',$compra->id_compra)}}"> {{$compra->id_compra}} </a> </td>
                <td>{{ $compra->total_credito}}</td>
                <td>{{ $compra->total_contado}}</td>
                <td> <a href="{{route('proveedores.show',$compra->proveedor->id_proveedor)}}"> {{ $compra->proveedor->nombre}} </a> </td>
                <td>{{ $compra->fecha_recibido}}</td>
                <td>{{ $compra->fecha_compra}}</td>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $compras->links() }}
@endsection