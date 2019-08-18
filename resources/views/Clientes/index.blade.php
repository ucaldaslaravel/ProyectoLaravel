@extends('plantilla')

@section('titulo', 'Clientes')

@section('contenido')
    <br>
	<h3>Clientes</h3>
    {{-- <a class="btn btn-primary btn-sm float-right" 
       href="{{ route('clientes.crear') }}"
    >Crear nuevo cliente</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Credito</th>
                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($clientes as $cliente)
                 <tr>
                        <td>{{ $cliente->id_cliente}}</td>

                    <td>{{ $cliente->nombre}}</td>
                    <td>{{ $cliente->telefonos}}</td>
                
                    <td>{{ $cliente->direccion}}</td>
                    <td>{{ $cliente->con_credito}}</td>
                    <td> 
                       {{-- --{} <div class="btn-group" role="group">
                            <div class="col-md-6 custom">
                                <a class="btn btn-info btn-sm" href="{{ route('clientes.edit', $cliente->id_cliente) }}">Editar</a>    
                            </div>

                            <div class="col-md-6 custom">
                                <form method="POST" action="{{ route('clientes.destroy', $cliente->id_cliente) }}">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection