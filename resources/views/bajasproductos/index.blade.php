
@extends('plantilla')

@section('titulo', 'Bajas Productos')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Bajas de productos</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
    <a class="btn btn-success btn-sm float-right" href="{{ route('bajasproductos.create') }}">
        Crear nueva baja
    </a>
</div>

    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bajas as $baja)
            <tr>
                <td>{{$baja->id_baja_producto}}</td>
                <td> 
                    <a href="{{route('bajasproductos.show',$baja->id_baja_producto)}}">{{ $baja->producto->nombre}} </a>
                </td>
                <td>{{ $baja->tipo_baja}}</td>
                <td>{{ $baja->cantidad}}</td>
                <td>{{ $baja->precio}}</td>
                <td>{{ $baja->fecha}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('bajasproductos.edit',$baja->id_baja_producto)}}">Editar</a>
                </td>
                <td>
                <form method="POST" action="{{route('bajasproductos.destroy',$baja->id_baja_producto)}}" style="display:inline">
                    @csrf
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger" type="submit">Eliminar</button>    
                </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $bajas->links() }}
@endsection