<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_method_translations')->delete();
        
        \DB::table('payment_method_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payment_method_id' => 1,
                'locale' => 'en',
                'name' => 'STC Pay',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'payment_method_id' => 1,
                'locale' => 'ar',
                'name' => 'STC Pay',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'payment_method_id' => 2,
                'locale' => 'en',
                'name' => 'Visa',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'payment_method_id' => 2,
                'locale' => 'ar',
                'name' => 'Visa',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'payment_method_id' => 3,
                'locale' => 'en',
                'name' => 'PayPal',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'payment_method_id' => 3,
                'locale' => 'ar',
                'name' => 'PayPal',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}