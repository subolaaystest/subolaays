<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_products')->delete();
        
        \DB::table('order_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 100.0,
                'created_at' => '2021-12-04 10:57:17',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}