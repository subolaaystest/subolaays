<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_categories')->delete();
        
        \DB::table('sub_categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'main_category_id' => 1,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'main_category_id' => 1,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'main_category_id' => 2,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'main_category_id' => 2,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'main_category_id' => 3,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'main_category_id' => 3,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'main_category_id' => 4,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'main_category_id' => 4,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'main_category_id' => 5,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'main_category_id' => 5,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'main_category_id' => 6,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'main_category_id' => 6,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'main_category_id' => 7,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'main_category_id' => 7,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'main_category_id' => 8,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'main_category_id' => 8,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'main_category_id' => 9,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'main_category_id' => 9,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'main_category_id' => 10,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'main_category_id' => 10,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'main_category_id' => 11,
                'image' => '1.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'main_category_id' => 11,
                'image' => '2.jpg',
                'status' => 'active',
                'created_at' => '2021-12-03 18:22:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}