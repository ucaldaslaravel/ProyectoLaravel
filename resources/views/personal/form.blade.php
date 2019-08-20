@csrf

<div class="form-group">
    <label for="name">Nombre</label>
    <input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $personal->nombre ?? old('nombre') }}">
    {!! $errors->first('nombre', '<<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="input" class="form-control" id="telefono" name="telefono" placeholder="Teléfono móvil preferiblemente" value="{{ $personal->telefono ?? old('telefono') }}">
    {!! $errors->first('telefono', '<span class=error>:message</span>') !!}
</div>

<div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="input" class="form-control" id="direccion" name="direccion" placeholder="Dirección de residencia" value="{{ $personal->direccion ?? old('direccion') }}">
    {!! $errors->first('direccion', '<span class=error>:message</span>') !!}
</div>



@unless($personal->id) {{-- si no tiene user_id…  --}}
    <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña..." value="{{ $personal->password }}">
            {!! $errors->first('password', '<span class=error>:message</span>') !!}
    </div>
    
    <div class="form-group">
            <label for="confirmacion_password">Confirme la contraseña</label>
            <input type="password" class="form-control" id="confirmacion_password" name="confirmacion_password" placeholder="Reingrese la contraseña" value="{{ $personal->password }}">
            {!! $errors->first('confirmacion_password', '<span class=error>:message</span>') !!}
    </div>
@endunless

<div class="checkbox">
    Privilegios:
    @foreach ($roles as $id => $name)
        <label>
            &nbsp;&nbsp;
            <input type="checkbox" name="roles[]" value="{{ $id }}" 
                {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
            >
            {{ $name }}
        </label>
    @endforeach
</div>
{!! $errors->first('roles', '<span class=error>:message</span>') !!}
<hr>