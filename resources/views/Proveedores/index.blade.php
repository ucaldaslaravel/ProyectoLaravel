
@extends('plantilla')

@section('titulo', 'Todos los Proveedores')

@section('contenido')

<br>
<h3>Proveedores</h3>
{{-- <a class="btn btn-primary btn-sm float-right" 
   href="{{ route('clientes.crear') }}"
>Crear nuevo cliente</a> --}}
@if (session()->has('info'))
<div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
<a class="btn btn-success btn-sm float-right" href="{{ route('proveedores.create') }}">
    Crear nuevo proveedor
</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
           
    </thead>
    
    <tbody>
        @foreach ($proveedores as $proveedor)
             <tr>
                    <td>{{ $proveedor->id_proveedor}}</td>

                <td> <a href="{{route('proveedores.show',$proveedor->id_proveedor)}}"> {{ $proveedor->nombre}} </a> </td>
                   
                <td>{{ $proveedor->telefono}}</td>
                <td>{{ $proveedor->correo}}</td>
                <td>
                        <a href="{{ route('proveedores.edit', $proveedor->id_proveedor) }}" class="btn btn-success">
                                Editar</a>
           
                             <form style="display:inline" 
                                   method="POST" 
                                   action="{{ route('proveedores.destroy',
                                              $proveedor->id_proveedor) }}">
                                 @csrf
                                 {!! method_field('DELETE') !!}
                                 <button type="submit" class="btn btn-danger">Eliminar</button>
                             </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
  
@endsection