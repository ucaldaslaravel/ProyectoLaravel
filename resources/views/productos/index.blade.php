
@extends('plantilla')

@section('titulo', 'Todos los Productos')

@section('contenido')
  <h1>Catálogo de productos</h1>

   <ul>
        @isset ($productos)
        <div class="card-group">
        @for ($i = 0; $i < count($productos); $i++)
        @if($i%4===0)
      </div>
      <div class="card-group">

        @endif
        @if($i===count($productos))
      </div>

        @endif
       
        <div class="card" style="width: 18rem;">
          <img src= "/img_productos/{{ $productos[$i]->imagen }}"height="300" class="card-img-top" >
          <div class="card-body">
            <a href=""> <h5 class="card-title">{{ $productos[$i]->nombre }}</h5> </a>
            <p class="card-text">{{ $productos[$i]->precio }}</p>
          </div>
        </div>
        
        
        @endfor
        
     
    @else
        <li>Catálogo no definido</li>
        <li>No hay productos para mostrar</li>

    @endisset
        
   </ul>
@endsection

