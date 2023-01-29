<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_translations')->delete();
        
        \DB::table('country_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'locale' => 'en',
                'name' => 'Afghanistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 2,
                'locale' => 'en',
                'name' => 'Albania',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 3,
                'locale' => 'en',
                'name' => 'Algeria',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 4,
                'locale' => 'en',
                'name' => 'American Samoa',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 5,
                'locale' => 'en',
                'name' => 'Andorra',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 6,
                'locale' => 'en',
                'name' => 'Angola',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 7,
                'locale' => 'en',
                'name' => 'Anguilla',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 8,
                'locale' => 'en',
                'name' => 'Antarctica',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 9,
                'locale' => 'en',
                'name' => 'Antigua and Barbuda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 10,
                'locale' => 'en',
                'name' => 'Argentina',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 11,
                'locale' => 'en',
                'name' => 'Armenia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'country_id' => 13,
                'locale' => 'en',
                'name' => 'Australia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'country_id' => 14,
                'locale' => 'en',
                'name' => 'Austria',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'country_id' => 15,
                'locale' => 'en',
                'name' => 'Azerbaijan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'country_id' => 16,
                'locale' => 'en',
                'name' => 'Bahamas',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'country_id' => 17,
                'locale' => 'en',
                'name' => 'Bahrain',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'country_id' => 18,
                'locale' => 'en',
                'name' => 'Bangladesh',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'country_id' => 19,
                'locale' => 'en',
                'name' => 'Barbados',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'country_id' => 20,
                'locale' => 'en',
                'name' => 'Belarus',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'country_id' => 21,
                'locale' => 'en',
                'name' => 'Belgium',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'country_id' => 22,
                'locale' => 'en',
                'name' => 'Belize',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'country_id' => 23,
                'locale' => 'en',
                'name' => 'Benin',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'country_id' => 24,
                'locale' => 'en',
                'name' => 'Bermuda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'country_id' => 25,
                'locale' => 'en',
                'name' => 'Bhutan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'country_id' => 26,
                'locale' => 'en',
                'name' => 'Bolivia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'country_id' => 27,
                'locale' => 'en',
                'name' => 'Bosnia and Herzegovina',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'country_id' => 28,
                'locale' => 'en',
                'name' => 'Botswana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'country_id' => 29,
                'locale' => 'en',
                'name' => 'Bouvet Island',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'country_id' => 30,
                'locale' => 'en',
                'name' => 'Brazil',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'country_id' => 31,
                'locale' => 'en',
                'name' => 'British Indian Ocean Territory',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'country_id' => 32,
                'locale' => 'en',
                'name' => 'Brunei Darussalam',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'country_id' => 33,
                'locale' => 'en',
                'name' => 'Bulgaria',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'country_id' => 34,
                'locale' => 'en',
                'name' => 'Burkina Faso',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'country_id' => 35,
                'locale' => 'en',
                'name' => 'Burundi',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'country_id' => 36,
                'locale' => 'en',
                'name' => 'Cambodia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'country_id' => 37,
                'locale' => 'en',
                'name' => 'Cameroon',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'country_id' => 38,
                'locale' => 'en',
                'name' => 'Canada',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'country_id' => 39,
                'locale' => 'en',
                'name' => 'Cape Verde',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'country_id' => 40,
                'locale' => 'en',
                'name' => 'Cayman Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'country_id' => 41,
                'locale' => 'en',
                'name' => 'Central African Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'country_id' => 42,
                'locale' => 'en',
                'name' => 'Chad',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'country_id' => 43,
                'locale' => 'en',
                'name' => 'Chile',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'country_id' => 44,
                'locale' => 'en',
                'name' => 'China',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'country_id' => 45,
                'locale' => 'en',
                'name' => 'Christmas Island',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'country_id' => 46,
                'locale' => 'en',
            'name' => 'Cocos (Keeling) Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'country_id' => 47,
                'locale' => 'en',
                'name' => 'Colombia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'country_id' => 48,
                'locale' => 'en',
                'name' => 'Comoros',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'country_id' => 49,
                'locale' => 'en',
                'name' => 'Congo',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'country_id' => 50,
                'locale' => 'en',
                'name' => 'Cook Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'country_id' => 51,
                'locale' => 'en',
                'name' => 'Costa Rica',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'country_id' => 52,
                'locale' => 'en',
                'name' => 'Cote D\'Ivoire',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'country_id' => 53,
                'locale' => 'en',
                'name' => 'Croatia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'country_id' => 54,
                'locale' => 'en',
                'name' => 'Cuba',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'country_id' => 55,
                'locale' => 'en',
                'name' => 'Cyprus',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 56,
                'country_id' => 56,
                'locale' => 'en',
                'name' => 'Czech Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 57,
                'country_id' => 57,
                'locale' => 'en',
                'name' => 'Denmark',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 58,
                'country_id' => 58,
                'locale' => 'en',
                'name' => 'Djibouti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 59,
                'country_id' => 59,
                'locale' => 'en',
                'name' => 'Dominica',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 60,
                'country_id' => 60,
                'locale' => 'en',
                'name' => 'Dominican Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 61,
                'country_id' => 61,
                'locale' => 'en',
                'name' => 'East Timor',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 62,
                'country_id' => 62,
                'locale' => 'en',
                'name' => 'Ecuador',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 63,
                'country_id' => 63,
                'locale' => 'en',
                'name' => 'Egypt',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'country_id' => 64,
                'locale' => 'en',
                'name' => 'El Salvador',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'country_id' => 65,
                'locale' => 'en',
                'name' => 'Equatorial Guinea',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'country_id' => 66,
                'locale' => 'en',
                'name' => 'Eritrea',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'country_id' => 67,
                'locale' => 'en',
                'name' => 'Estonia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'country_id' => 68,
                'locale' => 'en',
                'name' => 'Ethiopia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 69,
                'country_id' => 69,
                'locale' => 'en',
            'name' => 'Falkland Islands (Malvinas)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 70,
                'country_id' => 70,
                'locale' => 'en',
                'name' => 'Faroe Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 71,
                'country_id' => 71,
                'locale' => 'en',
                'name' => 'Fiji',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 72,
                'country_id' => 72,
                'locale' => 'en',
                'name' => 'Finland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 74,
                'country_id' => 74,
                'locale' => 'en',
                'name' => 'France, Metropolitan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 75,
                'country_id' => 75,
                'locale' => 'en',
                'name' => 'French Guiana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 76,
                'country_id' => 76,
                'locale' => 'en',
                'name' => 'French Polynesia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 77,
                'country_id' => 77,
                'locale' => 'en',
                'name' => 'French Southern Territories',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 78,
                'country_id' => 78,
                'locale' => 'en',
                'name' => 'Gabon',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 79,
                'country_id' => 79,
                'locale' => 'en',
                'name' => 'Gambia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 80,
                'country_id' => 80,
                'locale' => 'en',
                'name' => 'Georgia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 81,
                'country_id' => 81,
                'locale' => 'en',
                'name' => 'Germany',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 82,
                'country_id' => 82,
                'locale' => 'en',
                'name' => 'Ghana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 83,
                'country_id' => 83,
                'locale' => 'en',
                'name' => 'Gibraltar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 84,
                'country_id' => 84,
                'locale' => 'en',
                'name' => 'Greece',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 85,
                'country_id' => 85,
                'locale' => 'en',
                'name' => 'Greenland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 86,
                'country_id' => 86,
                'locale' => 'en',
                'name' => 'Grenada',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 87,
                'country_id' => 87,
                'locale' => 'en',
                'name' => 'Guadeloupe',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 88,
                'country_id' => 88,
                'locale' => 'en',
                'name' => 'Guam',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 89,
                'country_id' => 89,
                'locale' => 'en',
                'name' => 'Guatemala',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 90,
                'country_id' => 90,
                'locale' => 'en',
                'name' => 'Guinea',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 91,
                'country_id' => 91,
                'locale' => 'en',
                'name' => 'Guinea-Bissau',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 92,
                'country_id' => 92,
                'locale' => 'en',
                'name' => 'Guyana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 93,
                'country_id' => 93,
                'locale' => 'en',
                'name' => 'Haiti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 94,
                'country_id' => 94,
                'locale' => 'en',
                'name' => 'Heard and Mc Donald Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 95,
                'country_id' => 95,
                'locale' => 'en',
                'name' => 'Honduras',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 96,
                'country_id' => 96,
                'locale' => 'en',
                'name' => 'Hong Kong',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 97,
                'country_id' => 97,
                'locale' => 'en',
                'name' => 'Hungary',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 98,
                'country_id' => 98,
                'locale' => 'en',
                'name' => 'Iceland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 99,
                'country_id' => 99,
                'locale' => 'en',
                'name' => 'India',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 100,
                'country_id' => 100,
                'locale' => 'en',
                'name' => 'Indonesia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 101,
                'country_id' => 101,
                'locale' => 'en',
            'name' => 'Iran (Islamic Republic of)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 102,
                'country_id' => 102,
                'locale' => 'en',
                'name' => 'Iraq',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 103,
                'country_id' => 103,
                'locale' => 'en',
                'name' => 'Ireland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 104,
                'country_id' => 104,
                'locale' => 'en',
                'name' => 'Israel',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 105,
                'country_id' => 105,
                'locale' => 'en',
                'name' => 'Italy',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 106,
                'country_id' => 106,
                'locale' => 'en',
                'name' => 'Jamaica',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 107,
                'country_id' => 107,
                'locale' => 'en',
                'name' => 'Japan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 108,
                'country_id' => 108,
                'locale' => 'en',
                'name' => 'Jordan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 109,
                'country_id' => 109,
                'locale' => 'en',
                'name' => 'Kazakhstan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 110,
                'country_id' => 110,
                'locale' => 'en',
                'name' => 'Kenya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 111,
                'country_id' => 111,
                'locale' => 'en',
                'name' => 'Kiribati',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 112,
                'country_id' => 112,
                'locale' => 'en',
                'name' => 'North Korea',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 113,
                'country_id' => 113,
                'locale' => 'en',
                'name' => 'South Korea',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 114,
                'country_id' => 114,
                'locale' => 'en',
                'name' => 'Kuwait',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 115,
                'country_id' => 115,
                'locale' => 'en',
                'name' => 'Kyrgyzstan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 116,
                'country_id' => 116,
                'locale' => 'en',
                'name' => 'Lao People\'s Democratic Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 117,
                'country_id' => 117,
                'locale' => 'en',
                'name' => 'Latvia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 118,
                'country_id' => 118,
                'locale' => 'en',
                'name' => 'Lebanon',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 119,
                'country_id' => 119,
                'locale' => 'en',
                'name' => 'Lesotho',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 120,
                'country_id' => 120,
                'locale' => 'en',
                'name' => 'Liberia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 121,
                'country_id' => 121,
                'locale' => 'en',
                'name' => 'Libyan Arab Jamahiriya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 122,
                'country_id' => 122,
                'locale' => 'en',
                'name' => 'Liechtenstein',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 123,
                'country_id' => 123,
                'locale' => 'en',
                'name' => 'Lithuania',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 124,
                'country_id' => 124,
                'locale' => 'en',
                'name' => 'Luxembourg',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 125,
                'country_id' => 125,
                'locale' => 'en',
                'name' => 'Macau',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 126,
                'country_id' => 126,
                'locale' => 'en',
                'name' => 'FYROM',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 127,
                'country_id' => 127,
                'locale' => 'en',
                'name' => 'Madagascar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 128,
                'country_id' => 128,
                'locale' => 'en',
                'name' => 'Malawi',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 129,
                'country_id' => 129,
                'locale' => 'en',
                'name' => 'Malaysia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 130,
                'country_id' => 130,
                'locale' => 'en',
                'name' => 'Maldives',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 131,
                'country_id' => 131,
                'locale' => 'en',
                'name' => 'Mali',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 132,
                'country_id' => 132,
                'locale' => 'en',
                'name' => 'Malta',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 133,
                'country_id' => 133,
                'locale' => 'en',
                'name' => 'Marshall Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 134,
                'country_id' => 134,
                'locale' => 'en',
                'name' => 'Martinique',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 135,
                'country_id' => 135,
                'locale' => 'en',
                'name' => 'Mauritania',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 136,
                'country_id' => 136,
                'locale' => 'en',
                'name' => 'Mauritius',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 137,
                'country_id' => 137,
                'locale' => 'en',
                'name' => 'Mayotte',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 138,
                'country_id' => 138,
                'locale' => 'en',
                'name' => 'Mexico',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 139,
                'country_id' => 139,
                'locale' => 'en',
                'name' => 'Micronesia, Federated States of',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 140,
                'country_id' => 140,
                'locale' => 'en',
                'name' => 'Moldova, Republic of',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 141,
                'country_id' => 141,
                'locale' => 'en',
                'name' => 'Monaco',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 142,
                'country_id' => 142,
                'locale' => 'en',
                'name' => 'Mongolia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 143,
                'country_id' => 143,
                'locale' => 'en',
                'name' => 'Montserrat',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 144,
                'country_id' => 144,
                'locale' => 'en',
                'name' => 'Morocco',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 145,
                'country_id' => 145,
                'locale' => 'en',
                'name' => 'Mozambique',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 146,
                'country_id' => 146,
                'locale' => 'en',
                'name' => 'Myanmar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 147,
                'country_id' => 147,
                'locale' => 'en',
                'name' => 'Namibia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 148,
                'country_id' => 148,
                'locale' => 'en',
                'name' => 'Nauru',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 149,
                'country_id' => 149,
                'locale' => 'en',
                'name' => 'Nepal',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 150,
                'country_id' => 150,
                'locale' => 'en',
                'name' => 'Netherlands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 151,
                'country_id' => 151,
                'locale' => 'en',
                'name' => 'Netherlands Antilles',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 152,
                'country_id' => 152,
                'locale' => 'en',
                'name' => 'New Caledonia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 153,
                'country_id' => 153,
                'locale' => 'en',
                'name' => 'New Zealand',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 154,
                'country_id' => 154,
                'locale' => 'en',
                'name' => 'Nicaragua',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 155,
                'country_id' => 155,
                'locale' => 'en',
                'name' => 'Niger',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 156,
                'country_id' => 156,
                'locale' => 'en',
                'name' => 'Nigeria',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 157,
                'country_id' => 157,
                'locale' => 'en',
                'name' => 'Niue',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 158,
                'country_id' => 158,
                'locale' => 'en',
                'name' => 'Norfolk Island',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 159,
                'country_id' => 159,
                'locale' => 'en',
                'name' => 'Northern Mariana Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 160,
                'country_id' => 160,
                'locale' => 'en',
                'name' => 'Norway',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 161,
                'country_id' => 161,
                'locale' => 'en',
                'name' => 'Oman',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 162,
                'country_id' => 162,
                'locale' => 'en',
                'name' => 'Pakistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 163,
                'country_id' => 163,
                'locale' => 'en',
                'name' => 'Palau',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 164,
                'country_id' => 164,
                'locale' => 'en',
                'name' => 'Panama',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 165,
                'country_id' => 165,
                'locale' => 'en',
                'name' => 'Papua New Guinea',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 166,
                'country_id' => 166,
                'locale' => 'en',
                'name' => 'Paraguay',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 167,
                'country_id' => 167,
                'locale' => 'en',
                'name' => 'Peru',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 168,
                'country_id' => 168,
                'locale' => 'en',
                'name' => 'Philippines',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 169,
                'country_id' => 169,
                'locale' => 'en',
                'name' => 'Pitcairn',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 170,
                'country_id' => 170,
                'locale' => 'en',
                'name' => 'Poland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 171,
                'country_id' => 171,
                'locale' => 'en',
                'name' => 'Portugal',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 172,
                'country_id' => 172,
                'locale' => 'en',
                'name' => 'Puerto Rico',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 173,
                'country_id' => 173,
                'locale' => 'en',
                'name' => 'Qatar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 174,
                'country_id' => 174,
                'locale' => 'en',
                'name' => 'Reunion',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 175,
                'country_id' => 175,
                'locale' => 'en',
                'name' => 'Romania',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 176,
                'country_id' => 176,
                'locale' => 'en',
                'name' => 'Russian Federation',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 177,
                'country_id' => 177,
                'locale' => 'en',
                'name' => 'Rwanda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 178,
                'country_id' => 178,
                'locale' => 'en',
                'name' => 'Saint Kitts and Nevis',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 179,
                'country_id' => 179,
                'locale' => 'en',
                'name' => 'Saint Lucia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 180,
                'country_id' => 180,
                'locale' => 'en',
                'name' => 'Saint Vincent and the Grenadines',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 181,
                'country_id' => 181,
                'locale' => 'en',
                'name' => 'Samoa',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 182,
                'country_id' => 182,
                'locale' => 'en',
                'name' => 'San Marino',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 183,
                'country_id' => 183,
                'locale' => 'en',
                'name' => 'Sao Tome and Principe',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 184,
                'country_id' => 184,
                'locale' => 'en',
                'name' => 'Saudi Arabia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 185,
                'country_id' => 185,
                'locale' => 'en',
                'name' => 'Senegal',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 186,
                'country_id' => 186,
                'locale' => 'en',
                'name' => 'Seychelles',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 187,
                'country_id' => 187,
                'locale' => 'en',
                'name' => 'Sierra Leone',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 188,
                'country_id' => 188,
                'locale' => 'en',
                'name' => 'Singapore',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 189,
                'country_id' => 189,
                'locale' => 'en',
                'name' => 'Slovak Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 190,
                'country_id' => 190,
                'locale' => 'en',
                'name' => 'Slovenia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 191,
                'country_id' => 191,
                'locale' => 'en',
                'name' => 'Solomon Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 192,
                'country_id' => 192,
                'locale' => 'en',
                'name' => 'Somalia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 193,
                'country_id' => 193,
                'locale' => 'en',
                'name' => 'South Africa',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 194,
                'country_id' => 194,
                'locale' => 'en',
                'name' => 'South Georgia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 17:52:50',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 195,
                'country_id' => 195,
                'locale' => 'en',
                'name' => 'Spain',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 196,
                'country_id' => 196,
                'locale' => 'en',
                'name' => 'Sri Lanka',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 197,
                'country_id' => 197,
                'locale' => 'en',
                'name' => 'St. Helena',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 198,
                'country_id' => 198,
                'locale' => 'en',
                'name' => 'St. Pierre and Miquelon',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 199,
                'country_id' => 199,
                'locale' => 'en',
                'name' => 'Sudan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 200,
                'country_id' => 200,
                'locale' => 'en',
                'name' => 'Suriname',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 201,
                'country_id' => 201,
                'locale' => 'en',
                'name' => 'Svalbard and Jan Mayen Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 202,
                'country_id' => 202,
                'locale' => 'en',
                'name' => 'Swaziland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 203,
                'country_id' => 203,
                'locale' => 'en',
                'name' => 'Sweden',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 204,
                'country_id' => 204,
                'locale' => 'en',
                'name' => 'Switzerland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 205,
                'country_id' => 205,
                'locale' => 'en',
                'name' => 'Syrian Arab Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 206,
                'country_id' => 206,
                'locale' => 'en',
                'name' => 'Taiwan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 207,
                'country_id' => 207,
                'locale' => 'en',
                'name' => 'Tajikistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 208,
                'country_id' => 208,
                'locale' => 'en',
                'name' => 'Tanzania, United Republic of',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 209,
                'country_id' => 209,
                'locale' => 'en',
                'name' => 'Thailand',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 210,
                'country_id' => 210,
                'locale' => 'en',
                'name' => 'Togo',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 211,
                'country_id' => 211,
                'locale' => 'en',
                'name' => 'Tokelau',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 212,
                'country_id' => 212,
                'locale' => 'en',
                'name' => 'Tonga',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 213,
                'country_id' => 213,
                'locale' => 'en',
                'name' => 'Trinidad and Tobago',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 214,
                'country_id' => 214,
                'locale' => 'en',
                'name' => 'Tunisia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 215,
                'country_id' => 215,
                'locale' => 'en',
                'name' => 'Turkey',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 216,
                'country_id' => 216,
                'locale' => 'en',
                'name' => 'Turkmenistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 217,
                'country_id' => 217,
                'locale' => 'en',
                'name' => 'Turks and Caicos Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 218,
                'country_id' => 218,
                'locale' => 'en',
                'name' => 'Tuvalu',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 219,
                'country_id' => 219,
                'locale' => 'en',
                'name' => 'Uganda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 220,
                'country_id' => 220,
                'locale' => 'en',
                'name' => 'Ukraine',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 221,
                'country_id' => 221,
                'locale' => 'en',
                'name' => 'United Arab Emirates',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 222,
                'country_id' => 222,
                'locale' => 'en',
                'name' => 'United Kingdom',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 223,
                'country_id' => 223,
                'locale' => 'en',
                'name' => 'United States',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 224,
                'country_id' => 224,
                'locale' => 'en',
                'name' => 'United States Minor Outlying Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 225,
                'country_id' => 225,
                'locale' => 'en',
                'name' => 'Uruguay',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 226,
                'country_id' => 226,
                'locale' => 'en',
                'name' => 'Uzbekistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 227,
                'country_id' => 227,
                'locale' => 'en',
                'name' => 'Vanuatu',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 228,
                'country_id' => 228,
                'locale' => 'en',
            'name' => 'Vatican City State (Holy See)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 229,
                'country_id' => 229,
                'locale' => 'en',
                'name' => 'Venezuela',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 230,
                'country_id' => 230,
                'locale' => 'en',
                'name' => 'Viet Nam',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 231,
                'country_id' => 231,
                'locale' => 'en',
            'name' => 'Virgin Islands (British)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 232,
                'country_id' => 232,
                'locale' => 'en',
            'name' => 'Virgin Islands (U.S.)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 233,
                'country_id' => 233,
                'locale' => 'en',
                'name' => 'Wallis and Futuna Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 234,
                'country_id' => 234,
                'locale' => 'en',
                'name' => 'Western Sahara',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 235,
                'country_id' => 235,
                'locale' => 'en',
                'name' => 'Yemen',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 237,
                'country_id' => 237,
                'locale' => 'en',
                'name' => 'Democratic Republic of Congo',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 238,
                'country_id' => 238,
                'locale' => 'en',
                'name' => 'Zambia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 239,
                'country_id' => 239,
                'locale' => 'en',
                'name' => 'Zimbabwe',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 242,
                'country_id' => 242,
                'locale' => 'en',
                'name' => 'Montenegro',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 243,
                'country_id' => 243,
                'locale' => 'en',
                'name' => 'Serbia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 244,
                'country_id' => 244,
                'locale' => 'en',
                'name' => 'Aaland Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 245,
                'country_id' => 245,
                'locale' => 'en',
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 246,
                'country_id' => 246,
                'locale' => 'en',
                'name' => 'Curacao',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 247,
                'country_id' => 247,
                'locale' => 'en',
                'name' => 'Palestinian Territory, Occupied',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 248,
                'country_id' => 248,
                'locale' => 'en',
                'name' => 'South Sudan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 249,
                'country_id' => 249,
                'locale' => 'en',
                'name' => 'St. Barthelemy',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 250,
                'country_id' => 250,
                'locale' => 'en',
            'name' => 'St. Martin (French part)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 251,
                'country_id' => 251,
                'locale' => 'en',
                'name' => 'Canary Islands',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 252,
                'country_id' => 252,
                'locale' => 'en',
            'name' => 'Ascension Island (British)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 253,
                'country_id' => 253,
                'locale' => 'en',
                'name' => 'Kosovo',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-05 02:09:41',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 254,
                'country_id' => 254,
                'locale' => 'en',
                'name' => 'Isle of Man',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 255,
                'country_id' => 255,
                'locale' => 'en',
                'name' => 'Tristan da Cunha',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 256,
                'country_id' => 256,
                'locale' => 'en',
                'name' => 'Guernsey',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 257,
                'country_id' => 257,
                'locale' => 'en',
                'name' => 'Jersey',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 638,
                'country_id' => 194,
                'locale' => 'ar',
                'name' => 'جورجيا الجنوبية',
                'created_at' => '2021-05-04 17:52:50',
                'updated_at' => '2021-05-04 17:52:50',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 750,
                'country_id' => 253,
                'locale' => 'ar',
                'name' => 'كوسوفو',
                'created_at' => '2021-05-05 02:09:41',
                'updated_at' => '2021-05-05 02:09:41',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 258,
                'country_id' => 1,
                'locale' => 'ar',
                'name' => 'أفغانستان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:20:23',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 259,
                'country_id' => 1,
                'locale' => 'tr',
                'name' => 'Afganistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:20:23',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 260,
                'country_id' => 2,
                'locale' => 'ar',
                'name' => 'ألبانيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:21:17',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 261,
                'country_id' => 2,
                'locale' => 'tr',
                'name' => 'Arnavutluk',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:21:17',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 262,
                'country_id' => 3,
                'locale' => 'ar',
                'name' => 'الجزائر',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:22:09',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 263,
                'country_id' => 3,
                'locale' => 'tr',
                'name' => 'Cezayir',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:22:09',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 264,
                'country_id' => 4,
                'locale' => 'ar',
                'name' => 'ساموا الأمريكية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:22:54',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 265,
                'country_id' => 4,
                'locale' => 'tr',
                'name' => 'Amerikan Samoası',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:22:54',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 266,
                'country_id' => 5,
                'locale' => 'ar',
                'name' => 'أندورا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:23:46',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 267,
                'country_id' => 5,
                'locale' => 'tr',
                'name' => 'Andorra',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 268,
                'country_id' => 6,
                'locale' => 'ar',
                'name' => 'أنغولا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:24:55',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 269,
                'country_id' => 6,
                'locale' => 'tr',
                'name' => 'Angola',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 270,
                'country_id' => 7,
                'locale' => 'ar',
                'name' => 'أنغيلا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:25:41',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 271,
                'country_id' => 7,
                'locale' => 'tr',
                'name' => 'Anguilla',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 272,
                'country_id' => 8,
                'locale' => 'ar',
                'name' => 'أنتاركتيكا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:26:23',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 273,
                'country_id' => 8,
                'locale' => 'tr',
                'name' => 'Antarktika',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:26:23',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 274,
                'country_id' => 9,
                'locale' => 'ar',
                'name' => 'أنتيغوا وبربودا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:27:06',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 275,
                'country_id' => 9,
                'locale' => 'tr',
                'name' => 'Antigua ve Barbuda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:27:06',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 276,
                'country_id' => 10,
                'locale' => 'ar',
                'name' => 'الأرجنتين',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:27:56',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 277,
                'country_id' => 10,
                'locale' => 'tr',
                'name' => 'Arjantin',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:27:56',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 278,
                'country_id' => 11,
                'locale' => 'ar',
                'name' => 'أرمينيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:29:50',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 279,
                'country_id' => 11,
                'locale' => 'tr',
                'name' => 'Ermenistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:29:50',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 280,
                'country_id' => 13,
                'locale' => 'ar',
                'name' => 'أستراليا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:30:33',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 281,
                'country_id' => 13,
                'locale' => 'tr',
                'name' => 'Avustralya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:30:33',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 282,
                'country_id' => 14,
                'locale' => 'ar',
                'name' => 'النمسا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:31:17',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 283,
                'country_id' => 14,
                'locale' => 'tr',
                'name' => 'Avusturya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:31:17',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 284,
                'country_id' => 15,
                'locale' => 'ar',
                'name' => 'أذربيجان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:32:02',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 285,
                'country_id' => 15,
                'locale' => 'tr',
                'name' => 'Azerbaycan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:32:02',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 286,
                'country_id' => 16,
                'locale' => 'ar',
                'name' => 'جزر البهاما',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:32:40',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 287,
                'country_id' => 16,
                'locale' => 'tr',
                'name' => 'Bahamalar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:32:40',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 288,
                'country_id' => 17,
                'locale' => 'ar',
                'name' => 'البحرين',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:33:45',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 289,
                'country_id' => 17,
                'locale' => 'tr',
                'name' => 'Bahreyn',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:33:45',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 290,
                'country_id' => 18,
                'locale' => 'ar',
                'name' => 'بنغلاديش',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:34:31',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 291,
                'country_id' => 18,
                'locale' => 'tr',
                'name' => 'Bangladeş',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:34:31',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 292,
                'country_id' => 19,
                'locale' => 'ar',
                'name' => 'بربادوس',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:35:13',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 293,
                'country_id' => 19,
                'locale' => 'tr',
                'name' => 'Barbados',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 294,
                'country_id' => 20,
                'locale' => 'ar',
                'name' => 'بيلاروسيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:36:01',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 295,
                'country_id' => 20,
                'locale' => 'tr',
                'name' => 'Belarus',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 296,
                'country_id' => 21,
                'locale' => 'ar',
                'name' => 'بلجيكا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:36:40',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 297,
                'country_id' => 21,
                'locale' => 'tr',
                'name' => 'Belçika',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:36:40',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 298,
                'country_id' => 22,
                'locale' => 'ar',
                'name' => 'بليز',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:37:21',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 299,
                'country_id' => 22,
                'locale' => 'tr',
                'name' => 'Belize',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 300,
                'country_id' => 23,
                'locale' => 'ar',
                'name' => 'بنين',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:38:07',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 301,
                'country_id' => 23,
                'locale' => 'tr',
                'name' => 'Benin',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 302,
                'country_id' => 24,
                'locale' => 'ar',
                'name' => 'برمودا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:38:50',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 303,
                'country_id' => 24,
                'locale' => 'tr',
                'name' => 'Bermuda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 304,
                'country_id' => 25,
                'locale' => 'ar',
                'name' => 'بوتان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:39:26',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 305,
                'country_id' => 25,
                'locale' => 'tr',
                'name' => 'Butan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:39:26',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 306,
                'country_id' => 26,
                'locale' => 'ar',
                'name' => 'بوليفيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:40:04',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 307,
                'country_id' => 26,
                'locale' => 'tr',
                'name' => 'Bolivya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:40:04',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 308,
                'country_id' => 27,
                'locale' => 'ar',
                'name' => 'البوسنة والهرسك',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:41:24',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 309,
                'country_id' => 27,
                'locale' => 'tr',
                'name' => 'Bosna Hersek',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:41:24',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 310,
                'country_id' => 28,
                'locale' => 'ar',
                'name' => 'بوتسوانا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:42:04',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 311,
                'country_id' => 28,
                'locale' => 'tr',
                'name' => 'Botsvana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:42:04',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 312,
                'country_id' => 29,
                'locale' => 'ar',
                'name' => 'جزيرة بوفيت',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:42:43',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 313,
                'country_id' => 29,
                'locale' => 'tr',
                'name' => 'Bouvet Adası',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:42:43',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 314,
                'country_id' => 30,
                'locale' => 'ar',
                'name' => 'البرازيل',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:43:21',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 315,
                'country_id' => 30,
                'locale' => 'tr',
                'name' => 'Brezilya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:43:21',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 316,
                'country_id' => 31,
                'locale' => 'ar',
                'name' => 'إقليم المحيط البريطاني الهندي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:44:06',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 317,
                'country_id' => 31,
                'locale' => 'tr',
                'name' => 'İngiliz Hint Okyanusu Bölgesi',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:44:06',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 318,
                'country_id' => 32,
                'locale' => 'ar',
                'name' => 'بروناي دار السلام',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:44:45',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 319,
                'country_id' => 32,
                'locale' => 'tr',
                'name' => 'Brunei Darussalam',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 320,
                'country_id' => 33,
                'locale' => 'ar',
                'name' => 'بلغاريا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:45:25',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 321,
                'country_id' => 33,
                'locale' => 'tr',
                'name' => 'Bulgaristan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:45:25',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 322,
                'country_id' => 34,
                'locale' => 'ar',
                'name' => 'بوركينا فاسو',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:46:06',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 323,
                'country_id' => 34,
                'locale' => 'tr',
                'name' => 'Burkina Faso',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 324,
                'country_id' => 35,
                'locale' => 'ar',
                'name' => 'بوروندي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:47:10',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 325,
                'country_id' => 35,
                'locale' => 'tr',
                'name' => 'Burundi',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:47:10',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 326,
                'country_id' => 36,
                'locale' => 'ar',
                'name' => 'كمبوديا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:47:55',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 327,
                'country_id' => 36,
                'locale' => 'tr',
                'name' => 'Kamboçya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:47:55',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 328,
                'country_id' => 37,
                'locale' => 'ar',
                'name' => 'الكاميرون',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:48:55',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 329,
                'country_id' => 37,
                'locale' => 'tr',
                'name' => 'Kamerun',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:48:55',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 330,
                'country_id' => 38,
                'locale' => 'ar',
                'name' => 'كندا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:49:31',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 331,
                'country_id' => 38,
                'locale' => 'tr',
                'name' => 'Kanada',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:49:31',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 332,
                'country_id' => 39,
                'locale' => 'ar',
                'name' => 'الرأس الأخضر',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 02:50:08',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 333,
                'country_id' => 39,
                'locale' => 'tr',
                'name' => 'Cape Verde',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 334,
                'country_id' => 40,
                'locale' => 'ar',
                'name' => 'جزر كايمان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:07:11',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 335,
                'country_id' => 40,
                'locale' => 'tr',
                'name' => 'Cayman Adaları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:07:11',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 336,
                'country_id' => 41,
                'locale' => 'ar',
                'name' => 'Central African Republic',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 337,
                'country_id' => 41,
                'locale' => 'tr',
                'name' => 'Orta Afrika Cumhuriyeti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:07:52',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 338,
                'country_id' => 42,
                'locale' => 'ar',
                'name' => 'تشاد',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:08:39',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 339,
                'country_id' => 42,
                'locale' => 'tr',
                'name' => 'Çad',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:08:39',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 340,
                'country_id' => 43,
                'locale' => 'ar',
                'name' => 'تشيلي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:09:33',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 341,
                'country_id' => 43,
                'locale' => 'tr',
                'name' => 'Şili',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:09:33',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 342,
                'country_id' => 44,
                'locale' => 'ar',
                'name' => 'الصين',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:10:40',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 343,
                'country_id' => 44,
                'locale' => 'tr',
                'name' => 'Çin',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:10:40',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 344,
                'country_id' => 45,
                'locale' => 'ar',
                'name' => 'جزيرة الكريسماس',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:11:33',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 345,
                'country_id' => 45,
                'locale' => 'tr',
                'name' => 'Noel Adası',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:11:33',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 346,
                'country_id' => 46,
                'locale' => 'ar',
            'name' => 'جزر كوكوس (كيلينغ)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:12:17',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 347,
                'country_id' => 46,
                'locale' => 'tr',
            'name' => 'Cocos (Keeling) Adaları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:12:17',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 348,
                'country_id' => 47,
                'locale' => 'ar',
                'name' => 'كولومبيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:12:58',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 349,
                'country_id' => 47,
                'locale' => 'tr',
                'name' => 'Kolombiya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:12:58',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 350,
                'country_id' => 48,
                'locale' => 'ar',
                'name' => 'جزر القمر',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:14:04',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 351,
                'country_id' => 48,
                'locale' => 'tr',
                'name' => 'Komorlar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:14:04',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 352,
                'country_id' => 49,
                'locale' => 'ar',
                'name' => 'الكونغو',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:15:11',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 353,
                'country_id' => 49,
                'locale' => 'tr',
                'name' => 'Kongo',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:15:11',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 354,
                'country_id' => 50,
                'locale' => 'ar',
                'name' => 'جزر كوك',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:15:52',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 355,
                'country_id' => 50,
                'locale' => 'tr',
                'name' => 'Cook Adaları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:15:52',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 356,
                'country_id' => 51,
                'locale' => 'ar',
                'name' => 'كوستا ريكا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:16:34',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 357,
                'country_id' => 51,
                'locale' => 'tr',
                'name' => 'Kosta Rika',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:16:34',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 358,
                'country_id' => 52,
                'locale' => 'ar',
                'name' => 'ساحل العاج',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:17:24',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 359,
                'country_id' => 52,
                'locale' => 'tr',
                'name' => 'Fildişi Sahili',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:17:24',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 360,
                'country_id' => 53,
                'locale' => 'ar',
                'name' => 'كرواتيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:18:28',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 361,
                'country_id' => 53,
                'locale' => 'tr',
                'name' => 'Hırvatistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:18:28',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 362,
                'country_id' => 54,
                'locale' => 'ar',
                'name' => 'كوبا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:19:07',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 363,
                'country_id' => 54,
                'locale' => 'tr',
                'name' => 'Küba',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:19:07',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 364,
                'country_id' => 55,
                'locale' => 'ar',
                'name' => 'قبرص',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:19:45',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 365,
                'country_id' => 55,
                'locale' => 'tr',
                'name' => 'Kıbrıs',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:19:45',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 366,
                'country_id' => 56,
                'locale' => 'ar',
                'name' => 'الجمهورية التشيكية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:20:27',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 367,
                'country_id' => 56,
                'locale' => 'tr',
                'name' => 'Çek Cumhuriyeti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:20:27',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 368,
                'country_id' => 57,
                'locale' => 'ar',
                'name' => 'الدنمارك',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:21:09',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 369,
                'country_id' => 57,
                'locale' => 'tr',
                'name' => 'Danimarka',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:21:09',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 370,
                'country_id' => 58,
                'locale' => 'ar',
                'name' => 'جيبوتي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:21:50',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 371,
                'country_id' => 58,
                'locale' => 'tr',
                'name' => 'Cibuti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:21:50',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 372,
                'country_id' => 59,
                'locale' => 'ar',
                'name' => 'دومينيكا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:22:27',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 373,
                'country_id' => 59,
                'locale' => 'tr',
                'name' => 'Dominika',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:22:27',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 374,
                'country_id' => 60,
                'locale' => 'ar',
                'name' => 'جمهورية الدومينيكان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:23:07',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 375,
                'country_id' => 60,
                'locale' => 'tr',
                'name' => 'Dominik Cumhuriyeti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:23:07',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 376,
                'country_id' => 61,
                'locale' => 'ar',
                'name' => 'تيمور الشرقية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:23:51',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 377,
                'country_id' => 61,
                'locale' => 'tr',
                'name' => 'Doğu Timor',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:23:51',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 378,
                'country_id' => 62,
                'locale' => 'ar',
                'name' => 'الاكوادور',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:24:38',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 379,
                'country_id' => 62,
                'locale' => 'tr',
                'name' => 'Ekvador',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:24:38',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 380,
                'country_id' => 63,
                'locale' => 'ar',
                'name' => 'مصر',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:26:07',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 381,
                'country_id' => 63,
                'locale' => 'tr',
                'name' => 'Mısır',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:26:07',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 382,
                'country_id' => 64,
                'locale' => 'ar',
                'name' => 'السلفادور',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:27:25',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 383,
                'country_id' => 64,
                'locale' => 'tr',
                'name' => 'El Salvador',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 384,
                'country_id' => 65,
                'locale' => 'ar',
                'name' => 'غينيا الإستوائية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:28:15',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 385,
                'country_id' => 65,
                'locale' => 'tr',
                'name' => 'Ekvator Ginesi',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:28:15',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 386,
                'country_id' => 66,
                'locale' => 'ar',
                'name' => 'إريتريا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:29:02',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 387,
                'country_id' => 66,
                'locale' => 'tr',
                'name' => 'Eritre',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:29:02',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 388,
                'country_id' => 67,
                'locale' => 'ar',
                'name' => 'إستونيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:29:48',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 389,
                'country_id' => 67,
                'locale' => 'tr',
                'name' => 'Estonya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:29:48',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 390,
                'country_id' => 68,
                'locale' => 'ar',
                'name' => 'أثيوبيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:30:35',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 391,
                'country_id' => 68,
                'locale' => 'tr',
                'name' => 'Etiyopya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:30:35',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 392,
                'country_id' => 69,
                'locale' => 'ar',
            'name' => 'جزر فوكلاند (مالفيناس)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:31:25',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 393,
                'country_id' => 69,
                'locale' => 'tr',
            'name' => 'Falkland Adaları (Malvinas)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:31:25',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 394,
                'country_id' => 70,
                'locale' => 'ar',
                'name' => 'جزر فاروس',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:33:18',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 395,
                'country_id' => 70,
                'locale' => 'tr',
                'name' => 'Faroe Adaları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:33:18',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 396,
                'country_id' => 71,
                'locale' => 'ar',
                'name' => 'فيجي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:34:01',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 397,
                'country_id' => 71,
                'locale' => 'tr',
                'name' => 'Fiji',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 398,
                'country_id' => 72,
                'locale' => 'ar',
                'name' => 'فنلندا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:34:50',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 399,
                'country_id' => 72,
                'locale' => 'tr',
                'name' => 'Finlandiya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:34:50',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 400,
                'country_id' => 74,
                'locale' => 'ar',
                'name' => 'فرنسا ، متروبوليتان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:36:39',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 401,
                'country_id' => 74,
                'locale' => 'tr',
                'name' => 'Fransa, Metropolitan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:36:39',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 402,
                'country_id' => 75,
                'locale' => 'ar',
                'name' => 'غيانا الفرنسية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:37:34',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 403,
                'country_id' => 75,
                'locale' => 'tr',
                'name' => 'Fransız Guyanası',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:37:35',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 404,
                'country_id' => 76,
                'locale' => 'ar',
                'name' => 'بولينيزيا الفرنسية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:38:21',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 405,
                'country_id' => 76,
                'locale' => 'tr',
                'name' => 'Fransız Polinezyası',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:38:21',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 406,
                'country_id' => 77,
                'locale' => 'ar',
                'name' => 'المناطق الجنوبية لفرنسا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:40:39',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 407,
                'country_id' => 77,
                'locale' => 'tr',
                'name' => 'Fransız Güney Toprakları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:40:39',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 408,
                'country_id' => 78,
                'locale' => 'ar',
                'name' => 'الجابون',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:41:45',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 409,
                'country_id' => 78,
                'locale' => 'tr',
                'name' => 'Gabon',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 410,
                'country_id' => 79,
                'locale' => 'ar',
                'name' => 'غامبيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:42:41',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 411,
                'country_id' => 79,
                'locale' => 'tr',
                'name' => 'Gambiya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:42:41',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 412,
                'country_id' => 80,
                'locale' => 'ar',
                'name' => 'جورجيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:43:28',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 413,
                'country_id' => 80,
                'locale' => 'tr',
                'name' => 'Gürcistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:43:28',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 414,
                'country_id' => 81,
                'locale' => 'ar',
                'name' => 'ألمانيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:44:30',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 415,
                'country_id' => 81,
                'locale' => 'tr',
                'name' => 'Almanya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:44:30',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 416,
                'country_id' => 82,
                'locale' => 'ar',
                'name' => 'غانا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:45:20',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 417,
                'country_id' => 82,
                'locale' => 'tr',
                'name' => 'Gana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:45:20',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 418,
                'country_id' => 83,
                'locale' => 'ar',
                'name' => 'جبل طارق',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:46:06',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 419,
                'country_id' => 83,
                'locale' => 'tr',
                'name' => 'Cebelitarık',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:46:06',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 420,
                'country_id' => 84,
                'locale' => 'ar',
                'name' => 'اليونان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:49:29',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 421,
                'country_id' => 84,
                'locale' => 'tr',
                'name' => 'Yunanistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 10:49:29',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 422,
                'country_id' => 85,
                'locale' => 'ar',
                'name' => 'الأرض الخضراء',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:12:24',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 423,
                'country_id' => 85,
                'locale' => 'tr',
                'name' => 'Grönland',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:12:24',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 424,
                'country_id' => 86,
                'locale' => 'ar',
                'name' => 'غرينادا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:13:26',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 425,
                'country_id' => 86,
                'locale' => 'tr',
                'name' => 'Grenada',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 426,
                'country_id' => 87,
                'locale' => 'ar',
                'name' => 'جوادلوب',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:17:25',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 427,
                'country_id' => 87,
                'locale' => 'tr',
                'name' => 'Guadeloupe',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 428,
                'country_id' => 88,
                'locale' => 'ar',
                'name' => 'غوام',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:18:45',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 429,
                'country_id' => 88,
                'locale' => 'tr',
                'name' => 'Guam',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 430,
                'country_id' => 89,
                'locale' => 'ar',
                'name' => 'غواتيمالا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:49:48',
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 431,
                'country_id' => 89,
                'locale' => 'tr',
                'name' => 'Guatemala',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 432,
                'country_id' => 90,
                'locale' => 'ar',
                'name' => 'غينيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:50:55',
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 433,
                'country_id' => 90,
                'locale' => 'tr',
                'name' => 'Gine',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:50:55',
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 434,
                'country_id' => 91,
                'locale' => 'ar',
                'name' => 'غينيا بيساو',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:51:54',
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 435,
                'country_id' => 91,
                'locale' => 'tr',
                'name' => 'Gine-Bissau',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:51:54',
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 436,
                'country_id' => 92,
                'locale' => 'ar',
                'name' => 'غيانا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:53:24',
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 437,
                'country_id' => 92,
                'locale' => 'tr',
                'name' => 'Guyana',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 438,
                'country_id' => 93,
                'locale' => 'ar',
                'name' => 'هايتي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:54:27',
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 439,
                'country_id' => 93,
                'locale' => 'tr',
                'name' => 'Haiti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 440,
                'country_id' => 94,
                'locale' => 'ar',
                'name' => 'جزر هيرد وماكدونالد',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:55:26',
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 441,
                'country_id' => 94,
                'locale' => 'tr',
                'name' => 'Heard ve Mcdonald Adaları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 12:55:26',
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 442,
                'country_id' => 95,
                'locale' => 'ar',
                'name' => 'هندوراس',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:00:51',
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 443,
                'country_id' => 95,
                'locale' => 'tr',
                'name' => 'Honduras',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 444,
                'country_id' => 96,
                'locale' => 'ar',
                'name' => 'هونج كونج',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:02:43',
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 445,
                'country_id' => 96,
                'locale' => 'tr',
                'name' => 'Hong Kong',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 446,
                'country_id' => 97,
                'locale' => 'ar',
                'name' => 'هنغاريا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:05:06',
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 447,
                'country_id' => 97,
                'locale' => 'tr',
                'name' => 'Macaristan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:05:06',
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 448,
                'country_id' => 98,
                'locale' => 'ar',
                'name' => 'أيسلندا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:07:29',
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 449,
                'country_id' => 98,
                'locale' => 'tr',
                'name' => 'İzlanda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:07:29',
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 450,
                'country_id' => 99,
                'locale' => 'ar',
                'name' => 'الهند',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:08:41',
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 451,
                'country_id' => 99,
                'locale' => 'tr',
                'name' => 'Hindistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:08:41',
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 452,
                'country_id' => 100,
                'locale' => 'ar',
                'name' => 'إندونيسيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:10:00',
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 453,
                'country_id' => 100,
                'locale' => 'tr',
                'name' => 'Endonezya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:10:00',
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 454,
                'country_id' => 101,
                'locale' => 'ar',
            'name' => 'إيران (جمهورية - الإسلامية)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:11:06',
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 455,
                'country_id' => 101,
                'locale' => 'tr',
            'name' => 'İran (İslam Cumhuriyeti)',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:11:06',
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 456,
                'country_id' => 102,
                'locale' => 'ar',
                'name' => 'العراق',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:12:00',
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 457,
                'country_id' => 102,
                'locale' => 'tr',
                'name' => 'Irak',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:12:00',
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 458,
                'country_id' => 103,
                'locale' => 'ar',
                'name' => 'أيرلندا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:12:55',
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 459,
                'country_id' => 103,
                'locale' => 'tr',
                'name' => 'İrlanda',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:12:55',
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 460,
                'country_id' => 104,
                'locale' => 'ar',
                'name' => 'إسرائيل',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:13:47',
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 461,
                'country_id' => 104,
                'locale' => 'tr',
                'name' => 'İsrail',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:13:47',
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 462,
                'country_id' => 105,
                'locale' => 'ar',
                'name' => 'إيطاليا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:14:45',
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 463,
                'country_id' => 105,
                'locale' => 'tr',
                'name' => 'İtalya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:14:45',
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 464,
                'country_id' => 106,
                'locale' => 'ar',
                'name' => 'جامايكا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:15:37',
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 465,
                'country_id' => 106,
                'locale' => 'tr',
                'name' => 'Jamaika',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:15:37',
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 466,
                'country_id' => 107,
                'locale' => 'ar',
                'name' => 'اليابان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:16:43',
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 467,
                'country_id' => 107,
                'locale' => 'tr',
                'name' => 'Japonya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:16:43',
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 468,
                'country_id' => 108,
                'locale' => 'ar',
                'name' => 'الأردن',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:17:30',
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 469,
                'country_id' => 108,
                'locale' => 'tr',
                'name' => 'Ürdün',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:17:30',
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 470,
                'country_id' => 109,
                'locale' => 'ar',
                'name' => 'كازاخستان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:18:23',
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 471,
                'country_id' => 109,
                'locale' => 'tr',
                'name' => 'Kazakistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:18:23',
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 472,
                'country_id' => 110,
                'locale' => 'ar',
                'name' => 'كينيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:22:03',
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 473,
                'country_id' => 110,
                'locale' => 'tr',
                'name' => 'Kenya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 474,
                'country_id' => 111,
                'locale' => 'ar',
                'name' => 'كيريباتي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:22:56',
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 475,
                'country_id' => 111,
                'locale' => 'tr',
                'name' => 'Kiribati',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 476,
                'country_id' => 112,
                'locale' => 'ar',
                'name' => 'كوريا الشمالية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:23:46',
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 477,
                'country_id' => 112,
                'locale' => 'tr',
                'name' => 'Kuzey Kore',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:23:46',
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 478,
                'country_id' => 113,
                'locale' => 'ar',
                'name' => 'كوريا الجنوبية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:24:37',
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 479,
                'country_id' => 113,
                'locale' => 'tr',
                'name' => 'Güney Kore',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:24:37',
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 480,
                'country_id' => 114,
                'locale' => 'ar',
                'name' => 'الكويت',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:25:26',
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 481,
                'country_id' => 114,
                'locale' => 'tr',
                'name' => 'Kuveyt',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:25:26',
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 482,
                'country_id' => 115,
                'locale' => 'ar',
                'name' => 'قيرغيزستان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:26:15',
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 483,
                'country_id' => 115,
                'locale' => 'tr',
                'name' => 'Kırgızistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:26:15',
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 484,
                'country_id' => 116,
                'locale' => 'ar',
                'name' => 'جمهورية لاو الديمقراطية الشعبية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:27:37',
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 485,
                'country_id' => 116,
                'locale' => 'tr',
                'name' => 'Lao Demokratik Halk Cumhuriyeti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:27:37',
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 486,
                'country_id' => 117,
                'locale' => 'ar',
                'name' => 'Latvia',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 487,
                'country_id' => 117,
                'locale' => 'tr',
                'name' => 'Letonya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:28:30',
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 488,
                'country_id' => 118,
                'locale' => 'ar',
                'name' => 'لبنان',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:29:27',
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 489,
                'country_id' => 118,
                'locale' => 'tr',
                'name' => 'Lübnan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:29:27',
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 490,
                'country_id' => 119,
                'locale' => 'ar',
                'name' => 'ليسوتو',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:30:43',
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 491,
                'country_id' => 119,
                'locale' => 'tr',
                'name' => 'Lesoto',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:30:43',
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 492,
                'country_id' => 120,
                'locale' => 'ar',
                'name' => 'ليبيريا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:31:41',
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 493,
                'country_id' => 120,
                'locale' => 'tr',
                'name' => 'ليبيريا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:31:41',
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 494,
                'country_id' => 121,
                'locale' => 'ar',
                'name' => 'الجماهيرية العربية الليبية',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:32:34',
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 495,
                'country_id' => 121,
                'locale' => 'tr',
                'name' => 'Libya Arap Cemahiriyası',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:32:34',
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 496,
                'country_id' => 122,
                'locale' => 'ar',
                'name' => 'ليختنشتاين',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:34:38',
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 497,
                'country_id' => 122,
                'locale' => 'tr',
                'name' => 'Lihtenştayn',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:34:38',
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 498,
                'country_id' => 123,
                'locale' => 'ar',
                'name' => 'ليتوانيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:35:29',
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 499,
                'country_id' => 123,
                'locale' => 'tr',
                'name' => 'Litvanya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:35:29',
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 500,
                'country_id' => 124,
                'locale' => 'ar',
                'name' => 'لوكسمبورغ',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:36:16',
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 501,
                'country_id' => 124,
                'locale' => 'tr',
                'name' => 'Lüksemburg',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:36:16',
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 502,
                'country_id' => 125,
                'locale' => 'ar',
                'name' => 'ماكاو',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:37:19',
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 503,
                'country_id' => 125,
                'locale' => 'tr',
                'name' => 'Macau',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('country_translations')->insert(array (
            0 => 
            array (
                'id' => 504,
                'country_id' => 126,
                'locale' => 'ar',
                'name' => 'جمهورية مقدونيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:38:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 505,
                'country_id' => 126,
                'locale' => 'tr',
                'name' => 'FYROM',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 506,
                'country_id' => 127,
                'locale' => 'ar',
                'name' => 'مدغشقر',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:39:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 507,
                'country_id' => 127,
                'locale' => 'tr',
                'name' => 'Madagaskar',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:39:38',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 508,
                'country_id' => 128,
                'locale' => 'ar',
                'name' => 'ملاوي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:41:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 509,
                'country_id' => 128,
                'locale' => 'tr',
                'name' => 'Malawi',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 510,
                'country_id' => 129,
                'locale' => 'ar',
                'name' => 'ماليزيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:42:13',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 511,
                'country_id' => 129,
                'locale' => 'tr',
                'name' => 'Malezya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:42:13',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 512,
                'country_id' => 130,
                'locale' => 'ar',
                'name' => 'جزر المالديف',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:43:27',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 513,
                'country_id' => 130,
                'locale' => 'tr',
                'name' => 'Maldivler',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:43:27',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 514,
                'country_id' => 131,
                'locale' => 'ar',
                'name' => 'مالي',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:44:20',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 515,
                'country_id' => 131,
                'locale' => 'tr',
                'name' => 'Mali',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 516,
                'country_id' => 132,
                'locale' => 'ar',
                'name' => 'مالطا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:45:16',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 517,
                'country_id' => 132,
                'locale' => 'tr',
                'name' => 'Malta',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 518,
                'country_id' => 133,
                'locale' => 'ar',
                'name' => 'جزر مارشال',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:46:03',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 519,
                'country_id' => 133,
                'locale' => 'tr',
                'name' => 'Marşal Adaları',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:46:03',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 520,
                'country_id' => 134,
                'locale' => 'ar',
                'name' => 'مارتينيك',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:47:36',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 521,
                'country_id' => 134,
                'locale' => 'tr',
                'name' => 'Martinik',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:47:36',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 522,
                'country_id' => 135,
                'locale' => 'ar',
                'name' => 'موريتانيا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:48:56',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 523,
                'country_id' => 135,
                'locale' => 'tr',
                'name' => 'Moritanya',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:48:56',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 524,
                'country_id' => 136,
                'locale' => 'ar',
                'name' => 'موريشيوس',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:50:37',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 525,
                'country_id' => 136,
                'locale' => 'tr',
                'name' => 'Mauritius',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 526,
                'country_id' => 137,
                'locale' => 'ar',
                'name' => 'مايوت',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:51:34',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 527,
                'country_id' => 137,
                'locale' => 'tr',
                'name' => 'Mayotte',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 528,
                'country_id' => 138,
                'locale' => 'ar',
                'name' => 'المكسيك',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:52:30',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 529,
                'country_id' => 138,
                'locale' => 'tr',
                'name' => 'Meksika',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:52:30',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 530,
                'country_id' => 139,
                'locale' => 'ar',
                'name' => 'ولايات ميكرونيزيا الموحدة',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:53:52',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 531,
                'country_id' => 139,
                'locale' => 'tr',
                'name' => 'Mikronezya Federal Devletleri',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:53:52',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 532,
                'country_id' => 140,
                'locale' => 'ar',
                'name' => 'جمهورية مولدوفا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:54:42',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 533,
                'country_id' => 140,
                'locale' => 'tr',
                'name' => 'Moldova Cumhuriyeti',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:54:42',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 534,
                'country_id' => 141,
                'locale' => 'ar',
                'name' => 'موناكو',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:55:40',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 535,
                'country_id' => 141,
                'locale' => 'tr',
                'name' => 'Monako',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:55:40',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 536,
                'country_id' => 142,
                'locale' => 'ar',
                'name' => 'منغوليا',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:58:07',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 537,
                'country_id' => 142,
                'locale' => 'tr',
                'name' => 'Moğolistan',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:58:07',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 538,
                'country_id' => 143,
                'locale' => 'ar',
                'name' => 'مونتسيرات',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 13:59:03',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 539,
                'country_id' => 143,
                'locale' => 'tr',
                'name' => 'Montserrat',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 540,
                'country_id' => 144,
                'locale' => 'tr',
                'name' => 'Fas',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 14:00:07',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 541,
                'country_id' => 144,
                'locale' => 'ar',
                'name' => 'المغرب',
                'created_at' => '2021-05-04 00:39:05',
                'updated_at' => '2021-05-04 14:00:07',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 542,
                'country_id' => 145,
                'locale' => 'ar',
                'name' => 'موزمبيق',
                'created_at' => '2021-05-04 17:14:20',
                'updated_at' => '2021-05-04 17:14:20',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 543,
                'country_id' => 145,
                'locale' => 'tr',
                'name' => 'Mozambik',
                'created_at' => '2021-05-04 17:14:20',
                'updated_at' => '2021-05-04 17:14:20',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 544,
                'country_id' => 146,
                'locale' => 'ar',
                'name' => 'ميانمار',
                'created_at' => '2021-05-04 17:15:03',
                'updated_at' => '2021-05-04 17:15:03',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 545,
                'country_id' => 146,
                'locale' => 'tr',
                'name' => 'Myanmar',
                'created_at' => '2021-05-04 17:15:03',
                'updated_at' => '2021-05-04 17:15:03',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 546,
                'country_id' => 147,
                'locale' => 'ar',
                'name' => 'ناميبيا',
                'created_at' => '2021-05-04 17:15:35',
                'updated_at' => '2021-05-04 17:15:35',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 547,
                'country_id' => 147,
                'locale' => 'tr',
                'name' => 'Namibya',
                'created_at' => '2021-05-04 17:15:35',
                'updated_at' => '2021-05-04 17:15:35',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 548,
                'country_id' => 148,
                'locale' => 'ar',
                'name' => 'ناورو',
                'created_at' => '2021-05-04 17:21:07',
                'updated_at' => '2021-05-04 17:21:07',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 549,
                'country_id' => 148,
                'locale' => 'tr',
                'name' => 'Nauru',
                'created_at' => '2021-05-04 17:21:07',
                'updated_at' => '2021-05-04 17:21:07',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 550,
                'country_id' => 149,
                'locale' => 'ar',
                'name' => 'نيبال',
                'created_at' => '2021-05-04 17:21:37',
                'updated_at' => '2021-05-04 17:21:37',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 551,
                'country_id' => 149,
                'locale' => 'tr',
                'name' => 'Nepal',
                'created_at' => '2021-05-04 17:21:37',
                'updated_at' => '2021-05-04 17:21:37',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 552,
                'country_id' => 150,
                'locale' => 'ar',
                'name' => 'هولندا',
                'created_at' => '2021-05-04 17:22:42',
                'updated_at' => '2021-05-04 17:22:42',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 553,
                'country_id' => 150,
                'locale' => 'tr',
                'name' => 'Hollanda',
                'created_at' => '2021-05-04 17:22:42',
                'updated_at' => '2021-05-04 17:22:42',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 554,
                'country_id' => 151,
                'locale' => 'ar',
                'name' => 'جزر الأنتيل الهولندية',
                'created_at' => '2021-05-04 17:23:26',
                'updated_at' => '2021-05-04 17:23:26',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 555,
                'country_id' => 151,
                'locale' => 'tr',
                'name' => 'Hollanda Antilleri',
                'created_at' => '2021-05-04 17:23:26',
                'updated_at' => '2021-05-04 17:23:26',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 556,
                'country_id' => 152,
                'locale' => 'ar',
                'name' => 'كاليدونيا الجديدة',
                'created_at' => '2021-05-04 17:24:10',
                'updated_at' => '2021-05-04 17:24:10',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 557,
                'country_id' => 152,
                'locale' => 'tr',
                'name' => 'Yeni Kaledonya',
                'created_at' => '2021-05-04 17:24:10',
                'updated_at' => '2021-05-04 17:24:10',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 558,
                'country_id' => 153,
                'locale' => 'ar',
                'name' => 'نيوزيلاندا',
                'created_at' => '2021-05-04 17:24:49',
                'updated_at' => '2021-05-04 17:24:49',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 559,
                'country_id' => 153,
                'locale' => 'tr',
                'name' => 'Yeni Zelanda',
                'created_at' => '2021-05-04 17:24:49',
                'updated_at' => '2021-05-04 17:24:49',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 560,
                'country_id' => 154,
                'locale' => 'ar',
                'name' => 'نيكاراغوا',
                'created_at' => '2021-05-04 17:25:41',
                'updated_at' => '2021-05-04 17:25:41',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 561,
                'country_id' => 154,
                'locale' => 'tr',
                'name' => 'Nikaragua',
                'created_at' => '2021-05-04 17:25:41',
                'updated_at' => '2021-05-04 17:25:41',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 562,
                'country_id' => 155,
                'locale' => 'ar',
                'name' => 'النيجر',
                'created_at' => '2021-05-04 17:26:23',
                'updated_at' => '2021-05-04 17:26:23',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 563,
                'country_id' => 155,
                'locale' => 'tr',
                'name' => 'Nijer',
                'created_at' => '2021-05-04 17:26:23',
                'updated_at' => '2021-05-04 17:26:23',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 564,
                'country_id' => 156,
                'locale' => 'ar',
                'name' => 'نيجيريا',
                'created_at' => '2021-05-04 17:26:56',
                'updated_at' => '2021-05-04 17:26:56',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 565,
                'country_id' => 156,
                'locale' => 'tr',
                'name' => 'Nijerya',
                'created_at' => '2021-05-04 17:26:56',
                'updated_at' => '2021-05-04 17:26:56',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 566,
                'country_id' => 157,
                'locale' => 'ar',
                'name' => 'نيوي',
                'created_at' => '2021-05-04 17:27:24',
                'updated_at' => '2021-05-04 17:27:24',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 567,
                'country_id' => 157,
                'locale' => 'tr',
                'name' => 'Niue',
                'created_at' => '2021-05-04 17:27:24',
                'updated_at' => '2021-05-04 17:27:24',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 568,
                'country_id' => 158,
                'locale' => 'ar',
                'name' => 'جزيرة نورفولك',
                'created_at' => '2021-05-04 17:28:04',
                'updated_at' => '2021-05-04 17:28:04',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 569,
                'country_id' => 158,
                'locale' => 'tr',
                'name' => 'Norfolk Adası',
                'created_at' => '2021-05-04 17:28:04',
                'updated_at' => '2021-05-04 17:28:04',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 570,
                'country_id' => 159,
                'locale' => 'ar',
                'name' => 'جزر مريانا الشمالية',
                'created_at' => '2021-05-04 17:28:58',
                'updated_at' => '2021-05-04 17:28:58',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 571,
                'country_id' => 159,
                'locale' => 'tr',
                'name' => 'Kuzey Mariana Adaları',
                'created_at' => '2021-05-04 17:28:58',
                'updated_at' => '2021-05-04 17:28:58',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 572,
                'country_id' => 160,
                'locale' => 'ar',
                'name' => 'النرويج',
                'created_at' => '2021-05-04 17:29:29',
                'updated_at' => '2021-05-04 17:29:29',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 573,
                'country_id' => 160,
                'locale' => 'tr',
                'name' => 'Norveç',
                'created_at' => '2021-05-04 17:29:29',
                'updated_at' => '2021-05-04 17:29:29',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 574,
                'country_id' => 161,
                'locale' => 'ar',
                'name' => 'سلطنة عمان',
                'created_at' => '2021-05-04 17:29:59',
                'updated_at' => '2021-05-04 17:29:59',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 575,
                'country_id' => 161,
                'locale' => 'tr',
                'name' => 'Umman',
                'created_at' => '2021-05-04 17:29:59',
                'updated_at' => '2021-05-04 17:29:59',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 576,
                'country_id' => 162,
                'locale' => 'ar',
                'name' => 'باكستان',
                'created_at' => '2021-05-04 17:30:29',
                'updated_at' => '2021-05-04 17:30:40',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 577,
                'country_id' => 162,
                'locale' => 'tr',
                'name' => 'Pakistan',
                'created_at' => '2021-05-04 17:30:29',
                'updated_at' => '2021-05-04 17:30:29',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 578,
                'country_id' => 163,
                'locale' => 'ar',
                'name' => 'بالاو',
                'created_at' => '2021-05-04 17:31:33',
                'updated_at' => '2021-05-04 17:31:33',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 579,
                'country_id' => 163,
                'locale' => 'tr',
                'name' => 'Palau',
                'created_at' => '2021-05-04 17:31:33',
                'updated_at' => '2021-05-04 17:31:33',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 580,
                'country_id' => 164,
                'locale' => 'ar',
                'name' => 'بنما',
                'created_at' => '2021-05-04 17:32:15',
                'updated_at' => '2021-05-04 17:32:15',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 581,
                'country_id' => 164,
                'locale' => 'tr',
                'name' => 'Panama',
                'created_at' => '2021-05-04 17:32:15',
                'updated_at' => '2021-05-04 17:32:15',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 582,
                'country_id' => 165,
                'locale' => 'ar',
                'name' => 'بابوا غينيا الجديدة',
                'created_at' => '2021-05-04 17:32:48',
                'updated_at' => '2021-05-04 17:32:48',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 583,
                'country_id' => 165,
                'locale' => 'tr',
                'name' => 'Papua Yeni Gine',
                'created_at' => '2021-05-04 17:32:48',
                'updated_at' => '2021-05-04 17:32:48',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 584,
                'country_id' => 166,
                'locale' => 'ar',
                'name' => 'باراغواي',
                'created_at' => '2021-05-04 17:33:20',
                'updated_at' => '2021-05-04 17:33:20',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 585,
                'country_id' => 166,
                'locale' => 'tr',
                'name' => 'Paraguay',
                'created_at' => '2021-05-04 17:33:20',
                'updated_at' => '2021-05-04 17:33:20',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 586,
                'country_id' => 167,
                'locale' => 'ar',
                'name' => 'بيرو',
                'created_at' => '2021-05-04 17:33:59',
                'updated_at' => '2021-05-04 17:33:59',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 587,
                'country_id' => 167,
                'locale' => 'tr',
                'name' => 'Peru',
                'created_at' => '2021-05-04 17:33:59',
                'updated_at' => '2021-05-04 17:33:59',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 588,
                'country_id' => 168,
                'locale' => 'ar',
                'name' => 'الفلبين',
                'created_at' => '2021-05-04 17:34:58',
                'updated_at' => '2021-05-04 17:34:58',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 589,
                'country_id' => 168,
                'locale' => 'tr',
                'name' => 'Filipinler',
                'created_at' => '2021-05-04 17:34:58',
                'updated_at' => '2021-05-04 17:34:58',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 590,
                'country_id' => 169,
                'locale' => 'ar',
                'name' => 'بيتكيرن',
                'created_at' => '2021-05-04 17:35:32',
                'updated_at' => '2021-05-04 17:35:32',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 591,
                'country_id' => 169,
                'locale' => 'tr',
                'name' => 'Pitcairn',
                'created_at' => '2021-05-04 17:35:32',
                'updated_at' => '2021-05-04 17:35:32',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 592,
                'country_id' => 170,
                'locale' => 'ar',
                'name' => 'بولندا',
                'created_at' => '2021-05-04 17:36:26',
                'updated_at' => '2021-05-04 17:36:26',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 593,
                'country_id' => 170,
                'locale' => 'tr',
                'name' => 'Polonya',
                'created_at' => '2021-05-04 17:36:26',
                'updated_at' => '2021-05-04 17:36:26',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 594,
                'country_id' => 171,
                'locale' => 'ar',
                'name' => 'البرتغال',
                'created_at' => '2021-05-04 17:37:57',
                'updated_at' => '2021-05-04 17:37:57',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 595,
                'country_id' => 171,
                'locale' => 'tr',
                'name' => 'Portekiz',
                'created_at' => '2021-05-04 17:37:57',
                'updated_at' => '2021-05-04 17:37:57',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 596,
                'country_id' => 172,
                'locale' => 'ar',
                'name' => 'بورتوريكو',
                'created_at' => '2021-05-04 17:38:28',
                'updated_at' => '2021-05-04 17:38:28',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 597,
                'country_id' => 172,
                'locale' => 'tr',
                'name' => 'Porto Riko',
                'created_at' => '2021-05-04 17:38:28',
                'updated_at' => '2021-05-04 17:38:28',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 598,
                'country_id' => 173,
                'locale' => 'ar',
                'name' => 'قطر',
                'created_at' => '2021-05-04 17:39:01',
                'updated_at' => '2021-05-04 17:39:01',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 599,
                'country_id' => 173,
                'locale' => 'tr',
                'name' => 'Katar',
                'created_at' => '2021-05-04 17:39:01',
                'updated_at' => '2021-05-04 17:39:01',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 600,
                'country_id' => 175,
                'locale' => 'ar',
                'name' => 'رومانيا',
                'created_at' => '2021-05-04 17:40:53',
                'updated_at' => '2021-05-04 17:40:53',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 601,
                'country_id' => 175,
                'locale' => 'tr',
                'name' => 'Romanya',
                'created_at' => '2021-05-04 17:40:53',
                'updated_at' => '2021-05-04 17:40:53',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 602,
                'country_id' => 176,
                'locale' => 'ar',
                'name' => 'الاتحاد الروسي',
                'created_at' => '2021-05-04 17:41:23',
                'updated_at' => '2021-05-04 17:41:23',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 603,
                'country_id' => 176,
                'locale' => 'tr',
                'name' => 'Rusya Federasyonu',
                'created_at' => '2021-05-04 17:41:23',
                'updated_at' => '2021-05-04 17:41:23',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 604,
                'country_id' => 177,
                'locale' => 'ar',
                'name' => 'رواندا',
                'created_at' => '2021-05-04 17:41:50',
                'updated_at' => '2021-05-04 17:41:50',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 605,
                'country_id' => 177,
                'locale' => 'tr',
                'name' => 'Ruanda',
                'created_at' => '2021-05-04 17:41:50',
                'updated_at' => '2021-05-04 17:41:50',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 606,
                'country_id' => 178,
                'locale' => 'ar',
                'name' => 'سانت كيتس ونيفيس',
                'created_at' => '2021-05-04 17:42:19',
                'updated_at' => '2021-05-04 17:42:19',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 607,
                'country_id' => 178,
                'locale' => 'tr',
                'name' => 'Saint Kitts ve Nevis',
                'created_at' => '2021-05-04 17:42:19',
                'updated_at' => '2021-05-04 17:42:19',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 608,
                'country_id' => 179,
                'locale' => 'ar',
                'name' => 'القديسة لوسيا',
                'created_at' => '2021-05-04 17:42:53',
                'updated_at' => '2021-05-04 17:42:53',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 609,
                'country_id' => 179,
                'locale' => 'tr',
                'name' => 'Saint Lucia',
                'created_at' => '2021-05-04 17:42:53',
                'updated_at' => '2021-05-04 17:42:53',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 610,
                'country_id' => 180,
                'locale' => 'ar',
                'name' => 'سانت فنسنت وجزر غرينادين',
                'created_at' => '2021-05-04 17:43:24',
                'updated_at' => '2021-05-04 17:43:24',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 611,
                'country_id' => 180,
                'locale' => 'tr',
                'name' => 'Saint Vincent ve Grenadinler',
                'created_at' => '2021-05-04 17:43:24',
                'updated_at' => '2021-05-04 17:43:24',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 612,
                'country_id' => 181,
                'locale' => 'ar',
                'name' => 'ساموا',
                'created_at' => '2021-05-04 17:43:50',
                'updated_at' => '2021-05-04 17:43:50',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 613,
                'country_id' => 181,
                'locale' => 'tr',
                'name' => 'Samoa',
                'created_at' => '2021-05-04 17:43:50',
                'updated_at' => '2021-05-04 17:43:50',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 614,
                'country_id' => 182,
                'locale' => 'ar',
                'name' => 'سان مارينو',
                'created_at' => '2021-05-04 17:44:17',
                'updated_at' => '2021-05-04 17:44:17',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 615,
                'country_id' => 182,
                'locale' => 'tr',
                'name' => 'San Marino',
                'created_at' => '2021-05-04 17:44:17',
                'updated_at' => '2021-05-04 17:44:17',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 616,
                'country_id' => 183,
                'locale' => 'ar',
                'name' => 'ساو تومي وبرينسيبي',
                'created_at' => '2021-05-04 17:44:50',
                'updated_at' => '2021-05-04 17:44:50',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 617,
                'country_id' => 183,
                'locale' => 'tr',
                'name' => 'Sao Tome ve Principe',
                'created_at' => '2021-05-04 17:44:50',
                'updated_at' => '2021-05-04 17:44:50',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 618,
                'country_id' => 184,
                'locale' => 'ar',
                'name' => 'المملكة العربية السعودية',
                'created_at' => '2021-05-04 17:45:40',
                'updated_at' => '2021-05-04 17:45:40',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 619,
                'country_id' => 184,
                'locale' => 'tr',
                'name' => 'Suudi Arabistan',
                'created_at' => '2021-05-04 17:45:40',
                'updated_at' => '2021-05-04 17:45:40',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 620,
                'country_id' => 185,
                'locale' => 'ar',
                'name' => 'السنغال',
                'created_at' => '2021-05-04 17:47:01',
                'updated_at' => '2021-05-04 17:47:01',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 621,
                'country_id' => 185,
                'locale' => 'tr',
                'name' => 'Senegal',
                'created_at' => '2021-05-04 17:47:01',
                'updated_at' => '2021-05-04 17:47:01',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 622,
                'country_id' => 186,
                'locale' => 'ar',
                'name' => 'سيشيل',
                'created_at' => '2021-05-04 17:47:31',
                'updated_at' => '2021-05-04 17:47:31',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 623,
                'country_id' => 186,
                'locale' => 'tr',
                'name' => 'Seyşeller',
                'created_at' => '2021-05-04 17:47:31',
                'updated_at' => '2021-05-04 17:47:31',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 624,
                'country_id' => 187,
                'locale' => 'ar',
                'name' => 'سيرا ليون',
                'created_at' => '2021-05-04 17:48:16',
                'updated_at' => '2021-05-04 17:48:16',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 625,
                'country_id' => 187,
                'locale' => 'tr',
                'name' => 'Sierra Leone',
                'created_at' => '2021-05-04 17:48:16',
                'updated_at' => '2021-05-04 17:48:16',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 626,
                'country_id' => 188,
                'locale' => 'ar',
                'name' => 'سنغافورة',
                'created_at' => '2021-05-04 17:48:45',
                'updated_at' => '2021-05-04 17:48:45',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 627,
                'country_id' => 188,
                'locale' => 'tr',
                'name' => 'Singapur',
                'created_at' => '2021-05-04 17:48:45',
                'updated_at' => '2021-05-04 17:48:45',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 628,
                'country_id' => 189,
                'locale' => 'ar',
                'name' => 'جمهورية سلوفاكيا',
                'created_at' => '2021-05-04 17:49:17',
                'updated_at' => '2021-05-04 17:49:17',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 629,
                'country_id' => 189,
                'locale' => 'tr',
                'name' => 'Slovak cumhuriyeti',
                'created_at' => '2021-05-04 17:49:17',
                'updated_at' => '2021-05-04 17:49:17',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 630,
                'country_id' => 190,
                'locale' => 'ar',
                'name' => 'سلوفينيا',
                'created_at' => '2021-05-04 17:50:14',
                'updated_at' => '2021-05-04 17:50:14',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 631,
                'country_id' => 190,
                'locale' => 'tr',
                'name' => 'Slovenya',
                'created_at' => '2021-05-04 17:50:14',
                'updated_at' => '2021-05-04 17:50:14',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 632,
                'country_id' => 191,
                'locale' => 'ar',
                'name' => 'جزر سليمان',
                'created_at' => '2021-05-04 17:50:43',
                'updated_at' => '2021-05-04 17:50:43',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 633,
                'country_id' => 191,
                'locale' => 'tr',
                'name' => 'Solomon Adaları',
                'created_at' => '2021-05-04 17:50:43',
                'updated_at' => '2021-05-04 17:50:43',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 634,
                'country_id' => 192,
                'locale' => 'ar',
                'name' => 'الصومال',
                'created_at' => '2021-05-04 17:51:26',
                'updated_at' => '2021-05-04 17:51:26',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 635,
                'country_id' => 192,
                'locale' => 'tr',
                'name' => 'Somali',
                'created_at' => '2021-05-04 17:51:26',
                'updated_at' => '2021-05-04 17:51:26',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 636,
                'country_id' => 193,
                'locale' => 'ar',
                'name' => 'جنوب أفريقيا',
                'created_at' => '2021-05-04 17:51:56',
                'updated_at' => '2021-05-04 17:51:56',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 637,
                'country_id' => 193,
                'locale' => 'tr',
                'name' => 'Güney Afrika',
                'created_at' => '2021-05-04 17:51:56',
                'updated_at' => '2021-05-04 17:51:56',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 639,
                'country_id' => 194,
                'locale' => 'tr',
                'name' => 'Güney Georgia',
                'created_at' => '2021-05-04 17:52:50',
                'updated_at' => '2021-05-04 17:52:50',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 640,
                'country_id' => 195,
                'locale' => 'ar',
                'name' => 'إسبانيا',
                'created_at' => '2021-05-04 17:53:29',
                'updated_at' => '2021-05-04 17:53:29',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 641,
                'country_id' => 195,
                'locale' => 'tr',
                'name' => 'ispanya',
                'created_at' => '2021-05-04 17:53:29',
                'updated_at' => '2021-05-04 17:53:29',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 642,
                'country_id' => 196,
                'locale' => 'ar',
                'name' => 'سيريلانكا',
                'created_at' => '2021-05-04 17:53:57',
                'updated_at' => '2021-05-04 17:53:57',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 643,
                'country_id' => 196,
                'locale' => 'tr',
                'name' => 'Sri Lanka',
                'created_at' => '2021-05-04 17:53:57',
                'updated_at' => '2021-05-04 17:53:57',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 644,
                'country_id' => 197,
                'locale' => 'ar',
                'name' => 'سانت هيلانة',
                'created_at' => '2021-05-04 17:54:33',
                'updated_at' => '2021-05-04 17:54:33',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 645,
                'country_id' => 197,
                'locale' => 'tr',
                'name' => 'St. Helena',
                'created_at' => '2021-05-04 17:54:33',
                'updated_at' => '2021-05-04 17:54:33',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 646,
                'country_id' => 198,
                'locale' => 'ar',
                'name' => 'سانت بيير وميكلون',
                'created_at' => '2021-05-04 17:55:11',
                'updated_at' => '2021-05-04 17:55:11',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 647,
                'country_id' => 198,
                'locale' => 'tr',
                'name' => 'St. Pierre ve Miquelon',
                'created_at' => '2021-05-04 17:55:11',
                'updated_at' => '2021-05-04 17:55:11',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 648,
                'country_id' => 199,
                'locale' => 'ar',
                'name' => 'السودان',
                'created_at' => '2021-05-04 17:55:52',
                'updated_at' => '2021-05-04 17:55:52',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 649,
                'country_id' => 199,
                'locale' => 'tr',
                'name' => 'Sudan',
                'created_at' => '2021-05-04 17:55:52',
                'updated_at' => '2021-05-04 17:55:52',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 650,
                'country_id' => 200,
                'locale' => 'ar',
                'name' => 'سورينام',
                'created_at' => '2021-05-04 17:56:30',
                'updated_at' => '2021-05-04 17:56:30',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 651,
                'country_id' => 200,
                'locale' => 'tr',
                'name' => 'Surinam',
                'created_at' => '2021-05-04 17:56:30',
                'updated_at' => '2021-05-04 17:56:30',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 652,
                'country_id' => 201,
                'locale' => 'ar',
                'name' => 'جزر سفالبارد وجان ماين',
                'created_at' => '2021-05-04 17:57:13',
                'updated_at' => '2021-05-04 17:57:13',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 653,
                'country_id' => 201,
                'locale' => 'tr',
                'name' => 'Svalbard ve Jan Mayen Adaları',
                'created_at' => '2021-05-04 17:57:13',
                'updated_at' => '2021-05-04 17:57:13',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 654,
                'country_id' => 202,
                'locale' => 'ar',
                'name' => 'سوازيلاند',
                'created_at' => '2021-05-04 17:58:23',
                'updated_at' => '2021-05-04 17:58:23',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 655,
                'country_id' => 202,
                'locale' => 'tr',
                'name' => 'Svaziland',
                'created_at' => '2021-05-04 17:58:23',
                'updated_at' => '2021-05-04 17:58:23',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 656,
                'country_id' => 203,
                'locale' => 'ar',
                'name' => 'السويد',
                'created_at' => '2021-05-04 17:58:52',
                'updated_at' => '2021-05-04 17:58:52',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 657,
                'country_id' => 203,
                'locale' => 'tr',
                'name' => 'İsveç',
                'created_at' => '2021-05-04 17:58:52',
                'updated_at' => '2021-05-04 17:58:52',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 658,
                'country_id' => 204,
                'locale' => 'ar',
                'name' => 'سويسرا',
                'created_at' => '2021-05-04 17:59:18',
                'updated_at' => '2021-05-04 17:59:18',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 659,
                'country_id' => 204,
                'locale' => 'tr',
                'name' => 'İsviçre',
                'created_at' => '2021-05-04 17:59:18',
                'updated_at' => '2021-05-04 17:59:18',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 660,
                'country_id' => 205,
                'locale' => 'ar',
                'name' => 'الجمهورية العربية السورية',
                'created_at' => '2021-05-04 17:59:43',
                'updated_at' => '2021-05-04 17:59:43',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 661,
                'country_id' => 205,
                'locale' => 'tr',
                'name' => 'Suriye Arap Cumhuriyeti',
                'created_at' => '2021-05-04 17:59:43',
                'updated_at' => '2021-05-04 17:59:43',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 662,
                'country_id' => 206,
                'locale' => 'ar',
                'name' => 'تايوان',
                'created_at' => '2021-05-04 18:00:10',
                'updated_at' => '2021-05-04 18:00:10',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 663,
                'country_id' => 206,
                'locale' => 'tr',
                'name' => 'Tayvan',
                'created_at' => '2021-05-04 18:00:10',
                'updated_at' => '2021-05-04 18:00:10',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 664,
                'country_id' => 207,
                'locale' => 'ar',
                'name' => 'طاجيكستان',
                'created_at' => '2021-05-04 18:00:37',
                'updated_at' => '2021-05-04 18:00:37',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 665,
                'country_id' => 207,
                'locale' => 'tr',
                'name' => 'Tacikistan',
                'created_at' => '2021-05-04 18:00:37',
                'updated_at' => '2021-05-04 18:00:37',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 666,
                'country_id' => 208,
                'locale' => 'ar',
                'name' => 'جمهورية تنزانيا المتحدة',
                'created_at' => '2021-05-04 18:01:09',
                'updated_at' => '2021-05-04 18:01:09',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 667,
                'country_id' => 208,
                'locale' => 'tr',
                'name' => 'Tanzanya Birleşik Cumhuriyeti',
                'created_at' => '2021-05-04 18:01:09',
                'updated_at' => '2021-05-04 18:01:09',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 668,
                'country_id' => 209,
                'locale' => 'ar',
                'name' => 'تايلاند',
                'created_at' => '2021-05-04 18:01:35',
                'updated_at' => '2021-05-04 18:01:35',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 669,
                'country_id' => 209,
                'locale' => 'tr',
                'name' => 'Tayland',
                'created_at' => '2021-05-04 18:01:35',
                'updated_at' => '2021-05-04 18:01:35',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 670,
                'country_id' => 210,
                'locale' => 'ar',
                'name' => 'توجو',
                'created_at' => '2021-05-04 18:02:03',
                'updated_at' => '2021-05-04 18:02:03',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 671,
                'country_id' => 210,
                'locale' => 'tr',
                'name' => 'Gitmek',
                'created_at' => '2021-05-04 18:02:03',
                'updated_at' => '2021-05-04 18:02:03',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 672,
                'country_id' => 211,
                'locale' => 'ar',
                'name' => 'توكيلاو',
                'created_at' => '2021-05-04 18:02:50',
                'updated_at' => '2021-05-04 18:02:50',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 673,
                'country_id' => 211,
                'locale' => 'tr',
                'name' => 'Tokelau',
                'created_at' => '2021-05-04 18:02:50',
                'updated_at' => '2021-05-04 18:02:50',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 674,
                'country_id' => 212,
                'locale' => 'ar',
                'name' => 'تونغا',
                'created_at' => '2021-05-04 18:03:48',
                'updated_at' => '2021-05-04 18:03:48',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 675,
                'country_id' => 212,
                'locale' => 'tr',
                'name' => 'Tonga',
                'created_at' => '2021-05-04 18:03:48',
                'updated_at' => '2021-05-04 18:03:48',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 676,
                'country_id' => 213,
                'locale' => 'ar',
                'name' => 'ترينداد وتوباغو',
                'created_at' => '2021-05-04 19:42:45',
                'updated_at' => '2021-05-04 19:42:45',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 677,
                'country_id' => 213,
                'locale' => 'tr',
                'name' => 'Trinidad ve Tobago',
                'created_at' => '2021-05-04 19:42:45',
                'updated_at' => '2021-05-04 19:42:45',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 678,
                'country_id' => 214,
                'locale' => 'ar',
                'name' => 'تونس',
                'created_at' => '2021-05-04 19:43:08',
                'updated_at' => '2021-05-04 19:43:08',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 679,
                'country_id' => 214,
                'locale' => 'tr',
                'name' => 'Tunus',
                'created_at' => '2021-05-04 19:43:08',
                'updated_at' => '2021-05-04 19:43:08',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 680,
                'country_id' => 215,
                'locale' => 'ar',
                'name' => 'تركيا',
                'created_at' => '2021-05-04 19:43:35',
                'updated_at' => '2021-05-04 19:43:35',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 681,
                'country_id' => 215,
                'locale' => 'tr',
                'name' => 'Türkiye',
                'created_at' => '2021-05-04 19:43:35',
                'updated_at' => '2021-05-04 19:43:35',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 682,
                'country_id' => 216,
                'locale' => 'ar',
                'name' => 'تركمانستان',
                'created_at' => '2021-05-04 19:44:05',
                'updated_at' => '2021-05-04 19:44:05',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 683,
                'country_id' => 216,
                'locale' => 'tr',
                'name' => 'Türkmenistan',
                'created_at' => '2021-05-04 19:44:05',
                'updated_at' => '2021-05-04 19:44:05',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 684,
                'country_id' => 217,
                'locale' => 'ar',
                'name' => 'جزر تركس وكايكوس',
                'created_at' => '2021-05-04 19:44:29',
                'updated_at' => '2021-05-04 19:44:29',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 685,
                'country_id' => 217,
                'locale' => 'tr',
                'name' => 'Turks ve Caicos Adaları',
                'created_at' => '2021-05-04 19:44:29',
                'updated_at' => '2021-05-04 19:44:29',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 686,
                'country_id' => 218,
                'locale' => 'ar',
                'name' => 'توفالو',
                'created_at' => '2021-05-04 19:44:49',
                'updated_at' => '2021-05-04 19:44:49',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 687,
                'country_id' => 218,
                'locale' => 'tr',
                'name' => 'Tuvalu',
                'created_at' => '2021-05-04 19:44:49',
                'updated_at' => '2021-05-04 19:44:49',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 688,
                'country_id' => 219,
                'locale' => 'ar',
                'name' => 'أوغندا',
                'created_at' => '2021-05-04 22:53:21',
                'updated_at' => '2021-05-04 22:53:21',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 689,
                'country_id' => 219,
                'locale' => 'tr',
                'name' => 'Uganda',
                'created_at' => '2021-05-04 22:53:21',
                'updated_at' => '2021-05-04 22:53:21',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 690,
                'country_id' => 220,
                'locale' => 'ar',
                'name' => 'أوكرانيا',
                'created_at' => '2021-05-04 22:55:25',
                'updated_at' => '2021-05-04 22:55:25',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 691,
                'country_id' => 220,
                'locale' => 'tr',
                'name' => 'Ukrayna',
                'created_at' => '2021-05-04 22:55:25',
                'updated_at' => '2021-05-04 22:55:25',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 692,
                'country_id' => 221,
                'locale' => 'ar',
                'name' => 'الإمارات العربية المتحدة',
                'created_at' => '2021-05-04 22:56:09',
                'updated_at' => '2021-05-04 22:56:09',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 693,
                'country_id' => 221,
                'locale' => 'tr',
                'name' => 'Birleşik Arap Emirlikleri',
                'created_at' => '2021-05-04 22:56:09',
                'updated_at' => '2021-05-04 22:56:09',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 694,
                'country_id' => 222,
                'locale' => 'ar',
                'name' => 'المملكة المتحدة',
                'created_at' => '2021-05-04 22:56:35',
                'updated_at' => '2021-05-04 22:56:35',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 695,
                'country_id' => 222,
                'locale' => 'tr',
                'name' => 'Birleşik Krallık',
                'created_at' => '2021-05-04 22:56:35',
                'updated_at' => '2021-05-04 22:56:35',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 696,
                'country_id' => 223,
                'locale' => 'ar',
                'name' => 'الولايات المتحدة الأمريكية',
                'created_at' => '2021-05-04 22:57:11',
                'updated_at' => '2021-05-04 22:57:11',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 697,
                'country_id' => 223,
                'locale' => 'tr',
                'name' => 'Amerika Birleşik Devletleri',
                'created_at' => '2021-05-04 22:57:11',
                'updated_at' => '2021-05-04 22:57:11',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 698,
                'country_id' => 224,
                'locale' => 'ar',
                'name' => 'جزر الولايات المتحدة',
                'created_at' => '2021-05-04 22:58:05',
                'updated_at' => '2021-05-04 22:58:05',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 699,
                'country_id' => 224,
                'locale' => 'tr',
                'name' => 'Amerika Birleşik Devletleri adaları',
                'created_at' => '2021-05-04 22:58:05',
                'updated_at' => '2021-05-04 22:58:05',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 700,
                'country_id' => 225,
                'locale' => 'ar',
                'name' => 'أوروغواي',
                'created_at' => '2021-05-04 22:58:25',
                'updated_at' => '2021-05-04 22:58:25',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 701,
                'country_id' => 225,
                'locale' => 'tr',
                'name' => 'Uruguay',
                'created_at' => '2021-05-04 22:58:25',
                'updated_at' => '2021-05-04 22:58:25',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 702,
                'country_id' => 226,
                'locale' => 'ar',
                'name' => 'أوزبكستان',
                'created_at' => '2021-05-04 22:58:48',
                'updated_at' => '2021-05-04 22:58:48',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 703,
                'country_id' => 226,
                'locale' => 'tr',
                'name' => 'Özbekistan',
                'created_at' => '2021-05-04 22:58:48',
                'updated_at' => '2021-05-04 22:58:48',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 704,
                'country_id' => 227,
                'locale' => 'ar',
                'name' => 'فانواتو',
                'created_at' => '2021-05-04 22:59:13',
                'updated_at' => '2021-05-04 22:59:13',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 705,
                'country_id' => 227,
                'locale' => 'tr',
                'name' => 'Vanuatu',
                'created_at' => '2021-05-04 22:59:13',
                'updated_at' => '2021-05-04 22:59:13',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 706,
                'country_id' => 228,
                'locale' => 'ar',
                'name' => 'دولة مدينة الفاتيكان',
                'created_at' => '2021-05-04 22:59:45',
                'updated_at' => '2021-05-04 22:59:45',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 707,
                'country_id' => 228,
                'locale' => 'tr',
                'name' => 'Vatikan Şehir Devleti',
                'created_at' => '2021-05-04 22:59:45',
                'updated_at' => '2021-05-04 22:59:45',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 708,
                'country_id' => 229,
                'locale' => 'ar',
                'name' => 'فنزويلا',
                'created_at' => '2021-05-04 23:00:07',
                'updated_at' => '2021-05-04 23:00:07',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 709,
                'country_id' => 229,
                'locale' => 'tr',
                'name' => 'Venezuela',
                'created_at' => '2021-05-04 23:00:07',
                'updated_at' => '2021-05-04 23:00:07',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 710,
                'country_id' => 230,
                'locale' => 'ar',
                'name' => 'فيتنام',
                'created_at' => '2021-05-04 23:00:43',
                'updated_at' => '2021-05-04 23:00:43',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 711,
                'country_id' => 230,
                'locale' => 'tr',
                'name' => 'Vietnam',
                'created_at' => '2021-05-04 23:00:43',
                'updated_at' => '2021-05-04 23:00:43',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 712,
                'country_id' => 231,
                'locale' => 'ar',
            'name' => 'جزر فيرجن (البريطانية)',
                'created_at' => '2021-05-04 23:01:33',
                'updated_at' => '2021-05-04 23:01:33',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 713,
                'country_id' => 231,
                'locale' => 'tr',
            'name' => 'Virgin Adaları (İngiliz)',
                'created_at' => '2021-05-04 23:01:33',
                'updated_at' => '2021-05-04 23:01:33',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 714,
                'country_id' => 232,
                'locale' => 'ar',
            'name' => 'جزر فيرجن (الولايات المتحدة)',
                'created_at' => '2021-05-04 23:02:01',
                'updated_at' => '2021-05-04 23:02:01',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 715,
                'country_id' => 232,
                'locale' => 'tr',
            'name' => 'Virgin Adaları (ABD)',
                'created_at' => '2021-05-04 23:02:01',
                'updated_at' => '2021-05-04 23:02:01',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 716,
                'country_id' => 233,
                'locale' => 'ar',
                'name' => 'جزر واليس وفوتونا',
                'created_at' => '2021-05-05 01:55:43',
                'updated_at' => '2021-05-05 01:55:43',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 717,
                'country_id' => 233,
                'locale' => 'tr',
                'name' => 'Wallis ve Futuna Adaları',
                'created_at' => '2021-05-05 01:55:43',
                'updated_at' => '2021-05-05 01:55:43',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 718,
                'country_id' => 234,
                'locale' => 'ar',
                'name' => 'الصحراء الغربية',
                'created_at' => '2021-05-05 01:56:20',
                'updated_at' => '2021-05-05 01:56:20',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 719,
                'country_id' => 234,
                'locale' => 'tr',
                'name' => 'Batı Sahra',
                'created_at' => '2021-05-05 01:56:20',
                'updated_at' => '2021-05-05 01:56:20',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 720,
                'country_id' => 235,
                'locale' => 'ar',
                'name' => 'اليمن',
                'created_at' => '2021-05-05 01:57:11',
                'updated_at' => '2021-05-05 01:57:11',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 721,
                'country_id' => 235,
                'locale' => 'tr',
                'name' => 'Yemen',
                'created_at' => '2021-05-05 01:57:11',
                'updated_at' => '2021-05-05 01:57:11',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 722,
                'country_id' => 237,
                'locale' => 'ar',
                'name' => 'جمهورية الكونغو الديمقراطية',
                'created_at' => '2021-05-05 01:57:51',
                'updated_at' => '2021-05-05 01:57:51',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 723,
                'country_id' => 237,
                'locale' => 'tr',
                'name' => 'Kongo Demokratik Cumhuriyeti',
                'created_at' => '2021-05-05 01:57:51',
                'updated_at' => '2021-05-05 01:57:51',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 724,
                'country_id' => 238,
                'locale' => 'ar',
                'name' => 'زامبيا',
                'created_at' => '2021-05-05 01:58:15',
                'updated_at' => '2021-05-05 01:58:15',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 725,
                'country_id' => 238,
                'locale' => 'tr',
                'name' => 'Zambiya',
                'created_at' => '2021-05-05 01:58:15',
                'updated_at' => '2021-05-05 01:58:15',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 726,
                'country_id' => 239,
                'locale' => 'ar',
                'name' => 'زيمبابوي',
                'created_at' => '2021-05-05 01:58:40',
                'updated_at' => '2021-05-05 01:58:40',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 727,
                'country_id' => 239,
                'locale' => 'tr',
                'name' => 'Zimbabve',
                'created_at' => '2021-05-05 01:58:40',
                'updated_at' => '2021-05-05 01:58:40',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 728,
                'country_id' => 242,
                'locale' => 'ar',
                'name' => 'الجبل الأسود',
                'created_at' => '2021-05-05 01:59:14',
                'updated_at' => '2021-05-05 01:59:14',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 729,
                'country_id' => 242,
                'locale' => 'tr',
                'name' => 'Karadağ',
                'created_at' => '2021-05-05 01:59:14',
                'updated_at' => '2021-05-05 01:59:14',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 730,
                'country_id' => 243,
                'locale' => 'ar',
                'name' => 'صربيا',
                'created_at' => '2021-05-05 01:59:41',
                'updated_at' => '2021-05-05 01:59:41',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 731,
                'country_id' => 243,
                'locale' => 'tr',
                'name' => 'Sırbistan',
                'created_at' => '2021-05-05 01:59:41',
                'updated_at' => '2021-05-05 01:59:41',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 732,
                'country_id' => 244,
                'locale' => 'ar',
                'name' => 'جزر آلاند',
                'created_at' => '2021-05-05 02:01:05',
                'updated_at' => '2021-05-05 02:01:05',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 733,
                'country_id' => 244,
                'locale' => 'tr',
                'name' => 'Aaland Adaları',
                'created_at' => '2021-05-05 02:01:05',
                'updated_at' => '2021-05-05 02:01:05',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 734,
                'country_id' => 245,
                'locale' => 'ar',
                'name' => 'بونير وسانت يوستاتيوس وسابا',
                'created_at' => '2021-05-05 02:01:35',
                'updated_at' => '2021-05-05 02:01:35',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 735,
                'country_id' => 245,
                'locale' => 'tr',
                'name' => 'Bonaire, Sint Eustatius ve Saba',
                'created_at' => '2021-05-05 02:01:35',
                'updated_at' => '2021-05-05 02:01:35',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 736,
                'country_id' => 246,
                'locale' => 'ar',
                'name' => 'كوراكاو',
                'created_at' => '2021-05-05 02:02:01',
                'updated_at' => '2021-05-05 02:02:01',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 737,
                'country_id' => 246,
                'locale' => 'tr',
                'name' => 'Curacao',
                'created_at' => '2021-05-05 02:02:01',
                'updated_at' => '2021-05-05 02:02:01',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 738,
                'country_id' => 247,
                'locale' => 'ar',
                'name' => 'فلسطين',
                'created_at' => '2021-05-05 02:02:39',
                'updated_at' => '2021-05-05 02:02:39',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 739,
                'country_id' => 247,
                'locale' => 'tr',
                'name' => 'Filistin Arazisi, İşgal altında',
                'created_at' => '2021-05-05 02:02:39',
                'updated_at' => '2021-05-05 02:02:39',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 740,
                'country_id' => 248,
                'locale' => 'ar',
                'name' => 'جنوب السودان',
                'created_at' => '2021-05-05 02:03:14',
                'updated_at' => '2021-05-05 02:03:14',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 741,
                'country_id' => 248,
                'locale' => 'tr',
                'name' => 'Güney Sudan',
                'created_at' => '2021-05-05 02:03:14',
                'updated_at' => '2021-05-05 02:03:14',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 742,
                'country_id' => 249,
                'locale' => 'ar',
                'name' => 'سانت بارتيليمي',
                'created_at' => '2021-05-05 02:03:56',
                'updated_at' => '2021-05-05 02:03:56',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 743,
                'country_id' => 249,
                'locale' => 'tr',
                'name' => 'St. Barthelemy',
                'created_at' => '2021-05-05 02:03:56',
                'updated_at' => '2021-05-05 02:03:56',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 744,
                'country_id' => 250,
                'locale' => 'ar',
            'name' => 'سانت مارتن (الجزء الفرنسي)',
                'created_at' => '2021-05-05 02:04:27',
                'updated_at' => '2021-05-05 02:04:27',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 745,
                'country_id' => 250,
                'locale' => 'tr',
            'name' => 'St. Martin (Fransız kısmı)',
                'created_at' => '2021-05-05 02:04:27',
                'updated_at' => '2021-05-05 02:04:27',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 746,
                'country_id' => 251,
                'locale' => 'ar',
                'name' => 'جزر الكناري',
                'created_at' => '2021-05-05 02:04:51',
                'updated_at' => '2021-05-05 02:04:51',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 747,
                'country_id' => 251,
                'locale' => 'tr',
                'name' => 'Kanarya Adaları',
                'created_at' => '2021-05-05 02:04:51',
                'updated_at' => '2021-05-05 02:04:51',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 748,
                'country_id' => 252,
                'locale' => 'ar',
            'name' => 'جزيرة أسنسيون (البريطانية)',
                'created_at' => '2021-05-05 02:09:00',
                'updated_at' => '2021-05-05 02:09:00',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 749,
                'country_id' => 252,
                'locale' => 'tr',
            'name' => 'Yükseliş Adası (İngiliz)',
                'created_at' => '2021-05-05 02:09:00',
                'updated_at' => '2021-05-05 02:09:00',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 751,
                'country_id' => 253,
                'locale' => 'tr',
                'name' => 'Kosova',
                'created_at' => '2021-05-05 02:09:41',
                'updated_at' => '2021-05-05 02:09:41',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 752,
                'country_id' => 256,
                'locale' => 'ar',
                'name' => 'غيرنسي',
                'created_at' => '2021-05-05 02:12:09',
                'updated_at' => '2021-05-05 02:12:09',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 753,
                'country_id' => 256,
                'locale' => 'tr',
                'name' => 'Guernsey',
                'created_at' => '2021-05-05 02:12:09',
                'updated_at' => '2021-05-05 02:12:09',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 754,
                'country_id' => 257,
                'locale' => 'ar',
                'name' => 'جيرسي',
                'created_at' => '2021-05-05 02:12:38',
                'updated_at' => '2021-05-05 02:12:38',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 755,
                'country_id' => 257,
                'locale' => 'tr',
                'name' => 'Jersey',
                'created_at' => '2021-05-05 02:12:38',
                'updated_at' => '2021-05-05 02:12:38',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}