@extends('plantilla')
@section('titulo')Venta #
{{$venta->id_venta}}
@endsection
@section('contenido')
<h1>Venta #{{ $venta->id_venta }}</h1>

<table class="table">
    <tr>
        <th>Fecha venta:</th>
        <td>{{ $venta->fecha_venta }}</td>
    </tr>
    <tr>
        <th>Total credito:</th>
        <td>{{ $venta->total_credito }}</td>
    </tr>
    <tr>
        <th>Cliente:</th>
        <td> <a href="{{route('clientes.show',$venta->cliente->id_cliente)}}"> {{ $venta->cliente->nombre }} </a> </td>
    </tr>
    <tr>
        <th>Vendedor:</th>
        <td> <a href="{{route('personal.show',$venta->vendedor->id)}}"> {{ $venta->vendedor->nombre }} </a> </td>
    </tr>
    @foreach ($venta->detalles as $detalle)
    <tr>
        <th>Valor Producto:</th>
        <td> {{$detalle->valor_producto}} </td>
    </tr>
    <tr>
        <th>Cantidad Producto:</th>
        <td> {{$detalle->cantidad}} </td>
    </tr>
    <tr>
        <th>Descuento:</th>
        <td>{{ $detalle->descuento }}</td>
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