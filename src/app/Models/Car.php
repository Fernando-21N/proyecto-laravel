<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //Relación one to Many (inversa)
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
}
