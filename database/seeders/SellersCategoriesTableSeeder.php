<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_categories')->delete();
        
        \DB::table('sellers_categories')->insert(array (
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
            5 => 
            array (
                'id' => 7,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:21:20',
                'updated_at' => '2021-12-03 10:21:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:24:36',
                'updated_at' => '2021-12-03 10:24:36',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:24:39',
                'updated_at' => '2021-12-03 10:24:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:24:56',
                'updated_at' => '2021-12-03 10:24:56',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:25:40',
                'updated_at' => '2021-12-03 10:25:40',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:27:11',
                'updated_at' => '2021-12-03 10:27:11',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:34:09',
                'updated_at' => '2021-12-03 10:34:09',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:35:11',
                'updated_at' => '2021-12-03 10:35:11',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:35:27',
                'updated_at' => '2021-12-03 10:35:27',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:35:59',
                'updated_at' => '2021-12-03 10:35:59',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:40:15',
                'updated_at' => '2021-12-03 10:40:15',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:41:09',
                'updated_at' => '2021-12-03 10:41:09',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:41:21',
                'updated_at' => '2021-12-03 10:41:21',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:43:07',
                'updated_at' => '2021-12-03 10:43:07',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:45:47',
                'updated_at' => '2021-12-03 10:45:47',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 10:45:55',
                'updated_at' => '2021-12-03 10:45:55',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:04:55',
                'updated_at' => '2021-12-03 11:04:55',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:05:34',
                'updated_at' => '2021-12-03 11:05:34',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:08:59',
                'updated_at' => '2021-12-03 11:08:59',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:09:39',
                'updated_at' => '2021-12-03 11:09:39',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:09:41',
                'updated_at' => '2021-12-03 11:09:41',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:10:13',
                'updated_at' => '2021-12-03 11:10:13',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:10:15',
                'updated_at' => '2021-12-03 11:10:15',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:10:29',
                'updated_at' => '2021-12-03 11:10:29',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:12:01',
                'updated_at' => '2021-12-03 11:12:01',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:13:24',
                'updated_at' => '2021-12-03 11:13:24',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:14:08',
                'updated_at' => '2021-12-03 11:14:08',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:17:59',
                'updated_at' => '2021-12-03 11:17:59',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:18:03',
                'updated_at' => '2021-12-03 11:18:03',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:20:10',
                'updated_at' => '2021-12-03 11:20:10',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'number_stories_required' => 0,
                'number_deals_required' => 0,
                'image' => NULL,
                'approve' => 0,
                'status' => 'active',
                'created_at' => '2021-12-03 11:26:03',
                'updated_at' => '2021-12-03 11:26:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}