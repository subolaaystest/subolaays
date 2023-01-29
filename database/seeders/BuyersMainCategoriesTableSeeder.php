<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BuyersMainCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buyers_main_categories')->delete();
        
        \DB::table('buyers_main_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'buyer_id' => 4,
                'main_category_id' => 1,
                'created_at' => '2022-03-13 15:47:13',
                'updated_at' => '2022-03-13 15:47:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'buyer_id' => 4,
                'main_category_id' => 2,
                'created_at' => '2022-03-13 15:47:13',
                'updated_at' => '2022-03-13 15:47:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'buyer_id' => 4,
                'main_category_id' => NULL,
                'created_at' => '2022-03-13 15:47:13',
                'updated_at' => '2022-03-13 15:47:13',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'buyer_id' => 5,
                'main_category_id' => 3,
                'created_at' => '2022-03-13 16:25:13',
                'updated_at' => '2022-03-13 16:25:13',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'buyer_id' => 5,
                'main_category_id' => NULL,
                'created_at' => '2022-03-13 16:25:13',
                'updated_at' => '2022-03-13 16:25:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'buyer_id' => 6,
                'main_category_id' => 4,
                'created_at' => '2022-03-13 16:30:15',
                'updated_at' => '2022-03-13 16:30:15',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'buyer_id' => 6,
                'main_category_id' => NULL,
                'created_at' => '2022-03-13 16:30:15',
                'updated_at' => '2022-03-13 16:30:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'buyer_id' => 7,
                'main_category_id' => 4,
                'created_at' => '2022-03-13 16:46:15',
                'updated_at' => '2022-03-13 16:46:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'buyer_id' => 7,
                'main_category_id' => NULL,
                'created_at' => '2022-03-13 16:46:15',
                'updated_at' => '2022-03-13 16:46:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'buyer_id' => 8,
                'main_category_id' => 1,
                'created_at' => '2022-04-11 02:26:04',
                'updated_at' => '2022-04-11 02:26:04',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'buyer_id' => 8,
                'main_category_id' => NULL,
                'created_at' => '2022-04-11 02:26:04',
                'updated_at' => '2022-04-11 02:26:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}