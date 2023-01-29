<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DealsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('deals')->delete();

        \DB::table('deals')->insert(array (
            0 =>
            array (
                'id' => 1,
                'buyer_id' => 1,
                'deal_expired' => '2021-12-31',
                'main_category_id'=>'1',
                'seller_id' => 0,
                'status' => 'active',
                'created_at' => '2021-12-08 08:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'buyer_id' => 1,
                'deal_expired' => '2022-01-03',
                'main_category_id'=>'2',
                'seller_id' => 0,
                'status' => 'active',
                'created_at' => '2021-12-08 08:56:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));


    }
}
