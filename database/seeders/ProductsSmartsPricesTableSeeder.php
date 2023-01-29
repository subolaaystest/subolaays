<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSmartsPricesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products_smarts_prices')->delete();
        
        \DB::table('products_smarts_prices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 22,
                'from_quantity' => 100,
                'to_quantity' => 999,
                'price' => 65.0,
                'created_at' => '2022-01-24 16:37:34',
                'updated_at' => '2022-01-24 16:37:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 23,
                'from_quantity' => 101,
                'to_quantity' => 199,
                'price' => 50.0,
                'created_at' => '2022-01-24 16:43:51',
                'updated_at' => '2022-01-24 16:43:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 24,
                'from_quantity' => 50,
                'to_quantity' => 99,
                'price' => 40.0,
                'created_at' => '2022-01-24 16:46:31',
                'updated_at' => '2022-01-24 16:46:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 25,
                'from_quantity' => 100,
                'to_quantity' => 200,
                'price' => 80.0,
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 26,
                'from_quantity' => 100,
                'to_quantity' => 199,
                'price' => 80.0,
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:58:25',
                'deleted_at' => '2022-02-20 09:58:25',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 26,
                'from_quantity' => 2000,
                'to_quantity' => 40000,
                'price' => 150.0,
                'created_at' => '2022-02-20 09:58:25',
                'updated_at' => '2022-02-20 09:58:25',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 27,
                'from_quantity' => 100,
                'to_quantity' => 200,
                'price' => 60.0,
                'created_at' => '2022-03-27 17:01:10',
                'updated_at' => '2022-03-27 17:01:10',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}