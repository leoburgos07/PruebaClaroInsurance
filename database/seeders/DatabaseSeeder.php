<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->call(RolSeeder::class);
            $this->call(CountrySeeder::class);
            $this->call(UserSeeder::class);
            $this->call(CitySeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
