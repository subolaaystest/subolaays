<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BuyersCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('buyers_categories')->delete();
        
        \DB::table('buyers_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => '1.png',
                'approve' => 1,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => '2.png',
                'approve' => 1,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => '3.png',
                'approve' => 1,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => '4.png',
                'approve' => 1,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => '5.png',
                'approve' => 1,
                'status' => 'active',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}