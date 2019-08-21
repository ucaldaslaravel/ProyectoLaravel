@extends('plantilla')
@section('titulo')Pago #
{{$Pago->id_pago_proveedor}}
@endsection
@section('contenido')
<h1>Pago #{{ $Pago->id_pago_proveedor }}</h1>

<table class="table">
    <tr>
        <th>Fecha Pago:</th>
        <td>{{ $Pago->fecha_pago }}</td>
    </tr>
    <tr>
        <th>Valor Pago:</th>
        <td>{{ $Pago->valor_pago }}</td>
    </tr>
    <tr>
        <th>Proveedor:</th>
        <td> <a href="{{route('proveedores.show',$Pago->proveedor->id_proveedor)}}"> {{ $Pago->proveedor->nombre }} </a> </td>
    </tr>
    
    
</table>

@endsection