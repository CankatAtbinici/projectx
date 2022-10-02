<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\SubCity;
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
        // \App\Models\User::factory(10)->create();
        $this->call(CitiesSeeder::class);
        $this->call(SubCitySeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
