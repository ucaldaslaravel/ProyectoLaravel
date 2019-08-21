@csrf

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $producto->nombre ?? old('nombre') }}">
    {!! $errors->first('nombre', '<<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="telefonos">Precio</label>
    <input type="input" class="form-control" id="precio" name="precio" placeholder="Precio" value="{{ $producto->precio ?? old('precio') }}">
    {!! $errors->first('precio', '<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="direccion">Iva</label>
    <input type="input" class="form-control" id="iva" name="iva" placeholder="Iva" value="{{ $producto->iva ?? old('iva') }}">
    {!! $errors->first('iva', '<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="direccion">Imagen</label>
    <input type="input" class="form-control" id="imagen" name="imagen" placeholder="Imagen (No es obligatoria)" value="{{ $producto->imagen ?? old('imagen') }}">
    {!! $errors->first('imagen', '<span class=error>:message</span>') !!}
</div>
<div class="form-group">
    <label for="direccion">Cantidad Disponible</label>
    <input type="input" class="form-control" id="cantidad_disponible" name="cantidad_disponible" placeholder="Cantidad Disponible" value="{{ $producto->cantidad_disponible ?? old('cantidad_disponible') }}">
    {!! $errors->first('cantidad_disponible', '<span class=error>:message</span>') !!}
</div>
<div class="form-group">
    <label for="direccion">Cantidad Minima</label>
    <input type="input" class="form-control" id="cantidad_minima" name="cantidad_minima" placeholder="Cantidad Minima" value="{{ $producto->cantidad_minima ?? old('cantidad_minima') }}">
    {!! $errors->first('cantidad_minima', '<span class=error>:message</span>') !!}
</div>
<div class="form-group">
    <label for="direccion">Cantidad Maxima</label>
    <input type="input" class="form-control" id="cantidad_maxima" name="cantidad_maxima" placeholder="Cantidad Maxima" value="{{ $producto->cantidad_maxima ?? old('cantidad_maxima') }}">
    {!! $errors->first('cantidad_maxima', '<span class=error>:message</span>') !!}
</div>

<div>
    <label for="cliente">Presentacione</label>
    <select name="id_presentacion_producto" id="usuario" class="form-control">
    @foreach (App\PresentacionesProductos::all() as $Presentacion)                
        <option value="{{$Presentacion->id_presentacion_producto}}">{{$Presentacion->descripcion}}</option>
    @endforeach
 
    </select>
</div>
<div>
    <label for="cliente">Categoria</label>
    <select name="id_categoria_producto" id="usuario" class="form-control">
    @foreach (App\CategoriasProductos::all() as $Categoria)                
        <option value="{{$Categoria->id_categoria_producto}}">{{$Categoria->nombre}}</option>
    @endforeach
    </select>
</div>



<hr>