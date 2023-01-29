<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DealsOffersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deals_offers')->delete();
        
        \DB::table('deals_offers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deal_id' => 1,
                'seller_id' => 60,
                'shipping_time' => '2021-12-22',
                'shipping_method_id' => 1,
                'total_price' => 200.0,
                'notes' => NULL,
                'coupon_id' => NULL,
                'payment_method_id' => 1,
                'final_amount' => 200.0,
                'status' => 'new',
                'created_at' => '2021-12-08 09:09:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'deal_id' => 2,
                'seller_id' => 60,
                'shipping_time' => '2021-12-24',
                'shipping_method_id' => 1,
                'total_price' => 300.0,
                'notes' => NULL,
                'coupon_id' => NULL,
                'payment_method_id' => 1,
                'final_amount' => 300.0,
                'status' => 'new',
                'created_at' => '2021-12-08 09:09:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}