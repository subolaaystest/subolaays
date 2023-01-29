<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart')->delete();
        
        \DB::table('cart')->insert(array (
            0 => 
            array (
                'id' => 1,
                'buyer_id' => 1,
                'seller_id' => 60,
                'created_at' => '2021-12-13 11:30:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}