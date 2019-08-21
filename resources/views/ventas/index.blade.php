
@extends('plantilla')

@section('titulo', 'Ventas')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Ventas</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
    <a class="btn btn-success btn-sm float-right" href="{{ route('ventas.create') }}">
        Crear nueva venta
    </a>
</div>

    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Credito</th>
                <th>Contado</th>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Fecha Venta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
            <tr>
                <td> <a href="{{route('ventas.show',$venta->id_venta)}}"> {{$venta->id_venta}} </a> </td>
                <td>{{ $venta->total_credito}}</td>
                <td>{{ $venta->total_contado}}</td>
                <td> <a href="{{route('clientes.show',$venta->cliente->id_cliente)}}"> {{ $venta->cliente->nombre}} </a> </td>
                <td> <a href="{{route('personal.show',$venta->vendedor->id)}}"> {{ $venta->vendedor->nombre}} </a> </td>
                <td>{{ $venta->fecha_venta}}</td>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $ventas->links() }}
@endsection