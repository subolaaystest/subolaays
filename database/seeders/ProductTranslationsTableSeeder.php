<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_translations')->delete();
        
        \DB::table('product_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'locale' => 'en',
                'name' => 'First Product ',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product ',
                'created_at' => '2021-12-04 07:45:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'locale' => 'ar',
                'name' => 'المنتج الأول ',
                'description' => 'المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول المنتج الأول ',
                'created_at' => '2021-12-04 07:45:07',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'locale' => 'ar',
                'name' => 'aaa',
                'description' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'created_at' => '2021-12-08 02:26:42',
                'updated_at' => '2021-12-08 02:26:42',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'locale' => 'en',
                'name' => 'eee',
                'description' => 'eeeeeeeeee',
                'created_at' => '2021-12-08 02:26:43',
                'updated_at' => '2021-12-08 02:26:43',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 3,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:42:48',
                'updated_at' => '2021-12-08 06:42:48',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:42:48',
                'updated_at' => '2021-12-08 06:42:48',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 4,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:43:47',
                'updated_at' => '2021-12-08 06:43:47',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 4,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:43:47',
                'updated_at' => '2021-12-08 06:43:47',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 5,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:44:21',
                'updated_at' => '2021-12-08 06:44:21',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 5,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:44:21',
                'updated_at' => '2021-12-08 06:44:21',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 6,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:44:39',
                'updated_at' => '2021-12-08 06:44:39',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 6,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:44:39',
                'updated_at' => '2021-12-08 06:44:39',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 7,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:44:56',
                'updated_at' => '2021-12-08 06:44:56',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 7,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:44:56',
                'updated_at' => '2021-12-08 06:44:56',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 8,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:46:22',
                'updated_at' => '2021-12-08 06:46:22',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 8,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:46:22',
                'updated_at' => '2021-12-08 06:46:22',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 9,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:46:37',
                'updated_at' => '2021-12-08 06:46:37',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 9,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:46:37',
                'updated_at' => '2021-12-08 06:46:37',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 10,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:46:59',
                'updated_at' => '2021-12-08 06:46:59',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 10,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:46:59',
                'updated_at' => '2021-12-08 06:46:59',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 11,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:47:34',
                'updated_at' => '2021-12-08 06:47:34',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 11,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:47:34',
                'updated_at' => '2021-12-08 06:47:34',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 12,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:49:51',
                'updated_at' => '2021-12-08 06:49:51',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 12,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:49:51',
                'updated_at' => '2021-12-08 06:49:51',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 13,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 13,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 16,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:49:51',
                'updated_at' => '2021-12-08 06:49:51',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 16,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:49:51',
                'updated_at' => '2021-12-08 06:49:51',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 17,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 17,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 18,
                'locale' => 'ar',
                'name' => 'test',
                'description' => 'details',
                'created_at' => '2021-12-30 02:33:39',
                'updated_at' => '2021-12-30 02:33:39',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 18,
                'locale' => 'en',
                'name' => 'test',
                'description' => 'details',
                'created_at' => '2021-12-30 02:33:40',
                'updated_at' => '2021-12-30 02:33:40',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 19,
                'locale' => 'ar',
                'name' => 'test',
                'description' => 'details',
                'created_at' => '2021-12-30 02:36:26',
                'updated_at' => '2021-12-30 02:36:26',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 19,
                'locale' => 'en',
                'name' => 'test',
                'description' => 'details',
                'created_at' => '2021-12-30 02:36:26',
                'updated_at' => '2021-12-30 02:36:26',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 20,
                'locale' => 'ar',
                'name' => NULL,
                'description' => NULL,
                'created_at' => '2022-01-17 15:54:28',
                'updated_at' => '2022-01-17 15:54:28',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 20,
                'locale' => 'en',
                'name' => NULL,
                'description' => NULL,
                'created_at' => '2022-01-17 15:54:28',
                'updated_at' => '2022-01-17 15:54:28',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 21,
                'locale' => 'ar',
                'name' => '2',
                'description' => '4',
                'created_at' => '2022-01-18 01:52:52',
                'updated_at' => '2022-01-18 01:52:52',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 21,
                'locale' => 'en',
                'name' => 'Flafel',
                'description' => '4',
                'created_at' => '2022-01-18 01:52:52',
                'updated_at' => '2022-01-18 01:52:52',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 14,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 14,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 15,
                'locale' => 'ar',
                'name' => 'المنتج الاول',
                'description' => 'المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول المنتج الاول',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 15,
                'locale' => 'en',
                'name' => 'First Product',
                'description' => 'First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product First Product',
                'created_at' => '2021-12-08 06:50:53',
                'updated_at' => '2021-12-08 06:50:53',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 22,
                'locale' => 'ar',
                'name' => 'سيبيسب',
                'description' => 'سيبسيب',
                'created_at' => '2022-01-24 16:37:33',
                'updated_at' => '2022-01-24 16:37:33',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 22,
                'locale' => 'en',
                'name' => 'سيبسيب',
                'description' => 'سيبسيب',
                'created_at' => '2022-01-24 16:37:33',
                'updated_at' => '2022-01-24 16:37:33',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 23,
                'locale' => 'ar',
                'name' => '1212',
                'description' => '123123',
                'created_at' => '2022-01-24 16:43:51',
                'updated_at' => '2022-01-24 16:43:51',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 23,
                'locale' => 'en',
                'name' => '12312321',
                'description' => '123123',
                'created_at' => '2022-01-24 16:43:51',
                'updated_at' => '2022-01-24 16:43:51',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 24,
                'locale' => 'ar',
                'name' => '23324234234',
                'description' => '234234234',
                'created_at' => '2022-01-24 16:46:31',
                'updated_at' => '2022-01-24 16:46:31',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 24,
                'locale' => 'en',
                'name' => '234234',
                'description' => '23423423432',
                'created_at' => '2022-01-24 16:46:31',
                'updated_at' => '2022-01-24 16:46:31',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 25,
                'locale' => 'ar',
                'name' => NULL,
                'description' => NULL,
                'created_at' => '2022-02-12 08:01:30',
                'updated_at' => '2022-02-12 08:01:30',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 25,
                'locale' => 'en',
                'name' => NULL,
                'description' => NULL,
                'created_at' => '2022-02-12 08:01:30',
                'updated_at' => '2022-02-12 08:01:30',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 25,
                'locale' => 'ar',
                'name' => 'nnnnnnnnnaaaaaaa',
                'description' => 'nnnnnnnnnnnnnnnnnnnnaaaaaaaaaaaaaaaaaa',
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 25,
                'locale' => 'en',
                'name' => 'nnnnnnnnnnneeeeeee',
                'description' => 'nnnnnnnnnnnnnnnnnnnnnnnnneeeeeeeeeeee',
                'created_at' => '2022-02-20 09:36:45',
                'updated_at' => '2022-02-20 09:36:45',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 26,
                'locale' => 'ar',
                'name' => 'name ar22',
                'description' => 'details ar22',
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:58:24',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 26,
                'locale' => 'en',
                'name' => 'name en22',
                'description' => 'details en22',
                'created_at' => '2022-02-20 09:45:31',
                'updated_at' => '2022-02-20 09:58:24',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 27,
                'locale' => 'ar',
                'name' => 'فواكه نوع رقم #1',
                'description' => 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة',
                'created_at' => '2022-03-27 17:01:09',
                'updated_at' => '2022-03-27 17:01:09',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 27,
                'locale' => 'en',
                'name' => 'فواكه نوع رقم #1',
                'description' => 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة',
                'created_at' => '2022-03-27 17:01:09',
                'updated_at' => '2022-03-27 17:01:09',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 28,
                'locale' => 'ar',
                'name' => 'فواكه نوع رقم #2',
                'description' => 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة',
                'created_at' => '2022-03-27 17:02:42',
                'updated_at' => '2022-03-27 17:02:42',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 28,
                'locale' => 'en',
                'name' => 'فواكه نوع رقم #2',
                'description' => 'فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة فواكه لذيذة',
                'created_at' => '2022-03-27 17:02:42',
                'updated_at' => '2022-03-27 17:02:42',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 29,
                'locale' => 'ar',
                'name' => 'فواكه نوع رقم #3',
                'description' => 'فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة',
                'created_at' => '2022-03-27 17:07:26',
                'updated_at' => '2022-03-27 17:07:26',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 29,
                'locale' => 'en',
                'name' => 'فواكه نوع رقم #3',
                'description' => 'فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة فواكه طازجة',
                'created_at' => '2022-03-27 17:07:26',
                'updated_at' => '2022-03-27 17:07:26',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 30,
                'locale' => 'ar',
                'name' => 'فاكهة الأناناس',
                'description' => 'فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس',
                'created_at' => '2022-03-27 19:56:07',
                'updated_at' => '2022-03-27 19:56:07',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 30,
                'locale' => 'en',
                'name' => 'فاكهة الأناناس',
                'description' => 'فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس فاكهة الأناناس',
                'created_at' => '2022-03-27 19:56:07',
                'updated_at' => '2022-03-27 19:56:07',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 31,
                'locale' => 'ar',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:11:49',
                'updated_at' => '2022-03-27 20:11:49',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 31,
                'locale' => 'en',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:11:49',
                'updated_at' => '2022-03-27 20:11:49',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 32,
                'locale' => 'ar',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:12:58',
                'updated_at' => '2022-03-27 20:12:58',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 32,
                'locale' => 'en',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:12:58',
                'updated_at' => '2022-03-27 20:12:58',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 33,
                'locale' => 'ar',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:14:38',
                'updated_at' => '2022-03-27 20:14:38',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'product_id' => 33,
                'locale' => 'en',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:14:38',
                'updated_at' => '2022-03-27 20:14:38',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'product_id' => 34,
                'locale' => 'ar',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:15:39',
                'updated_at' => '2022-03-27 20:15:39',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'product_id' => 34,
                'locale' => 'en',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:15:39',
                'updated_at' => '2022-03-27 20:15:39',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'product_id' => 35,
                'locale' => 'ar',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:18:21',
                'updated_at' => '2022-03-27 20:18:21',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'product_id' => 35,
                'locale' => 'en',
                'name' => 'مخبوزات لزيزة',
                'description' => 'مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة مخبوزات لزيزة',
                'created_at' => '2022-03-27 20:18:21',
                'updated_at' => '2022-03-27 20:18:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}