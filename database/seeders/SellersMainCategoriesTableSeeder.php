<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersMainCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers_main_categories')->delete();
        
        \DB::table('sellers_main_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seller_id' => 47,
                'main_category_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2021-12-01 02:46:04',
                'deleted_at' => '2021-12-01 02:46:04',
            ),
            1 => 
            array (
                'id' => 2,
                'seller_id' => 47,
                'main_category_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2021-12-01 02:46:04',
                'deleted_at' => '2021-12-01 02:46:04',
            ),
            2 => 
            array (
                'id' => 3,
                'seller_id' => 57,
                'main_category_id' => 1,
                'created_at' => '2021-12-02 07:20:07',
                'updated_at' => '2021-12-02 07:20:07',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'seller_id' => 57,
                'main_category_id' => 2,
                'created_at' => '2021-12-02 07:20:07',
                'updated_at' => '2021-12-02 07:20:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'seller_id' => 57,
                'main_category_id' => 3,
                'created_at' => '2021-12-02 07:20:07',
                'updated_at' => '2021-12-02 07:20:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'seller_id' => 60,
                'main_category_id' => 1,
                'created_at' => '2021-12-03 06:56:56',
                'updated_at' => '2021-12-07 19:09:33',
                'deleted_at' => '2021-12-07 19:09:33',
            ),
            6 => 
            array (
                'id' => 7,
                'seller_id' => 60,
                'main_category_id' => 2,
                'created_at' => '2021-12-03 06:56:57',
                'updated_at' => '2021-12-03 06:56:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'seller_id' => 60,
                'main_category_id' => 3,
                'created_at' => '2021-12-03 06:56:57',
                'updated_at' => '2021-12-07 19:14:18',
                'deleted_at' => '2021-12-07 19:14:18',
            ),
            8 => 
            array (
                'id' => 9,
                'seller_id' => 61,
                'main_category_id' => 4,
                'created_at' => '2021-12-03 07:00:18',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            9 => 
            array (
                'id' => 10,
                'seller_id' => 70,
                'main_category_id' => 10,
                'created_at' => '2021-12-03 07:16:27',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            10 => 
            array (
                'id' => 11,
                'seller_id' => 71,
                'main_category_id' => 4,
                'created_at' => '2021-12-03 07:44:48',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            11 => 
            array (
                'id' => 12,
                'seller_id' => 72,
                'main_category_id' => 14,
                'created_at' => '2021-12-03 11:26:43',
                'updated_at' => '2021-12-03 11:26:43',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'seller_id' => 60,
                'main_category_id' => 1,
                'created_at' => '2021-12-07 19:10:51',
                'updated_at' => '2021-12-07 19:11:02',
                'deleted_at' => '2021-12-07 19:11:02',
            ),
            13 => 
            array (
                'id' => 14,
                'seller_id' => 60,
                'main_category_id' => 1,
                'created_at' => '2021-12-07 19:11:02',
                'updated_at' => '2021-12-07 19:11:49',
                'deleted_at' => '2021-12-07 19:11:49',
            ),
            14 => 
            array (
                'id' => 15,
                'seller_id' => 60,
                'main_category_id' => 1,
                'created_at' => '2021-12-07 19:11:56',
                'updated_at' => '2021-12-07 19:12:03',
                'deleted_at' => '2021-12-07 19:12:03',
            ),
            15 => 
            array (
                'id' => 16,
                'seller_id' => 60,
                'main_category_id' => 1,
                'created_at' => '2021-12-07 19:12:09',
                'updated_at' => '2021-12-07 19:12:15',
                'deleted_at' => '2021-12-07 19:12:15',
            ),
            16 => 
            array (
                'id' => 17,
                'seller_id' => 60,
                'main_category_id' => 12,
                'created_at' => '2021-12-07 19:13:33',
                'updated_at' => '2021-12-07 19:13:37',
                'deleted_at' => '2021-12-07 19:13:37',
            ),
            17 => 
            array (
                'id' => 18,
                'seller_id' => 60,
                'main_category_id' => 12,
                'created_at' => '2021-12-07 19:13:44',
                'updated_at' => '2021-12-07 19:14:18',
                'deleted_at' => '2021-12-07 19:14:18',
            ),
            18 => 
            array (
                'id' => 19,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2021-12-07 19:14:09',
                'updated_at' => '2021-12-07 19:14:14',
                'deleted_at' => '2021-12-07 19:14:14',
            ),
            19 => 
            array (
                'id' => 20,
                'seller_id' => 60,
                'main_category_id' => 12,
                'created_at' => '2021-12-07 19:14:23',
                'updated_at' => '2021-12-07 19:14:36',
                'deleted_at' => '2021-12-07 19:14:36',
            ),
            20 => 
            array (
                'id' => 21,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2021-12-07 19:14:29',
                'updated_at' => '2021-12-07 19:14:37',
                'deleted_at' => '2021-12-07 19:14:37',
            ),
            21 => 
            array (
                'id' => 22,
                'seller_id' => 60,
                'main_category_id' => 3,
                'created_at' => '2021-12-07 19:14:30',
                'updated_at' => '2021-12-07 19:14:40',
                'deleted_at' => '2021-12-07 19:14:40',
            ),
            22 => 
            array (
                'id' => 23,
                'seller_id' => 60,
                'main_category_id' => 10,
                'created_at' => '2021-12-07 19:14:41',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            23 => 
            array (
                'id' => 24,
                'seller_id' => 60,
                'main_category_id' => 12,
                'created_at' => '2021-12-07 19:15:51',
                'updated_at' => '2021-12-07 19:15:51',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'seller_id' => 60,
                'main_category_id' => 17,
                'created_at' => '2021-12-07 19:40:20',
                'updated_at' => '2021-12-07 19:40:20',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'seller_id' => 60,
                'main_category_id' => 18,
                'created_at' => '2021-12-07 19:45:55',
                'updated_at' => '2021-12-07 19:45:55',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'seller_id' => 60,
                'main_category_id' => 19,
                'created_at' => '2021-12-07 19:48:29',
                'updated_at' => '2021-12-07 19:48:29',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'seller_id' => 60,
                'main_category_id' => 20,
                'created_at' => '2021-12-07 19:52:38',
                'updated_at' => '2022-03-05 14:47:48',
                'deleted_at' => '2022-03-05 14:47:48',
            ),
            28 => 
            array (
                'id' => 29,
                'seller_id' => 75,
                'main_category_id' => 3,
                'created_at' => '2021-12-08 01:23:31',
                'updated_at' => '2021-12-08 01:23:54',
                'deleted_at' => '2021-12-08 01:23:54',
            ),
            29 => 
            array (
                'id' => 30,
                'seller_id' => 75,
                'main_category_id' => 4,
                'created_at' => '2021-12-08 01:23:31',
                'updated_at' => '2021-12-08 01:23:54',
                'deleted_at' => '2021-12-08 01:23:54',
            ),
            30 => 
            array (
                'id' => 31,
                'seller_id' => 75,
                'main_category_id' => NULL,
                'created_at' => '2021-12-08 01:23:31',
                'updated_at' => '2021-12-08 01:23:54',
                'deleted_at' => '2021-12-08 01:23:54',
            ),
            31 => 
            array (
                'id' => 32,
                'seller_id' => 75,
                'main_category_id' => 4,
                'created_at' => '2021-12-08 01:23:54',
                'updated_at' => '2021-12-08 01:25:17',
                'deleted_at' => '2021-12-08 01:25:17',
            ),
            32 => 
            array (
                'id' => 33,
                'seller_id' => 75,
                'main_category_id' => NULL,
                'created_at' => '2021-12-08 01:23:54',
                'updated_at' => '2021-12-08 01:25:17',
                'deleted_at' => '2021-12-08 01:25:17',
            ),
            33 => 
            array (
                'id' => 34,
                'seller_id' => 75,
                'main_category_id' => 3,
                'created_at' => '2021-12-08 01:25:17',
                'updated_at' => '2021-12-08 01:29:46',
                'deleted_at' => '2021-12-08 01:29:46',
            ),
            34 => 
            array (
                'id' => 35,
                'seller_id' => 75,
                'main_category_id' => NULL,
                'created_at' => '2021-12-08 01:25:17',
                'updated_at' => '2021-12-08 01:29:46',
                'deleted_at' => '2021-12-08 01:29:46',
            ),
            35 => 
            array (
                'id' => 36,
                'seller_id' => 75,
                'main_category_id' => 5,
                'created_at' => '2021-12-08 01:29:46',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            36 => 
            array (
                'id' => 37,
                'seller_id' => 75,
                'main_category_id' => NULL,
                'created_at' => '2021-12-08 01:29:46',
                'updated_at' => '2021-12-08 01:29:46',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2021-12-08 01:39:33',
                'updated_at' => '2022-01-24 18:38:54',
                'deleted_at' => '2022-01-24 18:38:54',
            ),
            38 => 
            array (
                'id' => 39,
                'seller_id' => 77,
                'main_category_id' => 4,
                'created_at' => '2021-12-08 06:25:08',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            39 => 
            array (
                'id' => 40,
                'seller_id' => 77,
                'main_category_id' => NULL,
                'created_at' => '2021-12-08 06:25:08',
                'updated_at' => '2021-12-08 06:25:08',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'seller_id' => 87,
                'main_category_id' => NULL,
                'created_at' => '2021-12-31 14:49:50',
                'updated_at' => '2021-12-31 14:50:09',
                'deleted_at' => '2021-12-31 14:50:09',
            ),
            41 => 
            array (
                'id' => 42,
                'seller_id' => 87,
                'main_category_id' => 4,
                'created_at' => '2021-12-31 14:50:09',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            42 => 
            array (
                'id' => 43,
                'seller_id' => 87,
                'main_category_id' => NULL,
                'created_at' => '2021-12-31 14:50:09',
                'updated_at' => '2021-12-31 14:50:09',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'seller_id' => 88,
                'main_category_id' => 4,
                'created_at' => '2022-01-16 14:14:19',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            44 => 
            array (
                'id' => 45,
                'seller_id' => 88,
                'main_category_id' => NULL,
                'created_at' => '2022-01-16 14:14:19',
                'updated_at' => '2022-01-16 14:14:19',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-01-24 18:38:59',
                'updated_at' => '2022-02-06 08:04:04',
                'deleted_at' => '2022-02-06 08:04:04',
            ),
            46 => 
            array (
                'id' => 47,
                'seller_id' => 60,
                'main_category_id' => 3,
                'created_at' => '2022-02-01 05:42:20',
                'updated_at' => '2022-02-01 05:42:24',
                'deleted_at' => '2022-02-01 05:42:24',
            ),
            47 => 
            array (
                'id' => 48,
                'seller_id' => 60,
                'main_category_id' => 24,
                'created_at' => '2022-02-01 05:51:12',
                'updated_at' => '2022-02-01 05:51:15',
                'deleted_at' => '2022-02-01 05:51:15',
            ),
            48 => 
            array (
                'id' => 49,
                'seller_id' => 60,
                'main_category_id' => 23,
                'created_at' => '2022-02-01 05:51:18',
                'updated_at' => '2022-02-01 05:51:18',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'seller_id' => 60,
                'main_category_id' => 22,
                'created_at' => '2022-02-01 05:51:19',
                'updated_at' => '2022-04-07 12:15:22',
                'deleted_at' => '2022-04-07 12:15:22',
            ),
            50 => 
            array (
                'id' => 51,
                'seller_id' => 92,
                'main_category_id' => 1,
                'created_at' => '2022-02-05 03:36:18',
                'updated_at' => '2022-02-05 03:36:18',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'seller_id' => 92,
                'main_category_id' => 2,
                'created_at' => '2022-02-05 03:36:18',
                'updated_at' => '2022-02-05 03:36:18',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'seller_id' => 92,
                'main_category_id' => NULL,
                'created_at' => '2022-02-05 03:36:19',
                'updated_at' => '2022-02-05 03:36:19',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'seller_id' => 93,
                'main_category_id' => 4,
                'created_at' => '2022-02-05 03:39:10',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            54 => 
            array (
                'id' => 55,
                'seller_id' => 93,
                'main_category_id' => NULL,
                'created_at' => '2022-02-05 03:39:10',
                'updated_at' => '2022-02-05 03:39:10',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'seller_id' => 94,
                'main_category_id' => 4,
                'created_at' => '2022-02-05 03:41:27',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            56 => 
            array (
                'id' => 57,
                'seller_id' => 94,
                'main_category_id' => NULL,
                'created_at' => '2022-02-05 03:41:27',
                'updated_at' => '2022-02-05 03:41:27',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-02-06 08:04:05',
                'updated_at' => '2022-02-06 08:04:05',
                'deleted_at' => '2022-02-06 08:04:05',
            ),
            58 => 
            array (
                'id' => 59,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-02-06 08:04:06',
                'updated_at' => '2022-02-06 08:04:07',
                'deleted_at' => '2022-02-06 08:04:07',
            ),
            59 => 
            array (
                'id' => 60,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-02-06 08:04:09',
                'updated_at' => '2022-02-06 08:04:11',
                'deleted_at' => '2022-02-06 08:04:11',
            ),
            60 => 
            array (
                'id' => 61,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-02-06 08:04:15',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            61 => 
            array (
                'id' => 62,
                'seller_id' => 60,
                'main_category_id' => 1,
                'created_at' => '2022-02-20 08:00:28',
                'updated_at' => '2022-02-20 08:00:28',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'seller_id' => 60,
                'main_category_id' => 3,
                'created_at' => '2022-02-20 08:00:30',
                'updated_at' => '2022-02-20 08:00:30',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'seller_id' => 60,
                'main_category_id' => 20,
                'created_at' => '2022-03-05 14:47:49',
                'updated_at' => '2022-03-08 07:03:56',
                'deleted_at' => '2022-03-08 07:03:56',
            ),
            64 => 
            array (
                'id' => 65,
                'seller_id' => 95,
                'main_category_id' => 3,
                'created_at' => '2022-03-08 06:10:59',
                'updated_at' => '2022-03-08 06:10:59',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'seller_id' => 95,
                'main_category_id' => NULL,
                'created_at' => '2022-03-08 06:10:59',
                'updated_at' => '2022-03-08 06:10:59',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'seller_id' => 95,
                'main_category_id' => 21,
                'created_at' => '2022-03-08 06:12:32',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            67 => 
            array (
                'id' => 68,
                'seller_id' => 60,
                'main_category_id' => 21,
                'created_at' => '2022-03-08 07:03:55',
                'updated_at' => '2022-03-08 07:10:10',
                'deleted_at' => '2022-03-08 07:10:10',
            ),
            68 => 
            array (
                'id' => 69,
                'seller_id' => 60,
                'main_category_id' => 20,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => '2022-03-08 07:12:11',
            ),
            69 => 
            array (
                'id' => 70,
                'seller_id' => 60,
                'main_category_id' => 11,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            70 => 
            array (
                'id' => 71,
                'seller_id' => 60,
                'main_category_id' => 10,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => '2022-03-08 07:12:11',
            ),
            71 => 
            array (
                'id' => 72,
                'seller_id' => 60,
                'main_category_id' => 9,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            72 => 
            array (
                'id' => 73,
                'seller_id' => 60,
                'main_category_id' => 8,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            73 => 
            array (
                'id' => 74,
                'seller_id' => 60,
                'main_category_id' => 7,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            74 => 
            array (
                'id' => 75,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            75 => 
            array (
                'id' => 76,
                'seller_id' => 60,
                'main_category_id' => 5,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            76 => 
            array (
                'id' => 77,
                'seller_id' => 60,
                'main_category_id' => 4,
                'created_at' => '2022-03-08 07:11:42',
                'updated_at' => '2022-03-08 07:11:57',
                'deleted_at' => '2022-03-08 07:11:57',
            ),
            77 => 
            array (
                'id' => 78,
                'seller_id' => 60,
                'main_category_id' => 21,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:31',
                'deleted_at' => '2022-03-08 07:12:31',
            ),
            78 => 
            array (
                'id' => 79,
                'seller_id' => 60,
                'main_category_id' => 20,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:31',
                'deleted_at' => '2022-03-08 07:12:31',
            ),
            79 => 
            array (
                'id' => 80,
                'seller_id' => 60,
                'main_category_id' => 11,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:31',
                'deleted_at' => '2022-03-08 07:12:31',
            ),
            80 => 
            array (
                'id' => 81,
                'seller_id' => 60,
                'main_category_id' => 10,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'seller_id' => 60,
                'main_category_id' => 9,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'seller_id' => 60,
                'main_category_id' => 8,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:43',
                'deleted_at' => '2022-03-08 07:12:43',
            ),
            83 => 
            array (
                'id' => 84,
                'seller_id' => 60,
                'main_category_id' => 7,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'seller_id' => 60,
                'main_category_id' => 6,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'seller_id' => 60,
                'main_category_id' => 5,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'seller_id' => 60,
                'main_category_id' => 4,
                'created_at' => '2022-03-08 07:12:11',
                'updated_at' => '2022-03-08 07:12:11',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'seller_id' => 60,
                'main_category_id' => 20,
                'created_at' => '2022-03-08 07:12:43',
                'updated_at' => '2022-03-08 07:12:43',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'seller_id' => 60,
                'main_category_id' => 11,
                'created_at' => '2022-03-08 07:12:43',
                'updated_at' => '2022-03-08 07:12:43',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'seller_id' => 60,
                'main_category_id' => 8,
                'created_at' => '2022-03-08 07:12:43',
                'updated_at' => '2022-03-08 07:12:43',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'seller_id' => 60,
                'main_category_id' => 21,
                'created_at' => '2022-03-08 07:21:04',
                'updated_at' => '2022-03-08 07:21:08',
                'deleted_at' => '2022-03-08 07:21:08',
            ),
            91 => 
            array (
                'id' => 92,
                'seller_id' => 60,
                'main_category_id' => 22,
                'created_at' => '2022-04-07 12:15:15',
                'updated_at' => '2022-04-07 12:15:22',
                'deleted_at' => '2022-04-07 12:15:22',
            ),
            92 => 
            array (
                'id' => 93,
                'seller_id' => 60,
                'main_category_id' => 22,
                'created_at' => '2022-04-07 12:15:22',
                'updated_at' => '2022-05-30 20:03:28',
                'deleted_at' => '2022-05-30 20:03:28',
            ),
            93 => 
            array (
                'id' => 94,
                'seller_id' => 96,
                'main_category_id' => NULL,
                'created_at' => '2022-04-11 19:10:41',
                'updated_at' => '2022-04-11 19:10:41',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'seller_id' => 60,
                'main_category_id' => 22,
                'created_at' => '2022-05-30 20:03:28',
                'updated_at' => '2022-05-30 20:03:29',
                'deleted_at' => '2022-05-30 20:03:29',
            ),
            95 => 
            array (
                'id' => 96,
                'seller_id' => 60,
                'main_category_id' => 22,
                'created_at' => '2022-05-30 20:03:29',
                'updated_at' => '2022-05-30 20:03:29',
                'deleted_at' => '2022-05-30 20:03:29',
            ),
            96 => 
            array (
                'id' => 97,
                'seller_id' => 60,
                'main_category_id' => 23,
                'created_at' => '2022-05-30 20:03:33',
                'updated_at' => '2022-05-30 20:03:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}