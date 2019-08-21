@extends('plantilla')
@section('titulo')
{{$proveedor->nombre}}
@endsection
@section('contenido')
<h1>{{ $proveedor->nombre }}</h1>

<table class="table">
    <tr>
        <th>Nombre:</th>
        <td>{{ $proveedor->nombre }}</td>
    </tr>
    <tr>
        <th>Teléfono:</th>
        <td>{{ $proveedor->telefono }}</td>
    </tr>
    <tr>
        <th>Correo:</th>
        <td>{{ $proveedor->correo }}</td>
    </tr>
</table>
  
   <div class="btn-group" role="group">
        <div class="col-md-6 custom">
            @if (auth()->user()->perfil=='Administrador') 
               <a href={{ route('proveedores.edit', $proveedor->id_proveedor) }}
                  class="btn btn-info">Editar
               </a>
           @endif
        </div>
        <div class="col-md-6 custom">
           @if (auth()->user()->perfil=='Administrador') 
           <form method="POST" action=
                "{{ route('proveedores.destroy', $proveedor->id_proveedor) }}">
                @csrf
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger">Eliminar
                </button>
            </form>
           @endif
               
            </div>
        </div>
@endsection