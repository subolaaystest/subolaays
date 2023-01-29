<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'status' => 'active',
                'created_at' => '2022-01-31 04:48:49',
                'updated_at' => '2021-02-20 11:50:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 1,
                'status' => 'active',
                'created_at' => '2020-09-27 12:25:46',
                'updated_at' => '2020-09-27 16:25:46',
                'deleted_at' => '2020-09-27 16:25:46',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 1,
                'status' => 'active',
                'created_at' => '2020-09-27 12:25:41',
                'updated_at' => '2020-09-27 16:25:41',
                'deleted_at' => '2020-09-27 16:25:41',
            ),
        ));
        
        
    }
}