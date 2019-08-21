@csrf

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $producto->nombre ?? old('nombre') }}">
    {!! $errors->first('nombre', '<<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="telefonos">Precio</label>
    <input type="input" class="form-control" id="precio" name="precio" placeholder="Teléfono móvil preferiblemente" value="{{ $producto->precio ?? old('precio') }}">
    {!! $errors->first('telefonos', '<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="direccion">Iva</label>
    <input type="input" class="form-control" id="iva" name="iva" placeholder="Dirección de residencia" value="{{ $producto->iva ?? old('iva') }}">
    {!! $errors->first('direccion', '<span class=error>:message</span>') !!}
</div>



<hr>