@extends('plantilla')
@section('titulo')
{{$cliente->nombre}}
@endsection
@section('contenido')
<h1>{{ $cliente->nombre }}</h1>

<table class="table">
    <tr>
        <th>Nombre:</th>
        <td>{{ $cliente->nombre }}</td>
    </tr>
    <tr>
        <th>Teléfono:</th>
        <td>{{ $cliente->telefonos }}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{ $cliente->direccion }}</td>
    </tr>
</table>
  
   <div class="btn-group" role="group">
        <div class="col-md-6 custom">
            @if (auth()->user()->perfil=='Administrador') 
               <a href={{ route('clientes.edit', $cliente->id_cliente) }}
                  class="btn btn-info">Editar
               </a>
           @endif
        </div>
        <div class="col-md-6 custom">
           @if (auth()->user()->perfil=='Administrador') 
           <form method="POST" action=
                "{{ route('clientes.destroy', $cliente->id_cliente) }}">
                @csrf
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger">Eliminar
                </button>
            </form>
           @endif
               
            </div>
        </div>
@endsection