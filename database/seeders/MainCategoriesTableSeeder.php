<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MainCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('main_categories')->delete();

        \DB::table('main_categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'appear_on_homepage' => 'yes',
                'created_by' => 0,
                'image' => 'main_categories/1.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'appear_on_homepage' => 'yes',
                'created_by' => 0,
                'image' => 'main_categories/2.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/3.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/4.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/5.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/6.png',
                'status' => 'not_active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/7.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/8.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/9.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/10.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'appear_on_homepage' => 'no',
                'created_by' => 0,
                'image' => 'main_categories/11.png',
                'status' => 'active',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => 'main_categories/11.png',
                'status' => 'under_process',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => '2021-12-07 00:00:00',
            ),
            12 =>
            array (
                'id' => 17,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => NULL,
                'status' => 'under_process',
                'created_at' => '2021-12-07 19:40:20',
                'updated_at' => '2021-12-07 19:40:20',
                'deleted_at' => '2021-12-07 00:00:00',
            ),
            13 =>
            array (
                'id' => 18,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => NULL,
                'status' => 'under_process',
                'created_at' => '2021-12-07 19:45:55',
                'updated_at' => '2021-12-07 19:45:55',
                'deleted_at' => '2021-12-07 00:00:00',
            ),
            14 =>
            array (
                'id' => 19,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => NULL,
                'status' => 'under_process',
                'created_at' => '2021-12-07 19:48:29',
                'updated_at' => '2021-12-07 19:48:29',
                'deleted_at' => '2021-12-01 00:00:00',
            ),
            15 =>
            array (
                'id' => 20,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => 'main_categories/76987811638906757_4139966.png',
                'status' => 'under_process',
                'created_at' => '2021-12-07 19:52:38',
                'updated_at' => '2021-12-07 19:52:38',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 21,
                'appear_on_homepage' => 'no',
                'created_by' => 95,
                'image' => 'main_categories/23365049164671995283.jpg',
                'status' => 'under_process',
                'created_at' => '2022-03-08 06:12:32',
                'updated_at' => '2022-03-08 06:12:32',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 22,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => 'main_categories/81178901649333715_1701190.png',
                'status' => 'under_process',
                'created_at' => '2022-04-07 13:15:15',
                'updated_at' => '2022-04-07 13:15:15',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 23,
                'appear_on_homepage' => 'no',
                'created_by' => 60,
                'image' => NULL,
                'status' => 'under_process',
                'created_at' => '2022-05-30 21:03:33',
                'updated_at' => '2022-05-30 21:03:33',
                'deleted_at' => NULL,
            ),
        19 =>
            array (
                'id' => 24,
                'appear_on_homepage' => 'yes',
                'created_by' => 60,
                'image' => NULL,
                'status' => 'under_process',
                'created_at' => '2022-05-30 21:03:33',
                'updated_at' => '2022-05-30 21:03:33',
                'deleted_at' => NULL,
            ),
        ));


    }
}
