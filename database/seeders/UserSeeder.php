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
        //$rol = DB::table('rols')->select('id')->where('type', 'Administrador')->first();
        $rol = Rol::where('type','Administrador')->value('id');
        $pais = Country::where('name','Colombia')->value('id');
        $city = City::where('name','Barcelona')->value('id');

            User::create([
            'name' => 'Administr truedsd',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin1234$'),
            'dni' => '12345678910',
            'dateOfBirth' => '20000925',
            'rol_id' => $rol,
            'city_id' => $city    
        ]);

        User::create([
            'name' => 'Leonardo user',
            'email' => 'leonaddrdo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 4 
        ]);
        User::create([
            'name' => 'Leonardo user',
            'email' => 'leonadsfdfrdo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 1 
        ]);
        User::create([
            'name' => 'Leonardo user',
            'email' => 'leordo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 2 
        ]);
        User::create([
            'name' => 'Leonardo user',
            'email' => 'leonfrrdo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 4 
        ]);
        User::create([
            'name' => 'Leonardo user',
            'email' => 'leonwetweardo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 3 
        ]);
        User::create([
            'name' => 'Leonardo user',
            'email' => 'leonafsdfsdrdo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 1 
        ]);

        User::create([
            'name' => 'Leonardo user',
            'email' => 'leofdssssnardo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 5 
        ]);
        User::create([
            'name' => 'Leonardo user',
            'email' => 'leonagsdgdrdo@gmail.com',
            'password' => bcrypt('Leonardo1234$'),
            'dni' => '09876543210',
            'dateOfBirth' => '20000101',
            'rol_id' => 2,
            'city_id' => 5 
        ]);


        
    }
}
