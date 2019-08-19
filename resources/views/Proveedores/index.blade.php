
@extends('plantilla')

@section('titulo', 'Todos los Proveedores')

@section('contenido')

<br>
<h3>Proveedores</h3>
{{-- <a class="btn btn-primary btn-sm float-right" 
   href="{{ route('clientes.crear') }}"
>Crear nuevo cliente</a> --}}
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

                <td>{{ $proveedor->nombre}}</td>
                <td>{{ $proveedor->telefono}}</td>
                <td>{{ $proveedor->correo}}</td>
                <td> 
                   {{-- --{} <div class="btn-group" role="group">
                        <div class="col-md-6 custom">
                            <a class="btn btn-info btn-sm" href="{{ route('clientes.edit', $cliente->id_cliente) }}">Editar</a>    
                        </div>

                        <div class="col-md-6 custom">
                            <form method="POST" action="{{ route('clientes.destroy', $cliente->id_cliente) }}">
                                @csrf
                                {!! method_field('DELETE') !!}
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
  
@endsection