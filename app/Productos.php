<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{

    protected $primaryKey = 'id_producto';

    protected $fillable = ['nombre', 'precio', 'iva', 'cantidad_disponible','cantidad_minima', 
                    'cantidad_maxima',
   ];


}
