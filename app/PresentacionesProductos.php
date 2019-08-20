<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class PresentacionesProductos extends Model
{

    protected $primaryKey = 'id_presentacion_producto';

    protected $fillable = [
        'descripcion'
   ];

   public function getRouteKeyName() {
    return 'url';
}
}