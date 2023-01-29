<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_translations')->delete();
        
        \DB::table('permission_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'permission_id' => 1,
                'locale' => 'ar',
                'name' => 'دليل الإجراءات',
                'created_at' => '2021-01-25 12:49:05',
                'updated_at' => '2021-01-25 12:49:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 2,
                'locale' => 'ar',
                'name' => 'الإحصائيات',
                'created_at' => '2021-01-25 13:06:00',
                'updated_at' => '2021-01-25 13:06:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}