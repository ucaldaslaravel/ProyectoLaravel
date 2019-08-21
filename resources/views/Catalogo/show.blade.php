@extends('plantilla')
@section('titulo', 'Productos')
@section('contenido')

<table class="table ">
  
    <tr>
        <th><img src= "/img_productos/{{ $producto->imagen }}" class="rounded float-left" height="300" alt="...">
        </th>
        <td><table class="table ">
  
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
                <th>Categoria:</th>
                <td>{{ $producto->getCategoria() }}</td>
            </tr>
            <tr>
                <th> Presentacion:</th>
                <td>{{ $producto->getPresentacion()}}</td>
            </tr>
            <tr>
                <td>
              <form action="{{ route('Catalogo.index')}}">
                <input type="submit" class="btn btn-success" value="Atras" />
              </td>
              </form></tr>
          </table></td>
    
    

  
    
@endsection
