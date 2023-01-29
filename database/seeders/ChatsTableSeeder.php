<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chats')->delete();
        
        \DB::table('chats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 60,
                'buyer_id' => 1,
                'type' => 'offers',
                'delete' => 0,
                'freez' => 0,
                'last_seen' => NULL,
                'created_at' => '2022-02-05 07:16:08',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}