<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_methods')->delete();
        
        \DB::table('shipping_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1.png',
                'status' => 'active',
                'created_at' => '2022-02-12 15:57:23',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '2.png',
                'status' => 'active',
                'created_at' => '2022-02-12 15:57:23',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '3.png',
                'status' => 'active',
                'created_at' => '2022-02-12 15:57:23',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}