<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesVentas extends Model
{
    protected $table = 'detalles_ventas';
    protected $primaryKey = 'id_detalle_venta';

    protected $fillable = [
        'cantidad_producto', 'valor_producto', 'descuento','iva','id_venta','id_producto'
    ];

    public function venta()
    {
        return $this->belongsTo('App\Ventas','id_venta');
    }

}
