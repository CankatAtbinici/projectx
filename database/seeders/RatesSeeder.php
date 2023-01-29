<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $rates = array(
            array('id' => '1','user_id' => '1','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','user_id' => '2','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','user_id' => '3','point' => '5','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','user_id' => '4','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','user_id' => '5','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','user_id' => '6','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','user_id' => '7','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','user_id' => '8','point' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','user_id' => '1','point' => '0','created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('rates')->delete();
          DB::table('rates')->insert($rates);
    }
}
