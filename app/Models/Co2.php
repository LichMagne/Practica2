<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class co2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'co2_numbers',
        'date',


    ];
}
