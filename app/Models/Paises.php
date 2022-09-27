<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithFileUploads;

class Paises extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'pais_nombre',

    ];
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */

}
