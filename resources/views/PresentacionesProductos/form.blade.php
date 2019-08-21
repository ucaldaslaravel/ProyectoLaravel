@csrf

<div class="form-group">
    <label for="nombre">Descripcion</label>
    <input type="input" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una descripcion" value="{{ $presentacionproducto->descripcion?? old('descripcion') }}">
    {!! $errors->first('descripcion', '<<span class=error>:message</span>') !!}
</div>



<hr>