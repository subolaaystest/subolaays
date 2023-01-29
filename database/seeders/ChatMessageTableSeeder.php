<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatMessageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_message')->delete();
        
        \DB::table('chat_message')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chat_id' => 1,
                'sender_id' => 1,
                'message' => 'صباح الخير, كيف بإمكاني الإطلاع على كافة العروض لهذا الشهر؟',
                'read_at' => 0,
                'type' => 0,
                'created_at' => '2022-02-05 07:17:42',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}