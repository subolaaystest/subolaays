<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrademarksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trademarks')->delete();
        
        \DB::table('trademarks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'local',
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-29 09:54:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'local',
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-29 09:54:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}