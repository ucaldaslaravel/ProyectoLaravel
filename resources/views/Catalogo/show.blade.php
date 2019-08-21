@extends('plantilla')
@section('titulo', 'Productos')
@section('contenido')
<form action="{{ route('Catalogo.index')}}">
    <input type="submit" class="btn btn-outline-danger " value="Atras" />
  </form>
  
    <h1>{{ $producto->nombre }}</h1>
    <p></p>
    <img src= "/img_productos/{{ $producto->imagen }}" class="rounded float-left" height="300" alt="...">

   <p class="text-muted"> Precio </p>
   <p class="font-weight-bold">  {{ $producto->precio }} </p>
   <p class="text-muted"> Iva</p>
   <p class="font-weight-bold">  {{ $producto->iva }} </p>
   <p class="text-muted"> Cantidad Disponible</p>
   <p class="font-weight-bold">  {{ $producto->cantidad_disponible }} </p>

@endsection
