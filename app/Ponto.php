<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponto extends Model
{
    protected $fillable = [
        'nome', 'tipo', 'latitude', 'longitude',
    ];
}
