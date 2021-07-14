<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\support\Facades\DB;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'=>'Santa Marta',
            'countries_id' => 1
        ]);
        City::create([
            'name'=>'Barranquilla',
            'countries_id' => 1
        ]);
        City::create([
            'name'=>'Cartagena',
            'countries_id' => 1
        ]);
        City::create([
            'name'=>'Cali',
            'countries_id' => 1
        ]);
        City::create([
            'name'=>'Buenos aires',
            'countries_id' => 2
        ]);City::create([
            'name'=>'Mar de Plata',
            'countries_id' => 2
        ]);City::create([
            'name'=>'Barcelona',
            'countries_id' => 3
        ]);City::create([
            'name'=>'Madrid',
            'countries_id' => 3
        ]);City::create([
            'name'=>'Valencia',
            'countries_id' => 3
        ]);
        
    }
}
