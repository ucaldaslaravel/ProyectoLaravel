
@extends('plantilla')

@section('titulo', 'Productos')

@section('contenido')
  
<br>
<h3>Productos</h3>
  {{-- <a class="btn btn-primary btn-sm float-right" 
     href="{{ route('clientes.crear') }}"
  >Crear nuevo cliente</a> --}}
  <table class="table">
      <thead>
          <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Iva</th>
              <th>Cantidad Disponible</th>
              <th>Cantidad Minima</th>
              <th>cantidad Maxima</th>
          </tr>
      </thead>
      
      <tbody>
          @foreach ($productos as $producto)
               <tr>
                      <td>{{ $producto->id_producto}}</td>

                  <td>{{ $producto->nombre}}</td>
                  <td>{{ $producto->precio}}</td>
              
                  <td>{{ $producto->iva}}</td>
                  
                  
                  <td>{{ $producto->cantidad_disponible}}</td>
                  <td>{{ $producto->cantidad_minima}}</td>
                  <td>{{ $producto->cantidad_maxima}}</td>
{{-- --{}
                  <td>
                      <a href="{{ route('editar-cliente', $cliente->id_cliente) }}" class="btn btn-success">
                          Editar</a>
     
                       <form style="display:inline" 
                             method="POST" 
                             action="{{ route('eliminar-cliente',
                                        $cliente->id_cliente) }}">
                           @csrf
                           {!! method_field('DELETE') !!}
                           <button type="submit" class="btn btn-danger">Eliminar</button>
                       </form>
     
                      <div class="btn-group" role="group">
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

