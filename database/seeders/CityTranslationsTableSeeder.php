<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CityTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city_translations')->delete();
        
        \DB::table('city_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_id' => 1,
                'locale' => 'en',
                'name' => 'Jeddah',
                'deleted_at' => NULL,
                'created_at' => '2020-09-27 16:25:21',
                'updated_at' => '2020-09-27 16:25:58',
            ),
            1 => 
            array (
                'id' => 2,
                'city_id' => 1,
                'locale' => 'ar',
                'name' => 'جدة',
                'deleted_at' => NULL,
                'created_at' => '2020-09-27 16:25:21',
                'updated_at' => '2020-09-27 16:25:58',
            ),
            2 => 
            array (
                'id' => 3,
                'city_id' => 2,
                'locale' => 'en',
                'name' => '23423',
                'deleted_at' => NULL,
                'created_at' => '2020-09-27 16:25:26',
                'updated_at' => '2020-09-27 16:25:26',
            ),
            3 => 
            array (
                'id' => 4,
                'city_id' => 2,
                'locale' => 'ar',
                'name' => '23423',
                'deleted_at' => NULL,
                'created_at' => '2020-09-27 16:25:26',
                'updated_at' => '2020-09-27 16:25:26',
            ),
            4 => 
            array (
                'id' => 5,
                'city_id' => 3,
                'locale' => 'en',
                'name' => '34534',
                'deleted_at' => NULL,
                'created_at' => '2020-09-27 16:25:31',
                'updated_at' => '2020-09-27 16:25:31',
            ),
            5 => 
            array (
                'id' => 6,
                'city_id' => 3,
                'locale' => 'ar',
                'name' => '3423',
                'deleted_at' => NULL,
                'created_at' => '2020-09-27 16:25:31',
                'updated_at' => '2020-09-27 16:25:31',
            ),
        ));
        
        
    }
}