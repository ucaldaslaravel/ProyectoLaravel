<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    protected $primaryKey = 'id_compra';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_compra','fecha_recibido','total_credito', 'total_contado', 'id_proveedor',
    ];

    public function proveedor()
    {
        return $this->belongsTo('App\Proveedores','id_proveedor');
    }

    public function detalles()
    {
        return $this->hasMany('App\DetallesCompras','id_compra');
    }
}