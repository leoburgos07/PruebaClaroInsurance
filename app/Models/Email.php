<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'destination',
        'message',
        'state'
    ];
    //RELACIONES A NIVEL DE MODELOS
    public function user(){
        return $this->belongsTo(User::class);
    }
}
