<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'dni',
        'dateOfBirth'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //RELACIONES A NIVEL DE MODELOS
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
    public function emails()
    {
        return $this->hasMany(Email::class);
    }
}
