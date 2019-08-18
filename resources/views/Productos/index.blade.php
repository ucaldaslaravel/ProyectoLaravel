
@extends('plantilla')

@section('titulo', 'Todos los Productos')

@section('contenido')
  <h1>Catálogo de productos</h1>
   <br></br>

   <ul>
        @isset ($productos)
        <div class="card-group">
        @for ($i = 0; $i < count($productos); $i++)
       
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $productos[$i]->nombre }}</h5>
            <p class="card-text">{{ $productos[$i]->precio }}</p>
            <a href="#" class="card-link">ver</a>
          </div>
        </div>
        @if($i%4===0)
      </div>
      <div class="card-group">

        @endif
        @if($i===count($productos))
      </div>

        @endif
        
        @endfor
        
     
    @else
        <li>Catálogo no definido</li>
    @endisset
        
   </ul>
@endsection

