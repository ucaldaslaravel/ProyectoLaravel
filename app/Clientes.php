<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    protected $primaryKey = 'id_cliente';


    protected $fillable = [
        'nombre', 'telefonos', 'direccion','con_credito'
   ];

    public function ventas()
    {
        return $this->hasMany('App\Ventas','id_cliente');
    }
}
