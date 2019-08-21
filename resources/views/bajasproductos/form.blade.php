<hr>
<div class="mt-3">
    <div class="row">
        <div class="col">
            <div>
                <label for="producto">Produto</label>
                <select name="id_producto" id="producto" class="form-control">
                @foreach (App\Productos::all() as $producto)                
                    <option {{$baja->id_producto == $producto->id_producto? 'selected':''}} 
                        value="{{$producto->id_producto}}">{{$producto->nombre}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <label for="precio">Precio</label>
            <input required name="precio" type="input" class="form-control" placeholder="Precio" 
                value="{{ $baja->precio ?? old('precio') }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tipo_baja">Tipo de baja</label>
            <input required name="tipo_baja" type="input" class="form-control" placeholder="Tipo" 
                value="{{ $baja->tipo_baja ?? old('tipo_baja') }}">
        </div>
        <div class="col">
            <label for="cantidad">Cantidad</label>
            <input required name="cantidad" type="input" class="form-control" placeholder="Cantidad"
                value="{{ $baja->cantidad ?? old('cantidad') }}">
        </div>
    </div>
</div>
<hr>
