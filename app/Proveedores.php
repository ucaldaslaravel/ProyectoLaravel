<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $primaryKey = 'id_proveedor';

    protected $fillable = [
        'nombre', 'telefono', 'correo'
   ];

   public function getRouteKeyName() {
    return 'url';
}
}
