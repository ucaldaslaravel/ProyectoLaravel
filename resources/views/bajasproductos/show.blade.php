@extends('plantilla')
@section('titulo')
Baja {{$baja->id_baja_producto}}
@endsection
@section('contenido')
Baja #<h1>{{ $baja->id_baja_producto }}</h1>

<table class="table">
    <tr>
        <th>Id:</th>
        <td>{{ $baja->id_baja_producto }}</td>
    </tr>
    <tr>
        <th>Producto:</th>
        <td> 
            <a href="{{route('productos.show',$baja->id_producto)}}"> {{ $baja->producto->nombre }} </a> 
        </td>
    </tr>
    <tr>
        <th>Tipo baja:</th>
        <td>{{ $baja->tipo_baja }}</td>
    </tr>
    <tr>
        <th>Cantidad</th>
        <td>{{ $baja->cantidad }}</td>
    </tr>
    <tr>
        <th>Precio</th>
        <td>{{ $baja->producto->precio }}</td>
    </tr>
</table>
  
   <div class="btn-group" role="group">
        <div class="col-md-6 custom">
            @if (auth()->user()->perfil=='Administrador' ) 
               <a href={{ route('bajasproductos.edit', $baja->id_baja_producto) }}
                  class="btn btn-info">Editar
               </a>
           @endif
        </div>
        <div class="col-md-6 custom">
           @if (auth()->user()->perfil=='Administrador') 
           <form method="POST" action=
                "{{ route('bajasproductos.destroy', $baja->id_baja_producto) }}">
                @csrf
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger">Eliminar
                </button>
            </form>
           @endif
               
            </div>
        </div>
@endsection