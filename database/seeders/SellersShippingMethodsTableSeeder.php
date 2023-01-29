<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersShippingMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_shipping_methods')->delete();
        
        \DB::table('sellers_shipping_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'shipping_method_id' => 1,
                'created_at' => '2022-02-01 08:19:56',
                'updated_at' => '2022-02-12 15:34:09',
                'deleted_at' => '2022-02-12 15:34:09',
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 60,
                'shipping_method_id' => 1,
                'created_at' => '2022-02-12 15:32:52',
                'updated_at' => '2022-02-12 15:34:09',
                'deleted_at' => '2022-02-12 15:34:09',
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'shipping_method_id' => 1,
                'created_at' => '2022-02-12 15:33:00',
                'updated_at' => '2022-02-12 15:34:09',
                'deleted_at' => '2022-02-12 15:34:09',
            ),
            3 => 
            array (
                'id' => 4,
                'seller_id' => 60,
                'shipping_method_id' => 1,
                'created_at' => '2022-02-12 15:33:15',
                'updated_at' => '2022-02-12 15:34:09',
                'deleted_at' => '2022-02-12 15:34:09',
            ),
            4 => 
            array (
                'id' => 5,
                'seller_id' => 60,
                'shipping_method_id' => 1,
                'created_at' => '2022-02-12 15:33:16',
                'updated_at' => '2022-02-12 15:34:09',
                'deleted_at' => '2022-02-12 15:34:09',
            ),
            5 => 
            array (
                'id' => 6,
                'seller_id' => 60,
                'shipping_method_id' => 3,
                'created_at' => '2022-02-12 15:34:15',
                'updated_at' => '2022-03-08 09:51:05',
                'deleted_at' => '2022-03-08 09:51:05',
            ),
            6 => 
            array (
                'id' => 7,
                'seller_id' => 60,
                'shipping_method_id' => 3,
                'created_at' => '2022-05-07 16:58:49',
                'updated_at' => '2022-05-07 16:58:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}