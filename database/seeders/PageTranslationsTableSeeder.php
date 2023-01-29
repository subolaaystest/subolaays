<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_translations')->delete();
        
        \DB::table('page_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 1,
                'locale' => 'en',
                'title' => 'About Us',
                'description' => '<p>About Us&nbsp;About Us&nbsp;About Us About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;About Us&nbsp;</p>',
                'created_at' => '2018-08-05 12:29:09',
                'updated_at' => '2021-07-14 17:39:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 1,
                'locale' => 'ar',
                'title' => 'كلمة الوزارة',
                'description' => '<p>من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن&nbsp;من نحن vv</p>',
                'created_at' => '2018-08-05 12:29:12',
                'updated_at' => '2021-07-14 17:39:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 2,
                'locale' => 'en',
                'title' => 'Privacy Policy',
                'description' => '<p>Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy</p>',
                'created_at' => '2018-08-05 12:30:08',
                'updated_at' => '2021-03-23 01:29:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 2,
                'locale' => 'ar',
                'title' => 'خطة الوزارة',
                'description' => '<p>سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية</p>',
                'created_at' => '2018-08-05 12:30:11',
                'updated_at' => '2021-03-23 01:29:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 3,
                'locale' => 'en',
                'title' => 'Privacy Policy',
                'description' => '<p>Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy Privacy Policy</p>',
                'created_at' => '2018-08-05 12:30:08',
                'updated_at' => '2021-03-23 01:29:01',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 3,
                'locale' => 'ar',
                'title' => 'الادارات العامة',
                'description' => '<p>سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية سياسة الخصوصية</p>',
                'created_at' => '2018-08-05 12:30:11',
                'updated_at' => '2021-03-23 01:29:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}