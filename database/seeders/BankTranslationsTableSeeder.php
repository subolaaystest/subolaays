<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_translations')->delete();
        
        \DB::table('bank_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bank_id' => 1,
                'locale' => 'en',
                'name' => 'بنك الراجحي',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'bank_id' => 1,
                'locale' => 'ar',
                'name' => 'بنك الراجحي',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'bank_id' => 2,
                'locale' => 'en',
                'name' => 'بنك القاهرة',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'bank_id' => 2,
                'locale' => 'ar',
                'name' => 'بنك القاهرة',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'bank_id' => 3,
                'locale' => 'en',
                'name' => 'بنك البلاد',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'bank_id' => 3,
                'locale' => 'ar',
                'name' => 'بنك البلاد',
                'created_at' => '2021-12-04 10:19:12',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}