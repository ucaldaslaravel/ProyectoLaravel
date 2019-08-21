@extends('plantilla')
@section('titulo')
{{$presentacionproducto->descripcion}}
@endsection
@section('contenido')
<h1>{{ $presentacionproducto->descripcion }}</h1>

<table class="table">
    <tr>
        <th>Nombre:</th>
        <td>{{ $presentacionproducto->descripcion }}</td>
    </tr>
</table>
  
   <div class="btn-group" role="group">
        <div class="col-md-6 custom">
            @if (auth()->user()->perfil=='Administrador') 
               <a href={{ route('presentacionesproductos.edit', $presentacionproducto->id_presentacion_producto) }}
                  class="btn btn-info">Editar
               </a>
           @endif
        </div>
        <div class="col-md-6 custom">
           @if (auth()->user()->perfil=='Administrador') 
           <form method="POST" action=
                "{{ route('presentacionesproductos.destroy', $presentacionproducto->id_presentacion_producto) }}">
                @csrf
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger">Eliminar
                </button>
            </form>
           @endif
               
            </div>
        </div>
@endsection