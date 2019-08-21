<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesCompras extends Model
{
    protected $table = 'detalles_compras';
    protected $primaryKey = 'id_detalle_compra';

    protected $fillable = [
        'cantidad_pedida','cantidad_recibida', 'valor_producto','iva','id_compra','id_producto'
    ];

    public function venta()
    {
        return $this->belongsTo('App\Compras','id_compra');
    }

}
