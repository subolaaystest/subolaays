<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_number' => '000001',
                'seller_id' => 60,
                'buyer_id' => 1,
                'coupon_id' => 3,
                'coupon_discount' => 0.0,
                'buyer_address_id' => NULL,
                'shipping_method_id' => 1,
                'shipping_method_cost' => 10.0,
                'payment_method_id' => 1,
                'sub_total' => 100.0,
                'final_total' => 110.0,
                'notes' => NULL,
                'status' => 'under_delivery',
                'created_at' => '2022-01-17 10:07:45',
                'updated_at' => '2022-02-20 10:06:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}