@extends('plantilla')
@section('titulo', 'Clientes')
@section('contenido')
    <h1>Clientes</h1>
   <p> nombre del cliente {{ $cliente->nombre }} - 
                   {{ $cliente->telefonos }}</p>
   <p> {{ $cliente->direccion }} </p>
   <p> {{ $cliente->con_credito }} </p>

@endsection
