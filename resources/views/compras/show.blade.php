@extends('plantilla')
@section('titulo')Compra #
{{$compra->id_compra}}
@endsection
@section('contenido')
<h1>Compra #{{ $compra->id_compra }}</h1>

<table class="table">
    <tr>
        <th>Fecha recibido:</th>
        <td>{{ $compra->fecha_recibido }}</td>
    </tr>
    <tr>
        <th>Fecha compra:</th>
        <td>{{ $compra->fecha_compra }}</td>
    </tr>
    <tr>
        <th>Total credito:</th>
        <td>{{ $compra->total_credito }}</td>
    </tr>
    <tr>
        <th>Proveedor:</th>
        <td> <a href="{{route('proveedores.show',$compra->proveedor->id_proveedor)}}"> {{ $compra->proveedor->nombre }} </a> </td>
    </tr>
    @foreach ($compra->detalles as $detalle)
    <tr>
        <th>Valor Producto:</th>
        <td> {{$detalle->valor_producto}} </td>
    </tr>
    <tr>
        <th>Cantidad Recibida:</th>
        <td> {{$detalle->cantidad_recibida}} </td>
    </tr>
    <tr>
            <th>Cantidad Pedida:</th>
            <td> {{$detalle->cantidad_pedida}} </td>
        </tr>
    <tr>
        <th>IVA:</th>
        <td> {{$detalle->iva}} </td>
    </tr>
    <tr>
        <th>Producto:</th>
        <td> <a href="{{route('productos.show',$detalle->id_producto)}}"> {{$detalle->id_producto}}</a> </td>
    </tr>
    @endforeach
    
</table>

@endsection