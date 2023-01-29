<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingMethodTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_method_translations')->delete();
        
        \DB::table('shipping_method_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shipping_method_id' => 1,
                'locale' => 'en',
                'name' => 'Aramex',
                'created_at' => '2022-02-12 16:00:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'shipping_method_id' => 1,
                'locale' => 'ar',
                'name' => 'أرامكس',
                'created_at' => '2022-02-12 16:00:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'shipping_method_id' => 2,
                'locale' => 'en',
                'name' => 'Express JBI',
                'created_at' => '2022-02-12 16:00:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'shipping_method_id' => 2,
                'locale' => 'ar',
                'name' => 'إكسبريس',
                'created_at' => '2022-02-12 16:00:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'shipping_method_id' => 3,
                'locale' => 'en',
                'name' => 'Sab',
                'created_at' => '2022-02-12 16:00:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'shipping_method_id' => 3,
                'locale' => 'ar',
                'name' => 'صاب',
                'created_at' => '2022-02-12 16:00:57',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}