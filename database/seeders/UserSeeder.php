<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rol;
use App\Models\Country;
use App\Models\City;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::where('type','Administrador')->value('id');
        $city = City::where('name','Barcelona')->value('id');

        //Se guardan campos de ambas formas

            User::create([
            'name' => 'Administrador unico',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin1234$'),
            'dni' => '12345678910',
            'dateOfBirth' => '20000925',
            'rol_id' => $rol,
            'city_id' => $city    
        ]);

        User::create([
            'name' => 'Usuario prueba 1',
            'email' => 'prueba@gmail.com',
            'password' => bcrypt('Prueba1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 4 
        ]);
        User::create([
            'name' => 'prueba usuario 2',
            'email' => 'prueba2@gmail.com',
            'password' => bcrypt('Prueba1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 1 
        ]);
        User::create([
            'name' => 'Probando user 3',
            'email' => 'prueba3@gmail.com',
            'password' => bcrypt('Prueba1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 2 
        ]);
        User::create([
            'name' => 'usuario de prueba 4',
            'email' => 'prueba4@gmail.com',
            'password' => bcrypt('Probando1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 4 
        ]);
        


        
    }
}
