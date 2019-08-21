
@extends('plantilla')

@section('titulo', 'Categorias Productos')

@section('contenido')

<br>
<h3>Categorias Productos</h3>

<div>
        <a class="btn btn-success btn-sm float-right" href="{{ route('categoria.create') }}">
            Crear nuevo producto
        </a>
        </div>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
           
    </thead>
    
    <tbody>
        @foreach ($categorias as $categoria)
             <tr>
                    <td>{{ $categoria->id_categoria_producto}}</td>
                    
                    <td><a href="{{route('categoria.show',$categoria->id_categoria_producto)}}">{{ $categoria->nombre}}</td>
                
                <td> 
                   <div class="btn-group" role="group">
                        <div class="col-md-6 custom">
                            <a class="btn btn-success" href="{{ route('categoria.edit', $categoria->id_categoria_producto) }}">Editar</a>    
                        </div>

                        <div class="col-md-6 custom">
                            <form method="POST" action="{{ route('categoria.destroy', $categoria->id_categoria_producto) }}">
                                @csrf
                                {!! method_field('DELETE') !!}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div> 
                </td>
            </tr>
        @endforeach
    </tbody>
    {{ $categorias->links() }}

</table>
  
@endsection