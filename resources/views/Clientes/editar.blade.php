@extends('plantilla')

@section('titulo', 'Clientes')

@section('contenido')
    <h1>Editar cliente</h1>

     <form  method="PUT"  action="{{ route('actualizar-cliente', $cliente->id_cliente) }}">
        @csrf
        <h5>Nombre</h5>
        <input name="nombre" placeholder="Nombre..." 
               value="{{ $cliente->nombre }}"><br>
        {!! $errors->first('nombre', '<small>:message</small>') !!} <br>
        <h5>Telefono</h5>
        <input name="telefonos" placeholder="Telefono..."   
               value="{{ $cliente->telefonos }}"><br>
        {!! $errors->first('telefonos', '<small>:message</small>') !!} <br>
        <h5>Direccion</h5>
        <input name="direccion" placeholder="Direccion..." 
               value="{{ $cliente->direccion }}"><br>
        {!! $errors->first('direccion', '<small>:message</small>') !!} <br>
        
         <label>
              <h5>Credito</h5>&nbsp;&nbsp;&nbsp;Si
        <input name="con_credito" input  type="checkbox"
               value="{{ $cliente->con_credito }}"><br>
        <span class="lever"></span> 
        </label>
        <br>
       
        <button class="btn btn-success">Aceptar</button>
    </form> 

@endsection
