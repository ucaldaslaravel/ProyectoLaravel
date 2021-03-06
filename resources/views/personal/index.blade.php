
@extends('plantilla')

@section('titulo', 'Personal')

@section('contenido')
<div class="mt-5 text-center">
        <h1>Personal</h1>
</div>

@if (session()->has('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
    <a class="btn btn-success btn-sm float-right" href="{{ route('personal.create') }}">
        Crear nuevo usuario del personal
    </a>
</div>

    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Perfil</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personal as $persona)
            <tr>
                <td>{{$persona->id}}</td>
                <td> 
                    <a href="{{route('personal.show',$persona->id)}}">{{ $persona->nombre}} </a>
                </td>
                <td>{{ $persona->telefono}}</td>
                <td>{{ $persona->direccion}}</td>
                <td>{{ $persona->perfil}}</td>
                <td>{{ $persona->created_at}}</td>
                <td>{{ $persona->updated_at}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('personal.edit',$persona->id)}}">Editar</a>
                </td>
                <td>
                <form method="POST" action="{{route('personal.destroy',$persona->id)}}" style="display:inline">
                    @csrf
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger" type="submit">Eliminar</button>    
                </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $personal->links() }}
@endsection