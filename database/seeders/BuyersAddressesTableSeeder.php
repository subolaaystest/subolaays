<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BuyersAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buyers_addresses')->delete();
        
        
        
    }
}