<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notices')->delete();
        
        \DB::table('notices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 35,
                'title' => 'ملاحظة هامة جداً',
                'description' => 'يجب متابعة موضوع المريض رقم 2030',
                'start_date' => '2020-07-01',
                'end_date' => '2020-07-03',
                'created_at' => '2020-07-19 03:32:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 36,
                'title' => 'تحديد موعد عملية',
                'description' => 'لابد من تحديد موعد عملية بأقرب وقت للمريض رقم 04500',
                'start_date' => '2020-07-02',
                'end_date' => '2020-07-03',
                'created_at' => '2020-07-19 03:32:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}