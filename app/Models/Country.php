<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    //RELACIONES A NIVEL DE MODELOS
    public function cities(){
        return $this->hasMany(City::class);
    }
    
}

