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
            'country_id' => 1
        ]);
        City::create([
            'name'=>'Barranquilla',
            'country_id' => 1
        ]);
        City::create([
            'name'=>'Cartagena',
            'country_id' => 1
        ]);
        City::create([
            'name'=>'Cali',
            'country_id' => 1
        ]);
        City::create([
            'name'=>'Buenos aires',
            'country_id' => 2
        ]);City::create([
            'name'=>'Mar de Plata',
            'country_id' => 2
        ]);City::create([
            'name'=>'Barcelona',
            'country_id' => 3
        ]);City::create([
            'name'=>'Madrid',
            'country_id' => 3
        ]);City::create([
            'name'=>'Valencia',
            'country_id' => 3
        ]);
        
    }
}
