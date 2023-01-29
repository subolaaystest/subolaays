<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BuyerCategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buyer_category_translations')->delete();
        
        \DB::table('buyer_category_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'buyer_category_id' => 1,
                'locale' => 'en',
                'name' => 'صيدلية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'buyer_category_id' => 1,
                'locale' => 'ar',
                'name' => 'صيدلية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'buyer_category_id' => 2,
                'locale' => 'en',
                'name' => 'بقالة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'buyer_category_id' => 2,
                'locale' => 'ar',
                'name' => 'بقالة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'buyer_category_id' => 3,
                'locale' => 'en',
                'name' => 'مطعم',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'buyer_category_id' => 3,
                'locale' => 'ar',
                'name' => 'مطعم',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'buyer_category_id' => 4,
                'locale' => 'en',
                'name' => 'كوفي شوب',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'buyer_category_id' => 4,
                'locale' => 'ar',
                'name' => 'كوفي شوب',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'buyer_category_id' => 5,
                'locale' => 'en',
                'name' => 'مخبز',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'buyer_category_id' => 5,
                'locale' => 'ar',
                'name' => 'مخبز',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}