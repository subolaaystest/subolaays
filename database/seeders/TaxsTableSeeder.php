<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxs')->delete();
        
        \DB::table('taxs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'tax_percent' => 10.0,
                'status' => 'active',
                'created_at' => '2021-12-28 10:30:00',
                'updated_at' => '2022-02-05 04:24:15',
                'deleted_at' => '2022-02-05 04:24:15',
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 60,
                'tax_percent' => 15.0,
                'status' => 'not_active',
                'created_at' => '2021-12-12 03:45:00',
                'updated_at' => '2022-03-08 11:14:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'tax_percent' => 6.0,
                'status' => 'not_active',
                'created_at' => '2021-12-29 07:28:06',
                'updated_at' => '2022-03-08 11:15:40',
                'deleted_at' => '2022-03-08 11:15:40',
            ),
            3 => 
            array (
                'id' => 4,
                'seller_id' => 60,
                'tax_percent' => 6.0,
                'status' => 'not_active',
                'created_at' => '2021-12-29 07:28:24',
                'updated_at' => '2022-02-03 03:10:27',
                'deleted_at' => '2022-02-03 03:10:27',
            ),
        ));
        
        
    }
}