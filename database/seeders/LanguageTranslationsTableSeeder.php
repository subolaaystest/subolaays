<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguageTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('language_translations')->delete();
        
        \DB::table('language_translations')->insert(array (
            0 => 
            array (
                'id' => 3,
                'language_id' => 2,
                'locale' => 'en',
                'name' => 'Arabic',
                'created_at' => '2017-10-19 08:05:27',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'language_id' => 2,
                'locale' => 'ar',
                'name' => 'عربي',
                'created_at' => '2017-10-19 08:05:27',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'language_id' => 3,
                'locale' => 'en',
                'name' => 'English',
                'created_at' => '2017-10-19 08:05:27',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'language_id' => 3,
                'locale' => 'ar',
                'name' => 'انجليزي',
                'created_at' => '2017-10-19 08:05:27',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}