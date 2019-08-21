@extends('plantilla')
@section('titulo')
@endsection
@section('contenido')
<h1>{{ $producto->nombre }}</h1>

<table class="table">
    <tr>
        <th>Nombre:</th>
        <td>{{ $producto->nombre }}</td>
    </tr>
    <tr>
        <th>Precio:</th>
        <td>{{ $producto->precio }}</td>
    </tr>
    <tr>
        <th>Iva:</th>
        <td>{{ $producto->iva }}</td>
    </tr>
    <tr>
            <th>Cantidad Disponible:</th>
            <td>{{ $producto->cantidad_disponible }}</td>
        </tr>
        <tr>
            <th>Cantidad Minima:</th>
            <td>{{ $producto->cantidad_minima }}</td>
        </tr>
        <tr>
                <th>Cantidad Maxima:</th>
                <td>{{ $producto->cantidad_maxima }}</td>
            </tr>
               <tr>
                <th>Categoria:</th>
                <td>{{ $producto->getCategoria() }}</td>
            </tr>
            <tr>
                <th> Presentacion:</th>
                <td>{{ $producto->getPresentacion()}}</td>
            </tr>
</table>
  
   <div class="btn-group" role="group">
        <div class="col-md-6 custom">
            @if (auth()->user()->perfil=='Administrador') 
               <a href={{ route('productos.edit', $producto->id_producto) }}
                  class="btn btn-info">Editar
               </a>
           @endif
        </div>
        <div class="col-md-6 custom">
           @if (auth()->user()->perfil=='Administrador') 
           <form method="POST" action=
                "{{ route('productos.destroy', $producto->id_producto) }}">
                @csrf
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger">Eliminar
                </button>
            </form>
           @endif
               
            </div>
        </div>
@endsection