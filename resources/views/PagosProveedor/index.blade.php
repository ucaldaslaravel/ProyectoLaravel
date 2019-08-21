
@extends('plantilla')

@section('titulo', 'PagoProveedor')

@section('contenido')
<div class="mt-5 text-center">
        <h1>PagosProveedores</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
    <a class="btn btn-success btn-sm float-right" href="{{ route('PagoProveedor.create') }}">
        Crear nuevo Pago
    </a>
</div>

    
    <table class="table table-hover">
        <thead>
            <tr>       

                <th>Id</th>
                <th>Proveedor</th>
                <th>Valor Pago</th>
                <th>Fecha Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Pagos as $pago)
            <tr>
                <td> <a href="{{route('PagoProveedor.show',$pago->id_pago_proveedor)}}"> {{$pago->id_pago_proveedor}} </a> </td>
                <td><a href="{{route('proveedores.show',$pago->proveedor->id_proveedor)}}" >{{ $pago->proveedor->nombre }}</td>
                <td>{{ $pago->valor_pago}}</td>
                <td> {{ $pago->fecha_pago}} </a> </td>
   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $Pagos->links() }}
@endsection