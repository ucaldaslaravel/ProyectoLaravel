<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Personal extends Authenticatable
{

    protected $primeryKey = 'id_persona';

    protected $table = 'personal';

    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_persona', 'nombre', 'telefono', 'direccion', 'perfil', 'password',
    ];    

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
