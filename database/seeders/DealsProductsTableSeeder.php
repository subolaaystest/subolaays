<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DealsProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('deals_products')->delete();
        
        
        
    }
}