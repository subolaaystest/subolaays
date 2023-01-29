<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments_methods')->delete();
        
        \DB::table('payments_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'local',
                'status' => 'active',
                'image' => 'stc.png',
                'created_at' => '2021-12-04 10:18:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'local',
                'status' => 'active',
                'image' => 'visa.png',
                'created_at' => '2021-12-04 10:18:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'local',
                'status' => 'active',
                'image' => 'paypal.png',
                'created_at' => '2021-12-04 10:18:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}