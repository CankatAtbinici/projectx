<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'type' => "male"],
            ['id' => 2, 'type' => "female"],
        ];
        DB::table('genders')->delete();
        DB::table('genders')->insert($items);
    }
}
