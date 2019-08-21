@extends('plantilla')
@section('titulo', 'Categoria')

@section('contenido')
  
<table class="table">
        <tr>
            <th>Nombre:</th>
            <td>{{ $categoria->id_categoria_producto }}</td>
        </tr>
        <tr>
            <th>Precio:</th>
            <td>{{ $categoria->nombre }}</td>
        </tr>
      
    </table>
      
       <div class="btn-group" role="group">
            <div class="col-md-6 custom">
                @if (auth()->user()->perfil=='Administrador') 
                   <a href={{ route('categoria.edit', $categoria->id_categoria_producto) }}
                      class="btn btn-info">Editar
                   </a>
               @endif
            </div>
            <div class="col-md-6 custom">
               @if (auth()->user()->perfil=='Administrador') 
               <form method="POST" action=
                    "{{ route('categoria.destroy', $categoria->id_categoria_producto) }}">
                    @csrf
                    {!! method_field('DELETE') !!}
                    <button type="submit" class="btn btn-danger">Eliminar
                    </button>
                </form>
               @endif
                   
                </div>
            </div>
    @endsection
