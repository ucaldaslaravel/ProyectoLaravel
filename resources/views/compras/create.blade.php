
@extends('plantilla')

@section('titulo', 'Compra')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Nueva Compra</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif
<form method="POST" action="{{route('compras.store')}}">
    @csrf
    <div>
        <div class="row">
            <div class="col">
                <label>Total Contado</label>
                <input name="total_contado" type="text" class="form-control" placeholder="Total Contado">
            </div>
            <div class="col">
                <label>Total Crédito</label>
                <input name="total_credito" type="text" class="form-control" placeholder="Total Crédito">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <label for="proveedor">Proveedor</label>
                    <select name="id_proveedor" id="usuario" class="form-control">
                    @foreach (App\Proveedores::all() as $proveedor)                
                        <option value="{{$proveedor->id_proveedor}}">{{$proveedor->nombre}}</option>
                    
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="mt-3">
        <h2 class="text-center">Detalles de Compra</h2>
        <div class="row">
            <div class="col">
                <div>
                    <label for="proveedor">Producto</label>
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
                <input name="valor_producto" type="input" class="form-control" placeholder="Cantidad Recibida">
            </div>
            <div class="col">
                    <label for="cantidad_pedida">Cantidad Pedida</label>
                    <input name="cantidad_pedida" type="input" class="form-control" placeholder="Cantidad Pedida">
                </div>
            <div class="col">
                <label for="cantidad_recibida">Cantidad Recibida</label>
                <input name="cantidad_producto" type="input" class="form-control" placeholder="Cantidad">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="iva">IVA</label>
                <input name="iva" type="input" class="form-control" placeholder="IVA">
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group mt-3 text-center">
        <button class="btn btn-success btn-lg" type="submit">Realizar Compra</button>
    </div>
    
</form>
@endsection