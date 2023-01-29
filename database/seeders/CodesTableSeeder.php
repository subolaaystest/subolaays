<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('codes')->delete();
        
        \DB::table('codes')->insert(array (
//            0 =>
//            array (
//                'id' => 23,
//                'user_id' => 47,
//                'user_type' => 'seller',
//                'code' => '1111',
//                'used' => 1,
//                'created_at' => '2021-11-27 15:51:08',
//                'updated_at' => '2021-11-29 06:13:15',
//                'deleted_at' => NULL,
//            ),
        ));
        
        
    }
}