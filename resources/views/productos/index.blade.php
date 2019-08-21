
@extends('plantilla')

@section('titulo', 'Productos')

@section('contenido')
  
<br>
<h3>Productos</h3>
@if (session()->has('info'))
<div class="alert alert-success">{{ session('info') }}</div>
@endif

<div>
<a class="btn btn-success btn-sm float-right" href="{{ route('clientes.create') }}">
    Crear nuevo cliente
</a>
</div>
  <table class="table">
      <thead>
          <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Iva</th>
              <th>Cantidad Disponible</th>
              <th>Cantidad Minima</th>
              <th>Cantidad Maxima</th>
              <th>Presentacion Producto</th>
              <th>Categoria Producto</th>

              <th>Acciones</th>
             
          </tr>
      </thead>
      
      <tbody>
          @foreach ($productos as $producto)
               <tr>
                      <td>{{ $producto->id_producto}}</td>

                  <td><a href="{{route('productos.show',$producto->id_producto)}}"> {{ $producto->nombre}} </a></td>
                  <td>{{ $producto->precio}}</td>
              
                  <td>{{ $producto->iva}}</td>
                  
                  
                  <td>{{ $producto->cantidad_disponible}}</td>
                  <td>{{ $producto->cantidad_minima}}</td>
                  <td>{{ $producto->cantidad_maxima}}</td>
                  <td>{{ $producto->getPresentacion()}}</td>
                  <td>{{ $producto->getCategoria()}}</td>
                  <td>
                    <a href="{{ route('productos.edit', $producto->id_producto) }}" class="btn btn-success">
                        Editar</a>
   
                     <form style="display:inline" 
                           method="POST" 
                           action="{{ route('productos.destroy',
                                      $producto->id_producto) }}">
                         @csrf
                         {!! method_field('DELETE') !!}
                         <button type="submit" class="btn btn-danger">Eliminar</button>
                     </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
  {{ $productos->links() }}
@endsection

