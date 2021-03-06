<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nombre','apellidos', 'email', 'numero', 'direccion', 'ciudad', 'codigopostal', 'pais', 'municipio', 'titular_tarjeta', 'numero_tarjeta', 'mes_expiracion_tarjeta', 'anho_expiracion_tarjeta', 'cvv'
    ];

    //Relación one to many
    public function cars(){
        return $this->hasMany('App\Models\cars');
    }

}
