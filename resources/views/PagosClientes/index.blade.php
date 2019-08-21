
@extends('plantilla')

@section('titulo', 'PagoCliente')

@section('contenido')
<div class="mt-5 text-center">
        <h1>PagosClientes</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
    <a class="btn btn-success btn-sm float-right" href="{{ route('PagoCliente.create') }}">
        Crear nuevo Pago
    </a>
</div>

    
    <table class="table table-hover">
        <thead>
            <tr>       

                <th>Id</th>
                <th>Cliente</th>
                <th>Valor Pago</th>
                <th>Fecha Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Pagos as $pago)
            <tr>
                <td> <a href="{{route('PagoCliente.show',$pago->id_pago_cliente)}}"> {{$pago->id_pago_cliente}} </a> </td>
                <td><a href="{{route('clientes.show',$pago->cliente->id_cliente)}}"> {{ $pago->cliente->nombre }} </a></td>
                <td>{{ $pago->valor_pago}}</td>
                <td> {{ $pago->fecha_pago}} </a> </td>
   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $Pagos->links() }}
@endsection