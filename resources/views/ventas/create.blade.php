
@extends('plantilla')

@section('titulo', 'Venta')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Nueva Venta</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif
<form method="POST" action="{{route('ventas.store')}}">
    @csrf
    <div>
        <div class="row">
            <div class="col">
                <label for="vendedor">Total Contado</label>
                <input name="total_contado" type="text" class="form-control" placeholder="Total Contado">
            </div>
            <div class="col">
                <label for="vendedor">Total Crédito</label>
                <input name="total_credito" type="text" class="form-control" placeholder="Total Crédito">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <label for="cliente">Cliente</label>
                    <select name="id_cliente" id="usuario" class="form-control">
                    @foreach (App\Clientes::all() as $cliente)                
                        <option value="{{$cliente->id_cliente}}">{{$cliente->nombre}}</option>
                    
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div>
                    <label for="vendedor">Vendedor</label>
                    <select name="id_vendedor" id="id_vendedor" class="form-control">
                        @foreach (App\Personal::all() as $persona)                
                            <option value="{{$persona->id}}">{{$persona->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="mt-3">
        <h2 class="text-center">Detalles de Venta</h2>
        <div class="row">
            <div class="col">
                <div>
                    <label for="cliente">Produto</label>
                    <select name="id_producto" id="usuario" class="form-control">
                    @foreach (App\Productos::all() as $producto)                
                        <option value="{{$producto->id_producto}}">{{$producto->nombre}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor_producto">Valor</label>
                <input name="valor_producto" type="input" class="form-control" placeholder="Cantidad">
            </div>
            <div class="col">
                <label for="cantidad">Cantidad</label>
                <input name="cantidad_producto" type="input" class="form-control" placeholder="Cantidad">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descuento">Descuento</label>
                <input name="descuento" type="input" class="form-control" placeholder="Descuento">
            </div>
            <div class="col">
                <label for="iva">IVA</label>
                <input name="iva" type="input" class="form-control" placeholder="IVA">
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group mt-3 text-center">
        <button class="btn btn-success btn-lg" type="submit">Realizar Venta</button>
    </div>
    
</form>
@endsection