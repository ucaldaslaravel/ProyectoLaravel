@extends('plantilla')
@section('titulo')Pago #
{{$Pago->id_pago_cliente}}
@endsection
@section('contenido')
<h1>Pago #{{ $Pago->id_pago_cliente }}</h1>

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
        <th>Cliente:</th>
        <td> <a href="{{route('clientes.show',$Pago->cliente->id_cliente)}}"> {{ $Pago->cliente->nombre }} </a> </td>
    </tr>
    
    
</table>

@endsection