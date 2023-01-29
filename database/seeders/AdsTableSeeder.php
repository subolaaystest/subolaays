<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ads')->delete();
        
        \DB::table('ads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'main',
                'image' => 'ads/home-slide-1.png',
                'url' => '#',
                'status' => 'active',
                'visit' => 0,
                'created_at' => '2022-03-27 22:54:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'main',
                'image' => 'ads/home-slide-1.png',
                'url' => '#',
                'status' => 'active',
                'visit' => 0,
                'created_at' => '2022-03-27 22:54:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'sub1',
                'image' => 'ads/img-1.png',
                'url' => '',
                'status' => 'active',
                'visit' => 0,
                'created_at' => '2022-03-27 22:54:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'sub2',
                'image' => 'ads/img-1.png',
                'url' => '',
                'status' => 'active',
                'visit' => 0,
                'created_at' => '2022-03-27 22:54:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}