<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'roleSlug' => 'procedures',
                'created_at' => '2021-01-25 12:49:05',
                'updated_at' => '2021-01-25 12:49:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'roleSlug' => 'statistics',
                'created_at' => '2021-01-25 13:06:00',
                'updated_at' => '2021-01-25 13:06:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}