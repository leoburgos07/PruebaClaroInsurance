<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rol;
use App\Models\Country;

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

            User::create([
            'name' => 'Administr truedsd',
            'email' => 'a3@gmail.com',
            'password' => bcrypt('Admin1234$'),
            'dni' => '12345678910',
            'dateOfBirth' => '20000101',
            'rols_id' => $rol,
            'countries_id' => $pais    
        ]);
        
    }
}
