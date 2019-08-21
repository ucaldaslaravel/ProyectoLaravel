
@extends('plantilla')

@section('titulo', 'PagoCliente')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Nueva Pago</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif
<form method="POST" action="{{route('PagoCliente.store')}}">
    @csrf
    <div>
        <div class="row">
            <div>
                <label for="cliente">Cliente</label>
                <select name="id_cliente" id="usuario" class="form-control">
                @foreach (App\Clientes::all() as $cliente)                
                    <option value="{{$cliente->id_cliente}}">{{$cliente->nombre}}</option>
                
                @endforeach
                </select>
            </div>
            <div>
                    <label for="vendedor">Valor Pago</label>
                    <input name="valor_pago" type="input" class="form-control" placeholder="Cantidad">

                    
                </div>
        </div>
        
    </div>
    
    <div class="form-group mt-3 text-center">
        <button class="btn btn-success btn-lg" type="submit">Realizar Pago</button>
    </div>
    
</form>
@endsection