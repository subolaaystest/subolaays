<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'name' => 'a5y7',
                'start' => '2021-12-24 00:00:00',
                'end' => '2022-01-19 00:00:00',
                'description' => 'test',
                'discount' => 10.0,
                'coupon_type' => 'percent',
                'free_shipping' => NULL,
                'exclude_offer_products' => NULL,
                'minimum_purchases' => 50,
                'all_frequency_use' => 2,
                'buyer_frequency_use' => 2,
                'status' => 'active',
                'created_at' => '2021-12-25 14:30:32',
                'updated_at' => '2022-02-05 04:09:33',
                'deleted_at' => '2022-02-05 04:09:33',
            ),
            1 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'name' => '31232',
                'start' => '2021-12-29 09:53:19',
                'end' => '2022-01-08 17:55:00',
                'description' => NULL,
                'discount' => 10.0,
                'coupon_type' => 'percent',
                'free_shipping' => 'yes',
                'exclude_offer_products' => 'yes',
                'minimum_purchases' => 100,
                'all_frequency_use' => 1000,
                'buyer_frequency_use' => 3,
                'status' => 'not_active',
                'created_at' => '2021-12-29 09:53:19',
                'updated_at' => '2022-03-08 11:16:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'seller_id' => 60,
                'name' => '45645',
                'start' => '2022-02-03 02:35:59',
                'end' => '2022-03-29 04:35:00',
                'description' => NULL,
                'discount' => 10.0,
                'coupon_type' => 'percent',
                'free_shipping' => NULL,
                'exclude_offer_products' => 'yes',
                'minimum_purchases' => 40,
                'all_frequency_use' => 20000,
                'buyer_frequency_use' => 1,
                'status' => 'active',
                'created_at' => '2022-02-03 02:35:59',
                'updated_at' => '2022-02-03 02:40:17',
                'deleted_at' => '2022-02-03 02:40:17',
            ),
            3 => 
            array (
                'id' => 5,
                'seller_id' => 60,
                'name' => '1231312',
                'start' => '2022-02-05 04:07:11',
                'end' => '2022-02-28 06:07:00',
                'description' => NULL,
                'discount' => 10.0,
                'coupon_type' => 'percent',
                'free_shipping' => NULL,
                'exclude_offer_products' => 'yes',
                'minimum_purchases' => 111,
                'all_frequency_use' => 1000,
                'buyer_frequency_use' => 2,
                'status' => 'active',
                'created_at' => '2022-02-05 04:07:11',
                'updated_at' => '2022-03-08 10:52:27',
                'deleted_at' => '2022-03-08 10:52:27',
            ),
            4 => 
            array (
                'id' => 6,
                'seller_id' => 60,
                'name' => '1',
                'start' => '2022-02-20 10:23:51',
                'end' => '2022-03-09 12:23:00',
                'description' => NULL,
                'discount' => 10.0,
                'coupon_type' => 'fixed',
                'free_shipping' => NULL,
                'exclude_offer_products' => 'yes',
                'minimum_purchases' => 1,
                'all_frequency_use' => 10000,
                'buyer_frequency_use' => 2,
                'status' => 'active',
                'created_at' => '2022-02-20 10:23:51',
                'updated_at' => '2022-02-20 10:23:57',
                'deleted_at' => '2022-02-20 10:23:57',
            ),
        ));
        
        
    }
}