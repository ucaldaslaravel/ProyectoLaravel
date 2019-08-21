<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class PagosProveedores extends Model
{

    protected $primaryKey = 'id_pago_proveedor';
    protected $table = 'pagos_proveedores';


    protected $fillable = [
         'id_proveedor', 'valor_pago','fecha_pago'
   ];
   public function proveedor()
    {
        return $this->belongsTo('App\Proveedores','id_proveedor');
    }
  

    
}
