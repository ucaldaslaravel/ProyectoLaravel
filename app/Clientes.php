<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    protected $fillable = [
        'nombre', 'telefonos', 'direccion','con_credito'
   ];

  
}
