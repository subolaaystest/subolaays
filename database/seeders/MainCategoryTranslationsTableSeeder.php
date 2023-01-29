<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MainCategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('main_category_translations')->delete();

        \DB::table('main_category_translations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'main_category_id' => 1,
                'locale' => 'en',
                'name' => 'فواكه',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'main_category_id' => 1,
                'locale' => 'ar',
                'name' => 'فواكه',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'main_category_id' => 2,
                'locale' => 'en',
                'name' => 'مخبوزات',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'main_category_id' => 2,
                'locale' => 'ar',
                'name' => 'مخبوزات',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'main_category_id' => 3,
                'locale' => 'en',
                'name' => 'الدجاج',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'main_category_id' => 3,
                'locale' => 'ar',
                'name' => 'الدجاج',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'main_category_id' => 4,
                'locale' => 'en',
                'name' => 'حلويات وبسكويت',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'main_category_id' => 4,
                'locale' => 'ar',
                'name' => 'حلويات وبسكويت',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'main_category_id' => 5,
                'locale' => 'en',
                'name' => 'وجبات خفيفة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'main_category_id' => 5,
                'locale' => 'ar',
                'name' => 'وجبات خفيفة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'main_category_id' => 6,
                'locale' => 'en',
                'name' => 'البقالة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'main_category_id' => 6,
                'locale' => 'ar',
                'name' => 'البقالة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'main_category_id' => 7,
                'locale' => 'en',
                'name' => 'معلبات',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'main_category_id' => 7,
                'locale' => 'ar',
                'name' => 'معلبات',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'main_category_id' => 8,
                'locale' => 'en',
                'name' => 'مجمدات',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'main_category_id' => 8,
                'locale' => 'ar',
                'name' => 'مجمدات',
                'created_at' => '2020-06-20 15:48:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'main_category_id' => 9,
                'locale' => 'en',
                'name' => 'العناية بالطفل',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'main_category_id' => 9,
                'locale' => 'ar',
                'name' => 'العناية بالطفل',
                'created_at' => '2020-06-20 15:48:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'main_category_id' => 10,
                'locale' => 'en',
                'name' => 'العناية الشخصية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'main_category_id' => 10,
                'locale' => 'ar',
                'name' => 'العناية الشخصية',
                'created_at' => '2020-06-20 15:48:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'main_category_id' => 11,
                'locale' => 'en',
                'name' => 'منتجات الألبان',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'main_category_id' => 11,
                'locale' => 'ar',
                'name' => 'منتجات الألبان',
                'created_at' => '2020-06-20 15:48:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'main_category_id' => 12,
                'locale' => 'ar',
                'name' => '6666666',
                'created_at' => '2021-12-03 11:00:04',
                'updated_at' => '2021-12-03 11:00:04',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'main_category_id' => 12,
                'locale' => 'en',
                'name' => '6666666',
                'created_at' => '2021-12-03 11:00:04',
                'updated_at' => '2021-12-03 11:00:04',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'main_category_id' => 13,
                'locale' => 'ar',
                'name' => '534535353535',
                'created_at' => '2021-12-03 11:20:30',
                'updated_at' => '2021-12-03 11:20:30',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'main_category_id' => 13,
                'locale' => 'en',
                'name' => '534535353535',
                'created_at' => '2021-12-03 11:20:30',
                'updated_at' => '2021-12-03 11:20:30',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'main_category_id' => 14,
                'locale' => 'ar',
                'name' => '657567567567',
                'created_at' => '2021-12-03 11:26:16',
                'updated_at' => '2021-12-03 11:26:16',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'main_category_id' => 14,
                'locale' => 'en',
                'name' => '657567567567',
                'created_at' => '2021-12-03 11:26:17',
                'updated_at' => '2021-12-03 11:26:17',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'main_category_id' => 15,
                'locale' => 'ar',
                'name' => '42423',
                'created_at' => '2021-12-03 11:28:04',
                'updated_at' => '2021-12-03 11:28:04',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'main_category_id' => 15,
                'locale' => 'en',
                'name' => '42423',
                'created_at' => '2021-12-03 11:28:04',
                'updated_at' => '2021-12-03 11:28:04',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'main_category_id' => 17,
                'locale' => 'ar',
                'name' => 'aaa',
                'created_at' => '2021-12-07 19:40:20',
                'updated_at' => '2021-12-07 19:40:20',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'main_category_id' => 17,
                'locale' => 'en',
                'name' => 'eee',
                'created_at' => '2021-12-07 19:40:20',
                'updated_at' => '2021-12-07 19:40:20',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'main_category_id' => 18,
                'locale' => 'ar',
                'name' => '777',
                'created_at' => '2021-12-07 19:45:55',
                'updated_at' => '2021-12-07 19:45:55',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'main_category_id' => 18,
                'locale' => 'en',
                'name' => '888',
                'created_at' => '2021-12-07 19:45:55',
                'updated_at' => '2021-12-07 19:45:55',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'main_category_id' => 19,
                'locale' => 'ar',
                'name' => '000',
                'created_at' => '2021-12-07 19:48:29',
                'updated_at' => '2021-12-07 19:48:29',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'main_category_id' => 19,
                'locale' => 'en',
                'name' => '999',
                'created_at' => '2021-12-07 19:48:29',
                'updated_at' => '2021-12-07 19:48:29',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'main_category_id' => 20,
                'locale' => 'ar',
                'name' => 'مشروبات طبيعية',
                'created_at' => '2021-12-07 19:52:38',
                'updated_at' => '2021-12-07 19:52:38',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'main_category_id' => 20,
                'locale' => 'en',
                'name' => 'Mashrobat',
                'created_at' => '2021-12-07 19:52:38',
                'updated_at' => '2021-12-07 19:52:38',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'main_category_id' => 21,
                'locale' => 'ar',
                'name' => 'ttt',
                'created_at' => '2022-03-08 06:12:32',
                'updated_at' => '2022-03-08 06:12:32',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'main_category_id' => 21,
                'locale' => 'en',
                'name' => 'tt',
                'created_at' => '2022-03-08 06:12:32',
                'updated_at' => '2022-03-08 06:12:32',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'main_category_id' => 22,
                'locale' => 'ar',
                'name' => 'زيوت طبيعية',
                'created_at' => '2022-04-07 13:15:15',
                'updated_at' => '2022-04-07 13:15:15',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'main_category_id' => 22,
                'locale' => 'en',
                'name' => NULL,
                'created_at' => '2022-04-07 13:15:15',
                'updated_at' => '2022-04-07 13:15:15',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'main_category_id' => 23,
                'locale' => 'ar',
                'name' => NULL,
                'created_at' => '2022-05-30 21:03:33',
                'updated_at' => '2022-05-30 21:03:33',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'main_category_id' => 23,
                'locale' => 'en',
                'name' => NULL,
                'created_at' => '2022-05-30 21:03:33',
                'updated_at' => '2022-05-30 21:03:33',
                'deleted_at' => NULL,
            ),
        44 =>
            array (
                'id' => 45,
                'main_category_id' => 24,
                'locale' => 'en',
                'name' => 'electrons',
                'created_at' => '2022-05-30 21:03:33',
                'updated_at' => '2022-05-30 21:03:33',
                'deleted_at' => NULL,
            ),
        45 =>
            array (
                'id' => 46,
                'main_category_id' => 24,
                'locale' => 'ar',
                'name' => 'الكترونيات',
                'created_at' => '2022-05-30 21:03:33',
                'updated_at' => '2022-05-30 21:03:33',
                'deleted_at' => NULL,
            ),
        ));


    }
}
