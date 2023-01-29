<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ad_translations')->delete();
        
        \DB::table('ad_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ad_id' => 1,
                'locale' => 'en',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'ad_id' => 1,
                'locale' => 'ar',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'ad_id' => 2,
                'locale' => 'en',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'ad_id' => 2,
                'locale' => 'ar',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'ad_id' => 3,
                'locale' => 'en',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'ad_id' => 3,
                'locale' => 'ar',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'ad_id' => 4,
                'locale' => 'en',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'ad_id' => 4,
                'locale' => 'ar',
                'title' => 'ad',
                'details' => 'ad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}