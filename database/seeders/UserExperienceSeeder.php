<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user_experience_categories")->insert(array(
            0 => array(
                "id" => 1,
                "name" => "hobby"
            ),
            1 => array(
                "id" => 2,
                "name" => "education"
            ),
            3 => array(
                "id" => 3,
                "name" => "location"
            )
        ));
    }
}
