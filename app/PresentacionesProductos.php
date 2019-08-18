<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class PresentacionesProductos extends Model
{

    protected $fillable = [
        'descripcion'
   ];

   public function getRouteKeyName() {
    return 'url';
}
}