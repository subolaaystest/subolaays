<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersBanksAccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_banks_accounts')->delete();
        
        \DB::table('sellers_banks_accounts')->insert(array (
            0 => 
            array (
                'id' => 2,
                'seller_id' => 60,
                'bank_id' => 1,
                'account_name' => 'Mohammed Ahmed',
                'account_number' => '01231231290',
                'iban' => '765675675067456456',
                'status' => 'active',
                'created_at' => '2021-12-29 11:23:02',
                'updated_at' => '2021-12-29 11:23:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'seller_id' => 60,
                'bank_id' => 2,
                'account_name' => 'Mohammed Ahmed',
                'account_number' => '01231231290',
                'iban' => '234234124234',
                'status' => 'active',
                'created_at' => '2022-02-03 03:10:58',
                'updated_at' => '2022-02-03 03:10:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}