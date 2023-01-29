<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_translations')->delete();
        
        \DB::table('setting_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'setting_id' => 1,
                'locale' => 'en',
                'title' => 'Subolaays',
                'description' => 'subolaays subolaays',
                'keywords' => 'subolaays, internet, shopping, sell, puy',
                'about_subolay' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ',
                'privacy' =>  'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ',
                'terms_and_conditions' =>  'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'setting_id' => 1,
                'locale' => 'ar',
                'title' => 'سبلاي',
                'description' => 'سبلاي سبلاي',
                'keywords' => 'سبلاي, تسوق, شراء, بيع',
                'about_subolay' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ',
                'privacy' =>  'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ',
                'terms_and_conditions' =>  'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}