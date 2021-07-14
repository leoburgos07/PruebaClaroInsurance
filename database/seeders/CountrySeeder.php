<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name'=>'Colombia'
        ]);
        Country::create([
            'name'=>'Argentina'
        ]);
        Country::create([
            'name'=>'España'
        ]);
    }
}
