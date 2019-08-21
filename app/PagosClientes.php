<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class PagosClientes extends Model
{

    protected $primaryKey = 'id_pago_cliente';
    protected $table = 'pagos_clientes';


    protected $fillable = [
         'id_cliente', 'valor_pago','fecha_pago'
   ];
   public function cliente()
    {
        return $this->belongsTo('App\Clientes','id_cliente');
    }
  

    
}
