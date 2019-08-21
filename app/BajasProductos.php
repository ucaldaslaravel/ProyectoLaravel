<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BajasProductos extends Model
{
    protected $primaryKey = 'id_baja_producto';

    protected $fillable = ['fecha','tipo_baja', 'cantidad', 'precio', 'id_producto'];

    public function producto(){
        return $this->belongsTo('App\Productos','id_producto');
    }
}
