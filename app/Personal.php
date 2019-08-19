<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Personal extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_persona', 'nombre', 'telefono','direccion','perfil','contrasena',
    ];
    protected $table = 'personal';

    public function setPasswordAttribute($password) {
        $this->attributes['contrasena'] = bcrypt($password);
    }
   
 

    /**
     * Se retornará un objeto con los atributos necesarios para
     * procesar los mensajes relacionados con un usuario
     */
   
  
}