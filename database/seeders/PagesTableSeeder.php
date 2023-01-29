<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'At7NpGQOFGyVkd910587021636312909_2892981.jpg',
                'visit' => 3,
                'created_at' => '2018-08-05 12:27:42',
                'updated_at' => '2021-11-08 09:21:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'Iwf0BX7BrWNg9bi29006971626270011_5544450.png',
                'visit' => 1,
                'created_at' => '2018-08-05 12:27:49',
                'updated_at' => '2021-11-04 08:15:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'Iwf0BX7BrWNg9bi29006971626270011_5544450.png',
                'visit' => 1,
                'created_at' => '2018-08-05 12:27:49',
                'updated_at' => '2021-11-04 08:15:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}