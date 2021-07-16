<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    //RELACIONES A NIVEL DE MODELOS
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public static function loadCities($id){
        $cities = City::where('country_id', $id)->get();
        return $cities;
    }
}
