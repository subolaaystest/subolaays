<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrademarkTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trademark_translations')->delete();
        
        \DB::table('trademark_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'trademark_id' => 1,
                'locale' => 'en',
                'name' => 'First TradeMark',
                'description' => NULL,
                'created_at' => '2021-12-29 09:55:19',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'trademark_id' => 1,
                'locale' => 'ar',
                'name' => 'First TradeMark',
                'description' => NULL,
                'created_at' => '2021-12-29 09:55:19',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'trademark_id' => 2,
                'locale' => 'en',
                'name' => 'Second TradeMark',
                'description' => NULL,
                'created_at' => '2021-12-29 09:55:19',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'trademark_id' => 2,
                'locale' => 'ar',
                'name' => 'Second TradeMark',
                'description' => '
',
                'created_at' => '2021-12-29 09:55:19',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}