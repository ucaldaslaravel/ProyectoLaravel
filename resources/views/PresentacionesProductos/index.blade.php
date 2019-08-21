
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

                    <td> <a href="{{route('presentacionesproductos.show',$presentacionproducto->id_presentacion_producto)}}"> {{ $presentacionproducto->descripcion}} </a> </td>
                
                <td> 
                        <a href="{{ route('presentacionesproductos.edit', $presentacionproducto->id_presentacion_producto) }}" class="btn btn-success">
                                Editar</a>
           
                             <form style="display:inline" 
                                   method="POST" 
                                   action="{{ route('presentacionesproductos.destroy',
                                              $presentacionproducto->id_presentacion_producto) }}">
                                 @csrf
                                 {!! method_field('DELETE') !!}
                                 <button type="submit" class="btn btn-danger">Eliminar</button>
                             </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $presentacionesproductos->links() }}
  
@endsection