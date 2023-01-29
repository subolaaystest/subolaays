<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersPaymentsMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_payments_methods')->delete();
        
        \DB::table('sellers_payments_methods')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'payment_method_id' => 2,
                'created_at' => '2022-02-01 08:23:08',
                'updated_at' => '2022-02-01 06:47:56',
                'deleted_at' => '2022-02-01 06:47:56',
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 60,
                'payment_method_id' => 2,
                'created_at' => '2022-02-01 06:48:01',
                'updated_at' => '2022-02-01 06:48:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'payment_method_id' => 1,
                'created_at' => '2022-02-01 06:48:02',
                'updated_at' => '2022-02-06 08:25:52',
                'deleted_at' => '2022-02-06 08:25:52',
            ),
            3 => 
            array (
                'id' => 4,
                'seller_id' => 60,
                'payment_method_id' => 1,
                'created_at' => '2022-02-06 08:26:06',
                'updated_at' => '2022-02-06 08:26:11',
                'deleted_at' => '2022-02-06 08:26:11',
            ),
            4 => 
            array (
                'id' => 5,
                'seller_id' => 60,
                'payment_method_id' => 1,
                'created_at' => '2022-02-06 08:26:21',
                'updated_at' => '2022-02-06 08:26:26',
                'deleted_at' => '2022-02-06 08:26:26',
            ),
            5 => 
            array (
                'id' => 6,
                'seller_id' => 60,
                'payment_method_id' => 1,
                'created_at' => '2022-02-06 08:26:38',
                'updated_at' => '2022-02-06 08:26:41',
                'deleted_at' => '2022-02-06 08:26:41',
            ),
            6 => 
            array (
                'id' => 7,
                'seller_id' => 60,
                'payment_method_id' => 1,
                'created_at' => '2022-05-07 16:54:24',
                'updated_at' => '2022-05-07 16:54:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}