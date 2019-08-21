@csrf

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $cliente->nombre ?? old('nombre') }}">
    {!! $errors->first('nombre', '<<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="telefonos">Teléfono</label>
    <input type="input" class="form-control" id="telefonos" name="telefonos" placeholder="Teléfono móvil preferiblemente" value="{{ $cliente->telefonos ?? old('telefonos') }}">
    {!! $errors->first('telefonos', '<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="input" class="form-control" id="direccion" name="direccion" placeholder="Dirección de residencia" value="{{ $cliente->direccion ?? old('direccion') }}">
    {!! $errors->first('direccion', '<span class=error>:message</span>') !!}
</div>

<div class="checkbox">
    Credito:
    <label>
        &nbsp;&nbsp;
        Si <input type="radio" name="con_credito" value="true" {{$cliente->con_credito? 'checked':''}}>
    </label>

    <label>
        &nbsp;&nbsp;
        No <input type="radio" name="con_credito" value="false" {{$cliente->con_credito? '':'checked'}}>
    </label>
</div>

<hr>