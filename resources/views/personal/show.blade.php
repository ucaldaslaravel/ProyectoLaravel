@extends('plantilla')
@section('titulo')
{{$personal->nombre}}
@endsection
@section('contenido')
<h1>{{ $personal->nombre }}</h1>

<table class="table">
    <tr>
        <th>Nombre:</th>
        <td>{{ $personal->nombre }}</td>
    </tr>
    <tr>
        <th>Teléfono:</th>
        <td>{{ $personal->telefono }}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{ $personal->direccion }}</td>
    </tr>
    <tr>
        <th>Perfil</th>
        <td>{{ $personal->perfil }}</td>
    </tr>
</table>
  
   <div class="btn-group" role="group">
        <div class="col-md-6 custom">
            @if (auth()->user()->perfil=='Administrador' || auth()->user()->id === $personal->id ) 
               <a href={{ route('personal.edit', $personal->id) }}
                  class="btn btn-info">Editar
               </a>
           @endif
        </div>
        <div class="col-md-6 custom">
           @if (auth()->user()->perfil=='Administrador' || auth()->user()->id === $personal->id ) 
           <form method="POST" action=
                "{{ route('personal.destroy', $personal->id) }}">
                @csrf
                {!! method_field('DELETE') !!}
                <button type="submit" class="btn btn-danger">Eliminar
                </button>
            </form>
           @endif
               
            </div>
        </div>
@endsection