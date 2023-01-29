<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerCategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seller_category_translations')->delete();
        
        \DB::table('seller_category_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_category_id' => 1,
                'locale' => 'en',
                'name' => 'مصنع',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'seller_category_id' => 1,
                'locale' => 'ar',
                'name' => 'مصنع',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'seller_category_id' => 2,
                'locale' => 'en',
                'name' => 'علامة تجارية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'seller_category_id' => 2,
                'locale' => 'ar',
                'name' => 'علامة تجارية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'seller_category_id' => 3,
                'locale' => 'en',
                'name' => 'مستودع جملة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'seller_category_id' => 3,
                'locale' => 'ar',
                'name' => 'مستودع جملة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'seller_category_id' => 4,
                'locale' => 'en',
                'name' => 'مندوب جملة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'seller_category_id' => 4,
                'locale' => 'ar',
                'name' => 'مندوب جملة',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'seller_category_id' => 5,
                'locale' => 'en',
                'name' => 'وكيل علامة تجارية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'seller_category_id' => 5,
                'locale' => 'ar',
                'name' => 'وكيل علامة تجارية',
                'created_at' => '2021-11-29 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'seller_category_id' => 7,
                'locale' => 'ar',
                'name' => '24234',
                'created_at' => '2021-12-03 10:21:21',
                'updated_at' => '2021-12-03 10:21:21',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'seller_category_id' => 7,
                'locale' => 'en',
                'name' => '24234',
                'created_at' => '2021-12-03 10:21:21',
                'updated_at' => '2021-12-03 10:21:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'seller_category_id' => 8,
                'locale' => 'ar',
                'name' => 'werwer',
                'created_at' => '2021-12-03 10:24:36',
                'updated_at' => '2021-12-03 10:24:36',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'seller_category_id' => 8,
                'locale' => 'en',
                'name' => 'werwer',
                'created_at' => '2021-12-03 10:24:36',
                'updated_at' => '2021-12-03 10:24:36',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'seller_category_id' => 9,
                'locale' => 'ar',
                'name' => 'werwer',
                'created_at' => '2021-12-03 10:24:39',
                'updated_at' => '2021-12-03 10:24:39',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'seller_category_id' => 9,
                'locale' => 'en',
                'name' => 'werwer',
                'created_at' => '2021-12-03 10:24:39',
                'updated_at' => '2021-12-03 10:24:39',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'seller_category_id' => 10,
                'locale' => 'ar',
                'name' => '777777777',
                'created_at' => '2021-12-03 10:24:56',
                'updated_at' => '2021-12-03 10:24:56',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'seller_category_id' => 10,
                'locale' => 'en',
                'name' => '777777777',
                'created_at' => '2021-12-03 10:24:56',
                'updated_at' => '2021-12-03 10:24:56',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'seller_category_id' => 11,
                'locale' => 'ar',
                'name' => 'ew234234',
                'created_at' => '2021-12-03 10:25:40',
                'updated_at' => '2021-12-03 10:25:40',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'seller_category_id' => 11,
                'locale' => 'en',
                'name' => 'ew234234',
                'created_at' => '2021-12-03 10:25:40',
                'updated_at' => '2021-12-03 10:25:40',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'seller_category_id' => 12,
                'locale' => 'ar',
                'name' => '0000',
                'created_at' => '2021-12-03 10:27:11',
                'updated_at' => '2021-12-03 10:27:11',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'seller_category_id' => 12,
                'locale' => 'en',
                'name' => '0000',
                'created_at' => '2021-12-03 10:27:11',
                'updated_at' => '2021-12-03 10:27:11',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'seller_category_id' => 13,
                'locale' => 'ar',
                'name' => '5345345',
                'created_at' => '2021-12-03 10:34:09',
                'updated_at' => '2021-12-03 10:34:09',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'seller_category_id' => 13,
                'locale' => 'en',
                'name' => '5345345',
                'created_at' => '2021-12-03 10:34:10',
                'updated_at' => '2021-12-03 10:34:10',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'seller_category_id' => 14,
                'locale' => 'ar',
                'name' => '777',
                'created_at' => '2021-12-03 10:35:11',
                'updated_at' => '2021-12-03 10:35:11',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'seller_category_id' => 14,
                'locale' => 'en',
                'name' => '777',
                'created_at' => '2021-12-03 10:35:11',
                'updated_at' => '2021-12-03 10:35:11',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'seller_category_id' => 15,
                'locale' => 'ar',
                'name' => '555',
                'created_at' => '2021-12-03 10:35:27',
                'updated_at' => '2021-12-03 10:35:27',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'seller_category_id' => 15,
                'locale' => 'en',
                'name' => '555',
                'created_at' => '2021-12-03 10:35:27',
                'updated_at' => '2021-12-03 10:35:27',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'seller_category_id' => 16,
                'locale' => 'ar',
                'name' => '11111111122',
                'created_at' => '2021-12-03 10:35:59',
                'updated_at' => '2021-12-03 10:35:59',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 32,
                'seller_category_id' => 16,
                'locale' => 'en',
                'name' => '11111111122',
                'created_at' => '2021-12-03 10:35:59',
                'updated_at' => '2021-12-03 10:35:59',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 33,
                'seller_category_id' => 17,
                'locale' => 'ar',
                'name' => '3',
                'created_at' => '2021-12-03 10:40:15',
                'updated_at' => '2021-12-03 10:40:15',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 34,
                'seller_category_id' => 17,
                'locale' => 'en',
                'name' => '3',
                'created_at' => '2021-12-03 10:40:15',
                'updated_at' => '2021-12-03 10:40:15',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'seller_category_id' => 18,
                'locale' => 'ar',
                'name' => '756756',
                'created_at' => '2021-12-03 10:41:10',
                'updated_at' => '2021-12-03 10:41:10',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 36,
                'seller_category_id' => 18,
                'locale' => 'en',
                'name' => '756756',
                'created_at' => '2021-12-03 10:41:10',
                'updated_at' => '2021-12-03 10:41:10',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 37,
                'seller_category_id' => 19,
                'locale' => 'ar',
                'name' => '222',
                'created_at' => '2021-12-03 10:41:21',
                'updated_at' => '2021-12-03 10:41:21',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 38,
                'seller_category_id' => 19,
                'locale' => 'en',
                'name' => '222',
                'created_at' => '2021-12-03 10:41:21',
                'updated_at' => '2021-12-03 10:41:21',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'seller_category_id' => 20,
                'locale' => 'ar',
                'name' => '34534345',
                'created_at' => '2021-12-03 10:43:07',
                'updated_at' => '2021-12-03 10:43:07',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'seller_category_id' => 20,
                'locale' => 'en',
                'name' => '34534345',
                'created_at' => '2021-12-03 10:43:07',
                'updated_at' => '2021-12-03 10:43:07',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'seller_category_id' => 21,
                'locale' => 'ar',
                'name' => '7567567',
                'created_at' => '2021-12-03 10:45:47',
                'updated_at' => '2021-12-03 10:45:47',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'seller_category_id' => 21,
                'locale' => 'en',
                'name' => '7567567',
                'created_at' => '2021-12-03 10:45:48',
                'updated_at' => '2021-12-03 10:45:48',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'seller_category_id' => 22,
                'locale' => 'ar',
                'name' => '645654646',
                'created_at' => '2021-12-03 10:45:55',
                'updated_at' => '2021-12-03 10:45:55',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'seller_category_id' => 22,
                'locale' => 'en',
                'name' => '645654646',
                'created_at' => '2021-12-03 10:45:55',
                'updated_at' => '2021-12-03 10:45:55',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 45,
                'seller_category_id' => 23,
                'locale' => 'ar',
                'name' => '5345345',
                'created_at' => '2021-12-03 11:04:55',
                'updated_at' => '2021-12-03 11:04:55',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 46,
                'seller_category_id' => 23,
                'locale' => 'en',
                'name' => '5345345',
                'created_at' => '2021-12-03 11:04:55',
                'updated_at' => '2021-12-03 11:04:55',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 47,
                'seller_category_id' => 24,
                'locale' => 'ar',
                'name' => '555555555',
                'created_at' => '2021-12-03 11:05:34',
                'updated_at' => '2021-12-03 11:05:34',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 48,
                'seller_category_id' => 24,
                'locale' => 'en',
                'name' => '555555555',
                'created_at' => '2021-12-03 11:05:34',
                'updated_at' => '2021-12-03 11:05:34',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 49,
                'seller_category_id' => 25,
                'locale' => 'ar',
                'name' => '345345',
                'created_at' => '2021-12-03 11:08:59',
                'updated_at' => '2021-12-03 11:08:59',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 50,
                'seller_category_id' => 25,
                'locale' => 'en',
                'name' => '345345',
                'created_at' => '2021-12-03 11:08:59',
                'updated_at' => '2021-12-03 11:08:59',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 51,
                'seller_category_id' => 26,
                'locale' => 'ar',
                'name' => '35435345',
                'created_at' => '2021-12-03 11:09:39',
                'updated_at' => '2021-12-03 11:09:39',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 52,
                'seller_category_id' => 26,
                'locale' => 'en',
                'name' => '35435345',
                'created_at' => '2021-12-03 11:09:39',
                'updated_at' => '2021-12-03 11:09:39',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 53,
                'seller_category_id' => 27,
                'locale' => 'ar',
                'name' => '35435345',
                'created_at' => '2021-12-03 11:09:42',
                'updated_at' => '2021-12-03 11:09:42',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 54,
                'seller_category_id' => 27,
                'locale' => 'en',
                'name' => '35435345',
                'created_at' => '2021-12-03 11:09:42',
                'updated_at' => '2021-12-03 11:09:42',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 55,
                'seller_category_id' => 28,
                'locale' => 'ar',
                'name' => '535345',
                'created_at' => '2021-12-03 11:10:13',
                'updated_at' => '2021-12-03 11:10:13',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 56,
                'seller_category_id' => 28,
                'locale' => 'en',
                'name' => '535345',
                'created_at' => '2021-12-03 11:10:13',
                'updated_at' => '2021-12-03 11:10:13',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 57,
                'seller_category_id' => 29,
                'locale' => 'ar',
                'name' => '535345',
                'created_at' => '2021-12-03 11:10:15',
                'updated_at' => '2021-12-03 11:10:15',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 58,
                'seller_category_id' => 29,
                'locale' => 'en',
                'name' => '535345',
                'created_at' => '2021-12-03 11:10:15',
                'updated_at' => '2021-12-03 11:10:15',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 59,
                'seller_category_id' => 30,
                'locale' => 'ar',
                'name' => '345345',
                'created_at' => '2021-12-03 11:10:29',
                'updated_at' => '2021-12-03 11:10:29',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 60,
                'seller_category_id' => 30,
                'locale' => 'en',
                'name' => '345345',
                'created_at' => '2021-12-03 11:10:29',
                'updated_at' => '2021-12-03 11:10:29',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 61,
                'seller_category_id' => 31,
                'locale' => 'ar',
                'name' => '45435345',
                'created_at' => '2021-12-03 11:12:01',
                'updated_at' => '2021-12-03 11:12:01',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 62,
                'seller_category_id' => 31,
                'locale' => 'en',
                'name' => '45435345',
                'created_at' => '2021-12-03 11:12:02',
                'updated_at' => '2021-12-03 11:12:02',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 63,
                'seller_category_id' => 32,
                'locale' => 'ar',
                'name' => '345345',
                'created_at' => '2021-12-03 11:13:24',
                'updated_at' => '2021-12-03 11:13:24',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 64,
                'seller_category_id' => 32,
                'locale' => 'en',
                'name' => '345345',
                'created_at' => '2021-12-03 11:13:24',
                'updated_at' => '2021-12-03 11:13:24',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 65,
                'seller_category_id' => 33,
                'locale' => 'ar',
                'name' => '35345345',
                'created_at' => '2021-12-03 11:14:08',
                'updated_at' => '2021-12-03 11:14:08',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 66,
                'seller_category_id' => 33,
                'locale' => 'en',
                'name' => '35345345',
                'created_at' => '2021-12-03 11:14:08',
                'updated_at' => '2021-12-03 11:14:08',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 67,
                'seller_category_id' => 34,
                'locale' => 'ar',
                'name' => '3534345',
                'created_at' => '2021-12-03 11:17:59',
                'updated_at' => '2021-12-03 11:17:59',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 68,
                'seller_category_id' => 34,
                'locale' => 'en',
                'name' => '3534345',
                'created_at' => '2021-12-03 11:17:59',
                'updated_at' => '2021-12-03 11:17:59',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 69,
                'seller_category_id' => 35,
                'locale' => 'ar',
                'name' => '534345',
                'created_at' => '2021-12-03 11:18:03',
                'updated_at' => '2021-12-03 11:18:03',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 70,
                'seller_category_id' => 35,
                'locale' => 'en',
                'name' => '534345',
                'created_at' => '2021-12-03 11:18:03',
                'updated_at' => '2021-12-03 11:18:03',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 71,
                'seller_category_id' => 36,
                'locale' => 'ar',
                'name' => '777777777',
                'created_at' => '2021-12-03 11:20:10',
                'updated_at' => '2021-12-03 11:20:10',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 72,
                'seller_category_id' => 36,
                'locale' => 'en',
                'name' => '777777777',
                'created_at' => '2021-12-03 11:20:10',
                'updated_at' => '2021-12-03 11:20:10',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 73,
                'seller_category_id' => 37,
                'locale' => 'ar',
                'name' => '777777777777',
                'created_at' => '2021-12-03 11:26:03',
                'updated_at' => '2021-12-03 11:26:03',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 74,
                'seller_category_id' => 37,
                'locale' => 'en',
                'name' => '777777777777',
                'created_at' => '2021-12-03 11:26:03',
                'updated_at' => '2021-12-03 11:26:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}