@csrf

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $proveedor->nombre ?? old('nombre') }}">
    {!! $errors->first('nombre', '<<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="input" class="form-control" id="telefono" name="telefono" placeholder="Teléfono móvil preferiblemente" value="{{ $proveedor->telefono ?? old('telefono') }}">
    {!! $errors->first('telefonos', '<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="direccion">Correo</label>
    <input type="input" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo" value="{{ $proveedor->correo ?? old('correo') }}">
    {!! $errors->first('correo', '<span class=error>:message</span>') !!}
</div>

<hr>