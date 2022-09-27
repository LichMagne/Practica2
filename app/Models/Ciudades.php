<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ciudad_nombre',
        'pais_id',
    ];


    public function pais(){

        return $this->hasOne(Paises::class, 'id','pais_id');
    }
    
}
