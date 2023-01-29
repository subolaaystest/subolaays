<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_teams')->delete();
        
        \DB::table('sellers_teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'name' => 'Mohammed Ali',
                'mobile' => '0597116675',
                'email' => 'mohammedali@gmail.com',
                'status' => 'not_active',
                'created_at' => '2021-12-29 16:59:43',
                'updated_at' => '2022-02-05 04:14:50',
                'deleted_at' => '2022-02-05 04:14:50',
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 60,
                'name' => 'Ramy Abdallah',
                'mobile' => '001221312300',
                'email' => 'ramy@gmail.com',
                'status' => 'not_active',
                'created_at' => '2021-12-29 17:47:56',
                'updated_at' => '2022-05-07 16:52:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'name' => 'aa',
                'mobile' => '234324234',
                'email' => 'lam33ar@gmail.com',
                'status' => 'not_active',
                'created_at' => '2022-03-08 10:53:38',
                'updated_at' => '2022-03-08 11:09:35',
                'deleted_at' => '2022-03-08 11:09:35',
            ),
        ));
        
        
    }
}