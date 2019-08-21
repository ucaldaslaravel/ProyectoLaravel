@csrf

<div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $categoria->nombre ?? old('nombre') }}">
        {!! $errors->first('nombre', '<<span class=error>:message</span>') !!}
    </div>

