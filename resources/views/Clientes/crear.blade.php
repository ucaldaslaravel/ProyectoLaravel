@extends('plantilla')

@section('titulo', 'Clientes')

@section('contenido')
    <h1>Cliente</h1>

    <form method="post" action="{{ route('crear-cliente') }}">
        @csrf
        <input name="nombre" placeholder="Nombre..." 
               value="{{ $cliente->nombre }}"><br>
        {!! $errors->first('nombre', '<small>:message</small>') !!} <br>
        
        <input name="telefonos" placeholder="Telefono..."   
               value="{{ $cliente->telefonos }}"><br>
        {!! $errors->first('telefonos', '<small>:message</small>') !!} <br>
        
        <input name="direccion" placeholder="Direccion..." 
               value="{{ $cliente->direccion }}"><br>
        {!! $errors->first('direccion', '<small>:message</small>') !!} <br>
        
        Crédito&nbsp;&nbsp;&nbsp;No
        <input name="con_credito" input  type="checkbox"
               value="{{ $cliente->con_credito }}"><br>
        <span class="lever"></span> Si
       
        <button>Enviar</button>
    </form> 

@endsection
