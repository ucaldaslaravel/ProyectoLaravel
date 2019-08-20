<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class CategoriasProductos extends Model
{

    protected $primaryKey = 'id_categoria_producto';

    protected $table = "categorias_productos";

    protected $fillable = [
        'nombre',
   ];

}
