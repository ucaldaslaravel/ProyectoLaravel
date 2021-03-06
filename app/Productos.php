<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PresentacionesProductos;
use App\CategoriasProductos;

class Productos extends Model
{

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre', 'precio', 'iva', 'cantidad_disponible', 'cantidad_minima',
        'cantidad_maxima', 'id_presentacion_producto',
        'id_categoria_producto',
    ];

    public function getPresentacion()
    {
        $presentacion = PresentacionesProductos::findOrFail($this->attributes['id_presentacion_producto']);
        return $presentacion->descripcion;
    }

    public function getCategoria()
    {
        $categoria = CategoriasProductos::findOrFail($this->attributes['id_categoria_producto']);

        return $categoria->nombre;
    }


    public function bajas(){
        return $this->hasMany('App\BajasProductos','id_baja_producto');
    }
}
