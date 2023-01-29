<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_category_translations')->delete();
        
        \DB::table('sub_category_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sub_category_id' => 3,
                'locale' => 'en',
                'name' => 'فواكه طازجة ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'sub_category_id' => 3,
                'locale' => 'ar',
                'name' => 'فواكه طازجة ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'sub_category_id' => 4,
                'locale' => 'en',
                'name' => 'فواكه مجففة',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'sub_category_id' => 4,
                'locale' => 'ar',
                'name' => 'فواكه مجففة',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'sub_category_id' => 5,
                'locale' => 'en',
                'name' => 'خبز أبيض',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'sub_category_id' => 5,
                'locale' => 'ar',
                'name' => 'خبز أبيض',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'sub_category_id' => 6,
                'locale' => 'en',
                'name' => 'خبز قمح',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'sub_category_id' => 6,
                'locale' => 'ar',
                'name' => 'خبز قمح',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'sub_category_id' => 7,
                'locale' => 'en',
                'name' => 'دجاج متبل',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'sub_category_id' => 7,
                'locale' => 'ar',
                'name' => 'دجاج متبل',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'sub_category_id' => 8,
                'locale' => 'en',
                'name' => 'دجاج مقطع',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'sub_category_id' => 8,
                'locale' => 'ar',
                'name' => 'دجاج مقطع',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'sub_category_id' => 9,
                'locale' => 'en',
                'name' => 'حلويات أعياد الميلاد',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'sub_category_id' => 9,
                'locale' => 'ar',
                'name' => 'حلويات أعياد الميلاد',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'sub_category_id' => 10,
                'locale' => 'en',
                'name' => 'كيكة فواكه ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'sub_category_id' => 10,
                'locale' => 'ar',
                'name' => 'كيكة فواكه ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'sub_category_id' => 11,
                'locale' => 'en',
                'name' => 'معجنات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'sub_category_id' => 11,
                'locale' => 'ar',
                'name' => 'معجنات',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'sub_category_id' => 12,
                'locale' => 'en',
                'name' => 'ساندويتشات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'sub_category_id' => 12,
                'locale' => 'ar',
                'name' => 'ساندويتشات',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'sub_category_id' => 13,
                'locale' => 'en',
                'name' => 'بقوليات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'sub_category_id' => 13,
                'locale' => 'ar',
                'name' => 'بقوليات',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'sub_category_id' => 14,
                'locale' => 'en',
                'name' => 'سكاكر',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'sub_category_id' => 14,
                'locale' => 'ar',
                'name' => 'سكاكر',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'sub_category_id' => 15,
                'locale' => 'en',
                'name' => 'مشهيات طعام',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'sub_category_id' => 15,
                'locale' => 'ar',
                'name' => 'مشهيات طعام',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'sub_category_id' => 16,
                'locale' => 'en',
                'name' => 'بقوليات معلبة',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'sub_category_id' => 16,
                'locale' => 'ar',
                'name' => 'بقوليات معلبة',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'sub_category_id' => 17,
                'locale' => 'en',
                'name' => 'لحوم حمراء',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'sub_category_id' => 17,
                'locale' => 'ar',
                'name' => 'لحوم حمراء',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'sub_category_id' => 18,
                'locale' => 'en',
                'name' => 'لحوم بيضاء',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'sub_category_id' => 18,
                'locale' => 'ar',
                'name' => 'لحوم بيضاء',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'sub_category_id' => 19,
                'locale' => 'en',
                'name' => 'شامبوهات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'sub_category_id' => 19,
                'locale' => 'ar',
                'name' => 'شامبوهات',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'sub_category_id' => 20,
                'locale' => 'en',
                'name' => 'إكسسوارات مواليد ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'sub_category_id' => 20,
                'locale' => 'ar',
                'name' => 'إكسسوارات مواليد ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'sub_category_id' => 21,
                'locale' => 'en',
                'name' => 'عطور',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'sub_category_id' => 21,
                'locale' => 'ar',
                'name' => 'عطور',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'sub_category_id' => 22,
                'locale' => 'en',
                'name' => 'مرطبات وكريمات',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'sub_category_id' => 22,
                'locale' => 'ar',
                'name' => 'مرطبات وكريمات',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'sub_category_id' => 23,
                'locale' => 'en',
                'name' => 'ألبان طازجة',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'sub_category_id' => 23,
                'locale' => 'ar',
                'name' => 'ألبان طازجة',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'sub_category_id' => 24,
                'locale' => 'en',
                'name' => 'أجبان ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'sub_category_id' => 24,
                'locale' => 'ar',
                'name' => 'أجبان ',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}