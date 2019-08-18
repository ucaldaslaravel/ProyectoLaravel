
@extends('plantilla')

@section('titulo', 'Presentaciones Productos')

@section('contenido')

<br>
<h3>Presentaciones Productos</h3>
{{-- <a class="btn btn-primary btn-sm float-right" 
   href="{{ route('clientes.crear') }}"
>Crear nuevo cliente</a> --}}
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Acciones</th>
           
    </thead>
    
    <tbody>
        @foreach ($presentacionesproductos as $presentacionproducto)
             <tr>
                    <td>{{ $presentacionproducto->id_presentacion_producto}}</td>

                <td>{{ $presentacionproducto->descripcion}}</td>
                
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