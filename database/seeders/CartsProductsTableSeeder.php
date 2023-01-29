<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartsProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carts_products')->delete();
        
        \DB::table('carts_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cart_id' => 1,
                'product_id' => 1,
                'quantity' => 5,
                'created_at' => '2021-12-25 14:54:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'cart_id' => 1,
                'product_id' => 13,
                'quantity' => 10,
                'created_at' => '2021-12-25 14:54:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}