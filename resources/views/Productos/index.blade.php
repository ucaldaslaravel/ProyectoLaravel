
@extends('plantilla')

@section('titulo', 'Todos los Productos')

@section('contenido')
  <h1>Catálogo de productos</h1>
   <br></br>

   <ul>
        @isset ($productos)
        @forelse($productos as $producto)
          <li>{{ $producto->nombre }}
              </li>
      @empty
          <li>No hay productos para mostrar</li>
      @endforelse

    @else
        <li>Catálogo no definido</li>
    @endisset
        
   </ul>
@endsection