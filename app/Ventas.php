<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total_credito', 'total_contado', 'id_cliente', 'id_vendedor',
    ];

    public function vendedor()
    {
        return $this->belongsTo('App\Personal','id_vendedor');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Clientes','id_cliente');
    }

    public function detalles()
    {
        return $this->hasMany('App\DetallesVentas','id_venta');
    }
}